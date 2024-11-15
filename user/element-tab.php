<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-tab.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:50 GMT -->
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
                <h2>Tab</h2>
            </div>
        </div>
    </header>

    <!-- tab section starts -->
    <section class="section-b-space">
        <div class="custom-container">
            <div class="app-title mb-3">
                <h2>Default tabs</h2>
            </div>

            <ul class="nav nav-pills tab-style1 mt-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="pill" data-bs-target="#home"
                        type="button" role="tab">Tab-1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="pill" data-bs-target="#profile"
                        type="button" role="tab">Tab-2</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade p-2 show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <p class="dark-text">When you click on the linked content for tab 1, it changes the visibility of
                        the next
                        tab's placeholder content.</p>
                </div>
                <div class="tab-pane fade p-2" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <p class="dark-text">When you click on the linked content for tab 2, it changes the visibility of
                        the next
                        tab's placeholder content.</p>
                </div>
            </div>


            <div class="app-title  mt-5 mb-3">
                <h2>Pills tabs</h2>
            </div>

            <ul class="nav nav-pills tab-style3 w-100 mt-0" id="myTab" role="tablist">
                <li class="nav-item w-50" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Tab-1</button>
                </li>
                <li class="nav-item w-50" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Tab-2</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade p-2 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <p class="dark-text"> When you click on the linked content for tab 1, it changes the visibility of
                        the next
                        tab's placeholder content.</p>
                </div>
                <div class="tab-pane fade p-2" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <p class="dark-text"> When you click on the linked content for tab 2, it changes the visibility of
                        the next
                        tab's placeholder content.</p>
                </div>
            </div>


            <div class="app-title mt-5 mb-3">
                <h2>Border tabs</h2>
            </div>

            <div class="category-detail-tab">
                <ul class="nav nav-tabs tab-style2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="items-tab" data-bs-toggle="tab"
                            data-bs-target="#items-tab-pane" type="button" role="tab">Tab-1</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="activity-tab" data-bs-toggle="tab"
                            data-bs-target="#activity-tab-pane" type="button" role="tab">Tab-2</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade p-2 show active" id="items-tab-pane" role="tabpanel"
                        aria-labelledby="home-tab" tabindex="0">
                        <p class="dark-text">When you click on the linked content for tab 1, it changes the visibility
                            of the next
                            tab's placeholder content.</p>
                    </div>
                    <div class="tab-pane fade p-2" id="activity-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">
                        <p class="dark-text">When you click on the linked content for tab 2, it changes the visibility
                            of the next
                            tab's placeholder content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tab section end -->

    <!-- feather js -->
    <script src="assets/js/feather.min.js"> </script>
    <script src="assets/js/custom-feather.js"></script>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-tab.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:50 GMT -->
</html>