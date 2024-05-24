<?php

    $id = $_GET['id']; //mendapatkan ID

    //echo $id; //untuk mencetak variabel ID

    $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard", 'root','');

    $koneksi->query("DELETE FROM kegiatan WHERE id='$id'");//memberikan perintah ke query utk menghapus data sesuai id nya

    header("Location: datakegiatan.php"); //untuk berpindah halaman/file //utk berpindah halaman/file data.php
?>