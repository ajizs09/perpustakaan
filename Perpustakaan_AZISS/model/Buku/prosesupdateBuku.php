<?php 
    include "../../config/koneksi.php";

   
    $Id_buku         = $_POST['Id_buku'];
    $Judul_buku      = $_POST['Judul_buku'];
    $Pengarang       = $_POST['Pengarang'];
    $Penerbit        = $_POST['Penerbit'];
    $Tahun_terbit    = $_POST['Tahun_terbit'];


    $sql = "Update buku set
    Id_buku           = '".$Id_buku."',
    Judul_buku        = '".$Judul_buku."',
    Pengarang         = '".$Pengarang."',
    Penerbit          = '".$Penerbit."',
    Tahun_terbit      = '".$Tahun_terbit."'
        
        where Id_buku = '".$Id_buku."'
        ";
    
    $db->query($sql);


header('Location: ../../beranda.php?page=Buku');
//echo '$sql';
?>

