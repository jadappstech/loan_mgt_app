<?php
if (!isset($active_link)) {
  $active_link = "home";
}
?>

<div class="navbar-menu">
    <div class="scanner-bg">
      <a href="loan-application-1.php" class="scanner-btn">
        <img class="img-fluid" src="assets/images/svg/scan.svg" alt="scan" />
      </a>
    </div>
    <ul>
   
      <li <?php if ($active_link == "home") { ?> class="active" <?php } else {} ?>>
        <a href="landing.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/mpay.svg" alt="mPay" />
            <img class="active" src="assets/images/svg/mpay-fill.svg" alt="mPay" />
          </div>
          <h5 class="active">Home</h5>
        </a>
      </li>

      <li <?php if ($active_link == "payments") { ?> class="active" <?php } else {} ?>>
        <a href="payments.php">
          <div class="icon">
            <img class="unactive" src="assets/images/svg/bitcoin.svg" alt="categories" />
            <img class="active" src="assets/images/svg/bitcoin-fill.svg" alt="categories" />
          </div>
          <h5>Payments</h5>
        </a>
      </li>
      
      <li></li> 
            
      <li <?php if ($active_link == "profile") { ?> class="active" <?php } else {} ?>>
          <a href="profile.php">
              <div class="icon">
                  <img class="unactive" src="assets/images/svg/user.svg" alt="profile" />
                  <img class="active" src="assets/images/svg/user-fill.svg" alt="profile" />
                </div>
                <h5>Profile</h5>
            </a>
        </li>
        <li <?php if ($active_link == "support") { ?> class="active" <?php } else {} ?>>
          <a href="support.php">
            <div class="icon">
              <img class="unactive" src="assets/images/svg/bar-chart.svg" alt="bag" />
              <img class="active" src="assets/images/svg/bar-chart-fill.svg" alt="bag" />
            </div>
            <h5>Support</h5>
          </a>
        </li>
    </ul>
  </div>