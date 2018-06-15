<!DOCTYPE>
<html>
<head>
    <title>Art Of Universe</title>
    <link rel="stylesheet" href="../../style/global.css">
    <script src="../../js/app.js"></script>
    <link rel="icon" href="../../img/venus.jpg">
    <?php
    session_start();
    if(!isset($_SESSION["id"])) {
        header("Location: ../../index.php");
    }
    ?>
</head>
<body class="home-body">
<header>
    <nav>
        <ul>
            <li class="log-out"><a href="../../index.php">Log Out</a></li>
            <li><a class="active" href="planets.php">Planets</a></li>
            <li><a href="universe.php">Universe</a></li>
            <li><a href="astronauts.php">Astronauts</a></li>
            <li><a href="home.php">Home</a></li>
            <li class="custom-li"><a href="home.php">C.Sagan</a></li>
        </ul>
    </nav>
</header>
<section>
    <div id="f">
        <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Jupiter">
                <img src="../../img/jupiter.jpg" alt="Fjords" width="300" height="200">
            </a>
            <div class="desc">
                <p>Name: Jupiter</p>
                <p>Diameter: 139,822 km</p>
                <p>Distance from the sun: 778,340,821 km (5.20 AU)</p>
                <p>Orbit period: 11.9 years</p>
            </div>
        </div>

        <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Venus">
                <img src="../../img/venus.jpg" alt="Forest" width="300" height="200">
            </a>
            <div class="desc">
                <p>Name: Venus</p>
                <p>Diameter: 139,822 km</p>
                <p>Distance from the sun: 778,340,821 km (5.20 AU)</p>
                <p>Orbit period: 11.9 years</p>
            </div>
        </div>

        <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Mercury">
                <img src="../../img/mercury.jpg" alt="Northern Lights" width="300" height="200">
            </a>
            <div class="desc">
                <p>Name: Mercury</p>
                <p>Diameter: 139,822 km</p>
                <p>Distance from the sun: 778,340,821 km (5.20 AU)</p>
                <p>Orbit period: 11.9 years</p>
            </div>
        </div>

        <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Uranus">
                <img src="../../img/uranus.jpg" alt="Mountains" width="300" height="200">
            </a>
            <div class="desc">
                <p>Name: Uranus</p>
                <p>Diameter: 139,822 km</p>
                <p>Distance from the sun: 778,340,821 km (5.20 AU)</p>
                <p>Orbit period: 11.9 years</p>
            </div>
        </div>

        <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Mars">
                <img src="../../img/mars.jpg" alt="Mountains" width="300" height="200">
            </a>
            <div class="desc">
                <p>Name: Mars</p>
                <p>Diameter: 139,822 km</p>
                <p>Distance from the sun: 778,340,821 km (5.20 AU)</p>
                <p>Orbit period: 11.9 years</p>
            </div>
        </div>
        <button onclick="onSecondPage()">next</button>
    </div>
    <div id="s" style="display: none;">
        <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Earth">
                <img src="../../img/earth.jpg" alt="Fjords" width="300" height="200">
            </a>
            <div class="desc">
                <p>Name: Earth</p>
                <p>Diameter: 139,822 km</p>
                <p>Distance from the sun: 778,340,821 km (5.20 AU)</p>
                <p>Orbit period: 11.9 years</p>
            </div>
        </div>
        <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Saturn">
                <img src="../../img/saturn.jpg" alt="Fjords" width="300" height="200">
            </a>
            <div class="desc">
                <p>Name: Saturn</p>
                <p>Diameter: 139,822 km</p>
                <p>Distance from the sun: 778,340,821 km (5.20 AU)</p>
                <p>Orbit period: 11.9 years</p>
            </div>
        </div>
        <div class="gallery">
            <a target="_blank" href="https://en.wikipedia.org/wiki/Saturn">
                <img src="../../img/neptune.jpg" alt="Fjords" width="300" height="200">
            </a>
            <div class="desc">
                <p>Name: Neptune</p>
                <p>Diameter: 139,822 km</p>
                <p>Distance from the sun: 778,340,821 km (5.20 AU)</p>
                <p>Orbit period: 11.9 years</p>
            </div>
        </div>
        <button onclick="onFirstPage()">prev</button>
    </div>
</section>
<footer>
    <p>© 2023 by The Art of Universe. Proudly created with A.B</p>
</footer>
</body>
</html>