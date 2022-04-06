<?php 
    include "../../config/koneksi.php";

    $Id_petugas         = $_POST['Id_petugas'];
    $Nama_petugas       = $_POST['Nama_petugas'];
    $Alamat             = $_POST['Alamat'];
    $no_hp              = $_POST['no_hp'];
    $Jabatan            = $_POST['Jabatan'];


    $sql = "Update petugas set
        Id_petugas      = '".$Id_petugas."',
        Nama_petugas    = '".$Nama_petugas."',
        Alamat          = '".$Alamat."',
        no_hp           = '".$no_hp."',
        Jabatan         = '".$Jabatan."'
        
        where Id_petugas = '".$Id_petugas."'
        ";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=Petugas');
     //echo '$sql';
    ?>

