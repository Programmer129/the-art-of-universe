<?php
    $connect = new mysqli("0.0.0.0", "root", "1234", "web_project", "3307");
    if ($connect->connect_error) {
        die("Connection failed:" . $connect->connect_error);
    }
    $fname = $_POST['fname'];
    $usrname = $_POST["usrname"];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $connect->begin_transaction();
    $query = "insert into `users` (`name`, `password`, `first_name`, `last_name`, `mail`)
        values ('$usrname','$pwd','$fname','$lname','$email')";
    if ($connect->query($query) == true) {
        header('Location: ../../index.php');
    }
    $connect->commit();
    mysqli_close($connect);
?>