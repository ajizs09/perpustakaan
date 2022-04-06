<div class="container-fluid">
<div class="card shadow mb-4"> 
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA USER
        <a href="beranda.php?page=User&aksi=add">
             <button class="btn btn-primary">Tambah Data</button>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama_petugas</th>
                        <th>username</th>
                        <th>pasword</th>
                        <th>level</th>
                        <th>dibuatpada</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                         $sql  = "select us.*,pts.Nama_petugas from user us left join petugas pts on us.id_petugas = pts.id_petugas";
                         $show = $db->query($sql);
 
                         foreach($show as $us):
                     ?>
                    <tr>
                        <td><?php echo $us['Nama_petugas']?></td>
                        <td><?php echo $us['username']?></td>
                        <td><?php echo $us['password']?></td>
                        <td><?php echo $us['level']?></td>
                        <td><?php echo $us['dibuatpada']?></td>
                        <td>
                                <a href="beranda.php?page=User&aksi=edit&id=<?php echo $us['id_user']?>" 
                                    class="btn btn-primary btn-circle">
                                        <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/User/prosesdeleteUser.php?id=<?php echo $us['id_user']?>" 
                                     class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                </a>
                        </td>
                    </tr>
                    </tr>
                    <?php endforeach; ?>  
                </tbody>
            </table>
        </div>
    </div>
</div>

</div> 
