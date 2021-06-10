<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-user-lock"></i> Ubah Password</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"> Ubah Password</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Pengaturan Password</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="index.php?include=ubah-password">
            <div class="card-body">
                <?php 
                    if(isset($_POST['pass_lama']) && isset($_POST['pass_baru']) && isset($_POST['konfirmasi'])){
                        $id_user = $_SESSION['id_user'];
                        $pass_lama = $_POST['pass_lama'];
                        $sql_cek = "SELECT `password` FROM `user` WHERE `id_user` = $id_user";
                        $query_cek = mysqli_query($koneksi, $sql_cek);
                        while($data_cek = mysqli_fetch_row($query_cek)){
                            $password = $data_cek[0];
                        }
                        if(md5($pass_lama) == $password){
                            $pass_baru = $_POST['pass_baru'];
                            $konfirmasi = $_POST['konfirmasi'];
                            if($pass_baru == $konfirmasi){
                                $sql_ubah = "UPDATE user SET `password`=MD5('$pass_baru') WHERE `id_user` = $id_user";
                                mysqli_query($koneksi, $sql_ubah); ?>
                                <div class="alert alert-success" role="alert">Password telah diubah</div>
                            <?php }else{ ?>
                                <div class="alert alert-success" role="alert">Password baru tidak sama</div>
                            <?php }
                        }else{ ?>
                              <div class="alert alert-success" role="alert">Password lama tidak sama</div>
                        <?php }
                    }
                ?>
                <h6>
                    <i class="text-blue"><i class="fas fa-info-circle"></i> Silahkan memasukkan password lama dan
                        password baru Anda untuk mengubah password.</i>
                </h6><br>

                <div class="form-group row">
                    <label for="pass_lama" class="col-sm-3 col-form-label">Password Lama</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="pass_lama" name="pass_lama" value="">
                        <?php if(isset($_POST['pass_lama'])){ ?>
                        <?php if(empty($_POST['pass_lama'])){ ?>
                        <span class="text-danger">Mohon maaf, password lama wajib diisi.</span>
                        <?php }} ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass_baru" class="col-sm-3 col-form-label">Password Baru</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="pass_baru" name="pass_baru" value="">
                        <?php if(isset($_POST['pass_baru'])){ ?>
                        <?php if(empty($_POST['pass_baru'])){ ?>
                        <span class="text-danger">Mohon maaf, password baru wajib diisi.</span>
                        <?php }} ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="konfirmasi" class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="konfirmasi" name="konfirmasi" value="">
                        <?php if(isset($_POST['konfirmasi'])){ ?>
                        <?php if(empty($_POST['konfirmasi'])){ ?>
                          <span class="text-danger">Mohon maaf, konfirmasi password baru wajib diisi.</span>
                        <?php }} ?>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->