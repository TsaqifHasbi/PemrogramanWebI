<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #1a1a1a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        .carousel-container {
            position: relative;
            width: 80%;
            max-width: 1000px;
            height: 400px;
            perspective: 1000px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            position: absolute;
            width: 550px;
            height: 650px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            text-align: center;
            transition: transform 0.5s, z-index 0.5s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .card h2 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .card.back {
            transform: scale(0.8) translateX(150px);
            z-index: 1;
        }

        .card.front {
            transform: scale(1) translateX(0);
            z-index: 3;
        }

        .card.left {
            transform: scale(0.8) translateX(-150px);
            z-index: 1;
        }

        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(255, 255, 255, 0.7);
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 18px;
        }

        .nav-button.prev {
            left: 1px;
        }

        .nav-button.next {
            right: 1px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 500px;
            text-align: center;
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
    </style>
</head>
<body>
    <div class="carousel-container">
        <button class="nav-button prev" onclick="moveCarousel(-1)">&#10094;</button>
        <section class="card left" onclick="showModal(0)">
            <img src="Gambar/Paundra.jpg" alt="Paundra">
            <h2>Paundra</h2>
            <p>Back End Developer</p>
        </section>
        <section class="card front" onclick="showModal(1)">
            <img src="Gambar/Andhika.jpg" alt="Andhika">
            <h2>Andhika</h2>
            <p>UI/UX Designer</p>
        </section>
        <section class="card back" onclick="showModal(2)">
            <img src="Gambar/Tsaqif.jpg" alt="Tsaqif">
            <h2>Tsaqif</h2>
            <p>Front End Developer</p>
        </section>
        <button class="nav-button next" onclick="moveCarousel(1)">&#10095;</button>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 id="modal-name"></h2>
            <img id="modal-img" src="" alt="" style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
            <p id="modal-description"></p>
        </div>
    </div>

    <script>
    let cards = document.querySelectorAll(".card");
    let currentIndex = 1;

    function moveCarousel(direction) {
        currentIndex = (currentIndex + direction + cards.length) % cards.length;
        updateCarousel();
    }

    function updateCarousel() {
        cards.forEach((card, i) => {
            if (i === currentIndex) {
                card.className = "card front";
                card.onclick = () => showModal(i);
            } else if ((i + 1) % cards.length === currentIndex) {
                card.className = "card left";
                card.onclick = () => moveCarousel(-1);
            } else {
                card.className = "card back";
                card.onclick = () => moveCarousel(1);
            }
        });
    }

    function showModal(index) {
        const names = ["Paundra", "Andhika", "Tsaqif"];
        const descriptions = [
            "Back End Developer",
            "UI/UX Designer",
            "Front End Developer"
        ];
        const images = [
            "Gambar/Paundra.jpg",
            "Gambar/Andhika.jpg",
            "Gambar/Tsaqif.jpg"
        ];

        document.getElementById("modal-name").innerText = names[index];
        document.getElementById("modal-description").innerText = descriptions[index];
        document.getElementById("modal-img").src = images[index];
        document.getElementById("modal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }

    updateCarousel();
</script>
    </script>
</body>
</html>
