<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - ScoreHub</title>
    <link rel="shotcut icon" href="Asset/Gambar/logo.png">
    <link rel="stylesheet" href="Navbar/landingPage-Navbar.css">
    <link rel="stylesheet" href="Footer/landingPage-Footer.css">
    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
    <style>
        /* Reset */
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Header */
        /* .header {
            background-color: #1a73e8;
            color: white;
            padding: 20px 10px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
        }

        .header span {
            color: #fbbc04;
        } */

        /* Main Section */
        main {
            padding: 40px 120px;
        }

        .intro {
            padding: 40px 120px;
            margin-bottom: 30px;
            text-align: center;
        }

        .intro h2 {
            color: #4F4A45;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .details {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card1 {
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 300px;
            width: 100%;
        }

        .card1 h3 {
            color: #4F4A45;
            margin-bottom: 10px;
        }

        .card1 ul {
            padding-left: 20px;
        }

        .card1 ul li {
            margin-bottom: 10px;
        }

        .card1 ul li strong {
            color: #fbbc04;
        }
        .abt-us{
            background-color: #9A7E6F;
            margin: 0;
            padding: 0;
        }
        .sec-cta {
            background: #4F4A45;
            color: #fff;
            padding: 40px 20px;
            text-align: center;
            border-radius: 8px;
            margin: 0 auto 120px auto;
            width: 80%;
            max-width: 800px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        
        .sec-cta .cta-content h2 {
            font-size: 2rem;
            margin-bottom: 15px;
        }
        .sec-cta .cta-content p {
            font-size: 1rem;
            margin-bottom: 20px;
            line-height: 1.5;
        }
        
        .sec-cta .btn1 {
            display: inline-block;
            padding: 12px 25px;
            background-color: #FFC107;
            color: #000;
            font-weight: bold;
            font-size: 1rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .sec-cta .btn1:hover {
            background-color: #FFB300;
            color: #fff;
            transform: scale(1.05);
        }
        /* Footer */
        /* .footer {
            text-align: center;
            background-color: #1a73e8;
            color: white;
            padding: 10px 0;
            margin-top: 20px;
        } */
    </style>
</head>
<body>
    <?php include 'Navbar/landingPage-Navbar.php'; ?>
    <main>
        <section class="intro">
            <h2>Apa itu ScoreHub?</h2>
            <p>ScoreHub adalah platform digital yang dirancang untuk memudahkan pencatatan dan pengelolaan skor pertandingan olahraga secara real-time. Dengan antarmuka yang intuitif dan fitur canggih, ScoreHub mendukung berbagai olahraga seperti futsal, badminton, voli, dan basket.</p>
        </section>

        <section class="details">
            <div class="card1">
                <h3>Fungsi</h3>
                <ul>
                    <li><strong>Pencatatan Skor Real-Time:</strong> Perubahan skor dapat diperbarui langsung saat pertandingan berlangsung.</li>
                    <li><strong>Pengelolaan Waktu Pertandingan:</strong> Timer otomatis dengan notifikasi audio ketika waktu habis.</li>
                    <li><strong>Penyimpanan Riwayat Pertandingan:</strong> Lihat detail skor dan waktu pertandingan sebelumnya.</li>
                    <li><strong>Antarmuka Pengguna yang Mudah:</strong> Proses pencatatan skor menjadi sederhana dan efisien.</li>
                </ul>
            </div>

            <div class="card1">
                <h3>Tujuan</h3>
                <ul>
                    <li>Meningkatkan efisiensi dalam pencatatan skor.</li>
                    <li>Menyediakan akses informasi transparan untuk pemain, pelatih, dan penonton.</li>
                    <li>Meningkatkan pengalaman pertandingan bagi semua pihak.</li>
                    <li>Memudahkan pengelolaan pertandingan olahraga.</li>
                </ul>
            </div>

            <div class="card1">
                <h3>Manfaat</h3>
                <ul>
                    <li><strong>Akurasi:</strong> Memastikan setiap perubahan skor tercatat dengan benar.</li>
                    <li><strong>Kemudahan Penggunaan:</strong> Dapat digunakan oleh siapa saja tanpa pelatihan khusus.</li>
                    <li><strong>Akses Informasi:</strong> Riwayat pertandingan dapat diakses kapan saja.</li>
                    <li><strong>Notifikasi Waktu:</strong> Audio notifikasi membantu mengelola waktu pertandingan.</li>
                    <li><strong>Peningkatan Pengalaman:</strong> Pertandingan menjadi lebih terorganisir dan seru.</li>
                </ul>
            </div>
        </section>
    </main>
    <section class="us">
        <div class="abt-us">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L34.3,144C68.6,128,137,96,206,74.7C274.3,53,343,43,411,64C480,85,549,139,617,144C685.7,149,754,107,823,112C891.4,117,960,171,1029,192C1097.1,213,1166,203,1234,170.7C1302.9,139,1371,85,1406,58.7L1440,32L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
            <?php include 'About-us.php'; ?>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#9A7E6F" fill-opacity="1" d="M0,160L34.3,144C68.6,128,137,96,206,74.7C274.3,53,343,43,411,64C480,85,549,139,617,144C685.7,149,754,107,823,112C891.4,117,960,171,1029,192C1097.1,213,1166,203,1234,170.7C1302.9,139,1371,85,1406,58.7L1440,32L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
    </section>
    <section class="sec">
        <div class="sec-cta">
            <div class="cta-content">
                <h2>Siap Berkolaborasi?</h2>
                <p>Mari bicarakan ide besar Anda dan temukan cara kami dapat membantu mencapainya.</p>
                <a href="#" class="btn1">Mulai Sekarang</a>
            </div>
        </div>
    </section>
    <?php include 'Footer/landingPage-Footer.php'; ?>
</body>
</html>
