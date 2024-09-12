<?php include_once "./includes/header.php"?>
<body>
  <!-- side bar start -->
  <?php include_once "./includes/sidebar.php"?>
  <!-- side bar end -->


  <!-- header start -->
  <!-- Tailwind CSS CDN -->
  <header class="section-t-space">
    <div class="custom-container">
      <div class="header-panel">
        <a href="landing.php" class="back-btn">
          <i class="icon" data-feather="arrow-left"></i>
        </a>
        <h2>Verification</h2>

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

  <section class="section-b-space" style="padding-bottom: 90px">
    <div class="custom-container">
      <!-- progressbar -->
      <ul id="progressbar" style="text-align: center;">
        <li class="active" id="biodata"><strong>Biodata</strong></li>
        <li class="active" id="loan"><strong>Loan Details</strong></li>
        <li class="active" id="verification"><strong>Verification</strong></li>
        <li id="disbursment"><strong>Disbursment</strong></li>
      </ul>     
      <div class="card">
        <div class="card-body"></div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <ul class="timeline-3">
            <li class="pending" onclick="changeClassSequentially('fail')">
              <div class="fw-bold">Mono Verification</div>
              <p class="mt-2">Verifying your application details through the Mono platform</p>
            </li>        
            <li class="pending" onclick="changeClassSequentially('success')">
              <div class="fw-bold">NIPPS Verification</div>
              <p class="mt-2">Contacting the National Identity Management System (NIPPS) to check if you have any other active loans not mentioned in the application</p>
            </li>
            <li class="pending">
              <div class="fw-bold">Nigerian Credit Bureau Check</div>
              <p class="mt-2">Cross-checking your credit status with Nigerian credit bureaus to identify any unpaid loans, defaults, or bad credit history<span class="loading-dots"></span></p>
            </li>
            <li class="pending">
              <a class="text-secondary pending">Done</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <script>

      function changeClassSequentially(newClass) {
        const listItems = document.querySelectorAll('.timeline-3 li');
        const delay = 1000; // 1 second delay for each item

        listItems.forEach(function(item, index) {
          setTimeout(function() {
            // Remove existing classes and add the new one
            item.classList.remove('success', 'fail', 'pending');
            item.classList.add(newClass);
          }, index * delay); // Delay each by 1 second (1000ms)
        });

        // Wait for all items to change class before redirecting
        const totalTime = listItems.length * delay; // Total time for all changes

        setTimeout(function() {
          if (newClass === "success") {
              window.location.href = "./loan-application-4v1.php";
          } else {
              window.location.href = "./loan-application-4v2.php";
          }
        }, totalTime); // Redirect after all items have been updated
      }

        document.addEventListener('keydown', function(event) {
          // Check if the pressed key is Enter (key code 13)
          if (event.key === "Enter") {
              // Redirect to the desired URL
              window.location.href = "./loan-application-4.php";
          }
          if (event.key === "-") {
            console.log('simulate fail');
            changeClassSequentially('fail');
          }
          if (event.key === "=") {
              console.log('simulate success');
              changeClassSequentially('success');
          }

        });
    </script>
    
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
