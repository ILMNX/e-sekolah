<?php   
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
 ?>   


<?php

$nama_dosen= $_POST['nama_dosen'];
$tanggal_kumpul= $_POST['tanggal_kumpul'];
$nama_mata_kuliah= $_POST['nama_mata_kuliah'];
$deskripsi= $_POST['deskripsi'];
$info_tambahan= $_POST['info_tambahan'];     

    $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard", 'root','');

    $koneksi->query("INSERT INTO tugas (nama_dosen, tanggal_kumpul, nama_mata_kuliah, deskripsi, info_tambahan) VALUES ('$nama_dosen','$tanggal_kumpul', '$nama_mata_kuliah',
    '$deskripsi','$info_tambahan')");

    header("Location: datatugas.php"); //untuk berpindah halaman/file



   

?>