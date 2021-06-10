<!DOCTYPE html>
<html>
  <head>
      <?php include("includes/head.php") ?>
      <?php 
      session_start();
      include("koneksi/koneksi.php");
      // Berisi Konfirmasi pada tiap Menu
      if(isset($_GET['include'])){
        $include = $_GET['include'];
        // Konfirmasi Login
        if($include=="konfirmasi-login"){
          include("include/login/konfirmasilogin.php");
        }
        // Sign out
        else if($include=="signout"){
          include("include/signout.php"); 
        }
        // Konfirmasi Jenis Kamera
        elseif($include=="konfirmasi-tambah-jenis-kamera"){
          include("include/jeniskamera/konfirmasitambahjeniskamera.php");
        }elseif($include=="konfirmasi-edit-jenis-kamera"){
          include("include/jeniskamera/konfirmasieditjeniskamera.php");
        }
        // Konfirmasi Jenis lensa
        elseif($include=="konfirmasi-tambah-jenis-lensa"){
          include("include/jenislensa/konfirmasitambahjenislensa.php");
        }elseif($include=="konfirmasi-edit-jenis-lensa"){
          include("include/jenislensa/konfirmasieditjenislensa.php");
        }
        // Konfirmasi Merk
        elseif($include=="konfirmasi-tambah-merk"){
          include("include/merk/konfirmasitambahmerk.php");
        }elseif($include=="konfirmasi-edit-merk"){
          include("include/merk/konfirmasieditmerk.php");
        }
        // Konfirmasi Tag
        elseif($include=="konfirmasi-tambah-tag"){
          include("include/tag/konfirmasitambahtag.php");
        }elseif($include=="konfirmasi-edit-tag"){
          include("include/tag/konfirmasiedittag.php");
        }
        // Konfirmasi kamera
        elseif($include=="konfirmasi-tambah-kamera"){
          include("include/kamera/konfirmasitambahkamera.php");
        }elseif($include=="konfirmasi-edit-kamera"){
          include("include/kamera/konfirmasieditkamera.php");
        }
        // Konfirmasi Lensa
        elseif($include=="konfirmasi-tambah-lensa"){
          include("include/lensa/konfirmasitambahlensa.php");
        }elseif($include=="konfirmasi-edit-lensa"){
          include("include/lensa/konfirmasieditlensa.php");
        }
        // Konfirmasi Kontak
        elseif($include=="konfirmasi-edit-kontak"){
          include("include/kontak/konfirmasieditkontak.php");
        }
        // Konfirmasi User
        elseif($include=="konfirmasi-edit-user"){
          include("include/user/konfirmasiedituser.php");
        }elseif($include=="konfirmasi-tambah-user"){
          include("include/user/konfirmasitambahuser.php");
        }
        // Konfirmasi profil
        elseif($include=="konfirmasi-edit-profil"){
          include("include/profil/konfirmasieditprofil.php");
        }
        
      }
  ?>
  </head>
  <?php 
      if(isset($_GET['include'])){
        $include = $_GET['include'];
        // include('includes/cariunset.php');
        if(isset($_SESSION['id_user'])){
        // Jika id User ada / tidak null 
  ?>
          <body class="hold-transition sidebar-mini layout-fixed">
              <div class="wrapper">
                  <?php include("includes/header.php") ?>
                  <?php include("includes/sidebar.php") ?>
                  <div class="content-wrapper">
                  <!-- Berisi Tampilan tiap Menu admin -->
                  <?php
                    // Menu Jenis Kamera
                    if($include=="jenis-kamera"){
                      include("include/jeniskamera/jeniskamera.php");
                    }elseif($include=="tambah-jenis-kamera"){
                      include("include/jeniskamera/tambahjeniskamera.php");
                    }elseif($include=="edit-jenis-kamera"){
                      include("include/jeniskamera/editjeniskamera.php");
                    }
                    // Menu Jenis Lensa
                    elseif($include=="jenis-lensa"){
                      include("include/jenislensa/jenislensa.php");
                    }elseif($include=="tambah-jenis-lensa"){
                      include("include/jenislensa/tambahjenislensa.php");
                    }elseif($include=="edit-jenis-lensa"){
                      include("include/jenislensa/editjenislensa.php");
                    }
                    // Menu Merk
                    elseif($include=="merk"){
                      include("include/merk/merk.php");
                    }elseif($include=="tambah-merk"){
                      include("include/merk/tambahmerk.php");
                    }elseif($include=="edit-merk"){
                      include("include/merk/editmerk.php");
                    }
                    // Menu Tag
                    elseif($include=="tag"){
                      include("include/tag/tag.php");
                    }elseif($include=="tambah-tag"){
                      include("include/tag/tambahtag.php");
                    }elseif($include=="edit-tag"){
                      include("include/tag/edittag.php");
                    }
                    // Menu Kamera
                    elseif($include=="kamera"){
                      include("include/kamera/kamera.php");
                    }elseif($include=="tambah-kamera"){
                      include("include/kamera/tambahkamera.php");
                    }elseif($include=="edit-kamera"){
                      include("include/kamera/editkamera.php");
                    }elseif($include=="detail-kamera"){
                      include("include/kamera/detailkamera.php");
                    }
                    // Menu Lensa
                    elseif($include=="lensa"){
                      include("include/lensa/lensa.php");
                    }elseif($include=="tambah-lensa"){
                      include("include/lensa/tambahlensa.php");
                    }elseif($include=="edit-lensa"){
                      include("include/lensa/editlensa.php");
                    }elseif($include=="detail-lensa"){
                      include("include/lensa/detaillensa.php");
                    }
                    // Menu Kontak
                    elseif($include=="kontak"){
                      include("include/kontak/kontak.php");
                    }elseif($include=="edit-kontak"){
                      include("include/kontak/editkontak.php");
                    }
                    // Menu User
                    elseif($include=='user'){
                      include("include/user/user.php");
                    }elseif($include=="tambah-user"){
                      include("include/user/tambahuser.php");
                    }elseif($include=="edit-user"){
                      include("include/user/edituser.php");
                    }elseif($include=="detail-user"){
                      include("include/user/detailuser.php");
                    }
                    // Menu Lainnya
                    elseif($include=='ubah-password'){
                      include("include/ubahpassword.php");
                    }elseif($include=='signout'){
                      include("include/signout.php");
                    }
                    // Menu Profil
                    elseif($include=='edit-profil'){
                      include("include/profil/editprofil.php");
                    }else{
                      include("include/profil/profil.php");
                    } 
                  ?>
                  </div>
                  <!-- /.content-wrapper -->
                  <?php include("includes/footer.php") ?>
              </div>
              <!-- ./wrapper -->
              <?php include("includes/script.php") ?>
          </body>
      <?php
        }else{
            // Jika Id User tidak ada / null
            include("include/login/login.php");
        }
      }else{
      // Jika Include tidak ada / null
        if(isset($_SESSION['id_user'])){
        // Jika id user ada / tidak null
      ?>
          <body class="hold-transition sidebar-mini layout-fixed">
              <div class="wrapper">
                  <?php include("includes/header.php") ?>
                  <?php include("includes/sidebar.php") ?>
                  <div class="content-wrapper">
                      <?php
                    include("include/profil/profil.php");
                    ?>
                  </div>
                  <!-- ./wrapper -->
                  <?php include("includes/script.php") ?>
          </body>
  <?php
        }else{
        // Jika id user tidak ada / null
            include("include/login/login.php");
        }
      }
  ?>
</html>