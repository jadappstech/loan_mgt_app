<?php
	session_start();
	include_once('./includes/layouts/config.php');
	$applicant_id = $_GET['id'];
	$_SESSION['applicant_id'] = $applicant_id;
	$query = "SELECT * FROM users WHERE id = $applicant_id";
	$query = mysqli_query($conn, $query);
	// var_dump($conn);die;
	if($query->num_rows > 0){
		$result = $query -> fetch_all(MYSQLI_ASSOC);
		// echo $result[0]['firstname'];
	}else{
		echo 'No record found';
	}

	$firstname = htmlspecialchars($result[0]['firstname']); 
	$middlename = htmlspecialchars($result[0]['middlename']); 
	$lastname = htmlspecialchars($result[0]['lastname']); 
	$email = htmlspecialchars($result[0]['email']); 
	$phone = htmlspecialchars($result[0]['phone']); 
	$address = htmlspecialchars($result[0]['address']); 
	$dob = htmlspecialchars($result[0]['dob']); 
	// $loantype = htmlspecialchars($result[0]['loantype']); 
	// $loan_amt = htmlspecialchars($result[0]['loan_amt']); 
	$randomNumber = mt_rand(10000, 99999);
	$_SESSION['application_id'] = "CENTFIN-APP" . $randomNumber;
?>

<!doctype html>
<html lang='en'>
	
<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/view-invoice.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:06:42 GMT -->
<head>
		<!-- Required meta tags -->
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

		<!-- Meta -->
		<meta name='description' content='Responsive Bootstrap4 Dashboard Template'>
		<meta name='author' content='ParkerThemes'>
		<link rel='shortcut icon' href='img/fav.png'>

		<!-- Title -->
		<title>Loan Management App - Admin Dashboard</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel='stylesheet' href='css/bootstrap.min.css'>
		
		<!-- Icomoon Font Icons css -->
		<link rel='stylesheet' href='fonts/style.css'>

		<!-- Main css -->
		<link rel='stylesheet' href='css/main.css'>


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Mega Menu -->
		<link rel='stylesheet' href='vendor/megamenu/css/megamenu.css'>

		<!-- Search Filter JS -->
		<link rel='stylesheet' href='vendor/search-filter/search-filter.css'>
		<link rel='stylesheet' href='vendor/search-filter/custom-search-filter.css'>

		<!-- Bootstrap Select CSS -->
		<link rel='stylesheet' href='vendor/bs-select/bs-select.css' />

		<!-- Date Range CSS -->
		<link rel='stylesheet' href='vendor/daterange/daterange.css'>
		
	</head>
	<body>

		<!-- Page wrapper start -->
		<div class='page-wrapper'>
			
			<!-- Sidebar wrapper start -->
			<nav class='sidebar-wrapper'>

				<!-- Sidebar content start -->
				<?php 
					$active_link = 'application';
					include_once './includes/layouts/menu.php'; 
				?>
				<!-- Sidebar content end -->
				
			</nav>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class='main-container'>

				<!-- Page header starts -->
				<?php include_once './includes/layouts/navbar.php'; ?>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class='content-wrapper-scroll'>
					<!-- Content wrapper start -->
					<div class='content-wrapper'>
						<!-- Row start -->
						<div class='row gutters'>
							<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>

								<!-- Card start -->
								 <form action="./includes/logic/create-application-biodata-logic.php" method="POST" enctype="multipart/form-data">
								<div class='card'>
									<div class='card-header'>
										<h3>Loan Application Form <span name="application_id">CENTFIN-APP<?= $randomNumber;?></h3>
									</div>
									<div class='card-header'>
										<div class='card-titlex'>Bio Data</div>
									</div>
									<div class='card-body'>
										<div class='row gutters'>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
												<?php ?>
												<input 
													class='form-control' 
													type='text' 
													name='full_name' 
													value="<?php echo "$firstname $middlename $lastname";?>" disabled>

													<div class='field-placeholder'>Full Name <span class='text-danger'>*</span></div>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='email' name='email_address' value='<?php echo "$email"; ?>' disabled>
													<div class='field-placeholder'>Email Address <span class='text-danger'>*</span></div>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text' name='phone_number' value='<?php echo "$phone"; ?>' disabled>
													<div class='field-placeholder'>Phone Number <span class='text-danger'>*</span></div>
												</div>
											</div>
											<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text' name='residential_address'value='<?php echo "$address"; ?>' disabled>
													<div class='field-placeholder'>Residential Address <span class='text-danger'>*</span></div>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text' name='date_of_birth'value='<?php echo "$dob"; ?>' disabled>
													<div class='field-placeholder'>Date of Birth <span class='text-danger'>*</span></div>
												</div>
											</div>
										</div>

										<div class='row gutters'>
											<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12'>
												<div class='field-wrapper'>
													<select class='form-control' name='loan_type'>
														<option value='' disabled selected>Loan Type</option>
														<option value='1'>Personal Loan</option>
														<option value='2'>Business Loan</option>
														<option value='3'>Mortgage</option>
														</select>
													<div class='field-placeholder'>Loan Type <span class='text-danger'>*</span></div>
												</div>
											</div>
											<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='number' name='loan_amount'>
													<div class='field-placeholder'>Loan Amount Requested <span class='text-danger'>*</span></div>
												</div>
											</div>
											<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text' name='duration'>
													<div class='field-placeholder'>Loan Duration <span class='text-danger'>*</span></div>
												</div>
											</div>
											<div class='col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12'>
												<div class='field-wrapper'>
													<select class='form-control' name='repayment_term'>
														<option value='' disabled selected>Repayment Term</option>
														<option value='weekly'>Weekly</option>
														<option value='bi-weekly'>Bi-weekly</option>
														<option value='monthly'>Monthly</option>
														</select>
													<div class='field-placeholder'>Repayment Term <span class='text-danger'>*</span></div>
												</div>
											</div>
											<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
												<div class='field-wrapper'>
													<textarea class='form-control' rows='2' name='purpose_of_loan'></textarea>
													<div class='field-placeholder'>Purpose of Loan <span class='text-danger'>*</span></div>
												</div>
											</div>
										</div>

										<div class='row gutters'>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text' name='emp_biz_name'>
													<div class='field-placeholder'>Employer/Business Name</div>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='number' name='monthly_income'>
													<div class='field-placeholder'>Monthly Income</div>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='number' name='monthly_expenses'>
													<div class='field-placeholder'>Monthly Expenses</div>
												</div>
											</div>
										</div>

										<div class='row gutters'>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
												<label for='proof_of_identity'>Proof of Identity:</label>
												<input type='file' class='form-control-file' id='proof_of_identity' name='proof_of_identity'>
												<small class='form-text text-muted'>e.g., National ID, Passport</small>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
												<label for='proof_of_address'>Proof of Address:</label>
												<input type='file' class='form-control-file' id='proof_of_address' name='proof_of_address'>
												<small class='form-text text-muted'>e.g., Utility Bill</small>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
												<label for='proof_of_income'>Proof of Income:</label>
												<input type='file' class='form-control-file' id='proof_of_income' name='proof_of_income'>
												<small class='form-text text-muted'>e.g., Payslips, Bank Statements</small>
												</div>
											</div>
										</div>
									</div> 
								</div>
								
								<!-- Card end -->

								<!-- <div class='card'>
									<div class='card-header'>
										<div class='card-title'>Collateral Details (if applicable)</div>
									</div>
									<div class='card-body'>
										<div class='row gutters'>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<select class='form-control' name='collateral_type'>
														<option value='' disabled selected>Collateral Type</option>
														<option value='real_estate'>Real Estate</option>
														<option value='vehicle'>Vehicle</option>
														<option value='savings'>Savings Account</option>
														<option value='other'>Other</option>
													</select>
													<div class='field-placeholder'>Collateral Type</div>
												</div>
											</div>
											<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text' name='collateral_description'>
													<div class='field-placeholder'>Description of Collateral</div>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='number' name='collateral_value'>
													<div class='field-placeholder'>Estimated Value</div>
												</div>
											</div>
											<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12' name='collateral_documents_instruction'>
												<div class='field-wrapper'>
													<div class='form-text'>
														Please attach any relevant documents related to the collateral (e.g., property title, vehicle registration, etc.).
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->

								<div class='card'>
									<div class='card-header'>
										<div class='card-title'>Guarantor Details</div>
									</div>
									<div class='card-body'>
										<div class='row gutters'>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text' name='guarantor_name'>
													<div class='field-placeholder'>Guarantor's Full Name</div>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='email' name='guarantor_email'>
													<div class='field-placeholder'>Guarantor's Email Address</div>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text' name='guarantor_phone'>
													<div class='field-placeholder'>Guarantor's Phone Number</div>
												</div>
											</div>
											<div class='col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text' name='guarantor_address'>
													<div class='field-placeholder'>Guarantor's Residential Address</div>
												</div>
											</div>
											<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
												<div class='field-wrapper'>
													<input class='form-control' type='text'  name='guarantor_relationship'>
													<div class='field-placeholder'>Relationship to Guarantor</div>
												</div>
											</div>
											<div class='row gutters'>
												<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
													<div class='field-wrapper'>
													<label for='proof_of_identity'>Proof of Identity:</label>
													<input type='file' class='form-control-file' id='proof_of_identity' name='guarantor_proof_of_identity'>
													<small class='form-text text-muted'>e.g., National ID, Passport</small>
													</div>
												</div>
												<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
													<div class='field-wrapper'>
													<label for='proof_of_address'>Proof of Address:</label>
													<input type='file' class='form-control-file' id='proof_of_address' name='guarantor_proof_of_address'>
													<small class='form-text text-muted'>e.g., Utility Bill</small>
													</div>
												</div>
												<div class='col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12'>
													<div class='field-wrapper'>
													<label for='proof_of_income'>Proof of Income:</label>
													<input type='file' class='form-control-file' id='proof_of_income' name='guarantor_proof_of_income'>
													<small class='form-text text-muted'>e.g., Payslips, Bank Statements</small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class='card'>
									<div class='row gutters card-body'>
										<div class='col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12'>
											<?php //echo "<a href='./create-application-loan-info.php?id=$applicant_id' class='btn btn-primary'>Next</a>"; ?>
											<button type="submit" name="form_one" class='btn btn-primary'>Next</button>
										</div>
									</div>
								</div>

							</div>
						</div>
						</form>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

					<!-- App Footer start -->
					<div class='app-footer'>© Jad App and Tech Solutions Ltd</div>
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
		<script src='js/jquery.min.js'></script>
		<script src='js/bootstrap.bundle.min.js'></script>
		<script src='js/modernizr.js'></script>
		<script src='js/moment.js'></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Megamenu JS -->
		<script src='vendor/megamenu/js/megamenu.js'></script>
		<script src='vendor/megamenu/js/custom.js'></script>
				
		<!-- Slimscroll JS -->
		<script src='vendor/slimscroll/slimscroll.min.js'></script>
		<script src='vendor/slimscroll/custom-scrollbar.js'></script>

		<!-- Search Filter JS -->
		<script src='vendor/search-filter/search-filter.js'></script>
		<script src='vendor/search-filter/custom-search-filter.js'></script>

		<!-- Bootstrap Select JS -->
		<script src='vendor/bs-select/bs-select.min.js'></script>
		<script src='vendor/bs-select/bs-select-custom.js'></script>

		<!-- Date Range JS -->
		<script src='vendor/daterange/daterange.js'></script>
		<script src='vendor/daterange/custom-daterange.js'></script>

		<!-- Main Js Required -->
		<script src='js/main.js'></script>

	</body>

<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/view-invoice.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:06:42 GMT -->
</html>