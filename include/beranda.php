<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Best Offer</h4>
                <h2>New Arrivals On Sale</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Flash Deals</h4>
                <h2>Get your best products</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Last Minute</h4>
                <h2>Grab last minute deals</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Produk Terbaru</h2>
                </div>
            </div>
            <?php 
              $batas = 3;
              if(!isset($_GET['halaman'])){
                  $posisi = 0;
                  $halaman = 1;
              }else{
                  $halaman = $_GET['halaman'];
                  $posisi = ($halaman-1) * $batas;
              }
              $sql_b = "SELECT `k`.`id_kamera`, `k`.`nama`, `k`.`foto`, `k`.`harga` FROM `kamera` `k` ORDER BY `k`.`nama` LIMIT $posisi,$batas";
              $query_b = mysqli_query($koneksi, $sql_b);
              $no = 1;
              while($data_b = mysqli_fetch_row($query_b)){
                  $id_kamera = $data_b[0];
                  $nama_produk = $data_b[1];
                  $foto = $data_b[2];
                  $harga = $data_b[3];

                  $array_idtag = array();
                        $array_tag = array();
                        $sql_tb = "SELECT `tk`.`id_tag`,`t`.`tag` FROM `tag_kamera` `tk` INNER JOIN `tag` `t` ON `tk`.`id_tag` = `t`.`id_tag` WHERE `tk`.`id_kamera` = '$id_kamera'";
                        $query_tb = mysqli_query($koneksi, $sql_tb);
                        while($data_tb = mysqli_fetch_row($query_tb)){
                          $array_idtag[] = $data_tb[0];
                          $array_tag[] = $data_tb[1];
                        }
                        if(in_array('Tersedia',$array_tag)){
                          $status = 'Tersedia';
                        }
          ?>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="detail-product-kamera-id-<?php echo $id_kamera; ?>"><img
                            src="admin/produk/kamera/<?php echo $foto; ?>" alt="<?php echo $nama_produk; ?>"
                            style="max-height:170px;object-fit:contain;"></a>
                    <div class="down-content">
                        <a href="detail-product-kamera-id-<?php echo $id_kamera; ?>">
                            <h4><?php echo $nama_produk; ?></h4>
                        </a>
                        <p>Rp.<?php echo $harga; ?>/Hari</p>
                        <!-- <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p> -->
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span><?php echo $status; ?></span>
                    </div>
                </div>
            </div>
            <?php $no++;} ?>
            <?php 
              $batas = 3;
              if(!isset($_GET['halaman'])){
                  $posisi = 0;
                  $halaman = 1;
              }else{
                  $halaman = $_GET['halaman'];
                  $posisi = ($halaman-1) * $batas;
              }
              $sql_b = "SELECT `l`.`id_lensa`, `l`.`nama`, `l`.`foto`, `l`.`harga` FROM `lensa` `l` ORDER BY `l`.`nama` LIMIT $posisi,$batas";
              $query_b = mysqli_query($koneksi, $sql_b);
              $no = 1;
              while($data_b = mysqli_fetch_row($query_b)){
                  $id_lensa = $data_b[0];
                  $nama = $data_b[1];
                  $foto = $data_b[2];
                  $harga = $data_b[3];

                  $array_idtag = array();
                        $array_tag = array();
                        $sql_tb = "SELECT `tl`.`id_tag`,`t`.`tag` FROM `tag_lensa` `tl` INNER JOIN `tag` `t` ON `tl`.`id_tag` = `t`.`id_tag` WHERE `tl`.`id_lensa` = '$id_lensa'";
                        $query_tb = mysqli_query($koneksi, $sql_tb);
                        while($data_tb = mysqli_fetch_row($query_tb)){
                          $array_idtag[] = $data_tb[0];
                          $array_tag[] = $data_tb[1];
                        }
                        if(in_array('Tersedia',$array_tag)){
                          $status = 'Tersedia';
                        }
          ?>
            <div class="col-md-4">
                <div class="product-item">
                    <a href="detail-product-lensa-id-<?php echo $id_lensa; ?>"><img
                            src="admin/produk/lensa/<?php echo $foto; ?>" alt="<?php echo $nama; ?>"
                            style="max-height:170px;object-fit:contain;"></a>
                    <div class="down-content">
                        <a href="detail-product-lensa-id-<?php echo $id_lensa; ?>">
                            <h4><?php echo $nama; ?></h4>
                        </a>
                        <p>Rp.<?php echo $harga; ?>/Hari</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <span><?php echo $status; ?></span>
                    </div>
                </div>
            </div>
            <?php $no++;} ?>
        </div>
    </div>
</div>

<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Tentang KameraKita</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">
                    <h4>Berikut Kelebihan jika anda sewa disini</h4>
                    <ul class="featured-list">
                        <li><a>Better Price : Biaya Terjangkau, Variatif harga sewa sesuai kantong budget, banyak
                                diskon,ada voucher dan membercard</a></li>
                        <li><a>Better Product : Kualitas Kamera dan Asesories terjaga dengan baik, siap pakai untuk
                                mengabadikan moment anda</a></li>
                        <li><a>Better People : Team Kami memberi pelayanan pemindahan data gratis di Office, Live
                                tutorial untuk pemula dgn singkat dan padat, Pelayanan 5 S</a></li>
                        <li><a>Better Place : Tempat Kami nyaman, dekat dengan berbagai kampus</a></li>
                        <li><a>Better Service : Kami melayani jasa antar ambil, lebih fleksible dan cepat.</a></li>
                    </ul>
                    <a href="about" class="filled-button">Read More</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="assets/images/feature-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>