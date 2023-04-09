<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/ourframe.css">
</head>

<body>
    <script src="js/ourframe.js"></script>
    <div class="drop-zone glass" id="drop-zone" style="display: none;">
        <form name="img" action="index.html">
        <i class="fa-solid fa-cloud-arrow-up"></i>
        <span class="drop-zone__prompt">Drop file here or click to upload</span>
        <input type="file" name="userimg" class="drop-zone__input">
        </form>
    </div>
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
            <!-- <a class="button"><button type="button" class="btn btn-outline-light"><i class="fa-solid fa-people-group"></i>Our Team</button></a> -->
        </nav>
        <div class="container">

            <div class="info-box glass">
                <div class="photo-box">
                    <img src="img/blank-profile.png">
                    <div class="glass" onclick="toggleVisibility()"><i class="fa-regular fa-pen-to-square"></i></div>
                    <h2>Ahmed Hamdy</h2>
                </div>
                <h3>Profile Information</h3>
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
                <button onclick="toggleVisibility();">Edit Profile</button>
            </div>
        </div>
    </div>
    <script src="js/ourframe.js"></script>
</body>

</html>
