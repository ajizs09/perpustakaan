<?php
//default
if(@$_GET['page'] == ''){
    include "views/beranda.php";
}
//data user
else if($_GET['page'] == 'User'){
    @$aksi = $_GET['aksi'];

    if(@$aksi){
        if($aksi == 'add'){
            include "views/User/addUser.php";
        }
        else if ($aksi == 'edit'){
            include "views/User/editUser.php";
        }
    }else
    {
            include "views/User/User.php";
    }
}

//data petugas
else if($_GET['page'] == 'Petugas'){
    @$aksi = $_GET['aksi'];

    if(@$aksi){
        if($aksi == 'add'){
            include "views/Petugas/addPetugas.php";
        }
        else if ($aksi == 'edit'){
            include "views/Petugas/editPetugas.php";
        }
    }else
    {
        include "views/Petugas/Petugas.php";
    }
}
//data buku
else if($_GET['page'] == 'Buku'){
    @$aksi = $_GET['aksi'];

    if(@$aksi){
        if($aksi == 'add'){
            include "views/Buku/addbuku.php";
        }
        else if ($aksi == 'edit'){
            include "views/Buku/editBuku.php";
        }
    }else
    {
        include "views/Buku/Buku.php";
    }
}
//data anggota
else if($_GET['page'] == 'Anggota'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if($aksi == 'add'){
            include "views/Anggota/addAnggota.php";
        }
        else if ($aksi == 'edit'){
            include "views/Anggota/editAnggota.php";
        }
        else if($aksi == 'delete'){
            include "model/Anggota/prosesdeleteAnggota.php";
        }
    }else
    {
        include "views/Anggota/Anggota.php";
    }
}
//data transaksi
else if($_GET['page'] == 'Transaksi'){
    @$aksi = $_GET['aksi'];
    if(@$aksi){
        if($aksi == 'add'){
            include "views/Transaksi/addTransaksi.php";
        }
        else if ($aksi == 'edit'){
            include "views/Transaksi/editTransaksi.php";
        }
        else if($aksi == 'delete'){
            include "model/Transaksi/prosesdeleteTransaksi.php";
        }
    }else
    {
        include "views/Transaksi/Transaksi.php";
    }
}

