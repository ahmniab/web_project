<?php

session_start();

// if (!isset($_SESSION['username'])){
//     header('location: user_profile.php');
//     exit();
// }

// echo "<pre>";

// print_r ($_SESSION);

// Logout button logic
if (isset($_POST["logout"])) {

    if (isset($_COOKIE["user_name"])) {

        setcookie("user_name", "", time() - 60 * 60 * 24 * 30);
    }

    $_SESSION = array();
    session_destroy();

    header("location: index.php");
    exit();
} elseif (isset($_POST["edit"])) {

    header("location: edit_profile.php");
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
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="shortcut icon" href="img/main-logo.ico" type="image/x-icon">
</head>

<body>

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
            <img src="<?php echo $_SESSION['profile']; ?>" alt="error" onclick="dropList();" style="cursor: pointer; border-radius: 50%;">
                <div class="drop-list">
                    <ul id="drop-list">
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
        
        <div class="parent">
            
            <div class="container">
                <div id="loading">
                <div class="spinner"></div>
            </div>
            <div class="info-box">
                <div class="photo-box">
                    <img src="<?php echo $_SESSION['profile']; ?>">
                    <h2><?php echo $_SESSION['name']; ?></h2>
                </div>
                <h3>Profile Information</h3>
                <div class="edit">
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
                <form action="user_profile.php" method="post">
                    <button type="submit" class="btn btn-primary" name="edit">Edit Profile</button>
                    <button type="submit" class="btn btn-secondary" name="logout">Logout</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/ourframe.js"></script>
    <script src="js/drop-zone.js"></script>
</body>

</html>