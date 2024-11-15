<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/pay-select-card.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:41 GMT -->
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
        <a href="pay-money.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Paying money</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- pay money section starts -->
  <section class="pay-money section-b-space">
    <div class="custom-container">
      <div class="profile-pic">
        <img class="img-fluid img" src="assets/images/person/p3.png" alt="p3" />
      </div>
      <h3 class="person-name">Paying money to Kristin</h3>
      <h5 class="upi-id">UPI ID : kristin12@hdfcbank</h5>
      <div class="form-group">
        <div class="form-input mt-4">
          <input type="text" class="form-control" id="inputamount" />
        </div>
      </div>
      <div class="form-group">
        <div class="form-input mt-3">
          <input type="text" class="form-control reason" id="inputreason" placeholder="Enter reason" />
        </div>
      </div>

      <ul class="card-list">
        <li class="payment-add-box">
          <div class="add-img">
            <img class="img-fluid img" src="assets/images/card/card1.png" alt="card1" />
          </div>
          <div class="add-content">
            <div>
              <h5 class="fw-semibold dark-text">Anirudhaa Mehra</h5>
              <h6 class="mt-2 light-text">**** **** **** 2563 | Exp 12/24</h6>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" checked />
            </div>
          </div>
        </li>

        <li class="payment-add-box">
          <div class="add-img">
            <img class="img-fluid img" src="assets/images/card/card2.png" alt="card2" />
          </div>
          <div class="add-content">
            <div>
              <h5 class="fw-semibold dark-text">Shrushti Godgeren</h5>
              <h6 class="mt-2 light-text">**** **** **** 8956 | Exp 08/24</h6>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" />
            </div>
          </div>
        </li>
      </ul>

      <a href="pay-successfully.php" class="btn theme-btn w-100">$5 Pay now</a>
    </div>
  </section>
  <!-- pay money section end -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/pay-select-card.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:41 GMT -->
</html>