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
        <li id="loan"><strong>Loan Details</strong></li>
        <li id="verification"><strong>Verification</strong></li>
        <li id="disbursment"><strong>Disbursment</strong></li>
      </ul>  

      <div class="bg-white shadow-md rounded-lg p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">First Name <span class="text-red-500">*</span></label>
            <input class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="number" name="loan_amount" placeholder="Enter First Name">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Middle Name <span class="text-red-500">*</span></label>
            <input class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="number" name="loan_amount" placeholder="Enter Middle Name">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Last Name <span class="text-red-500">*</span></label>
            <input class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="number" name="loan_amount" placeholder="Enter Last Name">
          </div>
          <div class="mb-4 md:cols-span-2">
            <label class="block text-gray-700 text-sm font-bold mb-2">Email Address<span class="text-red-500">*</span></label>
            <input class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="number" name="loan_amount" placeholder="Enter Last Name">
          </div>

          <!-- Loan Amount -->
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Loan Amount Requested <span class="text-red-500">*</span></label>
            <input class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="number" name="loan_amount" placeholder="Enter amount">
          </div>

          <!-- Repayment Term -->
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Repayment Term <span class="text-red-500">*</span></label>
            <select class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="repayment_term">
              <option value="" disabled selected>Select Repayment Term</option>
              <option value="12">12 Months</option>
              <option value="24">24 Months</option>
              <option value="36">36 Months</option>
            </select>
          </div>

          <!-- Purpose of Loan -->
          <div class="md:col-span-3">
            <label class="block text-gray-700 text-sm font-bold mb-2">Purpose of Loan <span class="text-red-500">*</span></label>
            <textarea class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" rows="2" name="loan_purpose" placeholder="Describe the purpose"></textarea>
          </div>

        </div>

        <!-- Account Information Section -->
        <div class="bg-gray-100 p-4 mt-6 rounded-lg">
          <h3 class="text-lg font-bold mb-4">Account Information</h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
            <!-- Bank Name -->
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">Bank Name</label>
              <input class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="bank_name" placeholder="Enter bank name">
            </div>

            <!-- Account Number -->
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">Account Number</label>
              <input class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" name="account_number" placeholder="Enter account number">
            </div>

            <!-- Account Type -->
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">Account Type</label>
              <select class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="account_type">
                <option value="" disabled selected>Select Account Type</option>
                <option value="savings">Savings</option>
                <option value="salary">Salary</option>
                <option value="current">Current</option>
                <option value="corporate">Corporate</option>
              </select>
            </div>

            <!-- Payment Type -->
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2">Payment Type</label>
              <select class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="payment_type">
                <option value="" disabled selected>Select Payment Type</option>
                <option value="manual">Manual Payment</option>
                <option value="automated">Automated Deductions</option>
              </select>
            </div>

          </div>
        </div>

        <!-- Buttons -->
        <div class="flex justify-between mt-6">
          <a href="./loan-application-1.php" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600">Previous</a>
          <a href="./loan-application-3.php" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">Next</a>
        </div>

      </div>


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
