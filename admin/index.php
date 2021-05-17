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

        // Konfirmasi Jenis lensa

        // Konfirmasi Merk

        // Konfirmasi Tag

        // Konfirmasi kamera

        // Konfirmasi Lensa

        // Konfirmasi Kontak
        
        // Konfirmasi User
        else if($include=="konfirmasi-edit-user"){
          include("include/user/konfirmasiedituser.php");
        }else if($include=="konfirmasi-tambah-user"){
          include("include/user/konfirmasitambahuser.php");
        }
        // Konfirmasi Jenis Lensa
        
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
                    }elseif($include=="jenis-kamera/tambah"){
                      include("include/jeniskamera/tambahjeniskamera.php");
                    }elseif($include=="jenis-kamera/edit"){
                      include("include/jeniskamera/editjeniskamera.php");
                    }
                    // Menu Jenis Lensa
                    elseif($include=="jenis-lensa"){
                      include("include/jenislensa/jenislensa.php");
                    }elseif($include=="jenis-lensa/tambah"){
                      include("include/jenislensa/tambahjenislensa.php");
                    }elseif($include=="jenis-lensa/edit"){
                      include("include/jenislensa/editjenislensa.php");
                    }
                    // Menu Merk
                    elseif($include=="merk"){
                      include("include/merk/merk.php");
                    }elseif($include=="merk/tambah"){
                      include("include/merk/tambahmerk.php");
                    }elseif($include=="merk/edit"){
                      include("include/merk/editmerk.php");
                    }
                    // Menu Tag
                    elseif($include=="tag"){
                      include("include/tag/tag.php");
                    }elseif($include=="tag/tambah"){
                      include("include/tag/tambahtag.php");
                    }elseif($include=="tag/edit"){
                      include("include/tag/edittag.php");
                    }
                    // Menu Kamera
                    elseif($include=="kamera"){
                      include("include/kamera/kamera.php");
                    }elseif($include=="kamera/tambah"){
                      include("include/kamera/tambahkamera.php");
                    }elseif($include=="kamera/edit"){
                      include("include/kamera/ubahkamera.php");
                    }elseif($include=="kamera/detail"){
                      include("include/kamera/detailkamera.php");
                    }
                    // Menu Lensa
                    elseif($include=="lensa"){
                      include("include/lensa/lensa.php");
                    }elseif($include=="lensa/tambah"){
                      include("include/lensa/tambahlensa.php");
                    }elseif($include=="lensa/edit"){
                      include("include/lensa/editlensa.php");
                    }elseif($include=="lensa/detail"){
                      include("include/lensa/detaillensa.php");
                    }
                    // Menu Kontak
                    elseif($include=="kontak"){
                      include("include/kontak/kontak.php");
                    }elseif($include=="kontak/edit"){
                      include("include/kontak/editkontak.php");
                    }
                    // Menu User
                    elseif($include=='user'){
                      include("include/user/user.php");
                    }elseif($include=="user/tambah"){
                      include("include/user/tambahuser.php");
                    }elseif($include=="user/edit"){
                      include("include/user/edituser.php");
                    }elseif($include=="user/detail"){
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