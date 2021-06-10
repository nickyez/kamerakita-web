    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3><i class="fas fa-plus"></i> Tambah kamera</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="kamera">Data kamera</a></li>
                        <li class="breadcrumb-item active">Tambah kamera</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data kamera
                </h3>
                <div class="card-tools">
                    <a href="kamera" class="btn btn-sm btn-warning float-right"><i
                            class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            </br>
            <div class="col-sm-10">
                <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
                <?php if($_GET['notif']=="tambahkosong"){?>
                <div class="alert alert-danger" role="alert">Maaf data
                    <?php echo $_GET['jenis'];?> wajib di isi</div>
                <?php }?> <?php }?>
            </div>
            <form class="form-horizontal" action="konfirmasi-tambah-kamera" method="post"
                enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i
                                    class="fas fa-kamera-circle"></i> <u>Data kamera</u></span></label>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">Cover kamera </label>
                        <div class="col-sm-7">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label">Jenis kamera</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="jenis" name="jenis_kamera">
                                <option value="0">--Pilih--</option>
                                <?php 
                                            $sql_k = "SELECT `id_jenis`,`jenis` FROM `jenis_kamera` ORDER BY `jenis`";
                                            $query_k = mysqli_query($koneksi, $sql_k);
                                            while($data_k = mysqli_fetch_row($query_k)){
                                                $id_kat = $data_k[0];
                                                $kat = $data_k[1];
                                            ?>
                                <option value="<?php echo $id_kat;?>">
                                    <?php echo $kat;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label">Merk</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="jenis" name="merk">
                                <option value="0">--Pilih--</option>
                                <?php 
                                            $sql_k = "SELECT `id_merk`,`merk` FROM `merk` ORDER BY `merk`";
                                            $query_k = mysqli_query($koneksi, $sql_k);
                                            while($data_k = mysqli_fetch_row($query_k)){
                                                $id_m = $data_k[0];
                                                $mrk = $data_k[1];
                                            ?>
                                <option value="<?php echo $id_m;?>">
                                    <?php echo $mrk;?></option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="kamera" id="produk" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="battery_life" class="col-sm-3 col-form-label">battery life</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="bat_life" id="battery_life" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="frame_rate" class="col-sm-3 col-form-label">frame rates</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="frame_rate" id="frame_rate" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="img_sensor" class="col-sm-3 col-form-label">Image sensor</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="img_sensor" id="img_sensor" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="asp_ratio" class="col-sm-3 col-form-label">Aspect Ratio</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="asp_ratio" id="asp_ratio" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pixels" class="col-sm-3 col-form-label">Pixels</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="pixels" id="pixels" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="res" class="col-sm-3 col-form-label">Resolution</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="res" id="res" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="iso" class="col-sm-3 col-form-label">iso</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="iso" id="harga" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="shutter_speed" class="col-sm-3 col-form-label">Shutter Speed</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="shutter_speed" id="shutter_speed" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="weight" class="col-sm-3 col-form-label">Weight</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="weight" id="weight" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 col-form-label">harga/hari</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="harga" id="harga" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hobi" class="col-sm-3 col-form-label">Tag</label>
                        <div class="col-sm-7">
                            <?php 
                                        $sql_g = "SELECT `id_tag`,`tag` FROM `tag`
                                        ORDER BY `tag`";
                                        $query_g = mysqli_query($koneksi, $sql_g);
                                        while($data_g = mysqli_fetch_row($query_g)){
                                        $id_tg = $data_g[0];
                                        $tg = $data_g[1];
                                        ?>
                            <input type="checkbox" name="tag[]" value="<?php echo $id_tg;?>">
                            <?php echo $tg;?> </br>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i>
                            Tambah</button>
                    </div>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->