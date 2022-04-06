<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">DATA TRANSAKSI
        <a href="beranda.php?page=Transaksi&aksi=add">
             <button class="btn btn-secondary">Tambah Data</button>
        </a></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tanggal transaksi</th>
                        <th>Id anggota</th>
                        <th>Id petugas</th>
                        <th>Id buku</th>
                        <th>Quantity</th>
                        <th>Jenis transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
 
                <tbody>
                <?php
                         $sql  = "select * from transaksi";
                         $show = $db->query($sql);
 
                         foreach($show as $tr):
                     ?>
                    <tr>
                        <td><?php echo $tr['Tanggal_transaksi']?></td>
                        <td><?php echo $tr['Id_anggota']?></td>
                        <td><?php echo $tr['Id_petugas']?></td>
                        <td><?php echo $tr['Id_buku']?></td>
                        <td><?php echo $tr['Quantity']?></td>
                        <td><?php echo $tr['Jenis_transaksi']?></td>
                        <td>
                                <a href="beranda.php?page=Transaksi&aksi=edit&id=<?php echo $tr['Id_transaksi']?>" 
                                    class="btn btn-dark btn-circle">
                                        <i class="fas fa-edit"></i>
                                </a>

                                <a href="model/Transaksi/prosesdeleteTransaksi.php?id=<?php echo $tr['Id_transaksi']?>" 
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
