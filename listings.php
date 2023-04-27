<?php
require_once 'connection.php';

$sql = "SELECT * FROM listings";
$select_prods = $conn->query($sql);
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
    <link rel="shortcut icon" href="img/main-logo.ico" type="image/x-icon">

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
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="About.php">about us</a></li>
                </ul>
            </div>
            <?php
            session_start();
            if (isset($_SESSION['user_name'])) {
            ?>
                <div class="profile">
                    <img src="<?php echo $_SESSION['profile']; ?>" alt="error" onclick="dropList();" style="cursor: pointer; border-radius: 50%;">
                    <div class="drop-list">
                        <ul id="drop-list">
                            <li><a href="user_profile.php">profile</a></li>
                            <li>
                                <a>
                                    <form action="user_profile.php" method="post" style="cursor: pointer;border-radius: 50%;" name="logout_btn" onclick="_logout();">
                                        logout
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        <input type="hidden" name="logout" value="1">
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            <?php
            }
            ?>
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
                    <li><a href="contact.php">contact</a></li>
                    <li><a href="About.html">about us</a></li>
                </ul>
            </div>
        </nav>

        <?php
        $search_term = '';

        if (isset($_POST['searchButton'])) {
            $search_term = mysqli_real_escape_string($conn, $_POST['Search']);

            if ($searchTerm = '') {
                $newsql = "SELECT * FROM listings";
                $select_prods = $conn->query($newsql);
            } else {
                $newsql = "SELECT * FROM listings WHERE name LIKE '%$search_term%'";
                $select_prods = $conn->query($newsql);
            }
        }
        ?>

        <div class="search_bar_container">
            <form action="listings.php" class="search_bar" method="post">
                <input type="text" placeholder="search here!" name="Search" id="SearchBar" value="<?php echo $search_term ?>">
                <button type="submit" name="searchButton"><img src="img/search.png" alt="Search"></button>
            </form>
        </div>

        <div class="container">
            <?php
            while ($row = mysqli_fetch_assoc($select_prods)) {
            ?>
                <div class="card">
                    <div style="height:200px">
                        <img src="<?php echo $row["img"] ?>" alt="IMAGE" style="object-fit: contain;">
                    </div>
                    <div class="captions">
                        <p class="product_name"><?php echo $row["name"] ?></p>
                        <p class="price"><?php echo number_format($row["price"]);?> $</p>
                    </div>
                    <form action="showcar.php" method="post">
                        <input type="hidden" name="car_num" value="<?php echo $row['car_num'] ?>">
                        <button class="inspect" type="submit">Inspect</button>
                    </form>
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