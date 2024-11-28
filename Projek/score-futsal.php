<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScoreHub - Futsal</title>
    <link rel="shotcut icon" href="Asset/Gambar/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel='stylesheet'>
    <link rel="stylesheet" href="Navbar/scoreBoard-Navbar.css">
    <link rel="stylesheet" href="Footer/scoreBoard-Footer.css">
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
        }
        /* .navbar {
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
        .navbar a:hover {
            color: #ED7D31;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar .logo img {
            width: 35px;
        } */
        .navbar a:nth-child(2){
            color: #ED7D31;
        }
        h1 {
            margin-top: 48px;
        }
        .scoreboard {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 28px 0;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .timer {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 0 40px 0;
            border: #000 solid 2px;
            padding: 10px 18px;
            border-radius: 10px;
            text-align: center;
        }
        .timer:hover {
            cursor: pointer;
        }
        .score {
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
            text-align: center;
            cursor: pointer;
        }
        .team-score:hover .score {
            cursor: pointer;
            font-size: 2.8em;
            font-weight: bold;
            text-align: center;
        }
        .team-score .team-name {
            position: absolute;
            top: -32px;
            padding: 5px 20px;
            font-size: 0.2em;
            font-weight: bold;
            color: #fff;
            border-radius: 5px;
            border: none;
            width: 7em;
            height: 4em;
            text-align: center;
        }
        .team-score .team-name:focus {
            outline: none;
        }
        .team-score .team-name.red {
            background-color: #ff5c5c;
        }
        .team-score .team-name.blue {
            background-color: #3FA3FF;
        }
        .score span {
            display: flex;
            align-items: center;
            justify-content: center;
            top: 24px;
        }
        .team-score .score-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 240px;
            height: 240px;
            background-color: linear-gradient(to top, #ccc, #999);
            border-radius: 10px;
        }
        .team-score .score {
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
        .team-score:hover .decrement.red {
            cursor: pointer;
            display: flex;
            left: 210px;
        }
        .team-score:hover .decrement.blue {
            cursor: pointer;
            display: flex;
            right: 210px;
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
        .start-reset {
            display: flex;
            font-size: 0.8em;
            font-weight: bold;
            gap: 16px;
            color: #333;
        }
        .start-pause {
            cursor: pointer;
        }
        .reset {
            cursor: pointer;
        }
        .save{
            border: none;
            outline: none;
            background:  none;
            color: #000; 
            cursor: pointer; 
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vertical-line {
            width: 3px;
            height: 30px;
            background-color: #333;
            margin: 0 auto;
        }
        .history{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .history h2 {
            margin: 48px 0 24px 0;
        }
        table {
            border-collapse: collapse;
            display: flex;
            margin: 0 0 40px 0;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: none;
            border-radius: 14px;
            overflow: hidden;
        }
        .history-team.red{
            color: #FF453A;
            text-align: right;
            width: 15em;
            padding-right: 20px;
        }
        .history-team.blue{
            color: #3FA3FF;
            text-align: left;
            width: 15em;
            padding-left: 20px;
        }
        .history-score{
            text-align: center;
        }
        .tengah{ 
            text-align: center;
        }
        .small{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        tr, td{
            border: none;
        }
        tr:nth-child(odd) td{
            padding-top: 16px;
        }
        tr:nth-child(even) td{
            padding-bottom: 16px;
        }
        tr:nth-of-type(4n-3),
        tr:nth-of-type(4n-2) {
            background-color: #4F4A45; /* gelap */
            color: #ffffff;
            margin: 10px 0;
        }

        tr:nth-of-type(4n-1),
        tr:nth-of-type(4n) {
            background-color: #B5AA9E; /* terang */
            color: #ffffff;
            margin: 10px 0;
        }
        /* footer {
            background-color: #4F4A45;
            color: #fff;
            padding: 32px 0;
            text-align: center;
            width: 100%;
            position: relative;
            bottom: 0;
        } */
    </style>
</head>
<body>
    <!-- <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="Gambar/logo.png" alt=""></a>
        </div>
        <a href="score-futsal.php" style="color: #ED7D31;">Futsal</a>
        <a href="score-badminton.php">Badminton</a>
        <a href="score-voli.php">Voli</a>
        <a href="score-basket.php">Basket</a>
    </div> -->
    <?php include 'Navbar/scoreBoard-Navbar.php'; ?>
    <h1>Futsal Match</h1>
    <div class="scoreboard">
        <form action="savematch-history-futsal.php" method="POST">
            <div class="timer">
                <span class="menit">10</span><span> : </span><span class="detik">00</span>
            </div>
            <div class="score">
                <!--Red-->
                <div class="team-score">
                    <input type="text" id="teamAName" name="team_a_name" maxlength="20" value="Home" class="team-name red">
                    <div class="score-container" onclick="tambah('teamAScore')">
                        <span id="teamAScore" class="score">0</span>
                        <input type="hidden" id="teamAScoreInput" name="team_a_score" value="0">
                    </div>
                    <div class="decrement red" onclick="kurang('teamAScore')">-</div>
                </div>
                <span>vs</span>
                <!--Blue-->
                <div class="team-score">
                    <input type="text" id="teamBName" name="team_b_name" maxlength="20" value="Away" class="team-name blue">
                    <div class="score-container" onclick="tambah('teamBScore')">
                        <span id="teamBScore" class="score">0</span>
                        <input type="hidden" id="teamBScoreInput" name="team_b_score" value="0">
                    </div>
                    <div class="decrement blue" onclick="kurang('teamBScore')">-</div>
                </div>
            </div>
            <div class="start-reset">
                <span class="start-pause"><i class='bx bxs-right-arrow'></i></span>
                <div class="vertical-line"></div>
                <span class="reset"><i class='bx bx-revision'></i></span>
                <div class="vertical-line"></div>
                <button type="submit" class="save"><i class='bx bx-save'></i></button>
            </div>
        </form>
    </div>
    <div class="history">
        <h2>History Pertandingan</h2>
        <?php
        if (isset($_SESSION['match_history_futsal']) && count($_SESSION['match_history_futsal']) > 0) {
            echo "<table>";
            foreach ($_SESSION['match_history_futsal'] as $match) {
                echo "<tr><td class='history-team red'>" .$match['team_a_name']. "</td><td class='history-score red'>" .$match['team_a_score']. "</td><td class='tengah small'>-</td><td class='history-score blue'>" .$match['team_b_score']. "</td><td class='history-team blue'>" .$match['team_b_name']. "</td></tr><tr><td class='tengah' colspan='5'>" .$match['match_date']. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No match history available.";
        }
        ?>
    </div>
    <?php include 'Footer/scoreBoard-Footer.php'; ?>
    <script>
        let menit = 0;
        let detik = 5;
        let timerInterval = null;
        const startPauseButton = document.querySelector(".start-pause");
        const resetButton = document.querySelector(".reset");
        const timerButton = document.querySelector(".timer");

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
                startPauseButton.innerHTML = "<i class='bx bxs-right-arrow'></i>";
            } else {
                startPauseButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
                timerInterval = setInterval(() => {
                    if (menit === 0 && detik === 0) {
                        clearInterval(timerInterval);
                        timerInterval = null;
                        startPauseButton.innerHTML = "<i class='bx bxs-right-arrow'></i>";
                        document.querySelector("form").submit();
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

        function reset() {
            clearInterval(timerInterval);
            timerInterval = null;
            startPauseButton.innerHTML = "<i class='bx bxs-right-arrow'></i>";

            menit = 10;
            detik = 0;

            document.getElementById("teamAScoreInput").value = 0;
            document.getElementById("teamBScoreInput").value = 0;
            document.getElementById("teamAScore").innerText = 0;
            document.getElementById("teamBScore").innerText = 0;
            updateTimerDisplay();
        }

        startPauseButton.addEventListener("click", toggleTimer);
        resetButton.addEventListener("click", reset);
        timerButton.addEventListener("click", toggleTimer);

        updateTimerDisplay();

        function tambah(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            scoreElement.innerText = currentScore + 1;
            document.getElementById(elementId + "Input").value = currentScore + 1;
        }

        function kurang(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            if (currentScore > 0) {
                scoreElement.innerText = currentScore - 1;
                document.getElementById(elementId + "Input").value = currentScore - 1;
            }
        }
    </script>
</body>
</html>