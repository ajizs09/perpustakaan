<?php 
    include "../../config/koneksi.php";

    $Nama_anggota       = $_POST['Nama_anggota'];
    $Id_anggota         = $_POST['Id_anggota'];
    $Jenis_kelamin      = $_POST['Jenis_kelamin'];
    $Alamat             = $_POST['Alamat'];
    $No_Hp              = $_POST['No_Hp'];


    $sql = "Update anggota set
        Nama_anggota    = '".$Nama_anggota."',
        Id_anggota      = '".$Id_anggota."',
        Jenis_kelamin   = '".$Jenis_kelamin."',
        Alamat          = '".$Alamat."',
        No_Hp           = '".$No_Hp."'
        
        where Id_anggota = '".$Id_anggota."'
        ";
    
    $db->query($sql);


   header('Location: ../../beranda.php?page=Anggota');
   //echo '$sql';
    ?>

