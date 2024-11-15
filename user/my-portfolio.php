<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/my-portfolio.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:37 GMT -->
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
        <h2>My Portfolio</h2>

        <div class="dropdown">
          <a href="#" class="back-btn" role="button" data-bs-toggle="dropdown">
            <i class="icon" data-feather="plus"></i>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#buy" data-bs-toggle="modal">Buy Currency</a></li>
            <li><a class="dropdown-item" href="#sell" data-bs-toggle="modal">Sell Currency</a></li>
          </ul>
        </div>
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

  <!-- my currency section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>My Currency</h2>
      </div>
      <div class="row gy-3">
        <div class="col-12">
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
                <li class="text-center light-text">$45,875.98</li>
                <li class="text-center dark-text">-12.77 </li>
                <li class="text-center dark-text">8%</li>
              </ul>
            </a>
          </div>
        </div>
        <div class="col-12">
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
                <li class="text-center light-text">$20,256.28</li>
                <li class="text-center dark-text">+10.77 </li>
                <li class="text-center dark-text">20%</li>
              </ul>
            </a>
          </div>
        </div>
        <div class="col-12">
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
                <li class="text-center light-text">$10,256.30</li>
                <li class="text-center dark-text">-20.05 </li>
                <li class="text-center dark-text">12%</li>
              </ul>
            </a>
          </div>
        </div>
        <div class="col-12">
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
                <li class="text-center light-text">$20,256.28</li>
                <li class="text-center dark-text">+10.77 </li>
                <li class="text-center dark-text">20%</li>
              </ul>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- my currency section end -->

  <!-- revenue flow section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Revenue Flow</h2>
      </div>
      <div class="revenue-chart">
        <ul class="month-list">
          <li>Jan</li>
          <li>Feb</li>
          <li>Mar</li>
          <li>Apr</li>
          <li class="active">May</li>
          <li>Jun</li>
        </ul>
        <div id="revenue"></div>
      </div>
    </div>
  </section>
  <!-- revenue flow section end -->

  <!-- categories section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>Categories</h2>
      </div>

      <div class="row gy-3">
        <div class="col-12">
          <div class="transaction-box">
            <a href="#transaction-detail" data-bs-toggle="modal" class="d-flex gap-3">
              <div class="transaction-image color1">
                <img class="img-fluid icon" src="assets/images/svg/bitcoins.svg" alt="bitcoins" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name pb-0">
                  <h5>Bitcoin</h5>
                  <h5 class="dark-text fw-semibold">$15,000.10</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="#transaction-detail" data-bs-toggle="modal" class="d-flex gap-3">
              <div class="transaction-image color2">
                <img class="img-fluid icon" src="assets/images/svg/ethereum.svg" alt="ethereum" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name pb-0">
                  <h5>Ethereum</h5>
                  <h5 class="dark-text fw-semibold">$25,200.00</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="#transaction-detail" data-bs-toggle="modal" class="d-flex gap-3">
              <div class="transaction-image color5">
                <img class="img-fluid icon" src="assets/images/svg/tether.svg" alt="tether" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name pb-0">
                  <h5>Tether</h5>
                  <h5 class="dark-text fw-semibold">$5,000.03</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="#transaction-detail" data-bs-toggle="modal" class="d-flex gap-3">
              <div class="transaction-image color6">
                <img class="img-fluid icon" src="assets/images/svg/doge.svg" alt="dogecoin" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name pb-0">
                  <h5>Dogecoin</h5>
                  <h5 class="dark-text fw-semibold">$7,053.00</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- categories section end -->

  <!-- buy currency starts -->
  <div class="modal add-money-modal fade" id="buy" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Add Money</h2>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="inputcurrency" class="form-label mb-2">Select Cryptocurrency</label>
            <div class="d-flex gap-2">
              <select id="inputcurrency" class="form-select">
                <option selected>Select currency</option>
                <option>Bitcoin</option>
                <option>Ethereum</option>
                <option>Litecoin</option>
                <option>Binance</option>
                <option>Dogecoin</option>
                <option>Tether</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="inputcard" class="form-label mb-2">Select Payment method</label>
            <div class="d-flex gap-2">
              <select id="inputcard" class="form-select">
                <option selected>Select payment</option>
                <option>Master Card</option>
                <option>Visa Card</option>
                <option>RuPay Card</option>
                <option>Business Card</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Wallet address</label>
            <div class="form-input">
              <input type="text" class="form-control" placeholder="Enter wallet address" />
            </div>
          </div>

          <div class="d-flex justify-content-between align-items-end">
            <div class="form-group currency-group">
              <label class="form-label">USD Amount</label>
              <div class="form-input">
                <input type="number" class="form-control" />
              </div>
            </div>

            <div class="exchange-icon currency-icon">
              <i class="icon" data-feather="repeat"></i>
            </div>

            <div class="form-group currency-group">
              <label class="form-label">BTC Amount</label>
              <div class="form-input">
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>

          <a href="crypto.php" class="btn theme-btn successfully w-100">Buy Currency</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- buy currency end -->

  <!-- sell currency starts -->
  <div class="modal add-money-modal fade" id="sell" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Add Money</h2>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="inputcards" class="form-label mb-2">Select Cryptocurrency</label>
            <div class="d-flex gap-2">
              <select id="inputcards" class="form-select">
                <option selected>Select currency</option>
                <option>Bitcoin</option>
                <option>Ethereum</option>
                <option>Litecoin</option>
                <option>Binance</option>
                <option>Dogecoin</option>
                <option>Tether</option>
              </select>
            </div>
          </div>

          <div class="d-flex justify-content-between align-items-end">
            <div class="form-group currency-group">
              <label class="form-label">USD Amount</label>
              <div class="form-input">
                <input type="number" class="form-control" />
              </div>
            </div>

            <div class="exchange-icon currency-icon">
              <i class="icon" data-feather="repeat"></i>
            </div>

            <div class="form-group currency-group">
              <label class="form-label">BTC Amount</label>
              <div class="form-input">
                <input type="number" class="form-control" />
              </div>
            </div>
          </div>

          <a href="crypto.php" class="btn theme-btn successfully w-100">Sell Currency</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- sell currency end -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- apexcharts js -->
  <script src="assets/js/apexcharts.js"></script>
  <script src="assets/js/custom-revenue-chart.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/my-portfolio.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:38 GMT -->
</html>