<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/person-transaction.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:51 GMT -->
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
        <a href="transfer-person.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Mike Transactions</h2>

        <div class="dropdown">
          <a href="#" class="back-btn" role="button" data-bs-toggle="dropdown">
            <i class="icon" data-feather="settings"></i>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Request money</a></li>
            <li><a class="dropdown-item" href="#">Pay money</a></li>
            <li><a class="dropdown-item" href="#">Remove all</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- person transaction list section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <ul class="transaction-list">
        <li class="w-100">
          <div class="transaction-box">
            <div class="transaction-img">
              <i class="icon" data-feather="command"></i>
            </div>
            <div class="transaction-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Project Tip</h5>
                </a>
                <h3 class="success-color">$30.<span>99</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">28 May, 2023</h6>
                <h5 class="fw-normal light-text">8:45 am</h5>
              </div>
            </div>
          </div>
        </li>
        <li class="w-100">
          <div class="transaction-box">
            <div class="transaction-img">
              <i class="icon" data-feather="repeat"></i>
            </div>
            <div class="transaction-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Transfer</h5>
                </a>
                <h3 class="success-color">$100.<span>99</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">20 May, 2023</h6>
                <h5 class="fw-normal light-text">3:00 pm</h5>
              </div>
            </div>
          </div>
        </li>
        <li class="w-100">
          <div class="transaction-box">
            <div class="transaction-img">
              <i class="icon" data-feather="gift"></i>
            </div>
            <div class="transaction-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Wedding Gift</h5>
                </a>
                <h3 class="error-color">$12.<span>10</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">18 May, 2023</h6>
                <h5 class="fw-normal light-text">5:45 pm</h5>
              </div>
            </div>
          </div>
        </li>
        <li class="w-100">
          <div class="transaction-box">
            <div class="transaction-img">
              <i class="icon" data-feather="layers"></i>
            </div>
            <div class="transaction-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Commission</h5>
                </a>
                <h3 class="error-color">$6.<span>20</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">15 May, 2023</h6>
                <h5 class="fw-normal light-text">2:30 am</h5>
              </div>
            </div>
          </div>
        </li>
        <li class="w-100">
          <div class="transaction-box">
            <div class="transaction-img">
              <i class="icon" data-feather="shopping-bag"></i>
            </div>
            <div class="transaction-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Buy Fruit</h5>
                </a>
                <h3 class="success-color">$5.<span>40</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">10 May, 2023</h6>
                <h5 class="fw-normal light-text">10:35 am</h5>
              </div>
            </div>
          </div>
        </li>
        <li class="w-100">
          <div class="transaction-box">
            <div class="transaction-img">
              <i class="icon" data-feather="coffee"></i>
            </div>
            <div class="transaction-details">
              <div class="d-flex justify-content-between align-items-center w-100">
                <a href="transfer-person.php">
                  <h5 class="fw-normal dark-text">Coffee Treat</h5>
                </a>
                <h3 class="error-color">$10.<span>49</span></h3>
              </div>
              <div class="d-flex justify-content-between align-items-center w-100 mt-1">
                <h6 class="fw-normal light-text">9 May, 2023</h6>
                <h5 class="fw-normal light-text">5:15 pm</h5>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!-- person transaction list section end -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/person-transaction.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:51 GMT -->
</html>