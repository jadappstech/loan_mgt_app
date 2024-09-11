<?php include_once "./includes/header.php"?>
<body>
  <!-- side bar start -->
  <div class="offcanvas sidebar-offcanvas offcanvas-start" tabindex="-1" id="offcanvasLeft">
    <div class="offcanvas-header sidebar-header">
      <div class="sidebar-logo">
        <img class="img-fluid logo" src="assets/images/logo/logo.png" alt="logo" />
      </div>
      <div class="balance">
        <img class="img-fluid balance-bg" src="assets/images/background/auth-bg.jpg" alt="auth-bg" />
        <h5>Balance</h5>
        <h2>$1,06,786.65</h2>
      </div>
    </div>
    <div class="offcanvas-body">
      <div class="sidebar-content">
        <ul class="link-section">
          <li>
            <a href="landing.php" class="pages">
              <i class="sidebar-icon" data-feather="credit-card"></i>
              <h3>mPay</h3>
            </a>
          </li>
          <li>
            <a href="crypto.php" class="pages">
              <i class="sidebar-icon" data-feather="dollar-sign"></i>
              <h3>Crypto</h3>
            </a>
          </li>
          <li>
            <a href="page-list.php" class="pages">
              <i class="sidebar-icon" data-feather="file-text"></i>
              <h3>Theme Pages</h3>
            </a>
          </li>
          <li>
            <a href="component.php" class="pages">
              <i class="sidebar-icon" data-feather="command"></i>
              <h3>Theme Components</h3>
            </a>
          </li>

          <li>
            <a href="profile.php" class="pages">
              <i class="sidebar-icon" data-feather="user"></i>
              <h3>Support Page</h3>
            </a>
          </li>

          <li>
            <a href="signin.php" class="pages">
              <i class="sidebar-icon" data-feather="log-out"></i>
              <h3>Log out</h3>
            </a>
          </li>
        </ul>
        <div class="mode-switch">
          <ul class="switch-section">
            <li>
              <h3>RTL</h3>
              <div class="switch-btn">
                <input id="dir-switch" type="checkbox" />
              </div>
            </li>
            <li>
              <h3>Dark</h3>
              <div class="switch-btn">
                <input id="dark-switch" type="checkbox" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- side bar end -->

   <!-- header start -->
   <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a class="sidebar-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
          <i class="menu-icon" data-feather="menu"></i>
        </a>
        <h2>Profile</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- panel-space start -->
  <!-- <section style="padding-top:10px;" class="panel-space"></section> -->
  <!-- panel-space end -->

  <!-- bottom navbar start -->
  <?php include_once "./includes/navbar.php"; ?>
  <!-- bottom navbar end -->

 <!-- profile section start -->
 <section class="section-b-space">
    <div class="custom-container">
      <div class="profile-section">
        <div class="profile-banner">
          <div class="profile-image">
            <img class="img-fluid profile-pic" src="assets/images/african0man.jpg" />
          </div>
        </div>
        <h2>Okon Yinusa</h2>
        <h5>+234 803 538 8713</h5>
      </div>

      <ul class="profile-list">
        <li>
          <a href="my-account.php" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="user"></i>
            </div>
            <div class="profile-details">
              <h4>My Account</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="NO LINK" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="list"></i>
            </div>
            <div class="profile-details">
              <h4>Loan history</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="cards.php" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="credit-card"></i>
            </div>
            <div class="profile-details">
              <h4>My Cards</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="change-password.php" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="lock"></i>
            </div>
            <div class="profile-details">
              <h4>Change Password</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="notification-setting.php" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="bell"></i>
            </div>
            <div class="profile-details">
              <h4>Notifications</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="privacy-setting.php" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="eye"></i>
            </div>
            <div class="profile-details">
              <h4>Privacy settings</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="support.php" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="help-circle"></i>
            </div>
            <div class="profile-details">
              <h4>Support</h4>
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </a>
        </li>
        <li>
          <a href="signin.php" class="profile-box">
            <div class="profile-img">
              <i class="icon" data-feather="log-out"></i>
            </div>
            <div class="profile-details">
              <h4>Log Out</h4>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- profile section end -->

  

  <!-- swiper js -->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/custom-swiper.js"></script>

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- iconsax js -->
  <script src="assets/js/iconsax.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- homescreen popup js -->
  <script src="assets/js/homescreen-popup.js"></script>

  <!-- PWA offcanvas popup js -->
  <script src="assets/js/offcanvas-popup.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/landing.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:07:49 GMT -->
</html>