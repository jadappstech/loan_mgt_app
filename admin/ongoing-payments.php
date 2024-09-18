<!doctype html>
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
				<?php 
					$active_link = "disbursement";
				include_once "./includes/layouts/menu.php"; ?>
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
									<div class="card-body">
										
										<div class="table-responsive">
											<table id="orders" class="table v-middle">
												<thead>
													<tr>
													<th>Application ID</th>
													<th>Applicant Name</th>
													<th>Date</th>
													<th>Amount</th>
													<th>Progress</th>
													</tr>
												</thead>
												<tbody>
													
													<tr>
														<td>FLM009879986</td>
														<td>Ahmed Musa</td>
														<td>2020/09/18</td>
														<td>₦300,000.00</td>
														<td>
															<div class="progress">
																<div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">  
																	50%
																</div>
															</div> 
														</td>
													</tr>
													<tr>
														<td>FLM009879986</td>
														<td>Ahmed Musa</td>
														<td>2020/09/18</td>
														<td>₦300,000.00</td>
														<td>
															<div class="progress">
															<div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"> 

																50%
															</div>
															</div> 

														</td>
													</tr>
													<tr>
														<td>FLM009879986</td>
														<td>Jane Doe</td>
														<td>2020/09/18</td>
														<td>₦400,000.00</td>
														<td>
															<div class="progress">
															<div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" 
													aria-valuemax="100">
																75%
															</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>FLM009879986</td> 

														<td>Michael Johnson</td>
														<td>2020/09/18</td>
														<td>₦550,000.00</td>
														<td>
															<div class="progress">
															<div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" 
													aria-valuemax="100">
																25%
															</div> 

															</div>
														</td>
													</tr>
													<tr>
														<td>FLM009879986</td>
														<td>Emily Smith</td>
														<td>2020/09/18</td>
														<td>₦600,000.00</td>
														<td>
															<div class="progress">
															<div class="progress-bar bg-secondary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> 

																30%
															</div>
															</div> 

														</td>
													</tr>
													<tr>
														<td>FLM009879986</td>
														<td>David Lee</td>
														<td>2020/09/18</td>
														<td>₦800,000.00</td>
														<td>
															<div class="progress">
															<div class="progress-bar bg-success" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
																90%
															</div>
															</div>
														</td>
													</tr>
													<tr>
														<td>FLM009879986</td> 

														<td>Sarah Williams</td>
														<td>2020/09/18</td>
														<td>₦150,000.00</td>
														<td>
															<div class="progress">
															<div class="progress-bar bg-danger" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> 

																10%
															</div>
															</div> 

														</td>
													</tr>
													<tr>
														<td>FLM009879986</td>
														<td>Christopher Jones</td>
														<td>2020/09/18</td>
														<td>₦350,000.00</td>
														<td>
															<div class="progress">
															<div class="progress-bar bg-info" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"> 

																60%
															</div>
															</div> 

														</td>
													</tr>
													<tr>
														<td>FLM009879986</td>
														<td>Ashley Brown</td>
														<td>2020/09/18</td>
														<td>₦750,000.00</td>
														<td>
															<div class="progress">
															<div class="progress-bar bg-warning" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" 
													aria-valuemax="100">
																80%
															</div> 

															</div>
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