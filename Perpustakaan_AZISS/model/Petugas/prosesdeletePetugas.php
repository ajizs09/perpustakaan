<?php 
    include "../../config/koneksi.php";
    $Id = $_GET['id'];
    $sql = "DELETE from petugas where Id_petugas = $Id";
    $db->query($sql);


   header('Location: ../../beranda.php?page=Petugas');

?>

