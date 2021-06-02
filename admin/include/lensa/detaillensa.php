<?php
  if(isset($_GET['data'])){
    $id_lensa = $_GET['data'];
    //get data lensa
    $sql = "SELECT `l`.`foto`, `l`.`nama`, `jl`.`jenis`, `l`.`focal_length`, `m`.`merk`,
                  `l`.`maximum_aperture`, `l`.`mount_type`, `l`.`format`, `l`.`harga` 
            FROM `lensa` `l`
            INNER JOIN `jenis_lensa` `jl` ON `l`.`id_jenis`=`jl`.`id_jenis`
            INNER JOIN `merk` `m` ON `l`.`id_merk`= `m`.`id_merk`
            WHERE `l`.`id_lensa`='$id_lensa'";
    $query = mysqli_query($koneksi,$sql);
    while($data = mysqli_fetch_row($query)){
      $foto = $data[0];
      $nama = $data[1];
      $jenis = $data[2];
      $focal_length = $data[3];
      $merk = $data[4];
      $maximum_aperture = $data[5];
      $mount_type = $data[6];
      $format = $data[7];
      $harga = $data[8];
    }
  }
?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h3><i class="fas fa-user-tie"></i> Detail Data Lensa</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.php?include=lensa">Data Lensa</a></li>
                                <li class="breadcrumb-item active">Detail Data Lensa</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="card-tools">
                            <a href="index.php?include=lensa" class="btn btn-sm btn-warning float-right">
                                <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td><strong>Foto Produk<strong></td>
                                    <td><img src="produk/lensa/<?php echo $foto; ?>" class="img-fluid" width="200px;"></td>
                                </tr>
                                <tr>
                                    <td width="20%"><strong>Nama Produk<strong></td>
                                    <td width="80%"><?php echo $nama; ?></td>
                                </tr>
                                <tr>
                                    <td width="20%"><strong>Jenis lensa<strong></td>
                                    <td width="80%"><?php echo $jenis; ?></td>
                                </tr>
                                <tr>
                                    <td width="20%"><strong>Merk<strong></td>
                                    <td width="80%"><?php echo $merk; ?></td>
                                </tr>
                                
                                <tr>
                                    <td width="20%"><strong>Focal Length<strong></td>
                                    <td width="80%"><?php echo $focal_length; ?></td>
                                </tr>
                                <tr>
                                    <td width="20%"><strong>Maximum Aperture<strong></td>
                                    <td width="80%"><?php echo $maximum_aperture; ?></td>
                                </tr>
                                <tr>
                                    <td width="20%"><strong>Mount Type<strong></td>
                                    <td width="80%"><?php echo $mount_type; ?></td>
                                </tr>
                                <tr>
                                    <td width="20%"><strong>Format<strong></td>
                                    <td width="80%"><?php echo $format; ?></td>
                                </tr>
                                <tr>
                                    <td width="20%"><strong>Harga<strong></td>
                                    <td width="80%"><?php echo $harga; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">&nbsp;</div>
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->s