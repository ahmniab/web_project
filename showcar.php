<?php
require_once 'connection.php';
if (isset($_POST['car_num'])){
$car_number=$_POST['car_num'];
$sql = "SELECT * FROM listings where car_num = ".$car_number;
$select_prods = $conn->query($sql);
$row = mysqli_fetch_assoc($select_prods);
}


?>
<!DOCTYPE html>
<html lang="en">
<?php
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


    <title>Inspect</title>
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
            <h1 style="margin-right: auto; color: whitesmoke; padding-right: 80px;"><?php echo $row['name']; ?></h1>
        </div>
        <h3> model : <?php echo $row['model'];?></h3>

        <div class="container">
            <div class="car_pic_holder">
                
            <?php
            
            {
            ?>
            <div style="min-height:200px">
                    <img src="<?php echo $row["img"] ?>" alt="IMAGE" style="object-fit: contain;">
                </div>
                <?php
            }
            ?> 
                <h3><?php echo $row['price'];?> $</h3>
            </div>
            <p>
                <?php echo $row['caption'];?>
            </p>
            <!-- <div class="buycar">
            <h2>100,000$</h2>
            <button>Finance This Car</button>
        </div> -->
        </div>
        <!-- <div style="display: flex; justify-content: center; margin-top: 20px;">
            <button class="btn btn-danger">Delete This Car</button>
        </div> -->
    </div>

    <script src="js/ourframe.js"></script>

</body>

</html>