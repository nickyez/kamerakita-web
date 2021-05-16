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
                <label for="foto" class="col-sm-3 col-form-label">Cover kamera </label>
                <div class="col-sm-7">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="cover" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis" class="col-sm-3 col-form-label">Jenis kamera</label>
                <div class="col-sm-7">
                    <select class="form-control" id="jenis" name="jenis_kamera">
                        <option value="0">--Pilih--</option>
                        <option value="1">DSLR</option>
                        <option value="2">Mirrorless</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis" class="col-sm-3 col-form-label">Merk</label>
                <div class="col-sm-7">
                    <select class="form-control" id="jenis" name="merk">
                        <option value="0">--Pilih--</option>
                        <option value="1">Canon</option>
                        <option value="2">Nikon</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nim" class="col-sm-3 col-form-label">Nama Produk</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="produk" id="produk" value="DSLR Canon EOS 800D">
                </div>
            </div>
            <div class="form-group row">
                <label for="battery_life" class="col-sm-3 col-form-label">battery life</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="battery_life" id="battery_life" value="Viewfinder: Approx. 600 ,, Live View: Approx. 270">
                </div>
            </div>
            <div class="form-group row">
                <label for="frame_rate" class="col-sm-3 col-form-label">frame rates</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="frame_rate" id="frame_rate" value="59.94, 50 fps">
                </div>
            </div>
            <div class="form-group row">
                <label for="img_sensor" class="col-sm-3 col-form-label">Image sensor</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="img_sensor" id="img_sensor" value="APS-C (1.6x Crop Factor) with CMOS">
                </div>
            </div>
            <div class="form-group row">
                <label for="asp_ratio" class="col-sm-3 col-form-label">Aspect Ratio</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="asp_ratio" id="asp_ratio" value="3:2">
                    </div>
            </div>
            <div class="form-group row">
                <label for="pixels" class="col-sm-3 col-form-label">Pixels</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="pixels" id="pixels" value="24.2MP">
                </div>
            </div>
            <div class="form-group row">
                <label for="res" class="col-sm-3 col-form-label">Resolution</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="res" id="res" value="1920 x 1080">
                </div>
            </div>
            <div class="form-group row">
                <label for="iso" class="col-sm-3 col-form-label">iso</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="iso" id="harga" value="Auto (100-25600), 100-25600 (in 1/3-stop or whole stop increments) ISO can be expanded to H: 51200 During Movie shooting: Auto (100-12800), 100-12800 (in 1/3-stop or whole stop increments) ISO can be expanded to H: 256007">
                </div>
            </div>
            <div class="form-group row">
                <label for="shutter_speed" class="col-sm-3 col-form-label">Shutter Speed</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="shutter_speed" id="shutter_speed" value="30-1/4000 sec (1/2 or 1/3 stop increments), Bulb (Total shutter speed range. Available range varies by shooting mode)">
                </div>
            </div>
            <div class="form-group row">
                <label for="weight" class="col-sm-3 col-form-label">Weight</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="weight" id="weight" value="Approx. 532g">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">harga/hari</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="harga" id="harga" value="150000">
                </div>
            </div>
            <div class="form-group row">
                <label for="hobi" class="col-sm-3 col-form-label">Tag</label>
                <div class="col-sm-7">
                    <input type="checkbox" name="tag[]" value="terlaris"> Terlaris</br>
                    <input type="checkbox" name="tag[]" value="produk Terbaru"> Produk Terbaru</br>
                    <input type="checkbox" name="tag[]" value="tersedia"> Tersedia</br>
                    <input type="checkbox" name="tag[]" value="masih disewa"> Masih disewa</br>
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