<?php
//access the session data before any session data is created or accessed.
session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="maths-CSS.css"></head> <!--access to CSS style sheet-->
<title>Maths page</title>
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
          <a href="/Website/non-vr-page.php">Non-verbal reasoning</a>
        </div>
      </div>
</div>


<button onclick="window.location.href='BODMAS/BODMAS.php'" class="maths1-btn" class="maths1-btn">
  <img src="english_logo.png" alt="BODMAS" class="topic">
  <h3>
    BODMAS
  </h3>
</button>

<button class="maths1-btn">
  <img src="english_logo.png" alt="Basic operations" class="topic">
  <h3>
    Basic operations
  </h3>
</button>

<button class="maths1-btn">
  <img src="english_logo.png" alt="Fractions & numbers" class="topic">
  <h3>
    Fractions & numbers
  </h3>
</button>

<button class="maths1-btn">
  <img src="english_logo.png" alt="Algebra" class="topic">
  <h3>
    Algebra
  </h3>
</button>

<button class="maths2-btn">
  <img src="english_logo.png" alt="Geometry and measurements" class="topic">
  <h3>
    Geometry and measurements
  </h3>
</button>

<button class="maths2-btn">
  <img src="english_logo.png" alt="Miscellaneous" class="topic">
  <h3>
    Miscellaneous
  </h3>
</button>

<button class="maths2-btn">
  <img src="english_logo.png" alt="Statistics" class="topic">
  <h3>
    Statistics
  </h3>
</button>

<button class="maths2-btn">
  <img src="english_logo.png" alt="Maths test" class="topic">
  <h3>
    Maths test
  </h3>
</button>


</body>
</html>
