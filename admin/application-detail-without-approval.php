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

		<style>
			.doc{
				cursor: pointer;
			}

		</style>
	</head>
	<body>

		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			<nav class="sidebar-wrapper">

				<!-- Sidebar content start -->
				<?php
					$active_link = "application";
					include_once "./includes/layouts/menu.php";
				?>
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
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-header-lg">
										<h4>Application Details</h4>
										<div class="text-end">
											<a href="create-invoice.php" class="btn btn-primary">Export</a>
										</div>
									</div>
									<div class="card-body">
										<div class="invoice-container">
											<div class="invoice-header">
												<div class="profile-header">
													<h1>APP412X-01</h1>
													<div class="profile-header-content bg-primary">
														<div class="profile-header-tiles">
															<div class="row gutters">
																<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
																	<div class="profile-tile">
																		<span class="icon">
																			<i class="icon-server"></i>
																		</span>
																		<h6>Name<br><span>Okon Yinusa</sapn></h6>
																	</div>
																</div>
																<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
																	<div class="profile-tile">
																		<span class="icon">
																			<i class="icon-map-pin"></i>
																		</span>
																		<h6>Location<br><span>Kaduna</span></h6>
																	</div>
																</div>
																<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
																	<div class="profile-tile">
																		<span class="icon">
																			<i class="icon-phone1"></i>
																		</span>
																		<h6>Phone<br><span>08035388713</span></h6>
																	</div>
																</div>
															</div>
														</div>
														<div class="profile-avatar-tile">
															<img src="./img/ngMan.jpg" class="img-fluid" alt="User Profile" />
														</div>
													</div>
												</div>
											</div>

											<!-- Row start -->
											<div class="row gutters">
												<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="invoice-details">
														<address class="m-0">
															<h3></h3>
														</address>

														<div class="invoice-num">
															<!-- <div>Invoice - #009</div>
															<div>January 10th 2020</div> -->
														</div>
													</div>
												</div>
											</div>
											<!-- Row end -->

											<!-- Row start -->
											<div class="row gutters">
												<div class="col-12">
													
													<div class="table-responsive">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<!-- <th>Items</th>
																	<th>Product ID</th>
																	<th>Hours</th>
																	<th>Amount (Net)</th> -->
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class='bg-light' colspan='2'>
																		<h6 class='text-danger'>Applicant Details</h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Name of Applicant</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6>Okon Yinusa</h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>DOB of Applicant</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>06-04-1985</span></h6>
																	</td>
																</tr>
																
																<tr>
																	<td>
																		<h6 class='text-primary'>Profession</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>Accountant</span></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Place of Employment</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>21 Area 1, Garki II, Abuja</span></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Annual Income</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6>₦<span>50,000,000</span></h6>
																	</td>
																</tr>
																<tr>
																	<td class='bg-light' colspan='2'>
																		<h6 class='text-danger'>Loan Details</h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Principal Amount</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6>₦<span>80,000,000</span></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Loan starts on</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>03-09-2024</span></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Terms of Payment</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	<td>
																		<h6>Twenty consecutive bi-weekly payroll deductions of ₦800,000<br /> in November 2024</h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Loan ends on</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6>03-09-2024</h6>
																	</td>
																</tr>
																
																<tr>
																	<td>
																		<h6 class='text-primary'>What this loan will be used for</h6>
																		<!-- <p>Using markup languages like php to create user-friendly web pages.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>Business Launching</span></h6>
																	</td>
																</tr>
																<tr>
																	<td colspan=""><h6 class='text-primary'>Remark</h6></td>
																	
																	<td>
																		<textarea name="" id="" class="form-control" placeholder='Enter your comment here'></textarea>
																		<!-- <p class="m-0">₦1000.00</p>
																		<p class="m-0">₦10.00</p>
																		<p class="m-0">₦5.00</p>
																		<h5 class="mt-2 text-danger">₦1015.00</h5> -->
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													
												</div>
											</div>
											<!-- Row end -->

											<!-- Row start -->
											<div class="row gutters">

												<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<div class="text-center">
														<button class="btn btn-success ms-1">Proceed</button>
														<!-- <button class="btn btn-primary ms-1">Call</button> -->
														<button class="btn btn-danger ms-1">Decline</button>
													</div>
												</div>

											</div>
											<!-- Row end -->

										</div>


									</div>
								</div>
								<!-- Card end -->

							</div>
							
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class="app-footer">© Jad Apps and Tech Solutions Ltd</div>
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