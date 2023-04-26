<?php

?>
<!DOCTYPE html>
<html lang="en">
<?php
include "connection.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    addOneView($_POST['car_num'] , $conn);
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- styles -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="stylesheet" href="css/showcar.css">
    <!-- normalize -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- ico -->
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">


    <title>cars</title>
</head>

<body>
    <div id="loading">
        <div class="spinner"></div>
    </div>
    <div class="parent">
        <div style="display:flex; background-color: #1e2125 ; margin-top: 0; margin-bottom: 20px; justify-content: center;">
            <a href="listings.php">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h1 style="margin-right: auto; color: whitesmoke; padding-right: 80px;">CAR NAME BRUH</h1>
        </div>
        <h3> car model</h3>

        <div class="container">
            <div class="car_pic_holder">
                <div>
                    <img src="img/Gclass.jpg">
                </div>
                <h3>100,000$</h3>


            </div>
            <p>
                CAR DESCRIPTION, a very long and important description of all the attributes and quialities of the
                car, just a placeholder for now maybe i will remove it later since there is no real reason for this
                to exist. After all, this is not a real website nor will the TA give us extra marks for a very well
                designed front-end for the website.
            </p>
            <!-- <div class="buycar">
            <h2>100,000$</h2>
            <button>Finance This Car</button>
        </div> -->
        </div>
        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <button class="btn btn-danger">Delete This Car</button>
        </div>
    </div>

    <script src="js/ourframe.js"></script>

</body>

</html>