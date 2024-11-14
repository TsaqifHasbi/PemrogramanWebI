<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScoreHub</title>
    <style>
        * {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f8f8f8;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
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
        .container {
            display: flex;
            flex-direction: column;
            padding-top: 80px;
        }
        .logo-container {
            display: flex;
            gap: 40px;
            flex-direction:row;
            flex-wrap: wrap;
            align-items: center;
            text-align: center;
            padding: 20px;
            background-color: #fff;
            width: 100%;
        }
        .logo-container .title {
            font-size: 5.5em;
            color: #ff6700;
            font-weight: bold;
            text-shadow: 1px 1px #000;
            margin: 10px 0;
        }
        .vertical-line {
            width: 2px;
            height: 100px;
            background-color: #333;
            margin: 0 auto;
        }
        .intro {
            max-width: 450px;
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
            max-width: 500px;
        }
        .ajakan button {
            margin-top: 20px;
            padding: 10px 20px;
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
            background-color: #4a4a4a;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="Gambar/logo.png" alt="">
        </div>
        <a href="#">Futsal</a>
        <a href="#">Memek</a>
        <a href="#">Voli</a>
        <a href="#">Basket</a>
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
        <button>Pilih Scoreboard...</button>
    </div>

    <!-- Footer -->
    <footer>
        © 2024 ScoreHub. All rights reserved.
    </footer>

</body>
</html>
