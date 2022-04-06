
<div class="container-fluid">
    <div class="row  justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 align="center">Tambah Data transaksi</h4>
                        <br>
                        <form action="model/Transaksi/prosesaddTransaksi.php" method="POST">
                            <table class="table">
                                <tr>
                                    <td>Tanggal transaksi</td>
                                    <td>:</td>
                                    <td><input type="date"  class="form-control" name="Tanggal_transaksi" id="Tanggal_transaksi"></td>
                                </tr>
                                <tr>
                                    <td>Id anggota</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Id_anggota" id="Id_anggota"></td>
                                </tr>
                                <tr>
                                    <td>Id petugas</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Id_petugas" id="Id_petugas"></td>
                                </tr>
                                <tr>
                                    <td>Id buku</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Id_buku" id="Id_buku"></td>
                                </tr>
                                <tr>
                                    <td>Quantity</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="Quantity" id="Quantity"></td>
                                </tr>
                                <tr>
                                    <td>Jenis transaksi</td>
                                    <td>:</td>
                                    <td>
                                        <select class="form-control" name="Jenis_transaksi" id="Jenis_transaksi">
                                            <option value="pinjam">pinjam</option>
                                            <option value="kembali">kembali</option>
                                        </select>
                                    </td>
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