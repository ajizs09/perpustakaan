
<div class="container-fluid">
    <div class="row  justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 align="center">Tambah Data Anggota</h4>
                        <br>
                        <form action="model/anggota/prosesaddanggota.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Nama Anggota</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Nama_anggota" id="Nama_anggota"></td>
                                </tr>
                                <tr>
                                    <td>Jenis_kelamin</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="Jenis_kelamin" id="Jenis_kelamin">
                                            <option value="l">laki laki</option>
                                            <option value="p">Perempuan</option>
                                        </select>
                                    </td>
                                </tr>
                                 <tr>
                                     <td>Alamat</td>
                                     <td>:</td>
                                     <td><input type="text"  class="form-control" name="Alamat" id="Alamat"></td>
                                 </tr>
                                <tr>
                                    <td>No Hp</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="No_Hp" id="No_Hp"></td>
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