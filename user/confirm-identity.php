<?php
  require_once '../db/Database.php'; 
  include './includes/functions/handleFileUploads.php';
  
  // define('MAX_FILE_SIZE', 3 * 1024 * 1024); // 3MB in bytes
  // define('UPLOAD_DIR', '../uploads/');
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


  // function handleFileUpload($fileInputName) {
  //   if (!isset($_FILES[$fileInputName]) || $_FILES[$fileInputName]['error'] !== UPLOAD_ERR_OK) {
  //       return ["status" => "error", "message" => "No file uploaded or upload error occurred."];
  //   }

  //   $file = $_FILES[$fileInputName];
  //   // Check file size
  //   if ($file['size'] > MAX_FILE_SIZE) {
  //       return ["status" => "error", "message" => "File '{$file['name']}' exceeds the maximum allowed size of 3MB."];
  //   }

  //   // Sanitize filename
  //   $filename = preg_replace("/[^a-zA-Z0-9.-]/", "_", $file['name']);
  //   $targetPath = UPLOAD_DIR . $filename;

  //   // Ensure upload directory exists
  //   if (!file_exists(UPLOAD_DIR) && !mkdir(UPLOAD_DIR, 0755, true)) {
  //     echo 'Failed to create upload directory.';
  //     return ["status" => "error", "message" => "Failed to create upload directory."];
  //   }
  //   // echo move_uploaded_file($file['tmp_name'], $targetPath);die;
  //   // Move uploaded file
  //   if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
  //     echo 'Error uploading file';die;
  //     error_log("Failed to move uploaded file: " . error_get_last()['message']);
  //     return ["status" => "error", "message" => "Error uploading file. Please try again."];
  //   }

  //   // File upload successful
  //   // return  $targetPath;
  //   return [
  //     "status" => "success",
  //     "message" => "File '{$filename}' uploaded successfully.",
  //     "path" => $targetPath
  //   ];
  // }


  // Check if form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // ! temporary exit to avoid sending documents
    // header("Location: employment-info.php?user=$userId");
    // exit();
    // Get form data
    // $proofOfIdentityFile = $_FILES['proof_of_identity']['tmp_name'];
    // $selfieFile = $_FILES['selfie']['tmp_name'];
    // echo 'error-----------';
    $maxFileSize = 300000000;//!temp increased to 300MB will take it back to 3MB

    if ($_FILES["proof_of_identity"]["size"] > 0) {
      // $result = handleFileUpload('proof_of_identity', true);
      // if ($result['status'] === 'success') {
      //   // echo "File path: " . $result['path'] . "\n";
      //   $proofOfIdentityFilename =  $result['path'];
      //   // echo $result['message'] . "\n";
      // } else {
      //   echo $result['message'];
      // }
      $proofOfIdentityFilename = handleFileUpload('proof_of_identity', true);
      if ($selfieFilename === false) {
        echo "Error uploading selfie";
        exit;
      }
    }
    if ($_FILES["selfie"]["size"] > 0) {
      $selfieFilename = handleFileUpload('selfie', true);
      if ($selfieFilename === false) {
        echo "Error uploading selfie";
        exit;
      }
    }

    $conn = Database::getInstance();
    $stmt = $conn->prepare("UPDATE users SET proof_of_identity = :proof_of_identity, photo = :selfie WHERE id = :id");

    $stmt->bindParam(':id', $userId);
    $stmt->bindParam(':proof_of_identity', $proofOfIdentityFilename);
    $stmt->bindParam(':selfie', $selfieFilename);

      // !log
    echo ':selfie--->', $selfieFilename;
    echo ':proofOfIdentityFilename--->', $proofOfIdentityFilename;

    if ($stmt->execute()) {
      $message = "Form submitted successfully!";
      // echo $stmt->debugDumpParams();die;
      header("Location: next-of-kin-info.php?user=$userId");
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

<body class="auth-body">
  <!-- header starts -->
  <div class="auth-header">
    <a href="personal-identity.php"> <i class="back-btn" data-feather="arrow-left"></i> </a>
    <img class="img-fluid img" src="assets/images/authentication/8.svg" alt="v1" />
    <div class="auth-content">
      <div>
        <h2 style="font-size: 30px">KYC</h2>
        <h2>Confirm identity</h2>
        <h4 class="p-0">Submit your docs to verify</h4>
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
        <li id="verification"><strong></strong></li>
        <li id="disbursment"><strong></strong></li>
      </ul> 
      <div class="form-group">
        <div class="upload-image rounded-image">
          <label for="proof_of_identity" class="form-label d-none">file </label>
          <input class="form-control upload-file" type="file" id="proof_of_identity" name="proof_of_identity" required><!--removed multiple temporarily-->
          <i class="upload-icon dark-text" data-feather="plus"></i>
        </div>
      </div>

      <h3 class="info-id">To confirm your information, upload your IDs.</h3>

      <div class="form-group">
        <div class="upload-image rounded-image">
          <input class="form-control upload-file" type="file" id="selfie" name="selfie" required>
          <i class="upload-icon" data-feather="camera"></i>
        </div>
      </div>

      <h3 class="info-id border-0 pb-0">To verify your details, activate your front camera and take a selfie.</h3>

      <!-- <a href="employment-info.php?<?php echo isset($userId) ? $userId : ''; ?>" class="btn theme-btn w-100">Continue</a> -->
      <button class="btn theme-btn w-100">Continue</button>
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
</html>