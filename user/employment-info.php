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
    $conn = Database::getInstance();
    $empStatus = $_POST['emp_status'];
    $empType = $_POST['emp_type'];
    $empName = $_POST['emp_name'];
    $incomeType = $_POST['income_type'];
    $monthlyIncome = $_POST['monthly_income'];

    // Prepare SQL statement
    $stmt = $conn->prepare("UPDATE users
      SET emp_status = :emp_status,
        emp_type = :emp_type,
        emp_name = :emp_name,
        income_type = :income_type,
        monthly_income = :monthly_income
      WHERE id = :id
    ");
    // $stmt = $conn->prepare("UPDATE users SET address = :address, phone = :phone, dob = :dob, gender = :gender WHERE id = :id");

    // Bind parameters
    $stmt->bindParam(':emp_status', $empStatus);
    $stmt->bindParam(':emp_type', $empType);
    $stmt->bindParam(':emp_name', $empName);
    $stmt->bindParam(':income_type', $incomeType);
    $stmt->bindParam(':monthly_income', $monthlyIncome);
    $stmt->bindParam(':id', $userId); // assuming $userId is set
    // $stmt->debugDumpParams();
    // die();

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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="mpay" />
  <meta name="keywords" content="mpay" />
  <meta name="author" content="mpay" />
  <link rel="manifest" href="manifest.json" />
  <link rel="icon" href="assets/images/logo/favicon.png" type="image/x-icon" />
  <title>Loan Management App</title>
  <link rel="apple-touch-icon" href="assets/images/logo/favicon.png" />
  <meta name="theme-color" content="#122636" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <meta name="apple-mobile-web-app-title" content="mpay" />
  <meta name="msapplication-TileImage" content="assets/images/logo/favicon.png" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!--Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;display=swap" rel="stylesheet" />

  <!-- bootstrap css -->
  <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.min.css" />

  <!-- swiper css -->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/swiper-bundle.min.css" />

  <!-- Theme css -->
  <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/auth-styles.css">
</head>

<body class="auth-body ">
  <!-- header starts -->
  <div class="auth-header">
    <a href="signup.php"> <i class="back-btn" data-feather="arrow-left"></i> </a>

    <img class="img-fluid img" src="assets/images/authentication/11.png" alt="v1" />

    <div class="auth-content">
      <div>
        <h2 style="font-size: 30px">KYC</h2>
        <h2>Employment Information</h2>
        <h4 class="p-0">Fill up the form</h4>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- login section start -->
  <form class="auth-form" action="" method="POST" enctype="multipart/form-data">
    <div class="custom-container">
      <ul id="progressbar" style="text-align: center;">
        <li class="active" id="biodata"><strong></strong></li>
        <li class="active" id="loan"><strong></strong></li>
        <li class="active" id="verification"><strong></strong></li>
        <li id="disbursment"><strong></strong></li>
      </ul>  
      <div class="form-group">
        <label for="inputgender" class="form-label">Employment Status</label>
        <select id="inputgender" class="form-select" name="emp_status">
          <option selected disabled>Select Employment Status</option>
          <option>Umemployed</option>
          <option>Self Employed</option>
          <option>Employed</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputgender" class="form-label">Employement Type</label>
        <select id="inputgender" class="form-select" name="emp_type">
          <option selected disabled>Select Empolyment Type</option>
          <option>Full Time</option>
          <option>Part Time</option>
          <option>Contract</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputusername" class="form-label">Employer Name</label>
        <div class="form-input">
          <input type="text" class="form-control" id="inputusername" placeholder="Enter Your Employer's Name (eg. Company Name)" name="emp_name"/>
        </div>
      </div>
      <div class="form-group">
        <label for="inputgender" class="form-label">Income Type</label>
        <select id="inputgender" class="form-select" name="income_type">
          <option selected disabled>Select Income Type</option>
          <option>Monthly</option>
          <option>Quarterly</option>
          <option>Bi-Annually</option>
          <option>Annually</option>
        </select>
      </div>

      <div class="form-group">
        <label for="inputpin" class="form-label">Monthly Income</label>
        <div class="form-input">
          <input type="number" class="form-control" id="inputpin" placeholder="Enter your monthly income" name="monthly_income"/>
        </div>
      </div>

      <button class="btn theme-btn w-100">Continue</button>
      <!-- <a href="add-card-details.php" class="btn theme-btn w-100">Continue</a> -->
      <!-- <a href="confirm-identity.php" class="btn btn-link mt-3">Skip</a> -->
    </div>
  </form>
  <!-- login section start -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/personal-identity.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:07:50 GMT -->
</html>