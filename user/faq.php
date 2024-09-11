<?php include_once "./includes/header.php"?>

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
        <!-- <img class="img-fluid logo" src="assets/images/logo/logo.png" alt="logo" /> -->

        <a href="notification.php" class="notification">
          <i class="notification-icon" data-feather="bell"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- header end -->

  
  <!-- bottom navbar start -->
  <?php include_once "./includes/navbar.php"; ?>
  <!-- bottom navbar end -->

  
<body class="auth-body">
  <!-- header starts -->
  <div class="auth-header">
    <div class="help-head d-flex">
      <a href="profile.php"> <i class="back-btn" data-feather="arrow-left"></i> </a>
      <h2>FAQ</h2>
    </div>
    <div class="head-img text-center">
      <img class="img-fluid img2" src="assets/images/authentication/help.svg" alt="v1" />
    </div>
  </div>
  <!-- header end -->

  <!-- help section start -->
  <form class="auth-form" target="_blank">
    <div class="custom-container">
      <div class="help-center">
        <h2 class="fw-semibold">What issues are you facing?</h2>
        <div class="accordion accordion-flush help-accordion" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"> What services do you offer?</button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">We offer investments, loans and financial advisory.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo">How secure are my funds?</button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">We are a Central Bank of Nigeria (CBN) licenced Other Financial Institution.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">How do I profit from my investment?</button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">You will earn return/interest/coupon on your investment monthly, quarterly or at maturity.

There is the option of rollover of your investment with your accrued interest or receiving a direct credit into your bank account. You will be issued an investment certificate, which can be used as proof of funds for visa application or collateral to access loans.

</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour">What are your interest/coupon for investments and loans?</button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Interest rates vary depending on investment and loan type, duration, amount of investment and the trend in interest rate in the financial market.</div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive">Are your rates per month or per annum?</button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Our rates are per annum.</div>
        </div>
        </div>

    <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive">How do I track my investments?</button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> Once you are signed on as a customer, you may also request for your account statement or investment certificate at any time.</div>
         </div>
        </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  <!-- help section end -->
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