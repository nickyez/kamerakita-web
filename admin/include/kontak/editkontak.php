    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3><i class="fas fa-edit"></i> Edit kontak</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?include=kontak">kontak</a></li>
                        <li class="breadcrumb-item active">Edit kontak</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit kontak</h3>
                <div class="card-tools">
                    <a href="index.php?include=kontak" class="btn btn-sm btn-warning float-right"><i
                            class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            </br>
            <div class="col-sm-10">
                <div class="alert alert-danger" role="alert">Maaf data kontak wajib di isi</div>
            </div>
            <form class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-3 col-form-label">Media</label>
                        <div class="col-sm-7">
                            <select class="form-control" id="jenis" name="Media">
                                <option value="1">Whatsapp</option>
                                <option value="2">Gmail</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kontak" class="col-sm-3 col-form-label">kontak</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="kontak" value="0812-3456-7891">
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-info float-right"><i class="fas fa-edit"></i> Edit</button>
                    </div>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->