<?php
//access the session data before any session data is created or accessed.
session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="FYP-CSS.css"></head> <!--access to CSS style sheet-->
<title>Registered users page</title>
<body>

  <!--Header for the websites landing page with title inside it-->
  <div class="header">
  <img src="logo.png" alt="11+logo" class="left-img">
</div>

  <button class="english-btn">
    <img src="english_logo.png" alt="english" class="topic">
    <h3 id="english">
      English
    </h3>
  </button>

  <button class="maths-btn">
    <img src="maths_logo.png" alt="maths" class="topic">
    <h3 id="maths">
      Maths
    </h3>
  </button>

  <button class="vr-btn">
    <img src="VR_logo.png" alt="vr" class="topic">
    <h3 id="vr">
      Verbal Reasoning
    </h3>
  </button>

  <button class="non_VR-btn">
      <img src="non-VR_logo.png" alt="non-vr" class="topic">
    <h3 id="non-vr">
      Non-Verbal Reasoning
    </h3>
  </button>



</body>
</html>
