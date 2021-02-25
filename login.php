<!-- php code to process login credentials -->
<?php
require_once('dbConnector.php');
if(isset($_POST['loginbtn']))
{
  $login_username = mysqli_real_escape_string($con,$_POST['login_username']);
  $login_password = mysqli_real_escape_string($con,$_POST['login_password']);

  if($login_username != "" && $login_password != ""){
    $login_password = md5($login_password); //hashes password
    //checking values match with database data
    $login_sql = " select count(*) as allNewUsers from Login_credentials where username='".$login_username."' and password='".$login_password."'";
    $login_result = mysqli_query($con,$login_sql);
    $row = mysqli_fetch_array($login_result);
    $count = $row['allNewUsers'];

    //if data exist then re-direct to registered user page
    if($count > 0){
      $_SESSION['username'] = $login_username;
      header('Location: regUsers.php');
    }

    else {  //wrong login credentials show error message.
      echo '<script>alert("Incorrect login credentials, please try again.")</script>';
    }
  }
}
?>
