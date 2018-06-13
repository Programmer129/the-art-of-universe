<!DOCTYPE>
<html>
<head>
    <title>Art Of Universe</title>
    <link rel="stylesheet" href="../../style/global.css">
    <script src="../../js/app.js"></script>
    <link rel="icon" href="../../img/venus.jpg">
</head>
<body class="home-body">
<header>
    <nav>
        <ul>
            <li><a class="active" href="planets.php">Planets</a></li>
            <li><a href="universe.php">Universe</a></li>
            <li><a href="astronauts.php">Astronauts</a></li>
            <li><a href="home.php">Home</a></li>
            <li class="custom-li"><a href="home.php">C.Sagan</a></li>
        </ul>
    </nav>
</header>
<section>
    <div id="first">
        <div class="gallery">
            <a target="_blank" href="../../img/jupiter.jpg">
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
            <a target="_blank" href="../../img/venus.jpg">
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
            <a target="_blank" href="../../img/mercury.jpg">
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
            <a target="_blank" href="../../img/uranus.jpg">
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
            <a target="_blank" href="../../img/mars.jpg">
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
    <div id="second" style="display: none;">
        <div class="gallery">
            <a target="_blank" href="../../img/earth.jpg">
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
            <a target="_blank" href="../../img/saturn.jpg">
                <img src="../../img/saturn.jpg" alt="Fjords" width="300" height="200">
            </a>
            <div class="desc">
                <p>Name: Saturn</p>
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