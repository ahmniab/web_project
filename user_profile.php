<?php

session_start();

// if (!isset($_SESSION['username'])){
//     header('location: user_profile.php');
//     exit();
// }

// echo "<pre>";

// print_r ($_SESSION);

// echo "</pre>";

$username = $_SESSION['user_name'];
$email = $_SESSION['email'];
// $phone = $_SESSION ['phone'];
$name = $_SESSION['name'];
$profile = $_SESSION['profile'];

// Logout button logic
if (isset($_POST["logout"])) {

    $_SESSION = array();


    session_destroy();

    header("location: index.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/ourframe.css">
</head>

<body>

    <script src="js/ourframe.js"></script>
    <div class="drop-zone glass" id="drop-zone" style="display: none;">
        <form name="img" action="index.html">
            <i class="fa-solid fa-cloud-arrow-up"></i>
            <span class="drop-zone__prompt">Drop file here or click to upload</span>
            <input type="file" name="userimg" class="drop-zone__input">
        </form>
    </div>
    <div class="parent">
        <nav class="navbar">
            <div>
                <ul>
                    <li><a class="chosen">home</a></li>
                    <li><a href="listings.php">listing</a></li>
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="About.html">about us</a></li>
                </ul>
            </div>
            <!-- <a class="button"><button type="button" class="btn btn-outline-light"><i class="fa-solid fa-people-group"></i>Our Team</button></a> -->
        </nav>

        <div class="container">
            <div id="loading">
                <div class="spinner"></div>
            </div>
            <div class="info-box glass">
                <div class="photo-box">
                    <img src="img/blank-profile.png">
                    <div class="glass" onclick="toggleVisibility()"><i class="fa-regular fa-pen-to-square"></i></div>
                    <h2><?php echo $_SESSION['name']; ?></h2>
                </div>
                <h3>Profile Information</h3>
                <div class="edite">
                    <ul>
                        <li>Username:</li>
                        <li>Name:</li>
                        <li>Email:</li>
                        <li>Phone:</li>
                    </ul>
                    <div class="info">
                        <input type="text" readonly value=<?php echo $_SESSION['user_name']; ?>>
                        <input type="text" readonly value=<?php echo $_SESSION['name']; ?>>
                        <input type="text" readonly value=<?php echo $_SESSION['email']; ?>>
                        <input type="text" readonly value="phone">
                    </div>
                </div>
                <button>Edit Profile</button>
                <form action="user_profile.php" method="post">
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/ourframe.js"></script>
</body>

</html>