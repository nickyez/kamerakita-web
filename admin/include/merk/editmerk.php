<?php 
      if(isset($_GET['data'])){
        $id_merk = $_GET['data'];
        $_SESSION['id_merk']=$id_merk;

        $sql_d = "SELECT `merk` FROM `merk` WHERE `id_merk` = '$id_merk'";
        $query_d = mysqli_query($koneksi, $sql_d);
        while($data_d = mysqli_fetch_row($query_d)){
          $merk = $data_d[0];
        }
      }
  ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-edit"></i> Edit Merk</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="merk">merk</a></li>
                    <li class="breadcrumb-item active">Edit Merk</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Merk</h3>
            <div class="card-tools">
                <a href="merk" class="btn btn-sm btn-warning float-right"><i
                        class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        </br>
        <div class="col-sm-10">
            <?php if(!empty($_GET['notif'])){ ?>
            <?php if($_GET['notif']=="editkosong"){ ?>
            <div class="alert alert-danger" role="alert">Maaf data merk wajib di isi</div>
            <?php } ?>
            <?php } ?>
        </div>
        <form class="form-horizontal" method="post" action="konfirmasi-edit-kamera">
            <div class="card-body">
                <div class="form-group row">
                    <label for="merk" class="col-sm-3 col-form-label">Merk</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="merk" name="merk" value="<?php echo $merk; ?>">
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