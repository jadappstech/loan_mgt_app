<?php include_once "./includes/header.php"?>
<body>
  <!-- side bar start -->
  <?php include_once "./includes/sidebar.php"?>
  <!-- side bar end -->

  <style>
    * {
      margin: 0;
      padding: 0;
    }

    html {
        height: 100%;
    }

    p {
      color: grey;
    }

    #heading {
      text-transform: uppercase;
      color: #673AB7;
      font-weight: normal;
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 1.25rem;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 8px;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 1.25rem;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    .form-card {
      text-align: left;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    #msform input, #msform textarea {
        padding: .5rem .9375rem .5rem .9375rem;
        border: .0625rem solid #ccc;
        border-radius: 0rem;
        margin-bottom: 1.5625rem;
        margin-top: .125rem;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 1rem;
        letter-spacing: .0625rem;
    }

    #msform input:focus, #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: .0625rem solid #673AB7;
        outline-width: 0;
    }

    /*Next Buttons*/
    #msform .action-button {
        width: 6.25rem;
        background: #673AB7;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0rem;
        cursor: pointer;
        padding: .625rem .3125rem;
        margin: .625rem 0rem .625rem .3125rem;
        float: right;
    }

    #msform .action-button:hover, #msform .action-button:focus {
        background-color: #311B92;
    }

    /*Previous Buttons*/
    #msform .action-button-previous {
        width: 6.25rem;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0rem;
        cursor: pointer;
        padding: .625rem .3125rem;
        margin: .625rem .3125rem .625rem 0rem;
        float: right;
    }

    #msform .action-button-previous:hover, #msform .action-button-previous:focus {
        background-color: #000000;
    }

    /*The background card*/
    .card {
        z-index: 0;
        border: none;
        position: relative;
    }

    /*FieldSet headings*/
    .fs-title {
        font-size: 1.5625rem;
        color: #673AB7;
        margin-bottom: .9375rem;
        font-weight: normal;
        text-align: left;
    }

    .purple-text {
      color: #673AB7;
        font-weight: normal;
    }

    /*Step Count*/
    .steps {
      font-size: 1.5625rem;
        color: gray;
        margin-bottom: .625rem;
        font-weight: normal;
        text-align: right;
    }

    /*Field names*/
    .fieldlabels {
      color: gray;
      text-align: left;
    }

    /*Icon progressbar*/
    #progressbar {
        margin-bottom: 1.875rem;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
        color: #673AB7;
    }

    #progressbar li {
        list-style-type: none;
        font-size: .9375rem;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400;
    }

    /*Icons in the ProgressBar*/
    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f13e";
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007";
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f030";
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c";
    }

    /*Icon ProgressBar before any progress*/
    #progressbar li:before {
        width: 3.125rem;
        height: 3.125rem;
        line-height: 2.8125rem;
        display: block;
        font-size: 1.25rem;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto .625rem auto;
        padding: .125rem;
    }

    /*ProgressBar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: .125rem;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 1.5625rem;
        z-index: -1;
    }

    /*Color number of the step and the connector before it*/
    #progressbar li.active:before, #progressbar li.active:after {
        background: #673AB7;
    }

    /*Animated Progress Bar*/
    .progress {
      height: 1.25rem;
    }

    .progress-bar {
      background-color: #673AB7;
    }

    /*Fit image in bootstrap div*/
    .fit-image{
        width: 100%;
        object-fit: cover;
    }
  </style>

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

  <section class="section-b-space" style="padding-bottom: 5.625rem">
      <div class="custom-container">
        <!-- progressbar -->
        <ul id="progressbar" style="text-align: center;">
          <li class="active" id="account"><strong>Biodata</strong></li>
          <li class="active" id="personal"><strong>Loan Details</strong></li>
          <li id="payment"><strong>Verification</strong></li>
          <li id="confirm"><strong>Disbursment</strong></li>
        </ul>     
        <form id="biodata-form">
          <fieldset class="mb-3">
            <legend>Personal Information</legend>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="name">Full Name:</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email Address:</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phone">Phone Number:</label>
                  <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="dob">Date of Birth:</label>
                  <input type="date" id="dob" name="dob" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="address">Residential Address:</label>
              <input type="text" id="address" name="address" class="form-control" placeholder="Enter your address" required>
            </div>
          </fieldset>

          <fieldset class="mb-3">
            <legend>Guarantor's Details</legend>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="guarantor-name">Guarantor's Full Name:</label>
                  <input type="text" id="guarantor-name" name="guarantor_name" class="form-control" placeholder="Enter guarantor's name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="guarantor-phone">Guarantor's Phone Number:</label>
                  <input type="tel" id="guarantor-phone" name="guarantor_phone" class="form-control" placeholder="Enter guarantor's phone number" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="guarantor-address">Guarantor's Address:</label>
              <input type="text" id="guarantor-address" name="guarantor_address" class="form-control" placeholder="Enter guarantor's address" required>
            </div>
          </fieldset>

          <fieldset class="mb-3">
            <legend>Employment Details</legend>
            <div class="form-group">
              <label for="employment-status">Employment Status:</label>
              <select id="employment-status" name="employment_status" class="form-control" required>
                <option value="" disabled selected>Select your employment status</option>
                <option value="employed">Employed</option>
                <option value="self-employed">Self-employed</option>
                <option value="unemployed">Unemployed</option>
              </select>
            </div>
            <div class="form-group">
              <label for="employer-name">Employer's Name:</label>
              <input type="text" id="employer-name" name="employer_name" class="form-control" placeholder="Enter your employer's name" required>
            </div>
            <div class="form-group">
              <label for="job-title">Job Title:</label>
              <input type="text" id="job-title" name="job-title" class="form-control" placeholder="Enter your job title" required>
            </div>
            <div class="form-group">
              <label for="salary">Monthly Salary:</label>
              <input type="number" id="salary" name="salary" class="form-control" placeholder="Enter your monthly salary" required>
            </div>
          </fieldset>

          <a href="./loan-application-1.php" class="btn btn-secondary">Back</a>
          <button type="submit" class="btn btn-primary">Next</button>
        </form>
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
