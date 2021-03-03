<?php
//access the session data before any session data is created or accessed.
session_start();
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="FYP-CSS.css"></head> <!--access to CSS style sheet-->
<title>Home page</title>
<body>

  <!--Header for the webisites landing page with title inside it-->
  <div class="header">
  <img src="logo.png" alt="11+logo" class="center">

   <h1 class="creative-text"><span id="wrd-fun">FUN .</span>
     <span  id="wrd-interactive">INTERACTIVE .</span>
      <span id="wrd-learning">LEARNING </span>
    </h1>
</div>

<!--Login form inside a container with it's fields and buttons -->
<form action="login.php" method="post">
  <!--token created to send field values to validate the request for each form-->
  <div class="login-container">
    <h2>Login</h2>
    <label for="login_username"><b>Username:</b></label><br>
    <input type ="text" name="login_username" maxlength="20" required><br>

    <label for="login_password"><b>Password:</b></label><br>
    <input type="password" name="login_password" maxlength="20" required><br>

    <input id="login_btn" type="submit" name="loginbtn" value="Login">
    <p>New member?</p>
    <button id="login_btn">
      <a href="#modal">Create Account</a> <!-- pop up modal for sign up form -->
    </button>
  </div>
</form>

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

          <input type="submit" name="regbtn" value="Submit">
          <input type="reset" name="resetbtn" value="Reset"> <!--reset all fields to blank-->
        </div>
      </div>
    </div>
  </form>

  <div class="home-image">
  <img src="home-image.png" alt="11+logo" class="home-image" width="1000" height="500">
</div>



<div class="quiz-container">
  <div id="quiz"></div>

<button class="quiz_btn" id="previous">Previous Question</button>
<button class="quiz_btn" id="next">Next Question</button>
<button class="quiz_btn" id="submit">Submit Quiz</button>
<div class="quiz_btn" id="results"></div>
</div>
<script>

(function(){
  // Functions
  function buildQuiz(){
    // variable to store the HTML output
    const output = [];

    // for each question...
    myQuestions.forEach(
      (currentQuestion, questionNumber) => {

        // variable to store the list of possible answers
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
      previousButton.style.display = 'none';
    }
    else{
      previousButton.style.display = 'inline-block';
    }
    if(currentSlide === slides.length-1){
      nextButton.style.display = 'none';
      submitButton.style.display = 'inline-block';
    }
    else{
      nextButton.style.display = 'inline-block';
      submitButton.style.display = 'none';
    }
  }

  function showNextSlide() {
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
      question: "40 x [] = 6 x 5 x 8?",
      answers: {
        a: "4",
        b: "6",
        c: "12"
      },
      correctAnswer: "b"
    },
    {
      question: "AIRCRAFT is to TRANSPORT as NEWSPAPER is to:",
      answers: {
        a: "typing",
        b: "publishing",
        c: "newsroom",
        d: "media"
      },
      correctAnswer: "d"
    },
    {
      question:"Which of these words is closest in meaning to the word dawdle" ,
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
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  // Show the first slide
  showSlide(currentSlide);

  // Event listeners
  submitButton.addEventListener('click', showResults);
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
})();

</script>


<!--try out taster questions

<div class="taster_container">
  <p id="taster_text">Unsure, whether this platform is right for your learning? Then why not try some practice questions as a taster!
</p>
  <div id="question-container" class="hide">
    <div id="question">Question</div>
    <div id="answer-buttons" class="btn-grid">
      <button class="btn">Answer 1</button>
      <button class="btn">Answer 2</button>
      <button class="btn">Answer 3</button>
      <button class="btn">Answer 4</button>
    </div>
  </div>
  <div class="controls">
    <button id="start-btn" class="start-btn btn">Start</button>
    <button id="next-btn" class="next-btn btn hide">Next</button>
  </div>



<script>
const startButton = document.getElementById('start-btn')
const startText = document.getElementById('taster_text')
const nextButton = document.getElementById('next-btn')
const questionContainerElement = document.getElementById('question-container')
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')
let shuffledQuestions, currentQuestionIndex

startButton.addEventListener('click', startGame)
nextButton.addEventListener('click', () => {
  currentQuestionIndex++
  setNextQuestion()
})

function startGame() {
  startButton.classList.add('hide')
  startText.classList.add('hide')
  shuffledQuestions = questions.sort(() => Math.random() - .5)
  currentQuestionIndex = 0
  questionContainerElement.classList.remove('hide')
  setNextQuestion()
}

function setNextQuestion() {
  resetState()
  showQuestion(shuffledQuestions[currentQuestionIndex])
}

function showQuestion(question) {
  questionElement.innerText = question.question
  question.answers.forEach(answer => {
    const button = document.createElement('button')
    button.innerText = answer.text
    button.classList.add('btn')
    if (answer.correct) {
      button.dataset.correct = answer.correct
    }
    button.addEventListener('click', selectAnswer)
    answerButtonsElement.appendChild(button)
  })
}

function resetState() {
  clearStatusClass(document.body)
  nextButton.classList.add('hide')
  while (answerButtonsElement.firstChild) {
    answerButtonsElement.removeChild(answerButtonsElement.firstChild)
  }
}

function selectAnswer(e) {
  const selectedButton = e.target
  const correct = selectedButton.dataset.correct
  setStatusClass(document.body, correct)
  Array.from(answerButtonsElement.children).forEach(button => {
    setStatusClass(button, button.dataset.correct)
  })
  if (shuffledQuestions.length > currentQuestionIndex + 1) {
    nextButton.classList.remove('hide')
  } else {
    startButton.innerText = 'Restart'
    startButton.classList.remove('hide')
  }
}

function setStatusClass(element, correct) {
  clearStatusClass(element)
  if (correct) {
    element.classList.add('correct')
  } else {
    element.classList.add('wrong')
  }
}

function clearStatusClass(element) {
  element.classList.remove('correct')
  element.classList.remove('wrong')
}

const questions = [
  {
    question: 'What is 2 + 2?',
    answers: [
      { text: '4', correct: true },
      { text: '22', correct: false }
    ]
  },
  {
    question: 'Who is the best YouTuber?',
    answers: [
      { text: 'Web Dev Simplified', correct: true },
      { text: 'Traversy Media', correct: true },
      { text: 'Dev Ed', correct: true },
      { text: 'Fun Fun Function', correct: true }
    ]
  },
  {
    question: 'Is web development fun?',
    answers: [
      { text: 'Kinda', correct: false },
      { text: 'YES!!!', correct: true },
      { text: 'Um no', correct: false },
      { text: 'IDK', correct: false }
    ]
  },
  {
    question: 'What is 4 * 2?',
    answers: [
      { text: '6', correct: false },
      { text: '8', correct: true }
    ]
  }
]
</script>
-->
</body>
</html>
