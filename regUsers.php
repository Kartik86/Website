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

  <!--English button linking to english page-->
  <button onclick="window.location.href='english-page.php'" class="english-btn">
    <img src="english_logo.png" alt="english" class="topic">
    <h3 id="english">
      English
    </h3>
  </button>

  <!--Maths button linking to Maths page-->
  <button onclick="window.location.href='maths-page.php'" class="maths-btn">
    <img src="maths_logo.png" alt="maths" class="topic">
    <h3 id="maths">
      Maths
    </h3>
  </button>

  <!--Verbal reasoning button linking to Verbal Reasoning page-->
  <button onclick="window.location.href='vr-page.php'" class="vr-btn">
    <img src="VR_logo.png" alt="vr" class="topic">
    <h3 id="vr">
      Verbal Reasoning
    </h3>
  </button>

  <!--Non-Verbal reasoning button linking to Non-Verbal Reasoning page-->
  <button onclick="window.location.href='non-vr-page.php'" class="non_VR-btn">
    <img src="non-VR_logo.png" alt="non-vr" class="topic">
    <h3 id="non-vr">
      Non-Verbal Reasoning
    </h3>
  </button>

</body>
</html>
