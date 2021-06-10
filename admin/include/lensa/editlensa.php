<?php 
        if(isset($_GET['data'])){
            $id_lensa = $_GET['data'];
            $_SESSION['id_lensa']=$id_lensa;
            $sql_m = "SELECT `id_lensa`,`nama`,`id_jenis`,`id_merk`,";
            // spesifikasi lensa 
            $sql_m .= "`focal_length`,`maximum_aperture`,`mount_type`,`format`,`harga` FROM `lensa` WHERE `id_lensa`='$id_lensa'";
            $query_m = mysqli_query($koneksi,$sql_m);
            while($data_m = mysqli_fetch_row($query_m)){
                $id_lensa= $data_m[0];
                $nama = $data_m[1];
                $id_jenis = $data_m[2];
                $id_merk = $data_m[3];
                // Spesifikasi lensa
                $focal_length = $data_m[4];
                $max_aperture = $data_m[5];
                $mount_type = $data_m[6];
                $format = $data_m[7];
                $harga = $data_m[8];
            }
            //get tag
            $sql_h = "select `id_tag` from `tag_lensa` 
            where `id_lensa`='$id_lensa'";
            $query_h = mysqli_query($koneksi,$sql_h);
            $array_tag = array();
            while($data_h = mysqli_fetch_row($query_h)){
                $id_tag= $data_h[0];
                $array_tag[] = $id_tag;
            }
        }
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3><i class="fas fa-edit"></i> Edit Data lensa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="lensa">Data lensa</a></li>
                        <li class="breadcrumb-item active">Edit Data lensa</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data
                    lensa</h3>
                <div class="card-tools">
                    <a href="lensa" class="btn btn-sm btn-warning float-right">
                        <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            </br></br>
            <div class="col-sm-10">
                <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
                <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">Maaf data
                    <?php echo $_GET['jenis'];?> wajib di isi</div>
                <?php }?> <?php }?>
            </div>
            <form class="form-horizontal" action="konfirmasi-edit-lensa" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">Foto Produk Lensa </label>
                        <div class="col-sm-7">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label">Jenis lensa</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="jenis" name="jenis_lensa">
                                <option value="0">--pilih jenis lensa--</option>
                                <?php 
                                            $sql_k = "SELECT `id_jenis`,`jenis` FROM `jenis_lensa` ORDER BY `jenis`";
                                            $query_k = mysqli_query($koneksi, $sql_k);
                                            while($data_k = mysqli_fetch_row($query_k)){
                                                $id_kat = $data_k[0];
                                                $kat = $data_k[1];
                                            ?>
                            <option value="<?php echo $id_kat;?>" <?php if($id_kat==$id_jenis){?> selected <?php }?>>
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
                            <option value="<?php echo $id_m;?>" <?php if($id_m==$id_merk){?> selected <?php }?>>
                                <?php echo $mrk;?></option>
                            <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="lensa" id="produk" value="<?php echo $nama; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="focal_length" class="col-sm-3 col-form-label">focal length</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="focal_length" id="focal_length"
                                value="<?php echo $focal_length; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="max_aperture" class="col-sm-3 col-form-label">Maximum Aperture</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="max_aperture" id="max_aperture"
                                value="<?php echo $max_aperture; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mount_type" class="col-sm-3 col-form-label">Mount Type</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="mount_type" id="mount_type"
                                value="<?php echo $mount_type; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="format" class="col-sm-3 col-form-label">Format</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="format" id="format"
                                value="<?php echo $format; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga/hari</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="harga" id="harga"
                                value="<?php echo $harga; ?>">
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
                        <input type="checkbox" name="tag[]" value="<?php echo $id_tg;?>"
                            <?php if(in_array($id_tg, $array_tag)){?>checked="checked" <?php }?>>
                        <?php echo $tg;?> </br>
                        <?php } ?>
                        </div>
                    </div>

                </div>
        </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
            </div>
        </div>
        <!-- /.card-footer -->
        </form>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->