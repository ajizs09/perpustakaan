<?php 
    include "../../config/koneksi.php";

    $id_petugas      = $_POST['id_petugas'];
    $username        = $_POST['username'];
    $password        = $_POST['password'];
    $level           = $_POST['level'];
    $dibuatpada      = $_POST['dibuatpada'];


    $sql = "INSERT INTO user 
    (
        id_petugas,
        username,
        password,
        level,
        dibuatpada
    ) 
    VALUES 
    (
        '".$id_petugas."',
        '".$username."',
        '".$password."',
        '".$level."',
        '".$dibuatpada."'
    )";
    
    $db->query($sql);


    header('Location: ../../beranda.php?page=User');
    //echo "$sql";

?>

