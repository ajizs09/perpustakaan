<?php 
    include "../../config/koneksi.php";

    $Judul_Buku       = $_POST['Judul_buku'];
    $Pengarang        = $_POST['Pengarang'];
    $Penerbit         = $_POST['Penerbit'];
    $Tahun_terbit     = $_POST['Tahun_terbit'];


    $sql = "INSERT INTO buku 
    (
        Judul_buku,
        Pengarang,
        Penerbit,
        Tahun_terbit
    ) 
    VALUES 
    (
        '".$Judul_Buku."',
        '".$Pengarang."',
        '".$Penerbit."',
        '".$Tahun_terbit."'
    )";
    
    $db->query($sql);


  header('Location: ../../beranda.php?page=Buku');
//echo"sql";
?>

