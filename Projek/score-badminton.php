<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScoreHub - Badminton</title>
    <link rel="shortcut icon" href="Gambar/logo.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel='stylesheet'>

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
        .navbar a:hover {
            color: #ED7D31;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar .logo img {
            width: 35px;
        }
        h1 {
            margin-top: 56px;
        }
        .scoreboard {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 48px 0;
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .team-score {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 320px;
            height: 320px;
            background: linear-gradient(to top, #cccccc, #4F4A45);
            border-radius: 20px;
            position: relative;
            margin: 0 50px;
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
            background-color: #5c9eff;
        }
        .team-score .score-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 300px;
            background-color: linear-gradient(45deg, #ccc, #999);
            border-radius: 10px;
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
        .team-score:hover .decrement.red {
            cursor: pointer;
            display: flex;
            left: 300px;
        }
        .team-score:hover .decrement.blue {
            cursor: pointer;
            display: flex;
            right: 300px;
        }
        .team-score .decrement:hover {
            background-color: #B7B7B7;
        }
        .set-score {
            display: flex;
            position: relative;
            flex-direction: column;
            align-items: center;
            font-size: 2em;
            font-weight: bold;
            color: #333;
        }
        .set-score .set-scoreflex {
            display: flex;
            align-items: center;
        }
        .set-score .set-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        .set-score .set {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .set-score .set-number:hover {
            font-size: 1.4em;
            cursor: pointer;
        }
        .set-score .set-number {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 10px;
            position: relative;
            margin: 0 10px;
            font-size: 1.2em;
            box-shadow: inset 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        .set-score .decrement-set {
            position: absolute;
            font-size: 0.8em;
            cursor: pointer;
            color: #333;
            background-color: #ddd;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            bottom: -10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        .set-score .decrement-set:hover {
            background-color: #B7B7B7;
        }
        .set-container:hover .decrement-set.red {
            display: flex;
            cursor: pointer;
            left: 48px;
        }
        .set-container:hover .decrement-set.blue {
            display: flex;
            cursor: pointer;
            right: 49px;
        }
        .setboard{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 18px 0 16px 0;
        }
        .setboard .team-set {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 360px;
            height: 200px;
            background: linear-gradient(to top, #cccccc, #4F4A45);
            border-radius: 20px;
            position: relative;
            margin: 0 48px 12px 48px;
            color: #000;
            font-size: 1.6em;
            font-weight: bold;
        }
        .setboard .team-set input{
            border: none;
            border-radius: 5px;
            margin-bottom: 8px;
            text-align: center;
            padding-left: 10px;
        }
        .setboard .team-set label{
            font-size: 0.5em;
            text-align: center;
        }
        .setboard .team-set .result-box{
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 6px;
            width: 160px;
            height: 46px;
            position: absolute;
            top: -32px;
        }
        .setboard .team-set .result-box.red{
            background-color: #ff5c5c;
        }
        .setboard .team-set .result-box.blue{
            background-color: #5c9eff;
        }
        .resub {
            display: flex;
            font-size: 0.8em;
            font-weight: bold;
            gap: 20px;
            color: #333;
        }
        
        .resub span {
            display: flex;
            position: relative;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 2em;
            font-weight: bold;
            color: #333;
        }
        .resub span, .resub button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            transition: transform 1s ease-in-out;
        }

        .resub span:hover i, .resub button:hover i {
            transform: scale(1.2);
        }

        .result{
            cursor: pointer;
        }
        .reset {
            cursor: pointer;
        }
        button{
            border: none;
            outline: none;
            background: none;
            color: #333;
            cursor: pointer;
            font-size: 2em;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .history {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .history h2 {
            margin: 48px 0 24px 0;
        }
        .history table {
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
        .history-team.red {
            color: #FF453A;
            text-align: right;
            width: 15em;
            padding-right: 20px;
        }
        .history-team.blue {
            color: #3FA3FF;
            text-align: left;
            width: 15em;
            padding-left: 20px;
        }
        .history-score {
            text-align: center;
        }
        .tengah {
            text-align: center;
        }
        .small {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        tr, td {
            border: none;
        }
        .history tr:nth-child(odd) td {
            padding-top: 16px;
        }
        .history tr:nth-child(even) td {
            padding-bottom: 16px;
        }
        .history tr:nth-of-type(4n-3),
        .history tr:nth-of-type(4n-2) {
            background-color: #4F4A45; /* gelap */
            color: #ffffff;
            margin: 10px 0;
            cursor: pointer;
        }
        .history tr:nth-of-type(4n-1),
        .history tr:nth-of-type(4n) {
            background-color: #B5AA9E; /* terang */
            color: #ffffff;
            margin: 10px 0;
            cursor: pointer;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
            border-radius: 12px;
        }
        .modal-content h2, .modal-content p {
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .modal-content p {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        #modalContent table{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        /*#modalContent table, #modalContent tr, #modalContent td {
            border: #000 1px solid;
        }*/
        #modalContent table td{
            text-align: center;
        }
        #modalContent table .r, #modalContent table .l{
            width: 100px;
        }
        footer {
            background-color: #4F4A45;
            color: #ffffff;
            padding: 32px 0;
            text-align: center;
            width: 100%;
            position: relative;
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
        <a href="score-badminton.php" style="color: #ED7D31;">Badminton</a>
        <a href="score-voli.php">Voli</a>
        <a href="score-basket.php">Basket</a>
    </div>
    <h1>Badminton Match</h1>
    <div class="scoreboard">
        <form action="savematch-history-badminton.php" method="post">
            <!--Red-->
            <div class="team-score">
                <input type="text" id="teamAName" name="team_a_name" maxlength="20" value="Home" class="team-name red">
                <div class="score-container" onclick="tambah('teamAScore')">
                    <span id="teamAScore" class="score">0</span>
                    <input type="hidden" id="teamAScoreInput" name="team_a_score" value="0">
                </div>
                <div class="decrement red" onclick="kurang('teamAScore')">-</div>
            </div>
            <div class="set-score">
                <span>Set Score</span>
                <div class="set-scoreflex">
                    <div class="set-container">
                        <!--Red-->
                        <div class="set red" onclick="tambah('teamASet')">
                            <span id="teamASet" class="set-number red">0</span>
                            <input type="hidden" id="teamASetInput" name="team_a_set" value="0">
                        </div>
                        <div class="decrement-set red" onclick="kurang('teamASet')">-</div>
                    </div>
                    <span>vs</span>
                    <div class="set-container">
                        <!--Blue-->
                        <div class="set blue" onclick="tambah('teamBSet')">
                            <span id="teamBSet" class="set-number blue">0</span>
                            <input type="hidden" id="teamBSetInput" name="team_b_set" value="0">
                        </div>
                        <div class="decrement-set blue" onclick="kurang('teamBSet')">-</div>
                    </div>
                </div>
            </div>
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
        <div class="setboard">
            <!-- Red Team -->
            <div class="team-set red">
                <div class="result-box red">
                    <span class="result">Result</span>
                </div>
                <label for="team_a_score_set1">set 1</label>
                <input type="number" id="team_a_score_set1" name="team_a_score_set1" required readonly>
                <label for="team_a_score_set2">set 2</label>
                <input type="number" id="team_a_score_set2" name="team_a_score_set2" required readonly>
                <label for="team_a_score_set3">set 3</label>
                <input type="number" id="team_a_score_set3" name="team_a_score_set3" required readonly>
            </div>
            <!-- Blue Team -->
            <div class="team-set blue">
                <div class="result-box blue">
                    <span class="result">Result</span>
                </div>
                <label for="team_b_score_set1">set 1</label>
                <input type="number" id="team_b_score_set1" name="team_b_score_set1" required readonly>
                <label for="team_b_score_set2">set 2</label>
                <input type="number" id="team_b_score_set2" name="team_b_score_set2" required readonly>
                <label for="team_b_score_set3">set 3</label>
                <input type="number" id="team_b_score_set3" name="team_b_score_set3" required readonly>
            </div>
        </div>
        <div class="resub">
            <span class="result" onclick="result()"><i class='bx bx-list-plus'></i></span>
            <span class="reset" onclick="reset()"><i class='bx bx-revision'></i></span>
            <button type="submit" class="save"><i class='bx bx-save'></i></button>
        </div>
    </form>
    <div id="scoreModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Detail Skor</h2>
            <div id="modalContent"></div>
        </div>
    </div>
    <div class="history">
        <h2>History Pertandingan</h2>
        <?php
        if (isset($_SESSION['match_history_badminton']) && count($_SESSION['match_history_badminton']) > 0) {
            echo "<table>";
            foreach ($_SESSION['match_history_badminton'] as $index => $match) {
                echo "<tr data-index='$index'><td class='history-team red'>" .$match['team_a_name']. "</td><td class='history-score red'>" .$match['team_a_set']. "</td><td class='tengah small'>-</td><td class='history-score blue'>" .$match['team_b_set']. "</td><td class='history-team blue'>" .$match['team_b_name']. "</td></tr><tr><td class='tengah' colspan='5'>" .$match['match_date']. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No match history available.";
        }
        ?>
    </div>
    <footer>
        © 2024 ScoreHub. All rights reserved.
    </footer>
    <script>
        function tambah(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            scoreElement.innerText = currentScore + 1;
            document.getElementById(elementId + "Input").value = currentScore + 1;

            const teamAScore = parseInt(document.getElementById("teamAScore").innerText);
            const teamBScore = parseInt(document.getElementById("teamBScore").innerText);

            if (teamAScore >= 21 && teamAScore >= teamBScore + 2) {
                tambahSetA();
                saveSetScore(teamAScore, teamBScore);
            }else if (teamBScore >= 21 && teamBScore >= teamAScore + 2) {
                tambahSetB();
                saveSetScore(teamAScore, teamBScore);
            }
        }
        
        function tambahSetA(){
            const setElement = document.getElementById("teamASet");
            let currentSet = parseInt(setElement.innerText);
            setElement.innerText = currentSet + 1;
            document.getElementById("teamASetInput").value = currentSet + 1;
        }

        function tambahSetB(){
            const setElement = document.getElementById("teamBSet");
            let currentSet = parseInt(setElement.innerText);
            setElement.innerText = currentSet + 1;
            document.getElementById("teamBSetInput").value = currentSet + 1;
        }

        function saveSetScore(teamAScore, teamBScore) {
            let set1a = document.getElementById(`team_a_score_set1`).value;
            let set1b = document.getElementById(`team_b_score_set1`).value;
            let set2a = document.getElementById(`team_a_score_set2`).value;
            let set2b = document.getElementById(`team_b_score_set2`).value;
            let set3a = document.getElementById(`team_a_score_set3`).value;
            let set3b = document.getElementById(`team_b_score_set3`).value;

            if (!set1a && !set1b) {
                document.getElementById(`team_a_score_set1`).value = teamAScore;
                document.getElementById(`team_b_score_set1`).value = teamBScore;
            } else if (!set2a && !set2b) {
                document.getElementById(`team_a_score_set2`).value = teamAScore;
                document.getElementById(`team_b_score_set2`).value = teamBScore;
            } else if (!set3a && !set3b) {
                document.getElementById(`team_a_score_set3`).value = teamAScore;
                document.getElementById(`team_b_score_set3`).value = teamBScore; 
                document.querySelector("form").submit();
            }
            else {
                alert("Belum semua set terisi. Pastikan semua set terisi sebelum menyimpan.");
            }
            resetScores();
        }

        function resetScores() {
            document.getElementById("teamAScore").innerText = 0;
            document.getElementById("teamBScore").innerText = 0;
            document.getElementById("teamAScoreInput").value = 0;
            document.getElementById("teamBScoreInput").value = 0;
        }
        function resetSet(){
            document.getElementById("teamASet").innerText = 0;
            document.getElementById("teamBSet").innerText = 0;
            document.getElementById("teamASetInput").value = 0;
            document.getElementById("teamBSetInput").value = 0;
        }
        function reset() {
            resetScores();
            resetSet();
            document.getElementById("team_a_score_set1").value = '';
            document.getElementById("team_a_score_set2").value = '';
            document.getElementById("team_a_score_set3").value = '';
            document.getElementById("team_b_score_set1").value = '';
            document.getElementById("team_b_score_set2").value = '';
            document.getElementById("team_b_score_set3").value = '';
        }

        function kurang(elementId) {
            const scoreElement = document.getElementById(elementId);
            let currentScore = parseInt(scoreElement.innerText);
            if (currentScore > 0) {
                scoreElement.innerText = currentScore - 1;
                document.getElementById(elementId + "Input").value = currentScore - 1;
            }
        }

        function result(){
            const teamAScore = parseInt(document.getElementById("teamAScore").innerText);
            const teamBScore = parseInt(document.getElementById("teamBScore").innerText);
            if (teamAScore > teamBScore) {
                tambahSetA();
                saveSetScore(teamAScore, teamBScore);
            }else if (teamAScore < teamBScore) {
                tambahSetB();
                saveSetScore(teamAScore, teamBScore);
            }else{
                alert("Skor seri, tidak bisa disimpan");
            }
        }

        const modal = document.getElementById("scoreModal");
        const close = document.getElementsByClassName("close")[0];

        function showModal(match) {
            const modalContent = document.getElementById("modalContent");
            modalContent.innerHTML = `
                <table>
                    <tr>
                        <th class="r">${match.team_a_name}</th>
                        <td>-</td>
                        <th class="l">${match.team_b_name}</th>
                    </tr>
                    <tr>
                        <td class="r">${match.team_a_score_set1}</td>
                        <td>-</td>
                        <td class="l">${match.team_b_score_set1}</td>
                    </tr>
                    <tr>
                        <td class="r">${match.team_a_score_set2}</td>
                        <td>-</td>
                        <td class="l">${match.team_b_score_set2}</td>
                    </tr>
                    <tr>
                        <td class="r">${match.team_a_score_set3}</td>
                        <td>-</td>
                        <td class="l">${match.team_b_score_set3}</td>
                    </tr>
                </table>
            `;
            modal.style.display = "block";
        }

        close.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        document.querySelectorAll(".history tr").forEach(row => {
            row.addEventListener("click", () => {
                const matchIndex = row.getAttribute("data-index");
                const match = <?php echo json_encode($_SESSION['match_history_badminton']); ?>[matchIndex];
                showModal(match);
            });
        });</script>
</body>
</html>