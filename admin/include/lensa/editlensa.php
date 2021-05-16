    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3><i class="fas fa-edit"></i> Edit Data lensa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?include=lensa">Data lensa</a></li>
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
                    <a href="index.php?include=lensa" class="btn btn-sm btn-warning float-right">
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
            <form class="form-horizontal" action="index.php?include=konfirmasi-edit-lensa" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="foto" class="col-sm-3 col-form-label">Cover lensa </label>
                        <div class="col-sm-7">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="cover" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label">Jenis lensa</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="jenis" name="jenis_lensa">
                                <option value="1">Wide Lensa</option>
                                <option value="2">Fisheye</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label">Merk</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="jenis" name="jenis_lensa">
                                <option value="1">Canon</option>
                                <option value="2">Nikon</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-sm-3 col-form-label">Nama Produk</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="produk" id="produk" value="Canon EF 14mm f/2.8L II USM">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="focal_length" class="col-sm-3 col-form-label">focal length</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="focal_length" id="focal_length"
                                value="14mm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="max_aperture" class="col-sm-3 col-form-label">Maximum Aperture</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="max_aperture" id="max_aperture"
                                value="1.4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mount_type" class="col-sm-3 col-form-label">Mount Type</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="mount_type" id="mount_type"
                                value="EF">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="format" class="col-sm-3 col-form-label">Format</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="format" id="format"
                                value="Full Frame">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 col-form-label">Harga/hari</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="harga" id="harga"
                                value="250000">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hobi" class="col-sm-3 col-form-label">Tag</label>
                        <div class="col-sm-7">
                            <input type="checkbox" name="tag[]" value="Terlaris"> Terlaris</br>
                            <input type="checkbox" name="tag[]" value="Produk Terbaru"> Produk Terbaru</br>
                            <input type="checkbox" name="tag[]" value="Tersedia"> Tersedia</br>
                            <input type="checkbox" name="tag[]" value="Masih disewa"> Masih disewa</br>
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