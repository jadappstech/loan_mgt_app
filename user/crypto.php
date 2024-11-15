<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/crypto.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:07:51 GMT -->
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

  <!-- iconsax css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/iconsax.css" />

  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.min.css" />

  <!-- swiper css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/swiper-bundle.min.css" />

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css" />
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
              <h3>Profile</h3>
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
        <h2>Crypto Wallet</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- card start -->
  <section>
    <div class="custom-container">
      <div class="crypto-wallet-box">
        <div class="card-details">
          <div class="d-block w-75">
            <h5 class="fw-semibold">Current Balance</h5>
            <h2 class="mt-2">$ 1,06,786.65</h2>
          </div>
          <div class="price-difference">
            <i class="menu-icon" data-feather="arrow-up"></i>
            <h6>8.56% (+253BTC)</h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- card end -->
  <section>
    <div class="custom-container">
      <div class="chart mb-3">
        <ul class="day-list">

          <li class="active">Today</li>
          <li>Week</li>
          <li>Month</li>
          <li>Year</li>
        </ul>
        <div id="wallet"></div>
      </div>
    </div>
  </section>
  <!-- categories section starts -->
  <section class="categories-section section-b-space">
    <div class="custom-container">
      <ul class="categories-list">
        <li>
          <a href="crypto-send.php">
            <div class="categories-box">
              <i class="categories-icon" data-feather="arrow-up"></i>
            </div>
            <h5 class="mt-2 text-center">Send</h5>
          </a>
        </li>
        <li>
          <a href="crypto-request.php">
            <div class="categories-box">
              <i class="categories-icon" data-feather="arrow-down"></i>
            </div>
            <h5 class="mt-2 text-center">Request</h5>
          </a>
        </li>
        <li>
          <a href="crypto-exchange.php">
            <div class="categories-box">
              <i class="categories-icon" data-feather="repeat"></i>
            </div>
            <h5 class="mt-2 text-center">Exchange</h5>
          </a>
        </li>

        <li>
          <a href="crypto-withdraw.php">
            <div class="categories-box">
              <i class="iconsax categories-icon" data-icon="bank"></i>
            </div>
            <h5 class="mt-2 text-center">Withdraw</h5>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- categories section end -->

  <!-- my-portfolio section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>My Portfolio</h2>
        <a href="my-portfolio.php">See all</a>
      </div>
      <div class="swiper portfolio">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="portfolio-box">
              <a href="coin-details.php">
                <div class="d-flex align-items-center gap-2 pb-3">
                  <div class="portfolio-img">
                    <img class="img-fluid img" src="assets/images/svg/bitcoins.svg" alt="bitcoins" />
                  </div>
                  <div class="portfolio-details">
                    <div>
                      <h3>Bitcoin</h3>
                      <h6 class="success-color fw-normal">+11%</h6>
                    </div>
                    <img class="img-fluid" src="assets/images/svg/success-chart.svg" alt="success-chart" />
                  </div>
                </div>
                <ul class="currency-amount">
                  <li class="light-text">$45,875.98</li>
                  <li class="dark-text">-12.77 <span>(8%)</span></li>
                </ul>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="portfolio-box">
              <a href="coin-details.php">
                <div class="d-flex align-items-center gap-2 pb-3">
                  <div class="portfolio-img">
                    <img class="img-fluid img" src="assets/images/svg/ethereum.svg" alt="ethereum" />
                  </div>
                  <div class="portfolio-details">
                    <div>
                      <h3>Ethereum</h3>
                      <h6 class="error-color fw-normal">-25%</h6>
                    </div>
                    <img class="img-fluid" src="assets/images/svg/lost-chart.svg" alt="lost-chart" />
                  </div>
                </div>
                <ul class="currency-amount">
                  <li class="light-text">$20,256.28</li>
                  <li class="dark-text">+10.77 <span>(20%)</span></li>
                </ul>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="portfolio-box">
              <a href="coin-details.php">
                <div class="d-flex align-items-center gap-2 pb-3">
                  <div class="portfolio-img">
                    <img class="img-fluid img" src="assets/images/svg/tether.svg" alt="tether" />
                  </div>
                  <div class="portfolio-details">
                    <div>
                      <h3>Tether</h3>
                      <h6 class="success-color fw-normal">+30%</h6>
                    </div>
                    <img class="img-fluid" src="assets/images/svg/success-chart.svg" alt="success-chart" />
                  </div>
                </div>
                <ul class="currency-amount">
                  <li class="light-text">$10,256.30</li>
                  <li class="dark-text">-20.05 <span>(12%)</span></li>
                </ul>
              </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="portfolio-box">
              <a href="coin-details.php">
                <div class="d-flex align-items-center gap-2 pb-3">
                  <div class="portfolio-img">
                    <img class="img-fluid img" src="assets/images/svg/doge.svg" alt="doge" />
                  </div>
                  <div class="portfolio-details">
                    <div>
                      <h3>Doge</h3>
                      <h6 class="error-color fw-normal">-18%</h6>
                    </div>
                    <img class="img-fluid" src="assets/images/svg/lost-chart.svg" alt="lost-chart" />
                  </div>
                </div>
                <ul class="currency-amount">
                  <li class="light-text">$20,256.28</li>
                  <li class="dark-text">+10.77 <span>(20%)</span></li>
                </ul>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner section end -->

  <!-- Buy & Sell history section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Buy & Sell History</h2>
        <a href="crypto-transaction.php">See all</a>
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
  <!-- Transaction section end -->

  <!-- banner section starts -->
  <section>
    <div class="custom-container">
      <div class="swiper banner">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="coin-details.php">
              <img class="img-fluid banner-img" src="assets/images/banner/banner1.png" alt="banner1" />
            </a>
          </div>

          <div class="swiper-slide">
            <a href="profile.php">
              <img class="img-fluid banner-img" src="assets/images/banner/banner2.png" alt="banner2" />
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- banner section end -->

  <!-- news-update section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>News Update</h2>
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

  <!-- panel-space start -->
  <section class="panel-space"></section>
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

      <li class="active">
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

      <li>
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

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- swiper js -->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/custom-swiper.js"></script>

  <!-- apexcharts js -->
  <script src="assets/js/apexcharts.js"></script>
  <script src="assets/js/custom-candlestick-chart.js"></script>

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- iconsax js -->
  <script src="assets/js/iconsax.js"></script>
  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/crypto.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:03 GMT -->
</html>