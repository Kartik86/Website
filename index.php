<?php
//access the session data before any session data is created or accessed.
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="FYP-CSS.css">
  <!--description font link-->
  <link href="http://fonts.cdnfonts.com/css/kids-handwriting" rel="stylesheet">
</head> <!--access to CSS style sheet-->
<title>
  Home page
</title>

<body>
  <!--Header for the websites landing page with title inside it-->
  <div class="header">
    <img src="logo.png" alt="11+logo" class="center">
  </div>


  <h1 class="creative-text">
    <span id="wrd-fun">FUN .</span>
    <span id="wrd-interactive">INTERACTIVE .</span>
    <span id="wrd-learning">LEARNING </span>
  </h1>


  <div class="cork-img">
    <img src="cork-img.jpg" class="cork-img">

    <!--Login form inside a container with it's fields and buttons -->
    <form action="index.php" method="post">
      <!--token created to send field values to validate the request for each form-->
      <div class="login-container">
        <h2 id=text-style>LOGIN</h2>
        <label for="login_username" class="kids-font"><b>Username:</b></label>
        <input type ="text" name="login_username" maxlength="20" required>

        <label for="login_password" class="kids-font"><b>Password:</b></label>
        <input type="password" name="login_password" maxlength="20" required>

        <input id="login_btn" type="submit" name="loginbtn" value="Login">
        <p class="font-style"> New member?</p>
        <button id="login_btn">
          <a href="#modal">Create Account</a> <!-- pop up modal for sign up form -->
        </button>
      </div>
    </form>
  </div>



  <!-- php code to process login credentials -->
  <?php
  require_once('dbConnector.php');
  if(isset($_POST['loginbtn']))
  {
    $login_username = mysqli_real_escape_string($con,$_POST['login_username']);
    $login_password = mysqli_real_escape_string($con,$_POST['login_password']);

    if($login_username != "" && $login_password != ""){
      $login_password = md5($login_password); //hashes password
      //checking values match with database data
      $login_sql = " select count(*) as allNewUsers from Login_credentials where username='".$login_username."' and password='".$login_password."'";
      $login_result = mysqli_query($con,$login_sql);
      $row = mysqli_fetch_array($login_result);
      $count = $row['allNewUsers'];

      //if data exist then re-direct to registered user page
      if($count > 0){
        $_SESSION['username'] = $login_username;
        header('Location: regUsers.php');
      }

      else {  //wrong login credentials show error message.
        echo '<script>alert("Incorrect login credentials, please try again.")</script>';
      }
    }
  }
  ?>

  <!--Sign up pop modal container with its fields and buttons -->
  <div class="signupmodal_container" id="modal">
    <div class="signupmodal">
      <!--close modal link-->
      <a href="#" class="close">X</a>
      <form action="signup.php" method="post">
        <div class="signup-container">
          <h1>Sign Up</h1>
          <p>Sign up below to create a user account<p>
            <!--username field with regex pattern explained in a pop message if conflicted-->
            <label for="username"><b>Username:</b></label><br>
            <input type ="text" name="username" maxlength="20"  pattern="^[a-z0-9_-]{3,20}$"
            title="(username can be 3-20 characters and can contain a number or (_,-) symbols only."required><br>

            <label for="fName"><b>First name:</b></label><br>
            <input type ="text" name="first_name" maxlength="20" required><br>

            <label for="lName"><b>Last name:</b></label><br>
            <input type ="text" name="last_name" maxlength="20" required><br>

            <label for="email"><b>Email:</b></label><br>
            <input type ="email" name="email" maxlength="50" required><br> <!-- all data fields set to required to be filled-->

            <label for="password"><b>Password:</b></label><br>
            <input type="password" name="password" maxlength="255" required><br>

            <label for="repeat_password"><b>Re-enter Password:</b></label><br>
            <input type="password" name="repeat_password" maxlength="255" required><br>

            <input type="submit" name="regbtn" value="Submit" background-color: "#4CAF50">
            <input type="reset" name="resetbtn" value="Reset"> <!--reset all fields to blank-->
          </div>
        </div>
      </div>
    </form>



    <!-- Banner image on home page-->
    <div class="home-image">
      <img src="cartoon-kids.png" alt="11+logo" class="home-image">
    </div>
    <!-- Container for trial quiz before users sign in-->
    <div class="quiz-box">
      <div id="quiz"></div>
      <button class="quiz_btn" id="previous">Previous Question</button>
      <button class="quiz_btn" id="next">Next Question</button>
      <button class="quiz_btn" id="submit">Submit Quiz</button>
      <input  type="button" class="quiz_btn" id="start" value="Try now!">
      <div class="quiz_btn" id="results"></div>
    </div>



    <!-- JS function to process the test, display test, process results-->
    <script>
    (function(){
      // Functions
      function buildQuiz(){
        // variable to store the HTML output
        const output = [];
        output.push('<p class="slide">Unsure whether this web tool is ideal for your child?<br> Then why not observe your child try some practise questions. press the button below!</p>')
        // for each question in the quiz
        myQuestions.forEach(
          (currentQuestion, questionNumber) => {

            // multiple possible answers to questions
            const answers = [];
            // and for each available answer...
            for(letter in currentQuestion.answers){

              // ...add an HTML radio button
              answers.push(
                `<label>
                <input type="radio" name="question${questionNumber}" value="${letter}">
                ${letter} :
                ${currentQuestion.answers[letter]}
                </label>`
              );
            }

            // add this question and its answers to the output
            output.push(
              `<div class="slide">
              <div class="question"> ${currentQuestion.question} </div>
              <div class="answers"> ${answers.join("")} </div>
              </div>`
            );
          }
        );

        // finally combine our output list into one string of HTML and put it on the page
        quizContainer.innerHTML = output.join('');
      }

      function showResults(){

        // gather answer containers from our quiz
        const answerContainers = quizContainer.querySelectorAll('.answers');

        // keep track of user's answers
        let numCorrect = 0;

        // for each question...
        myQuestions.forEach( (currentQuestion, questionNumber) => {

          // find selected answer
          const answerContainer = answerContainers[questionNumber];
          const selector = `input[name=question${questionNumber}]:checked`;
          const userAnswer = (answerContainer.querySelector(selector) || {}).value;

          // if answer is correct
          if(userAnswer === currentQuestion.correctAnswer){
            // add to the number of correct answers
            numCorrect++;

            // color the answers green
            answerContainers[questionNumber].style.color = 'lightgreen';
          }
          // if answer is wrong or blank
          else{
            // color the answers red
            answerContainers[questionNumber].style.color = 'red';
          }
        });

        // show number of correct answers out of total
        resultsContainer.innerHTML = `${numCorrect} out of ${myQuestions.length}`;
      }

      function showSlide(n) {
        slides[currentSlide].classList.remove('active-slide');
        slides[n].classList.add('active-slide');
        currentSlide = n;
        if(currentSlide === 0){
          nextButton.style.display = 'none';
          previousButton.style.display = 'none';
          submitButton.style.display = 'none';
        }

        else if (currentSlide === 1) {
          nextButton.style.display = 'inline-block';
          startbtn.style.display = 'none';
          previousButton.style.display = 'none';
          submitButton.style.display = 'none';
        }
        else if (currentSlide === 2) {
          previousButton.style.display = 'inline-block';
          nextButton.style.display = 'inline-block';
          submitButton.style.display = 'none';
        }

        else {
          previousButton.style.display = 'inline-block';
          submitButton.style.display = 'inline-block';
          nextButton.style.display = 'none';
        }
      }

      function showNextSlide() {
        showSlide(currentSlide + 1);
      }

      function startQuiz() {
        showSlide(currentSlide + 1);
      }
      function showPreviousSlide() {
        showSlide(currentSlide - 1);
      }

      // Variables

      const quizContainer = document.getElementById('quiz');
      const resultsContainer = document.getElementById('results');
      const submitButton = document.getElementById('submit');
      const myQuestions = [
        {
          question: "Q1. 40 x [] = 6 x 5 x 8?",
          answers: {
            a: "4",
            b: "6",
            c: "12"
          },
          correctAnswer: "b"
        },
        {
          question: "Q2. AIRCRAFT is to TRANSPORT as NEWSPAPER is to:",
          answers: {
            a: "typing",
            b: "publishing",
            c: "newsroom",
            d: "media"
          },
          correctAnswer: "d"
        },
        {
          question:"Q3. Which of these words is closest in meaning to the word dawdle" ,
          answers: {
            a: "push",
            b: "wake",
            c: "loiter",
          },
          correctAnswer: "c"
        }
      ];

      // Kick things off
      buildQuiz();

      // Pagination
      const previousButton = document.getElementById("previous");
      const nextButton = document.getElementById("next");
      const startbtn = document.getElementById("start")
      const slides = document.querySelectorAll(".slide");
      let currentSlide = 0;

      // Show the first slide
      showSlide(currentSlide);

      // Event listeners
      submitButton.addEventListener('click', showResults);
      previousButton.addEventListener("click", showPreviousSlide);
      nextButton.addEventListener("click", showNextSlide);
      startbtn.addEventListener("click", startQuiz)
    })();

  </script>

  <div class="description_text">
    <p>Let us prepare you for your upcoming 11 plus examination - Join us today!</p>
    </div>
  </body>
  </html>
