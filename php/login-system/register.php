<!DOCTYPE>
<html>
<head>
    <title>Art of Universe</title>
    <link rel="stylesheet" href="../../style/global.css">
    <script src="../../js/app.js"></script>
    <link rel="icon" href="../../img/venus.jpg">
</head>
<body class="main-body">
<div class="log-in">
    <form action="server-register.php" method="post" autocomplete="off">
        <div class="container">
            <h2>Register</h2>

            <label for="fname"><b>First name</b></label>
            <input id="fname" type="text" placeholder="Enter Name" name="fname" required>

            <label for="lname"><b>Last name</b></label>
            <input id="lname" type="text" placeholder="Enter Last Name" name="lname" required>

            <label for="usrname"><b>User name</b></label>
            <input id="usrname" type="text" placeholder="Enter User Name" name="usrname" required>

            <label for="email"><b>Email</b></label>
            <input id="email" type="text" placeholder="Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input id="psw" type="password" placeholder="Enter Password" name="psw" required>

            <div>
                <button type="submit" class="signupbtn">Register</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
