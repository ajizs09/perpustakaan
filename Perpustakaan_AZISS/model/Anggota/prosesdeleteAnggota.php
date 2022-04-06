<?php 
    include "../../config/koneksi.php";
    $Id = $_GET['id'];
    $sql = "DELETE from anggota where Id_anggota = $Id";
    $db->query($sql);


   header('Location: ../../beranda.php?page=Anggota');

?>

