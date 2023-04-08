<div id="loading">
    <div class="spinner"></div>
</div>
<script src="js/ourframe.js"></script>


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

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
} else {
    header('Location: home.html');
    exit;
}
