<?php   
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: login.php");
    }
 ?>   


<?php
    $jam = $_POST['jam'];
    $senin = $_POST['senin'];
    $selasa = $_POST['selasa'];
    $rabu = $_POST['rabu'];
    $kamis = $_POST['kamis'];
    $jumat = $_POST['jumat'];
    $sabtu = $_POST['sabtu'];
    $minggu = $_POST['minggu'];
    
   


    $koneksi = new PDO("mysql:host=localhost;dbname=aplikasi_dashboard", 'root','');

    $koneksi->query("INSERT INTO jadwal (jam,senin, selasa, rabu, kamis, jumat, sabtu, minggu) VALUES ( '$jam','$senin', '$selasa','$rabu',
    '$kamis','$jumat', '$sabtu', '$minggu')");

    header("Location: datajadwal.php"); //untuk berpindah halaman/file



   

?>