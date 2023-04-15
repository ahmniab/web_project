<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vendor</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="stylesheet" href="css/vandor.css">

</head>

<body>
    <div class="parent">
        <nav class="navbar">
            <div>
                <ul>
                    <li><a class="chosen">home</a></li>
                    <li><a href="listings.php">listing</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="About.html">about us</a></li>
                </ul>
            </div>

        </nav>
        <div class="info-box glass left" id="info-box">

            <div class="open-btn glass" id="open-btn" onclick="open_box();">
                <i class="fa-solid fa-caret-right" id="fa-caret-right"></i>
            </div>

            <div class="photo-box">
                <img src="img/blank-profile.png">
                <div class="glass"><i class="fa-regular fa-pen-to-square" id="fa-pen-to-square"></i></div>
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
        <div class="info-box glass right" id="info-box">

            <div class="open-btn glass" id="open-btn" onclick="open_box();">
                <i class="fa-solid fa-caret-right" id="fa-caret-right"></i>
            </div>

            
        </div>
        <script>
            function open_box() {
                if (document.getElementById("info-box").style.transform == "translateX(90%)") {
                    
                    document.getElementById("info-box").style.transform = "translateX(0%)";
                    document.getElementById("fa-caret-right").style.transform = "rotateY(0deg)";
                } else {
                    document.getElementById("info-box").style.transform = "translateX(90%)";
                    document.getElementById("fa-caret-right").style.transform = "rotateY(-180deg)";
                }
            };
        </script>
</body>

</html>