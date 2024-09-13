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

		<!-- *********************** Common Css Files *********************** -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="fonts/style.css">

		<!-- Main css -->
		<link rel="stylesheet" href="css/main.css">

		<!-- *********************** Vendor Css Files ************************ -->

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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-header-lg">

										<h4>Make Payment for an Applicant</h4>
										<div class="text-end">
											<a href="create-invoice.php" class="btn btn-primary">Export</a>
										</div>
									</div>
									<div class="card-body">

                                        <!-- Row start -->
										<div class="row gutters">
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<select name="" id="" class="form-control">
                                                        <option value="" selected disabled>Select one</option>
                                                        <option value="">APP16442-O</option>
                                                        <option value="">APP44682-X</option>
                                                    </select>
													<div class="field-placeholder">Select Loan <span class="text-danger">*</span></div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="number">
													<div class="field-placeholder">Amount <span class="text-danger">*</span></div>
													
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
                                                    <select name="" id="" class="form-control">
                                                        <option value="" selected disabled>Select one</option>
                                                        <option value="">May</option>
                                                        <option value="">June</option>
                                                    </select>
													<div class="field-placeholder">Period</div>
													
												</div>
												<!-- Field wrapper end -->

											</div>
											
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												
												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<textarea class="form-control" rows="2"></textarea>
													<div class="field-placeholder">Remark/Comment</div>
													<div class="form-text">
														Please enter a small description.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
												<button class="btn btn-primary">Submit</button>
											</div>
										</div>
										<!-- Row end -->

									</div>
                                </div>
                            </div>
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

</html>