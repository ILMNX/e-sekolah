<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $valid = false;

    $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard",'root', '');

    $data_user = $koneksi->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");


    while ($data = $data_user->fetch(PDO::FETCH_BOTH)) {
        $VALID = true;

    }
    if ($valid) {
        session_start();
        $_SESSION['login'] = 'yes';
        $_session['username'] = $username;
        $_SESSION['email'] = $email;
        header("Location: index.php");
    } else {
        header("Location: index.php");
    }
   


    

?>    