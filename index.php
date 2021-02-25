<?php
//access the session data before any session data is created or accessed.
session_start();
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
<form action="login.php" method="post">
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
</form>

<!--Sign up pop modal container with its fields and buttons -->
<div class="signupmodal_container" id="modal">
  <div class="signupmodal">
    <!--close modal link-->
    <a href="#" class="close">X</a>
    <form action="signup.php" method="post">
      <div class="signup-container">
        <h1>Sign Up</h1>
        <p>Sign up below to create a user account<p>
          <!--username field with regex pattern explained in a pop message if conflicted-->
          <label for="username"><b>Username:</b></label><br>
          <input type ="text" name="username" maxlength="20"  pattern="^[a-z0-9_-]{3,20}$"
          title="(username can be 3-20 characters and can contain a number or (_,-) symbols only."required><br>

          <label for="fName"><b>First name:</b></label><br>
          <input type ="text" name="first_name" maxlength="20" required><br>

          <label for="lName"><b>Last name:</b></label><br>
          <input type ="text" name="last_name" maxlength="20" required><br>

          <label for="email"><b>Email:</b></label><br>
          <input type ="email" name="email" maxlength="50" required><br> <!-- all data fields set to required to be filled-->

          <label for="password"><b>Password:</b></label><br>
          <input type="password" name="password" maxlength="255" required><br>

          <label for="repeat_password"><b>Re-enter Password:</b></label><br>
          <input type="password" name="repeat_password" maxlength="255" required><br>

          <input type="submit" name="regbtn" value="Submit">
          <input type="reset" name="resetbtn" value="Reset"> <!--reset all fields to blank-->
        </div>
      </div>
    </div>
  </form>

  <div class="home-image">
  <img src="home-image.png" alt="11+logo" class="home-image" width="1000" height="500">
</div>
</body>
</html>
