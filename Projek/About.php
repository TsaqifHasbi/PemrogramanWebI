<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScoreHub</title>
    <link rel="shotcut icon" href="Gambar/logo.png">
    <link rel="stylesheet" href="Navbar/landingPage-Navbar.css">
    <link rel="stylesheet" href="Footer/landingPage-Footer.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
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
        .container{
            display: flex;
            margin: 40px 0;
            justify-content: space-between;
            gap: 98px;
        }
        .data img {
            width: 200px;
            max-width: 100%;
            height: 200px;
            border-radius: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .data h2 {
            margin-top: 15px;
        }
        .data p {
            margin-top: 15px;
            text-align: center;
            font-size: 16px;
        }
        .data {
            padding-top: 140px;
        }
        .data .sm {
            display: flex;
            justify-content: center;
            margin: 20px 0px;
            gap: 20px;
        }
        .data .sm a {
            color: black;
            width: 56px;
            font-size: 40px;
        }
        .data .sm .ig a {
            color: black;
            transition: 0.3s linear;
        }
        .data .sm .ig a:hover {
            background: linear-gradient(to top right, yellow, orange, red, purple, blue);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            transform: scale(1.4);
        }
        .data .sm .tw a {
            color: black;
            transition: 0.3s linear;
        }
        .data .sm .tw a:hover {
            color: rgb(62, 154, 190);
            -webkit-background-clip: text;
            background-clip: text;
            transform: scale(1.4);
        }
        .data .sm .sptfy a {
            color: black;
            transition: 0.3s linear;
        }
        .data .sm .sptfy a:hover {
            color: green;
            -webkit-background-clip: text;
            background-clip: text;
            transform: scale(1.4);
        }
    </style>
</head>
<body>
    <?php include 'Navbar/landingPage-Navbar.php'; ?>
    <div class="container">
        <section id="Tsaqif">
            <div class="Content">
                <div class="data">
                    <img src="Gambar/TsaqifPP.jpeg" alt="Tsaqif" title=""/>
                    <h2 style="text-align: center">Tsaqif Hasbi Aghna Syarief</h2>
                    <p>Follow My Social Media</p>
                    <div class="sm">
                        <div class="ig">
                            <a href="https://www.instagram.com/tsaqif_hasbi/"><i class="bx bxl-instagram"></i></a>
                        </div>
                        <div class="tw">
                            <a href="https://twitter.com/TsaqifHasbi17?t=jot9H78I46MgPBj14Xk12w&s=08"><i class="bx bxl-twitter"></i></a>
                        </div>
                        <div class="sptfy">
                            <a href="https://open.spotify.com/user/21c2iygultzcmsl6lisvlu7tq?si=fyURqvnZTxWf1PttYhtcgQ&utm_source=copy-link"><i class="bx bxl-spotify"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Andhika">
            <div class="Content">
                <div class="data">
                    <img src="Gambar/AndhikaPP.jpg" alt="Andhika" title=""/>
                    <h2 style="text-align: center">Andhika Putra Restu Ilahi</h2>
                    <p>Follow My Social Media</p>
                    <div class="sm">
                        <div class="ig">
                            <a href="https://www.instagram.com/tsaqif_hasbi/"><i class="bx bxl-instagram"></i></a>
                        </div>
                        <div class="tw">
                            <a href="https://twitter.com/TsaqifHasbi17?t=jot9H78I46MgPBj14Xk12w&s=08"><i class="bx bxl-twitter"></i></a>
                        </div>
                        <div class="sptfy">
                            <a href="https://open.spotify.com/user/21c2iygultzcmsl6lisvlu7tq?si=fyURqvnZTxWf1PttYhtcgQ&utm_source=copy-link"><i class="bx bxl-spotify"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Paundra">
            <div class="Content">
                <div class="data">
                    <img src="Gambar/PaundraPP.jpg" alt="Paundra" title=""/>
                    <h2 style="text-align: center">Daiva Paundra Gevano</h2>
                    <p>Follow My Social Media</p>
                    <div class="sm">
                        <div class="ig">
                            <a href="https://www.instagram.com/tsaqif_hasbi/"><i class="bx bxl-instagram"></i></a>
                        </div>
                        <div class="tw">
                            <a href="https://twitter.com/TsaqifHasbi17?t=jot9H78I46MgPBj14Xk12w&s=08"><i class="bx bxl-twitter"></i></a>
                        </div>
                        <div class="sptfy">
                            <a href="https://open.spotify.com/user/21c2iygultzcmsl6lisvlu7tq?si=fyURqvnZTxWf1PttYhtcgQ&utm_source=copy-link"><i class="bx bxl-spotify"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'Footer/landingPage-Footer.php'; ?>
</body>
</html>
