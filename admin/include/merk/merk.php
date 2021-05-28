<?php 
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
	if($_GET['aksi']=='hapus'){
		$id_merk = $_GET['data'];
		//hapus merk
		$sql_de = "delete from `merk` where `id_merk` = '$id_merk'";
		mysqli_query($koneksi,$sql_de);
	}
}
if(isset($_POST["katakunci"])){
	$katakunci_tag = $_POST["katakunci"];
	$_SESSION['katakunci_merk'] = $katakunci_merk; 
}if(isset($_SESSION['katakunci_merk'])){
	$katakunci_merk = $_SESSION['katakunci_merk'];
}
?>
   
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Data Merk</h3>
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
                  <a href="index.php?include=tambah-merk" class="btn btn-sm btn-info float-right">
                  <i class="fas fa-plus"></i> Tambah merk</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="post" action="index.php?include=merk">
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
						<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>
					<?php }else if($_GET['notif']=="editberhasil"){?>
						<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>
					<?php }else if($_GET['notif']=="hapusberhasil"){?>
						<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>
					<?php }?>
				<?php }?>
              </div>
              <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="30%">Merk</th>
                        <th width="15%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						$sql_k = "SELECT `id_merk`,`merk` FROM `merk` ORDER BY `merk`";
						$query_k = mysqli_query($koneksi,$sql_k);
						$no = 1;
						while($data_k = mysqli_fetch_row($query_k)){
							$id_merk = $data_k[0];
							$merk = $data_k[1];
						?>
                    <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $merk;?></td>
                        <td align="center">
                          <a href="index.php?include=edit-merk&data=<?php echo $id_merk;?>" class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                          <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $merk; ?>?'))window.location.href = 'index.php?include=merk&aksi=hapus&data=<?php echo $id_merk;?>&notif=hapusberhasil'" class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>                         
                        </td>
                      </tr>  
						<?php $no++;}?>
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