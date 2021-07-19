
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

        var fiveMinutes = 60 * 30
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
        var q11=$("input[type='radio'][name=11]:checked").val();
        var q12=$("input[type='radio'][name=12]:checked").val();
        var q13=$("input[type='radio'][name=13]:checked").val();
        var q14=$("input[type='radio'][name=14]:checked").val();
        var q15=$("input[type='radio'][name=15]:checked").val();
        var q16=$("input[type='radio'][name=16]:checked").val();
        var q17=$("input[type='radio'][name=17]:checked").val();
        var q18=$("input[type='radio'][name=18]:checked").val();
        var q19=$("input[type='radio'][name=19]:checked").val();
        var q20=$("input[type='radio'][name=20]:checked").val();

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
        if(q11!=undefined) attemptedQuestion++;
        if(q12!=undefined) attemptedQuestion++;
        if(q13!=undefined) attemptedQuestion++;
        if(q14!=undefined) attemptedQuestion++;
        if(q15!=undefined) attemptedQuestion++;
        if(q16!=undefined) attemptedQuestion++;
        if(q17!=undefined) attemptedQuestion++;
        if(q18!=undefined) attemptedQuestion++;
        if(q19!=undefined) attemptedQuestion++;
        if(q20!=undefined) attemptedQuestion++;

        //console will print the number of questions attempted by the user
        console.log("Attempted Questions :" + attemptedQuestion);

        //These will check if the selected option by the user is wrong or right
        if(q1=='4'){
          //success in bootstrap will highlight the answer green to represent the right answer
            answerDiv(1, 'success', '4 (To live in country side)');
            //if the answer is correct then score will increase by one, each time by ++
            score++;
        }else{
          //otherwise danger will highlight the answer red to represent the wrong answer and display the right one
            answerDiv(1, 'danger', '4 (To live in country side)');
        }

        if(q2=='3'){
            answerDiv(2, 'success', '3 (A hired hack)');
            score++;
        }else{
            answerDiv(2, 'danger', '3 (A hired hack)');
        }

        if(q3=='4'){
            answerDiv(3, 'success', '4 (past the calk-quarry at the top of the hill)');
            score++;
        }else{
            answerDiv(3, 'danger', '4 (past the calk-quarry at the top of the hill)');
        }

        if(q4=='2'){
            answerDiv(4, 'success', '2 (A decent house with garder and orchard)');
            score++;
        }else{
            answerDiv(4, 'danger', '2 (A decent house with garder and orchard)');
        }

        if(q5=='1'){
            answerDiv(5, 'success', "1 (She didn't want to move into the new place)");
            score++;
        }else{
            answerDiv(5, 'danger', "1 (She didn't want to move into the new place)");
        }

        if(q6=='2'){
            answerDiv(6, 'success', '2 (The house seemed like a fairy place for the children)');
            score++;
        }else{
            answerDiv(6, 'danger', '2 (The house seemed like a fairy place for the children)');
        }

        if(q7=='3'){
            answerDiv(7, 'success', '3 (Children in country are extremely naughty compared to children in cities)');
            score++;
        }else{
            answerDiv(7, 'danger', '3 (Children in country are extremely naughty compared to children in cities)');
        }

        if(q8=='1'){
            answerDiv(8, 'success', '1 (2 year)');
            score++;
        }else{
            answerDiv(8, 'danger', '1 (2 year)');
        }

        if(q9=='1'){
            answerDiv(9, 'success', "1 (They couldn't afford to get any entertainment in London)");
            score++;
        }else{
            answerDiv(9, 'danger', "1 (They couldn't afford to get any entertainment in London)");
        }

        if(q10=='1'){
            answerDiv(10, 'success', '1 (The hourse are in straight lines and all streets looked alike)');
            score++;
        }else{
            answerDiv(10, 'danger', '1 (The hourse are in straight lines and all streets looked alike)');
        }

        if(q11=='4'){
            answerDiv(11, 'success', '4 (jasmine flowers)');
            score++;
        }else{
            answerDiv(11, 'danger', '4 (jasmine flowers)');
        }

        if(q12=='3'){
            answerDiv(12, 'success', '3 (Delighted)');
            score++;
        }else{
            answerDiv(12, 'danger', '3 (Delighted)');
        }

        if(q13=='2'){
            answerDiv(13, 'success', '2 (adjective)');
            score++;
        }else{
            answerDiv(13, 'danger', '2 (adjective)');
        }

        if(q14=='1'){
            answerDiv(14, 'success', '1 (a broken swing)');
            score++;
        }else{
            answerDiv(14, 'danger', '1 (a broken swing)');
        }

        if(q15=='2'){
            answerDiv(15, 'success', '2 (There are no specific rules unlike London)');
            score++;
        }else{
            answerDiv(15, 'danger', '2 (There are no specific rules unlike London)');
        }

        if(q16=='3'){
            answerDiv(16, 'success', '3 (Enchanted city of Arabian nights)');
            score++;
        }else{
            answerDiv(16, 'danger', '3 (Enchanted city of Arabian nights)');
        }

        if(q17=='3'){
            answerDiv(17, 'success', '3 (farm)');
            score++;
        }else{
            answerDiv(17, 'danger', '3 (farm)');
        }

        if(q18=='3'){
            answerDiv(18, 'success', '3 (They wanted to play in the gravel-pit)');
            score++;
        }else{
            answerDiv(18, 'danger', '3 (They wanted to play in the gravel-pit)');
        }

        if(q19=='4'){
            answerDiv(19, 'success', '4 (The gravel-pit)');
            score++;
        }else{
            answerDiv(19, 'danger', '4 (The gravel-pit)');
        }

        if(q20=='4'){
            answerDiv(20, 'success', '4 (epizeuxis)');
            score++;
        }else{
            answerDiv(20, 'danger', '4 (epizeuxis)');
        }

        // alert(score)
        $("html, body").animate({ scrollTop: 0 }, "slow");

        testInfo = "<div><div>Test Info</div><div>Total Questions: 20</div><div>Time(minutes): 25</div></div>"

        GeneralInfo = "<div><div>General Info</div><div>Attempted Questions: "+ attemptedQuestion + "</div><div>Your Score is: "+ score+ " </div></div>"

        $(".right").html('Result'+ testInfo+ GeneralInfo );

    })
})
