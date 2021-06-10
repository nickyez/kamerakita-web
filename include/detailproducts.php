<!-- Page Content -->
<div class="page-heading products-heading header-text">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h4>Detail Product</h4>
                    <h2>Spesifikasi
                        <?php 
    if(isset($_GET['include'])){
      $include = $_GET['include'];
      if($include=="detail-product-kamera"){
        echo "Kamera";
      }elseif($include=="detail-product-lensa"){
        echo "Lensa";
      }
    }
?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    if(isset($_GET['include'])){
      if($include=="detail-product-kamera"){
        include("include/detailproduct/kamera.php");
      }elseif($include=="detail-product-lensa"){
        include("include/detailproduct/lensa.php");
      }
    }
?>