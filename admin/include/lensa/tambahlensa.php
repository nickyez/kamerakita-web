    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-plus"></i> Tambah lensa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=lensa">Data lensa</a></li>
              <li class="breadcrumb-item active">Tambah lensa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Data lensa</h3>
        <div class="card-tools">
          <a href="index.php?include=lensa" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <div class="alert alert-danger" role="alert">Maaf data nama wajib di isi</div>
      </div>
      <form class="form-horizontal">
        <div class="card-body">
            <div class="form-group row">
                <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-lensa-circle"></i> <u>Data lensa</u></span></label>
            </div>          
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
                        <option value="0">--Pilih--</option>
                        <option value="1">Wide Lensa</option>
                        <option value="2">Fisheye</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jenis" class="col-sm-3 col-form-label">Merk</label>
                <div class="col-sm-7">
                    <select class="form-control" id="jenis" name="jenis_lensa">
                        <option value="0">--Pilih--</option>
                        <option value="1">Canon</option>
                        <option value="2">Nikon</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nim" class="col-sm-3 col-form-label">Nama Produk</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="produk" id="produk" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="focal_length" class="col-sm-3 col-form-label">focal length</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="focal_length" id="focal_length" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="max_aperture" class="col-sm-3 col-form-label">Maximum Aperture</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="max_aperture" id="max_aperture" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="mount_type" class="col-sm-3 col-form-label">Mount Type</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="mount_type" id="mount_type" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="format" class="col-sm-3 col-form-label">Format</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" name="format" id="format" value="">
                    </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">Harga/hari</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="harga" id="harga" value="">
                </div>
            </div>
            <div class="form-group row">
                <label for="hobi" class="col-sm-3 col-form-label">Tag</label>
                <div class="col-sm-7">
                    <input type="checkbox" name="tag[]" value="rlaris"> Terlaris</br>
                    <input type="checkbox" name="tag[]" value="oduk Terbaru"> Produk Terbaru</br>
                    <input type="checkbox" name="tag[]" value="rsedia"> Tersedia</br>
                    <input type="checkbox" name="tag[]" value="sih disewa"> Masih disewa</br>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->
    </section>
    <!-- /.content -->