<!DOCTYPE>
<html>
<head>
    <title>Art of Universe</title>
    <link rel="stylesheet" href="../../style/global.css">
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
                <li class="log-out"><a href="../login-system/log-out.php">Log Out</a></li>
                <li ><a class="active" href="planets.php">Planets</a></li>
                <li ><a href="universe.php">Universe</a></li>
                <li ><a href="astronauts.php">Astronauts</a></li>
                <li ><a href="home.php">Home</a></li>
                <li class="custom-li"><a href="home.php">C.Sagan</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="left-content">
            <p class="left-p"><a href="planets.php">View Planets</a></p>
            <img src="../../img/planets.jpg">
        </div>
        <div class="left-content">
            <p class="center-p"><a href="universe.php">View Universe</a></p>
            <img src="../../img/universe1.jpg">
        </div>
        <div class="left-content">
            <p class="right-p"><a href="astronauts.php">View Astronauts</a></p>
            <img src="../../img/space-explorer.jpg">
        </div>
    </section>
    <footer>
        <p>© 2023 by The Art of Universe. Proudly created with A.B</p>
    </footer>
</body>
</html>