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

        
		<!-- Data Tables -->
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />
		
		
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
							<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">

								<!-- Row start -->
								<div class="row gutters">
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="stats-tile">
											<div class="sale-icon">
												<i class="icon-shopping-bag1"></i>
											</div>
											<div class="sale-details">
												<h2>170</h2>
												<p>Approvals</p>
												<h5><span class="high"><i class="icon-trending-up"></i> 7.5%</span> since last week</h5>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
										<div class="stats-tile">
											<div class="sale-icon">
												<i class="icon-package"></i>
											</div>
											<div class="sale-details">
												<h2>80</h2>
												<p>Pending Applications</p>
												<h5><span class="low"><i class="icon-trending-down"></i> 5.7%</span> since last week</h5>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title">Payments</div>
												<div class="graph-day-selection" role="group">
													<button type="button" class="btn active">Today</button>
													<button type="button" class="btn">Weekly</button>
													<button type="button" class="btn">Monthly</button>
												</div>
											</div>
											<div class="card-body">
												<div id="revenue"></div>
											</div>
										</div>
									</div>
								</div>
								<!-- Row end -->
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
								
								<!-- Row start -->
								<div class="row gutters">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<div class="card">
											<div class="card-header">
												<div class="card-title">Approval Rate</div>
											</div>
											<div class="card-body">
												<div id="tickets"></div>
											</div>
										</div>
									</div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="goal-container">
                                            <div class="goal-info">
                                                <h5>Today's Goal</h5>
                                                <h6>70/100</h6>
                                            </div>
                                            <div class="goal-graph">
                                                <div id="todaysTarget"></div>
                                                <div class="circle-one"></div>
                                                <div class="circle-two"></div>
                                            </div>
                                        </div>
                                    </div>	
								</div>
								<!-- Row end -->

							</div>
						</div>
						<!-- Row end -->						

						<!-- Row start -->
						<div class="row gutters">
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
													  <th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
													  <td>FLM009879986</td>
													  <td>John Amuno</td>
													  <td>2020/09/18</td>
													  <td>₦205,000.00</td>
													  <td>
													  	<span class="text-success"><i class="icon-check-circle"></i> Approved</span>
													  </td>
													</tr>
													<tr>
													  <td>FLM009879986</td>
													  <td>Ola Ifeanyi</td>
													  <td>2020/09/18</td>
													  <td>₦700,000.00</td>
													  <td>
													  	<span class="text-danger"><i class="icon-x-circle"></i> Declined</span>
													  </td>
													</tr>
													<tr>
													  <td>FLM009879986</td>
													  <td>Ahmed Musa</td>
													  <td>2020/09/18</td>
													  <td>₦300,000.00</td>
													  <td>
													  	<span class="text-info">Processing</span>
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

		<!-- Apex Charts -->
		<script src="vendor/apex/apexcharts.min.js"></script>
		<script src="vendor/apex/custom/sales/revenue.js"></script>
		<script src="vendor/apex/custom/sales/tickets.js"></script>

		<!-- Circleful Charts -->
		<script src="vendor/circliful/circliful.min.js"></script>
		<script src="vendor/circliful/circliful.custom.js"></script>

		<!-- Data Tables -->
		<script src="vendor/datatables/dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>
		
		<!-- Custom Data tables -->
		<script src="vendor/datatables/custom/custom-datatables.js"></script>

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/view-invoice.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:06:42 GMT -->
</html>