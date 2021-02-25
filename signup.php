<?php
//start session
session_start();
//onlick register button
if (isset($_POST['regbtn'])){

  require 'dbConnector.php';

  //if successful
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $repeat_password = mysqli_real_escape_string($con, $_POST['repeat_password']);

  //checking if both passowords match each other
  if($password == $repeat_password){
    //crypt password to hash
    $password = md5($password);
    //validating email and username don't exist already in database
    $sql_validation = "SELECT `email`, `username` FROM `Login_credentials` WHERE `username`='".$username."' OR `email`='".$email."'";
    $result = $con->query($sql_validation);
    if($result->num_rows >= 1) { //if it does then return error
      echo '<script>alert("Username or Email already exist, Please try something else.")</script>';
      echo "<script>location.href='index.php'</script>";
    } else {
      //query to attempt to insert input data in members table in database
      $sql = "INSERT INTO Login_credentials (username, first_name, last_name, email, password)
      VALUES ('$username', '$first_name', '$last_name', '$email', '$password')";

      //successful, redirct to index page to log in
      if(mysqli_query($con, $sql)){
        echo '<script>alert("Your account has been succesfully created, you can now log in with the details provided!")</script>';
        echo "<script>location.href='index.php'</script>";

      }else{
        echo "ERROR: Could not able to execute $sql.".mysqli_error($con);
      }
    }
    // validation error for matching, password and repeat password values.
  }else{
    echo '<script>alert("Make sure repeated password matches original password")</script>';
    echo "<script>location.href='index.php'</script>";
  }
  //close connection
  mysqli_close($con);
}

?>
