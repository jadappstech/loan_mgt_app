<?php
  require_once '../db/Database.php'; 
  $message = "";
  
  if (isset($_GET['user'])) {
    $userId = $_GET['user'];
    $conn = Database::getInstance();
    $stmt = $conn->prepare("SELECT firstname FROM users WHERE id = :id");
    $stmt->bindParam(':id', $userId);

    if ($stmt->execute()) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $firstname = $result['firstname'];
    } else {
        $message = "Failed to submit form!";
    }
  } else {
      // Handle the case where the 'user' parameter is not set
      $message = "User ID is missing.";
  }

  // Check if form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $nokFname = $_POST['nok-fname'];
    $nokMname = $_POST['nok-mname'];
    $nokLname = $_POST['nok-lname'];
    $nokAddress = $_POST['nok-address'];
    $nokPhone = $_POST['nok-phone'];
    $nokEmail = $_POST['nok-email'];
    $nokGender = $_POST['nok-gender'];
    $nokRelationship = $_POST['nok-relationship'];

    // $stmt = $conn->prepare("INSERT INTO next_of_kin (nok_firstname, nok_middlename, nok_surname, nok_address, nok_phone, nok_email, nok_relationship) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param("ssssssss", $nokFname, $nokMname, $nokLname, $nokAddress, $nokPhone, $nokEmail, $nokRelationship);
    $stmt = $conn->prepare("UPDATE users SET nok_firstname = ?, nok_surname = ?, nok_address = ?, nok_phone = ?, nok_email = ?, nok_relationship = ? WHERE id = ?");
    $stmt->bindParam(1, $nokFname);
    $stmt->bindParam(2, $nokLname);
    $stmt->bindParam(3, $nokAddress);
    $stmt->bindParam(4, $nokPhone);
    $stmt->bindParam(5, $nokEmail);
    $stmt->bindParam(6, $nokRelationship);
    $stmt->bindParam(7, $userId);
    
    if ($stmt->execute()) {
      $message = "Form submitted successfully!";
      echo $result;
      header("Location: successfully-signup.php?user=$userId");
      exit();
    } else {
      $message = "Failed to submit form!";
    }
  }
?>

<?php include_once "./includes/header.php"?>
<body>
  <!-- side bar start -->
  <?php include_once "./includes/sidebar.php"?>
  <!-- side bar end -->


  <!-- header start -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
        <!-- Card start -->
        <div class="card">
          <div class="card-body">
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
                  
                  <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                      </div>
                      <input id="dropzone-file" type="file" class="hidden" multiple/>
                    </label>
                  </div> 
                  <small class="form-text text-muted">e.g., National ID, Passport</small>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <label for="proof_of_identity">Proof of Address:</label>
                  
                  <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                      </div>
                      <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                  </div> 
                <small class="form-text text-muted">e.g., Utility Bill</small>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Proof of Income:</label>
                  <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                      </div>
                      <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                  </div> 
                  <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">e.g., Payslips, Bank Statements</p>
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
                    
                    <div class="flex items-center justify-center w-full">
                      <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                          </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" multiple/>
                      </label>
                    </div> 
                    <small class="form-text text-muted">e.g., National ID, Passport</small>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="field-wrapper">
                    <label for="proof_of_identity">Proof of Address:</label>
                    
                    <div class="flex items-center justify-center w-full">
                      <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                          </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                      </label>
                    </div> 
                  <small class="form-text text-muted">e.g., Utility Bill</small>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="field-wrapper">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Proof of Income:</label>
                    <div class="flex items-center justify-center w-full">
                      <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                          </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                      </label>
                    </div> 
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">e.g., Payslips, Bank Statements</p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- Buttons -->
        <div class="flex justify-center mt-6">
          <!-- <a href="./loan-application-1.php" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600">Previous</a> -->
          <a href="./loan-application-2.php" class="bg-primary text-white py-2 px-4 rounded-lg hover:bg-blue-600">Next</a>
        </div>
        

      </div>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
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
