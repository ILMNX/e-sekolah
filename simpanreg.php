<?php   
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
 ?>   


<?php
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];    
   
    $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard", 'root','');

    $koneksi->query("INSERT INTO users ( username,email, password) VALUES ( '$username', '$email',
    '$password')");

    session_start();
    $_SESSION['login'] = 'yes';

    header("Location: login.php"); //untuk berpindah halaman/file



   

?>