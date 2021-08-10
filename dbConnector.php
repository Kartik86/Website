<?php

$dbServer = "localhost";
$dbName = "FYP_database";
$dbPassword = "";
$dbUsername = "root";

$con = mysqli_connect($dbServer, $dbUsername, "", $dbName);

//checking connection if failed
if($con == false){
  die("ERROR: could not connect.".mysqli_connect_error());

}
