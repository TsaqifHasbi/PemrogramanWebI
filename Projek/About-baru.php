<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel Cards</title>
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #1a1a1a;
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
      width: 250px;
      height: 350px;
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
  </style>
</head>
<body>
  <div class="carousel-container">
    <div class="card left" onclick="moveToFront(0)">
      <img src="Asset/Gambar/Paundra.jpg" alt="Paundra">
      <h2>Paundra</h2>
    </div>
    <div class="card front" onclick="moveToFront(1)">
      <img src="Asset/Gambar/Andhika.jpg" alt="Andhika">
      <h2>Andhika</h2>
    </div>
    <div class="card back" onclick="moveToFront(2)">
      <img src="Asset/Gambar/Tsaqif.jpg" alt="Tsaqif">
      <h2>Tsaqif</h2>
    </div>
  </div>

  <script>
    let cards = document.querySelectorAll(".card");

    function moveToFront(index) {
      const totalCards = cards.length;

      // Reset positions
      cards.forEach((card, i) => {
        if (i === index) {
          card.className = "card front";
        } else if ((i + 1) % totalCards === index) {
          card.className = "card left";
        } else {
          card.className = "card back";
        }
      });
    }
  </script>
</body>
</html>
