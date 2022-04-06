<?php 
    include "../../config/koneksi.php";
    $Id = $_GET['id'];
    $sql = "DELETE from user where Id_user = $Id";
    $db->query($sql);


   header('Location: ../../beranda.php?page=User');

?>

