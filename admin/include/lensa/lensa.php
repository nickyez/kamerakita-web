<?php
  if((isset($_GET['aksi']))&&(isset($_GET['data']))){
    if($_GET['aksi']=='hapus'){
    $id_lensa = $_GET['data'];
    //hapus kategori buku
    $sql_dh = "DELETE FROM `lensa` WHERE `id_lensa` = '$id_lensa'";
    mysqli_query($koneksi,$sql_dh);
    }
  }
  if(isset($_POST["katakunci"])){
    $katakunci_lensa = $_POST["katakunci"];
    $_SESSION['katakunci_lensa'] = $katakunci_lensa;
  }
  if(isset($_SESSION['katakunci_lensa'])){
    $katakunci_lensa = $_SESSION['katakunci_lensa'];
  }else{
    unset($_SESSION['katakunci_lensa']);
  }
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Data Lensa</h3>
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
                  <a href="index.php?include=lensa/tambah" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah Lensa</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form action="index.php?include=lensa" method="POST">
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
                        <th width="5%">No</th>
                        <th width="30%">Nama Produk</th>
                        <th width="30%">Jenis Lensa</th>
                        <th width="20%">Merk</th>
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
                            $sql_u = "SELECT `l`.`id_lensa`, `l`.`nama`,`jl`.`jenis`,`m`.`merk` 
                                      FROM `lensa` `l`
                                      INNER JOIN `jenis_lensa` `jl` ON `l`.`id_jenis` =`jl`.`id_jenis` 
                                      INNER JOIN `merk` `m` ON `l`.`id_merk` = `m`.`id_merk`";
                            if (!empty($katakunci_kategori)){
                              $sql_u .= " WHERE `l`.`nama` LIKE '%$katakunci_kategori%'";
                            }
                            $sql_u .= " ORDER BY `l`.`nama` limit $posisi, $batas ";
                            $query_u = mysqli_query($koneksi,$sql_u);
                            $no = $posisi+1;
                            while($data_u = mysqli_fetch_row($query_u)){
                              $id_lensa = $data_u[0];
                              $nama = $data_u[1];
                              $jenis = $data_u[2];
                              $merk = $data_u[3];
                          ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $jenis; ?></td>
                        <td><?php echo $merk;  ?></td>
                        <td align="center">
                          <a href="index.php?include=lensa/edit&data=<?php echo $id_lensa?>" class="btn btn-xs btn-info"<?php echo $id_lensa?> title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="index.php?include=lensa/detail&data=<?php echo $id_lensa?>" class="btn btn-xs btn-info"<?php echo $id_lensa?> class="btn btn-xs btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $nama; ?>?')) window.location.href ='index.php?include=lensa&aksi=hapus&data=<?php echo $id_lensa;?>¬if=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i></a>                        
                        </td>
                      </tr>
                      <?php $no++;  } ?>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <?php
                //hitung jumlah semua data
                $sql_jum = "SELECT `l`.`id_lensa`, `l`.`nama`,`jl`.`jenis`,`m`.`merk` 
                FROM `lensa` `l`
                INNER JOIN `jenis_lensa` `jl` ON `l`.`id_jenis` =`jl`.`id_jenis` 
                INNER JOIN `merk` `m` ON `l`.`id_merk` = `m`.`id_merk`";
                if (!empty($katakunci_lensa)){
                  $sql_jum .= " WHERE `nama` LIKE '%$katakunci_lensa%'";
                }
                $sql_jum .= " ORDER BY `nama`";
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
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=lensa&halaman=1'>First</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=lensa&halaman=$sebelum'>«</a></li>";
                    }
                    for($i=1; $i<=$jum_halaman; $i++){
                      if ($i > $halaman - 5 and $i < $halaman + 5 ) {
                        if($i!=$halaman){
                          echo "<li class='page-item'><a class='page-link' href='index.php?include=lensa&halaman=$i'>$i</a></li>";
                        }else{
                          echo "<li class='page-item'><a class='page-link'>$i</a></li>";
                        }
                      }
                    }
                    if($halaman!=$jum_halaman){
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=lensa&halaman=$setelah'>»</a></li>";
                      echo "<li class='page-item'><a class='page-link' href='index.php?include=lensa&halaman=$jum_halaman'>Last</a></li>";
                    }
                  } ?>
                </ul>
              </div>
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->