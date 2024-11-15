<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/make-payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:35 GMT -->
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
        <h2>Make a payment</h2>
      </div>
    </div>
  </header>
  <!-- header end -->
  <!-- payment-details  section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <form class="auth-form p-0" target="_blank">
        <div class="form-group">
          <label for="inputbankname" class="form-label">Bank name</label>
          <select id="inputbankname" class="form-select">
            <option class="options" selected>Select bank</option>
            <option>HDFC Bank</option>
            <option>State Bank of India</option>
            <option>bank of baroda</option>
            <option>ICICI Bank</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputbillpay" class="form-label">Bill pay to</label>
          <div class="form-input">
            <input type="text" class="form-control" id="inputbillpay" placeholder="Enter provider" />
          </div>
        </div>

        <div class="form-group">
          <label for="inputbillnumber" class="form-label">Bill serial number</label>
          <div class="form-input">
            <input type="number" class="form-control" id="inputbillnumber" placeholder="Add serial number" />
          </div>
        </div>

        <div class="form-group">
          <label for="inputinvoice" class="form-label">Email invoice to</label>
          <div class="form-input">
            <input type="email" class="form-control" id="inputinvoice" placeholder="Enter email id" />
          </div>
        </div>
        <div class="form-group">
          <label for="inputamount" class="form-label">Amount</label>
          <input type="text" class="form-control" id="inputamount" placeholder="Enter Amount" />
        </div>

        <a href="#done" data-bs-toggle="modal" class="btn theme-btn w-100">Pay</a>
      </form>
    </div>
  </section>
  <!-- payment-details section end -->

  <!-- successful bill modal start -->
  <div class="modal successful-modal fade" id="done" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Successfully Transfer</h2>
        </div>
        <div class="modal-body">
          <div class="done-img">
            <img class="img-fluid" src="assets/images/svg/done.svg" alt="done" />
          </div>
          <h2>$49.85</h2>
          <h5>#SR - 125639</h5>
          <ul class="details-list">
            <li>
              <h3 class="fw-normal dark-text">Pay from</h3>
              <h3 class="fw-normal theme-color">**** **** **** 8956</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Pay to</h3>
              <h3 class="fw-normal light-text">**** **** **** 2563</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Date</h3>
              <h3 class="fw-normal light-text">18 May, 2023</h3>
            </li>
          </ul>
          <a href="landing.php" class="btn theme-btn successfully w-100">Back to home</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- successful bill modal end -->

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


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/make-payment.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:35 GMT -->
</html>