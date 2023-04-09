<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vendor</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/vandor.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/ourframe.css">

</head>

<body>
    <div class="parent">
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
    <div class="info-box glass" id="info-box">
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
        <button>Edit Profile</button>
    </div>
    <script>
        function open_box() {
            document.getElementById("info-box").style.color = "translateX(0px)";
        };
    </script>
</body>

</html>