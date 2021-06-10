<?php 
        if(isset($_GET['data'])){
          $id_kamera = $_GET['data'];
          //gat data kamera
          $sql = "SELECT `k`.`nama`, `jk`.`jenis`, `m`.`merk`,`k`.`battery_life`,`k`.`frame_rates`,`k`.`image_sensor`,`k`.`aspect_ratio`,`k`.`pixels`,`k`.`resolution`,`k`.`iso`,`k`.`shuter_speed`,`k`.`weight`,`k`.`harga`,`k`.`foto` FROM  `kamera` `k` INNER JOIN `jenis_kamera` `jk` ON `k`.`id_jenis`=`jk`.`id_jenis` INNER JOIN `merk` `m` ON `k`.`id_merk` = `m`.`id_merk` WHERE `k`.`id_kamera`='$id_kamera'";
          $query = mysqli_query($koneksi,$sql);
          while($data = mysqli_fetch_row($query)){
            $nama_produk = $data[0];
            $jenis_kamera = $data[1];
            $merk = $data[2];
            // spefisikasi kamera
            $bat_life = $data[3];
            $frame_rate = $data[4];
            $img_sensor = $data[5];
            $asp_ratio = $data[6];
            $pixels = $data[7];
            $res = $data[8];
            $iso = $data[9];
            $shut_speed = $data[10];
            $weight = $data[11];
            $harga = $data[12];
            $foto = $data[13];
          }
        }
    ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-user-tie"></i> Detail Data kamera</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item"><a href="kamera">Data kamera</a></li>
                    <li class="breadcrumb-item active">Detail Data kamera</li>
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
                <a href="kamera" class="btn btn-sm btn-warning float-right">
                    <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><strong>Foto Produk<strong></td>
                        <td><img src="produk/kamera/<?php echo $foto; ?>" class="img-fluid" width="200px;"></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Nama Produk<strong></td>
                        <td width="80%"><?php echo $nama_produk; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Jenis kamera<strong></td>
                        <td width="80%"><?php echo $jenis_kamera; ?></td>
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
                                              $sql_h = "SELECT `t`.`tag` from `tag_kamera` `tk`
                                              inner join `tag` `t` ON `tk`.`id_tag` = `t`.`id_tag` 
                                              where `tk`.`id_kamera`='$id_kamera'";
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
                        <td width="20%"><strong>Battery Life<strong></td>
                        <td width="80%"><?php echo $bat_life; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Frame rate<strong></td>
                        <td width="80%"><?php echo $frame_rate; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Image Sensor<strong></td>
                        <td width="80%"><?php echo $img_sensor; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Aspect Ratio<strong></td>
                        <td width="80%"><?php echo $asp_ratio; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Pixels<strong></td>
                        <td width="80%"><?php echo $pixels; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Resolution<strong></td>
                        <td width="80%"><?php echo $res; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Iso<strong></td>
                        <td width="80%"><?php echo $iso; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Shutter Speed<strong></td>
                        <td width="80%"><?php echo $shut_speed; ?></td>
                    </tr>
                    <tr>
                        <td width="20%"><strong>Weight<strong></td>
                        <td width="80%"><?php echo $weight; ?></td>
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
<!-- /.content -->