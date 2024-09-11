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
  <!-- bottom navbar start -->
  <?php include_once "./includes/navbar.php"; ?>
  <!-- bottom navbar end -->

  <section class="section-b-space" style="padding-bottom: 90px">
    <div class="custom-container">
      <!-- progressbar -->
      <ul id="progressbar" style="text-align: center;">
        <li class="active" id="biodata"><strong>Biodata</strong></li>
        <li class="active" id="loan"><strong>Loan Details</strong></li>
        <li id="verification"><strong>Verification</strong></li>
        <li id="disbursment"><strong>Disbursment</strong></li>
      </ul>           
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">

									<div class="card-body">
										<div class="row gutters gy-4 mb-4">
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Full Name <span class="text-danger">*</span></div>
													<input class="form-control" type="text" name="full_name">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Email Address <span class="text-danger">*</span></div>
													<input class="form-control" type="email" name="email_address">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Phone Number <span class="text-danger">*</span></div>
													<input class="form-control" type="text" name="phone_number">
												</div>
											</div>
											<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Residential Address <span class="text-danger">*</span></div>
													<input class="form-control" type="text" name="residential_address">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Date of Birth <span class="text-danger">*</span></div>
													<input class="form-control" type="date" name="date_of_birth">
												</div>
											</div>
										</div>

										<div class="row gutters gy-4 mb-4">
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Employer/Business Name</div>
													<input class="form-control" type="text" name="employer_business_name">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Monthly Income</div>
													<input class="form-control" type="number" name="monthly_income">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Monthly Expenses</div>
													<input class="form-control" type="number" name="monthly_expenses">
												</div>
											</div>
										</div>

										<div class="row gutters gy-4">
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
												<label for="proof_of_identity">Proof of Identity:</label>
												<input type="file" class="form-control-file" id="proof_of_identity" name="proof_of_identity">
												<small class="form-text text-muted">e.g., National ID, Passport</small>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
												<label for="proof_of_address">Proof of Address:</label>
												<input type="file" class="form-control-file" id="proof_of_address" name="proof_of_address">
												<small class="form-text text-muted">e.g., Utility Bill</small>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
												<label for="proof_of_income">Proof of Income:</label>
												<input type="file" class="form-control-file" id="proof_of_income" name="proof_of_income">
												<small class="form-text text-muted">e.g., Payslips, Bank Statements</small>
												</div>
											</div>
										</div>
									</div> 
								</div>
								<!-- Card end -->

								<!-- <div class="card">
									<div class="card-header">
										<div class="card-title">Collateral Details (if applicable)</div>
									</div>
									<div class="card-body">
										<div class="row gutters">
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<select class="form-control" name="collateral_type">
														<option value="" disabled selected>Collateral Type</option>
														<option value="real_estate">Real Estate</option>
														<option value="vehicle">Vehicle</option>
														<option value="savings">Savings Account</option>
														<option value="other">Other</option>
													</select>
													<div class="field-placeholder">Collateral Type</div>
												</div>
											</div>
											<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
												<div class="field-wrapper">
													<input class="form-control" type="text" name="collateral_description">
													<div class="field-placeholder">Description of Collateral</div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<input class="form-control" type="number" name="collateral_value">
													<div class="field-placeholder">Estimated Value</div>
												</div>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" name="collateral_documents_instruction">
												<div class="field-wrapper">
													<div class="form-text">
														Please attach any relevant documents related to the collateral (e.g., property title, vehicle registration, etc.).
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->

								<div class="card mt-4">
									<div class="card-header">
										<div class="card-title">Guarantor Details</div>
									</div>
									<div class="card-body">
										<div class="row gutters gy-4">
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Guarantor's Full Name</div>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Guarantor's Email Address</div>
													<input class="form-control" type="email">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Guarantor's Phone Number</div>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Guarantor's Residential Address</div>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<div class="field-placeholder">Relationship to Guarantor</div>
													<input class="form-control" type="text">
												</div>
											</div>
											<div class="row gutters gy-4">
												<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
													<div class="field-wrapper">
													<label for="proof_of_identity">Proof of Identity:</label>
													<input type="file" class="form-control-file" id="proof_of_identity" name="proof_of_identity">
													<small class="form-text text-muted">e.g., National ID, Passport</small>
													</div>
												</div>
												<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
													<div class="field-wrapper">
													<label for="proof_of_address">Proof of Address:</label>
													<input type="file" class="form-control-file" id="proof_of_address" name="proof_of_address">
													<small class="form-text text-muted">e.g., Utility Bill</small>
													</div>
												</div>
												<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
													<div class="field-wrapper">
                            <label for="proof_of_income">Proof of Income:</label>
                            <input type="file" class="form-control-file" id="proof_of_income" name="proof_of_income">
                            <small class="form-text text-muted">e.g., Payslips, Bank Statements</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="row gutters card-body">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<a href="./loan-application-2.php">
												<!-- <button class="btn btn-primary">Previous</button> -->
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
