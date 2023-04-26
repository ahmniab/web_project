<?php

function imgName($file_ext)
{
    $conn = $GLOBALS['conn'];
    $sql ="SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'users' AND TABLE_NAME = 'listings';";
    $res = $conn->query($sql);
    $auto_inc = mysqli_fetch_assoc($res)['AUTO_INCREMENT'];
    return $auto_inc .".".$file_ext; 
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


