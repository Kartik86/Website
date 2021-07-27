<?php
//access the session data before any session data is created or accessed.
session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="english-CSS.css"></head> <!--access to CSS style sheet-->
<title>English page</title>
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
      <a href="/Website/maths-page.php">Maths</a>
      <a href="/Website/vr-page.php">Verbal reasoning</a>
      <a href="/Website/non-vr-page.php">Non-verbal reasoning</a>
    </div>
  </div>
</div>
<br>
<!--Website credit for marquee: https://sites.google.com/view/how-to-with-new-sites/embeds/embed-with-htmljavascript/scrolling-text-banners-->
<marquee bgcolor="#228B22" font style="bold" direction="left" scrolldelay="100"><font size="5" face="Verdana"><font color="#F8F8FF">Time for some english lessons! Practise all your favourite english topics in one place!</marquee>



<button onclick="window.location.href='comprehension/Comprehension.php'" class="english1-btn">
  <img src="english_logo.png" alt="Comprehension 1" class="topic">
  <h3>
    Comprehension 1
  </h3>
</button>

<button class="english1-btn">
  <img src="english_logo.png" alt="Spelling" class="topic">
  <h3>
    Spelling
  </h3>
</button>

<button class="english1-btn">
  <img src="english_logo.png" alt="Punctuation" class="topic">
  <h3>
    Punctuation
  </h3>
</button>

<button class="english1-btn">
  <img src="english_logo.png" alt="Word & phrases 1" class="topic">
  <h3>
    Word & phrases 1
  </h3>
</button>

<button class="english2-btn">
  <img src="english_logo.png" alt="Complete the sentence" class="topic">
  <h3>
    Complete the sentence
  </h3>
</button>

<button class="english2-btn">
  <img src="english_logo.png" alt="Word & phrases 2" class="topic">
  <h3>
    Word & phrases 2
  </h3>
</button>

<button class="english2-btn">
  <img src="english_logo.png" alt="Comprehension 2" class="topic">
  <h3>
    Comprehension 2
  </h3>
</button>

<button class="english2-btn">
  <img src="english_logo.png" alt="English test" class="topic">
  <h3>
    English test
  </h3>
</button>


</body>
</html>
