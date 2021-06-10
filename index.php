<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("includes/head.php"); ?>
  </head>
  <body>
    <?php include("admin/koneksi/koneksi.php"); ?>
    <?php include("includes/preloader.php"); ?>
    <?php include("includes/navbar.php"); ?>
    <?php 
    if(isset($_GET['include'])){
      $include = $_GET['include'];
      if($include=="about"){
        include("include/about.php");
      }elseif($include=="contact"){
        include("include/contact.php");
      }elseif($include=="product-kamera"){
        include("include/products.php");
      }elseif($include=="product-lensa"){
        include("include/products.php");
      }elseif($include=="detail-product-kamera"){
        include("include/detailproducts.php");
      }elseif($include=="detail-product-lensa"){
        include("include/detailproducts.php");
      }elseif($include=="beranda"){
        include("include/beranda.php");
      }else{
        include("include/beranda.php");
      }
    }else{
      include("include/beranda.php");
    }
    ?>
    <?php include("includes/footer.php"); ?>
    <?php include("includes/script.php") ?>
  </body>

</html>
