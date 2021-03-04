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
  <img src="logo.png" alt="11+logo" class="left-img">
</div>

  <div class="english-container">
    <h3 id="english">
      English
    </h3>
  </div>

  <div class="maths-container">
    <h3 id="maths">
      Maths
    </h3>
  </div>

  <div class="vr-container">
    <h3 id="vr">
      Verbal Reasoning
    </h3>
  </div>

  <div class="non_VR-container">
    <h3 id="non-vr">
      Non-Verbal Reasoning
    </h3>
  </div>



</body>
</html>
