<?php

include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $userNameInfo = $conn->prepare("select * from users where user_name = '" . $user_name . "'");
    $userNameInfo->execute();
    $userNameResult = $userNameInfo->get_result();
    $row = $userNameResult->fetch_assoc();


    if (!empty($row['user_name'])) {
        $wrongMsg = 'User name already exists';
    } else {

        $sql = "INSERT INTO users (user_name, email, password,profile,name) VALUES ('$user_name', '$email', '$password','img/blank-profile.png','$name')";
        if ($conn->query($sql) === TRUE) {
            setcookie("user_name", $user_name);
            header('Location: index.php');
            exit;
        }

    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign up</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

</head>

<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>
    <div class="parent">
        <div class="box glass">
            <h2>Sign up</h2>
            <?php
            if (isset($wrongMsg)) {
                echo '<div class="alert alert-danger" role="alert"><i class="fa-solid fa-circle-exclamation fa-beat"></i>' . $wrongMsg . '</div>';
            }
            ?>
            <div class="alert alert-danger" role="alert" id="alert"></div>
            <form name="sign_up" action="signup.php" method="post">
                <input class="us" type="text" name="user_name" placeholder="Username">
                <input class="us" type="text" name="name" placeholder="Name">
                <input class="em" type="email" name="email" placeholder="Email">
                <input class="n" type="text" name="phone" placeholder="Phone number">
                <input class="pass" type="password" name="password" placeholder="Password" id="password">
                <input class="cpass" type="password" placeholder="Confirm Password" id="cnfrmpassword">
                <button type="button" class="sign-up" name="signup" onclick="checkPasswords()">sign up</button>
                <div class="signin">
                    <p>Already have an account?</p><a class="new" href="signin.html">Sign in</a>
                </div>
            </form>
            <script src="js/checkpass.js"></script>

        </div>
    </div>
    <script src="js/ourframe.js"></script>

</body>


</html>
  

