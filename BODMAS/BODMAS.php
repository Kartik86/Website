<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="BODMAS-css/BODMAS-stylesheet.css">
    <!--Jquery used for on screen time-->
    <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
    <!--source link to j script file for comprehension questions-->
    <script src="BODMAS-js/BODMAS-jscript.js"></script>
    <title>BODMAS Test</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <!--Header for the webisites landing page with title inside it-->
  <div class="header">
    <img src="logo.png" alt="11+logo" class="center" width="10%" height="10%">
  </div>

<!--navigation-->
  <div class="navbar">
    <a href="/Website/regUsers.php">Home</a>
  </div>

    <!--Seperate container for all questions-->
    <div class="test-container">
        <div class="left">
            <div class="question-title"> BODMAS Multiple Choice Test</div>
              <h6> Calculate the answers following the BODMAS principles<h6>

            <!--Multiple choice questions relating to the passage above-->
            <div class="question-list">
                <div class="main-question" id="1">
                    <h4 class="question"> Q1 Calculate (55-10) ÷ 15 x 6 </h4>

                        <input type="radio" name="1" value="1"> 18 </input> </br>
                        <input type="radio" name="1" value="2"> 25 </input> </br>
                        <input type="radio" name="1" value="3"> 1.5 </input> </br>
                        <input type="radio" name="1" value="4"> 2.5 </input> </br>
                </div>

                <div class="main-question" id="2">
                    <h4 class="question"> Q2 Calculate (3 ÷ 6) x 2  </h4>

                        <input type="radio" name="2" value="1"> 15 </input> </br>
                        <input type="radio" name="2" value="2"> 36 </input> </br>
                        <input type="radio" name="2" value="3"> 16 </input> </br>
                        <input type="radio" name="2" value="4"> 18 </input> </br>
                </div>

                <div class="main-question" id="3">
                    <h4 class="question"> Q3 Calculate 7 + (6 x 5² + 3)</h4>

                        <input type="radio" name="3" value="1"> 328 </input> </br>
                        <input type="radio" name="3" value="2"> 910 </input> </br>
                        <input type="radio" name="3" value="3"> 160 </input> </br>
                        <input type="radio" name="3" value="4"> 150 </input> </br>
                </div>

                <div class="main-question" id="4">
                    <h4 class="question"> Q4 Calculate 4 + 6 - 7 + 3 </h4>

                        <input type="radio" name="4" value="1"> 16 </input> </br>
                        <input type="radio" name="4" value="2"> 6 </input> </br>
                        <input type="radio" name="4" value="3"> 20 </input> </br>
                        <input type="radio" name="4" value="4"> 7 </input> </br>
                </div>

                <div class="main-question" id="5">
                    <h4 class="question"> Q5 Calculate 8 + 4 x 6 - 5 </h4>

                      <input type="radio" name="5" value="1"> 25 </input> </br>
                      <input type="radio" name="5" value="2"> 32 </input> </br>
                      <input type="radio" name="5" value="3"> 17 </input> </br>
                      <input type="radio" name="5" value="4"> 27 </input> </br>
                </div>

                <div class="main-question" id="6">
                    <h4 class="question"> Q6 Calculate 5 + 21 ÷ 7</h4>

                      <input type="radio" name="6" value="1"> 3 </input> </br>
                      <input type="radio" name="6" value="2"> 8 </input> </br>
                      <input type="radio" name="6" value="3"> 5 </input> </br>
                      <input type="radio" name="6" value="4"> 7 </input> </br>
                </div>

                <div class="main-question" id="7">
                    <h4 class="question"> Q7 Calculate 5 x 16 ÷ 8 x 2 </h4>

                      <input type="radio" name="7" value="1"> 20 </input> </br>
                      <input type="radio" name="7" value="2"> 10 </input> </br>
                      <input type="radio" name="7" value="3"> 8 </input> </br>
                      <input type="radio" name="7" value="4"> 5 </input> </br>
                </div>

                <div class="main-question" id="8">
                    <h4 class="question"> Q8 Calculate 5 x 16 ÷ 8 </h4>

                      <input type="radio" name="8" value="1"> 64 </input> </br>
                      <input type="radio" name="8" value="2"> 80 </input> </br>
                      <input type="radio" name="8" value="3"> 8 </input> </br>
                      <input type="radio" name="8" value="4"> 10 </input> </br>
                </div>

                <div class="main-question" id="9">
                    <h4 class="question"> Q9 Calculate 13800 ÷ 230 ÷ 30 </h4>

                      <input type="radio" name="9" value="1"> 4 </input></br>
                      <input type="radio" name="9" value="2"> 2 </input></br>
                      <input type="radio" name="9" value="3"> 3 </input></br>
                      <input type="radio" name="9" value="4"> 5 </input></br>
                </div>

                <div class="main-question" id="10">
                    <h4 class="question"> Q10 Calculate (800 ÷ 64) x (1296 ÷ 36) </h4>

                      <input type="radio" name="10" value="1"> 540 </input></br>
                      <input type="radio" name="10" value="2"> 45 </input></br>
                      <input type="radio" name="10" value="3"> 450 </input></br>
                      <input type="radio" name="10" value="4"> 900 </input></br>
                </div>


            </div>

            <div class="btn-area">
                <div class="btn btn-primary" id="submit-modal-btn">Submit</div>
            </div>

        </div>
        <div class="right">
            <div class="timer"> Time Left: <span id="time">15:00</span> </div>
            <div class="total-marks"> Total Marks Available: 10 </div>
        </div>
    </div>
    <div id="instruct-modal" class="instruct-modal">
        <div class="instruct-modal-content">
            <span class="instruct-close">&times;</span>
            <h1>Instructions</h1>
            <p><font size="3" color="#e01937"> Calculate the answers to each question following the principles of BODMAS<br> <br>
               - You have 15 minutes to answer all questions.<br>
               - There are a total of 10 questions available in this BODMAS test.<br>
               - Press the submit once you are satisfied with all your answers.<br>
               - Explanations to any wrong and right answers will be provided at the end of the test.<br>
               - It is not compulsary answer all questions if you dont understand it, but it is advised to attempt all questions by making logical choices.
            </font></p>
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
