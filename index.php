<!doctype html>
<html lang="en">
  <head>
    <?php include("includes/head.php"); ?>
  </head>
  <body>
    <?php include("includes/navbar.php") ?>
    <?php 
    if(isset($_GET['include'])){
      $include = $_GET['include'];
      if($include=="about-us"){
        include("include/aboutus.php");
      }elseif($inlude=="contact-us"){
        include("include/contactus.php");
      }elseif($include=="produk"){
        include("include/katalog.php");
      }elseif($include=="how-to-rent"){
        include("include/howtorent.php");
      }
    }else{
      include("include/katalog.php");
    }
    ?>
    <?php include("includes/script.php") ?>
  </body>
</html>