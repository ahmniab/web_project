<?php

include 'connection.php';

session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $UserName = strtolower($_POST['user_name']);      //['username'] is the name of the input in form
    $PassWord = $_POST['password'];                   //['password'] is the name of the input in form

    $userNameInfo = $conn->prepare("select * from users where user_name = '" . $UserName . "'");
    $userNameInfo->execute();
    $userNameResult = $userNameInfo->get_result();
    $row = $userNameResult->fetch_assoc();


    if ($UserName == $row['user_name']) {


        if ($PassWord == $row['password']) {
            $_SESSION = $row;
            if (isset($_POST['remember_me'])) {
                if ($_POST['remember_me'] === "true") {
                    setcookie("user_name", $UserName, time() + 60 * 60 * 24 * 30);
                }
            }
        } else {
            $wrongMsg = 'Wrong password';
        }
    } else {
        $wrongMsg = 'User name does not exist';
    }
}

if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin']) {
        header('Location: admin_profile.php');
        exit;
    } else {
        header('Location: user_profile.php');
        exit;
    }
} elseif (isset($_COOKIE['user_name'])) {
    $userInCookie = $_COOKIE['user_name'];
    $userNameInfo = $conn->prepare("select * from users where user_name = '$userInCookie';");
    $userNameInfo->execute();
    $userNameResult = $userNameInfo->get_result();
    $_SESSION = $userNameResult->fetch_assoc();
    header('Location: index.php');
    exit;
}







?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign in </title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="shortcut icon" href="img/main-logo.ico" type="image/x-icon">
</head>

<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>
    <div class="parent">

        <form action="signin.php" method="post">
            <div class="box">

                <div class="back-home">
                    <a href="index.php"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <h2>Sign in</h2>
                <?php

                if (isset($wrongMsg)) {
                    echo '<div class="alert alert-danger" role="alert" id="alert"><i class="fa-solid fa-circle-exclamation fa-beat"></i>' . $wrongMsg . '</div>';
                }

                ?>
                <input class="username" type="text" placeholder="Username" name="user_name">
                <input class="pass" type="password" placeholder="Password" name="password">
                <div class="checkbox">
                    <input type="checkbox" name="remember_me" id="remember_me" value="true">
                    <label for="remember_me">Remember me</label>
                </div>
                <input class="sign-in" type="submit" value="sign in">
                <div class="signup">
                    <p>Dont have an account?</p><a class="new" href="signup.php">Sign up</a>
                </div>
            </div>
        </form>
    </div>
    <script src="js/ourframe.js"></script>
</body>

</html>

<?php
