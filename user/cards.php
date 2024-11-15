<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/cards.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:27 GMT -->
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
        <h2>My cards</h2>

        <a href="#add-card" class="back-btn" data-bs-toggle="modal">
          <i class="icon" data-feather="plus"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- cards section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <ul class="card-list">
        <li class="credit-card-box color1">
          <div class="card-logo">
            <img class="img-fluid" src="assets/images/svg/logo1.svg" alt="logo1" />
            <div class="dropdown">
              <a href="#" class="back-btn" role="button" data-bs-toggle="dropdown">
                <i class="icon" data-feather="more-horizontal"></i>
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#edit-card" data-bs-toggle="modal">Edit</a></li>
                <li><a class="dropdown-item" href="#delate" data-bs-toggle="modal">Remove</a></li>
              </ul>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="card-number">**** **** **** 2563</h6>
              <h5 class="card-name">You can borrow</h5>
            </div>
            <img class="img-fluid chip" src="assets/images/svg/card-chip.svg" alt="card-chip" />
          </div>
          <div class="d-flex justify-content-between">
            <h2 class="card-amount">&#8358;25,000.89</h2>
            <div class="card-date w-100">
              <h6>Exp. date</h6>
              <h6 class="text-white fw-semibold mt-1">12 /26</h6>
            </div>
            <div class="card-numbers w-100">
              <h6 class="cvv-code">Cvv</h6>
              <h6 class="text-white fw-semibold mt-1">***</h6>
            </div>
          </div>
        </li>

        <li class="credit-card-box color2">
          <div class="card-logo">
            <img class="img-fluid" src="assets/images/svg/logo1.svg" alt="logo1" />
            <div class="dropdown">
              <a href="#" class="back-btn" role="button" data-bs-toggle="dropdown">
                <i class="icon" data-feather="more-horizontal"></i>
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#edit-card" data-bs-toggle="modal">Edit</a></li>
                <li><a class="dropdown-item" href="#delate" data-bs-toggle="modal">Remove</a></li>
              </ul>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="card-number">**** **** **** 3478</h6>
              <h5 class="card-name">You can borrow</h5>
            </div>
            <img class="img-fluid chip" src="assets/images/svg/card-chip.svg" alt="card-chip" />
          </div>
          <div class="d-flex justify-content-between">
            <h2 class="card-amount">&#8358;15,256.25</h2>
            <div class="card-date w-100">
              <h6>Exp. date</h6>
              <h6 class="text-white fw-semibold mt-1">02 /25</h6>
            </div>
            <div class="card-numbers w-100">
              <h6 class="cvv-code">Cvv</h6>
              <h6 class="text-white fw-semibold mt-1">***</h6>
            </div>
          </div>
        </li>
        <li class="credit-card-box color3">
          <div class="card-logo">
            <img class="img-fluid" src="assets/images/svg/logo1.svg" alt="logo1" />
            <div class="dropdown">
              <a href="#" class="back-btn" role="button" data-bs-toggle="dropdown">
                <i class="icon" data-feather="more-horizontal"></i>
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#edit-card" data-bs-toggle="modal">Edit</a></li>
                <li><a class="dropdown-item" href="#delate" data-bs-toggle="modal">Remove</a></li>
              </ul>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h6 class="card-number">**** **** **** 1256</h6>
              <h5 class="card-name">You can borrow</h5>
            </div>
            <img class="img-fluid chip" src="assets/images/svg/card-chip.svg" alt="card-chip" />
          </div>
          <div class="d-flex justify-content-between">
            <h2 class="card-amount">&#8358;5,256.89</h2>
            <div class="card-date w-100">
              <h6>Exp. date</h6>
              <h6 class="text-white fw-semibold mt-1">12 /24</h6>
            </div>
            <div class="card-numbers w-100">
              <h6 class="cvv-code">Cvv</h6>
              <h6 class="text-white fw-semibold mt-1">***</h6>
            </div>
          </div>
        </li>
       

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#edit-card" data-bs-toggle="modal">Edit</a></li>
                <li><a class="dropdown-item delate" href="#delate" data-bs-toggle="modal">Remove</a></li>
              </ul>
            </div>
          </div>
          
        </li>
      </ul>
    </div>
  </section>
  <!-- cards section end -->

  <!-- add card modal starts -->
  <div class="modal add-money-modal fade" id="add-card" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Add Card</h2>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="inputcards" class="form-label mb-2">Card type</label>
            <div class="d-flex gap-2">
              <select id="inputcards" class="form-select">
                <option selected>Select card type</option>
                <option>Master Card</option>
                <option>Visa Card</option>
                <option>RuPay Card</option>
                <option>Business Card</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Card Number</label>
            <div class="form-input mb-3">
              <input type="text" class="form-control" placeholder="Enter card number" />
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

          <a href="cards.php" class="btn theme-btn successfully w-100">Add Card</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- add card modal end -->

  <!-- edit card modal starts -->
  <div class="modal add-money-modal fade" id="edit-card" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Edit Card</h2>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="inputcard" class="form-label mb-2">Card type</label>
            <div class="d-flex gap-2">
              <select id="inputcard" class="form-select">
                <option>Select card type</option>
                <option>Master Card</option>
                <option selected>Visa Card</option>
                <option>RuPay Card</option>
                <option>Business Card</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputcardnumber" class="form-label">Card Number</label>
            <div class="form-input">
              <input type="text" class="form-control" id="inputcardnumber" value="**** **** **** 2563"
                placeholder="Enter card number" />
            </div>
          </div>

          <div class="row">
            <div class="col-7">
              <div class="form-group">
                <label class="form-label">Exp. Date</label>
                <div class="form-input mb-3">
                  <input type="date" value="2024-12-31" class="form-control" />
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

          <a href="cards.php" class="btn theme-btn successfully w-100">Edit Card</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- edit card modal end -->

  <!-- delate card modal start -->
  <div class="modal error-modal fade" id="delate" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="error-img">
            <img class="img-fluid" src="assets/images/svg/delate.svg" alt="delate" />
          </div>
          <h3>Are you sure you want to delete this card ?</h3>
          <a href="#done-delate" class="btn theme-btn successfully w-100" data-bs-toggle="modal">Delete card</a>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- delate card modal end -->

  <!--successful delate card modal start -->
  <div class="modal error-modal fade" id="done-delate" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Successfully Delete</h2>
        </div>
        <div class="modal-body">
          <div class="error-img">
            <img class="img-fluid" src="assets/images/svg/delate.svg" alt="delate" />
          </div>
          <h3>Are you sure you want to delete this card ?</h3>
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- successful delate card modal end -->

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


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/cards.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:28 GMT -->
</html>