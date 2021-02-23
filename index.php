<?php
//access the session data before any session data is created or accessed.
//session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="FYP-CSS.css"></head> <!--access to CSS style sheet-->
<title>Home page</title>
<body>

  <!--Header for the webisites landing page with title inside it-->
  <div class="header">
  <img src="logo.png" alt="11+logo" class="center">

   <h1 class="creative-text"><span id="wrd-fun">FUN .</span>
     <span  id="wrd-interactive">INTERACTIVE .</span>
      <span id="wrd-learning">LEARNING </span>
    </h1>
</div>

<!--Login form inside a container with it's fields and buttons -->
<form action="index.php" method="post">
  <!--token created to send field values to validate the request for each form-->
  <div class="login-container">
    <h2>Login</h2>
    <label for="login_username"><b>Username:</b></label><br>
    <input type ="text" name="login_username" maxlength="20" required><br>

    <label for="login_password"><b>Password:</b></label><br>
    <input type="password" name="login_password" maxlength="20" required><br>

    <input id="login_btn" type="submit" name="loginbtn" value="Login">
    <p>New member?</p>
    <button id="login_btn">
      <a href="#modal">Create Account</a> <!-- pop up modal for sign up form -->
    </button>
  </div>

  <div class="home-image">
  <img src="home-image.png" alt="11+logo" class="home-image">
</div>
</form>
