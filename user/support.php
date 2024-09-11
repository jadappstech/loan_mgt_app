<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:22 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="mpay" />
  <meta name="keywords" content="mpay" />
  <meta name="author" content="mpay" />
  <link rel="manifest" href="manifest.json" />
  <link rel="icon" href="assets/images/logo/favicon.png" type="image/x-icon" />
  <title>mPay App</title>
  <link rel="apple-touch-icon" href="assets/images/logo/favicon.png" />
  <meta name="theme-color" content="#122636" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-mobile-web-app-title" content="mpay" />
  <meta name="msapplication-TileImage" content="assets/images/logo/favicon.png" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;display=swap" rel="stylesheet" />

  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.min.css" />

  <!-- swiper css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/swiper-bundle.min.css" />

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css" />

  <style>
    body {
      font-family: 'Lato', sans-serif;
      background-color: #f4f5f7;
      margin: 0;
      padding: 0;
    }

    .support-page {
      text-align: center;
      margin-top: -10px;
    }

    .support-logo {
      display: block;
      margin: 0 auto;
      width: 100px;
    }

    .support-heading {
      font-size: 19px;
      margin-top: 20px;
      color: #333;
    }

    .support-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
      gap: 20px;
      margin: 50px auto;
      max-width: 800px;
      padding: 20px;
    }

    .support-item {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .support-item:hover {
      transform: translateY(-5px);
    }

    .support-item img {
      width: 40px;
      margin-bottom: 10px;
    }

    .support-item h4 {
      font-size: 16px;
      color: #444;
      margin-bottom: 10px;
    }

    .support-item a {
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
      display: block;
    }

    .support-item a:hover {
      color: #0056b3;
    }

  </style>
</head>

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
        <h1 style="text-align: center; font size: 20px;">Support</h1>
      </div>
    </div>
  </header>
  <!-- header end -->
 
  <!-- Support section start -->
  <div class="support-page">
    <img class="support-logo" src="assets/images/support2.png" alt="Support Logo">
    <h2 class="support-heading">Call or Chat with us and we will<br> answer any question you have</h2>

    <div class="support-grid">
      <!-- Chat with a Customer Representative -->
      <div class="support-item">
        <img src="assets/images/chaticon.png" alt="Chat Icon" onclick="window.location.href='chat-support.php'">
        <h4>Chat with Us</h4>
        
      </div>

      <!-- Call Us -->
      <div class="support-item">
        <img src="assets/images/phone_icon.png" alt="Phone Icon" onclick="window.location.href='tel:+1234567890'">
        <h4>Call Us</h4>
        
      </div>

      <!-- FAQ -->
      <div class="support-item">
      
        <img src="assets/images/FAQ.jpg" alt="FAQ Icon" onclick="window.location.href='help.php'">
        <h4>FAQ</h4>
        
      </div>

      <!-- WhatsApp -->
      <div class="support-item">
        <img src="assets/images/whatapp.png" alt="WhatsApp Icon" onclick="window.location.href='https://wa.me/1234567890'">
        <h4>Get on WhatsApp</h4>
        
      </div>

      <!-- Facebook -->
      <div class="support-item">
        <img src="assets/images/facebook.png" alt="Facebook Icon" onclick="window.location.href='www.facebook.com/mPay'">
        <h4>Contact us on Facebook</h4>
        
      </div>

      <!-- Twitter -->
      <div class="support-item">
    
        <img src="assets/images/twitter.jpg" alt="Twitter Icon" onclick="window.location.href='https://twitter.com/mPay'">
        <h4>Follow us on Twitter</h4>
        
      </div>

      <!-- Instagram -->
      <div class="support-item">
     
        <img src="assets/images/instagram.png" alt="Instagram Icon" onclick="window.location.href='https://www.instagram.com/mPay'">
        <h4>Follow us on Instagram</h4>
        
      </div>

      <!-- YouTube -->
      <div class="support-item">
      
        <img src="assets/images/youtube.png" alt="YouTube Icon" onclick="window.location.href='https://www.youtube.com/mPay'">
        <h4>Follow us on YouTube</h4>
        
      </div>
    </div>
  </div>
  <!-- Support section end -->

  <!-- panel-space end -->

  <!-- bottom navbar start -->
  <div class="navbar-menu">
    <div class="scanner-bg">
      <a href="scan-pay.php" class="scanner-btn">
        <img class="img-fluid" src="assets/images/svg/scan.svg" alt="scan" />
      </a>
    </div>

    <ul>
      <li>
        <a href="landing.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/mpay.svg" alt="mPay" />
            <img class="active" src="assets/images/svg/mpay-fill.svg" alt="mPay" />
          </div>
          <h5>mPay</h5>
        </a>
      </li>

      <li>
        <a href="crypto.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/bitcoin.svg" alt="categories" />
            <img class="active" src="assets/images/svg/bitcoin-fill.svg" alt="categories" />
          </div>
          <h5>Crypto</h5>
        </a>
      </li>

      <li></li>

      <li>
        <a href="insight.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/bar-chart.svg" alt="bag" />
            <img class="active" src="assets/images/svg/bar-chart-fill.svg" alt="bag" />
          </div>
          <h5>Insight</h5>
        </a>
      </li>

      <li class="active">
        <a href="profile.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/user.svg" alt="profile" />
            <img class="active" src="assets/images/svg/user-fill.svg" alt="profile" />
          </div>
          <h5>Profile</h5>
        </a>
      </li>
    </ul>
  </div>
  <!-- bottom navbar end -->

  <!-- swiper js -->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/custom-swiper.js"></script>

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:22 GMT -->
</html>