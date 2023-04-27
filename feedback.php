<?php
require_once 'connection.php';
session_start();
$sql = "SELECT * FROM feedback";
$select_prods = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="stylesheet" href="css/feedback.css">
    <link rel="shortcut icon" href="img/main-logo.ico" type="image/x-icon">
    <title>feedback</title>
</head>

<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>
    <nav class="navbar" id="navbar">
        <div>
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="listings.php">listing</a></li>
                <li><a class="chosen">contact</a></li>
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
    <nav class="nav-btn" id="nav-btn">
        <ul class="first">
            <li><a><i class="fa-solid fa-house"></i></a></li>
            <li><a><i class="fa-solid fa-car"></i></a></li>
            <li><a><i class="fa-solid fa-headset"></i></a></li>
            <li><a><i class="fa-solid fa-people-group"></i></a></li>

        </ul>
        <div>
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="listings.php">listing</a></li>
                <li><a class="chosen">contact</a></li>
                <li><a href="About.php">about us</a></li>
            </ul>
        </div>
    </nav>
    <span id="up-btn" onclick="scrollToTop();">
        <i class="fa-solid fa-angles-up"></i>
    </span>
    <h2>Feedback</h2>
    <div class="container">
        <?php
        while ($row = mysqli_fetch_assoc($select_prods)) {
        ?>
            <div class="box">
                <h4>Name : <?php echo $row["name"] ?></h4>
                <h4>Email : <?php echo $row["email"] ?></h4>
                <h4>Phone : <?php echo $row["phone"] ?></h4>
                <h4>subject : <?php echo $row["subject"] ?></h4>
                <p>
                    <?php echo $row["massege"] ?>
                </p>
            </div>
        <?php
        }
        ?>
    </div>

</body>
<script src="js/ourframe.js"></script>
<script src="js/listngs.js"></script>

</html>