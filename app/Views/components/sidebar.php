<div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?= base_url()?>PurpleAdmin/assets/images/faces/face1.jpg" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?= session()->get('username'); ?></span>
                  <span class="text-secondary text-small"><?= session()->get('role'); ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <?php
              if (session()->get('role') == 'admin') {
              ?>
            <li class="nav-item">
              <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/produk">
                <span class="menu-title">Product</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <?php
        }
        ?>
            <li class="nav-item">
              <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/keranjang">
                <span class="menu-title">Cart</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->