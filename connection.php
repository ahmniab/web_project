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

