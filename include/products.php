    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Kamera Kita</h4>
              <h2>Berbagai 
                <?php if(isset($_GET['include'])){
                  $include=$_GET['include'];
                  if($include=="product-kamera"){
                    echo "Kamera";
                  }elseif($include=="product-lensa"){
                    echo "Lensa";
                  }
                } ?> yang bisa disewa</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <?php if(isset($_GET['include'])){
                
                if($include=="product-kamera"){
                  include("include/product/kamera.php");
                }elseif($include=="product-lensa"){
                  include("include/product/lensa.php");
                }
        } ?>
      </div>
    </div>