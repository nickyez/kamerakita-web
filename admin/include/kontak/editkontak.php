<?php 
      if(isset($_GET['data'])){
        $id_kontak = $_GET['data'];
        $_SESSION['id_kontak']=$id_kontak;
        $sql_d = "SELECT `media`,`kontak` FROM `kontak` WHERE `id_kontak` = '$id_kontak'";
        $query_d = mysqli_query($koneksi, $sql_d);
        while($data_d = mysqli_fetch_row($query_d)){
          $media = $data_d[0];
          $kontak = $data_d[1];
        }
      }
  ?>
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
            <?php if(!empty($_GET['notif'])){ ?>
            <?php if($_GET['notif']=="editkosong"){ ?>
            <div class="alert alert-danger" role="alert">Maaf data jenis kamera wajib di isi</div>
            <?php } ?>
            <?php } ?>
        </div>
        <form class="form-horizontal" action="index.php?include=kontak/edit/konfirmasi" method="POST">
            <div class="card-body">
                <div class="form-group row">
                    <label for="kontak" class="col-sm-3 col-form-label">Media</label>
                    <div class="col-sm-7">
                        <select class="form-control" id="kontak" name="media">
                            <option value="Whatsapp" <?php if($media=="Whatsapp"){echo "selected";} ?>>Whatsapp</option>
                            <option value="Gmail" <?php if($media=="Gmail"){echo "selected";} ?>>Gmail</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kontak" class="col-sm-3 col-form-label">kontak</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="kontak" name="kontak" value="<?php echo $kontak; ?>">
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