<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary ">DATA ANGGOTA
         <a href="beranda.php?page=Anggota&aksi=add">
             <button class="btn btn-dark">Tambah Data</button>
        </a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama anggota</th>
                        <th>Jenis kelamin</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
               
                <tbody> 
                    <?php
                        $sql  = "select * from anggota";
                        $show = $db->query($sql);

                        foreach($show as $agt):
                    ?>
                  

                    <tr>
                        <td><?php echo $agt['Nama_anggota']?></td>
                        <td><?php echo $agt['Jenis_kelamin']?></td>
                        <td><?php echo $agt['Alamat']?></td>
                        <td><?php echo $agt['No_Hp']?></td>
                        <td>
                                <a href="beranda.php?page=Anggota&aksi=edit&id=<?php echo $agt['Id_anggota']?>" 
                                    class="btn btn-secondary btn-circle">
                                        <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/Anggota/prosesdeleteAnggota.php?id=<?php echo $agt['Id_anggota']?>" 
                                     class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
