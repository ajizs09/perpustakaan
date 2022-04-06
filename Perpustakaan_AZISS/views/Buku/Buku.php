<div class="container-fluid">
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">DATA BUKU
        <a href="beranda.php?page=Buku&aksi=add">
             <button class="btn btn-secondary">Tambah Data</button>
        </a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul buku</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Tahun terbit</th>
                        <th>Aksi</Aksi>
                    </tr>
                </thead>
                <tbody>
                    <?php
                         $sql  = "select * from buku";
                         $show = $db->query($sql);
 
                         foreach($show as $buku):
                     ?>
                    <tr>
                        <td><?php echo $buku['Judul_buku']?></td>
                        <td><?php echo $buku['Pengarang']?></td>
                        <td><?php echo $buku['Penerbit']?></td>
                        <td><?php echo $buku['Tahun_terbit']?></td>

                        <td>
                                <a href="beranda.php?page=Buku&aksi=edit&id=<?php echo $buku['Id_buku']?>" 
                                    class="btn btn-dark btn-circle">
                                        <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/Buku/prosesdeleteBuku.php?id=<?php echo $buku['Id_buku']?>" 
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

</div