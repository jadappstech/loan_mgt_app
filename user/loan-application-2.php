<?php
  require_once '../db/Database.php'; 
  include './includes/functions/handleFileUploads.php';

  $message = "";
  
  if (isset($_GET['application'])) {
    $applicationId = $_GET['application'];
  } else {
    // Handle the case where the 'user' parameter is not set
    $message = "Application ID is missing.";
  }

  // Check if form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    $loan_type = $_POST["loan_type"];
    $loan_amount = $_POST["loan_amount"];
    $repayment_term = $_POST["repayment_term"];
    $loan_purpose = $_POST["loan_purpose"];
    $bank_name = $_POST["bank_name"];
    $account_number = $_POST["account_number"];
    $account_type = $_POST["account_type"];
    $payment_type = $_POST["payment_type"];

    $sql = "UPDATE applications SET
      loantype_id = :loan_type,
      loan_amount = :loan_amount,
      loan_repayment_term = :repayment_term,
      purpose_of_loan = :loan_purpose,
      bank_name = :bank_name,
      account_no = :account_number,
      -- account_type = :account_type,
      -- payment_type = :payment_type
    WHERE id = :application_id";

    $conn = Database::getInstance();
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':loan_type', $loan_type);
    $stmt->bindParam(':loan_amount', $loan_amount);
    $stmt->bindParam(':repayment_term', $repayment_term);
    $stmt->bindParam(':loan_purpose', $loan_purpose);
    $stmt->bindParam(':bank_name', $bank_name);
    $stmt->bindParam(':account_number', $account_number);
    // $stmt->bindParam(':account_type', $account_type);
    // $stmt->bindParam(':payment_type', $payment_type);
    $stmt->bindParam(':application_id', $applicationId);


    // $stmt->debugDumpParams();die;

    // ... (rest of your code)
    
    if ($stmt->execute()) {
      $message = "Form submitted successfully!";
      $applicationId = $conn->lastInsertId();
      header("Location: loan-application-2.php?applicant=$applicationId");
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
    <!-- <div class="w-10 h-10 bg-blue-700"></div> -->
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

  <form class="section-b-space" style="padding-bottom: 5.625rem" method="POST">
    <div class="container mx-auto p-4">
      <!-- Progressbar -->
      <ul id="progressbar" style="text-align: center;">
        <li class="active" id="biodata"><strong>Biodata</strong></li>
        <li class="active" id="loan"><strong>Loan Details</strong></li>
        <li id="verification"><strong>Verification</strong></li>
        <li id="disbursment"><strong>Disbursment</strong></li>
      </ul> 

      <!-- Form -->
      <div class="bg-white shadow-md rounded-lg p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          
          <!-- Loan Type -->
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2">Loan Type <span class="text-red-500">*</span></label>
            <select class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="loan_type" onchange="switch_link(this.value)">
              <option disabled selected>Select Loan Type</option>
              <option value="1">Payday Loan</option>
              <option value="2">Salary Loan</option>
              <option value="3">Business Loan</option>
            </select>
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
              <label class="block text-gray-700 text-sm font-bold mb-2">Bank Name <span class="text-red-500">*</span></label>
              <select class="block w-full bg-white border border-gray-300 text-gray-700 py-2 px-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" name="bank_name">
                <option value="" disabled selected>Select Bank</option>
                <option value="1">Zenith Bank</option>
                <option value="2">UBA</option>
                <option value="3">GT Bank</option>
              </select>
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
          <button type="submit" id="Next_btn" class="bg-primary text-white py-2 px-4 rounded-lg hover:bg-blue-600">Next</button>
        </div>

      </div>
    </div>

  </form>

  <script>
    function switch_link(type){
      console.log('type:', type);
      const next_btn = document.getElementById('Next_btn');
      if(type == 'business'){
        next_btn.href = './loan-application-business-loan.php';
      }else{
        next_btn.href = './loan-application-3.php';
      }
    }
  </script>
  

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
