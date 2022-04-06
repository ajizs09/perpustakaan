<?php 
    include "../../config/koneksi.php";

   
    $Nama_anggota       = $_POST['Nama_anggota'];
    $Jenis_kelamin      = $_POST['Jenis_kelamin'];
    $Alamat             = $_POST['Alamat'];
    $No_Hp              = $_POST['No_Hp'];


    $sql = "INSERT INTO anggota 
    (
        Nama_anggota,
        Jenis_kelamin,
        Alamat,
        No_Hp
    ) 
    VALUES 
    (
        '".$Nama_anggota."',
        '".$Jenis_kelamin."',
        '".$Alamat."',
        '".$No_Hp."'
    )";
    
   $db->query($sql);


   header('Location: ../../beranda.php?page=Anggota');
//echo '$sql';
?>

