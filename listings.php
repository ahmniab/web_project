<?php
require_once 'connection.php';

$sql = "SELECT * FROM listings";
$all_prods = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- styles -->
    <link rel="stylesheet" href="css/ourframe.css">
    <link rel="stylesheet" href="css/listings.css">
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
        <nav class="navbar" id="navbar">
            <div>
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a class="chosen">listing</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="About.html">about us</a></li>
                </ul>
            </div>
        </nav>
        <nav class="nav-btn" id="nav-btn">
            <ul class="first">
                <li><a><i class="fa-solid fa-house"></i></a></li>
                <li><a><i class="fa-solid fa-car"></i></a></li>
                <li><a><i class="fa-solid fa-headset"></i></a></li>
                <li><a><i class="fa-solid fa-people-group"></i></a></li>

            </ul>
            <div>
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a class="chosen">listing</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="About.html">about us</a></li>
                </ul>
            </div>
        </nav>

        <div class="search_bar_container">
            <form action="listings.html" class="search_bar" method="post">
                <input type="text" placeholder="search here!" name="Search" id="SearchBar">
                <button type="submit"><img src="img/search.png" alt="Search"></button>
            </form>
        </div>

        <div class="container">
            <?php
            while ($row = mysqli_fetch_assoc($all_prods)) {
            ?>
                <div class="card">
                    <div style="height:200px">
                        <img src="<?php echo $row["img"] ?>" alt="IMAGE" style="object-fit: contain;">
                    </div>
                    <div class="captions">
                        <p class="product_name"><?php echo $row["name"] ?></p>
                        <p class="price"><?php echo $row["price"] ?>$</p>
                    </div>
                    <button class="inspect">Inspect</button>
                </div>
            <?php
            }
            ?>
            <span id="up-btn" onclick="scrollToTop();">
                <i class="fa-solid fa-angles-up"></i>
            </span>
        </div>
    </div>
    <script src="js/ourframe.js"></script>
    <script src="js/listngs.js"></script>

</body>

</html>