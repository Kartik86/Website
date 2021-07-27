<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="verbal-stylesheet/verbal-reasoning1.css">
  <!--Jquery used for on screen time-->
  <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
  <!--source link to j script file for comprehension questions-->
  <script src="verbal-jscript/verbal-reasoning1.js"></script>
  <title>VR Test</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <!--Header for the webisites landing page with title inside it-->
  <div class="header">
    <img href="Website/index.php" src="logo.png" alt="11+logo" class="center" width="10%" height="10%">
  </div>


  <!--navigation-->
  <div class="navbar">
    <a href="/Website/regUsers.php">Home</a>
  </div>

  <!--Seperate container for all questions-->
  <div class="test-container">
    <div class="left">
      <div class="question-title"> Verbal Reasoning Multiple Choice Test <br></div>
        <h6 class="question-subTitle"> Please choose one word from each group, which when combined would
        create a compound word.</h6>

      <!--Multiple choice questions relating to the passage above-->
      <div class="question-list">
        <div class="main-question" id="1">
          <h4 class="question"> Q1 (past, pass, red) (port, tense, spot) </h4>

          <input type="radio" name="1" value="1"> past port </input> </br>
          <input type="radio" name="1" value="2"> pass tense </input> </br>
          <input type="radio" name="1" value="3"> red spot </input> </br>
          <input type="radio" name="1" value="4"> pass port </input> </br>
        </div>

        <div class="main-question" id="2">
          <h4 class="question"> Q2 (earth, joint, small) (hole, quake, place)  </h4>

          <input type="radio" name="2" value="1"> earth hole </input> </br>
          <input type="radio" name="2" value="2"> joint place </input> </br>
          <input type="radio" name="2" value="3"> earth quake </input> </br>
          <input type="radio" name="2" value="4"> small hole </input> </br>
        </div>

        <div class="main-question" id="3">
          <h4 class="question"> Q3 (under, wonder, now) (ground, where, full)</h4>

          <input type="radio" name="3" value="1"> now where </input> </br>
          <input type="radio" name="3" value="2"> wonder full </input> </br>
          <input type="radio" name="3" value="3"> under ground </input> </br>
          <input type="radio" name="3" value="4"> under where </input> </br>
        </div>

        <div class="main-question" id="4">
          <h4 class="question"> Q4 (shiny, flying, town) (motor, ship, dip) </h4>

          <input type="radio" name="4" value="1"> shiny motor </input> </br>
          <input type="radio" name="4" value="2"> town ship </input> </br>
          <input type="radio" name="4" value="3"> flying ship </input> </br>
          <input type="radio" name="4" value="4"> flying motor </input> </br>
        </div>

        <div class="main-question" id="5">
          <h4 class="question"> Q5 (serve, sauce, case) (dish, hot, pan) </h4>

          <input type="radio" name="5" value="1"> serve dish </input> </br>
          <input type="radio" name="5" value="2"> sauce dish </input> </br>
          <input type="radio" name="5" value="3"> sauce pan </input> </br>
          <input type="radio" name="5" value="4"> hot case </input> </br>
        </div>

        <div class="main-question" id="6">
          <h4 class="question"> Q6 (super, glass, flower)</h4>

          <input type="radio" name="6" value="1"> glass vase </input> </br>
          <input type="radio" name="6" value="2"> flower jacket </input> </br>
          <input type="radio" name="6" value="3"> glass jacket </input> </br>
          <input type="radio" name="6" value="4"> super market  </input> </br>
        </div>

        <div class="main-question" id="7">
          <h4 class="question"> Q7 (copper, cold, black) (sword, board, snow) </h4>

          <input type="radio" name="7" value="1"> copper board </input> </br>
          <input type="radio" name="7" value="2"> black board </input> </br>
          <input type="radio" name="7" value="3"> cold snow </input> </br>
          <input type="radio" name="7" value="4"> black sword </input> </br>
        </div>

        <div class="main-question" id="8">
          <h4 class="question"> Q8 (bride, bird, friend) (show, song, ship) </h4>

          <input type="radio" name="8" value="1"> bird show </input> </br>
          <input type="radio" name="8" value="2"> bride show </input> </br>
          <input type="radio" name="8" value="3"> bird song </input> </br>
          <input type="radio" name="8" value="4"> friend ship </input> </br>
        </div>

        <div class="main-question" id="9">
          <h4 class="question"> Q9 (waste, art, pen) (piper, draw, paper) </h4>

          <input type="radio" name="9" value="1"> waste piper </input></br>
          <input type="radio" name="9" value="2"> waste paper </input></br>
          <input type="radio" name="9" value="3"> art draw </input></br>
          <input type="radio" name="9" value="4"> pen paper </input></br>
        </div>

        <div class="main-question" id="10">
          <h4 class="question"> Q10 (clock, clock, lock) (wise, pin, key) </h4>

          <input type="radio" name="10" value="1"> lock key </input></br>
          <input type="radio" name="10" value="2"> cock wise </input></br>
          <input type="radio" name="10" value="3"> clock pin </input></br>
          <input type="radio" name="10" value="4"> clock wise  </input></br>
        </div>


      </div>


      <div class="btn-area">
        <div class="btn btn-primary" id="submit-modal-btn">Submit</div>
      </div>

    </div>
    <div class="right">
      <div class="timer"> Time Left: <span id="time">15:00</span> </div>
      <div class="total-marks"> Total Marks 10 </div>
    </div>
  </div>
  <div id="instruct-modal" class="instruct-modal">
    <div class="instruct-modal-content">
      <span class="instruct-close">&times;</span>
      <h1>Instructions</h1>
      <p><font size="3" color="#e01937"> Please choose one word from each group, which when combined would
        create a compound word. Attempt all questions shown below in a scroll bar.<br><br>
        - There are a total of 10 questions available in this Verbal reasoning test.<br>
        - You have 15 mins to answer all questions.<br>
        - Press the submit once you are satisfied with all your answers.<br>
        - Explanations to any wrong and right answers will be provided at the end of the test.<br>
        - It is not compulsary answer all questions if you dont understand it, but it is advised to attempt all questions by making logical choices.
      </font></p>
    </div>
  </div>
  <div id="submit-modal" class="submit-modal">
    <div class="submit-modal-content">
      <span class="submit-close">&times;</span> Are you sure you want to submit the quiz? <input type="submit"
      value="Submit" id="submit">
    </div>
  </div>
</body>

</html>
