<?php
  require_once '../db/Database.php'; 
  include './includes/functions/handleFileUploads.php';

  $message = "";

  // Check if form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $guarantor_proof_of_identity = handleFileUpload('guarantor_proof_of_identity');
    if ($guarantor_proof_of_identity === false) {
        echo "Error uploading guarantor_proof_of_identity";die;
        exit;
    }
    // var_dump($_POST["guarantor_proof_of_identity"]);die;

    $guarantor_proof_of_address = handleFileUpload('guarantor_proof_of_address');
    if ($guarantor_proof_of_address === false) {
        echo "Error uploading guarantor_proof_of_address";
        exit;
    }

    $guarantor_proof_of_income = handleFileUpload('guarantor_proof_of_income');
    if ($guarantor_proof_of_income === false) {
        echo "Error uploading guarantor_proof_of_income";
        exit;
    }

    $applicant_proof_of_identity = handleFileUpload('applicant_proof_of_identity');
    if ($applicant_proof_of_identity === false) {
        echo "Error uploading applicant_proof_of_identity";
        exit;
    }

    $applicant_proof_of_address = handleFileUpload('applicant_proof_of_address');
    if ($applicant_proof_of_address === false) {
        echo "Error uploading applicant_proof_of_address";
        exit;
    }

    $applicant_proof_of_income = handleFileUpload('applicant_proof_of_income');
    if ($applicant_proof_of_income === false) {
        echo "Error uploading applicant_proof_of_income";
        exit;
    }
    
    $employer_business_name = $_POST["employer_business_name"];
    $monthly_income = $_POST["monthly_income"];
    $monthly_expenses = $_POST["monthly_expenses"];
    // Guarantor information
    $guarantor_name = $_POST["guarantor_name"];
    $guarantor_email = $_POST["guarantor_email"];
    $guarantor_phone = $_POST["guarantor_phone"];
    $guarantor_address = $_POST["guarantor_address"];
    $guarantor_relationship = $_POST["guarantor_relationship"];

    $sql = "INSERT INTO applications (guarantor_name, guarantor_email, guarantor_phone, guarantor_address, guarantor_relationship, guarantor_proof_of_identity, guarantor_proof_of_address, guarantor_proof_of_income, employer, monthly_income, monthly_expenses) 
    VALUES (:guarantor_name, :guarantor_email, :guarantor_phone, :guarantor_address, :guarantor_relationship, :guarantor_proof_of_identity, :guarantor_proof_of_address, :guarantor_proof_of_income, :employer_business_name, :monthly_income, :monthly_expenses)";
    
    $conn = Database::getInstance();
    $stmt = $conn->prepare($sql);
    
    // Bind the correct parameters to the placeholders
    $stmt->bindParam(':guarantor_name', $guarantor_name);
    $stmt->bindParam(':guarantor_email', $guarantor_email);
    if (strlen($guarantor_phone) > 20) { // Adjust the maximum length as needed
        $guarantor_phone = substr($guarantor_phone, 0, 20); // Truncate to 20 characters
    }
    $stmt->bindParam(':guarantor_phone', $guarantor_phone);
    $stmt->bindParam(':guarantor_address', $guarantor_address);
    $stmt->bindParam(':guarantor_relationship', $guarantor_relationship);
    $stmt->bindParam(':guarantor_proof_of_identity', $guarantor_proof_of_identity);
    $stmt->bindParam(':guarantor_proof_of_address', $guarantor_proof_of_address);
    $stmt->bindParam(':guarantor_proof_of_income', $guarantor_proof_of_income);
    $stmt->bindParam(':employer_business_name', $employer_business_name);
    $stmt->bindParam(':monthly_income', $monthly_income);
    $stmt->bindParam(':monthly_expenses', $monthly_expenses);

    // $stmt->debugDumpParams();die;

    // ... (rest of your code)
    
    if ($stmt->execute()) {
      $message = "Form submitted successfully!";
      $applicationId = $conn->lastInsertId();
      header("Location: loan-application-2.php?application=$applicationId");
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

  <form class="section-b-space" style="padding-bottom: 90px" action="" method="POST" enctype="multipart/form-data">
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
                  <input class="form-control" type="text" name="employer_business_name" required>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Monthly Income</div>
                  <input class="form-control" type="number" name="monthly_income" required>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Monthly Expenses</div>
                  <input class="form-control" type="number" name="monthly_expenses" required>
                </div>
              </div>
            </div>

            <div class="row gutters gy-4">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <label for="proof_of_identity">Proof of Identity:</label>
                  
                  <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file1" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                      </div>
                      <input id="dropzone-file1" type="file" class="hidden" xmultiple/>
                    </label>
                  </div> 
                  <small class="form-text text-muted">e.g., National ID, Passport</small>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <label for="proof_of_identity">Proof of Address:</label>
                  
                  <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file2" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                      </div>
                      <input id="dropzone-file2" type="file" class="hidden"/>
                    </label>
                  </div> 
                <small class="form-text text-muted">e.g., Utility Bill</small>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Proof of Income:</label>
                  <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file3" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                      <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                      </div>
                      <input id="dropzone-file3" type="file" class="hidden"/>
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
                  <input class="form-control" type="text" name="guarantor_name">
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Guarantor's Email Address</div>
                  <input class="form-control" type="email" name="guarantor_email">
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Guarantor's Phone Number</div>
                  <input class="form-control" type="tel" maxlength="10" name="guarantor_phone">
                </div>
              </div>
              <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Guarantor's Residential Address</div>
                  <input class="form-control" type="text" name="guarantor_address">
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="field-wrapper">
                  <div class="field-placeholder">Relationship to Guarantor</div>
                  <input class="form-control" type="text" name="guarantor_relationship" required>
                </div>
              </div>
              <div class="row gutters gy-4">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="field-wrapper">
                    <label for="proof_of_identity">Proof of Identity:</label>
                    
                    <div class="flex items-center justify-center w-full">
                      <label for="dropzone-file4" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                          </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file4" type="file" class="hidden" name="guarantor_proof_of_identity" required/>
                      </label>
                    </div> 
                    <small class="form-text text-muted">e.g., National ID, Passport</small>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="field-wrapper">
                    <label for="proof_of_identity">Proof of Address:</label>
                    
                    <div class="flex items-center justify-center w-full">
                      <label for="dropzone-file5" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                          </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file5" type="file" class="hidden"  name="guarantor_proof_of_address" required/>
                      </label>
                    </div> 
                  <small class="form-text text-muted">e.g., Utility Bill</small>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="field-wrapper">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Proof of Income:</label>
                    <div class="flex items-center justify-center w-full">
                      <label for="dropzone-file6" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                          </svg>
                          <p class="md:hidden block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Touch to upload</span> </p>
                          <p class="hidden md:block mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                          <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file6" type="file" class="hidden" name="guarantor_proof_of_income" required/>
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
          <button type="submit" class="bg-primary text-white py-2 px-4 rounded-lg hover:bg-blue-600">Next</button>
        </div>
        
      </div>
    </div>
  </form>
  
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
