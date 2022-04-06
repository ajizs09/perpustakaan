
<?php 
    include "../../config/koneksi.php";
    $Id = $_GET['id'];
    $sql = "DELETE from buku where Id_buku = $Id";
    $db->query($sql);


header('Location: ../../beranda.php?page=Buku');
//echo"sql";
?>