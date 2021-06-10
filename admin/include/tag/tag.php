<?php
        $id_user = $_SESSION['id_user'];
        if((isset($_GET['aksi'])) && (isset($_GET['data']))){
            if($_GET['aksi']=='hapus'){
                $id_tag = $_GET['data'];
                $sql_dh = "DELETE FROM `tag` WHERE `id_tag`=$id_tag";
                mysqli_query($koneksi, $sql_dh);
            }
        }
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-tag"></i> Data Tag</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Tag</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar  Tag</h3>
                <div class="card-tools">
                  <a href="tambah-tag" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah  Tag</a>
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
                      <th width="80%">Tag</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      $sql_t = "SELECT id_tag, tag FROM tag";
                      $query_t = mysqli_query($koneksi, $sql_t);
                      $no = 1;
                      while($data_k = mysqli_fetch_row($query_t)){
                          $id_tag = $data_k[0];
                          $tag = $data_k[1];
                  ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $tag; ?></td>
                      <td align="center">
                        <a href="edit-tag-data-<?php echo $id_tag; ?>" class="btn btn-xs btn-info"><i class="fas fa-edit"></i> Edit</a>
                        <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $tag; ?>?'))window.location.href='tag-data-<?php echo $id_tag;?>-mode-hapus_notif-hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                    <?php $no++; ?>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->

    </section>
    <!-- /.content -->