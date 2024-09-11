<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/notification.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:22 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="mpay" />
  <meta name="keywords" content="mpay" />
  <meta name="author" content="mpay" />
  <link rel="manifest" href="manifest.json" />
  <link rel="icon" href="assets/images/logo/favicon.png" type="image/x-icon" />
  <title>Loan Management App</title>
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
</head>

<body>
  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="landing.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Notification</h2>

        <div class="dropdown">
          <a href="#" class="back-btn" role="button" data-bs-toggle="dropdown">
            <i class="icon" data-feather="settings"></i>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mute notification</a></li>
            <li><a class="dropdown-item" href="#">Mark as all read</a></li>
            <li><a class="dropdown-item" href="#">Remove all</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- notification section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>Today</h2>
      </div>

      <ul class="notification-list">
        <li class="notification-box">
          <!-- <div class="notification-img">
            <img class="img-fluid icon" src="assets/images/person/p1.png" alt="p1" />
          </div> -->
          <div class="notification-details">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <a href="receive-money.php">
                  <h5 class="fw-semibold dark-text">Loan disbursed (Payment received)</h5>
                </a>
                <h6 class="fw-normal light-text mt-1">Okon Yinusa</h6>
              </div>
              <h6 class="time fw-normal light-text">9:02 pm</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <h5 class="dark-text fw-normal">You received payment of <span
                  class="fw-semibold theme-color">N25,000</span></h5>
            </div>
          </div>
        </li>

        <li class="notification-box">
         <!-- <div class="notification-img">
            <img class="img-fluid icon" src="assets/images/person/p2.png" alt="p2" />
          </div> -->
          <div class="notification-details">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h5 class="fw-semibold dark-text">Loan request</h5>
                <h6 class="fw-normal light-text mt-1">Okon Yinusa</h6>
              </div>
              <h6 class="time fw-normal light-text">8:45 pm</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <h5 class="dark-text fw-normal">Application of loan amount of <span class="fw-semibold theme-color">N25,000</span>
              </h5>
              <!-- <a href="transfer-person.php" class="btn theme-btn pay-btn mt-0">Pay</a> -->
            </div>
          </div>
        </li>

        <li class="notification-box">
          <!--<div class="notification-img img1">
            <img class="img-fluid notification-icon" src="assets/images/svg/alert.svg" alt="alert" />
          </div> -->
          <div class="notification-details">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h5 style="font-weight:700 !important; class="fw-normal dark-text">Saving Alert</h5>
                <h6 class="fw-normal light-text mt-1">Bank</h6>
              </div>
              <h6 class="time fw-normal light-text">5:12 am</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <h5 class="light-text fw-normal">Your monthly expense almost break the budget.</h5>
            </div>
          </div>
        </li>

        <li class="notification-box">
          <!--<div class="notification-img img1">
            <img class="img-fluid notification-icon" src="assets/images/svg/alert.svg" alt="alert" />
          </div> -->
          <div class="notification-details">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h5 style="font-weight:700 !important;" class="fw-normal dark-text">Security Alert</h5>
                <h6 class="fw-normal light-text mt-1">Bank</h6>
              </div>
              <h6 class="time fw-normal light-text">01:12 am</h6>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <h5 class="light-text fw-normal">We noticed a login to your account: from an Iphone 15, in Lagos at 1:05am<br> 
              If this wasn’t you, please report login and secure your account immediately.</h5>
            </div> 
          </div>
        </li>
      </ul>
    
    </div>
  </section>
  <!-- notification section end -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/notification.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:23 GMT -->
</html>