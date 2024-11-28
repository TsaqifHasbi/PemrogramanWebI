<div class="container">
    <h1>My Founder</h1>
    <div class="carousel-container">
        <button class="nav-button prev" onclick="moveCarousel(-1)">&#10094;</button>
        <section class="card left" onclick="showModal(0)">
            <img src="Asset/Gambar/Paundra.jpg" alt="Paundra">
            <h2>Paundra</h2>
            <p>Back End Developer</p>
        </section>
        <section class="card front" onclick="showModal(1)">
            <img src="Asset/Gambar/Andhika.jpg" alt="Andhika">
            <h2>Andhika</h2>
            <p>UI/UX Designer</p>
        </section>
        <section class="card back" onclick="showModal(2)">
            <img src="Asset/Gambar/Tsaqif.jpg" alt="Tsaqif">
            <h2>Tsaqif</h2>
            <p>Front End Developer</p>
        </section>
        <button class="nav-button next" onclick="moveCarousel(1)">&#10095;</button>
    </div>
</div>
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h1 id="modal-role"></h1>
        <img id="modal-img" src="" alt="" style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 10px;">
        <h2 id="modal-name"></h2>
        <div class="quote-container">
            <p id="quote"></p>
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
        const role = ["Back End Developer", "UI/UX Designer", "Front End Developer"];
        const images = [
            "Asset/Gambar/Paundra.jpg",
            "Asset/Gambar/Andhika.jpg",
            "Asset/Gambar/Tsaqif.jpg"
        ];
        const names = ["Daiva Paundra Gevano", "Andhika Puta Restu Ilahi", "Tsaqif Hasbi Aghna Syarief"];
        const quote = ['"Jangan Nyerah, Tetap Semangat!"', '"Kreatifitas Itu Penting"', '"Jangan Lupa Bahagia"'];

        document.getElementById("modal-name").innerText = names[index];
        document.getElementById("modal-role").innerText = role[index];
        document.getElementById("modal-img").src = images[index];
        document.getElementById("quote").innerText = quote[index];
        document.getElementById("modal").style.display = "flex";
    }

    function closeModal() {
        document.getElementById("modal").style.display = "none";
    }

    updateCarousel();
</script>
