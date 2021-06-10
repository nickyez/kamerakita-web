<?php
        $id_user = $_SESSION['id_user'];
        if((isset($_GET['aksi'])) && (isset($_GET['data']))){
            if($_GET['aksi']=='hapus'){
                $id_merk = $_GET['data'];
                $sql_dh = "DELETE FROM `merk` WHERE `id_merk`=$id_merk";
                mysqli_query($koneksi, $sql_dh);
            }
        }
    ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-clipboard"></i> Data Merk</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"> Data Merk</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar Merk</h3>
            <div class="card-tools">
                <a href="tambah-merk" class="btn btn-sm btn-info float-right">
                    <i class="fas fa-plus"></i> Tambah merk</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="col-md-12">
                <form method="post" action="merk">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                            <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp;
                                Search</button>
                        </div>
                    </div><!-- .row -->
                </form>
            </div><br>
            <div class="col-sm-12">
                <?php if(!empty($_GET['notif'])){?>
                <?php if($_GET['notif']=="tambahberhasil"){ ?>
                <div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>
                <?php } ?>
                <?php if($_GET['notif']=="editberhasil"){ ?>
                <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                <?php } ?>
                <?php if($_GET['notif']=="hapusberhasil"){ ?>
                <div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>
                <?php } ?>
                <?php } ?>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="30%">Merk</th>
                        <th width="15%">
                            <center>Aksi</center>
                        </th>
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
                                      $katakunci_merk = $_POST['katakunci'];
                                      $_SESSION['katakunci_merk'] = $katakunci_merk;
                                  }
                                  if(isset($_SESSION['katakunci_merk'])){
                                      $katakunci_merk = $_SESSION['katakunci_merk'];
                                  }
                                  $sql_k = "SELECT `id_merk`, `merk` FROM `merk`";
                                  if(!empty($katakunci_merk)){
                                    $sql_k .= " WHERE `merk` LIKE '%$katakunci_merk%'";
                                  }
                                  $sql_k .= "ORDER BY `merk` LIMIT $posisi, $batas";
                                  $query_k = mysqli_query($koneksi, $sql_k);
                                  $no = $posisi+1;
                                  while($data_k = mysqli_fetch_row($query_k)){
                                      $id_merk = $data_k[0];
                                      $merk = $data_k[1];
                                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $merk; ?></td>
                        <td align="center">
                            <a href="edit-merk-data-<?php echo $id_merk; ?>"
                                class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $merk; ?>?'))window.location.href='merk-data-<?php echo $id_merk;?>-mode-hapus_notif-hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>
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
                            $sql_jum = "SELECT `id_merk`, `merk` FROM `merk`";
                            if(!empty($katakunci_merk)){
                                $sql_jum .=" WHERE `merk` LIKE '%$katakunci_merk%'";
                            }
                            $sql_jum .= "ORDER BY `merk`";
                            $query_jum = mysqli_query($koneksi, $sql_jum);
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
                                                    <a class='page-link'href='merk-halaman-1'>First</a>
                                                </li>
                                            ";
                                            echo "
                                                <li class='page-item'>
                                                    <a class='page-link'href='merk-halaman-$sebelum'>«</a>
                                                 </li>
                                            ";
                                    }
                                    for($i=1; $i<=$jum_halaman; $i++){
                                        if($i > $halaman - 5 and $i < $halaman + 5){
                                            if($i!=$halaman){
                                                echo "
                                                    <li class='page-item'>
                                                        <a class='page-link' href='merk-halaman-$i'>$i</a>
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
                                            <a class='page-link' href='merk-halaman-$setelah'>
                                            »</a></li>
                                        ";
                                        echo "
                                            <li class='page-item'><a class='page-link' href='merk-halaman-$jum_halaman'>Last</a></li>
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