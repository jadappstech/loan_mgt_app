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
							<!-- Content wrapper scroll start -->
                            <div class="content-wrapper-scroll">
                <!-- Content wrapper start -->
                <div class="content-wrapper">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3>Role Details</h3>
                                    <form method="POST" action="process_role.php">
                                        <!-- Role Name -->
                                        <div class="form-group">
                                            <label for="roleName">Role Name</label>
                                            <input type="text" class="form-control" id="roleName" name="roleName" value="Relationship Officer" readonly>
                                        </div>

                                        <!-- Department Dropdown -->
                                        <div class="form-group">
                                            <label for="department">Department</label>
                                            <select class="form-control" id="department" name="department">
                                                <option value="Sales">Sales</option>
                                                <option value="Operations">Operations</option>
                                                <option value="Risk Management">Risk Management</option>
                                                <option value="Legal Compliance">Legal Compliance</option>
                                                <option value="Finance">Finance</option>
                                            </select>
                                        </div>

                                        <!-- Permissions for Side Menu -->
                                        <div class="form-group">
                                            <h4>Permissions</h4>

                                            <!-- Application Permissions -->
                                            <label>Application</label><br>
                                            <input type="checkbox" id="app_create" name="permissions[application][]" value="Create">
                                            <label for="app_create">Create</label>
                                            <input type="checkbox" id="app_edit" name="permissions[application][]" value="Edit">
                                            <label for="app_edit">Edit</label>
                                            <input type="checkbox" id="app_delete" name="permissions[application][]" value="Delete">
                                            <label for="app_delete">Delete</label>
                                            <input type="checkbox" id="app_read" name="permissions[application][]" value="Read">
                                            <label for="app_read">Read</label>
                                            <br><br>

                                            <!-- User Management Permissions -->
                                            <label>User Management</label><br>
                                            <input type="checkbox" id="user_create" name="permissions[user_management][]" value="Create">
                                            <label for="user_create">Create</label>
                                            <input type="checkbox" id="user_edit" name="permissions[user_management][]" value="Edit">
                                            <label for="user_edit">Edit</label>
                                            <input type="checkbox" id="user_delete" name="permissions[user_management][]" value="Delete">
                                            <label for="user_delete">Delete</label>
                                            <input type="checkbox" id="user_read" name="permissions[user_management][]" value="Read">
                                            <label for="user_read">Read</label>
                                            <br><br>

                                            <!-- Payment Permissions -->
                                            <label>Payment</label><br>
                                            <input type="checkbox" id="payment_create" name="permissions[payment][]" value="Create">
                                            <label for="payment_create">Create</label>
                                            <input type="checkbox" id="payment_edit" name="permissions[payment][]" value="Edit">
                                            <label for="payment_edit">Edit</label>
                                            <input type="checkbox" id="payment_delete" name="permissions[payment][]" value="Delete">
                                            <label for="payment_delete">Delete</label>
                                            <input type="checkbox" id="payment_read" name="permissions[payment][]" value="Read">
                                            <label for="payment_read">Read</label>
                                            <br><br>

                                            <!-- Disbursement Permissions -->
                                            <label>Disbursement</label><br>
                                            <input type="checkbox" id="disb_create" name="permissions[disbursement][]" value="Create">
                                            <label for="disb_create">Create</label>
                                            <input type="checkbox" id="disb_edit" name="permissions[disbursement][]" value="Edit">
                                            <label for="disb_edit">Edit</label>
                                            <input type="checkbox" id="disb_delete" name="permissions[disbursement][]" value="Delete">
                                            <label for="disb_delete">Delete</label>
                                            <input type="checkbox" id="disb_read" name="permissions[disbursement][]" value="Read">
                                            <label for="disb_read">Read</label>
                                            <br><br>

                                            <!-- Loan Tracking Permissions -->
                                            <label>Loan Tracking</label><br>
                                            <input type="checkbox" id="loan_create" name="permissions[loan_tracking][]" value="Create">
                                            <label for="loan_create">Create</label>
                                            <input type="checkbox" id="loan_edit" name="permissions[loan_tracking][]" value="Edit">
                                            <label for="loan_edit">Edit</label>
                                            <input type="checkbox" id="loan_delete" name="permissions[loan_tracking][]" value="Delete">
                                            <label for="loan_delete">Delete</label>
                                            <input type="checkbox" id="loan_read" name="permissions[loan_tracking][]" value="Read">
                                            <label for="loan_read">Read</label>
                                        </div>

                                         <!-- Role Management Permissions -->
                                         <label>Role Management</label><br>
                                            <input type="checkbox" id="loan_create" name="permissions[loan_tracking][]" value="Create">
                                            <label for="loan_create">Create</label>
                                            <input type="checkbox" id="loan_edit" name="permissions[loan_tracking][]" value="Edit">
                                            <label for="loan_edit">Edit</label>
                                            <input type="checkbox" id="loan_delete" name="permissions[loan_tracking][]" value="Delete">
                                            <label for="loan_delete">Delete</label>
                                            <input type="checkbox" id="loan_read" name="permissions[loan_tracking][]" value="Read">
                                            <label for="loan_read">Read</label>
                                        </div>

                                        <!-- Submit Button -->
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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