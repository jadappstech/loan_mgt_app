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
        <!-- <img class="img-fluid logo" src="assets/images/logo/logo.png" alt="logo" /> -->
        <h2>Payments</h2>
        <a href="notification.php" class="notification">
          <i class="notification-icon" data-feather="bell"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

  <!-- bottom navbar start -->
  <?php include_once "./includes/navbar.php"; ?>
  <!-- bottom navbar end -->

    <section class="section-b-space">
        <div class="custom-container">
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
        </div>
    </section>
    
  

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