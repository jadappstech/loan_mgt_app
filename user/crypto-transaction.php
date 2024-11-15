<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/crypto-transaction.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:40 GMT -->
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
        <a href="crypto.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Buy & Sell History</h2>

        <div class="dropdown">
          <a href="#" class="back-btn" role="button" data-bs-toggle="dropdown">
            <i class="icon" data-feather="settings"></i>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Most recent </a></li>
            <li><a class="dropdown-item" href="#period" data-bs-toggle="modal">Custom</a></li>
            <li><a class="dropdown-item" href="#">Last 1 month</a></li>
            <li><a class="dropdown-item" href="#">Remove all</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- Buy & Sell history section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>Today</h2>
      </div>

      <div class="row gy-3">
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color1">
                <img class="img-fluid icon" src="assets/images/svg/bitcoins.svg" alt="bitcoins" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Bitcoin</h5>
                  <h3 class="dark-text">$10,265.16</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">BTC</h5>
                  <h5 class="success-color">+5.17% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color2">
                <img class="img-fluid icon" src="assets/images/svg/ethereum.svg" alt="ethereum" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Ethereum</h5>
                  <h3 class="dark-text">$59.85</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">ETH</h5>
                  <h5 class="success-color">+1.51% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="title mt-3">
        <h2>Yesterday</h2>
      </div>

      <div class="row gy-3">
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color3">
                <img class="img-fluid icon" src="assets/images/svg/litecoin.svg" alt="litecoin" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Litecoin</h5>
                  <h3 class="dark-text">$18.01</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">LTC</h5>
                  <h5 class="error-color">-0.26% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color4">
                <img class="img-fluid icon" src="assets/images/svg/binance.svg" alt="binance" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Binance</h5>
                  <h3 class="dark-text">$55.30</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">BNB</h5>
                  <h5 class="success-color">+4.75% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color5">
                <img class="img-fluid icon" src="assets/images/svg/tether.svg" alt="tether" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Tether</h5>
                  <h3 class="dark-text">$19.20</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">USDT</h5>
                  <h5 class="error-color">-0.03% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="title mt-3">
        <h2>Last Week</h2>
      </div>

      <div class="row gy-3">
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color1">
                <img class="img-fluid icon" src="assets/images/svg/bitcoins.svg" alt="bitcoins" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Bitcoin</h5>
                  <h3 class="dark-text">$10,265.16</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">BTC</h5>
                  <h5 class="success-color">+5.17% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color2">
                <img class="img-fluid icon" src="assets/images/svg/ethereum.svg" alt="ethereum" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Ethereum</h5>
                  <h3 class="dark-text">$59.85</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">ETH</h5>
                  <h5 class="success-color">+1.51% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color3">
                <img class="img-fluid icon" src="assets/images/svg/litecoin.svg" alt="litecoin" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Litecoin</h5>
                  <h3 class="dark-text">$18.01</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">LTC</h5>
                  <h5 class="error-color">-0.26% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color4">
                <img class="img-fluid icon" src="assets/images/svg/binance.svg" alt="binance" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Binance</h5>
                  <h3 class="dark-text">$55.30</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">BNB</h5>
                  <h5 class="success-color">+4.75% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color5">
                <img class="img-fluid icon" src="assets/images/svg/tether.svg" alt="tether" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Tether</h5>
                  <h3 class="dark-text">$19.20</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">USDT</h5>
                  <h5 class="error-color">-0.03% <span class="light-text">(24H)</span></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Buy & Sell history section starts -->

  <!-- period modal start -->
  <div class="modal add-money-modal fade" id="period" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Select Period</h2>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="inputfromdate" class="form-label">From date</label>
            <input type="date" class="form-control" id="inputfromdate" />
          </div>

          <div class="form-group">
            <label for="inputtodate" class="form-label">To date</label>
            <input type="date" class="form-control" id="inputtodate" />
          </div>

          <a href="crypto-view-transaction.php" class="btn theme-btn successfully w-100">View transaction</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!--period modal end -->

  <!-- transaction detail modal start -->
  <div class="modal successful-modal transfer-details fade" id="transaction-detail" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Transaction Detail</h2>
        </div>
        <div class="modal-body">
          <ul class="details-list">
            <li>
              <h3 class="fw-normal dark-text">Payment status</h3>
              <h3 class="fw-normal light-text">Success</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Date</h3>
              <h3 class="fw-normal light-text">18 May, 2023</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">From</h3>
              <h3 class="fw-normal light-text">**** **** **** 2563</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">To</h3>
              <h3 class="fw-normal light-text">Amazon prime</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Transaction category</h3>
              <h3 class="fw-normal light-text">Bill Pay</h3>
            </li>
            <li class="amount">
              <h3 class="fw-normal dark-text">Amount</h3>
              <h3 class="fw-semibold error-color">$199.99</h3>
            </li>
          </ul>
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


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/crypto-transaction.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:40 GMT -->
</html>