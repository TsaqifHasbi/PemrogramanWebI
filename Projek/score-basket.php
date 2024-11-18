<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScoreHub - Futsal</title>
    <link rel="shotcut icon" href="Gambar/logo.png">
    <style>
        * {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        body::-webkit-scrollbar {
            display: none;
        }
        body {
            background-color: #f8f8f8;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            user-select: none;
            /*overflow-y: scroll;
            -ms-overflow-style: none;
            scrollbar-width: none;*/
        }
        .navbar {
            background-color: #4F4A45;
            width: 100%;
            padding: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 110px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar a:hover{
            color: #ED7D31;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar .logo img{
            width: 35px;
        }
        h1{
            margin-top: 48px;
        }
        .scoreboard {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 28px 0;
        }
        .timer{
            display: flex;
            margin: 0 0 40px 0;
            border: #000 solid 2px;
            padding: 10px 18px;
            border-radius: 10px;
        }
        .timer:hover{
            cursor: pointer;
        }
        .score{
            display: flex;
            margin: 4px 0 40px 0;
        }
        .team-score {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 240px;
            height: 240px;
            background: linear-gradient(to top, #cccccc, #4F4A45);
            border-radius: 20px;
            position: relative;
            margin: 0 100px;
            color: #000;
            font-size: 4.6em;
            font-weight: bold;
            cursor: pointer;
            /*box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);*/
        }
        .team-score:hover .numscore{
            cursor: pointer;
            font-size: 2.8em;
            font-weight: bold;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        .team-score .team-name {
            position: absolute;
            top: -32px;
            padding: 5px 20px;
            font-size: 0.6em;
            font-weight: bold;
            color: #fff;
            border-radius: 5px;
        }
        .team-score .team-name.red {
            background-color: #ff5c5c;
        }

        .team-score .team-name.blue {
            background-color: #5c9eff;
        }
        .score span{
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* .team-score .score-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 240px;
            height: 240px;
            background-color: linear-gradient(to top, #ccc, #999);;
            border-radius: 10px;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);
        } */
        .team-score .numscore {
            font-size: 2.5em;
            color: #333;
        }
        .team-score .decrement {
            position: absolute;
            bottom: 2px;
            font-size: 0.4em;
            cursor: pointer;
            color: #333;
            background-color: #ddd;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        .team-score:hover .decrement.red{
            cursor: pointer;
            display: flex;
            left: 210px;
        }
        .team-score:hover .decrement.blue{
            cursor: pointer;
            display: flex;
            right: 210px;
        }
        .team-score .decrement:hover {
            background-color: #B7B7B7;
        }
        .shotime-container{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 140px;
            border: #000 solid 2px;
            border-radius: 20px;
            position: relative;
            margin: 0 100px;
            color: #000;
            font-size: 4.6em;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
        }
        .shotime-container .container span{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1em;
            color: #333;
            /*box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);*/
        }
        .shotime-container .decrement {
            position: absolute;
            bottom: 2px;
            font-size: 0.4em;
            cursor: pointer;
            color: #333;
            background-color: #ddd;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            text-align: center;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        .shotime-container:hover .decrement{
            cursor: pointer;
            display: flex;
            top: 4em;
        }
        span {
            display: flex;
            position: relative;
            flex-direction: column;
            align-items: center;
            font-size: 2em;
            font-weight: bold;
            color: #333;
        }
        footer {
            background-color: #4F4A45;
            color: #fff;
            padding: 32px 0;
            text-align: center;
            width: 100%;
            bottom: 0;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="Gambar/logo.png" alt=""></a>
        </div>
        <a href="score-futsal.php">Futsal</a>
        <a href="score-badminton.php">Badminton</a>
        <a href="score-voli.php">Voli</a>
        <a href="score-basket.php" style="color: #ED7D31;">Basket</a>
    </div>
    <div class="scoreboard">
        <div class="timer">
            <span class="menit">10</span><span> : </span><span class="detik">00</span>
        </div>
        <div class="score">
            <!--Red-->
            <div class="team-score">
                <div class="team-name red">IF 23</div>
                <div class="score-container" onclick="tambah('teamAScore')">
                    <span id="teamAScore" class="numscore">0</span>
                </div>
                <div class="decrement red" onclick="kurang('teamAScore')">-</div>
            </div>
            <span>vs</span>
            <!--Blue-->
            <div class="team-score">
                <div class="team-name blue">IF 21</div>
                <div class="score-container" onclick="tambah('teamBScore')">
                    <span id="teamBScore" class="numscore">0</span>
                </div>
                <div class="decrement blue" onclick="kurang('teamBScore')">-</div>
            </div>
        </div>
        <div class="shotime-container">
                <div class="container" onclick="shotime()">
                    <span id="shotime" class="shotime">24</span>
                </div>
                <div class="decrement blue" onclick="kurang('teamBScore')">-</div>
        </div>
    </div>
    <footer>
        © 2024 ScoreHub. All rights reserved.
    </footer>
    <script>
        let menit = 10;
        let detik = 0;
        let timerInterval = null;
        const timerElement = document.querySelector(".timer");

        function updateTimerDisplay() {
            const menitElement = document.querySelector(".menit");
            const detikElement = document.querySelector(".detik");
            menitElement.textContent = menit.toString().padStart(2, "0");
            detikElement.textContent = detik.toString().padStart(2, "0");
        }

        function toggleTimer() {
            if (timerInterval) {
                clearInterval(timerInterval);
                timerInterval = null;
            } else {
                timerInterval = setInterval(() => {
                    if (menit === 0 && detik === 0) {
                        clearInterval(timerInterval);
                        alert("Waktu habis!");
                        timerInterval = null;
                        return;
                    }
                    if (detik === 0) {
                        menit--;
                        detik = 59;
                    } else {
                        detik--;
                    }
                    updateTimerDisplay();
                }, 1000);
            }
        }

        timerElement.addEventListener("click", toggleTimer);
        updateTimerDisplay();

        function tambah(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            scoreElement.innerText = currentScore + 1;
            const teamAScore = parseInt(document.getElementById("teamAScore").innerText);
            const teamBScore = parseInt(document.getElementById("teamBScore").innerText);
        }

        function kurang(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            if (currentScore > 0) {
                scoreElement.innerText = currentScore - 1;
            }
        }
    </script>
</body>
</html>
