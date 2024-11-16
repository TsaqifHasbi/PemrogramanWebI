<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScoreHub - Voli</title>
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
            background-color: #4a4a4a;
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
            margin-top: 36px;
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
        .score{
            display: flex;
        }
        .team-score {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 320px;
            height: 320px;
            background: linear-gradient(145deg, #ccc, #999);
            border-radius: 20px;
            position: relative;
            margin: 0 50px;
            color: #000;
            font-size: 4.6em;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            /*box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);*/
        }
        .team-score:hover .score{
            cursor: pointer;
            font-size: 2.8em;
            font-weight: bold;
            text-align: center;
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
        .team-score .score-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 300px;
            background-color: linear-gradient(45deg, #ccc, #999);;
            border-radius: 10px;
            /*box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);*/
        }
        .team-score .score {
            font-size: 2.5em;
            color: #333;
        }
        .team-score .decrement {
            position: absolute;
            bottom: 5px;
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
            left: 300px;
        }
        .team-score:hover .decrement.blue{
            cursor: pointer;
            display: flex;
            right: 300px;
        }
        .team-score .decrement:hover {
            background-color: #B7B7B7;
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
            background-color: #4a4a4a;
            color: #fff;
            padding: 32px 0;
            text-align: center;
            width: 100%;
            position: absolute;
            bottom: 0;
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
        <a href="score-voli.php" style="color: #ED7D31;">Voli</a>
        <a href="#">Basket</a>
    </div>
    <h1>Futsal Match</h1>
    <div class="scoreboard">
        <!--Red-->
        <div class="timer">
            <span class="menit">10</span><span> : </span><span>00</span>
        </div>
        <div class="score">
            <div class="team-score">
                <div class="team-name red">IF</div>
                <div class="score-container" onclick="tambah('teamAScore')">
                    <span id="teamAScore" class="score">0</span>
                </div>
                <div class="decrement red" onclick="kurang('teamAScore')">-</div>
            </div>
            <span>vs</span>
            <!--Blue-->
            <div class="team-score">
                <div class="team-name blue">IF</div>
                <div class="score-container" onclick="tambah('teamBScore')">
                    <span id="teamBScore" class="score">0</span>
                </div>
                <div class="decrement blue" onclick="kurang('teamBScore')">-</div>
            </div>
        </div>
    </div>
    <footer>
        © 2024 ScoreHub. All rights reserved.
    </footer>
    <script>
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
