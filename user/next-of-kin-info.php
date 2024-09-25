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
    //   echo $result;
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

    <img class="img-fluid img" src="assets/images/authentication/1.svg" alt="v1" />

    <div class="auth-content">
      <div>
        <h2 style="font-size: 30px">KYC</h2>
        <h2>Next Of Kin Information</h2>
        <h4 class="p-0">Hello<?php echo isset($firstname) ? " ".$firstname : ''; ?>, tell us more about yourself</h4>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- login section start -->
  <form class="auth-form" action="" method="POST">
    <div class="custom-container">
      <ul id="progressbar" style="text-align: center;">
        <li class="active" id="biodata"><strong></strong></li>
        <li class="active" id="loan"><strong></strong></li>
        <li class="active" id="verification"><strong></strong></li>
        <li id="disbursment"><strong></strong></li>
      </ul>  
      <div class="form-group">
        <label for="inputpin" class="form-label">First Name</label>
        <div class="form-input">
          <input type="text" class="form-control" id="inputpin" placeholder="Enter your next of kine firstname" name="nok-fname"/>
        </div>
      </div>
      <div class="form-group">
        <label for="inputpin" class="form-label">Middle Name</label>
        <div class="form-input">
          <input type="text" class="form-control" id="inputpin" placeholder="Enter your next of kine middlename" name="nok-mname"/>
        </div>
      </div>
      <div class="form-group">
        <label for="inputpin" class="form-label">Last Name</label>
        <div class="form-input">
          <input type="text" class="form-control" id="inputpin" placeholder="Enter your next of kine lastname" name="nok-lname"/>
        </div>
      </div>
      <div class="form-group">
        <label for="inputusername" class="form-label">Address</label>
        <div class="form-input">
          <textarea class="form-control" id="inputusername" placeholder="Enter Your Next of kin address" name="nok-address"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="inputpin" class="form-label">Phone number</label>
        <div class="form-input">
          <input type="tel" class="form-control" id="inputpin" placeholder="Enter your phone number" name="nok-phone"/>
        </div>
      </div>
      <div class="form-group">
        <label for="inputpin" class="form-label">Email</label>
        <div class="form-input">
          <input type="number" class="form-control" id="inputpin" placeholder="Enter your phone number" name="nok-email"/>
        </div>
      </div>
      <div class="form-group">
        <label for="inputgender" class="form-label">Gender</label>
        <select id="inputgender" class="form-select" name="nok-gender">
          <option disabled selected>Select Gender</option>
          <option value="1">Male</option>
          <option value="2">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputgender" class="form-label">Gender</label>
        <select id="inputgender" class="form-select" name="nok-relationship">
          <option disabled selected>Select Relationship</option>
          <option>Father</option>
          <option>Mother</option>
          <option>Brother</option>
          <option>Sister</option>
          <option>Friend</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputgender" class="form-label">Gender</label>
        <select id="inputgender" class="form-select" name="gender">
          <option disabled selected>Select Gender</option>
          <option value="1">Male</option>
          <option value="2">Female</option>
        </select>
      </div>

      <!-- <a href="confirm-identity.php" class="btn theme-btn w-100">Continue</a> -->
      <button type="submit" class="btn theme-btn w-100">Continue</button>
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