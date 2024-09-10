<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/withdraw.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:25 GMT -->
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
</head>

<body>
  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="landing.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Withdraw</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- Withdraw section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>Money withdraw from</h2>
      </div>
      
      <ul class="select-bank">
        <li>
          <div class="balance-box active">
            <input class="form-check-input" type="radio" name="flexRadio" checked />
            <img class="img-fluid balance-box-img active" src="assets/images/svg/balance-box-bg-active.svg"
              alt="balance-box" />
            <img class="img-fluid balance-box-img unactive" src="assets/images/svg/balance-box-bg.svg"
              alt="balance-box" />
            <div class="balance-content">
              <h6>Balance</h6>
              <h3>$25,263.36</h3>
              <h5>**** **** **** 2563</h5>
            </div>
          </div>
        </li>
        <li>
          <div class="balance-box">
            <input class="form-check-input" type="radio" name="flexRadio" />
            <img class="img-fluid balance-box-img active" src="assets/images/svg/balance-box-bg-active.svg"
              alt="balance-box" />
            <img class="img-fluid balance-box-img unactive" src="assets/images/svg/balance-box-bg.svg"
              alt="balance-box" />
            <div class="balance-content">
              <h6>Balance</h6>
              <h3>$25,263.36</h3>
              <h5>**** **** **** 1235</h5>
            </div>
          </div>
        </li>
      </ul>
      <div class="title">
        <h2>Money withdraw to</h2>
      </div>
      <form class="auth-form p-0" target="_blank">
        <div class="form-group">
          <label for="inputbankname" class="form-label">Bank name</label>
          <select id="inputbankname" class="form-select">
            <option selected>Select bank</option>
            <option>HDFC Bank</option>
            <option>State Bank of India</option>
            <option>bank of baroda</option>
            <option>ICICI Bank</option>
          </select>
        </div>

        <div class="form-group">
          <label for="inputamount" class="form-label">Amount</label>
          <input type="text" class="form-control" id="inputamount" placeholder="Enter amount" />
        </div>

        <ul class="amount-list">
          <li>
            <div class="amount">$50</div>
          </li>
          <li>
            <div class="amount">$100</div>
          </li>
          <li>
            <div class="amount">$200</div>
          </li>
        </ul>
        <a href="#done" class="btn theme-btn w-100" data-bs-toggle="modal">Transfer</a>
      </form>
    </div>
  </section>
  <!-- Withdraw section end -->

  <!-- successful transfer modal start -->
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
          <h3>Money has been successfully withdraw from **63 to **47</h3>
          <a href="landing.php" class="btn theme-btn successfully w-100">Back to home</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- successful transfer modal end -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/withdraw.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:25 GMT -->
</html>