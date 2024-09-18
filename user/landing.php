<?php include_once "./includes/header.php"?>
<body>
  <!-- side bar start -->
  <?php include_once "./includes/sidebar.php"?>
  <!-- side bar end -->

  <!-- header start -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a class="sidebar-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft">
          <i class="menu-icon" data-feather="menu"></i>
        </a>
        <!-- <img class="img-fluid logo" src="./../admin/img/centrum-logo.png" alt="logo" /> -->
        <h2>Dashboard</h2>
        <div style="display: flex; flex-direction: row;">
        <a href="notification.php" class="notification">
          <i class="notification-icon" data-feather="bell"></i>
        </a>
        <a href="profile.php" class="notification"
              style="margin-left:16px;">
          <i class="notification-icon" data-feather="user"></i>
        </a>
        </div>
        
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- card start -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="card-box">
        <div class="card-details">
          <div class="d-flex justify-content-between">
            <h5 class="fw-semibold">You can borrow</h5>
            <img src="assets/images/svg/ellipse.svg" alt="ellipse" />
          </div>

          <h1 class="mt-2 text-white"> &#x20A6;1,000,000.00</h1>

          <div class="amount-details">
            <div class="amount w-50 text-start">
              <div class="d-flex align-items-center justify-content-start">
                <img class="img-fluid icon" src="assets/images/svg/arrow-down-right.svg" alt="down" />
                <h5>You owe</h5>
              </div>
              <h3 class="text-white">&#x20A6;150,256.33</h3>
            </div>
            <div class="amount w-50 text-end border-0">
              <div class="d-flex align-items-center justify-content-end">
                <img class="img-fluid icon" src="assets/images/svg/arrow-up-right.svg" alt="up" />
                <h5>Ongoing Loans</h5>
              </div>
              <h3 class="text-white">2</h3>
            </div>
          </div>
        </div>
        <a href="#add-money" class="add-money theme-color" data-bs-toggle="modal"
            style="font-size:12px; font-weight:500;">+ Make Payments</a>
      </div>
    </div>
  </section>
  <!-- card end -->

  <!-- categories section starts -->
  <section class="categories-section section-b-space">
    <div class="custom-container">
      <ul class="categories-list">
        <li>
          <a href="transfer.php">
            <div class="categories-box">
              <i class="categories-icon" data-feather="repeat"></i>
            </div>
            <h5 class="mt-2 text-center">Payment</h5>
          </a>
        </li>
        <li>
          <a href="bill.php">
            <div class="categories-box">
              <!-- <i class="categories-icon" data-feather="file-text"></i> -->
              <svg class="categories-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card service-icon"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
            </div>
            <h5 class="mt-2 text-center">Cards</h5>
          </a>
        </li>
        <li>
          <a href="request.php">
            <div class="categories-box">
              <i class="categories-icon icon1" data-feather="log-in"></i>
            </div>
            <h5 class="mt-2 text-center">Loan History</h5>
          </a>
        </li>
        <li>
          <a href="withdraw.php">
            <div class="categories-box">
              <i class="iconsax categories-icon" data-icon="bank"></i>
            </div>
            <h5 class="mt-2 text-center">Support</h5>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- categories section end -->

   <!-- our loans section starts -->
   <section>
    <div class="custom-container">
      <div class="title">
        <h2>Our Loans</h2>
        <a href="cards.php">See all</a>
      </div>

      <div class="swiper card-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><a href="loan-application-1.php">
            <div class="credit-card-box color1">
              <div class="card-logo">
                <!-- <img class="img-fluid" src="assets/images/svg/logo1.svg" alt="logo1" /> -->
                 <h2 style="font-size: 20px; color: white;">Payday Loan</h2>
                <img class="img-fluid" src="assets/images/svg/card-chip.svg" alt="card-chip" />
              </div>
              <h6 class="card-number">You can get up to</h6>
              <h5 class="card-name">&nbsp;</h5>
              <h2 class="card-amount">&#x20A6;5,000,000</h2>
              <div class="d-block">
                <div class="card-date w-100">
                  <h6>Exp. date</h6>
                  <h6>cvv</h6>
                </div>
                <div class="card-numbers w-100">
                  <h6 class="text-white fw-semibold mt-1">-- /--</h6>
                  <h6 class="text-white fw-semibold mt-1">***</h6>
                </div>
              </div>
            </div>
          </a></div>
          <div class="swiper-slide"><a href="loan-application-1.php">
            <div class="credit-card-box color2">
              <div class="card-logo">
                <h2 style="font-size: 20px; color: white;">Salary Loan</h2>
                <img class="img-fluid" src="assets/images/svg/card-chip.svg" alt="card-chip" />
              </div>
              <!-- <h6 class="card-number">**** **** **** 2563</h6> -->
              <h6 class="card-number">You can get up to</h6>
              <h5 class="card-name">&nbsp;</h5>
              <h2 class="card-amount">&#x20A6;25,000,000</h2>
              <div class="d-block">
                <div class="card-date w-100">
                  <h6>Exp. date</h6>
                  <h6>cvv</h6>
                </div>
                <div class="card-numbers w-100">
                  <h6 class="text-white fw-semibold mt-1">--/--</h6>
                  <h6 class="text-white fw-semibold mt-1">***</h6>
                </div>
              </div>
            </div></a>
          </div>
          <div class="swiper-slide"><a href="loan-application-1.php">
            <div class="credit-card-box color3">
              <div class="card-logo">
                <h2 style="font-size: 20px; color: white;">Business Loan</h2>
                <img class="img-fluid" src="assets/images/svg/card-chip.svg" alt="card-chip" />
              </div>
              <h6 class="card-number">You can get up to</h6>
              <h5 class="card-name">&nbsp;</h5>
              <h2 class="card-amount">&#x20A6;50,000,000</h2>
              <div class="d-block">
                <div class="card-date w-100">
                  <h6>Exp. date</h6>
                  <h6>cvv</h6>
                </div>
                <div class="card-numbers w-100">
                  <h6 class="text-white fw-semibold mt-1">--/--</h6>
                  <h6 class="text-white fw-semibold mt-1">***</h6>
                </div>
              </div>
            </div>
          </div></a>
        </div>
      </div>
    </div>
  </section>
  <!-- our loans section end -->

  <!-- service section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Get a quick Loan for </h2>
        <!-- <a href="service.php">See all</a> -->
      </div>
      <div class="row gy-3">
        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="activity"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">School Fees</h5>
          </a>
        </div>

        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="tablet"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Foodstuff</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="wifi"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Gadget Purchase</h5>
          </a>
        </div>
        
        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="more-horizontal"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Others</h5>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- service section end -->

  <!-- monthly statistics section starts -->
  <section>
    <div class="custom-container">
      <div class="statistics-banner">
        <div class="d-flex justify-content-center gap-3">
          <div class="statistics-image">
            <i class="icon" data-feather="bar-chart-2"></i>
          </div>
          <div class="statistics-content d-block">
            <h5>Monthly Statistics</h5>
            <h6>30% better performance than previous</h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- monthly statistics section end -->

  <!-- news-update section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="title">
        <h2>News Update</h2>
        <a href="news-update.php">See all</a>
      </div>
      <div class="row gy-3">
        <div class="col-12">
          <div class="news-update-box">
            <div class="d-flex align-items-center gap-3">
              <a href="news-update-details.php">
                <img class="img-fluid news-update-image" src="assets/images/1.jpg" alt="img1" />
              </a>
              <div class="news-update-content">
                <a href="news-update-details.php">
                  <h3>Save and invest to obtain more</h3>
                </a>
                <div class="news-writer">
                  <h6>13 May, 23</h6>
                  <h6>-Kehinde</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="news-update-box">
            <div class="d-flex align-items-center gap-3">
              <a href="news-update-details.php">
                <img class="img-fluid news-update-image" src="assets/images/2.jpg" alt="img2" />
              </a>
              <div class="news-update-content">
                <a href="news-update-details.php">
                  <h3>How to get more money from savings</h3>
                </a>
                <div class="news-writer">
                  <h6>10 May, 23</h6>
                  <h6>-Waziri</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="news-update-box">
            <div class="d-flex align-items-center gap-3">
              <a href="news-update-details.php">
                <img class="img-fluid news-update-image" src="assets/images/3.jpg" alt="img3" />
              </a>
              <div class="news-update-content">
                <a href="news-update-details.php">
                  <h3>5 Tips on expand your business</h3>
                </a>
                <div class="news-writer">
                  <h6>6 May, 23</h6>
                  <h6>-Ola</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- news-update section end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  <!-- bottom navbar start -->
  <?php include_once "./includes/navbar.php"; ?>
  <!-- bottom navbar end -->

  <!-- add money modal start -->
  <div class="modal add-money-modal fade" id="add-money" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title">Add Money</h2>
        </div>
        <div class="modal-body">
          <ul class="nav nav-pills tab-style1 mt-0" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="pill" data-bs-target="#home"
                      type="button" role="tab">Make Payment</button>
              </li>
              <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="pill" data-bs-target="#profile"
                      type="button" role="tab">Submit Proof of Payment</button>
              </li>
          </ul>
          <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade p-2 show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                  tabindex="0">
                  <div class="form-group">
                    <label for="inputcard" class="form-label mb-2">Choose Loan to repay</label>
                    <div class="d-flex gap-2">
                      <select id="inputcard" class="form-select">
                        <option selected>Select one</option>
                        <option>APP412X-01</option>
                        <option>APP5483P-66</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputcard" class="form-label mb-2">From</label>
                    <div class="d-flex gap-2">
                      <select id="inputcard" class="form-select">
                        <option selected>**** **** **** 1566 - Saving a/c</option>
                        <option>**** **** **** 3832 - Current a/c</option>
                        <option>**** **** **** 1256 - Saving a/c</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputamount" class="form-label mb-2">Amount</label>
                    <div class="form-input">
                      <input type="number" class="form-control" id="inputamount" />
                    </div>
                  </div>
                  <a href="landing.php" class="btn theme-btn successfully w-100">Deposit</a>
              </div>
              <div class="tab-pane fade p-2" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                  <div class="tab-pane fade p-2 show active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="form-group">
                      <form class="auth-form" target="_blank">
                        <div class="custom-container">
                            <div class="form-group">
                                <div class="upload-image rounded-image">
                                    <label for="formFileLg" class="form-label d-none">file </label>
                                    <input class="form-control upload-file" type="file" id="formFileLg" accept="image/*, application/pdf">
                                    <i class="upload-icon dark-text" data-feather="plus"></i>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <a href="landing.php" class="btn theme-btn successfully w-100">Submit Proof of Payment</a>
                </div>
              </div>
          </div>
          
          <!-- <a href="landing.php" class="btn theme-btn successfully w-100">Deposit</a> -->
        </div>
        <button type="button" class="btn close-btn" data-bs-dismiss="modal">
          <i class="icon" data-feather="x"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- add money modal end -->

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
              <h3 class="fw-semibold theme-color">&#x20A6;49.85</h3>
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
              <h3 class="fw-semibold theme-color">&#x20A6;69.49</h3>
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

  <!-- pwa install app popup start -->
  <!-- <div class="offcanvas offcanvas-bottom addtohome-popup theme-offcanvas" tabindex="-1" id="offcanvas">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="offcanvas-body small">
      <div class="app-info">
        <img src="assets/images/logo/48.png" class="img-fluid" alt="" />
        <div class="content">
          <h4>myLoan App</h4>
          <a href="#">www.example.com</a>
        </div>
      </div>
      <a href="#!" class="btn theme-btn install-app btn-inline home-screen-btn m-0" id="installapp">Add to Home
        Screen</a>
    </div>
  </div> -->
  <!-- pwa install app popup start -->

  <!-- swiper js -->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/custom-swiper.js"></script>

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- iconsax js -->
  <script src="assets/js/iconsax.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- homescreen popup js -->
  <script src="assets/js/homescreen-popup.js"></script>

  <!-- PWA offcanvas popup js -->
  <script src="assets/js/offcanvas-popup.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/landing.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:07:49 GMT -->
</html>