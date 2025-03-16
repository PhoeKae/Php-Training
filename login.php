<?php

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($username == "god" and $email == "2@2" and $password == "kzt") {
        session_start();
        $_SESSION['user'] = ['name' => 'kzt'];
        header("location : logout.php");
}else {
    header("location : index.php?incorrect=login");
}
