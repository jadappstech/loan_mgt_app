<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/signin.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:06:38 GMT -->
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
    <a href="../index.php"> <i class="back-btn" data-feather="arrow-left"></i> </a>

    <img class="img-fluid img" src="assets/images/authentication/1.svg" alt="v1" />

    <div class="auth-content">
      <div>
        <h2>Welcome back !!</h2>
        <h4 class="p-0">Sign in and get that loan now</h4>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- login section start -->
  <form class="auth-form" target="_blank">
    <div class="custom-container">
      <div class="form-group">
        <label for="inputusername" class="form-label">Email</label>
        <div class="form-input">
          <input type="email" class="form-control" id="inputusername" placeholder="Enter Your Email" />
        </div>
      </div>

      <div class="form-group">
        <label for="inputpin" class="form-label">Pin</label>
        <div class="form-input">
          <input type="password" class="form-control" id="inputpin" placeholder="Enter Your pin" />
        </div>
      </div>
      <div class="remember-option mt-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault">Remember me</label>
        </div>
        <a class="forgot" href="forgot-password.php">Forgot Pin?</a>
      </div>

      <a href="landing.php" class="btn theme-btn w-100">Sign In</a>
      <h4 class="signup">Don’t have an account ?<a href="signup.php"> Sign up</a></h4>

      <!-- <div class="division">
        <span>OR</span>
      </div>

      <a href="https://www.google.co.in/" target="_blank" class="btn gray-btn mt-3"> <img class="img-fluid google"
          src="assets/images/svg/google.svg" alt="google" /> Continue with Google</a>
      <a href="https://www.facebook.com/login/" target="_blank" class="btn gray-btn mt-3"> <img class="img-fluid google"
          src="assets/images/svg/facebook.svg" alt="google" /> Continue with facebook</a> -->
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


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/signin.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:06:43 GMT -->
</html>