<?php 
    if(isset($_GET['id'])){
        $id_lensa = $_GET['id'];
        $sql = "SELECT `l`.`nama`,`jl`.`jenis`,`m`.`merk`,`l`.`focal_length`,`l`.`maximum_aperture`,`l`.`mount_type`,`l`.`format`,`l`.`harga`,`l`.`foto`,`l`.`id_jenis` FROM `lensa` `l` INNER JOIN `jenis_lensa` `jl` ON `jl`.`id_jenis` = `l`.`id_jenis` INNER JOIN `merk` `m` ON `m`.`id_merk` = `l`.`id_merk` WHERE `id_lensa` = '$id_lensa'";
        $query = mysqli_query($koneksi, $sql);
        while($data=mysqli_fetch_row($query)){
            $nama_produk = $data[0];
            $jenis_lensa = $data[1];
            $merk = $data[2];
            // Spesifikasi lensa
            $focal_length = $data[3];
            $max_aperture = $data[4];
            $mount_type = $data[5];
            $format = $data[6];
            $harga = $data[7];
            $foto = $data[8];
            $id_jenis = $data[9];
            
            $array_tag = array();
            $sql_tb = "SELECT `t`.`tag` FROM `tag_lensa` `tl` INNER JOIN `tag` `t` ON `tl`.`id_tag` = `t`.`id_tag` WHERE `tl`.`id_lensa` = '$id_lensa'";
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
                <li class="breadcrumb-item"><a href="product-lensa">Sewa -en-a</a></li>
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
                            <img src="admin/produk/lensa/<?php echo $foto; ?>" alt="dslr-canon-eos-700d">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <th>Jenis</th>
                                <td><?php echo $jenis_lensa; ?></td>
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
                                            <th scope="row">Focal Length</th>
                                            <td><?php echo $focal_length; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Maximum Aperture</th>
                                            <td><?php echo $max_aperture; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Mount Type</th>
                                            <td><?php echo $mount_type; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Format</th>
                                            <td><?php echo $format; ?></td>
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
                            <a href="contact" class="btn -tn-dark">Sewa Sekarang</a>
                        </div>
                    </div>
                    <!-- Panel -->
                    <div class="rekomendasi-produk">
                        <div class="rekomendasi-produk__title">
                            <h5>Rekomendasi lensa</h5>
                        </div>
                        <div class="rekomendasi-produk__body">
                            <div class="row">
                              <?php 
                                  $sql_rek = "SELECT `id_lensa`, `nama`, `foto`, `harga` FROM `lensa` WHERE `id_jenis` = '$id_jenis' AND `id_lensa` != '$id_lensa' ORDER BY `nama`";
                                  $query_rek = mysqli_query($koneksi, $sql_rek);
                                  while($data_rek = mysqli_fetch_row($query_rek)){
                                    $id_kmr = $data_rek[0];
                                    $nama_pd = $data_rek[1];
                                    $ft = $data_rek[2];
                                    $hrg = $data_rek[3];
                              ?>
                                <div class="col-md-6">
                                    <div class="produk-item">
                                        <a href="detail-product-lensa-id-<?php echo $id_kmr; ?>"><img src="admin/produk/lensa/<?php echo $ft; ?>"
                                                style="max-height:132px;object-fit:contain;"></a>
                                        <div class="down-content">
                                            <a href="detail-product-lensa-id-<?php echo $id_kmr; ?>">
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