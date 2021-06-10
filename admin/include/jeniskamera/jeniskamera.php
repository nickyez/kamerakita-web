<?php
        if((isset($_GET['aksi'])) && (isset($_GET['data']))){
            if($_GET['aksi']=='hapus'){
                $id_jenis_kamera = $_GET['data'];
                $sql_dh = "DELETE FROM `jenis_kamera` WHERE `id_jenis`=$id_jenis_kamera";
                mysqli_query($koneksi, $sql_dh);
            }
        }
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-camera"></i> Data Jenis Kamera</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Data Jenis Kamera</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar jenis kamera</h3>
                <div class="card-tools">
                  <a href="tambah-jenis-kamera" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah jenis kamera</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
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
                        <th width="30%">Jenis Kamera</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $sql_jk = "SELECT `id_jenis`, `jenis` FROM jenis_kamera";
                          $query_jk = mysqli_query($koneksi, $sql_jk);
                          $no = 1;
                          while($data_jk = mysqli_fetch_row($query_jk)){
                              $id_jenis = $data_jk[0];
                              $jenis = $data_jk[1];
                      ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $jenis; ?></td>
                        <td align="center">
                          <a href="edit-jenis-kamera-data-<?php echo $id_jenis; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $jenis; ?>?'))window.location.href='jenis-kamera-data-<?php echo $id_jenis;?>-mode-hapus_notif-hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      <?php $no++; ?>
                    <?php } ?>                    
                    </tbody>
                  </table>  
              </div>
            </div>
    </section>
    <!-- /.content -->