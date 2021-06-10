<div class="row">
    <div class="col-md-12">
        <div class="filters">
            <ul>
                <li class="active" data-filter="*">Semua Product</li>
                <li data-filter=".rec">Rekomendasi</li>
                <li data-filter=".bsel">Terlaris</li>
                <li data-filter=".new">Terbaru</li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <div class="filters-content">
            <div class="row grid">
                <?php 
                    $batas = 6;
                    if(!isset($_GET['halaman'])){
                        $posisi = 0;
                        $halaman = 1;
                    }else{
                        $halaman = $_GET['halaman'];
                        $posisi = ($halaman-1) * $batas;
                    }
                    $sql_b = "SELECT `k`.`id_kamera`, `k`.`nama`, `k`.`foto`, `k`.`harga` FROM `kamera` `k` ORDER BY `nama` LIMIT $posisi,$batas";
                    $query_b = mysqli_query($koneksi, $sql_b);
                    $no = $posisi+1;
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
                <div class="col-lg-4 col-md-4 all <?php if(in_array('Rekomendasi',$array_tag)){ echo "rec";}if(in_array('Terlaris',$array_tag)){ echo "bsel";}if(in_array('Terbaru',$array_tag)){ echo "new";} ?>">
                    <div class="product-item">
                        <a href="detail-product-kamera-id-<?php echo $id_kamera ?>"><img src="admin/produk/kamera/<?php echo $foto; ?>"
                                alt="<?php echo $nama_produk; ?>" style="max-height:170px;object-fit:contain;"></a>
                        <div class="down-content">
                            <a href="detail-product-kamera-id-<?php echo $id_kamera ?>">
                                <h4><?php echo $nama_produk; ?></h4>
                            </a>
                            <p>Rp.<?php echo $harga; ?></p>
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
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <?php 
                $sql_b = "SELECT `id_kamera`, `nama`, `foto`, `harga` FROM `kamera` ORDER BY `nama`";
                $query_jum = mysqli_query($koneksi, $sql_b);
                $jum_data = mysqli_num_rows($query_jum);
                $jum_halaman = ceil($jum_data/$batas);
            ?>
        <ul class="pages">
            <?php if($jum_halaman==0){
                      // tidak ada halaman
                    }else if($jum_halaman==1){ 
                      echo "<li><a>1</a></li>";
                    }else{
                      $sebelum = $halaman - 1;
                      $setelah = $halaman + 1;
                      for($i=1; $i<=$jum_halaman; $i++){
                        if($i > $halaman - 5 and $i < $halaman + 5){
                          if($i!=$halaman){
                            echo "<li><a href='product-kamera-halaman-$i'>$i</a></li>";
                          }else{
                            echo "<li><a>$i</a></li>";
                          }
                        }
                      }
                      if($halaman!=$jum_halaman){
                        echo "<li><a href='product-kamera-halaman-$setelah'><i class='fa fa-angle-double-right'></i></a></li>";
                      }
                    }
              ?>
        </ul>
    </div>
</div>