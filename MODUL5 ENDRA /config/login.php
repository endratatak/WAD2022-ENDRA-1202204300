<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require '../config/connector.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $getData= "SELECT * FROM user_endra WHERE username= '$email'";
    $executeQuery = mysqli_query ($conn, $getData);

    if (mysqli_num_rows ($executeQuery) == 1) {
        $result = mysqli_fetch_assoc ($executeQuery);

        if (password_verify ($password, $result['password'])) {
            $_SESSION['username'] = $result[ 'username'];
            $_SESSION['message'] = "Anda berhasil login !";
            header('location : ../pages/Home-Endra.php');
            exit ();
        } else {
            $_SESSION['message- error'] = "Password anda salah, silahkan coba lagi !";
            header('location : ../pages/Login-Endra.php');
            exit ();
        }
    }
    $_SESSION['message-error'] = "Gagal Login";
    header ('location : ../pages/Login-Endra. php');
    exit();