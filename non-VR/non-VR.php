<!DOCTYPE html>

<head>
  <link rel="stylesheet" href="non-VR-stylesheet/non-VR.css">
    <!--Jquery used for on screen time-->
    <script src='http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.js'></script>
    <!--source link to j script file for comprehension questions-->
    <script src="non-VR-jscript/non-VR.js"></script>
    <title>Analogies Test</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <!--Header for the webisites landing page with title inside it-->
  <div class="header">
    <img href="Website/index.php" src="logo.png" alt="11+logo" class="center" width="10%" height="10%">
  </div>

<!--header-->
  <div class="navbar">
    <a href="/Website/regUsers.php">Home</a>
  </div>

    <!--Seperate container for all questions-->
    <div class="test-container">
        <div class="left">
            <div class="question-title"> Analogies Multiple Choice Test</div>
            <h6> Determine the figure which is similar to the question figure.</h6>

            <!--Multiple choice questions relating to the passage above-->
            <div class="question-list">
                <div class="main-question" id="1">
                    <h4 class="question"> <img class = "q-images" src="non-VR-images/q1.jpg"/> </h4>
                      <div>
                        <input type="radio" name="1" value="1"> a </input> </br>
                        <input type="radio" name="1" value="2"> b </input> </br>
                        <input type="radio" name="1" value="3"> c </input> </br>
                        <input type="radio" name="1" value="4"> d </input> </br>
                        <input type="radio" name="1" value="5"> e </input> </br>
                      </div>
                </div>

                <div class="main-question" id="2">
                    <h4 class="question"> <img class = "q-images" src="non-VR-images/q2.jpg"/> </h4>
                     <div>
                      <input type="radio" name="2" value="1"> a </input> </br>
                      <input type="radio" name="2" value="2"> b </input> </br>
                      <input type="radio" name="2" value="3"> c </input> </br>
                      <input type="radio" name="2" value="4"> d </input> </br>
                      <input type="radio" name="2" value="5"> e </input> </br>
                    </div>
                </div>

                <div class="main-question" id="3">
                  <h4 class="question"> <img class = "q-images" src="non-VR-images/q3.jpg"/> </h4>

                      <input type="radio" name="3" value="1"> a </input> </br>
                      <input type="radio" name="3" value="2"> b </input> </br>
                      <input type="radio" name="3" value="3"> c </input> </br>
                      <input type="radio" name="3" value="4"> d </input> </br>
                      <input type="radio" name="3" value="5"> e </input> </br>
                </div>

                <div class="main-question" id="4">
                    <h4 class="question"> <img class ="q-images" src="non-VR-images/q4.jpg"/> </h4>

                      <input type="radio" name="4" value="1"> a </input> </br>
                      <input type="radio" name="4" value="2"> b </input> </br>
                      <input type="radio" name="4" value="3"> c </input> </br>
                      <input type="radio" name="4" value="4"> d </input> </br>
                      <input type="radio" name="4" value="5"> e </input> </br>
                </div>

                <div class="main-question" id="5">
                    <h4 class="question"> <img class = "q-images" src="non-VR-images/q5.jpg"/> </h4>

                      <input type="radio" name="5" value="1"> a </input> </br>
                      <input type="radio" name="5" value="2"> b </input> </br>
                      <input type="radio" name="5" value="3"> c </input> </br>
                      <input type="radio" name="5" value="4"> d </input> </br>
                      <input type="radio" name="5" value="5"> e </input> </br>
                </div>


            </div>

            <div class="btn-area">
                <div class="btn btn-primary" id="submit-modal-btn">Submit</div>
            </div>

        </div>
        <div class="right">
            <div class="timer"> Time Left: <span id="time">5:00</span> </div>
            <div class="total-marks"> Total Marks Available: 5 </div>
        </div>
    </div>
    <div id="instruct-modal" class="instruct-modal">
        <div class="instruct-modal-content">
            <span class="instruct-close">&times;</span>
            <h1>Instructions</h1>
            <p><font size="3" color="#e01937"> Determine the figure which is similar to the question figure.<br><br>
                  Attempt all questions shown below in a scroll bar.<br>
                 - There are a total of 5 questions available in this Non-Verbal Reasoning test.<br>
                 - You have 5 minutes to answer all questions.<br>
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
