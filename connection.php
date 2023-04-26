<?php
// database: users
// username: eb314znwp62h22blf1wa
// host: aws.connect.psdb.cloud
// password: pscale_pw_usHCFi9vFS7y1WwZqhP0WWMdXDyRtrA2Xa0hwCitVeJ

//  $conn = new mysqli("sql7.freesqldatabase.com", "sql7611692", "7Af15l1R5u", "sql7611692");
$conn = new mysqli("localhost", "root", "", "users");
// $conn = new mysqli("aws.connect.psdb.cloud", "eb314znwp62h22blf1wa", "pscale_pw_usHCFi9vFS7y1WwZqhP0WWMdXDyRtrA2Xa0hwCitVeJ", "users");

if (!$conn) {
  die("something went wrong");
}

$err = array();

function countRows($table_name)
{
  $conn = $GLOBALS['conn'] ;

  $sql = "SELECT COUNT(*) as count FROM $table_name";
  $result = $conn->query($sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $count = $row["count"];
  } else {
    $count = 0;
  }

  return $count;
}

function addOneView($car_num , $conn)
{
  if (isset($car_num)) {
    $sql = 'select * from listings where car_num = '.$car_num ;
    $row = mysqli_fetch_assoc($conn->query($sql)) ;
    $viewsNum = $row['views'] + 1 ;
    $sql = "UPDATE listings SET views = $viewsNum WHERE car_num = ".$car_num;
    $conn->query($sql);
}
}


// echo countRows('listings') ;

// function save_file($file_path)
// {

//   $err = $GLOBALS['err'];

//   else{
//     // array_push($err , "photo not set");
//     array_push($GLOBALS['err'], "not set") ;
//   }
// }
