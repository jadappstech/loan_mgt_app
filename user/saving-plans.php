<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/saving-plans.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:28 GMT -->
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
        <h2>My savings plan</h2>

        <a href="#add-goals" class="back-btn" data-bs-toggle="modal">
          <i class="icon" data-feather="plus"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- total saving section starts -->
  <section>
    <div class="custom-container">
      <div class="statistics-banner">
        <div class="d-flex justify-content-between align-items-center">
          <div class="total-amount">
            <h3>Total Saving</h3>
            <h2>$9,21,908.89</h2>
          </div>
        </div>
        <div class="saving-slider">
          <input id="range-slider__range" type="range" value="40" />

          <!-- <span id="range-slider__value">40</span> -->
        </div>

        <div class="left-amount">
          <h5>Amount left</h5>
          <h5 class="text-white fw-semibold">$4,380.50</h5>
        </div>
      </div>
    </div>
  </section>
  <!-- total saving section end -->

  <!-- saving plans section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="row gy-3">
        <div class="col-6">
          <div class="saving-plan-box">
            <a href="#saving" data-bs-toggle="modal">
              <div class="saving-plan-icon">
                <img class="img-fluid" src="assets/images/svg/10.svg" alt="p10" />
              </div>
              <h3>New Car</h3>
              <h6>Amount left</h6>
              <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bar1"></div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <h5 class="theme-color">$2,000.00</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="saving-plan-box">
            <a href="#saving" data-bs-toggle="modal">
              <div class="saving-plan-icon">
                <img class="img-fluid" src="assets/images/svg/11.svg" alt="p11" />
              </div>
              <h3>Grand Home</h3>
              <h6>Amount left</h6>
              <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bar2"></div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <h5 class="theme-color">$2,000.00</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="saving-plan-box">
            <div class="saving-plan-icon">
              <img class="img-fluid" src="assets/images/svg/12.svg" alt="p12" />
            </div>
            <h3>Game Consoler</h3>
            <h6>Amount left</h6>
            <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
              aria-valuemax="100">
              <div class="progress-bar bar3"></div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <h5 class="theme-color">$499.33</h5>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="saving-plan-box">
            <a href="#saving" data-bs-toggle="modal">
              <div class="saving-plan-icon">
                <img class="img-fluid" src="assets/images/svg/13.svg" alt="p13" />
              </div>
              <h3>Education</h3>
              <h6>Amount left</h6>
              <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bar4"></div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <h5 class="theme-color">$452.00</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="saving-plan-box">
            <a href="#saving" data-bs-toggle="modal">
              <div class="saving-plan-icon">
                <img class="img-fluid" src="assets/images/svg/14.svg" alt="p14" />
              </div>
              <h3>Television</h3>
              <h6>Amount left</h6>
              <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bar5"></div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <h5 class="theme-color">$1,062.00</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-6">
          <div class="saving-plan-box">
            <a href="#saving" data-bs-toggle="modal">
              <div class="saving-plan-icon">
                <img class="img-fluid" src="assets/images/svg/15.svg" alt="p15" />
              </div>
              <h3>Birthday Gift</h3>
              <h6>Amount left</h6>
              <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bar6"></div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <h5 class="theme-color">$100.00</h5>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- saving plans section end -->

  <!-- add savings modal starts -->
  <div class="modal add-money-modal fade" id="add-goals" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Add Money</h2>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="inputcategory" class="form-label mb-2">Category</label>
            <div class="d-flex gap-2">
              <select id="inputcategory" class="form-select">
                <option selected>Select category</option>
                <option>New Bike</option>
                <option>Traveling</option>
                <option>Shopping</option>
                <option>Entertainment</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Title</label>
            <div class="form-input mb-3">
              <input type="text" class="form-control" placeholder="Add title" />
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Saving amount</label>
            <div class="form-input mb-3">
              <input type="text" class="form-control" placeholder="Add amount" />
            </div>
          </div>
          <a href="#done-add" data-bs-toggle="modal" class="btn theme-btn successfully w-100">Add saving plan</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- add savings modal end -->

  <!--successful added modal start -->
  <div class="modal error-modal fade" id="done-add" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Successfully Added</h2>
        </div>
        <div class="modal-body">
          <div class="saving-img">
            <img class="img-fluid" src="assets/images/svg/15.svg" alt="p15" />
          </div>
          <h3>We've added your additional savings strategy to the list.</h3>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- successful added modal end -->

  <!-- successful bill modal start -->
  <div class="modal successful-modal fade" id="saving" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Saving For New Car</h2>
        </div>
        <div class="modal-body">
          <div class="saving-img">
            <img class="img-fluid" src="assets/images/svg/10.svg" alt="p10" />
          </div>

          <ul class="details-list border-0">
            <li>
              <h3 class="fw-normal dark-text">Saving amount</h3>
              <h3 class="fw-normal theme-color">$2000.00</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Due amount</h3>
              <h3 class="fw-normal light-text">$3500.00</h3>
            </li>
          </ul>
          <a href="saving-plans.php" class="btn theme-btn successfully w-100">Okay !</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- successful bill modal end -->

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


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/saving-plans.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:30 GMT -->
</html>