<?php   
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
 ?>   




<?php
    $id = $_GET['id']; //mengambil id dari address bar

    $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_mahasiswa", 'root','');

    $get_data_mahasiswa = $koneksi->query("SELECT * FROM mahasiswa WHERE id = '$id' ");

    $mahasiswa = $get_data_mahasiswa->fetch(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Mahasiswa</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body style="background-color : #D8E5EE;">

<nav  class="navbar navbar-dark bg-dark">

  <span class="navbar-brand mb-0 h1">Aplikasi Mahasiswa</span>
  
</nav>
<br>
<div class="container">

    <form action="update.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
        <label for="">NIM</label>
        <input type="text" name="nim" placeholder="Masukkan Nim" class="form-control" required value="<?php echo $mahasiswa['nim'] ?>">
        <label for="">Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control" required value="<?php echo $mahasiswa['nama'] ?>">

        <label for="">Email</label>
        <input type="email" name="email" placeholder="Masukkan Email" class="form-control" required value="<?php echo $mahasiswa['email'] ?>"> 
    
        <label for="">Jenis Kelamin</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan"<?php echo ($mahasiswa['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>> Perempuan <br><br>
    
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" required value="<?php echo $mahasiswa['tanggal_lahir'] ?>">

        <label for="">Jurusan</label>
        <select name="jurusan"class="form-control" required>
            <option value="Teknik Informatika"<?php echo ($mahasiswa['jurusan'] == 'Teknik Informatika') ? 'selected' : '' ?>>Teknik Informatika</option>
            <option value="Sistem Informasi"<?php echo ($mahasiswa['jurusan'] == 'Sistem Informasi') ? 'selected' : '' ?>>Sistem Informasi</option>
        </select> <br>


        <label for="">Alamat</label>
        <textarea name="alamat"class="form-control" required><?php echo $mahasiswa['alamat']?></textarea><br>

        <label for="">Agama</label>
        <input type="text" class="form-control" required name="agama" placeholder="Masukkan Agama" value="<?php echo $mahasiswa['agama'] ?>">

    

        <hr>

        <input type="hidden" name="id" value="<?php echo $id ?>">

        <button type="submit" class="btn btn-success">Simpan</button>

        <button type="reset" class="btn btn-danger">Reset</button>


        <a href="data.php" class="btn btn-danger">Kembali</a>
        
    </form>
    </div>
    
</body>
</html>