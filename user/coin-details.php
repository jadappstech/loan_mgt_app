<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/coin-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:38 GMT -->
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
        <h2>Coin Detail</h2>

        <div class="dropdown">
          <a href="#" class="back-btn" role="button" data-bs-toggle="dropdown">
            <i class="icon" data-feather="settings"></i>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Bitcoin - BTC</a></li>
            <li><a class="dropdown-item" href="#">Ethereum - ETH</a></li>
            <li><a class="dropdown-item" href="#">Dogecoin - DOG</a></li>
            <li><a class="dropdown-item" href="#">Tether - USDT</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- coin chart section start -->
  <section>
    <div class="accordion coin-chart-accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            BTC/USD
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <div class="transaction-box">
              <a href="transaction-history.php" class="d-flex gap-3">
                <div class="transaction-image color1">
                  <img class="img-fluid icon" src="assets/images/svg/bitcoins.svg" alt="bitcoins" />
                </div>
                <div class="transaction-details">
                  <div class="transaction-name">
                    <h2 class="fw-bold dark-text">$45,875.98</h2>
                    <h3 class="success-color">11%</h3>
                  </div>
                  <div class="d-flex justify-content-between">
                    <h5 class="light-text fw-semibold">Bitcoin | USDT</h5>
                    <h5 class="light-text">-12.77 (8%)</h5>
                  </div>
                </div>
              </a>
            </div>

            <div class="chart" class="overview-wrapper">
              <ul class="day-list">
                <li>1D</li>
                <li class="active">1M</li>
                <li>3M</li>
                <li>6M</li>
                <li>1Y</li>
              </ul>
              <div class="coin-chart-wrapper" id="coin"></div>
              <div class="back-bar-container">
                <div id="order-bar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- coin chart section start -->

  <!-- Statics section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Statics</h2>
      </div>

      <ul class="statics-list">
        <li>
          <h3 class="fw-normal dark-text statics-name">Current price</h3>
          <h3 class="fw-normal light-text statics-amount">$45,875.98</h3>
        </li>
        <li>
          <h3 class="fw-normal dark-text statics-name">Market Cap</h3>
          <h3 class="fw-normal light-text statics-amount">$45,875.98</h3>
        </li>
        <li>
          <h3 class="fw-normal dark-text statics-name">High</h3>
          <h3 class="fw-normal light-text statics-amount">$3,456</h3>
        </li>
        <li>
          <h3 class="fw-normal dark-text statics-name">Low</h3>
          <h3 class="fw-normal light-text statics-amount">$2,147</h3>
        </li>
        <li>
          <h3 class="fw-normal dark-text statics-name">Volume 24h</h3>
          <h3 class="fw-normal light-text statics-amount">3,456$</h3>
        </li>
      </ul>
    </div>
    </div>
  </section>
  <!-- Statics section end -->

  <!-- buy & sell History section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Buy & Sell History</h2>
      </div>

      <div class="row gy-3">
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color5">
                <img class="img-fluid icon" src="assets/images/svg/sell.svg" alt="bitcoins" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Bitcoin</h5>
                  <h3 class="dark-text">$85.45</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Buy ID : #4598</h5>
                  <h5 class="light-text">22 May</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color7">
                <img class="img-fluid icon" src="assets/images/svg/buy.svg" alt="ethereum" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Bitcoin</h5>
                  <h3 class="dark-text">$59.85</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Sell ID : #4596</h5>
                  <h5 class="light-text">15 May</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color7">
                <img class="img-fluid icon" src="assets/images/svg/buy.svg" alt="litecoin" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Bitcoin</h5>
                  <h3 class="dark-text">$18.01</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Sell ID : #4496</h5>
                  <h5 class="light-text">12 April</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image color5">
                <img class="img-fluid icon" src="assets/images/svg/sell.svg" alt="binance" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Bitcoin</h5>
                  <h3 class="dark-text">$55.30</h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Buy ID : #4452 </h5>
                  <h5 class="light-text">25 March</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- buy & sell History section starts -->

  <!-- news-update section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>Bitcoin Update</h2>
        <a href="news-update.php">See all</a>
      </div>
      <div class="row gy-3">
        <div class="col-12">
          <div class="news-update-box">
            <div class="d-flex align-items-center gap-3">
              <a href="news-update-details.php">
                <img class="img-fluid news-update-image" src="assets/images/1.jpg" alt="img1" />
              </a>
              <div class="news-update-content">
                <a href="news-update-details.php">
                  <h3>Save and invest to obtain more</h3>
                </a>
                <div class="news-writer">
                  <h6>13 May, 23</h6>
                  <h6>-Smith</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="news-update-box">
            <div class="d-flex align-items-center gap-3">
              <a href="news-update-details.php">
                <img class="img-fluid news-update-image" src="assets/images/2.jpg" alt="img2" />
              </a>
              <div class="news-update-content">
                <a href="news-update-details.php">
                  <h3>How to get more money from savings</h3>
                </a>
                <div class="news-writer">
                  <h6>10 May, 23</h6>
                  <h6>-Laila</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="news-update-box">
            <div class="d-flex align-items-center gap-3">
              <a href="news-update-details.php">
                <img class="img-fluid news-update-image" src="assets/images/3.jpg" alt="img3" />
              </a>
              <div class="news-update-content">
                <a href="news-update-details.php">
                  <h3>5 Tips on expand your business</h3>
                </a>
                <div class="news-writer">
                  <h6>6 May, 23</h6>
                  <h6>-Brunt</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- news-update section end -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- apexcharts js -->
  <script src="assets/js/apexcharts.js"></script>
  <script src="assets/js/custom-coin-chart.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/coin-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:40 GMT -->
</html>