<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/request.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:25 GMT -->
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
        <h2>Request Money</h2>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- request section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Request money to</h2>
      </div>
      <div class="quick-send pb-4">
        <a href="request-person.php" class="profile new-profile">
          <div class="new-image">
            <i class="icon" data-feather="plus"></i>
          </div>
        </a>

        <div class="profile">
          <a href="request-person.php">
            <img class="img-fluid person-img" src="assets/images/person/p1.png" alt="p1" />
          </a>
          <h5>Mike</h5>
        </div>

        <div class="profile">
          <a href="request-person.php">
            <img class="img-fluid person-img" src="assets/images/person/p2.png" alt="p2" />
            <h5>Michael</h5>
          </a>
        </div>

        <div class="profile">
          <a href="request-person.php">
            <img class="img-fluid person-img" src="assets/images/person/p3.png" alt="p3" />
            <h5>Kristin</h5>
          </a>
        </div>

        <div class="profile">
          <a href="request-person.php">
            <img class="img-fluid person-img" src="assets/images/person/p4.png" alt="p4" />
            <h5>Trunk</h5>
          </a>
        </div>

        <div class="profile">
          <a href="request-person.php">
            <img class="img-fluid person-img" src="assets/images/person/p5.png" alt="p5" />
            <h5>Johnny</h5>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-b-space">
    <div class="custom-container">
      <form class="auth-form p-0" target="_blank">
        <div class="form-group">
          <label for="inputmessage" class="form-label">Message</label>
          <div class="form-input">
            <textarea class="form-control" id="inputmessage" rows="3" placeholder="Write here"></textarea>
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
        <a href="#done" class="btn theme-btn w-100" data-bs-toggle="modal">Transfer</a>
      </form>
    </div>
  </section>
  <!-- request section end -->

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
          <h3><span class="theme-color">Diane</span> has got an application for money.</h3>
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


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/request.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:25 GMT -->
</html>