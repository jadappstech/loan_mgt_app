<?php include_once "./includes/header.php"?>
<body>
  <!-- side bar start -->
  <?php include_once "./includes/sidebar.php"?>
  <!-- side bar end -->

   <!-- header start -->
   <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="landing.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>My Applications</h2>

        <a href="#add-goals" class="back-btn" data-bs-toggle="modal">
          <i class="icon" data-feather="plus"></i>
        </a>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- bottom navbar start -->
  <?php include_once "./includes/navbar.php"; ?>
  <!-- bottom navbar end -->

  
  <!-- total saving section starts -->
  
  <!-- total saving section end -->

  <!-- saving plans section starts -->
  <section class="section-b-space">
    <div class="custom-container">
      <div class="row gy-3">
        <div class="col-12">
          <div class="saving-plan-box">
            <a href="#saving" data-bs-toggle="modal">
              <div class="saving-plan-icon">
                <!-- <img class="img-fluid" src="assets/images/svg/10.svg" alt="p10" /> -->
              </div>
              <h3>APP412X-01</h3>
              <h6>Amount left</h6>
              <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bar1"></div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <h5 class="theme-color">&#x20A6;182,000.11</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="saving-plan-box">
            <a href="#saving" data-bs-toggle="modal">
              <div class="saving-plan-icon">
                <!-- <img class="img-fluid" src="assets/images/svg/11.svg" alt="p11" /> -->
              </div>
              <h3>APP5483P-66</h3>
              <h6>Amount left</h6>
              <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bar2"></div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <h5 class="theme-color">&#x20A6;78,000.08</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="saving-plan-box bg-warning">
            <div class="saving-plan-icon bg-warning">
              <img class="img-fluid" src="assets/images/svg/12.svg" alt="p12" />
            </div>
            <h3>APP5483P-66</h3>
            <h6>Amount left</h6>
            <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bar"></div>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-2">
              <h5 class="theme-color">&#x20A6;499,000.</h5>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="saving-plan-box bg-success">
            <a href="#saving" data-bs-toggle="modal">
              <div class="saving-plan-icon bg-success">
                <img class="img-fluid" src="assets/images/svg/13.svg" alt="p13" />
              </div>
              <h3>Education</h3>
              <h6>Amount left</h6>
              <div class="progress" role="progressbar" aria-label="progressbar" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar w-100"></div>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-2">
                <h5 class="theme-color">&#x20A6;449,00.00</h5>
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
          <h2 class="modal-title">APP5483P-66</h2>
        </div>
        <div class="modal-body">
          <div class="saving-img">
            <img class="img-fluid" src="assets/images/svg/10.svg" alt="p10" />
          </div>

          <ul class="details-list border-0">
            <li>
              <h3 class="fw-normal dark-text">Amount left</h3>
              <h3 class="fw-normal theme-color">&#x20A6;182,000.11</h3>
            </li>
            <li>
              <h3 class="fw-normal dark-text">Total amount</h3>
              <h3 class="fw-normal light-text">&#x20A6;350,000.00</h3>
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
  
  <!-- panel-space start -->
  <section class="panel-space"></section>
  <!-- panel-space end -->

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