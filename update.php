<?php

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$email = $_POST['email'];

$koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_mahasiswa", 'root','');

$koneksi->query("UPDATE mahasiswa SET nim = '$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir= '$tanggal_lahir', jurusan= '$jurusan', alamat='$alamat', agama= '$agama', email= '$email' WHERE id = '$id' ");

header("Location: data.php"); //untuk berpindah halaman/file

