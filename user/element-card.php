<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-card.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:48 GMT -->
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
                <h2>Cards</h2>
            </div>
        </div>
    </header>

    <section class="section-b-space">
        <div class="custom-container">
            <div class="app-title mb-3">
                <h2>Categories Card</h2>
            </div>

            <ul class="element-list transfer-list p-0">
                <li class="w-100">
                    <div class="transaction-box">
                        <a href="#transaction-detail" data-bs-toggle="modal" class="d-flex gap-3">
                            <div class="categories-image color1">
                                <img class="img-fluid icon" src="assets/images/svg/16.svg" alt="p16" />
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-name pb-0">
                                    <h5>Shopping</h5>
                                    <h5 class="dark-text fw-semibold">$15,000.10</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <div class="app-title mt-5 mb-3">
                    <h2>Subscription Card</h2>
                </div>

                <li class="w-100">
                    <div class="transaction-box">
                        <a href="transaction-history.php" class="d-flex gap-3">
                            <div class="transaction-image">
                                <img class="img-fluid icon" src="assets/images/svg/1.svg" alt="p1" />
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-name">
                                    <h5>Amazon prime</h5>
                                    <h3 class="success-color">$199.<span>99</span></h3>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 class="light-text">Subscription</h5>
                                    <h5 class="light-text">8:45 am</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <div class="app-title mt-5 mb-3">
                    <h2>Currency Card</h2>
                </div>

                <li class="w-100">
                    <div class="transaction-box">
                        <a href="#" class="d-flex gap-3">
                            <div class="transaction-image color1">
                                <img class="img-fluid icon" src="assets/images/svg/bitcoins.svg" alt="bitcoins" />
                            </div>
                            <div class="transaction-details">
                                <div class="transaction-name">
                                    <h5>Bitcoin</h5>
                                    <h3 class="dark-text">$10,265.16</h3>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 class="light-text">BTC</h5>
                                    <h5 class="success-color">+5.17% <span class="light-text">(24H)</span></h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>

                <div class="app-title mt-5 mb-3">
                    <h2>User Details Card</h2>
                </div>

                <li class="w-100">
                    <div class="transfer-box">
                        <div class="transfer-img">
                            <img class="img-fluid icon" src="assets/images/person/p1.png" alt="p1" />
                        </div>
                        <div class="transfer-details">
                            <div>
                                <a href="#">
                                    <h5 class="fw-semibold dark-text">Mike Williams</h5>
                                </a>
                                <h6 class="fw-normal light-text mt-2">**** **** **** 1256</h6>
                            </div>
                            <div class="dropdown">
                                <a href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="icon dark-text" data-feather="more-vertical"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item w-100" href="#">View
                                            transaction</a></li>
                                    <li><a class="dropdown-item w-100" href="#">Message</a></li>
                                    <li><a class="dropdown-item w-100" href="#">Request money</a></li>
                                    <li><a class="dropdown-item w-100" href="#">Pay money</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>

    <!-- feather js -->
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/custom-feather.js"></script>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-card.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:48 GMT -->
</html>