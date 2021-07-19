<?php
//access the session data before any session data is created or accessed.
session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="non-vr-CSS.css"></head> <!--access to CSS style sheet-->
<title>Non Verbal reasoning page</title>
<body>

  <!--Header for the websites landing page with title inside it-->
<div class="header">
  <img src="logo.png" alt="11+logo" class="left-img">
</div>

<div class="navbar">
  <a href="/Website/regUsers.php">Home</a>
    <div class="dropdown">
      <button class="dropbtn">Subjects
        <i class="fa fa-caret-down"></i>
      </button>
        <div class="dropdown-content">
          <a href="/Website/english-page.php">English</a>
          <a href="/Website/vr-page.php">Verbal reasoning</a>
          <a href="/Website/maths-page.php">Maths</a>
        </div>
      </div>
</div>

<button class="non-vr1-btn" onclick="window.location.href='non-VR/non-VR.php'" class="english1-btn">
  <img src="english_logo.png" alt="Analogies" class="topic">
  <h3>
     Analogies
  </h3>
</button>

<button class="non-vr1-btn">
  <img src="english_logo.png" alt="Series" class="topic">
  <h3>
    Series
  </h3>
</button>

<button class="non-vr1-btn">
  <img src="english_logo.png" alt="Odd one out" class="topic">
  <h3>
    Odd one out
  </h3>
</button>

<button class="non-vr1-btn">
  <img src="english_logo.png" alt="Matrices" class="topic">
  <h3>
    Matrices
  </h3>
</button>

<button class="non-vr2-btn">
  <img src="english_logo.png" alt="Nets" class="topic">
  <h3>
    Nets
  </h3>
</button>

<button class="non-vr2-btn">
  <img src="english_logo.png" alt="Series" class="topic">
  <h3>
    Series
  </h3>
</button>

<button class="non-vr2-btn">
  <img src="english_logo.png" alt="Codes" class="topic">
  <h3>
    Codes
  </h3>
</button>

<button class="non-vr2-btn">
  <img src="english_logo.png" alt="Mock test" class="topic">
  <h3>
    Mock test
  </h3>
</button>
</div>
</body>
</html>
