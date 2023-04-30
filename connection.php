<?php
$conn = new mysqli("localhost", "root", "", "users");
if (!$conn) {
  die("something went wrong");
}

$err = array();

