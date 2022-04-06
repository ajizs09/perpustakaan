<?php 
    include "../../config/koneksi.php";

   
    $Tanggal_transaksi      = $_POST['Tanggal_transaksi'];
    $Id_anggota             = $_POST['Id_anggota'];
    $Id_petugas             = $_POST['Id_petugas'];
    $Id_buku                = $_POST['Id_buku'];
    $Quantity               = $_POST['Quantity'];
    $Jenis_transaksi        = $_POST['Jenis_transaksi'];
    


    $sql = "INSERT INTO transaksi 
    (
        Tanggal_transaksi,
        Id_anggota,
        Id_petugas,
        Id_buku,
        Quantity,
        Jenis_transaksi
    ) 
    VALUES 
    (
        '".$Tanggal_transaksi."',
        '".$Id_anggota."',
        '".$Id_petugas."',
        '".$Id_buku."',
        '".$Quantity."',
        '".$Jenis_transaksi."'
    )";
    
    $db->query($sql);


   header('Location: ../../beranda.php?page=Transaksi');
   // echo"$sql";
?>

