<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U MOTORS</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/drop-zone.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="shortcut icon" href="img/main-logo.ico" type="image/x-icon">

</head>

<body>
    <div style="display: none;">
        <!-- <?php
                include 'connection.php';
                include 'functions.php';
                session_start();
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    if (isset($_POST['car_name'])) {
                        $car_name = $_POST['car_name'];
                        $car_model = $_POST['model'];
                        $car_caption = nl2br($_POST['caption']);

                        $car_price = $_POST['price'];
                        if (isset($_FILES['img'])) {
                            $file_name = $_FILES['img']['name'];
                            $file_tmp = $_FILES['img']['tmp_name'];
                            $file_type = $_FILES['img']['type'];
                            $file_ext = strtolower(end(explode('.', $file_name)));
                            $extensions = array("jpeg", "jpg", "png");

                            if (!in_array($file_ext, $extensions)) {
                                array_push($err, 'Extension not allowed, please choose a JPEG, JPG, or PNG file');
                            }
                            $upload_path = 'carimgs/' . imgName($file_ext);
                            if (!move_uploaded_file($file_tmp, $upload_path)) {
                                array_push($err, 'Error in uploading file');
                            } else {
                                $file_name = $upload_path;
                            }
                        }
                        if (!isset($file_name)) {
                            array_push($err, "an error in file name");
                        }
                    }
                }

                ?> -->
    </div>
    <div class="parent">
        <div id="loading">
            <div class="spinner"></div>
        </div>

        <nav class="navbar">
            <div>
                <ul>
                    <li><a class="chosen">home</a></li>
                    <li><a href="listings.php">listing</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="About.php">about us</a></li>
                </ul>
            </div>
            <div class="profile">
                <img src="<?php echo $_SESSION['profile']; ?>" alt="error" onclick="dropList();" style="cursor: pointer;border-radius: 50%;">
                <div class="drop-list">
                    <ul id="drop-list">
                        <li><a href="user_profile.php">profile</a></li>
                        <li>
                            <a>
                                <form action="user_profile.php" method="post" style="cursor: pointer;" name="logout_btn" onclick="_logout();">
                                    logout
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <input type="hidden" name="logout" value="1">
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="info-box glass right" id="info-box-right" onclick="open_right();">
                <h2 style="text-align: center; margin:10px ;">Feedback</h2>
                <iframe src="feedback.php" frameborder="0"></iframe>

                <div class="open-btn " id="open-btn">
                    <i class="fa-solid fa-caret-left" id="fa-caret-left"></i>
                </div>
            </div>
            <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST['add-car'])) {
                    if (count($err) === 0) {
                        $sql = $conn->prepare("INSERT INTO listings (name,model,caption,img,price) VALUES (?, ?, ?,?,?)");
                        $sql->bind_param("sssss" ,$car_name , $car_model,$car_caption,$file_name , $car_price);
                        if ($sql->execute()) {
                            echo '<div class="alert alert-success"id="alert-success" role="alert">Added successfully ! <i class="fa-solid fa-x" onclick="close_alert();"></i></div>';
                        }
                    } else {

                        echo '<div class="alert alert-danger" role="alert" id="alert-success" onclick="close_alert();">' . $err[1] . '
                            <i class="fa-solid fa-x" onclick="close_alert();"></i>
                            </div>';
                    }
                }
            }

            if (isset($_POST['delete-car'])) {
                $id = $_POST['car_num'];
                $query = "DELETE FROM listings WHERE car_num='$id'";
                $query_run = mysqli_query($conn, $query);
                if ($query_run) {
                    echo '<div class="alert alert-success" role="alert" id="alert-success">Deleted successfully ! <i class="fa-solid fa-x" onclick="close_alert();"></i></div>';
                } else {
                    echo '<div class="alert alert-warning" role="alert" id="alert-success">Data not deleted ! <i class="fa-solid fa-x" onclick="close_alert();"></i></div>';
                }
            }
            ?>

            <h1>Add a new car</h1>
            <div class="add-car">

                <form action="admin_profile.php" method="post" enctype="multipart/form-data">
                    <div class="car-info">
                        <label for="car_name">Car Name</label>
                        <input type="text" name="car_name" id="car_name">
                        <label for="model">Car Model</label>
                        <input type="text" name="model" id="model">
                        <label for="model">Car Price</label>
                        <input type="text" name="price" id="price">
                        <textarea name="caption" placeholder="Car caption"></textarea>
                    </div>
                    <div>
                        <div class="drop-zone">
                            <span class="drop-zone__prompt">Drop file here or click to upload</span>
                            <input type="file" name="img" class="drop-zone__input">
                        </div>
                        <input type="submit" value="Add The Car" class="btn btn-primary btn-lg" name="add-car">
                    </div>
                </form>
            </div>
            <h1>Delete car</h1>
            <div class="delete-car">
                <form action="admin_profile.php" method="post">
                    <input type="text" name="car_num" class="car-num" placeholder="car number">
                    <input type="submit" value="Delete car" class="btn btn-danger" name="delete-car">
                </form>
            </div>
        </div>
        <script src="js/ourframe.js"></script>
        <script src="js/drop-zone.js"></script>
</body>

</html>