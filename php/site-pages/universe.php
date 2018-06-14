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

    <div id="first-u">
        <div class="universe-left">
            <img src="../../img/buuble.jpg">
            <div>
                <p class="left-p-u">Buuble Universe</p>
                <p class="left-content-u">
                    Another theory for multiple universes comes from "eternal inflation."
                    Based on research from Tufts University cosmologist Alexander Vilenkin,
                    when looking at space-time as a whole, some areas of space stop inflating
                    like the Big Bang inflated our own universe. Others, however, will keep getting larger.
                    So if we picture our own universe as a bubble, it is sitting in a network of bubble universes of
                    space.
                    What's interesting about this theory is the other universes could have very different laws of
                    physics than
                    our own, since they are not linked.
                </p>
            </div>
        </div>
        <div class="universe-left">
            <img src="../../img/daughter.jpg">
            <div>
                <p class="right-p-u">Daughter Universe</p>
                <p class="right-content-u">
                    Or perhaps multiple universes can follow the theory of quantum mechanics
                    (how subatomic particles behave), as part of the "daughter universe" theory.
                    If you follow the laws of probability, it suggests that for every outcome that
                    could come from one of your decisions, there would be a range of universes — each
                    of which saw one outcome come to be. So in one universe, you took that job to China.
                    In another, perhaps you were on your way and your plane landed somewhere different,
                    and you decided to stay. And so on.
                </p>
            </div>
        </div>
        <button onclick="onFirstUniverse()">Next</button>
    </div>

    <div id="second-u">
        <div class="universe-left">
            <img src="../../img/infinite.jpg">
            <div>
                <p class="left-p-u">Infinite Universe</p>
                <p class="left-content-u">
                    Another theory for multiple universes comes from "eternal inflation."
                    Based on research from Tufts University cosmologist Alexander Vilenkin,
                    when looking at space-time as a whole, some areas of space stop inflating
                    like the Big Bang inflated our own universe. Others, however, will keep getting larger.
                    So if we picture our own universe as a bubble, it is sitting in a network of bubble universes of
                    space.
                    What's interesting about this theory is the other universes could have very different laws of
                    physics than
                    our own, since they are not linked.
                </p>
            </div>
        </div>
        <div class="universe-left">
            <img src="../../img/parallel.jpg">
            <div>
                <p class="right-p-u">Parallel Universe</p>
                <p class="right-content-u">
                    Or perhaps multiple universes can follow the theory of quantum mechanics
                    (how subatomic particles behave), as part of the "daughter universe" theory.
                    If you follow the laws of probability, it suggests that for every outcome that
                    could come from one of your decisions, there would be a range of universes — each
                    of which saw one outcome come to be. So in one universe, you took that job to China.
                    In another, perhaps you were on your way and your plane landed somewhere different,
                    and you decided to stay. And so on.
                </p>
            </div>
        </div>
        <button onclick="onSecondUniverse()">Prev</button>
    </div>
</section>
<footer>
    <p>© 2023 by The Art of Universe. Proudly created with A.B</p>
</footer>
</body>
</html>