<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vendor</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="stylesheet" href="css/drop-zone.css">
    <link rel="stylesheet" href="css/vandor.css">

</head>

<body>
    <?php
    if (isset($_FILES['photo'])) {
        $file_name = $_FILES['photo']['name'];
        $file_size = $_FILES['photo']['size'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        $file_type = $_FILES['photo']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['photo']['name'])));

        $extensions = array("jpeg", "jpg", "png");

        if (!in_array($file_ext, $extensions)) {
            echo "Extension not allowed, please choose a JPEG, JPG, or PNG file.";
            exit();
        }

        if ($file_size > 2097152) {
            echo 'File size must be less than 2 MB';
            exit();
        }

        $upload_path = 'file/' . $file_name;

        if (move_uploaded_file($file_tmp, $upload_path)) {
            echo "Success! Your file has been uploaded.";
        } else {
            echo "Error uploading file.";
        }
    }

    ?>
    <div class="parent">
        <div class="drop-zone glass " id="drop-zone" style="display: none;">
            <form name="img" action="index.html">
                <i class="fa-solid fa-cloud-arrow-up"></i>
                <span class="drop-zone__prompt">Drop file here or click to upload</span>
                <input type="file" name="userimg" class="drop-zone__input">
            </form>
        </div>
        <nav class="navbar">
            <div>
                <ul>
                    <li><a class="chosen">home</a></li>
                    <li><a href="listings.html">listing</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="About.html">about us</a></li>
                </ul>
            </div>

        </nav>
        <div class="info-box glass left" id="info-box-left" onclick="open_left();">
            <div class="open-btn glass" id="open-btn"><i class="fa-solid fa-caret-right" id="fa-caret-right"></i></div>
            <div class="photo-box">
                <img src="img/blank-profile.png">
                <div class="glass"><i class="fa-regular fa-pen-to-square"></i></div>
                <h2>Ahmed hamed</h2>
            </div>
            <div class="edite">
                <ul>
                    <li>Username:</li>
                    <li>Name:</li>
                    <li>Email:</li>
                    <li>Phone:</li>
                </ul>
                <div class="info">
                    <input type="text" readonly value="Username">
                    <input type="text" readonly value="name">
                    <input type="text" readonly value="email">
                    <input type="text" readonly value="password">
                </div>
            </div>
            <button onclick="toggleVisibility();">Edit Profile</button>
        </div>
        <div class="info-box glass right" id="info-box-right" onclick="open_right();">
            <h1>feed back page will appear here using iframe 👌😉</h1>
            <h4>==> Ahmed Nabil</h4>

            <div class="open-btn glass" id="open-btn">
                <i class="fa-solid fa-caret-left" id="fa-caret-left"></i>
            </div>


        </div>
        <div>

            <form action="admin_profile.php" method="post">
                <input type="text" name="car_name">
                <input type="text" name="model">
                <div class="drop-zone">
                    <span class="drop-zone__prompt">Drop file here or click to upload</span>
                    <input type="file" name="img" class="drop-zone__input">
                </div>
                <textarea name="caption" id=""></textarea>
            </form>
        </div>
        <script>
            function open_left() {
                if (document.getElementById("info-box-left").style.transform == "translateX(90%)") {
                    document.getElementById("info-box-left").style.transform = "translateX(0%)";
                    document.getElementById("fa-caret-right").style.transform = "rotateY(0deg)";
                } else {
                    document.getElementById("info-box-left").style.transform = "translateX(90%)";
                    document.getElementById("fa-caret-right").style.transform = "rotateY(-180deg)";
                }
            }

            function open_right() {
                if (document.getElementById("info-box-right").style.transform == "translateX(-90%)") {

                    document.getElementById("info-box-right").style.transform = "translateX(0%)";
                    document.getElementById("fa-caret-left").style.transform = "rotateY(0deg)";

                } else {

                    document.getElementById("info-box-right").style.transform = "translateX(-90%)";
                    document.getElementById("fa-caret-left").style.transform = "rotateY(-180deg)";

                }
            }
        </script>
        <script src="js/ourframe.js"></script>
        <script src="js/drop-zone.js"></script>
</body>

</html>