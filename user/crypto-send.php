<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/crypto-send.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:37 GMT -->
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
        <h2>Send</h2>
        <a href="#" class="back-btn">
          <i class="icon" data-feather="rotate-cw"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- crypto send starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="currency-transfer">
        <form class="auth-form crypto-form" target="_blank">
          <div class="form-group">
            <label class="form-label mb-2">Select digital asset</label>
            <div class="d-flex gap-2">
              <div class="dropdown">
                <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown">Select Currency</a>

                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item"><img class="img-fluid currency-icon" src="assets/images/svg/ethereum.svg"
                        alt="ethereum" />ETH</a>
                  </li>
                  <li>
                    <a class="dropdown-item"><img class="img-fluid currency-icon" src="assets/images/svg/bitcoins.svg"
                        alt="bitcoins" />BTC</a>
                  </li>
                  <li>
                    <a class="dropdown-item"><img class="img-fluid currency-icon" src="assets/images/svg/litecoin.svg"
                        alt="ethereum" />LTC</a>
                  </li>
                  <li>
                    <a class="dropdown-item"><img class="img-fluid currency-icon" src="assets/images/svg/binance.svg"
                        alt="ethereum" />BNB</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <h5 class="light-text mb-0">Available Balance:</h5>
              <h5 class="theme-color fw-normal mb-0">$2.2632 ETH</h5>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label mb-2">Amount</label>
            <div class="d-flex gap-2">
              <div class="dropdown">
                <a class="dropdown-toggle" role="button" data-bs-toggle="dropdown">Amount Currency</a>

                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item"><img class="img-fluid currency-icon" src="assets/images/svg/ethereum.svg"
                        alt="ethereum" />Amount in ETH</a>
                  </li>
                  <li>
                    <a class="dropdown-item"><img class="img-fluid currency-icon" src="assets/images/svg/bitcoins.svg"
                        alt="bitcoins" />Amount in BTC</a>
                  </li>
                  <li>
                    <a class="dropdown-item"><img class="img-fluid currency-icon" src="assets/images/svg/litecoin.svg"
                        alt="ethereum" />Amount in LTC</a>
                  </li>
                  <li>
                    <a class="dropdown-item"><img class="img-fluid currency-icon" src="assets/images/svg/binance.svg"
                        alt="ethereum" />Amount in BNB</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-2">
              <h5 class="light-text mb-0">Available Balance:</h5>
              <h5 class="theme-color fw-normal mb-0">$2.2632 ETH</h5>
            </div>
          </div>
        </form>

        <form class="auth-form crypto-form mt-3" target="_blank">
          <div class="form-group">
            <label for="inputname" class="form-label">Recipient name</label>
            <div class="form-input">
              <input type="text" class="form-control" value="Seema Williams" id="inputname"
                placeholder="Enter the name" />
            </div>
          </div>

          <div class="form-group">
            <label for="inputaddress" class="form-label">Recipient Address</label>
            <div class="form-input">
              <input type="text" class="form-control" value="0bu7895614569823" id="inputaddress"
                placeholder="Enter the address" />
            </div>
          </div>
          <div class="form-group">
            <label for="inputnote" class="form-label">Note</label>
            <div class="form-input">
              <textarea class="form-control" id="inputnote" rows="2"></textarea>
            </div>
          </div>
        </form>
        <div class="transfer-btn">
          <div class="custom-container">
            <a href="#send" class="btn theme-btn sub-btn  w-100" data-bs-toggle="modal">Send</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- crypto send end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  <!--successful send modal start -->
  <div class="modal error-modal fade" id="send" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Successfully Send Asset</h2>
        </div>
        <div class="modal-body">
          <div class="error-img">
            <img class="img-fluid" src="assets/images/svg/done.svg" alt="delate" />
          </div>
          <h3>Your digital asset has been submitted to Seema Williams successfully.</h3>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- successful send modal end -->

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


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/crypto-send.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:37 GMT -->
</html>