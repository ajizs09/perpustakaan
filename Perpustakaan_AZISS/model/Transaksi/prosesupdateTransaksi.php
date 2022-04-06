<?php 
    include "../../config/koneksi.php";

    $Id_transaksi          = $_POST['Id_transaksi'];
    $Tanggal_transaksi     = $_POST['Tanggal_transaksi'];
    $Id_anggota            = $_POST['Id_anggota'];
    $Id_petugas            = $_POST['Id_petugas'];
    $Id_buku               = $_POST['Id_buku'];
    $Quantity              = $_POST['Quantity'];
    $Jenis_transaksi       = $_POST['Jenis_transaksi'];

    $sql = "Update transaksi set


    Id_transaksi            = '".$Id_transaksi."',
    Tangggal_transaksi      = '".$Tanggal_transaksi."',
    Id_anggota              = '".$Id_anggota."',
    Id_petugas              = '".$Id_petugas."',
    Id_buku                 = '".$Id_buku."',
    Quantity                = '".$Quantity."',
    Jenis_transaksi         = '".$Jenis_transaksi."'
    
        where Id_transaksi = '".$Id_transaksi."'
        ";
    
    $db->query($sql);


 header('Location: ../../beranda.php?page=Transaksi');
 //echo '$sql';
?>
