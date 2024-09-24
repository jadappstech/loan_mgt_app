<?php
	include_once('./includes/layouts/config.php');
	$stmt = $conn->prepare("SELECT * FROM banks");
	$stmt->execute();
	$result = $stmt->get_result();
	$data = array();
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
	} else {
		var_dump('No bank found in the database');
	}
	// var_dump($data);die;	
?>
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
	<style>
		option,#bank_name{
			text-transform: capitalize;
		}
	</style>
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
							<form action="./includes/logic/create-application-biodata-logic.php" method="POST" enctype="multipart/form-data">
								
								<div class="card">
									<div class="card-header">
										<h3 >Loan Application Form <span name="application_id"><?=$_SESSION['application_id']; ?></span></h3>
									</div>
									<div class="card-body">
										<div class="row gutters">
											
											<h5>Account Information</h5> <hr/> <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<div class="field-wrapper">
													<!-- <input class="form-control" type="text" name="bank_name"> -->
													<select class="form-control" name="bank_name" id="bank_name">
														<option value="" disabled selected>Please select bank name</option>
														<?php
																// var_dump($data);die;
															for($i = 0; $i < count($data); $i++){
																// var_dump($data[$i]['name']);die;
																$val = $data[$i]['id'];
																$text = $data[$i]['name'];
																echo "<option value='$val'>{$text}</option>";
															}
														?>
													</select>
													<div class="field-placeholder">Bank Name</div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
												<div class="field-wrapper">
													<input class="form-control" type="text" name="account_name">
													<div class="field-placeholder">Account Name</div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
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
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
												<div class="field-wrapper">
													<select class="form-control" name="payment_type">
														<option value="" disabled selected>Payment Type</option>
														<option value="1">Manual payment</option>
														<option value="2">Automated Deductions</option>
													</select>
													<div class="field-placeholder">Payment Type</div>
												</div>
											</div>
											<h5>Upload Documents</h5> <hr/> 
											<div class="col-lg-12">
												<div class="row" id="row_gutters">
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
															<input class="form-control" type="text" name="doc_name_1" id="doc_name_1">
															<div class="field-placeholder">Document name<span class="text-danger">*</span></div>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
														<div class="field-wrapper">
														<!-- <input type='file' class='form-control-file' id='proof_of_income' name='proof_of_income'> -->
															<input type="file" name="doc_1" id="doc_1" class="form-control">
															<!-- <div class="field-placeholder"> <span class="text-danger">*</span></div> -->
														</div>
													</div>
												</div>

											</div>
											<!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
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
											</div> -->
										</div> 
										<span class="btn btn-warning my-3" id="addrow" >Add new row</span>
										<div class="row gutters">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<button class="btn btn-secondary" onclick="window.history.back();">Previous</button>

													<!-- <a href="./create-application-biodata.php">
													</a> -->
													<!-- <a href="./verification-stage.php"> -->
														<button class="btn btn-primary" name="form_two_next">Next</button> 
													<!-- </a> -->
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</form>
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
		<script>
			let doc_no = 2
			document.getElementById("addrow").addEventListener('click', ()=>{
				// alert(8);
				let container = document.getElementById('row_gutters')
				let row_one = document.createElement('div');
				row_one.innerHTML = `
					<div class="field-wrapper">
						<input class="form-control" type="text" name="doc_name_${doc_no}" id="doc_name_${doc_no}">
						<div class="field-placeholder">Document name<span class="text-danger">*</span></div>
					</div>`;
				row_one.className = 'col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12';
				
				let row_two = document.createElement('div');
				row_two.innerHTML = `<div>
					<div class="field-wrapper">
						<input type="file" name="doc_${doc_no}" id="doc_${doc_no}" class="form-control">
					</div>
				</div>`
				row_two.className = 'col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12';
				
				container.appendChild(row_one);
				container.appendChild(row_two);
				++doc_no
				//  x = doc_no++
			})
			const formData = new FormData(form);
            fetch('./includes/logic/create-application-biodata-logic.php', {
                method: 'POST',
                body: formData
            })
            .then((response) => response.json())
            .then((response) => {
                // json_decode(response);
                // console.log(response);
                if (response.status == 'success') {
                    Swal.fire({
                        title: 'Success!',
                        text: response.message
                    });
                    form.reset();
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: response.message
                    });
                }
            })
			
		</script>

	</body>

<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/view-invoice.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:06:42 GMT -->
</html>