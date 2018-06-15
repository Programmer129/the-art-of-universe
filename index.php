<!DOCTYPE>
<html>
<head>
    <title>Art of Universe</title>
    <link rel="stylesheet" href="style/global.css">
    <script src="js/app.js"></script>
    <link rel="icon" href="../../img/venus.jpg">
</head>
<body class="main-body">
<h1>The Art Of Universe</h1>
<div class="log-in">
    <form action="php/login-system/check.php" method="post" autocomplete="off">
        <div class="container">
            <h1>Sign In</h1>

            <label for="email"><b>User name</b></label>
            <input id="email" type="text" placeholder="Enter Name" name="usrname" required>

            <label for="psw"><b>Password</b></label>
            <input id="psw" type="password" placeholder="Enter Password" name="psw" required>

            <div>
                <button type="button" class="cancelbtn" onclick="location.href='php/login-system/register.php'">Register</button>
                <button type="submit" class="signupbtn">Sign In</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>