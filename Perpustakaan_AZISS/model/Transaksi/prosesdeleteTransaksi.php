<?php 
    include "../../config/koneksi.php";
    $Id = $_GET['id'];
    $sql = "DELETE from transaksi where Id_transaksi = $Id";
    $db->query($sql);


   header('Location: ../../beranda.php?page=Transaksi');

?>

