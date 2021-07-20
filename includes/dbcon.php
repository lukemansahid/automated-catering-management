<?php
// database properties for local database
$dbHost = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "reservation";

// database properties for remote database
$dbRemoteHost = "";
$dbRemoteUserName = "";
$dbRemotePassword = "";
$dbRemoteName = "";

//database connection to the local server (Xampp)
$con = mysqli_connect($dbHost,$dbUserName,$dbPassword,$dbName);

//database connection to the remote server database(Remote Server)
//$con = mysqli_connect($dbRemoteHost,$dbRemoteUserName,$dbRemotePassword,$dbRemoteName);


if (!$con){
    die("Database connection failed!");
}
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>