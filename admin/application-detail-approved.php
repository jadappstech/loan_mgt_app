<!doctype html>
<?php
	// include_once('./includes/layouts/config.php');
	// global $conn;
	// var_dump($conn);die;
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
?>	
<html lang="en">
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
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">
									<?php
										include_once('./includes/layouts/config.php');

										$query = "SELECT * FROM applications WHERE id = ?";//.;
										if($conn){
											$stmt = $conn->prepare($query);
											$stmt->bind_param('s', $_GET['id']);
										}else{
											die("Connection failed: " . $conn->connect_error);
										}
										$stmt->execute();
										$stmt = $stmt->get_result();
										$application = $stmt->fetch_assoc();
										$applicant_id = $application['user_id'];
										// var_dump($applicant_id);die;
										//call out the user from db using the id
										$query = "SELECT * FROM users WHERE id = ?";//.;
										if($conn){
											$stmt = $conn->prepare($query);
											$stmt->bind_param('s', $applicant_id);
										}else{
											die("Connection failed: " . $conn->connect_error);
										}
										$stmt->execute();
										$stmt = $stmt->get_result();
										$user = $stmt->fetch_assoc();
										// var_dump($result);die;
									?>
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
													<h1><?= $application['application_id'];?></h1>
													<div class="profile-header-content bg-primary">
														<div class="profile-header-tiles">
															<div class="row gutters">
																<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
																	<div class="profile-tile">
																		<span class="icon">
																			<i class="icon-server"></i>
																		</span>
																		<h6>Name<br><span><?=$user['firstname'] . " " . $user['middlename']. " " . $user['lastname'];?></sapn></h6>
																	</div>
																</div>
																<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
																	<div class="profile-tile">
																		<span class="icon">
																			<i class="icon-map-pin"></i>
																		</span>
																		<h6>Location<br><span><?=$user['state']; ?></span></h6>
																	</div>
																</div>
																<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
																	<div class="profile-tile">
																		<span class="icon">
																			<i class="icon-phone1"></i>
																		</span>
																		<h6>Phone<br><span><?=$user['phone']; ?></span></h6>
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
																		<h6><?=$user['firstname'] . " " . $user['middlename']. " " . $user['lastname'];?></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>DOB of Applicant</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span><?=$user['dob'];?></span></h6>
																	</td>
																</tr>
																
																<tr>
																	<td>
																		<h6 class='text-primary'>Profession</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span><?=$user['profession'];?></span></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Place of Employment</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span><?=$user['emp_name'];?></span></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Monthly Income</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6>₦<span><?=$user['monthly_income'];?></span></h6>
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
																<!-- <tr>
																	<td>
																		<h6 class='text-primary'>Loan starts on</h6>
																		<p>Create quality mockups and prototypes and Design mobile-based features.</p>
																	</td>
																	
																	<td>
																		<h6><span>03-09-2024</span></h6>
																	</td>
																</tr> -->
																<tr>
																	<td>
																		<h6 class='text-primary'>Terms of Payment</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	<td>
																		<h6><?=$application['repayment_term']; ?></h6>
																	</td>
																</tr>
																<!-- <tr>
																	<td>
																		<h6 class='text-primary'>Loan ends on</h6>
																		<p>Create quality mockups and prototypes and Design mobile-based features.</p>
																	</td>
																	
																	<td>
																		<h6>03-09-2024</h6>
																	</td>
																</tr> -->
																
																<tr>
																	<td>
																		<h6 class='text-primary'>What this loan will be used for</h6>
																		<!-- <p>Using markup languages like php to create user-friendly web pages.</p> -->
																	</td>
																	
																	<td>
																		<h6><span><?=$application['purpose_of_loan']; ?></span></h6>
																	</td>
																</tr>
																<tr>
																	<!-- <td colspan=""><h6 class='text-primary'>Remark</h6></td>
																	
																	<td>
																		<textarea name="" id="" class="form-control" placeholder='Enter your comment here'></textarea> -->
																		<!-- <p class="m-0">₦1000.00</p>
																		<p class="m-0">₦10.00</p>
																		<p class="m-0">₦5.00</p>
																		<h5 class="mt-2 text-danger">₦1015.00</h5> -->
																	<!-- </td>
																</tr> -->
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
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 doc-box">

								<!-- Card start -->
									<div class='card' style='height: 35vh;'>
										<div class="card-header bg-success">
											<div class="card-title mb-3 text-white">Documents</div>
										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table id="copy-print-csv" class="table v-middle">
													<thead>
														<tr>
														<th>Documents</th>
														<th>Added Date</th>													  
														<th>Status</th>
														<th>Actions</th>
														</tr>
													</thead>
													<tbody>
														
														<?php
														
														// for($i = 0; $i < )
														$jsonString = $application['docs'];
														$jsonObject = json_decode($jsonString, true);

														$keys = array_keys($jsonObject);
														$values = array_values($jsonObject);
														// var_dump($keys[0]);die;
														// https://loan-app.jadappstech.com/admin/includes/logic/docs/Malik%20SampsonTest%20document.pdf

														for($i  = 0; $i < count($jsonObject); $i++){
															// var_dump($values[$i]);die;
															echo
															"<tr><td>
																<div class='rating-block'>
																	<div class='rate2 doc' data-bs-toggle='modal' data-bs-target='#exampleModal'>$keys[$i]</div>
																</div>
																<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalCenteredScrollableTitle' aria-hidden='true'>
																	<div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
																		<div class='modal-content'>
																			<div class='modal-header'>
																				<h5 class='modal-title' id='exampleModalCenteredScrollableTitle'>View Document</h5>
																				<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
																			</div>
																			<div class='modal-body'>
																				<embed src='https://loan-app.jadappstech.com/admin/includes/logic/docs/$values[$i]' width='100%' height='500px' type='application/pdf'>
																			</embed>
																			
																			<div>
																				<p>Can't view PDF file.
																					<a href='https://loan-app.jadappstech.com/admin/includes/logic/docs/$values[$i]'>Download</a> instead.
																				</p>
																			</div>
																			</div>
																			<div class='modal-footer'>
																			<p><a href='https://loan-app.jadappstech.com/admin/includes/logic/docs/$values[$i]'>Download</a> instead.</p>
																			<!-- <label for='' class='text-center'></label> -->
																				<input type='text' placeholder='Enter Remark/comment Here' class='form-control'>
																				<button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
																				<button type='button' class='btn btn-primary'>Save changes</button>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
															<td>2020/09/18</td>
															<td>
																<span class='badge bg-success'>Available</span>
															</td>
															<td>
																<div class='actions'>
																	<a href='#' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'>
																		<i class='icon-edit1 text-info'></i>
																	</a>
																	<a href='#' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'>
																		<i class='icon-x-circle text-danger'></i>
																	</a>
																</div>
															</td>
															</tr>";
														}

														?>
														<tr>
														<td>
															<div class="rating-block">
																<div class="rate2 doc" data-bs-toggle="modal" data-bs-target="#exampleModal">House at Garki</div>
															</div>
															<!-- Modal start -->
															<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
																<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="exampleModalCenteredScrollableTitle">View Document</h5>
																			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																		</div>
																		<div class="modal-body">
																			<embed src="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf" width="100%" height="500px" type="application/pdf">
																		</embed>
																		<div>
																			<p>Can't view PDF file.
																				<a href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf">Download</a> instead.
																			</p>
																		</div>
																		</div>
																		<div class="modal-footer">
																		<p><a href="https://media.geeksforgeeks.org/wp-content/cdn-uploads/20210101201653/PDF.pdf">Download</a> instead.</p>
																		<!-- <label for="" class='text-center'></label> -->
																			<input type="text" placeholder='Enter Remark/comment Here' class='form-control'>
																			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
																			<button type="button" class="btn btn-primary">Save changes</button>
																		</div>
																	</div>
																</div>
															</div>
															<!-- Modal end -->
														</td>
														<td>2020/09/18</td>
														<td>
															<span class="badge bg-success">Available</span>
														</td>
														<td>
															<div class="actions">
																<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
																	<i class="icon-edit1 text-info"></i>
																</a>
																<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
																	<i class="icon-x-circle text-danger"></i>
																</a>
															</div>
														</td>
														</tr>
														<tr>
														<td>
															<div class="rating-block">
																	<div class="rate1">Car papers</div>
																</div>
														</td>
														<td>2020/10/21</td>
														<td>
															<span class="badge bg-success">Available</span>
														</td>
														<td>
																<div class="actions">
																<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
																	<i class="icon-edit1 text-info"></i>
																</a>
																<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
																	<i class="icon-x-circle text-danger"></i>
																</a>
															</div>
														</td>
														</tr>
														<tr>
														<td>
															<div class="rating-block">
																	<div class="rate5">Land Papers</div>
																</div>
														</td>
														<td>2020/10/24</td>
														<td>
															<span class="badge bg-success">Available</span>
														</td>
														<td>
															<div class="actions">
																<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
																	<i class="icon-edit1 text-info"></i>
																</a>
																<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
																	<i class="icon-x-circle text-danger"></i>
																</a>
															</div>
														</td>
														</tr>
														
													</tbody>
												</table>
											</div>
										</div>
									</div>
								<!-- Card end -->
								<!-- Card start -->
								<div class="card">
                                    <div class="card-header bg-primary">
									<div class="card-title mb-3 text-white">Approval</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="customScroll">

                                            <!-- Note - Below is empty div - Place your content below... if content height is more than 210px automatically scrollbar will enable. -->
                                            <div style="height: 41vh;">
                                                <div class="todo-container">
                                                    <ul class="activity">
                                                        <li class="activity-list">
                                                            <div class="detail-info">
                                                                <p class="date">Team Lead</p>
                                                                <p class="info">2 hrs ago</p>
                                                            </div>
                                                        </li>
                                                        <li class="activity-list">
                                                            <div class="detail-info">
                                                                <p class="date">Group Head Manager</p>
                                                                <p class="info">1 hr ago</p>
                                                            </div>
                                                        </li>
                                                        <li class="activity-list">
                                                            <div class="detail-info">
                                                                <p class="date">Legal</p>
                                                                <p class="info">30 mins ago</p>
                                                            </div>
                                                        </li>
                                                        <li class="activity-list">
                                                            <div class="detail-info">
                                                            <p class="date">Risk Management</p>
                                                                <p class="info">20 mins ago</p>
                                                            </div>
                                                        </li>
                                                        <li class="activity-list primary">
                                                            <div class="detail-info">
                                                                <p class="date">Disbursed</p>
                                                                <p class="info">5 mins ago</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
											</div>
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