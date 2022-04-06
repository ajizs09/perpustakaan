<?php 
    include "../../config/koneksi.php";

   
    $Nama_petugas        = $_POST['Nama_petugas'];
    $Alamat              = $_POST['Alamat'];
    $no_hp               = $_POST['no_hp'];
    $Jabatan             = $_POST['Jabatan'];


    $sql = "INSERT INTO petugas 
    (
        Nama_petugas,
        Alamat,
        no_hp,
        Jabatan
    ) 
    VALUES 
    (
        '".$Nama_petugas."',
        '".$Alamat."',
        '".$no_hp."',
        '".$Jabatan."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=Petugas');

?>

