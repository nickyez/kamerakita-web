<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php?include=profil" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?include=jenis-kamera" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Kamera</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=jenis-lensa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Lensa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=merk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=tag" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tag</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="index.php?include=kamera" class="nav-link">
              <i class="nav-icon fas fa-camera"></i>
              <p>
                Kamera
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=lensa" class="nav-link">
              <i class="nav-icon fas fa-hockey-puck"></i>
              <p>
                Lensa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=kontak" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Kontak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=user" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Pengaturan User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=ubah-password" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Ubah Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=signout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>