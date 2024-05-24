<?php

   
    $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_mahasiswa", 'root','');

    $koneksi->query("DELETE FROM mahasiswa");//memberikan perintah ke query utk menghapus data sesuai id nya

    header("Location: data.php"); //untuk berpindah halaman/file //utk berpindah halaman/file data.php
