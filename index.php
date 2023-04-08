<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ourframe.css">
    <title>cars</title>
</head>

<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>
    <script src="js/ourframe.js"></script>

</body>

</html>
<?php
include 'connection.php';
session_start();
session_destroy();
if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == false) {
        header('Location: user_profile.php');
        exit;
    } else {
        header('Location: admin_profile.php');
        exit;
    }
}

$userInCookie = $_COOKIE['user_name'];
if (isset($_COOKIE['user_name'])) {
    $user_name = $_COOKIE['user_name'];
    $userNameInfo = $conn->prepare("select * from users where user_name = '$userInCookie';");
    $userNameInfo->execute();
    $userNameResult = $userNameInfo->get_result();
    $userInDatabase = $userNameResult->fetch_assoc();
    if ($user_name == $userInDatabase['user_name'] && $userInDatabase['admin']) {
        header('Location: admin_profile.php');
        exit;
    } else if ($user_name == $userInDatabase['user_name']) {
        header('Location: user_profile.php');
        exit;
    }
}
header('Location: home.html');
exit;
