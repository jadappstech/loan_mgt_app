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
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

								<!-- Task section start -->
								<div class="tasks-section">

									<!-- Labels container start -->
									<div class="labels-container">
										<div class="lablesContainerScroll">
											<div class="filters-block">
												<h5>Filters</h5>
												<div class="filters">
													<a style=" background:white;" href="all-applications.php" class="active">
														<i class="icon-receipt"></i> All
													</a>
													<a  href="app-approved.php">
													<i class="fa fa-check" style="font-size:16px; color: #1fd655;"></i>Approved
													</a>
													<a style="background-color: #f5f8fd;">
													<i class="fa fa-close" style="font-size:16px; color:red;"> </i>Declined
													</a>
												</div>
											</div>
																						
										</div>
									</div>
									<!-- Labels container end -->

									<!-- Tasks container start -->
									<div class="tasks-container">
										<div class="modal fade" id="addNewTask" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addNewDocumentLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="addNewDocumentLabel">Add Document</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
															<span aria-hidden="true"></span>
														</button>
													</div>
													<div class="modal-body">
														<form class="row gutters">
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
																<!-- Field wrapper start -->
																<div class="field-wrapper">
																	<input type="text" class="form-control">
																	<div class="field-placeholder">Task Title</div>
																</div>
																<!-- Field wrapper end -->
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
																<!-- Field wrapper start -->
																<div class="field-wrapper">
																	<select class="select-single js-states" title="Select Product Category" data-live-search="true">
																		<option>Design</option>
																		<option>Backend</option>
																		<option>Testing</option>
																		<option>UI Development</option>
																		<option>CSS</option>
																	</select>
																	<div class="field-placeholder">Task Type</div>
																</div>
																<!-- Field wrapper end -->
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
																<!-- Field wrapper start -->
																<div class="field-wrapper">
																	<div class="input-group">
																		<input type="text" class="form-control datepicker-opens-left">
																		<span class="input-group-text">
																			<i class="icon-calendar1"></i>
																		</span>
																	</div>
																	<div class="field-placeholder">Start Date</div>
																</div>
																<!-- Field wrapper end -->
															</div>
															<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
																<!-- Field wrapper start -->
																<div class="field-wrapper">
																	<div class="input-group">
																		<input type="text" class="form-control datepicker-opens-left">
																		<span class="input-group-text">
																			<i class="icon-calendar1"></i>
																		</span>
																	</div>
																	<div class="field-placeholder">End Date</div>
																</div>
																<!-- Field wrapper end -->
															</div>
															<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
																<!-- Field wrapper start -->
																<div class="field-wrapper m-0">
																	<textarea class="form-control" rows="3"></textarea>
																	<div class="field-placeholder">Task Details</div>
																</div>
																<!-- Field wrapper end -->
															</div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Create Task</button>
													</div>
												</div>
											</div>
										</div>
										
										<div class="tasksContainerScroll">
											<!-- Row start -->
											<div class="row no-gutters justify-content-center">
												<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
													<section class="task-list">
														<h6 class="m-0 h-0">&nbsp;</h6>
														
															<!-- Task #5 -->
															<div class="task-block">
															<div class="task-checkbox">
																<input type="checkbox" name="task_00">
																<div class="ripple-container">
																	<div class="check-off"></div>
																	<div class="check-on">
																		<i class="icon-check1"></i>
																	</div>
																</div>
															</div>
															<div class="task-details">
																<div class="task-name">Obi Olukare</div>
																<div class="task-desc">Application for a loan of Twelve million naira (N12,000,000)</div>
																<div class="task-desc"><strong>Duration:</strong> 8 Weeks</div>
																<div class="task-types">
																	<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
																	<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
																</div>
															</div>
															<div style="margin-bottom:20px;"> <span style="background: #ff0000; padding:10px; padding-left:43.5px;
															 padding-right:43.5px; font-weight: 700; font-size:10px; border: solid 0.8px; color:#ffffff;
															 border-radius:4px;" >Declined</span> </div>
														</div>
														<!-- end of Task #5 -->

															<!-- Task #5 -->
															<div class="task-block">
															<div class="task-checkbox">
																<input type="checkbox" name="task_00">
																<div class="ripple-container">
																	<div class="check-off"></div>
																	<div class="check-on">
																		<i class="icon-check1"></i>
																	</div>
																</div>
															</div>
															<div class="task-details">
																<div class="task-name">Racheal Sholawale</div>
																<div class="task-desc">Application for a loan of Five million naira (N5,000,000)</div>
																<div class="task-desc"><strong>Duration:</strong> 6 Weeks</div>
																<div class="task-types">
																	<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
																	<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
																</div>
															</div>
															<div style="margin-bottom:20px;"> <span style="background: #ff0000; padding:10px; padding-left:43.5px;
															 padding-right:43.5px; font-weight: 700; font-size:10px; border: solid 0.8px; color:#ffffff;
															 border-radius:4px;" >Declined</span> </div>
														</div>
														<!-- end of Task #5 -->

															<!-- Task #5 -->
															<div class="task-block">
															<div class="task-checkbox">
																<input type="checkbox" name="task_00">
																<div class="ripple-container">
																	<div class="check-off"></div>
																	<div class="check-on">
																		<i class="icon-check1"></i>
																	</div>
																</div>
															</div>
															<div class="task-details">
																<div class="task-name">Sani Peters</div>
																<div class="task-desc">Application for a loan of Five hundred thousand naira (N500,000)</div>
																<div class="task-desc"><strong>Duration:</strong> 5 Weeks</div>
																<div class="task-types">
																	<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
																	<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
																</div>
															</div>
															<div style="margin-bottom:20px;"> <span style="background: #ff0000; padding:10px; padding-left:43.5px;
															 padding-right:43.5px; font-weight: 700; font-size:10px; border: solid 0.8px; color:#ffffff;
															 border-radius:4px;" >Declined</span> </div>
														</div>
														<!-- end of Task #5 -->

													</section>
												</div>
											</div>
											<!-- Row end -->
										</div>
									</div>
									<!-- Tasks container end -->

								</div>
								<!-- Task section end -->

							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->
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