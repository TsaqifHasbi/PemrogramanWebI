<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang ScoreHub</title>
    <link rel="stylesheet" href="Navbar/landingPage-Navbar.css">
    <link rel="stylesheet" href="Footer/landingPage-Footer.css">
    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet" href="cta.css">
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
    <?php include 'About-card.php'; ?>
    <section class="sec-cta">
            <div class="cta-content">
                <h2>Siap Berkolaborasi?</h2>
                <p>Mari bicarakan ide besar Anda dan temukan cara kami dapat membantu mencapainya.</p>
                <a href="#" class="btn1">Mulai Sekarang</a>
            </div>
    </section>
    <?php include 'Footer/landingPage-Footer.php'; ?>
</body>
</html>
