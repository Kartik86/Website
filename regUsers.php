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

    <img href="index.php" src="logo.png" alt="11+logo" class="left-img">

    <!--convert username character to html entities and greets logged in user-->
    <h2 class="text">Welcome <?= htmlspecialchars($_SESSION['username'])?>!</h2>

  </div>

  <!--Navigation bar-->
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">English
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="comprehension/Comprehension.php">Comprehension 1</a>
        <a href="">Spelling</a>
        <a href="">Punctuation</a>
        <a href="">Word & Phrases 1</a>
        <a href="">Complete the sentence</a>
        <a href="">Word & Phrases 2</a>
        <a href="">Comprehension 2</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Maths
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="BODMAS/BODMAS.php">BODMAS</a>
        <a href="">Basic operation</a>
        <a href="">Fraction & Numbers</a>
        <a href="">Algebra</a>
        <a href="">Geometry & Measurements</a>
        <a href="">Miscelleous</a>
        <a href="">Statistics</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Verbal Reasoning
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="verbal-reasoning1/verbal-reasoning1.php">Making Words</a>
        <a href="">Word Meanings</a>
        <a href="">Compund Words</a>
        <a href="">Double Meaning</a>
        <a href="">Opposite Meaning</a>
        <a href="">Related Numbers</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Non Verbal Reasoning
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="non-VR/non-VR.php">Analogies</a>
        <a href="">Series</a>
        <a href="">Odd One Out</a>
        <a href="">Nets</a>
        <a href="">Series</a>
        <a href="">Codes</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Mock papers
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="">English</a>
        <a href="">Maths</a>
        <a href=""> Verbal Reasoning </a>
        <a href="">Non Verbal Reasoning</a>
      </div>
    </div>
    <div class="topnav-right">
      <a href="index.php">Log out</a>
    </div>

  </div>

  <!--English button linking to english page-->
  <button onclick="window.location.href='english-page.php'" class="regEnglish-btn">
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
