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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
        height: 100px;
        
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

   
    a{
      text-align:center;

    }
    .sidebar li.active {
      background-color: #3498DB;
      color: white;
        }

  .sidebar a:hover:not(.active) {
     background-color: #3498DB  ;
     color: white;
     transition: 1.5s;
        }

    font.font-size{
      font-size:14px;
      
    }
   
</style>

</head>
<body>
    
<nav class="navbar navbar-light bg-primary justify-content-between">
    <a class="navbar-brand" href="index.php">
    <i class="fas fa-circle-notch fa-fw mr-1" class="d-inline-block align-top"></i><strong><i>G-TECH&reg;</i></strong>
</a>

  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
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
    <div id="title-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            
                <i class="fas fa-user-friends fa-5x fa-fw mr-1"></i><b><p style="font-size:120%;">Kepegawaian</p></b>
            </li>
  



         

            <a href="kep.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center" float="relative">
                    <span  class="fas fa-home fa-fw mr-3" ></span>
                    <b><span class="menu-collapsed" class="active">Home</b></span>
                    
      
                </div>
            </a>

            <a href="kelas.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center" float="relative">
                    <span class="fas fa-chalkboard fa-fw mr-3"></span>
                    <b><span class="menu-collapsed">Kelas</b></span>
                    
                   
                </div>
            </a>
           
           
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start" >
                <div class="d-flex w-100 justify-content-start align-items-center" float="relative">
                    <span class="fas fa-users fa-fw mr-3"></span>
                    
                    <b><span class="menu-collapsed">Pegawai</span></b><span class="i.e1" class="dropdown-toggle"></span><i class="fas fa-arrow-down fa-fw"></i>

                   
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="input.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"><i class="fas fa-angle-double-right fa fw-mr-3"></i> Data Pegawai</span>
                    
                </a>
                <a href="input.php" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed"><i class="fas fa-angle-double-right fa fw-mr-3"></i> Import Pegawai</span>
                    
                </a>
                
            </div>

           <a href="infosekolah.php" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center" float="relative">
                    <span class="fas fa-info-circle fa-fw mr-3"></span>
                    <b><span class="menu-collapsed">Informasi Sekolah</span></b>
                </div>
            </a>
            
<hr>

            <a href="gantipass.php"  class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-lock fa-fw mr-3"></span>
                  <b><span class="menu-collapsed">Ganti Password</span></b>
                        
                </div>
            </a>

       
            <a href="logout.php"  class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fas fa-sign-out-alt fa-fw mr-3"></span>
                  <b><span class="menu-collapsed" onclick="return confirm('Anda Yakin Logout..?')">Logout</span></b>
              
                </div>
            </a>
         
        
            
            
</div>  
        </ul>
    </font>

                                              <!--Main Content-->
    <div class="col">

    
      <font class="font-size">

    <br>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="sidebar">
  
    <ul class="navbar-nav">

      <li class="active" class="nav-item ">
        <a class="nav-link"  href="Kep.php" class="active" ><i class="fas fa-user-friends fa-fw mr-1"></i><b> Kepegawaian</b></a>
    </li>
     
      <li  class="nav-item">
        <a class="nav-link" href="kes.php"><i class="fas fa-user-graduate fa-fw mr-1"></i><b> Kesiswaan</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="akademik.php"><i class="fas fa-book-reader fa-fw mr-1"> </i><b> Akademik</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="keu.php"><i class="fas fa-coins fa-fw mr-1"></i><b> Keuangan</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wal.php"><i class="fas fa-chalkboard-teacher fa-fw mr-1"></i><b> Wali Kelas</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bpbk.php"><i class="fas fa-user-edit fa-fw mr-1"></i><b> Guru BP/BK</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rep.php"><i class="fas fa-print fa-fw mr-1"></i><b> Report</b></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-cog fa-fw mr-1"></i>
          <b>Informasi Akun</b>
</a>

    
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Ganti Password</a>
    </div>
          
        </div>
      </li>
    </ul>
  </div>
</nav>
<hr>




                        <!---MAIN CONTENT *DO NOT CROSS THIS LINE* MAIN CONTENT--->
                                              

                        <nav aria-label="breadcrumb">
  <ol class="breadcrumb"
       class="breadcrumb">
    <li class="breadcrumb-item"><b><a href="kep.php">Kepegawaian</a></b></li>
    <li class="breadcrumb-item"><b><a href="#">Index</b></li></a>
  </ol>
</nav>
<hr>

      

        <div class="card text-dark">
            <div class="card-header bg-primary"><b><i class="fas fa-exclamation fa-fw"></i>INFORMATION</b></div>
              
                <div class="card-body text-dark">

                        <hr>

                  <ol>
                    <li><b>Pegawai</b></li>
                        <br>
                      <ol type="a">
                        <li><b>Data Pegawai</b></li>
                                  <br>
                          <p>Menu ini digunakan untuk mengelola (menginput, mengedit, menghapus dan menampilkan) data pegawai</p>

                        <li><b>Impor Pegawai</b></li>
                                  <br>
                        <p>Menu ini digunakan untuk mengimpor data pegawai </p>

                      </ol>
                    </ol>

                    <ol start="2">
                      <li><b>Informasi Sekolah</b></li>
                                  <br>
                          <ol type="a">
                            <p>Menu ini digunakan untuk menampilkan informasi dari sekolah anda dan memungkinkan anda untuk merubah atau mengeditnya</p>
                          </ol>
                    </ol>

                    <ol start="3">
                      <li><b>Ganti Password</b></li>
                                  <br>
                            <ol>
                              <p>demi keamanan akun anda, kami menyarankan untuk mengubah password default yang diberikan oleh system</p>
                            </ol>
                    </ol>

                    <hr>
                     

                
    
       
       
   

</div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</div>