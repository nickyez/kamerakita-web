<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h2>Kamera <em>Kita</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <?php 
                if(isset($_GET['include'])){
                  $include = $_GET['include'];
                }
              ?>
                    <li class="nav-item <?php if(!isset($_GET['include'])||$_GET['include']=="beranda"){ ?> active <?php } ?>">
                        <a class="nav-link" href="beranda">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li
                        class="nav-item dropdown <?php if(isset($_GET['include'])){if($include=="product-kamera" or $include=="product-lensa"){ ?> active <?php }} ?>">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" href="#">Sewa Disini</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="product-kamera">Sewa Kamera</a>
                            <a class="dropdown-item" href="product-lensa">Sewa Lensa</a>
                        </div>
                    </li>
                    <li class="nav-item <?php if(isset($_GET['include'])){if($include=="about"){ ?> active <?php }} ?>">
                        <a class="nav-link" href="about">Tentang kami</a>
                    </li>
                    <li
                        class="nav-item <?php if(isset($_GET['include'])){if($include=="contact"){ ?> active <?php }} ?>">
                        <a class="nav-link" href="contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>