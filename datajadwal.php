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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Dashboard</title>

    <style>

#body-row {
    margin-left:0;
    margin-right:0;
    }
    #sidebar-container {
        min-height: 100vh;   
        background-color: #333;
        padding: 1;
    }


    .sidebar-expanded {
        width: 230px;
    }
    .sidebar-collapsed {
        width: 90px;
    }


    #sidebar-container .list-group a {
        height: 50px;
        color: white;
    }


    #sidebar-container .list-group .sidebar-submenu a {
        height: 65px;
        padding-left: 20px;
        

    }
    .sidebar-submenu {
        font-size: 0.8rem;
    }


    .sidebar-separator-title {
        background-color: #333;
        height: 50px;
    }
    .sidebar-separator {
        background-color:#333;
        height: 25px;

    }
    .logo-separator {
        background-color: #3e71a9;    
        height: 90px;
    }


    #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
    content: " \f0d7";
    font-family: FontAwesome;
    display:block;
    text-align: right;
    padding-left: 10px;
    float :right;
    }

    #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
    content: " \f0da";
    font-family: FontAwesome;
    display: inline;
    text-align: right;
    padding-left: 10px;
    }

    ul.logout {
        position:absolute;
        left:0%;
        bottom:0;
                        }

    
}
</style>

</head>
<body>
    
<nav class="navbar navbar-light bg-primary justify-content-between">
    <a class="navbar-brand" href="index.php">
    <i class="fas fa-home" class="d-inline-block align-top"></i><strong>HOME</strong>
</a>

  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
 
      
      
  
        
    

       
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
            <a class="dropdown-item" href="#">Kegiatan Akademik</a>
            <a class="dropdown-item" href="#">Profile</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>

<div class="row" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>MAIN MENU</small>
            </li>
            
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center" float="relative">
                    <span class="fas fa-users fa-fw mr-3"></span>
                    <b><span class="menu-collapsed">Siswa</span></b>
                    
                   
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="input.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Input Mahasiswa</span>
                    
                </a>
                <a href="datatugas.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Cek Tugas</span>
                    
                </a>
                <a href="datajadwal.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Cek Jadwal</span>
                    
                </a>
            </div>

           

            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-book fa-fw mr-3"></span>
                  <b><span class="menu-collapsed">Kegiatan Akademik</span></b>
                        
                </div>
            </a>

            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="lihatkegiatan.php" class="list-group-item list-group-item-action bg-dark text-white">
                    
                    <span class="menu-collapsed">Lihat Kegiatan</span>
                </a>
            </div>

            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="inputkegiatan.php" class="list-group-item list-group-item-action bg-dark text-white">
                    
                    <span class="menu-collapsed">Input Kegiatan</span>
                </a>
            </div>

            <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                  <b><span class="menu-collapsed">Profile</span></b>
                        
                </div>
            </a>

    
            <div id='submenu3' class="collapse sidebar-submenu">
                <a href="info.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Info</span>
                </a>
                <a href="changepassword.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"> Change Password</span>
                </a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed" onclick="return confirm('Anda Yakin Logout..?')">Logout</span>
                </a>
            </div>            
</div>  
        </ul>
    </font>

        <!--Main Content-->
    <div class="col">

    
   
    <br>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="kepegawaian.php">Kepegawaian</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Kesiswaan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Informasi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Akademik</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Keuangan</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Informasi Akun
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Ganti Password</a>
          
          
        </div>
      </li>
    </ul>
  </div>
</nav>

                                <!---MAIN CONTENT-->

    <br>
        <H1 class="display-5">Jadwal</h1>
        <hr>
    <div class="container"><br>
    
    <table border="1" class="table table-borderless table-dark">
        <thead class="thead-dark">
            <tr>
                <th class="text-center">JAM</TH>
                <th class="text-center">SENIN</th>
                <th class="text-center">SELASA</th>
                <th class="text-center">RABU</th>
                <th class="text-center">KAMIS</th>
                <th class="text-center">JUMAT</th>
                <th class="text-center">SABTU</th>
                <th class="text-center">MINGGU</th>
                <th class="text-center">EDIT</th>
                <th class="text-center">HAPUS</th>

               
            </tr>
        </thead>

        <tbody>
            <tr>
                <th>
        <?php

$koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard", 'root','');//menghubungkan aplikasi dengan database


$data_jadwal = $koneksi->query("SELECT * FROM jadwal");//mengambil semua field di tabel kegiatan
while ($data= $data_jadwal->fetch(PDO::FETCH_ASSOC)){
    echo "<tr>
        <td>$data[jam]</td>
        <td>$data[senin]</td>
        <td>$data[selasa]</td>
        <td>$data[rabu]</td>
        <td>$data[kamis]</td>
        <td>$data[jumat]</td>
        <td>$data[sabtu]</td>
        <td>$data[minggu]</td>

        <td> 
             <a href='deletejdwl.php?id=$data[id]' class='btn btn-danger' onclick='return confirm(\"apakah anda yakin?\")'>Hapus<a/>
        </td>
        <td>
        <a href='editjdwl.php?id=$data[id]' class='btn btn-danger'>Edit<a/>
        
        
        </td>
    </tr>";
    
}
        ?>
    
    </table>
   
    <a href="resetjadwal.php" class="btn btn-warning" onclick="return confirm('apakah anda yakin?')">Reset All</a>
    <a href="buatjadwal.php" class="btn btn-primary">Tambah Jadwal</a>
   






    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
        <br>
        
</div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>