<?php
//access the session data before any session data is created or accessed.
session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="vr-CSS.css"></head> <!--access to CSS style sheet-->
<title>Verbal reasoning page</title>
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
          <a href="/Website/maths-page.php">Maths</a>
          <a href="/Website/non-vr-page.php">Non-verbal reasoning</a>
        </div>
      </div>
</div>

<button class="vr1-btn" onclick="window.location.href='verbal-reasoning1/verbal-reasoning1.php'" class="english1-btn">
  <img src="english_logo.png" alt="Making words" class="topic">
  <h3>
    Making words
  </h3>
</button>

<button class="vr1-btn">
  <img src="english_logo.png" alt="Word meanings" class="topic">
  <h3>
    Word meanings
  </h3>
</button>

<button class="vr1-btn">
  <img src="english_logo.png" alt="Compound words" class="topic">
  <h3>
    Compound words
  </h3>
</button>

<button class="vr2-btn">
  <img src="english_logo.png" alt="Double meaning" class="topic">
  <h3>
    Double meaning
  </h3>
</button>

<button class="vr2-btn">
  <img src="english_logo.png" alt="Opposite meaning" class="topic">
  <h3>
    Opposite meaning
  </h3>
</button>

<button class="vr2-btn">
  <img src="english_logo.png" alt="Related numbers" class="topic">
  <h3>
    Related numbers
  </h3>
</button>

<button class="vr2-btn">
  <img src="english_logo.png" alt="Mock test" class="topic">
  <h3>
    Mock test
  </h3>
</button>


</body>
</html>
