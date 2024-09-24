<?php
// Include the database connection (assuming you have a Database class)
require_once '../db/Database.php'; 

// Initialize message variable
$message = "";

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $confirmpin = $_POST['confirmpin'];
    $terms = isset($_POST['terms']) ? 1 : 0;

    // echo $fullname, $email, $pwd, $confirmpin, $terms;
    // die();

    // Basic validation
    if ($pwd !== $confirmpin) {
        $message = "Pins do not match!";
    } elseif ($terms != 1) {
        $message = "You must agree to the terms!";
    } else {
        // Proceed with storing data in the database
        $conn = Database::getInstance();
        $stmt = $conn->prepare("INSERT INTO users (firstname, middlename, lastname, email, pin) VALUES (:fullname, :email, :password)");
        $stmt = $conn->prepare("INSERT INTO users (firstname, middlename, lastname, email, password) 
                        VALUES (:firstname, :middlename, :lastname, :email, :password)");
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':middlename', $middlename);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $pwd);

        if ($stmt->execute()) {
          $newUserId = $conn->lastInsertId();
          $message = "Form submitted successfully!";
          // echo $newUserId;
          header("Location: personal-identity.php?user=$newUserId");
          exit();
        } else {
            $message = "Failed to submit form!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:06:43 GMT -->
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
    <a href="signin.php"> <i class="back-btn" data-feather="arrow-left"></i> </a>

    <img class="img-fluid img" src="assets/images/authentication/6.svg" alt="v1" />

    <div class="auth-content">
      <div>
        <h2>Sign Up To Get A Loan Today!</h2>
        <h4 class="p-0">Fill up the form</h4>
      </div>
    </div>
  </div>
  <!-- header end -->

  <?php if (!empty($message)): ?>
        <div class="alert">
            <?= $message ?>
        </div>
    <?php endif; ?>

    <!-- login section start -->
    <form class="auth-form" action="" method="POST">
      <div class="custom-container">
        <ul id="progressbar" style="text-align: center;">
          <li class="active" id="biodata"><strong></strong></li>
          <li id="loan"><strong></strong></li>
          <li id="verification"><strong></strong></li>
          <li id="disbursment"><strong></strong></li>
        </ul>  
        <div class="form-group">
          <label for="inputname" class="form-label">First Name</label>
          <div class="form-input">
            <input type="text" class="form-control" name="firstname" id="inputname" placeholder="Enter your first name" required />
          </div>
        </div>
        <div class="form-group">
          <label for="inputname" class="form-label">Middle Name</label>
          <div class="form-input">
            <input type="text" class="form-control" name="middlename" id="inputname" placeholder="Enter your middle name" />
          </div>
        </div>
        <div class="form-group">
          <label for="inputname" class="form-label">Last Name</label>
          <div class="form-input">
            <input type="text" class="form-control" name="lastname" id="inputname" placeholder="Enter your last name" required />
          </div>
        </div>

        <div class="form-group">
          <label for="inputusername" class="form-label">Email</label>
          <div class="form-input">
            <input type="email" class="form-control" name="email" id="inputusername" placeholder="Enter Your Email" required />
          </div>
        </div>

        <div class="form-group">
          <label for="pwd" class="form-label">Enter Password</label>
          <div class="form-input">
            <input type="text" class="form-control" name="pwd" id="pwd" placeholder="Enter Password" required />
          </div>
        </div>

        <div class="form-group">
          <label for="confirmpin" class="form-label">Re-enter Password</label>
          <div class="form-input">
            <input type="text" class="form-control" name="confirmpin" id="confirmpin" placeholder="Re-enter Password" required />
          </div>
        </div>

        <div class="remember-option mt-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="terms" id="flexCheckDefault" required />
            <label class="form-check-label" for="flexCheckDefault">I agree to all terms & condition</label>
          </div>
        </div>

        <button type="submit" class="btn theme-btn w-100">Continue</button>
        <h4 class="signup">Already have an account ?<a href="signin.php"> Sign in</a></h4>
      </div>
    </form>

  <!-- login section start -->
  <!-- <form class="auth-form" target="_blank">
    <div class="custom-container">
      <ul id="progressbar" style="text-align: center;">
        <li class="active" id="biodata"><strong></strong></li>
        <li id="loan"><strong></strong></li>
        <li id="verification"><strong></strong></li>
        <li id="disbursment"><strong></strong></li>
      </ul>  
      <div class="form-group">
        <label for="inputname" class="form-label">Full name</label>
        <div class="form-input">
          <input type="text" class="form-control" id="inputname" placeholder="Enter your name" />
        </div>
      </div>

      <div class="form-group">
        <label for="inputusername" class="form-label">Email id</label>
        <div class="form-input">
          <input type="email" class="form-control" id="inputusername" placeholder="Enter Your Email" />
        </div>
      </div>

      <div class="form-group">
        <label for="pwd" class="form-label">Enter new pin</label>
        <div class="form-input">
          <input type="number" class="form-control" id="pwd" placeholder="Enter pin" />
        </div>
      </div>

      <div class="form-group">
        <label for="confirmpin" class="form-label">Re-enter new pin</label>
        <div class="form-input">
          <input type="number" class="form-control" id="confirmpin" placeholder="Re-enter pin" />
        </div>
      </div>
      <div class="remember-option mt-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
          <label class="form-check-label" for="flexCheckDefault">I agree to all terms & condition</label>
        </div>
      </div>

      <a href="personal-identity.php" class="btn theme-btn w-100">Continue</a>
      <h4 class="signup">Already have an account ?<a href="signin.php"> Sign in</a></h4>
    </div>
  </form> -->
  <!-- login section start -->

  <!-- feather js -->
  <script src="assets/js/feather.min.js"></script>
  <script src="assets/js/custom-feather.js"></script>

  <!-- bootstrap js -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- script js -->
  <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/signup.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:06:44 GMT -->
</html>