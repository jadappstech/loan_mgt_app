<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/transfer.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:24 GMT -->
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
        <h2>Transfer</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- transfer section start -->
  <section class="section-b-space">
    <div class="custom-container">

      <ul class="nav nav-tabs custom-selectjs tab-style1" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="bank-tab" data-bs-toggle="tab" data-bs-target="#bank" type="button"
            role="tab">Bank</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
            role="tab">Contact</button>
        </li>
      </ul>

      <div class="tab-content tab w-100" id="pills-tabContent1">
        <div class="tab-pane fade show active" id="bank" role="tabpanel" tabindex="0">

          <div class="title mt-3">
            <h2>Select a bank</h2>
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
          <div class="title mt-3">
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
            <a href="#error" class="btn theme-btn w-100" data-bs-toggle="modal">Transfer</a>
          </form>
        </div>

        <div class="tab-pane fade" id="contact" role="tabpanel">
          <div class="quick-send person-pay mt-3">
            <h3>Recent payees</h3>

            <div class="profile">
              <a href="scan-pay.php" class="profile new-profile">
                <div class="new-image">
                  <i class="icon" data-feather="plus"></i>
                </div>
              </a>
            </div>

            <div class="profile">
              <a href="person-transaction.php">
                <img class="img-fluid person-img" src="assets/images/person/p1.png" alt="p1" />
              </a>
              <h5>Mike</h5>
              <h6>**** 67</h6>

            </div>

            <div class="profile">
              <a href="person-transaction.php">
                <img class="img-fluid person-img" src="assets/images/person/p2.png" alt="p2" />
                <h5>Michael</h5>
                <h6>**** 72</h6>
              </a>
            </div>

            <div class="profile">
              <a href="person-transaction.php">
                <img class="img-fluid person-img" src="assets/images/person/p3.png" alt="p3" />
                <h5>Kristin</h5>
                <h6>**** 32</h6>
              </a>
            </div>

            <div class="profile">
              <a href="person-transaction.php">
                <img class="img-fluid person-img" src="assets/images/person/p4.png" alt="p4" />
                <h5>Trunk</h5>
                <h6>**** 45</h6>
              </a>
            </div>

            <div class="profile">
              <a href="person-transaction.php">
                <img class="img-fluid person-img" src="assets/images/person/p5.png" alt="p5" />
                <h5>Johnny</h5>
                <h6>**** 56</h6>
              </a>
            </div>
          </div>

          <div class="title mt-3">
            <h2>Transfer money to</h2>
          </div>
          <form class="auth-form p-0" target="_blank">
            <div class="form-group">
              <label for="inputbank" class="form-label">Bank name</label>
              <select id="inputbank" class="form-select">
                <option selected>Select bank</option>
                <option>HDFC Bank</option>
                <option>State Bank of India</option>
                <option>bank of baroda</option>
                <option>ICICI Bank</option>
              </select>
            </div>

            <div class="form-group">
              <label for="inputcard" class="form-label">Card number</label>
              <div class="form-input">
                <input type="number" class="form-control" id="inputcard" placeholder="Add card number" />
              </div>
            </div>

            <div class="form-group">
              <label for="inputamount1" class="form-label">Amount</label>
              <input type="text" class="form-control" id="inputamount1" />
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
            <a href="#error" class="btn theme-btn w-100" data-bs-toggle="modal">Transfer</a>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- transfer section end -->

  <!-- error transfer modal start -->
  <div class="modal error-modal fade" id="error" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Error in Transfer</h2>
        </div>
        <div class="modal-body">
          <div class="error-img">
            <img class="img-fluid" src="assets/images/svg/error.svg" alt="error" />
          </div>
          <h3>There was a problem when transferring money, please verify and try again.</h3>
          <a href="#done" class="btn theme-btn successfully w-100" data-bs-toggle="modal">Try again</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- error transfer modal end -->

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
          <h5>#TR - 7859623</h5>
          <ul class="details-list">
            <li>
              <h3 class="fw-normal dark-text">Amount</h3>
              <h3 class="fw-normal theme-color">$49.85</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Date</h3>
              <h3 class="fw-normal light-text">10 Feb, 2023 | 9:02 pm</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Receive from</h3>
              <h3 class="fw-normal light-text">Dianne Christian</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Amount</h3>
              <h3 class="fw-normal light-text">HDFC bank</h3>
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
  <!-- successful transfer modal end -->

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


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/transfer.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:25 GMT -->
</html>