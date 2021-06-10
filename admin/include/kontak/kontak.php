    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-address-book"></i> Data kontak</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Data kontak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Daftar kontak</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-sm-12">
                <?php if(!empty($_GET['notif'])){
                  if($_GET['notif']=="editberhasil"){
                    ?>
                    <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
                    <?php
                  }
                } ?>
                  
              </div>
              <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Media</th>
                        <th width="30%">Kontak</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                          $sql_k = "SELECT `id_kontak`,`media`,`kontak` FROM `kontak`";
                          $query_k = mysqli_query($koneksi, $sql_k);
                          $no = 1;
                          while($data_k = mysqli_fetch_row($query_k)){
                            $id_kontak = $data_k[0];
                            $media = $data_k[1];
                            $kontak = $data_k[2];
                          
                      ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $media; ?></td>
                        <td><?php echo $kontak; ?></td>
                        <td align="center">
                          <a href="index.php?include=kontak/edit&data=<?php echo $id_kontak; ?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>                        
                        </td>
                      </tr>
                      <?php $no++; ?>
                    <?php } ?>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
    </section>
    <!-- /.content -->