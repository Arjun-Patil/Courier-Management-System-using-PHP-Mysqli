<?php
$dbHost = "localhost";
$dbUser = "";
$dbPass = "";
$dbName = "courier";

$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

if (!$conn){
die("Database connection failed");
}
 ?>
