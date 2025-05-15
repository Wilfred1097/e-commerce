<div class="container position-relative d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
    <h3 class="sitename">Dumingag Women Handicrafts Makers Association</h3>
  </a>
  <nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="#hero" class="active">Home<br></a></li>
      <li><a href="#product">Product</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#contact">Contact</a></li>
      <li>
        <a href="pages-cart.php" class="d-flex align-items-center" title="Cart">
          Cart
          <span id="cart-badge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="display: none;">
            0
          </span>
        </a>
      </li>
      <li>
        <?php
          // Check if 'DWHMA' cookie is set
          if (isset($_COOKIE['DWHMA0'])) {
            // If cookie exists, link to account.php
            echo '<a href="account.php" class="d-flex align-items-center" title="User Profile">Profile</a>';
          } else {
            // If cookie does not exist, link to login-page.php
            echo '<a href="login-page.php" class="d-flex align-items-center" title="Login">Login</a>';
          }
        ?>
      </li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
  </nav>
</div>