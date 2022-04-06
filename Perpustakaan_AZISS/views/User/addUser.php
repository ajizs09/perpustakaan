
<div class="container-fluid">
    <div class="row  justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 align="center">Tambah Data User</h4>
                        <br>
                        <form action="model/User/prosesaddUser.php" method="POST">
                            <table class="table">
                            <tr>
                                    <td>Id Petugas</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_petugas" id="id_petugas"></td>
                                </tr>
                                <tr>
                                    <td>username</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="username" id="username"></td>
                                </tr>
                                <tr>
                                    <td>password</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="password" id="password"></td>
                                </tr>
                                <tr>
                                    <td>level</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="level" id="level"></td>
                                </tr>
                                <tr>
                                    <td>dibuatpada</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="dibuatpada" id="dibuatpada"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" class="btn btn-primary" value="Simpan">
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