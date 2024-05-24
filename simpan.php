<?php   
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
 ?>   


<?php

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
   


    $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard", 'root','');

    $koneksi->query("INSERT INTO mahasiswa (nim, nama, email, jenis_kelamin, tanggal_lahir, jurusan, alamat, agama) VALUES ('$nim', '$nama','$email',
    '$jenis_kelamin','$tanggal_lahir', '$jurusan', '$alamat', '$agama')");

    header("Location: data.php"); //untuk berpindah halaman/file



   

?>