
<div class="container-fluid">
    <div class="row  justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 align="center">Tambah Data Petugas</h4>
                        <br>
                        <form action="model/Petugas/prosesaddPetugas.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Nama petugas</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Nama_petugas" id="Nama_petugas"></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Alamat" id="Alamat"></td>
                                </tr>
                               <tr>
                                   <td>No Hp</td>
                                   <td>:</td>
                                   <td><input type="text"  class="form-control" name="no_hp" id="no_hp"></td>
                               </tr>
                                <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Jabatan" id="Jabatan"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-dark" value="Simpan">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>