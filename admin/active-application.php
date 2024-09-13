<!doctype php>
<html lang="en">
	
<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/view-invoice.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:06:42 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="img/fav.png">

		<!-- Title -->
		<title>Loan Management App - Admin Dashboard</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Mega Menu -->
		<link rel="stylesheet" href="vendor/megamenu/css/megamenu.css">

		<!-- Search Filter JS -->
		<link rel="stylesheet" href="vendor/search-filter/search-filter.css">
		<link rel="stylesheet" href="vendor/search-filter/custom-search-filter.css">

		<!-- Bootstrap Select CSS -->
		<link rel="stylesheet" href="vendor/bs-select/bs-select.css" />

		<!-- Date Range CSS -->
		<link rel="stylesheet" href="vendor/daterange/daterange.css">
		
	</head>
	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			<nav class="sidebar-wrapper">

				<!-- Sidebar content start -->
				<?php include_once "./includes/layouts/menu.php"; ?>
				<!-- Sidebar content end -->
				
			</nav>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
				<?php include_once "./includes/layouts/navbar.php"; ?>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row gutters">
                            <!-- Your code goes in here...-->
							<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="copy-print-csv" class="table v-middle">
                        <thead style="background-color:#1173eb; color:#3333;">
                            <tr>
                                <th>User ID</th>
                                <th>Application Date</th>
                                <th>Loan Amount</th>
                                <th>Application Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FLM00435</td>
                                <td>2020/09/21</td>
                                <td>₦1,500,000</td>
                                <td>
                                    <span class="badge bg-danger">Declined</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00878</td>
                                <td>2020/10/25</td>
                                <td>₦2,300,000</td>
                                <td>
                                    <span class="badge bg-info">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00370</td>
                                <td>2020/10/30</td>
                                <td>₦3,500,000</td>
                                <td>
                                    <span class="badge bg-success">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00983</td>
                                <td>2020/10/10</td>
                                <td>₦500,000,000</td>
                                <td>
                                    <span class="badge bg-info">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00760</td>
                                <td>2020/10/15</td>
                                <td>₦1,500,000</td>
                                <td>
                                    <span class="badge bg-info">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00435</td>
                                <td>2020/10/12</td>
                                <td>₦2,000,000</td>
                                <td>
                                    <span class="badge bg-danger">Declined</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00878</td>
                                <td>2020/10/11</td>
                                <td>₦7,500,000</td>
                                <td>
                                    <span class="badge bg-info">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00435</td>
                                <td>2020/09/21</td>
                                <td>₦1,800,000</td>
                                <td>
                                    <span class="badge bg-danger">Declined</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00878</td>
                                <td>2020/10/25</td>
                                <td>₦900,000</td>
                                <td>
                                    <span class="badge bg-info">Approved</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00370</td>
                                <td>2020/10/30</td>
                                <td>₦800,000</td>
                                <td>
                                    <span class="badge bg-success">Approved</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class="app-footer">© Jad App and Tech Solutions Ltd</div>
					<!-- App footer end -->

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/modernizr.js"></script>
		<script src="js/moment.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Megamenu JS -->
		<script src="vendor/megamenu/js/megamenu.js"></script>
		<script src="vendor/megamenu/js/custom.js"></script>
				
		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Search Filter JS -->
		<script src="vendor/search-filter/search-filter.js"></script>
		<script src="vendor/search-filter/custom-search-filter.js"></script>

		<!-- Bootstrap Select JS -->
		<script src="vendor/bs-select/bs-select.min.js"></script>
		<script src="vendor/bs-select/bs-select-custom.js"></script>

		<!-- Date Range JS -->
		<script src="vendor/daterange/daterange.js"></script>
		<script src="vendor/daterange/custom-daterange.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/view-invoice.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:06:42 GMT -->
</html>