<?php 
        if((isset($_GET['aksi']))&&(isset($_GET['data']))){
            if($_GET['aksi']=='hapus'){
                $id_lensa = $_GET['data'];
                //get foto
                $sql_f = "SELECT `foto` FROM `lensa` WHERE `id_lensa`='$id_lensa'";
                $query_f = mysqli_query($koneksi,$sql_f);
                $jumlah_f = mysqli_num_rows($query_f);
                if($jumlah_f>0){
                    while($data_f = mysqli_fetch_row($query_f)){
                        $foto = $data_f[0];
                        //menghapus foto
                        unlink("produk/lensa/$foto");
                    }
                }
                //hapus tag lensa
                $sql_dh = "DELETE FROM `tag_lensa` WHERE `id_lensa` = '$id_lensa'";
                mysqli_query($koneksi,$sql_dh);
                //hapus data lensa
                $sql_dm = "DELETE FROM `lensa` WHERE `id_lensa` = '$id_lensa'";
                mysqli_query($koneksi,$sql_dm);
            }
        }
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-hockey-puck"></i> Data Lensa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Data Lensa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar lensa</h3>
                <div class="card-tools">
                  <a href="tambah-lensa" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah Lensa</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="lensa">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
              <div class="col-sm-12">
              <?php if(!empty($_GET['notif'])){?>
                <?php if($_GET['notif']=="tambahberhasil"){?>
                <div class="alert alert-success" role="alert">
                    Data Berhasil Ditambahkan</div>
                <?php }else if($_GET['notif']=="editberhasil"){?>
                <div class="alert alert-success" role="alert">
                    Data Berhasil Diubah</div>
                <?php } ?>
                <?php }?>
              </div>
              <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Nama Produk</th>
                        <th width="30%">Jenis Lensa</th>
                        <th width="20%">Merk</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                                    $batas = 5;
                                    if(!isset($_GET['halaman'])){
                                        $posisi = 0;
                                        $halaman = 1;
                                    }else{
                                        $halaman = $_GET['halaman'];
                                        $posisi = ($halaman-1) * $batas;
                                    }
                                    if(isset($_POST['katakunci'])){
                                        $katakunci_lensa = $_POST['katakunci'];
                                        $_SESSION['katakunci_lensa'] = $katakunci_lensa;
                                    }
                                    if(isset($_SESSION['katakunci_lensa'])){
                                        $katakunci_lensa = $_SESSION['katakunci_lensa'];
                                    }
                                    $sql_b = "SELECT `k`.`id_lensa`, `k`.`nama`, `jk`.`jenis`, `m`.`merk` FROM  `lensa` `k` INNER JOIN `jenis_lensa` `jk` ON `k`.`id_jenis`=`jk`.`id_jenis` INNER JOIN `merk` `m` ON `k`.`id_merk` = `m`.`id_merk`";
                                    if(!empty($katakunci_lensa)){
                                        $sql_b .= " WHERE `k`.`nama` LIKE '%$katakunci_lensa%'";
                                    }
                                    $sql_b .= " ORDER BY `jk`.`jenis`, `k`.`nama` LIMIT $posisi, $batas";
                                    $query_b = mysqli_query($koneksi, $sql_b);
                                    $no = $posisi+1;
                                    while($data_b = mysqli_fetch_row($query_b)){
                                        $id_lensa = $data_b[0];
                                        $nama = $data_b[1];
                                        $jenis_lensa = $data_b[2];
                                        $merk = $data_b[3];
                                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td>Wide Lensa</td>
                        <td><?php echo $merk; ?></td>
                        <td align="center">
                          <a href="edit-lensa-data-<?php echo $id_lensa; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="detail-lensa-data-<?php echo $id_lensa; ?>" class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama; ?>?')) window.location.href = 'lensa-data-<?php echo $id_lensa;?>-mode-hapus_notif-hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      <?php $no++; ?>
                      <?php } ?>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              <?php 
                            $sql_b = "SELECT `k`.`id_lensa`, `k`.`nama`, `jk`.`jenis`, `m`.`merk` FROM  `lensa` `k` INNER JOIN `jenis_lensa` `jk` ON `k`.`id_jenis`=`jk`.`id_jenis` INNER JOIN `merk` `m` ON `k`.`id_merk` = `m`.`id_merk`";
                            if(!empty($katakunci_lensa)){
                                $sql_b .= " WHERE `k`.`nama` LIKE '%$katakunci_lensa%'";
                            }
                            $sql_b .= " ORDER BY `jk`.`jenis`, `k`.`nama`";
                            $query_jum = mysqli_query($koneksi, $sql_b);
                            $jum_data = mysqli_num_rows($query_jum);
                            $jum_halaman = ceil($jum_data/$batas);
                        ?>
                <ul class="pagination pagination-sm m-0 float-right">
                <?php
                                if($jum_halaman==0){
                                    // tidak ada halaman
                                }else if($jum_halaman==1){
                                    echo "<li class='page-item'><a class='page-link'>1</a></li>";
                                }else{
                                    $sebelum = $halaman - 1;
                                    $setelah = $halaman + 1;
                                    if($halaman!=1){
                                        echo "
                                            <li class='page-item'>
                                                <a class='page-link'href='index.php?include=lensa&halaman=1'>First</a>
                                            </li>
                                        ";
                                        echo "
                                            <li class='page-item'>
                                                <a class='page-link'href='index.php?include=lensa&halaman=$sebelum'>«</a>
                                             </li>
                                        ";
                                    }
                                    for($i=1; $i<=$jum_halaman; $i++){
                                        if($i > $halaman - 5 and $i < $halaman + 5){
                                            if($i!=$halaman){
                                                echo "
                                                    <li class='page-item'>
                                                        <a class='page-link' href='index.php?include=lensa&halaman=$i'>$i</a>
                                                    </li>
                                                ";
                                            }else{
                                                echo "
                                                    <li class='page-item'>
                                                        <a class='page-link'>$i</a>
                                                    </li>
                                                ";
                                            }
                                        }
                                    }
                                    if($halaman!=$jum_halaman){
                                        echo "
                                        <li class='page-item'>
                                        <a class='page-link' href='index.php?include=lensa&halaman=$setelah'>
                                        »</a></li>
                                        ";
                                        echo "
                                        <li class='page-item'><a class='page-link' href='index.php?include=lensa&halaman=$jum_halaman'>Last</a></li>
                                        ";
                                    }
                                }
                            ?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->