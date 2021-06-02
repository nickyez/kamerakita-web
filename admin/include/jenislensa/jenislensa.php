<?php
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
    $id_jenis = $_GET['data'];
    //hapus kategori buku
    $sql_dh = "DELETE FROM `jenis_lensa` WHERE `id_jenis` = '$id_jenis'";
    mysqli_query($koneksi,$sql_dh);
    }
  }
  if(isset($_POST["katakunci"])){
    $katakunci_jenis = $_POST["katakunci"];
    $_SESSION['katakunci_jenis'] = $katakunci_jenis;
  }
  if(isset($_SESSION['katakunci_jenis'])){
    $katakunci_jenis = $_SESSION['katakunci_jenis'];
  }else{
    unset($_SESSION['katakunci_jenis']);
  }
?>
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Jenis Lensa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Jenis Lensa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Jenis Lensa</h3>
                <div class="card-tools">
                <a href="index.php?include=jenis-lensa/tambah" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Jenis Lensa</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-12">
                  <form action="index.php?include=jenis-lensa" method="POST" >
                    <div class="row">
                      <div class="col-md-4 bottom-10">
                        <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                      </div>
                      <div class="col-md-5 bottom-10">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
                      </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                <div class="col-sm-12">
                  <?php if(!empty($_GET['notif'])){?>
                    <?php if($_GET['notif']=="tambahberhasil"){?>
                      <div class="alert alert-success" role="alert">
                      Data Berhasil Ditambahkan</div>
                    <?php } else if($_GET['notif']=="editberhasil"){?>
                      <div class="alert alert-success" role="alert">
                      Data Berhasil Diubah</div>
                    <?php } else if($_GET['notif']=="hapusberhasil"){?>
                      <div class="alert alert-success" role="alert">
                      Data Berhasil Dihapus</div>
                    <?php }?>
                  <?php } ?>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th width="5%"><center>No</center></th>
                      <th width="80%"><center>Jenis Lensa</center></th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $batas = 2;
                      if(!isset($_GET['halaman'])){
                        $posisi = 0;
                        $halaman = 1;
                      }else{
                        $halaman = $_GET['halaman'];
                        $posisi = ($halaman-1) * $batas;
                      }
                      $sql_k = "SELECT `id_jenis`,`jenis` 
                                FROM `jenis_lensa` ";
                      if (!empty($katakunci_jenis)){
                        $sql_k .= " WHERE `jenis` LIKE '%$katakunci_jenis%' ";
                      }
                      $sql_k .=" ORDER BY `jenis` limit $posisi, $batas";
                      $query_k = mysqli_query($koneksi,$sql_k);
                      $no = $posisi+1;
                      while($data_k = mysqli_fetch_row($query_k)){
                        $id_jenis = $data_k[0];
                        $jenis = $data_k[1];
                    ?>
                    <tr>
                      <td align="center"><?php echo $no; ?></td>
                      <td><?php echo $jenis; ?></td>
                      <td align="center">
                        <a href="index.php?include=jenis-lensa/edit&data=<?php echo $id_jenis;?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i></a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $jenis; ?>?')) window.location.href ='index.php?include=jenis-lensa&aksi=hapus&data=<?php echo $id_jenis;?>¬if=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php $no++;} ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <?php
                //hitung jumlah semua data
                $sql_jum = "SELECT `id_jenis`, `jenis` 
                            FROM `jenis_lensa` ";
                if (!empty($katakunci_jenis)){
                  $sql_jum .= " WHERE `jenis` LIKE '%$katakunci_jenis%'";
                }
                $sql_jum .= " ORDER BY `jenis`";
                $query_jum = mysqli_query($koneksi,$sql_jum);
                $jum_data = mysqli_num_rows($query_jum);
                $jum_halaman = ceil($jum_data/$batas);
              ?>
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <?php
                  if($jum_halaman==0){
                  //tidak ada halaman
                  }else if($jum_halaman==1){
                    echo "<li class='page-item'><a class='page-link'>1</a></li>";
                  }else{
                    $sebelum = $halaman-1;
                    $setelah = $halaman+1;
                    if($halaman!=1){
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-lensa&halaman=1'>First</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-lensa&halaman=$sebelum'>«</a></li>";
                    }
                    for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                          echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-lensa&halaman=$i'>$i</a></li>";
                        }else{
                          echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                        }
                      }
                    }
                    if($halaman!=$jum_halaman){
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-lensa&halaman=$setelah'>»</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=jenis-lensa&halaman=$jum_halaman'>Last</a></li>";
                    }
                  } ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.card -->
    </section