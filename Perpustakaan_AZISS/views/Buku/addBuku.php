
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 align="center">Tambah Data Buku</h4>
                        <br>
                        <form action="model/buku/prosesaddBuku.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Judul Buku</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Judul_buku" id="Judul_buku"></td>
                                </tr>
                                <tr>
                                    <td>Pengarang</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Pengarang" id="Pengarang"></td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Penerbit" id="Penerbit"></td>
                                </tr>
                                <tr>
                                    <td>Tahun terbit</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Tahun_terbit" id="Tahun_terbit"></td>
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