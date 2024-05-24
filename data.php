<?php   
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
 ?>   



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Mahasiswa</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body class=".bg2">
<nav  class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1">Aplikasi Mahasiswa</span>
</nav>
<br>

<div class="container">
    
    <table border="1"class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">NIM</th>
                <th class="text-center">NAMA</th>
                <th class="text-center">EMAIL</th>
                <th class="text-center">JENIS KELAMIN</th>
                <th class="text-center">TANGGAL LAHIR</th>
                <th class="text-center">JURUSAN</th>
                <th class="text-center">ALAMAT</th>
                <th class="text-center">AGAMA</th>
                <th class="text-center">DELETE</th>
                <th class="text-center">EDIT</th>

            </tr>
        </thead>
        <?php

$koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard", 'root','');//menghubungkan aplikasi dengan database


$data_mahasiswa = $koneksi->query("SELECT * FROM mahasiswa");//mengambil semua field di tabel mahasiswa
while ($data= $data_mahasiswa->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
        <td>$data[nim]</td>
        <td>$data[nama]</td>
        <td>$data[email]</td>
        <td>$data[jenis_kelamin]</td>
        <td>$data[tanggal_lahir]</td>
        <td>$data[jurusan]</td>
        <td>$data[alamat]</td>
        <td>$data[agama]</td>

        <td> 
             <a href='delete.php?id=$data[id]' class='btn btn-danger' onclick='return confirm(\"apakah anda yakin?\")'>Hapus<a/>
        </td>
        <td>
        <a href='edit.php?id=$data[id]' class='btn btn-danger'>Edit<a/>
        
        
        </td>
    </tr>";
    
}
        ?>
    
    </table>
    <a href="input.php" class="btn btn-danger" >Tambah Mahasiswa</a>
    <a href="reset.php" class="btn btn-warning" onclick="return confirm('apakah anda yakin?')">Reset All</a>
    <a href="logout.php" class="btn btn-info" onclick="return confirm('apakah anda yakin?')">Logout</a>

    </div>
</body>
</html>
      