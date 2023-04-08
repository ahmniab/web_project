<?php

include 'connection.php';
session_start();
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
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
</head>

<body>
    <div id="loading">
        <div class="spinner"></div>
      </div>
    <div class="parent">
        <form action="indx.htmle">
            <div class="box glass">
                <div class="back-home glass">
                    <div><i class="fa-solid fa-house"></i>
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                </div>
                <h2>Sign in</h2>
                <input class="username" type="text" placeholder="Username" required>
                <input class="pass" type="password" placeholder="Password" required>
                <div class="checkbox" >
                <input type="checkbox" name="remember_me" id="remember_me">
                <label for="remember_me">Remember me</label>
                </div>
                <input class="sign-in" type="submit" value="sign in">
                <div class="signup">
                    <p>Dont have an account?</p><a class="new" href="signup.html">Sign up</a>
                </div>
            </div>
        </form>
    </div>
    <script src="js/ourframe.js"></script>
</body>

</html>