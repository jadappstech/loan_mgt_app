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
		<title>Uni Pro Admin Template - Admin Dashboard</title>


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
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<!-- Card start -->
								<div class="card">
									<div class="card-header">
										<div style="font-size:24px;" class="card-title">Verification stages</div>
									</div>
									<div class="card-body">
										<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="customScroll250" style="overflow: hidden; width: auto; height: 250px;">
											<div class="timeline-activity">
												<div style="display:flex; flex-direction: row; justify-content: space-between;" class="activity-log">
													<div> 
														<p class="log-name">Bio Data<small class="log-time">- 24 hours</small></p>
														<div class="log-details">Identity Verification (National Identity Card, Driver License, International Passport)<span class="text-success ml-1"> </span></div>
													</div>
													<div style="display: grid; place-items: center; margin-right:50px;" class="log-details"><span class="text-success ml-1">Verified</span></div>
												</div>
												
												<div style="display:flex; flex-direction: row; justify-content: space-between;" class="activity-log">
													<div> 
														<p class="log-name">Bank Statements<small class="log-time">- 48-72 hours</small></p>
														<div class="log-details">Savings Account, Current Account, Domiciliary Account, Foriegn Account<span class="text-success ml-1"> </span></div>
													</div>
													<div style="display: grid; place-items: center; margin-right:50px;" class="log-details">
														<span class="text-success ml-1">Verified</span>
													</div>
												</div>

												<div style="display:flex; flex-direction: row; justify-content: space-between;" class="activity-log">
													<div> 
														<p class="log-name">Credit Status<small class="log-time">- 24 hours</small></p>
														<div class="log-details">Excellent Credit, Good Credit, Fair Credit, Poor Credit<span class="text-success ml-1"> </span></div>
													</div>
													<div style="display: grid; place-items: center; margin-right:50px;" class="log-details">
														<span style="color:orange !important;" class="text-success ml-1">Pending Verification</span>
													</div>
												</div>

												<div style="display:flex; flex-direction: row; justify-content: space-between;" class="activity-log">
													<div> 
														<p class="log-name">NIPPS Verification<small class="log-time">- 24 hours</small></p>
														<div class="log-details"><span class="text-success ml-1"> </span></div>
													</div>
													<div style="display: grid; place-items: center; margin-right:50px;" class="log-details"><span style="color:gray !important;" class="text-success ml-1">Submitted</span></div>
												</div>

												<div style="display:flex; flex-direction: row; justify-content: space-between;" class="activity-log">
													<div> 
														<p class="log-name">Collateral Verification<small class="log-time">- 24 hours</small></p>
														<div class="log-details">Real Estate, Vehicles, Inventory<span class="text-success ml-1"> </span></div>
													</div>
													<div style="display: grid; place-items: center; margin-right:50px;" class="log-details"><span class="text-success ml-1">Verified</span></div>
												</div>
											</div>
										</div>
										<div class="slimScrollBar" style="background: rgb(214, 219, 230); width: 5px; position: absolute; top: 0px; opacity: 0.8; display: none; border-radius: 0px; z-index: 99; right: 1px; height: 241.313px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(214, 219, 230); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
									</div>
								</div>
								<!-- Card end -->
																
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
		<script>
		// 	// change to event listener
			// setTimeout(function() {
			// 	window.location.href = "approved.php"; 
			// }, 7000); // 7000 milliseconds = 7 seconds
			// Get references to the verification stages
			const verificationStages = document.querySelectorAll('.activity-log');

			// Function to update a verification stage's status
			function updateVerificationStage(stageIndex, status) {
				const statusElement = verificationStages[stageIndex].querySelector('.log-details span');
				statusElement.textContent = status;
			}

			// Event listener for key presses
			document.addEventListener('keydown', (event) => {
			// Check if the pressed key is '+' or '-'
			if (event.key === '+' || event.key === '-') {
				// Get the index of the next unverified stage
				let nextUnverifiedIndex = -1;
				for (let i = 0; i < verificationStages.length; i++) {
				const statusElement = verificationStages[i].querySelector('.log-details span');
				if (statusElement.textContent === 'Pending Verification') {
					nextUnverifiedIndex = i;
					break;
				}
				}

				// If an unverified stage is found, update its status
				if (nextUnverifiedIndex !== -1) {
				updateVerificationStage(nextUnverifiedIndex, event.key === '+' ? 'Verified' : 'Failed');
				}
			}
			});
		</script>
		

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