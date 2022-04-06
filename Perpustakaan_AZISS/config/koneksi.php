<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "perpustakaan_aziss";

$db = mysqli_connect($host,$user,$pass,$db);

if (!$db){
    die("data tidak terhubung");
}
?>