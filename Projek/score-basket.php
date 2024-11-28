<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScoreHub - Basket</title>
    <link rel="shotcut icon" href="Asset/Gambar/logo.png">
    <link rel="stylesheet" href="Navbar/scoreBoard-Navbar.css">
    <link rel="stylesheet" href="Footer/scoreBoard-Footer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        .navbar a:hover{
            color: #ED7D31;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar .logo img{
            width: 35px;
        } */
        .navbar a:nth-child(5){
            color: #ED7D31;
        }
        h1{
            margin-top: 48px;
        }
        form {
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
            padding: 15px 28px;
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
            font-size: 1.8em;
            font-weight: bold;
            text-align: center;
            justify-content: center;
            align-items: center;
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
            font-size: 1.5em;
            color: #333;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 240px;
            height: 240px;
        }
        .team-score .option {
            display: flex;
            justify-content: center;
            display: none;
            top: 6em;
            gap: 10px;
        }
        .team-score .score-container span{
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            color: #333;
            /*box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);*/
        }
        .team-score .score-container{
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .min, .plus2, .plus3 {
            position: relative;
            font-size: 0.2em;
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
        .team-score:hover .option{
            cursor: pointer;
            display: flex;
        }
        .team-score:hover .min, .plus2, .plus3{
            cursor: pointer;
            display: flex;
            top: 7.5em;
        }
        .min:hover, .plus2:hover, .plus3:hover {
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
            cursor: pointer;
        }
        .shotime-container .container{
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .shotime-container .container span{
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            font-size: 1em;
            color: #333;
            /*box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);*/
        }
        .shotime-manage{
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
            top: 10px;
            gap: 10px;
        }
        .nol, .half, .full {
            position: relative;
            font-size: 0.2em;
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
        .shotime-container:hover .nol, .half, .full{
            cursor: pointer;
            display: flex;
            top: 4em;
        }
        .nol:hover, .half:hover, .full:hover{
            background-color: #B7B7B7;
        }
        .shotime-container:hover .shotime-manage{
            cursor: pointer;
            display: flex;
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
            margin: 30px 0;
            font-weight: bold;
            gap: 30px;
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
            bottom: 0;
            position: relative;
        } */
    </style>
</head>
<body>
    <!-- <div class="navbar">
        <div class="logo">
            <a href="index.php"><img src="Gambar/logo.png" alt=""></a>
        </div>
        <a href="score-futsal.php">Futsal</a>
        <a href="score-badminton.php">Badminton</a>
        <a href="score-voli.php">Voli</a>
        <a href="score-basket.php" style="color: #ED7D31;">Basket</a>
    </div> -->
    <?php include 'Navbar/scoreBoard-Navbar.php'; ?>
    <h1>Basketball Match</h1>
    <div class="scoreboard">
        <form action="savematch-history-basket.php" method="POST">
            <div class="timer" onclick="toggleTimer()">
                <span class="menit">10</span><span> : </span><span class="detik">00</span>
            </div>
            <div class="score">
                <!--Red-->
                <div class="team-score">
                <input type="text" id="teamAName" name="team_a_name" maxlength="20" value="Home" class="team-name red" oninput="updateTeamName('teamAName', 'teamANameDisplay')">
                    <div class="score-container" onclick="tambah('teamAScore')">
                        <span id="teamAScore" class="numscore">0</span>
                        <input type="hidden" id="teamAScoreInput" name="team_a_score" value="0">
                    </div>
                    <div class="option red">
                        <span class="min" onclick="kurang('teamAScore')">-1</span>
                        <span class="plus2" onclick="tambah2('teamAScore')">+2</span>
                        <span class="plus3" onclick="tambah3('teamAScore')">+3</span>
                    </div>
                </div>
                <span>vs</span>
                <!--Blue-->
                <div class="team-score">
                <input type="text" id="teamBName" name="team_b_name" maxlength="20" value="Away" class="team-name blue" oninput="updateTeamName('teamBName', 'teamBNameDisplay')">
                    <div class="score-container" onclick="tambah('teamBScore')">
                        <span id="teamBScore" class="numscore">0</span>
                        <input type="hidden" id="teamBScoreInput" name="team_b_score" value="0">
                    </div>
                    <div class="option blue">
                        <span class="min" onclick="kurang('teamBScore')">-1</span>
                        <span class="plus2" onclick="tambah2('teamBScore')">+2</span>
                        <span class="plus3" onclick="tambah3('teamBScore')">+3</span>
                    </div>
                </div>
            </div>
            <div class="shotime-container">
                    <div class="container">
                        <span id="shotime" class="shotime">24</span>
                    </div>
                    <div class="shotime-manage">
                        <span class="nol">0</span>
                        <span class="half">14</span>
                        <span class="full">24</span>
                    </div>
            </div>
            <div class="start-reset">
                <span class="start-pause" onclick="toggleTimer()"><i class='bx bxs-right-arrow'></i></span>
                <span class="reset"><i class='bx bx-revision'></i></span>
                <button type="submit" class="save"><i class='bx bx-save'></i></button>
            </div>
        </form>
    </div>
    <div class="history">
        <h2>History Pertandingan</h2>
        <?php
        if (isset($_SESSION['match_history_basket']) && count($_SESSION['match_history_basket']) > 0) {
            echo "<table>";
            foreach ($_SESSION['match_history_basket'] as $match) {
                echo "<tr><td class='history-team red'>" .$match['team_a_name']. "</td><td class='history-score red'>" .$match['team_a_score']. "</td><td class='tengah small'>-</td><td class='history-score blue'>" .$match['team_b_score']. "</td><td class='history-team blue'>" .$match['team_b_name']. "</td></tr><tr><td class='tengah' colspan='5'>" .$match['match_date']. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No match history available.";
        }
        ?>
    </div>
    <?php include 'Footer/scoreBoard-footer.php'; ?>
    <script>
        let menit = 10;
        let detik = 0;
        let timerInterval = null;
        let shotime = 24;
        let shotimeInterval = null;
        const initialMenit = menit;
        const initialDetik = detik;
        const initialShotime = shotime;
        const timerElement = document.querySelector(".timer");
        const shotimeElement = document.querySelector("#shotime");
        const shotimeContainer = document.querySelector(".shotime-container");
        const shotimeCont = document.querySelector(".shotime-container .container");
        const startPauseButton = document.querySelector(".start-pause");

        function updateTimerDisplay() {
            const menitElement = document.querySelector(".menit");
            const detikElement = document.querySelector(".detik");
            menitElement.textContent = menit.toString().padStart(2, "0");
            detikElement.textContent = detik.toString().padStart(2, "0");
        }

        function updateShotimeDisplay() {
            shotimeElement.textContent = shotime.toString().padStart(2, "0");
        }

        function toggleTimer() {
            if (timerInterval) {
                clearInterval(timerInterval);
                timerInterval = null;
                clearInterval(shotimeInterval);
                shotimeInterval = null;
                startPauseButton.innerHTML = "<i class='bx bxs-right-arrow'></i>";
            } else {
                startPauseButton.innerHTML = "<i class='bx bx-pause-circle'></i>";
                timerInterval = setInterval(() => {
                    if (menit === 0 && detik === 0) {
                        clearInterval(timerInterval);
                        clearInterval(shotimeInterval);
                        resetTimer();
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

                // Memulai shotime jika belum berjalan
                if (!shotimeInterval) {
                    startShotime();
                }
            }
        }

        function startShotime() {
            shotimeInterval = setInterval(() => {
                if (shotime === 0) {
                    shotime = initialShotime;
                    playAudio();
                    updateShotimeDisplay();
                    return;
                }
                shotime--;
                updateShotimeDisplay();
            }, 1000);
        }

        function playAudio() {
            const audio = new Audio('Audio/peep.wav');
            audio.play();
        }



        // Klik pada shotime untuk pause/resume
        shotimeContainer.addEventListener("click", () => {
            if (shotimeInterval) {
                clearInterval(shotimeInterval);
                shotimeInterval = null;
            } else {
                startShotime();
            }
        });


        document.querySelector(".nol").addEventListener("click", () => {
            shotime = 0;
            updateShotimeDisplay();
            clearInterval(timerInterval);
            clearInterval(shotimeInterval);
            timerInterval = null;
            shotimeInterval = null;
        });

        document.querySelector(".half").addEventListener("click", () => {
            shotime = 14;
            updateShotimeDisplay();
        });

        document.querySelector(".full").addEventListener("click", () => {
            shotime = 24;
            updateShotimeDisplay();
        });

        updateTimerDisplay();
        updateShotimeDisplay();

        function tambah(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            scoreElement.innerText = currentScore + 1;
            document.getElementById(elementId + "Input").value = currentScore + 1;
        }

        function tambah2(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            scoreElement.innerText = currentScore + 2;
            document.getElementById(elementId + "Input").value = currentScore + 2;
        }

        function tambah3(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            scoreElement.innerText = currentScore + 3;
            document.getElementById(elementId + "Input").value = currentScore + 3;
        }

        function kurang(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            if (currentScore > 0) {
                scoreElement.innerText = currentScore - 1;
                document.getElementById(elementId + "Input").value = currentScore - 1;
            }
        }
        function updateTeamName(inputId, displayId) {
            const inputElement = document.getElementById(inputId);
            const displayElement = document.getElementById(displayId);
            displayElement.innerText = inputElement.value;
        }
        function resetTimer() {
            clearInterval(timerInterval);
            clearInterval(shotimeInterval);
            timerInterval = null;
            shotimeInterval = null;
            menit = initialMenit;
            detik = initialDetik;
            shotime = initialShotime;
            updateTimerDisplay();
            updateShotimeDisplay();
        }
    </script>
</body>
</html>
