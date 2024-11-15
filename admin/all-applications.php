<!doctype html>
<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
?>
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

<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

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
													<a class="active">
														<i class="icon-receipt"></i> All
													</a>
													<a href="app-approved.php">
													<i class="fa fa-check" style="font-size:16px; color: #1fd655;"></i>Approved
													</a>
													<a href="app-declined.php">
													<i class="fa fa-close" style="font-size:16px; color:red;"> </i>Declined
													</a>
													<a href="app-under-rev.php">
													<i class="fa fa-book" style="font-size:16px; color:orange;"> </i>Under Review
													</a>
													<a href="app-pending-rev.php">
													<i class="fa fa-clock-o" style="font-size:16px; color:grey;"> </i>Pending
													</a>
												</div>
											</div>
																						
										</div>
									</div>
									<!-- Labels container end -->

                            <!-- Your code goes in here...-->
							<!-- Row start -->
							<div class="row no-gutters justify-content-center">
								<div class="pt-3 px-3"> <span style="font-size:24px; font-weight:600;">Applications</span> </Div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
										<section class="task-list">
											<h6 class="m-0 h-0">&nbsp;</h6>
											
											<!-- Task #0 -->
												<?php
												include_once('./includes/layouts/config.php');

											//  global $conn;
												// $query = "SELECT * FROM applications ORDER BY id DESC";
												$query = "SELECT users.*,applications.* FROM users INNER JOIN applications ON users.id=applications.user_id ";
												// $result = mysqli_query($conn, $query);
												// // var_dump($conn);die;

												// if(mysqli_num_rows($result) > 0){

												// 	$res = mysqli_fetch_all($result, MYSQLI_ASSOC);

												// 	var_dump($res);die;

												// }else{
												// 	var_dump('error');die;
												// }
												
												// $result = $result->fetch_all(MYSQLI_ASSOC);

												// var_dump($result);die;
												$stmt = $conn->prepare($query);
												try{
													$stmt->execute();
													$stmt = $stmt->get_result();
													$result = $stmt->fetch_all(MYSQLI_ASSOC);
													// var_dump($result[0]['firstname']);die;
													$count_result = count($result);
												}catch (mysqli_sql_exception $e) {
													echo "Error Code: " . $e->getCode() . "<br>";
													echo "Error Message: " . $e->getMessage();
												}
												
												
											//  var_dump($result);die;
												for($i = 0; $i < $count_result; $i++){
												$application_id = $result[$i]['application_id'];
												$fullname = $result[$i]['firstname'] . " " . $result[$i]['lastname'];
												$loan_amount = $result[$i]['loan_amount'];
												$duration = $result[$i]['duration'];
												$id = $result[$i]['id'];
												echo 
												"<div class='task-block'>
													<div class='task-checkbox'>
														<input type='checkbox' name='task_00'>
														<div class='ripple-container'>
															<div class='check-off'></div>
															<div class='check-on'>
																<i class='icon-check1'></i>
															</div>
														</div>
													</div>
													<div class='task-details'>
														<div class='task-name'><span style='font-weight:600;' >".$application_id."</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;$fullname </div>
														<div class='task-desc'>Application for a loan of ₦$loan_amount</div>
														<div class='task-desc'><strong>Duration:</strong> $duration</div>
														<div class='task-types'>
															<a href='./application-detail-approved.php?id=$id' style=' background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; ' class='badge bg-warning'>Veiw Details</a>
															<button style=' border: none; border-radius: 4px; padding: 10px; margin-right:4px;' class='badge bg-success'>Check Documents</button>
														</div>
													</div>
													<div style='margin-bottom:20px;'> <span style='background: #e4b424; font-weight: 700; font-size:10px; 
													border: solid 0.8px; border-radius:4px; padding-top:10px; padding-bottom:10px; padding-left:30px; color:#ffffff;
													padding-right:30px;' >Under Review</span> </div>
												</div>";
											}
											?>
											<!-- end of Task #0 -->
											<!-- Task #1 -->
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
													<div class="task-name"><span style="font-weight:600;" >ID No : LN0152</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;  Okon Yinusa</div>
													<div class="task-desc">Application for a loan of One million and three hunderd thousand naira (₦1,300,000)</div>
													<div class="task-desc"><strong>Duration:</strong> 3 Weeks</div>
													<div class="task-types">
														<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
														<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
													</div>
												</div>
												<div style="margin-bottom:20px;"> <span style="background: #e4b424; font-weight: 700; font-size:10px; 
												border: solid 0.8px; border-radius:4px; padding-top:10px; padding-bottom:10px; padding-left:30px; color:#ffffff;
													padding-right:30px;" >Under Review</span> </div>
											</div>
											<!-- end of Task #1 -->

											<!-- Task #2 -->
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
													<div class="task-name"><span style="font-weight:600;" >ID No : LN0153</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;  Musa Okonkwo</div>
													<div class="task-desc">Application for a loan of 5 million naira (₦5,000,000)</div>
													<div class="task-desc"><strong>Duration:</strong> 8 Weeks</div>
													<div class="task-types">
														<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
														<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
													</div>
												</div>
												<div style="margin-bottom:20px;"> <span style="background: #b3b3b3; padding:10px; padding-left:20px;
													padding-right:20px; font-weight: 700; font-size:10px; border: solid 0.8px;
													border-radius:4px;" >Pending Reviewal</span> </div>
											</div>
											<!-- end of Task #2 -->
											
											<!-- Task #3 -->
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
													<div class="task-name"><span style="font-weight:600;" >ID No : LN0154</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;  Adebayo Memuna</div>
													<div class="task-desc">Application for a loan of Two hundred and fifty thousand naria (₦200,000)</div>
													<div class="task-desc"><strong>Duration:</strong> 4 Weeks</div>
													<div class="task-types">
														<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
														<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
													</div>
												</div>
												<div style="margin-bottom:20px;"> <span style="background: #e4b424; font-weight: 700; font-size:10px; 
												border: solid 0.8px; border-radius:4px; padding-top:10px; padding-bottom:10px; padding-left:30px; color:#ffffff;
													padding-right:30px;" >Under Review</span> </div>
											</div>
											<!-- end of Task #3 -->

											<!-- Task #4 -->
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
													<div class="task-name"><span style="font-weight:600;" >ID No : LN0155</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;  Joseph Abraham</div>
													<div class="task-desc">Application for a loan of Eight million naira (₦8,000,000)</div>
													<div class="task-desc"><strong>Duration:</strong> 2 Weeks</div>
													<div class="task-types">
														<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
														<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
													</div>
												</div>
												<div style="margin-bottom:20px;"> <span style="background: #69ee87; padding:10px; padding-left:40.9px;
													padding-right:40.9px; font-weight: 700; font-size:10px; border: solid 0.8px; color: #4f4f4f;
													border-radius:4px;" >Approved</span> </div>
											</div>
											<!-- end of Task #4 -->

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
													<div class="task-name"><span style="font-weight:600;" >ID No : LN0156</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;  Obi Olukare</div>
													<div class="task-desc">Application for a loan of Twelve million naira (₦12,000,000)</div>
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

											<!-- Task #6 -->
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
													<div class="task-name"><span style="font-weight:600;" >ID No : LN0157</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;  Bisi Khadri</div>
													<div class="task-desc">Application for a loan of Eight hundred and fifty thousand naira (N850,000)</div>
													<div class="task-desc"><strong>Duration:</strong> 6 Weeks</div>
													<div class="task-types">
														<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
														<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
													</div>
												</div>
												<div style="margin-bottom:20px;"> <span style="background: #b3b3b3; padding:10px; padding-left:20px;
													padding-right:20px; font-weight: 700; font-size:10px; border: solid 0.8px;
													border-radius:4px;" >Pending Reviewal</span> </div>
											</div>
											<!-- end of Task #6 -->

											<!-- Task #7 -->
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
													<div class="task-name"><span style="font-weight:600;" >ID No : LN0158</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;  Esther Jiboro</div>
													<div class="task-desc">Application for a loan of One million naira (₦1,000,000)</div>
													<div class="task-desc"><strong>Duration:</strong> 6 Weeks</div>
													<div class="task-types">
														<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
														<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
													</div>
												</div>
												<div style="margin-bottom:20px;"> <span style="background: #b3b3b3; padding:10px; padding-left:20px;
													padding-right:20px; font-weight: 700; font-size:10px; border: solid 0.8px;
													border-radius:4px;" >Pending Reviewal</span> </div>
											</div>
											<!-- end of Task #7 -->

											<!-- Task #8 -->
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
													<div class="task-name"><span style="font-weight:600;" >ID No : LN0159</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;  Abdul Babanginda</div>
													<div class="task-desc">Application for a loan of One million seven hundred thousand naira (₦1,700,000)</div>
													<div class="task-desc"><strong>Duration:</strong> 8 Weeks</div>
													<div class="task-types">
														<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
														<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
													</div>
												</div>
												<div style="margin-bottom:20px;"> <span style="background: #b3b3b3; padding:10px; padding-left:20px;
													padding-right:20px; font-weight: 700; font-size:10px; border: solid 0.8px;
													border-radius:4px;" >Pending Reviewal</span> </div>
											</div>
											<!-- end of Task #8 -->

											
											<!-- Task #4 -->
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
													<div class="task-name"><span style="font-weight:600;" >ID No : LN0160</span> &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp;  James Bulus</div>
													<div class="task-desc">Application for a loan of Seventy thousand naira (₦70,000)</div>
													<div class="task-desc"><strong>Duration:</strong> 1 Weeks</div>
													<div class="task-types">
														<button style=" background-color: #1273eb !important; border: solid; border-radius: 6px; padding: 10px; margin-right:4px; margin-left:-2px; " class="badge bg-warning">Veiw Profile</button>
														<button style=" border: none; border-radius: 4px; padding: 10px; margin-right:4px;" class="badge bg-success">Check Documents</button>
													</div>
												</div>
												<div style="margin-bottom:20px;"> <span style="background: #69ee87; padding:10px; padding-left:40.9px;
													padding-right:40.9px; font-weight: 700; font-size:10px; border: solid 0.8px; color: #4f4f4f;
													border-radius:4px;" >Approved</span> </div>
											</div>
											<!-- end of Task #4 -->

											
										</section>
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