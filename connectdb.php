<?php

session_start();
$dbServername = "localHost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "353db";

$conn = mysqli_connect($dbServername, $dbUsername,$dbPassword,$dbName) or die("died");

//$connToConcordia = mysqli_connect('mnc353.encs.concordia.ca', 'mnc353_2','11223344','mnc353_2') or die("died");

echo "database connected succufully"."<br>";

?>

