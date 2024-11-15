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
            margin-top: 86px;
        }
        .scoreboard {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 80px 0;
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
        .set-score {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 2em;
            font-weight: bold;
            color: #333;
        }
        .set-score .set-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        .set-score .set-number:hover{
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
            font-size: 0.8em;
            cursor: pointer;
            color: #333;
            background-color: #ddd;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            bottom: -10px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }
        .set-score .decrement-set:hover {
            background-color: #ddd;
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
        <a href="#">Futsal</a>
        <a href="#">Badminton</a>
        <a href="score-voli.php" style="color: #ED7D31;">Voli</a>
        <a href="#">Basket</a>
    </div>
    <h1>Volley Ball Match</h1>
    <div class="scoreboard">
        <!--red-->
        <div class="team-score">
            <div class="team-name red">IF</div>
            <div class="score-container">
                <span class="score">0</span>
            </div>
            <div class="decrement red">-</div>
        </div>
        <div class="set-score">
            <span>Set Score</span>
            <div class="set-container">
                <!--Red-->
                 <div class="decrement-set red">-</div>
                <span class="set-number red">0</span>
                <span>vs</span>
                <span class="set-number blue">0</span>
                <!--Blue-->
                <div class="decrement-set"blue>-</div>
            </div>
        </div>
        <!--Blue-->
        <div class="team-score">
            <div class="team-name blue">IF</div>
            <div class="score-container">
                <span class="score">0</span>
            </div>
            <div class="decrement blue">-</div>
        </div>
    </div>
    <footer>
        © 2024 ScoreHub. All rights reserved.
    </footer>

</body>
</html>
