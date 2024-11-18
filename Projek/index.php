<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScoreHub</title>
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
        .container {
            display: flex;
            flex-direction: column;
            padding-top: 80px;
        }
        .logo-container {
            display: flex;
            gap: 32px;
            flex-direction:row;
            flex-wrap: wrap;
            align-items: center;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            width: 100%;
        }
        .logo-container .title {
            font-size: 5em;
            color: black;
            font-weight: bold;
            text-shadow: 1px 1px #ff6700;
            margin: 10px 0;
        }
        .vertical-line {
            width: 2px;
            height: 130px;
            background-color: #333;
            margin: 0 auto;
        }
        .intro {
            max-width: 420px;
            margin-top: 10px;
            text-align: justify;
        }
        .features {
            display: flex;
            justify-content: space-around;
            width: 100%;
            max-width: 900px;
            padding: 30px 0;
            margin: 20px 0;
            background-color: #fff;
        }
        .feature {
            text-align: center;
            width: 30%;
        }

        .feature:hover {
            cursor: pointer;
        }
        .feature img {
            width: 80px;
            margin-bottom: 15px;
        }
        .ajakan {
            background: linear-gradient(to top right, #fff ,#ED7D31, #ED7D31, #ED7D31,#fff);
            color: #fff;
            text-align: center;
            padding: 30px 30px 30px 30px;
            border-radius: 16px;
            margin: 30px 0 60px 0;
            width: 80%;
            max-width: 650px;
        }
        .ajakan select {
            margin-top: 20px;
            padding: 10px 120px 10px 20px;
            font-size: 1em;
            color: #4a4a4a;
            background-color: #fff;
            border: 1px #ff6700;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .ajakan p{
            margin-top: 15px;
        }
        footer {
            background-color: #4F4A45;
            color: #fff;
            padding: 32px 0;
            text-align: center;
            width: 100%;
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
        <a href="score-voli.php">Voli</a>
        <a href="score-basket.php">Basket</a>
    </div>
    <div class="container">
        <div class="logo-container">
            <h1 class="title">ScoreHub</h1>
            <div class="vertical-line"></div>
            <div class="intro">
                <p>ScoreHub adalah platform berbasis web yang dirancang untuk mencatat skor pertandingan olahraga secara otomatis dan real-time. Ini ditujukan untuk meningkatkan efisiensi, transparansi, dan akurasi skor dalam berbagai cabang olahraga seperti futsal, badminton, voli, dan basket.</p>
            </div>
        </div>
    </div>
    <h2 style="text-align: center; margin-top: 20px; padding-top: 80px;">Mengapa ScoreHub?</h2>
    <div class="features">
        <div class="feature">
            <img src="Gambar/feature1.png" alt="Real-time">
            <p>Skor pertandingan dicatat dan diperbarui secara real-time</p>
        </div>
        <div class="feature">
            <img src="Gambar/feature2.png" alt="History">
            <p>Histori pertandingan yang dapat Anda akses kapan saja</p>
        </div>
        <div class="feature">
            <img src="Gambar/feature3.png" alt="Scoreboards">
            <p>Berbagai jenis scoreboard dari berbagai cabang olahraga</p>
        </div>
    </div>
    <div class="ajakan">
        <h2>Coba Sekarang!</h2>
        <p>Mulailah gunakan ScoreHub dan bersenang-senanglah!</p>
        <select>
            <option value="" disabled selected hidden>Pilih Scoreboard...</option>
            <option value="Futsal">Futsal</option>
            <option value="Badminton">Badminton</option>
            <option value="Voli">Voli</option>
            <option value="Basket">Futsal</option>
        </select>
    </div>
    <footer>
        © 2024 ScoreHub. All rights reserved.
    </footer>
</body>
</html>
