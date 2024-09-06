<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:03:09 GMT -->
    <?php include 'includes/layouts/head.php'; ?>
	<body>

		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner-border"></div>
			Loading...
		</div>
		<!-- Loading wrapper end -->

		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
            <?php include 'includes/layouts/menu.php'; ?>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
				<div class="page-header">
					
					<!-- Row start -->
					<div class="row gutters">
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

							<!-- Search container start -->
							<div class="search-container">

								<!-- Toggle sidebar start -->
								<div class="toggle-sidebar" id="toggle-sidebar">
									<i class="icon-menu"></i>
								</div>
								<!-- Toggle sidebar end -->

								<!-- Search input group start -->
								<div class="ui fluid category search">
									<div class="ui icon input">
										<input class="prompt" type="text" placeholder="Search">
										<i class="search icon icon-search1"></i>
									</div>
									<div class="results"></div>
								</div>
								<!-- Search input group end -->

							</div>
							<!-- Search container end -->

						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

							<!-- Header actions start -->
							<ul class="header-actions">
								<li class="dropdown">
									<a href="#" id="taskss" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-check-square"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="taskss">
										<div class="dropdown-menu-header">
											Tasks (7/10)
										</div>
										<div class="customScroll">
											<ul class="activity">
												<li class="activity-list">
													<div class="detail-info">
														<p class="date">Today</p>
														<p class="info">Messages accepted with attachments</p>
													</div>
												</li>
												<li class="activity-list danger">
													<div class="detail-info">
														<p class="date">Today</p>
														<p class="info">Send email notifications of subscriptions and deletions to list owner</p>
													</div>
												</li>
												<li class="activity-list success">
													<div class="detail-info">
														<p class="date">Yesterday</p>
														<p class="info">Required change logs activity reports</p>
													</div>
												</li>
												<li class="activity-list warning">
													<div class="detail-info">
													<p class="date">2 Days Ago</p>
														<p class="info">Strategic partnership plan</p>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<p class="date">2 days ago</p>
														<p class="info">Send email notifications of subscriptions and deletions to list owner</p>
													</div>
												</li>
												<li class="activity-list danger">
													<div class="detail-info">
														<p class="date">3 days ago</p>
														<p class="info">Required change logs activity reports</p>
													</div>
												</li>
												<li class="activity-list success">
													<div class="detail-info">
													<p class="date">7 days ago</p>
														<p class="info">Strategic partnership plan</p>
													</div>
												</li>
												<li class="activity-list">
													<div class="detail-info">
														<p class="date">2 weeks ago</p>
														<p class="info">Required change logs activity reports</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-alert-triangle"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">
										<div class="dropdown-menu-header">
											Notifications (7)
										</div>
										<div class="customScroll">
											<ul class="header-notifications">
												<li>
													<a href="#">
														<div class="user-img online">
															<img src="img/user6.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Larkyn</div>
															<div class="noti-details">Check out every table in detail.</div>
															<div class="noti-date">April 25, 04:00 pm</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="user-img busy">
															<img src="img/user10.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Braxten</div>
															<div class="noti-details">Approved new design.</div>
															<div class="noti-date">April 10, 12:00 am</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="user-img away">
															<img src="img/user21.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Maria</div>
															<div class="noti-details">Membership has been ended.</div>
															<div class="noti-date">March 20, 07:30 pm</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="user-img busy">
															<img src="img/user15.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Alex</div>
															<div class="noti-details">Design Review.</div>
															<div class="noti-date">April 18, 09:30 am</div>
														</div>
													</a>
												</li>
												<li>
													<a href="#">
														<div class="user-img online">
															<img src="img/user5.png" alt="User">
														</div>
														<div class="details">
															<div class="user-title">Sunny</div>
															<div class="noti-details">UI Discussion</div>
															<div class="noti-date">April 21, 05:00 pm</div>
														</div>
													</a>
												</li>												
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<span class="avatar">
											<img src="img/user.svg" alt="User Avatar">
											<span class="status busy"></span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
										<div class="header-profile-actions">
											<a href="user-profile.html"><i class="icon-user1"></i>Profile</a>
											<a href="account-settings.html"><i class="icon-settings1"></i>Settings</a>
											<a href="forgot-password.html"><i class="icon-log-out1"></i>Logout</a>
										</div>
									</div>
								</li>
							</ul>
							<!-- Header actions end -->

						</div>
					</div>
					<!-- Row end -->					

				</div>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="card">
									<div class="card-header">
										<h3 >Loan Application Form</h3>
									</div>
									<div class="card-body">
										<div class="row gutters">
											<h4>Loan Information</h4> <hr/> <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<select class="form-control" name="loan_type">
														<option value="" disabled selected>Loan Type</option>
														<option value="personal">Payday Loan</option>
														<option value="salary loan">Salary Loan</option>
														<option value="business">Business Loan</option>
													</select>
													<div class="field-placeholder">Loan Type <span class="text-danger">*</span></div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<input class="form-control" type="number" name="loan_amount">
													<div class="field-placeholder">Loan Amount Requested <span class="text-danger">*</span></div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
												<div class="field-wrapper">
													<select class="form-control" name="repayment_term">
														<option value="" disabled selected>Repayment Term</option>
														<option value="12">12 Months</option>
														<option value="24">24 Months</option>
														<option value="36">36 Months</option>
													</select>
													<div class="field-placeholder">Repayment Term <span class="text-danger">*</span></div>
												</div>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<div class="field-wrapper">
													<textarea class="form-control" rows="2" name="loan_purpose"></textarea>
													<div class="field-placeholder">Purpose of Loan <span class="text-danger">*</span></div>
												</div>
											</div>

											<h4>Account Information</h4> <hr/> <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<input class="form-control" type="text" name="bank_name">
													<div class="field-placeholder">Bank Name</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<input class="form-control" type="text" name="account_number">
													<div class="field-placeholder">Account Number</div>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<select class="form-control" name="account_type">
														<option value="" disabled selected>Account Type</option>
														<option value="savings">Savings</option>
														<option value="salary">Salary</option>
														<option value="current">Current</option>
														<option value="corporate">Corporate</option>
													</select>
													<div class="field-placeholder">Account Type</div>
												</div>
											</div>
										</div> 

										<div class="row gutters">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<a href="./create-application-biodata.php">
													<button class="btn btn-secondary">Previous</button>
												</a>
												<a href="./verification-stage.php">
													<button class="btn btn-primary">Next</button> 
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class="app-footer">© Jad Apps and Tech Solutions Limited</div>
					<!-- App footer end -->

				</div>
				<!-- Content wrapper scroll end -->

			</div>
			<!-- *************
				************ Main container end *************
			************* -->

		</div>
		<!-- Page wrapper end -->

		<?php include('includes/scripts.php'); ?>

	</body>

<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:04:58 GMT -->
</html>