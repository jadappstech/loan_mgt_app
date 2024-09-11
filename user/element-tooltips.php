<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-tooltips.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:50 GMT -->
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
                <h2>Tooltip</h2>
            </div>
        </div>
    </header>

    <!-- tooltip section starts -->
    <section class="section-b-space">
        <div class="custom-container">
            <div class="app-title ">
                <h2>Directions</h2>
            </div>
            <ul>
                <li>
                    <button type="button" class="btn theme-btn" data-bs-container="body" data-bs-toggle="tooltip"
                        data-bs-placement="top" data-bs-content="Top tooltip" data-bs-title="This is top tooltip">
                        Tooltip on top
                    </button>
                </li>
                <li>
                    <button type="button" class="btn theme-btn" data-bs-container="body" data-bs-toggle="tooltip"
                        data-bs-placement="right" data-bs-content="Right tooltip" data-bs-title="This is right tooltip">
                        Tooltip on right
                    </button>
                </li>
                <li>
                    <button type="button" class="btn theme-btn" data-bs-container="body" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" data-bs-content="Bottom tooltip"
                        data-bs-title="This is bottom tooltip">
                        Tooltip on bottom
                    </button>
                </li>
                <li>
                    <button type="button" class="btn theme-btn" data-bs-container="body" data-bs-toggle="tooltip"
                        data-bs-placement="left" data-bs-content="Left tooltip" data-bs-title="This is left tooltip">
                        Tooltip on left
                    </button>
                </li>
            </ul>

            <div class="app-title mt-5">
                <h2>Custom</h2>
            </div>

            <button type="button" class="btn theme-btn" data-bs-toggle="tooltip" data-bs-placement="top"
                data-bs-custom-class="custom-tooltip" data-bs-title="This is custom tooltip ">
                Custom tooltip
            </button>
        </div>
    </section>
    <!-- tooltip section end -->
    
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- tooltip js -->
    <script src="assets/js/custom-tooltips.js"></script>

    <!-- feather js -->
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/custom-feather.js"></script>


    <!-- script js -->
    <script src="assets/js/script.js"></script>

</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-tooltips.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:51 GMT -->
</html>