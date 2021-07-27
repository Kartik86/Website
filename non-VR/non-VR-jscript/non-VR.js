
var flag = false
var timeVar;
var submitted;

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    timeVar = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
            flag =  true
            if(!submitted){
                document.getElementById("submit").click();
            }
        }
    }, 1000);
}

//function to display the correct or incorrect answer under each questions once submit button is clicked
function answerDiv(id, type, ans){
    selector = '#'+ id;
    $(selector).append("<div class='btn btn-"+ type + " '>Correct Choice: "+ ans + " </div>");
}

//the webpage (document) is ready and put into a function
$(document).ready(function(){
    //once the webpage is loaded the instruction modal is displayed straight away
    $(".instruct-modal").css('display', 'block');

    //when the x button on the instruction pop up is pressed then it stops displaying
    $(document).on("click", ".instruct-close", function() {
        $(".instruct-modal").css('display', 'none');
        //once instruction pop up closes the timer starts
        var fiveMinutes = 60 * 5
        var display = document.getElementById('time');
        startTimer(fiveMinutes, display);
    })

    //the submit button at the bottom of the screen is displayed as a block binded into a function
    $(document).on("click", "#submit-modal-btn", function() {
        $(".submit-modal").css('display', 'block');
    })

    //third submit confirmation pop up will close once the "x" on that is clicked
    $(document).on("click", ".submit-close", function() {
        $(".submit-modal").css('display', 'none');
    })

    //once the webpage is submited
    $(document).on('click', "#submit", function(e){
        //submited answer modal will be displayed
        $(".submit-modal").css('display', 'block');
        //submission confirmation message will shown
        $(".submit-modal-content").html('<span class="submit-close">&times;</span>Your examination answers now has been submitted, please check your results with explanations for each answers by closing this window.')
        //once submitted hide submit button so users cant re-submit
        submitted= true;
        $(this).hide();
        $("#submit-modal-btn").hide()

        //variables for user score and attempted questions initialised
        var score=0;
        var attemptedQuestion=0;
        e.preventDefault();//to prevent default function

        // Get the number of questions attempted even the ones left blank, checking is made by unique name of each question
        var q1=$("input[type='radio'][name=1]:checked").val();
        var q2=$("input[type='radio'][name=2]:checked").val();
        var q3=$("input[type='radio'][name=3]:checked").val();
        var q4=$("input[type='radio'][name=4]:checked").val();
        var q5=$("input[type='radio'][name=5]:checked").val();


        //Check made to see the number of questions left blank then increase attemptedQuestion counter each time
        if(q1!=undefined) attemptedQuestion++;
        if(q2!=undefined) attemptedQuestion++;
        if(q3!=undefined) attemptedQuestion++;
        if(q4!=undefined) attemptedQuestion++;
        if(q5!=undefined) attemptedQuestion++;



        //console will print the number of questions attempted by the user
        console.log("Attempted Questions :" + attemptedQuestion);

        //These will check if the selected option by the user is wrong or right
      if(q1=='3'){
        //success in bootstrap will highlight the answer green to represent the right answer
          answerDiv(1, 'success', '3(c) <br> Explanation: <br>  On careful observation one has to infer that<br>Every question figure contain two similar shapes, in which the shape to the right shaded<br><br> A similar shape rotated 90 degrees clockwise, is present above them at the middle<br><br> On considering the above explanation, a similar figure should be option 3');
          //if the answer is correct then score will increase by one, each time by ++
          score++;
      }else{
        //otherwise danger will highlight the answer red to represent the wrong answer and display the right one
          answerDiv(1, 'danger', '3(c) <br> Explanation: <br>  On careful observation one has to infer that<br>Every question figure contain two similar shapes, in which the shape to the right shaded<br><br> A similar shape rotated 90 degrees clockwise, is present above them at the middle<br><br> On considering the above explanation, a similar figure should be option 3');
      }


        if(q2=='1'){
            answerDiv(2, 'success', '1(a) <br> Explanation: <br>  On careful observation one has to infer that<br>Every question figure divided into four similar and equal shapes. <br>On considering the above explanation, a similar figure should be option 1.');
            score++;
        }else{
            answerDiv(2, 'danger', '1(a) <br> Explanation: <br>  On careful observation one has to infer that<br>Every question figure divided into four similar and equal shapes. <br>On considering the above explanation, a similar figure should be option 1.');
        }

        if(q3=='4'){
            answerDiv(3, 'success', '4(d) <br> Explanation: <br>  On careful observation one has to infer that<br> Every question figure contains a circle with a small shaped inserted at the bottom or top or left in it. <br>On considering the above explanation, a similar figure should be option 4.');
        }else{
            answerDiv(3, 'danger', '4(d) <br> Explanation: <br>  On careful observation one has to infer that<br> Every question figure contains a circle with a small shaped inserted at the bottom or top or left in it. <br>On considering the above explanation, a similar figure should be option 4.');
        }

        if(q4=='2'){
            answerDiv(4, 'success', '2(b) <br> Explanation: <br>  On careful observation one has to infer that<br> Every question figure contains only nine shaded lines which are rotating 30 degrees in the anti-clockwise direction. <br> On considering the above explanation, a similar figure should be option 2.');
            score++;
        }else{
            answerDiv(4, 'danger', '2(b) <br> Explanation: <br>  On careful observation one has to infer that<br> Every question figure contains only nine shaded lines which are rotating 30 degrees in the anti-clockwise direction. <br> On considering the above explanation, a similar figure should be option 2.');
        }

        if(q5=='5'){
            answerDiv(5, 'success', '5(e) <br> Explanation: <br>  On careful observation one has to infer that<br> Every question figure contains four lines inside it <br> On considering the above explanation, a similar figure should be option 5.');
            score++;
        }else{
            answerDiv(5, 'danger', '5(e) <br> Explanation: <br>  On careful observation one has to infer that<br> Every question figure contains four lines inside it <br> On considering the above explanation, a similar figure should be option 5.');
        }




        // alert(score)
        $("html, body").animate({ scrollTop: 0 }, "slow");

        testInfo = "<div><div>Test Info</div><div>Total Questions: 5</div><div>Time(minutes): 5 </div></div>"

        GeneralInfo = "<div><div>General Info</div><div>Attempted Questions: "+ attemptedQuestion + "</div><div>Your Score is: "+ score+ " </div></div>"

        $(".right").html('Result'+ testInfo+ GeneralInfo );

    })
})
