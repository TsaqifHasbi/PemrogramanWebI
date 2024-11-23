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
            user-select: none;
            /*overflow-y: scroll;
            -ms-overflow-style: none;
            scrollbar-width: none;*/
        }
        .container{
            display: flex;
            flex-direction: column;
            margin: 50px 0;
            gap: 98px;
        }
        .role{
            font-size: 2rem;
            color: #333;
            margin: 0;
            padding: 20px 0;
            font-weight: 600;
            text-transform: capitalize;
            position: relative;
        }
        .data{
            display: flex;
            flex-direction: column;
            align-items: center;
            border-left: 10px solid #4F4A45;
            border-right: 10px solid #4F4A45;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 50px 130px;
            margin: 20px 0;
        }
        .data h3{
            margin-top: 10px;
        }
        .data img {
            width: 200px;
            max-width: 100%;
            height: 200px;
            border-radius: 10px;
            display: block;
            margin-top: 15px;
            margin-left: auto;
            margin-right: auto;
        }
        .data .nama-gelar{
            opacity: 0.6;
        }
        .data .quote-container {
            background: linear-gradient(135deg, #ffffff, #e8e8e8);
            border-left: 5px solid #3498db;
            padding: 20px 30px;
            max-width: 600px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin: 40px auto;
        }
        .data p {
            margin-top: 15px;
            text-align: center;
            font-size: 16px;
        }
        .data i:hover{
            transform: scale(1.4);
        }
        .data .sm {
            display: flex;
            justify-content: center;
            margin: 20px 0 0 0;
            gap: 20px;
        }
        .data .sm a {
            color: black;
            width: 56px;
            font-size: 40px;
        }
        .data .sm .ig a i{
            color: black;
            transition: 0.3s linear;
        }
        .data .sm .ig a i:hover {
            background: linear-gradient(to top right, yellow, orange, red, purple, blue);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .data .sm .tw a i{
            color: black;
            transition: 0.3s linear;
        }
        .data .sm .tw a i:hover {
            color: rgb(62, 154, 190);
            -webkit-background-clip: text;
            background-clip: text;
        }
        .data .sm .sptfy a i {
            color: black;
            background-color: transparent;
            border-radius: 50%;
            display: inline-block;
            transition: color 0.8s ease, transform 0.8s ease;
        }

        .data .sm .sptfy a i:hover {
            color: green;
            background-color: black;
            transform: scale(1.2);
            border-radius: 50%;
        }


        .data .sm .git a i{
            color: black;
            transition: 0.3s linear;
        }
        .data .sm .dc a i {
            color: black;
            transition: 0.3s linear;
        }
        .data .sm .dc a i:hover {
            color: #5865F2;
            -webkit-background-clip: text;
            background-clip: text;
        }
        .data .sm .tik a i {
            color: black;
            transition: 0.3s linear;
        }
        .data .sm .steam a i {
            color: black;
            transition: 0.3s linear;
        }
        .data .sm .steam a i:hover {
            background: linear-gradient(to bottom, #171a21, #1b2838, #2a475e, #4c6f94, #66c0f4);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body>
    <?php include 'Navbar/landingPage-Navbar.php'; ?>
    <div class="container">
        <section id="Tsaqif">
            <div class="Content">
                <div class="role">
                    <h1 style="text-align: center;">Our Front End Developer</h1>
                </div>
                <div class="data">
                    <h3 style="text-align: center">Tsaqif Hasbi Aghna Syarief</h3>
                    <img src="Gambar/Tsaqif.jpg" alt="Tsaqif" title=""/>
                    <div class="nama-gelar">
                        <p>Tsaqif Hasbi Aghna Syarief S.Kom M.T</p>
                    </div>
                    <div class="quote-container">
                        <p>"Awas Ada Rubah."</p>
                    </div>
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
                        <div class="git">
                            <a href="https://github.com/TsaqifHasbi"><i class="bx bxl-github"></i></a>
                        </div>
                    </div>
                    <div class="sm">
                        <div class="dc">
                            <a href=""><i class='bx bxl-discord-alt'></i></a>
                        </div>
                        <div class="tik">
                            <a href=""><i class='bx bxl-tiktok'></i></i></a>
                        </div>
                        <div class="steam">
                            <a href=""><i class='bx bxl-steam'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Andhika">
            <div class="Content">
                <div class="role">
                    <h1 style="text-align: center;">Our UI/UX Designer</h1>
                </div>
                <div class="data">
                    <h3 style="text-align: center">Andhika Putra Restu Ilahi</h3>
                    <img src="Gambar/Andhika.jpg" alt="Andhika" title=""/>
                    <div class="nama-gelar">
                        <p>Andhika Putra Restu Ilahi S.Kom M.Kom</p>
                    </div>
                    <div class="quote-container">
                        <p>"Jalan-jalan ke arah pantai, ngapain?"</p>
                    </div>
                    <p>Follow My Social Media</p>
                    <div class="sm">
                        <div class="ig">
                            <a href=""><i class="bx bxl-instagram"></i></a>
                        </div>
                        <div class="tw">
                            <a href=""><i class="bx bxl-twitter"></i></a>
                        </div>
                        <div class="sptfy">
                            <a href=""><i class="bx bxl-spotify"></i></a>
                        </div>
                        <div class="git">
                            <a href=""><i class="bx bxl-github"></i></a>
                        </div>
                    </div>
                    <div class="sm">
                        <div class="dc">
                            <a href=""><i class='bx bxl-discord-alt'></i></a>
                        </div>
                        <div class="tik">
                            <a href=""><i class='bx bxl-tiktok'></i></i></a>
                        </div>
                        <div class="steam">
                            <a href=""><i class='bx bxl-steam'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="Paundra">
            <div class="Content">
                <div class="role">
                    <h1 style="text-align: center;">Our Back End Developer</h1>
                </div>
                <div class="data">
                    <h3 style="text-align: center">Daiva Paundra Gevano</h3>
                    <img src="Gambar/Paundra.jpg" alt="Paundra" title=""/>
                    <div class="nama-gelar">
                        <p>Daiva Paundra Gevano S.Kom M.Kom</p>
                    </div>
                    <div class="quote-container">
                        <p>"Jangan pernah menyerah pada mimpi-mimpimu, karena mimpimu adalah kunci menuju kebahagiaan."</p>
                    </div>
                    <p>Follow My Social Media</p>
                    <div class="sm">
                        <div class="ig">
                            <a href=""><i class="bx bxl-instagram"></i></a>
                        </div>
                        <div class="tw">
                            <a href=""><i class="bx bxl-twitter"></i></a>
                        </div>
                        <div class="sptfy">
                            <a href=""><i class="bx bxl-spotify"></i></a>
                        </div>
                        <div class="git">
                            <a href=""><i class="bx bxl-github"></i></a>
                        </div>
                    </div>
                    <div class="sm">
                        <div class="dc">
                            <a href=""><i class='bx bxl-discord-alt'></i></a>
                        </div>
                        <div class="tik">
                            <a href=""><i class='bx bxl-tiktok'></i></i></a>
                        </div>
                        <div class="steam">
                            <a href=""><i class='bx bxl-steam'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'Footer/landingPage-Footer.php'; ?>
</body>
</html>
