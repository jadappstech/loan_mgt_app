<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-modal.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:48 GMT -->
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
                <h2>Modal</h2>
            </div>
        </div>
    </header>

    <!-- offcanvas section starts -->
    <section class="section-b-space">
        <div class="custom-container">

            <div class="app-title ">
                <h2>Error</h2>
            </div>

            <a href="#error" class="btn theme-btn w-100" data-bs-toggle="modal">Error</a>

            <div class="app-title mt-5">
                <h2>Success</h2>
            </div>

            <a href="#done" class="btn theme-btn w-100" data-bs-toggle="modal">Success</a>

            <div class="app-title mt-5">
                <h2>Delete</h2>
            </div>

            <a href="#delate" class="btn theme-btn w-100" data-bs-toggle="modal">Delate</a>

            <div class="app-title mt-5">
                <h2>Form</h2>
            </div>

            <a href="#form" class="btn theme-btn w-100" data-bs-toggle="modal">Form</a>

            <div class="app-title mt-5">
                <h2>Info</h2>
            </div>

            <a href="#info" class="btn theme-btn w-100" data-bs-toggle="modal">Info</a>
        </div>
    </section>

    <!-- error modal starts -->
    <div class="modal error-modal fade" id="error" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Error</h2>
                </div>
                <div class="modal-body">
                    <div class="error-img">
                        <img class="img-fluid" src="assets/images/svg/error.svg" alt="error" />
                    </div>
                    <h3>There was a problem when transferring money, please verify and try again.</h3>
                    <a href="element-modal.php" class="btn theme-btn successfully w-100" data-bs-toggle="modal">Try
                        again</a>
                </div>
                <button type="button" class="btn close-btn" data-bs-dismiss="modal">
                    <i class="icon" data-feather="x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- error modal starts -->

    <!-- success modal starts -->
    <div class="modal successful-modal fade" id="done" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Successfully</h2>
                </div>
                <div class="modal-body">
                    <div class="done-img">
                        <img class="img-fluid" src="assets/images/svg/done.svg" alt="done" />
                    </div>
                    <h2>$49.85</h2>
                    <h5 class="pb-0">#TR - 7859623</h5>

                    <a href="element-modal.php" class="btn theme-btn successfully w-100">Back to home</a>
                </div>
                <button type="button" class="btn close-btn" data-bs-dismiss="modal">
                    <i class="icon" data-feather="x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- success card modal end -->

    <!-- delate card modal start -->
    <div class="modal error-modal fade" id="delate" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="error-img">
                        <img class="img-fluid" src="assets/images/svg/delate.svg" alt="delate" />
                    </div>
                    <h3>Are you sure you want to delete this card ?</h3>
                    <a href="element-modal.php" class="btn theme-btn successfully w-100" data-bs-toggle="modal">Delete
                        card</a>
                </div>
                <button type="button" class="btn close-btn" data-bs-dismiss="modal">
                    <i class="icon" data-feather="x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- delate card modal end -->

    <!-- form modal starts -->
    <div class="modal add-money-modal fade" id="form" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Add Money</h2>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputcards" class="form-label mb-2">Card type</label>
                        <div class="d-flex gap-2">
                            <select id="inputcards" class="form-select">
                                <option selected>Select card type</option>
                                <option>Master Card</option>
                                <option>Visa Card</option>
                                <option>RuPay Card</option>
                                <option>Business Card</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Card Number</label>
                        <div class="form-input mb-3">
                            <input type="text" class="form-control" placeholder="Enter card number" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">Exp. Date</label>
                                <div class="form-input mb-3">
                                    <input type="date" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-label">CVV</label>
                                <div class="form-input mb-3"><input type="number" class="form-control"
                                        placeholder="Enter cvv" /></div>
                            </div>
                        </div>
                    </div>

                    <a href="element-modal.php" class="btn theme-btn successfully w-100">Add Card</a>
                </div>
                <button type="button" class="btn close-btn" data-bs-dismiss="modal">
                    <i class="icon" data-feather="x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- form modal end -->

    <!-- info modal starts -->
    <div class="modal pay-modal fade" id="info" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Detail</h2>
                </div>
                <div class="modal-body">
                    <ul class="details-list">
                        <li>
                            <h3 class="fw-normal dark-text">Amount</h3>
                            <h3 class="fw-semibold theme-color">$69.49</h3>
                        </li>
                        <li>
                            <h3 class="fw-normal dark-text">Bill date</h3>
                            <h3 class="fw-normal light-text">10 May, 2023</h3>
                        </li>
                        <li>
                            <h3 class="fw-normal dark-text">Due Date</h3>
                            <h3 class="fw-normal light-text">22 May, 2023</h3>
                        </li>
                        <li>
                            <h3 class="fw-normal dark-text">Bill number</h3>
                            <h3 class="fw-normal light-text">BM452695523</h3>
                        </li>
                        <li>
                            <h3 class="fw-normal dark-text">Mobile number</h3>
                            <h3 class="fw-normal light-text">+91 ***** **256</h3>
                        </li>
                        <li>
                            <h3 class="fw-normal dark-text">Bill status</h3>
                            <h3 class="fw-semibold theme-color">Paid</h3>
                        </li>
                    </ul>
                    <a href="element-modal.php" class="btn theme-btn successfully w-100">Paid - Thank you !</a>
                </div>
                <button type="button" class="btn close-btn" data-bs-dismiss="modal">
                    <i class="icon" data-feather="x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- info modal end -->

    <!-- feather js -->
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/custom-feather.js"></script>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from themes.pixelstrap.net/pwa/mpay/element-modal.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Sep 2024 05:08:48 GMT -->
</html>