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
        <img class="img-fluid logo" src="assets/images/logo/logo.png" alt="logo" />

        <a href="notification.php" class="notification">
          <i class="notification-icon" data-feather="bell"></i>
        </a>
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
            <h5 class="fw-semibold">Total Balance</h5>
            <img src="assets/images/svg/ellipse.svg" alt="ellipse" />
          </div>

          <h1 class="mt-2 text-white">$ 1,06,786.65</h1>

          <div class="amount-details">
            <div class="amount w-50 text-start">
              <div class="d-flex align-items-center justify-content-start">
                <img class="img-fluid icon" src="assets/images/svg/arrow-down-right.svg" alt="down" />
                <h5>Income</h5>
              </div>
              <h3 class="text-white">$ 15,256.33</h3>
            </div>
            <div class="amount w-50 text-end border-0">
              <div class="d-flex align-items-center justify-content-end">
                <img class="img-fluid icon" src="assets/images/svg/arrow-up-right.svg" alt="up" />
                <h5>Expense</h5>
              </div>
              <h3 class="text-white">$ 91,530.32</h3>
            </div>
          </div>
        </div>
        <a href="#add-money" class="add-money theme-color" data-bs-toggle="modal">+ Add Money</a>
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
            <h5 class="mt-2 text-center">Transfer</h5>
          </a>
        </li>
        <li>
          <a href="bill.php">
            <div class="categories-box">
              <i class="categories-icon" data-feather="file-text"></i>
            </div>
            <h5 class="mt-2 text-center">Bill</h5>
          </a>
        </li>
        <li>
          <a href="request.php">
            <div class="categories-box">
              <i class="categories-icon icon1" data-feather="log-in"></i>
            </div>
            <h5 class="mt-2 text-center">Request</h5>
          </a>
        </li>
        <li>
          <a href="withdraw.php">
            <div class="categories-box">
              <i class="iconsax categories-icon" data-icon="bank"></i>
            </div>
            <h5 class="mt-2 text-center">Withdraw</h5>
          </a>
        </li>
      </ul>
    </div>
  </section>
  <!-- categories section end -->

  <!-- service section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Select service</h2>
        <a href="service.php">See all</a>
      </div>
      <div class="row gy-3">
        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="activity"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Electricity</h5>
          </a>
        </div>

        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="droplet"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Water</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="wifi"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Internet</h5>
          </a>
        </div>

        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="monitor"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Television</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="bar-chart-2"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Investment</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="tablet"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Mobile</h5>
          </a>
        </div>
        <div class="col-3">
          <a href="service.php">
            <div class="service-box">
              <i class="service-icon" data-feather="plus-square"></i>
            </div>
            <h5 class="mt-2 text-center dark-text">Medical</h5>
          </a>
        </div>
        <div class="col-3">
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

  <!-- quick send section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Quick send to</h2>
        <a href="scan-pay.php">See all</a>
      </div>
    </div>
    <div class="quick-send">
      <div class="profile">
        <a href="scan-pay.php" class="profile new-profile">
          <div class="new-image">
            <i class="icon" data-feather="plus"></i>
          </div>
        </a>
      </div>

      <div class="profile">
        <a href="pay-money.php">
          <img class="img-fluid person-img" src="assets/images/person/p1.png" alt="p1" />
        </a>
        <h5>Mike</h5>
      </div>

      <div class="profile">
        <a href="pay-money.php">
          <img class="img-fluid person-img" src="assets/images/person/p2.png" alt="p2" />
          <h5>Michael</h5>
        </a>
      </div>

      <div class="profile">
        <a href="pay-money.php">
          <img class="img-fluid person-img" src="assets/images/person/p3.png" alt="p3" />
          <h5>Kristin</h5>
        </a>
      </div>

      <div class="profile">
        <a href="pay-money.php">
          <img class="img-fluid person-img" src="assets/images/person/p4.png" alt="p4" />
          <h5>Trunk</h5>
        </a>
      </div>

      <div class="profile">
        <a href="pay-money.php">
          <img class="img-fluid person-img" src="assets/images/person/p5.png" alt="p5" />
          <h5>Johnny</h5>
        </a>
      </div>
    </div>
  </section>
  <!-- quick send section end -->

  <!-- Transaction section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Transaction</h2>
        <a href="transaction-history.php">See all</a>
      </div>

      <div class="row gy-3">
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/1.svg" alt="p1" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Amazon prime</h5>
                  <h3 class="error-color">$199.<span>99</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Subscription</h5>
                  <h5 class="light-text">8:45 am</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/2.svg" alt="p2" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Apple store</h5>
                  <h3 class="success-color">$60.<span>30</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Installment</h5>
                  <h5 class="light-text">9:00 pm</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/3.svg" alt="p3" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Grocery shop</h5>
                  <h3 class="error-color">$55.<span>20</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Purchase</h5>
                  <h5 class="light-text">20 May</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/4.svg" alt="p4" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Sanpchat sub</h5>
                  <h3 class="success-color">$18.<span>10</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Bill pay</h5>
                  <h5 class="light-text">19 May</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="transaction-box">
            <a href="transaction-history.php" class="d-flex gap-3">
              <div class="transaction-image">
                <img class="img-fluid transaction-icon" src="assets/images/svg/5.svg" alt="p5" />
              </div>
              <div class="transaction-details">
                <div class="transaction-name">
                  <h5>Spotify music</h5>
                  <h3 class="success-color">$20.<span>50</span></h3>
                </div>
                <div class="d-flex justify-content-between">
                  <h5 class="light-text">Transfer</h5>
                  <h5 class="light-text">18 May</h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Transaction section end -->

  <!-- all cards section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>All Cards</h2>
        <a href="cards.php">See all</a>
      </div>

      <div class="swiper card-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="credit-card-box color1">
              <div class="card-logo">
                <img class="img-fluid" src="assets/images/svg/logo1.svg" alt="logo1" />
                <img class="img-fluid" src="assets/images/svg/card-chip.svg" alt="card-chip" />
              </div>
              <h6 class="card-number">**** **** **** 2563</h6>
              <h5 class="card-name">Survana Williams</h5>
              <h2 class="card-amount">$25,000.89</h2>
              <div class="d-block">
                <div class="card-date w-100">
                  <h6>Exp. date</h6>
                  <h6>cvv</h6>
                </div>
                <div class="card-numbers w-100">
                  <h6 class="text-white fw-semibold mt-1">12 /24</h6>
                  <h6 class="text-white fw-semibold mt-1">***</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="credit-card-box color2">
              <div class="card-logo">
                <img class="img-fluid" src="assets/images/svg/logo1.svg" alt="logo1" />
                <img class="img-fluid" src="assets/images/svg/card-chip.svg" alt="card-chip" />
              </div>
              <h6 class="card-number">**** **** **** 2563</h6>
              <h5 class="card-name">Survana Williams</h5>
              <h2 class="card-amount">$25,000.89</h2>
              <div class="d-block">
                <div class="card-date w-100">
                  <h6>Exp. date</h6>
                  <h6>cvv</h6>
                </div>
                <div class="card-numbers w-100">
                  <h6 class="text-white fw-semibold mt-1">12 /24</h6>
                  <h6 class="text-white fw-semibold mt-1">***</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="credit-card-box color3">
              <div class="card-logo">
                <img class="img-fluid" src="assets/images/svg/logo1.svg" alt="logo1" />
                <img class="img-fluid" src="assets/images/svg/card-chip.svg" alt="card-chip" />
              </div>
              <h6 class="card-number">**** **** **** 2563</h6>
              <h5 class="card-name">Survana Williams</h5>
              <h2 class="card-amount">$25,000.89</h2>
              <div class="d-block">
                <div class="card-date w-100">
                  <h6>Exp. date</h6>
                  <h6>Cvv</h6>
                </div>
                <div class="card-numbers w-100">
                  <h6 class="text-white fw-semibold mt-1">12 /24</h6>
                  <h6 class="text-white fw-semibold mt-1">***</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- all cards section end -->

  <!-- bill details section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>Bills Detail</h2>
        <a href="bill.php">See all</a>
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
              <a href="#pay" data-bs-toggle="modal" class="btn bill-pay bill-paid">Pay</a>
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
              <a href="#pay" data-bs-toggle="modal" class="btn bill-pay bill-paid">Pay</a>
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
              <a href="#pay" data-bs-toggle="modal" class="btn bill-pay bill-paid">Pay</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bill details section starts -->

  <!-- saving plans section starts -->
  <section>
    <div class="custom-container">
      <div class="title">
        <h2>My Saving Plans</h2>
        <a href="saving-plans.php">See all</a>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="saving-plan-box">
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
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="saving-plan-box">
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
              <img class="img-fluid arrow" src="assets/images/svg/arrow.svg" alt="arrow" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- saving plans section end -->

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
                  <h6>-Smith</h6>
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
                  <h6>-Laila</h6>
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
                  <h6>-Brunt</h6>
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
          <div class="form-group">
            <label for="inputcard" class="form-label mb-2">From</label>
            <div class="d-flex gap-2">
              <select id="inputcard" class="form-select">
                <option selected>**** **** **** 1566 - Saving a/c</option>
                <option>**** **** **** 1566 - Saving a/c</option>
                <option>**** **** **** 1566 - Saving a/c</option>
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

  <!-- pwa install app popup start -->
  <div class="offcanvas offcanvas-bottom addtohome-popup theme-offcanvas" tabindex="-1" id="offcanvas">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="offcanvas-body small">
      <div class="app-info">
        <img src="assets/images/logo/48.png" class="img-fluid" alt="" />
        <div class="content">
          <h4>mPay App</h4>
          <a href="#">www.mPay-app.com</a>
        </div>
      </div>
      <a href="#!" class="btn theme-btn install-app btn-inline home-screen-btn m-0" id="installapp">Add to Home
        Screen</a>
    </div>
  </div>
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