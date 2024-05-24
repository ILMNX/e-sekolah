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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
    <span class="menu-collapsed"></span>
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <font size="2">

      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Dashboard</a>
            <a class="dropdown-item" href="#">Profile</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>

  <div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 742px;">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas" style="min-height: 742px;">
                        <!-- sidebar: style can be found in sidebar.less -->



<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center" float="right">
                    <span class="fas fa-palette fa-fw mr-3"></span>
                    <b><span class="menu-collapsed">Dashboard</span></b>
                    <span class="fa fa-sort-down"></span>
                   
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="input.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Input Mahasiswa</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <a href="datatugas.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Cek Tugas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <a href="datajadwal.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Cek/Ubah Jadwal</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
            </div>

            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-book fa-fw mr-3"></span>
                  <b><span class="menu-collapsed">Kegiatan Akademik</span></b>
                        <i class="fa fa-sort-down fa-fw mr-3"></i>
                </div>
            </a>

            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="inputkegiatan.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fa fa-book fa-fw mr-3"></span>
                    <span class="menu-collapsed">Lihat Kegiatan</span>
                </a>
            </div>

            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="inputkegiatan.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="fa fa-pen fa-fw mr-3"></span>
                    <span class="menu-collapsed">Input Kegiatan</span>
                </a>
            </div>

            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                  <b><span class="menu-collapsed">Profile</span></b>
                        <i class="fa fa-sort-down"></i>
                </div>
            </a>

    
            <div id='submenu3' class="collapse sidebar-submenu">
                <a href="info.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Info</span>
                </a>
                <a href="changepassword.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Change Password</span>
                </a>
            </div>            
           
        </ul>
    </div>

  
    <div class="col">
    <br>

<div class="container">
    
    <table border="1"class="table table-striped table-dark">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">NAMA KEGIATAN</th>
                <th class="text-center">TANGGAL</th>
                <th class="text-center">SEMESTER</th>
                <th class="text-center">BAGIAN</th>
                <th class="text-center">LOKASI</th>
               
            </tr>
        </thead>
        <?php

$koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard", 'root','');//menghubungkan aplikasi dengan database


$data_kegiatan = $koneksi->query("SELECT * FROM kegiatan");//mengambil semua field di tabel kegiatan
while ($data= $data_kegiatan->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
        <td>$data[nama_kegiatan]</td>
        <td>$data[tanggal]</td>
        <td>$data[semester]</td>
        <td>$data[bagian]</td>
        <td>$data[lokasi]</td>

        <td> 
             <a href='deletekeg.php?id=$data[id]' class='btn btn-danger' onclick='return confirm(\"apakah anda yakin?\")'>Hapus<a/>
        </td>
        <td>
        <a href='editkeg.php?id=$data[id]' class='btn btn-danger'>Edit<a/>
        
        
        </td>
    </tr>";
    
}
        ?>
    
    </table>
   
    <a href="resetkegiatan.php" class="btn btn-warning" onclick="return confirm('apakah anda yakin?')">Reset All</a>
    <a href="inputkegiatan.php" class="btn btn-primary" onclick="return confirm('apakah anda yakin?')">Tambah Kegiatan</a>
   

    </div>
</body>
</html>
      
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
        <br>
        
</font>
</div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>