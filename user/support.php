<?php include_once "./includes/header.php"?>
<style>
    body {
      font-family: 'Lato', sans-serif;
      background-color: #f4f5f7;
      margin: 0;
      padding: 0;
    }

    .support-page {
      text-align: center;
      margin-top: -100px;
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
<body>
  <!-- side bar start -->
  <?php include_once "./includes/sidebar.php"?>
  <!-- side bar end -->

  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a class="sidebar-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
          <i class="menu-icon" data-feather="menu"></i>
        </a>
        <h2>Support</h2>
      </div>
    </div>
  </header>
  <!-- header end -->
  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  <!-- bottom navbar start -->
  <?php include_once "./includes/navbar.php"; ?>
  <!-- bottom navbar end -->

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
 <!-- panel-space start -->
 <section class="panel-space"></section>
  <!-- panel-space end -->


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