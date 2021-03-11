<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>True or False Quiz</title>
</head>
<body>
    <style>
        #frame001 {
            border-radius: 5px;
            background-color: white;
            border: 2px solid black;
            height: 350px;
            width: 400px;
        }

        .buttons001 {
            background-color: dodgerblue;
            color: white;
            width: 70px;
            height: 30px;
            border-radius: 5px;
        }

        .buttons002 {
            background-color: blue;
            color: white;
            width: 70px;
            height: 30px;
            border-radius: 5px;
        }

        #font001 {
            text-align: center;
            font-size: large;
            color: black;
        }
    </style>
    <div id="frame001">
        <div id="font001">
            <h2>True Or False Quiz</h2><text>Question: <text id="number001">0</text></text><br />
            <text>Score: <text id="score001">0</text></text><br />
            <text>Time: <text id="time001">200</text></text><br />
            <hr />
            <div id="disappear001">
                <button class="buttons002" onclick="begin001()">Begin</button>
            </div>
            <p id="message001"></p>
            <p id="message002"></p>
            <p id="message003"></p>
            <p id="message004"></p>
        </div>
    </div>
    <script>


        function begin001() {
            c = 200;
            disappear001.innerHTML = "";
            message001.innerHTML = question001[0];
            message002.innerHTML = options001;
            number001.innerHTML = a++;
        }

        




        function timer001() {
            c = c - 1;
            if (c < 200) {
                time001.innerHTML = c;
            }

            if (c < 1) {
                window.clearInterval(update);
                message001.innerHTML = "Time's up";
                message002.innerHTML = "";
                message003.innerHTML = "";
                message004.innerHTML = "<button class=buttons002 onclick=repeat001()>Repeat</button>";
            }
        }

        update = setInterval("timer001()", 1000);

        function repeat001() {
            location.reload();
        }
    </script>
</body>
</html>
