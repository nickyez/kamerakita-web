<!DOCTYPE html>
<html>
<head>
  <?php include("includes/head.php") ?> 
  <?php 
      session_start();
      include('../koneksi/koneksi.php');
      if(isset($_GET['data'])){
        $id_jenis = $_GET['data'];
        $_SESSION['id_jenis']=$id_jenis;

        $sql_d = "SELECT `jenis` FROM `jenis` WHERE `id_jenis` = '$id_jenis'";
        $query_d = mysqli_query($koneksi, $sql_d);
        while($data_d = mysqli_fetch_row($query_d)){
          $jenis = $data_d[0];
        }
      }
  ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit jenis kamera</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?include=jenis-kamera">jenis kamera</a></li>
              <li class="breadcrumb-item active">Edit jenis kamera</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit jenis kamera</h3>
        <div class="card-tools">
          <a href="index.php?include=jenis-kamera" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
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
      <form class="form-horizontal" action="konfirmasieditjenis.php" method="post">
        <div class="card-body">
          <div class="form-group row">
            <label for="jenis-kamera" class="col-sm-3 col-form-label">jenis kamera</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="jenis-kamera" value="DSLR">
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
    </div>
  <!-- /.content-wrapper -->
  <?php include("includes/footer.php") ?>

</div>
<!-- ./wrapper -->

<?php include("includes/script.php") ?>
</body>
</html>
