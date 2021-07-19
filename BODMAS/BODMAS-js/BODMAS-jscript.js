
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
            timer = duration*4545454;
            flag =  true
            if(!submitted){
                document.getElementById('submit').click();
            }
        }
    }, 1000);
}

//function to display the correct or incorrect answer under each questions once submit button is clicked
function answerDiv(id, type, ans){
    selector = '#'+ id;
    $(selector).append("<div class='btn btn-"+ type + " '>Correct Choice: "+ ans + " </div>");

}


$(document).ready(function(){

    $(".instruct-modal").css('display', 'block');

    $(document).on("click", "#instruct-btn-pop", function() {
        $(".instruct-modal").css('display', 'block');
    })

    $(document).on("click", ".instruct-close", function() {
        $(".instruct-modal").css('display', 'none');

        var fiveMinutes = 60 * 15
        var display = document.getElementById('time');
        startTimer(fiveMinutes, display);
    })

    $(document).on("click", "#submit-modal-btn", function() {
        $(".submit-modal").css('display', 'block');
    })


    $(document).on("click", "#submit-btn-pop", function() {
        $(".submit-modal").css('display', 'block');
    })

    $(document).on("click", ".submit-close", function() {
        $(".submit-modal").css('display', 'none');
    })

    $(document).on('click', "#submit", function(e){

        $(".submit-modal").css('display', 'block');
        $(".submit-modal-content").html('<span class="submit-close">&times;</span>Your form has been submitted')

        submitted= true;
        $(this).hide();
        $("#submit-modal-btn").hide()

        var score=0;
        var attemptedQuestion=0;
        e.preventDefault();

        // // Get the number of questions attempted even the ones left blank, checking is made by unique name of each question
        var q1=$("input[type='radio'][name=1]:checked").val();
        var q2=$("input[type='radio'][name=2]:checked").val();
        var q3=$("input[type='radio'][name=3]:checked").val();
        var q4=$("input[type='radio'][name=4]:checked").val();
        var q5=$("input[type='radio'][name=5]:checked").val();
        var q6=$("input[type='radio'][name=6]:checked").val();
        var q7=$("input[type='radio'][name=7]:checked").val();
        var q8=$("input[type='radio'][name=8]:checked").val();
        var q9=$("input[type='radio'][name=9]:checked").val();
        var q10=$("input[type='radio'][name=10]:checked").val();

        //Check made to see the number of questions left blank then increase attemptedQuestion counter each time
        if(q1!=undefined) attemptedQuestion++;
        if(q2!=undefined) attemptedQuestion++;
        if(q3!=undefined) attemptedQuestion++;
        if(q4!=undefined) attemptedQuestion++;
        if(q5!=undefined) attemptedQuestion++;
        if(q6!=undefined) attemptedQuestion++;
        if(q7!=undefined) attemptedQuestion++;
        if(q8!=undefined) attemptedQuestion++;
        if(q9!=undefined) attemptedQuestion++;
        if(q10!=undefined) attemptedQuestion++;


        //console will print the number of questions attempted by the user
        console.log("Attempted Questions :" + attemptedQuestion);

        //These will check if the selected option by the user is wrong or right
        if(q1=='1'){
          //success in bootstrap will highlight the answer green to represent the right answer
            answerDiv(1, 'success', '18 <br> Explanation: <br> (55-10) ÷ 15 x 6 <br> = 45 ÷ 15 x 6 <br> = 3 x 6 <br> = 18');
            //if the answer is correct then score will increase by one, each time by ++
            score++;
        }else{
          //otherwise danger will highlight the answer red to represent the wrong answer and display the right one
            answerDiv(1, 'danger', '18 <br> Explanation: <br> (55-10) ÷ 15 x 6 <br> = 45 ÷ 15 x 6 <br> = 3 x 6 <br> = 18');
        }

        if(q2=='4'){
            answerDiv(2, 'success', '18 <br> Explanation: <br> (3 + 6) x 2 <br> = 9 x 2 <br> = 18');
            score++;
        }else{
            answerDiv(2, 'danger', '18 <br> Explanation: <br> (3 + 6) x 2 <br> = 9 x 2 <br> = 18');
        }

        if(q3=='3'){
            answerDiv(3, 'success', '160 <br> Explanation: <br> 7 + (6 x 5² + 3) <br> = 7 + (6 x 25 + 3) <br> = 7 + (150 + 3) <br> = 7 + 153 <br> = 160');
            score++;
        }else{
            answerDiv(3, 'danger', '160 <br> Explanation: <br> 7 + (6 x 5² + 3) <br> = 7 + (6 x 25 + 3) <br> = 7 + (150 + 3) <br> = 7 + 153 <br> = 160');
        }

        if(q4=='2'){
            answerDiv(4, 'success', '6 <br> Explanation: <br> 4 + 6 - 7 + 3 <br> = 10 - 7 + 3 <br> = 3 + 3 <br> = 3');
            score++;
        }else{
            answerDiv(4, 'danger', '6 <br> Explanation: <br> 4 + 6 - 7 + 3 <br> = 10 - 7 + 3 <br> = 3 + 3 <br> = 3');
        }

        if(q5=='4'){
            answerDiv(5, 'success', '27 <br> Explanation: <br> 8 + 4 x 6 - 5 <br> = 8 + 24 - 5 <br> = 32 - 5 <br> = 27');
            score++;
        }else{
            answerDiv(5, 'danger', '27 <br> Explanation: <br> 8 + 4 x 6 - 5 <br> = 8 + 24 - 5 <br> = 32 - 5 <br> = 27');
        }

        if(q6=='2'){
            answerDiv(6, 'success', '8 <br> Explanation: <br> 5 + 21 ÷ 7 <br> = 8 + 24 - 5 <br> = 5 + 3 <br> = 8');
            score++;
        }else{
            answerDiv(6, 'danger', '8 <br> Explanation: <br> 5 + 21 ÷ 7 <br> = 8 + 24 - 5 <br> = 5 + 3 <br> = 8');
        }

        if(q7=='1'){
            answerDiv(7, 'success', '20 <br> Explanation: <br> 5 x 16 ÷ 8 x 2 <br> = 80 ÷ 8 x 2 <br> = 10 x 2 <br> = 20');
            score++;
        }else{
            answerDiv(7, 'danger', '20 <br> Explanation: <br> 5 x 16 ÷ 8 x 2 <br> = 80 ÷ 8 x 2 <br> = 10 x 2 <br> = 20');
        }

        if(q8=='4'){
            answerDiv(8, 'success', '10 <br> Explanation: <br> 5 x 16 ÷ 8 <br> = 80 ÷ 8 <br> = 20');
            score++;
        }else{
            answerDiv(8, 'danger', '10 <br> Explanation: <br> 5 x 16 ÷ 8 <br> = 80 ÷ 8 <br> = 20');
        }

        if(q9=='2'){
            answerDiv(9, 'success', '2 <br> Explanation: <br> 13800 ÷ 230 ÷ 30 <br> = 60 ÷ 30 <br> = 2');
            score++;
        }else{
            answerDiv(9, 'danger', '2 <br> Explanation: <br> 13800 ÷ 230 ÷ 30 <br> = 60 ÷ 30 <br> = 2');
        }

        if(q10=='3'){
            answerDiv(10, 'success', '450 <br> Explanation: <br> (800 ÷ 64) x (1296 ÷ 36) <br> = 12.5 x 36 <br> = 450');
            score++;
        }else{
            answerDiv(10, 'danger', '450 <br> Explanation: <br> (800 ÷ 64) x (1296 ÷ 36) <br> = 12.5 x 36 <br> = 450');
        }



        // alert(score)
        $("html, body").animate({ scrollTop: 0 }, "slow");

        testInfo = "<div><div>Test Info</div><div>Total Questions: 10</div><div>Time(minutes): 15 </div></div>"

        GeneralInfo = "<div><div>General Info</div><div>Attempted Questions: "+ attemptedQuestion + "</div><div>Your Score is: "+ score+ " </div></div>"

        $(".right").html('Result'+ testInfo+ GeneralInfo );

    })
})
