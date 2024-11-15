<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-scrollspy.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:49 GMT -->
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
</head>

<body>
    <!-- header start -->
    <header class="section-t-space">
        <div class="custom-container">
            <div class="header-panel">
                <a href="component.php" class="back-btn">
                    <i class="icon" data-feather="arrow-left"></i>
                </a>
                <h2>Scrollspy</h2>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- scrollspy section start -->
    <section class="section-b-space">
        <div class="custom-container">
            <div class="app-title mb-3">
                <h2>Scrollspy</h2>
            </div>

            <nav id="navbar" class="navbar bg-body-tertiary px-3 mb-3">
                <a class="navbar-brand" href="#">Navbar</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading1">First</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading2">Second</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading3">Three</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading4">Four</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#scrollspyHeading5">Five</a>
                    </li>
                </ul>
            </nav>
            <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%"
                data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
                <h4 id="scrollspyHeading1" class="fw-semibold">First heading</h4>
                <p class="pt-2">This is some placeholder content for the scrollspy page. Note that as you scroll down
                    the page, the appropriate navigation link is highlighted. It's repeated throughout the component
                    example. We keep adding some more example copy here to emphasize the scrolling and highlighting.It's
                    repeated throughout the component example. We keep adding some more example copy here to emphasize
                    the scrolling and highlighting.
                </p>
                <h4 id="scrollspyHeading2" class="mt-3 fw-semibold">Second heading</h4>
                <p class="pt-2">This is some placeholder content for the scrollspy page. Note that as you scroll down
                    the page, the appropriate navigation link is highlighted. It's repeated throughout the component
                    example. We keep adding some more example copy here to emphasize the scrolling and highlighting.It's
                    repeated throughout the component example. We keep adding some more example copy here to emphasize
                    the scrolling and highlighting.
                </p>
                <h4 id="scrollspyHeading3" class="mt-3 fw-semibold">Third heading</h4>
                <p class="pt-2">This is some placeholder content for the scrollspy page. Note that as you scroll down
                    the page, the appropriate navigation link is highlighted. It's repeated throughout the component
                    example. We keep adding some more example copy here to emphasize the scrolling and highlighting.It's
                    repeated throughout the component example. We keep adding some more example copy here to emphasize
                    the scrolling and highlighting.
                </p>
                <h4 id="scrollspyHeading4" class="mt-3 fw-semibold">Fourth heading</h4>
                <p class="pt-2">This is some placeholder content for the scrollspy page. Note that as
                    you scroll down the page, the appropriate navigation link is highlighted. It's
                    repeated throughout the component example. We keep adding some more example copy
                    here to emphasize the scrolling and highlighting.roughout the component example. We keep adding some
                    more example copy here to emphasize the scrolling and highlighting.</p>

                <h4 id="scrollspyHeading5" class="mt-3 fw-semibold">Fifth heading</h4>
                <p class="pt-2">This is some placeholder content for the scrollspy page. Note that as you scroll down
                    the page, the appropriate navigation link is highlighted. It's repeated throughout the component
                    example. We keep adding some more example copy here to emphasize the scrolling and highlighting.It's
                    repeated throughout the component example. We keep adding some more example copy here to emphasize
                    the scrolling and highlighting. This is some placeholder content for the scrollspy page. Note that
                    as you scroll down the page, the appropriate navigation link is highlighted. It's repeated
                    throughout the component example. We keep adding some more example copy here to emphasize the
                    scrolling and highlighting.

                </p>
            </div>
        </div>
    </section>
    <!-- scrollspy section start -->

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- feather js -->
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/custom-feather.js"></script>

    <!-- scrollspy js -->
    <script src="assets/js/scrollspy.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>

</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-scrollspy.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:50 GMT -->
</html>