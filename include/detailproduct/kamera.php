<?php 
    if(isset($_GET['id'])){
        $id_kamera = $_GET['id'];
        $sql = "SELECT `k`.`nama`,`jk`.`jenis`,`m`.`merk`,`k`.`battery_life`,`k`.`frame_rates`,`k`.`image_sensor`,`k`.`aspect_ratio`,`k`.`pixels`,`k`.`resolution`,`k`.`iso`,`k`.`shuter_speed`,`k`.`weight`,`k`.`harga`,`k`.`foto`,`k`.`id_jenis` FROM `kamera` `k` INNER JOIN `jenis_kamera` `jk` ON `jk`.`id_jenis` = `k`.`id_jenis` INNER JOIN `merk` `m` ON `m`.`id_merk` = `k`.`id_merk` WHERE `id_kamera` = '$id_kamera'";
        $query = mysqli_query($koneksi, $sql);
        while($data=mysqli_fetch_row($query)){
            $nama_produk = $data[0];
            $jenis_kamera = $data[1];
            $merk = $data[2];
            // Spesifikasi Kamera
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
            $id_jenis = $data[14];
            
            $array_tag = array();
            $sql_tb = "SELECT `t`.`tag` FROM `tag_kamera` `tk` INNER JOIN `tag` `t` ON `tk`.`id_tag` = `t`.`id_tag` WHERE `tk`.`id_kamera` = '$id_kamera'";
            $query_tb = mysqli_query($koneksi, $sql_tb);
            while($data_tb = mysqli_fetch_row($query_tb)){
              $array_tag[] = $data_tb[0];
            }
        }
    }
?>
<div class="detail-product" style="margin-top:50px">
    <div class="container">
        <nav aria-label="breadcrumb bg-white">
            <ol class="breadcrumb bg-white">
                <li class="breadcrumb-item"><a href="product-kamera">Sewa Kamera</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $nama_produk; ?></li>
            </ol>
        </nav>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <h3 class="my-4"><?php echo $nama_produk; ?></h3>
                <div class="row align-items-end mb-4">
                    <div class="col-md-6">
                        <div class="detail-product__image">
                            <img src="admin/produk/kamera/<?php echo $foto; ?>" alt="dslr-canon-eos-700d">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>Jenis</th>
                                <td><?php echo $jenis_kamera; ?></td>
                            </tr>
                            <tr>
                                <th>Merk</th>
                                <td><?php echo $merk; ?></td>
                            </tr>
                            <tr>
                                <th>Tag</th>
                                <td>
                                <?php 
                                  if(!empty($array_tag)){
                                    $jumlah_tag = count($array_tag);
                                    for($i=0;$i<$jumlah_tag;$i++){
                                        if($i==($jumlah_tag-1)){ ?>
                                            <a><?php echo $array_tag[$i];?></a><?php
                                        }else{ ?>
                                            <a><?php echo $array_tag[$i];?></a>,
                                    <?php 
                                    }
                                    ?>
                                  <?php }}?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active">Spesifikasi</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                            <div class="tab-pane fade show active">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Battery Life</th>
                                            <td><?php echo $bat_life; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Frame Rate</th>
                                            <td><?php echo $frame_rate; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Image Sensor</th>
                                            <td><?php echo $img_sensor; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Aspect Ratio</th>
                                            <td><?php echo $asp_ratio; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pixels</th>
                                            <td><?php echo $pixels; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Resolution</th>
                                            <td><?php echo $res; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ISO</th>
                                            <td><?php echo $iso; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Shutter Speed</th>
                                            <td><?php echo $shut_speed; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Weight</th>
                                            <td><?php echo $weight; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
                <!-- Col-md-8 -->
                <div class="col-md-4">
                    <div class="panel panel-default text-center" style="border:1px solid #ccc;">
                        <div class="panel-head">
                            <?php echo $nama_produk; ?>
                        </div>
                        <div class="panel-body">
                            <h4>Rp.<?php echo $harga; ?>/hari</h4>
                        </div>
                        <div style="padding:0px 20px 20px">
                            <a href="contact" class="btn btn-dark">Sewa Sekarang</a>
                        </div>
                    </div>
                    <!-- Panel -->
                    <div class="rekomendasi-produk">
                        <div class="rekomendasi-produk__title">
                            <h5>Rekomendasi Kamera</h5>
                        </div>
                        <div class="rekomendasi-produk__body">
                            <div class="row">
                              <?php 
                                  $sql_rek = "SELECT `id_kamera`, `nama`, `foto`, `harga` FROM `kamera` WHERE `id_jenis` = '$id_jenis' AND `id_kamera` != '$id_kamera' ORDER BY `nama`";
                                  $query_rek = mysqli_query($koneksi, $sql_rek);
                                  while($data_rek = mysqli_fetch_row($query_rek)){
                                    $id_kmr = $data_rek[0];
                                    $nama_pd = $data_rek[1];
                                    $ft = $data_rek[2];
                                    $hrg = $data_rek[3];
                              ?>
                                <div class="col-md-6">
                                    <div class="produk-item">
                                        <a href="detail-product-kamera-id-<?php echo $id_kmr; ?>"><img src="admin/produk/kamera/<?php echo $ft; ?>"
                                                style="max-height:132px;object-fit:contain;"></a>
                                        <div class="down-content">
                                            <a href="detail-product-kamera-id-<?php echo $id_kmr; ?>">
                                                <h4 class="produk-title"><?php echo $nama_pd; ?></h4>
                                            </a>
                                            <p>Rp.<?php echo $hrg; ?>/Hari</p>
                                            <span>Tersedia</span>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <!-- rekomendasi produk -->
                </div>
                <!-- col-md-4 -->
            </div>
        </div>
    </div>