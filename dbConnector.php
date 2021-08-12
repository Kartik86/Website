<?php

$dbServer = "sql303.unaux.com";
$dbName = "unaux_29384808_FYP_database";
$dbPassword = "gzkx22v4bv";
$dbUsername = "unaux_29384808";

$con = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);

//checking connection if failed
if($con == false){
  die("ERROR: could not connect.".mysqli_connect_error());

}
