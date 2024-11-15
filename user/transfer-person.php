<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/transfer-person.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:44 GMT -->
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
        <a href="transfer.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Transfer</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- transfer-list starts -->
  <section>
    <ul class="transfer-list add-transfer-person">
      <li class="w-100">
        <div class="transfer-person transfer-box">
          <div class="transfer-img">
            <img class="img-fluid icon" src="assets/images/person/p1.png" alt="p1" />
          </div>
          <div class="transfer-details">
            <div>
              <h5 class="fw-semibold dark-text">Mike Williams</h5>
              <h6 class="fw-normal light-text mt-2">**** **** **** 8856</h6>
            </div>
            <div class="dropdown">
              <a href="#" role="button" data-bs-toggle="dropdown">
                <i class="icon dark-text" data-feather="more-vertical"></i>
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item w-100" href="transfer-pay-person.php">Change person</a></li>
              </ul>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <!-- transfer-list end -->

  <!-- transfer details section start -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>Transfer money to</h2>
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
          <label for="inputcardnumber" class="form-label">Card number</label>
          <div class="form-input">
            <input type="number" class="form-control" id="inputcardnumber" placeholder="Add card number" />
          </div>
        </div>

        <div class="form-group">
          <label for="inputamount" class="form-label">Amount</label>
          <input type="text" class="form-control" id="inputamount" />
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
        <a href="landing.php" class="btn theme-btn w-100">Transfer</a>
      </form>
    </div>
  </section>
  <!-- transfer details section end -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/transfer-person.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:44 GMT -->
</html>