<?php   
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
 ?>   


<?php

   $nama_kegiatan=$_POST['nama_kegiatan'];
   $tanggal=$_POST['tanggal'];
   $semester=$_POST['semester'];
   $bagian=$_POST['bagian'];
   $lokasi=$_POST['lokasi'];

    $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard", 'root','');

    $koneksi->query("INSERT INTO kegiatan (nama_kegiatan, tanggal, semester, bagian, lokasi) VALUES ('$nama_kegiatan','$tanggal',
    '$semester','$bagian', '$lokasi')");

    header("Location: datakegiatan.php"); //untuk berpindah halaman/file



   

?>