<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/add-card-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:40 GMT -->
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
  <link rel="stylesheet" href="assets/css/auth-styles.css">
</head>

<body class="auth-body">
  <!-- header starts -->
  <div class="auth-header">
    <a href="employment-info.php"> <i class="back-btn" data-feather="arrow-left"></i> </a>
    <img class="img-fluid img1" src="assets/images/authentication/9.svg" alt="v1" />

    <div class="auth-content">
      <div>
        <h2>Add card</h2>
        <h4 class="p-0">Add your card details</h4>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- login section start -->
  <form class="auth-form" target="_blank">
    <div class="custom-container">
      <ul id="progressbar" style="text-align: center;">
        <li class="active" id="biodata"><strong></strong></li>
        <li class="active" id="loan"><strong></strong></li>
        <li class="active" id="verification"><strong></strong></li>
        <li class="active" id="disbursment"><strong></strong></li>
      </ul> 
      <div class="form-group">
        <label class="form-label">Card Number</label>
        <div class="form-input mb-3">
          <input type="text" class="form-control" placeholder="Enter card number" />
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">Card Holder Name</label>
        <div class="form-input mb-3">
          <input type="text" class="form-control" placeholder="Enter card holder name" />
        </div>
      </div>

      <div class="row">
        <div class="col-7">
          <div class="form-group">
            <label class="form-label">Exp. Date</label>
            <div class="form-input mb-3">
              <input type="date" class="form-control" />
            </div>
          </div>
        </div>
        <div class="col-5">
          <div class="form-group">
            <label class="form-label">CVV</label>
            <div class="form-input mb-3"><input type="number" class="form-control" placeholder="Enter cvv" /></div>
          </div>
        </div>
      </div>

      <a href="successfully-signup.php" class="btn theme-btn w-100">Continue</a>
      <a href="successfully-signup.php" class="btn btn-link mt-3">Skip</a>
    </div>
  </form>
  <!-- login section start -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/add-card-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:41 GMT -->
</html>