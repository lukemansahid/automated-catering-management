<?php
// database properties
$dbHost = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "reservation";

//database connection
$con = mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);

if (!$con){
    die("Database connection failed!");
}
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>