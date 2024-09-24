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
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    $conn = Database::getInstance();
    $stmt = $conn->prepare("UPDATE users SET address = :address, phone = :phone, dob = :dob, gender = :gender WHERE id = :id");
    
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':id', $userId);
    

    if ($stmt->execute()) {
      $message = "Form submitted successfully!";
      echo $result;
      header("Location: confirm-identity.php?user=$userId");
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
        <h2>Personal identity</h2>
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
        <li id="verification"><strong></strong></li>
        <li id="disbursment"><strong></strong></li>
      </ul>  
      <div class="form-group">
        <label for="inputusername" class="form-label">Address</label>
        <div class="form-input">
          <textarea class="form-control" id="inputusername" placeholder="Enter Your Adderess" name="address"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="inputpin" class="form-label">Phone number</label>
        <div class="form-input">
          <input type="number" class="form-control" id="inputpin" placeholder="Enter your phone number" name="phone"/>
        </div>
      </div>
      <div class="form-group">
        <label for="inputday" class="form-label">Date of birth</label>
        <div class="d-flex gap-2">
          <input type="date" class="form-control" name="dob">
        </div>
      </div>
      <div class="form-group">
        <label for="inputgender" class="form-label">Gender</label>
        <select id="inputgender" class="form-select" name="gender">
          <option disabled selected>Select Gender</option>
          <option value="1">Male</option>
          <option value="2">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="state" class="form-label">State of Origin</label>
        <select class="form-select" onchange="toggleLGA(this);" name="state" id="state" class="form-control">
							<option value="" selected="selected">- Select -</option>
							<option value="Abia">Abia</option>
							<option value="Adamawa">Adamawa</option>
							<option value="AkwaIbom">AkwaIbom</option>
							<option value="Anambra">Anambra</option>
							<option value="Bauchi">Bauchi</option>
							<option value="Bayelsa">Bayelsa</option>
							<option value="Benue">Benue</option>
							<option value="Borno">Borno</option>
							<option value="Cross River">Cross River</option>
							<option value="Delta">Delta</option>
							<option value="Ebonyi">Ebonyi</option>
							<option value="Edo">Edo</option>
							<option value="Ekiti">Ekiti</option>
							<option value="Enugu">Enugu</option>
							<option value="FCT">FCT</option>
							<option value="Gombe">Gombe</option>
							<option value="Imo">Imo</option>
							<option value="Jigawa">Jigawa</option>
							<option value="Kaduna">Kaduna</option>
							<option value="Kano">Kano</option>
							<option value="Katsina">Katsina</option>
							<option value="Kebbi">Kebbi</option>
							<option value="Kogi">Kogi</option>
							<option value="Kwara">Kwara</option>
							<option value="Lagos">Lagos</option>
							<option value="Nasarawa">Nasarawa</option>
							<option value="Niger">Niger</option>
							<option value="Ogun">Ogun</option>
							<option value="Ondo">Ondo</option>
							<option value="Osun">Osun</option>
							<option value="Oyo">Oyo</option>
							<option value="Plateau">Plateau</option>
							<option value="Rivers">Rivers</option>
							<option value="Sokoto">Sokoto</option>
							<option value="Taraba">Taraba</option>
							<option value="Yobe">Yobe</option>
							<option value="Zamfara">Zamafara</option>
						</select>
      </div>
      <div class="form-group">
        <label for="lga" class="form-label">Local Government Area</label>
        <select name="lga" id="lga" class="form-select select-lga" required>
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
  <script src="assets/js/lga-selection-js/lga.min.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/personal-identity.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:07:50 GMT -->
</html>