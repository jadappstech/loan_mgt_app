<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-chart.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:48 GMT -->
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

    <!-- iconsax css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/iconsax.css" />


    <!-- bootstrap css -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.min.css" />

    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/swiper-bundle.min.css" />

    <!-- Theme css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <header class="section-t-space">
        <div class="custom-container">
            <div class="header-panel">
                <a href="component.php" class="back-btn">
                    <i class="icon" data-feather="arrow-left"></i>
                </a>
                <h2>Form</h2>
            </div>
        </div>
    </header>

    <!-- chart section starts -->
    <section class="section-b-space">
        <div class="custom-container">

            <div class="app-title mb-3">
                <h2>Donut Chart</h2>
            </div>

            <div class="revenue-chart">
                <ul class="month-list">
                    <li>Jan</li>
                    <li>Feb</li>
                    <li>Mar</li>
                    <li>Apr</li>
                    <li class="active">May</li>
                    <li>Jun</li>
                </ul>
                <div id="revenue"></div>
            </div>

            <div class="app-title mt-5 mb-3">
                <h2>Semi-Donut Chart</h2>
            </div>

            <div class="chart mt-3">
                <div id="category-chart"></div>
            </div>

            <div class="app-title mt-5 mb-3">
                <h2>Bar Chart</h2>
            </div>
            <div class="chart">
                <div class="d-flex justify-content-between">
                    <h3 class="fw-semibold dark-text">Analytics | <span class="light-text fw-normal">Mar-
                            Jul</span></h3>
                    <ul class="listing">
                        <li>W</li>
                        <li class="active">M</li>
                        <li>Y</li>
                    </ul>
                </div>

                <div id="analytics-chart"></div>
            </div>

            <div class="app-title mt-5 mb-3">
                <h2>Candlestick Chart</h2>
            </div>

            <div class="chart mb-3">
                <ul class="day-list">

                    <li class="active">Today</li>
                    <li>Week</li>
                    <li>Month</li>
                    <li>Year</li>
                </ul>
                <div id="wallet"></div>
            </div>

            <div class="app-title mt-5 mb-3">
                <h2>mixed Chart</h2>
            </div>

            <div class="chart">
                <ul class="day-list">
                    <li>1D</li>
                    <li class="active">1M</li>
                    <li>3M</li>
                    <li>6M</li>
                    <li>1Y</li>
                </ul>
                <div class="coin-chart-wrapper" id="coin"></div>
                <div class="back-bar-container">
                    <div id="order-bar"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- form section end -->

    <!-- feather js -->
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/custom-feather.js"></script>

    <!-- apexcharts js -->
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/custom-revenue-chart.js"></script>
    <script src="assets/js/custom-chart2.js"></script>
    <script src="assets/js/custom-coin-chart.js"></script>
    <script src="assets/js/custom-candlestick-chart.js"></script>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-chart.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:48 GMT -->
</html>