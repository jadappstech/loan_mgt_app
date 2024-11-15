<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/bill.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:25 GMT -->
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
        <h2>Bill pay</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- bill details section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>This month checklist</h2>
      </div>
      <div class="row g-3">
        <div class="col-md-3 col-6">
          <div class="bill-box">
            <div class="d-flex gap-3">
              <div class="bill-icon">
                <img class="img-fluid icon" src="assets/images/svg/6.svg" alt="p6" />
              </div>
              <div class="bill-details">
                <h5 class="dark-text">Airtel</h5>
                <h6 class="light-text mt-2">Pre-paid</h6>
              </div>
            </div>
            <div class="bill-price">
              <h5>$69.49</h5>
              <a href="#paid" data-bs-toggle="modal" class="btn bill-pay ">Paid</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="bill-box">
            <div class="d-flex gap-3">
              <div class="bill-icon">
                <img class="img-fluid icon" src="assets/images/svg/7.svg" alt="p7" />
              </div>
              <div class="bill-details">
                <h5 class="dark-text">Apple</h5>
                <h6 class="light-text mt-2">Subscription</h6>
              </div>
            </div>
            <div class="bill-price">
              <h5>$49.85</h5>
              <a href="#pay" data-bs-toggle="modal" class="btn bill-pay bill-paid">Pay</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="bill-box">
            <div class="d-flex gap-3">
              <div class="bill-icon">
                <img class="img-fluid icon" src="assets/images/svg/8.svg" alt="p8" />
              </div>
              <div class="bill-details">
                <h5 class="dark-text">TV</h5>
                <h6 class="light-text mt-2">Connection</h6>
              </div>
            </div>
            <div class="bill-price">
              <h5>$99.99</h5>
              <a href="#pay" data-bs-toggle="modal" class="btn bill-pay ">Pay</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6">
          <div class="bill-box">
            <div class="d-flex gap-3">
              <div class="bill-icon">
                <img class="img-fluid icon" src="assets/images/svg/9.svg" alt="p9" />
              </div>
              <div class="bill-details">
                <h5 class="dark-text">Torrent</h5>
                <h6 class="light-text mt-2">Electricity</h6>
              </div>
            </div>
            <div class="bill-price">
              <h5>$60.49</h5>
              <a href="#paid" data-bs-toggle="modal" class="btn bill-pay bill-paid">Paid</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bill details section starts -->

  <!-- service section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Select service</h2>
      </div>

      <div class="row row gy-3 w-100">
        <div class="col-md-2 col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="activity"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Electricity</h5>
          </a>
        </div>
        <div class="col-md-2 col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="droplet"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Water</h5>
          </a>
        </div>
        <div class="col-md-2 col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="wifi"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Internet</h5>
          </a>
        </div>
        <div class="col-md-2 col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="monitor"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Television</h5>
          </a>
        </div>
        <div class="col-md-2 col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="bar-chart-2"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Investment</h5>
          </a>
        </div>
        <div class="col-md-2 col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="tablet"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Mobile</h5>
          </a>
        </div>
        <div class="col-md-2 col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="plus-square"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Medical</h5>
          </a>
        </div>
        <div class="col-md-2 col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="more-horizontal"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Other</h5>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- service section end -->

  <!-- last paid section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>Select service</h2>
      </div>
      
      <ul class="bill-pay-list">
        <li class="w-100">
          <div class="bill-pay-box">
            <div class="bill-pay-img">
              <i class="icon" data-feather="tablet"></i>
            </div>
            <div class="bill-pay-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Mobile</h5>
                </a>
                <h3 class="theme-color">$30.<span>99</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">28 May, 2023</h6>
                <h5 class="fw-normal light-text">8:45 am</h5>
              </div>
            </div>
          </div>
        </li>
        <li class="w-100">
          <div class="bill-pay-box">
            <div class="bill-pay-img">
              <i class="icon" data-feather="activity"></i>
            </div>
            <div class="bill-pay-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Electricity</h5>
                </a>
                <h3 class="theme-color">$100.<span>99</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">20 May, 2023</h6>
                <h5 class="fw-normal light-text">3:00 pm</h5>
              </div>
            </div>
          </div>
        </li>
        <li class="w-100">
          <div class="bill-pay-box">
            <div class="bill-pay-img">
              <i class="icon" data-feather="droplet"></i>
            </div>
            <div class="bill-pay-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Water</h5>
                </a>
                <h3 class="theme-color">$15.<span>10</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">18 May, 2023</h6>
                <h5 class="fw-normal light-text">5:45 pm</h5>
              </div>
            </div>
          </div>
        </li>
        <li class="w-100">
          <div class="bill-pay-box">
            <div class="bill-pay-img">
              <i class="icon" data-feather="monitor"></i>
            </div>
            <div class="bill-pay-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Television</h5>
                </a>
                <h3 class="theme-color">$20.<span>50</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">15 May, 2023</h6>
                <h5 class="fw-normal light-text">2:30 am</h5>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- last paid section end -->

  <!-- pay modal starts -->
  <div class="modal pay-modal fade" id="pay" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Apple Bill Detail</h2>
        </div>
        <div class="modal-body">
          <ul class="details-list">
            <li>
              <h3 class="fw-normal dark-text">Amount</h3>
              <h3 class="fw-semibold theme-color">$49.85</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill date</h3>
              <h3 class="fw-normal light-text">10 May, 2023</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Due Date</h3>
              <h3 class="fw-normal error-color">31 May, 2023</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill number</h3>
              <h3 class="fw-normal light-text">BM452695523</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Mobile number</h3>
              <h3 class="fw-normal light-text">+91 ***** **256</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill status</h3>
              <h3 class="fw-semibold error-color">Unpaid</h3>
            </li>
          </ul>
          <a href="make-payment.php" class="btn theme-btn successfully w-100">Pay</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- pay modal end -->

  <!-- paid modal starts -->
  <div class="modal pay-modal fade" id="paid" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Mobile Bill Detail</h2>
        </div>
        <div class="modal-body">
          <ul class="details-list">
            <li>
              <h3 class="fw-normal dark-text">Amount</h3>
              <h3 class="fw-semibold theme-color">$69.49</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill date</h3>
              <h3 class="fw-normal light-text">10 May, 2023</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Due Date</h3>
              <h3 class="fw-normal light-text">22 May, 2023</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill number</h3>
              <h3 class="fw-normal light-text">BM452695523</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Mobile number</h3>
              <h3 class="fw-normal light-text">+91 ***** **256</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Bill status</h3>
              <h3 class="fw-semibold theme-color">Paid</h3>
            </li>
          </ul>
          <a href="landing.php" class="btn theme-btn successfully w-100">Paid - Thank you !</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- paid modal end -->

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


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/bill.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:25 GMT -->
</html>