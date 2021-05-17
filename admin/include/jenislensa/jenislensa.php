    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Data Jenis Lensa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"> Data Jenis Lensa</li>
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
                  <a href="index.php?include=jenis-lensa/tambah" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah Jenis Lensa</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-sm-12">
                  <div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>
                  <div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
              </div>
              <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Jenis Lensa</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Wide Lens</td>
                        <td align="center">
                          <a href="index.php?include=jenis-lensa/edit" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="#" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Fisheye</td>
                        <td align="center">
                          <a href="index.php?include=jenis-lensa/edit" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                           <a href="#" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->