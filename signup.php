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
            <div class="alert alert-danger" role="alert" id="alert"></div>
            <form name="sign_up" action="signup.html">
                <input class="us" type="text" placeholder="Username" maxlength="10">
                <input class="us" type="text" placeholder="Name">
                <input class="em" type="email" placeholder="Email">
                <input class="n" type="text" placeholder="Phone number">
                <input class="pass" type="password" placeholder="Password" id="password" maxlength="15">
                <input class="cpass" type="password" placeholder="Confirm Password" id="cnfrmpassword">
                <button type="button" class="sign-up" onclick="checkPasswords()">sign up</button>
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