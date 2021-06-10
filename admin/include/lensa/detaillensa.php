<?php 
        if(isset($_GET['data'])){
          $id_lensa = $_GET['data'];
          //gat data lensa
          $sql = "SELECT `k`.`nama`, `jk`.`jenis`, `m`.`merk`,`k`.`focal_length`,`k`.`maximum_aperture`,`k`.`mount_type`,`k`.`format`,`k`.`harga`,`k`.`foto` FROM  `lensa` `k` INNER JOIN `jenis_lensa` `jk` ON `k`.`id_jenis`=`jk`.`id_jenis` INNER JOIN `merk` `m` ON `k`.`id_merk` = `m`.`id_merk` WHERE `k`.`id_lensa`='$id_lensa'";
          $query = mysqli_query($koneksi,$sql);
          while($data = mysqli_fetch_row($query)){
            $nama_produk = $data[0];
            $jenis_lensa = $data[1];
            $merk = $data[2];
            // spefisikasi lensa
            $focal_length = $data[3];
            $max_aperture = $data[4];
            $mount_type = $data[5];
            $format = $data[6];
            $harga = $data[7];
            $foto = $data[8];
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
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item"><a href="lensa">Data Lensa</a></li>
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
                <a href="lensa" class="btn btn-sm btn-warning float-right">
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
                        <td width="80%"><?php echo $nama_produk; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Jenis lensa<strong></td>
                        <td width="80%"><?php echo $jenis_lensa; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Merk<strong></td>
                        <td width="80%"><?php echo $merk; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Tag<strong></td>
                        <td>
                            <ul>
                                <?php
                                              //get tag
                                              $sql_h = "SELECT `t`.`tag` from `tag_lensa` `tk`
                                              inner join `tag` `t` ON `tk`.`id_tag` = `t`.`id_tag` 
                                              where `tk`.`id_lensa`='$id_lensa'";
                                              $query_h = mysqli_query($koneksi,$sql_h);
                                              while($data_h = mysqli_fetch_row($query_h)){
                                                $tag= $data_h[0];
                                            ?>
                                <li><?php echo $tag;?></li>
                                <?php } ?>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Focal Length<strong></td>
                        <td width="80%"><?php echo $focal_length; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Maximum Aperture<strong></td>
                        <td width="80%"><?php echo $max_aperture; ?></td>
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
                        <td width="80%">Rp.<?php echo $harga; ?>/hari</td>
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