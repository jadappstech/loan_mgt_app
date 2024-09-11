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
        <h2>Loan Application</h2>

        <!-- <div class="dropdown">
          <a href="#" class="back-btn" role="button" data-bs-toggle="dropdown">
            <i class="icon" data-feather="settings"></i>
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Mute notification</a></li>
            <li><a class="dropdown-item" href="#">Mark as all read</a></li>
            <li><a class="dropdown-item" href="#">Remove all</a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </header>
  <!-- header end -->
  <!-- bottom navbar start -->
  <!-- <?php include_once "./includes/navbar.php"; ?> -->
  <!-- bottom navbar end -->

  <section class="section-b-space" style="padding-bottom: 5.625rem">
    <div class="custom-container">
      <!-- progressbar -->
      <ul id="progressbar" style="text-align: center;">
        <li class="active" id="biodata"><strong>Biodata</strong></li>
        <li class="active" id="loan"><strong>Loan Details</strong></li>
        <li id="verification"><strong>Verification</strong></li>
        <li id="disbursment"><strong>Disbursment</strong></li>
      </ul>     
      <div class="card">
        <div class="card-body">
          <div class="row gutters gy-4">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
              <div class="field-wrapper">
                <div class="field-placeholder">Loan Type <span class="text-danger">*</span></div>
                <select class="form-control" name="loan_type">
                  <option value="" disabled selected>Loan Type</option>
                  <option value="personal">Payday Loan</option>
                  <option value="salary loan">Salary Loan</option>
                  <option value="business">Business Loan</option>
                </select>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
              <div class="field-wrapper">
                <div class="field-placeholder">Loan Amount Requested <span class="text-danger">*</span></div>
                <input class="form-control" type="number" name="loan_amount">
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
              <div class="field-wrapper">
                <div class="field-placeholder">Repayment Term <span class="text-danger">*</span></div>
                <select class="form-control" name="repayment_term">
                  <option value="" disabled selected>Repayment Term</option>
                  <option value="12">12 Months</option>
                  <option value="24">24 Months</option>
                  <option value="36">36 Months</option>
                </select>
              </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="field-wrapper">
                <div class="field-placeholder">Purpose of Loan <span class="text-danger">*</span></div>
                <textarea class="form-control" rows="2" name="loan_purpose"></textarea>
              </div>
            </div>

          </div> 
          <div class="card mt-4">
            <div class="card-header">
              <div class="card-title">Account Information</div>
            </div>
            <div class="row gy-4">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Bank Name</div>
                  <input class="form-control" type="text" name="bank_name">
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Account Number</div>
                  <input class="form-control" type="text" name="account_number">
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Account Type</div>
                  <select class="form-control" name="account_type">
                    <option value="" disabled selected>Account Type</option>
                    <option value="savings">Savings</option>
                    <option value="salary">Salary</option>
                    <option value="current">Current</option>
                    <option value="corporate">Corporate</option>
                  </select>
                </div>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Payment Type</div>
                  <select class="form-control" name="account_type">
                    <option value="" disabled selected>Payment Type</option>
                    <option value="savings">Manual payment</option>
                    <option value="savings">Automated Deductions</option>
                  </select>
                </div>
              </div>
  
            </div>
          </div>

          <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <a href="./loan-application-1.php">
                <button class="btn btn-secondary">Previous</button>
              </a>
              <a href="./loan-application-3.php">
                <button class="btn btn-primary">Next</button> 
              </a>
            </div>
          </div>
        </div>
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
</html>
