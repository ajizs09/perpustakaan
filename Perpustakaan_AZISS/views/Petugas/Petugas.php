<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">DATA PETUGAS
        <a href="beranda.php?page=Petugas&aksi=add">
             <button class="btn btn-secondary">Tambah Data</button>
        </a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama petugas</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Jabatan</th>
                        <th>Aksi</Aksi>
                    </tr>
                </thead> 
                <tbody> 
                    <?php
                         $sql  = "select * from Petugas";
                         $show = $db->query($sql);
 
                         foreach($show as $pts):
                     ?>
                    <tr>
                        <td><?php echo $pts['Nama_petugas']?></td>
                        <td><?php echo $pts['Alamat']?></td>
                        <td><?php echo $pts['no_hp']?></td>
                        <td><?php echo $pts['Jabatan']?></td>

                        <td>
                                <a href="beranda.php?page=Petugas&aksi=edit&id=<?php echo $pts['Id_petugas']?>" 
                                    class="btn btn-dark btn-circle">
                                        <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/petugas/prosesdeletePetugas.php?id=<?php echo $pts['Id_petugas']?>" 
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
