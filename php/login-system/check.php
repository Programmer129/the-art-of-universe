<?php
    $is_user = false;
    $connect = new mysqli("0.0.0.0", "root", "1234", "web_project", "3307");
    if ($connect->connect_error) {
        header("Location: ../../index.php");
    }
    $result = $connect->query("select * from users");
    while ($row = $result->fetch_assoc()) {
        if ($row["name"] == $_POST["usrname"] && $row["password"] == $_POST["psw"]) {
            session_start();
            $_SESSION["id"] = $row["name"];
            header("Location: ../site-pages/home.php");
            $is_user = true;
            break;
        }
    }
    if(!$is_user) {
        header("Location: ../../index.php");
    }
?>