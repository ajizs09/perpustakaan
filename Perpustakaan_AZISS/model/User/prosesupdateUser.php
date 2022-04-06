<?php 
    include "../../config/koneksi.php";

    $id_user           = $_POST['id_user'];
    $id_petugas        = $_POST['id_petugas'];
    $username          = $_POST['username'];
    $password          = $_POST['password'];
    $level             = $_POST['level'];
    $dibuatpada        = $_POST['dibuatpada'];


    $sql = "Update user set
    id_user         = '".$id_user."',
    id_petugas      = '".$id_petugas."',
    username        = '".$username."',
    password        = '".$password."',
    level           = '".$level."',
    dibuatpada      = '".$dibuatpada."'
        
        where id_user = '".$id_user."'
        ";
    
    $db->query($sql);


   header('Location: ../../beranda.php?page=User');
    //echo '$sql';
    ?>
