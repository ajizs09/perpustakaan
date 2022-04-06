<?php
    @$Id = $_GET['id'];

    $sql   ="select * from user where id_user=$Id";
    $show  =$db->query($sql);
    $hasil =mysqli_fetch_assoc($show);

    $id_user  = $hasil['id_user'];
?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4 align="center">Edit Data User</h4>
                        <br>
                        <form action="model/user/prosesupdateUser.php" method="POST">
                        <input type="hidden" name="id_user" value="<?php echo $hasil['id_user'] ?>">
                            <table class="table">
                            <tr>
                                    <td>Id petugas</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="id_petugas" id="id_petugas" value="<?php echo $hasil['id_petugas'] ?>"></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="username" id="username" value="<?php echo $hasil['username'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="password" id="password" value="<?php echo $hasil['password'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>level</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="level" id="level" value="<?php echo $hasil['level'] ?>"></td>
                                </tr>
                                <tr>
                                    <td>dibuatpada</td>
                                    <td>:</td>
                                    <td><input type="text"  class="form-control" name="dibuatpada" id="dibuatpada" value="<?php echo $hasil['dibuatpada'] ?>"></td>
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