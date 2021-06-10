<?php
        if((isset($_GET['aksi'])) && (isset($_GET['data']))){
            if($_GET['aksi']=='hapus'){
                $id_jenis_lensa = $_GET['data'];
                $sql_dh = "DELETE FROM `jenis_lensa` WHERE `id_jenis`=$id_jenis_lensa";
                mysqli_query($koneksi, $sql_dh);
            }
        }
    ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3><i class="fas fa-hockey-puck"></i> Data Jenis Lensa</h3>
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
                <a href="tambah-jenis-lensa" class="btn btn-sm btn-info float-right">
                    <i class="fas fa-plus"></i> Tambah Jenis Lensa</a>
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
                        <th width="30%">Jenis Lensa</th>
                        <th width="15%">
                            <center>Aksi</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql_jl = "SELECT id_jenis, jenis FROM jenis_lensa"; 
                        $query_jl = mysqli_query($koneksi, $sql_jl);
                        $no = 1;
                        while($data_jl = mysqli_fetch_row($query_jl)){
                            $id_jenis = $data_jl[0];
                            $jenis = $data_jl[1];
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $jenis; ?></td>
                        <td align="center">
                            <a href="edit-jenis-lensa-data-<?php echo $id_jenis ?>"
                                class="btn btn-xs btn-info" title="Edit"><i class="fas fa-edit"></i></a>
                            <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?php echo $jenis; ?>?'))window.location.href='jenis-lensa-data-<?php echo $id_jenis;?>-mode-hapus_notif-hapusberhasil'"
                                class="btn btn-xs btn-warning"><i class="fas fa-trash" title="Hapus"></i></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>
<!-- /.content -->