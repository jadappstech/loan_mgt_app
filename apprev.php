<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:06:11 GMT -->
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
		
		<!-- Data Tables -->
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
		<link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />
		<link href="vendor/datatables/buttons.bs.css" rel="stylesheet" />

	</head>
	<body>

		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner-border"></div>
			Loading...
		</div>
		<!-- Loading wrapper end -->

		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
			<!-- Sidebar wrapper start -->
			<nav class="sidebar-wrapper">

				<!-- Sidebar content start -->
				<div class="sidebar-tabs">

					<!-- Tabs nav start -->
					<div class="nav" role="tablist" aria-orientation="vertical">
						<a href="#" class="logo">
							<img src="img/logo.svg" alt="Uni Pro Admin">
						</a>
						<a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="false">
							<i class="icon-home2"></i>
							<span class="nav-link-text">Dashboards</span>
						</a>
						<a class="nav-link active" id="product-tab" data-bs-toggle="tab" href="#tab-product" role="tab" aria-controls="tab-product" aria-selected="true">
							<i class="icon-layers2"></i>
							<span class="nav-link-text">Product</span>
						</a>
						<a class="nav-link" id="pages-tab" data-bs-toggle="tab" href="#tab-pages" role="tab" aria-controls="tab-pages" aria-selected="false">
							<i class="icon-book-open"></i>
							<span class="nav-link-text">Pages</span>
						</a>
						<a class="nav-link" id="forms-tab" data-bs-toggle="tab" href="#tab-forms" role="tab" aria-controls="tab-forms" aria-selected="false">
							<i class="icon-edit1"></i>
							<span class="nav-link-text">Forms</span>
						</a>
						<a class="nav-link" id="components-tab" data-bs-toggle="tab" href="#tab-components" role="tab" aria-controls="tab-components" aria-selected="false">
							<i class="icon-box"></i>
							<span class="nav-link-text">Components</span>
						</a>
						<a class="nav-link" id="graphs-tab" data-bs-toggle="tab" href="#tab-graphs" role="tab" aria-controls="tab-graphs" aria-selected="false">
							<i class="icon-pie-chart1"></i>
							<span class="nav-link-text">Graphs</span>
						</a>
						<a class="nav-link" id="authentication-tab" data-bs-toggle="tab" href="#tab-authentication" role="tab" aria-controls="tab-authentication" aria-selected="false">
							<i class="icon-unlock"></i>
							<span class="nav-link-text">Authentication</span>
						</a>
						<a class="nav-link settings" id="settings-tab" data-bs-toggle="tab" href="#tab-settings" role="tab" aria-controls="tab-authentication" aria-selected="false">
							<i class="icon-settings1"></i>
							<span class="nav-link-text">Settings</span>
						</a>
					</div>
					<!-- Tabs nav end -->

						<!-- Row start -->
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="copy-print-csv" class="table v-middle">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Application Date</th>
                                <th>Loan Amount</th>
                                <th>Interest Rate</th>
                                <th>Total Amount with Interest</th>
                                <th>Amount Paid</th>
                                <th>Remaining Amount</th>
                                <th>Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Approved loans -->
                            <tr>
                                <td>FLM00878</td>
                                <td>2020/10/25</td>
                                <td>$87.00</td>
                                <td>5%</td>
                                <td>$91.35</td>
                                <td>$30.00</td>
                                <td>$61.35</td>
                                <td>
                                    <span class="badge bg-warning">Partial Payment</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00370</td>
                                <td>2020/10/30</td>
                                <td>$65.00</td>
                                <td>4%</td>
                                <td>$67.60</td>
                                <td>$65.00</td>
                                <td>$2.60</td>
                                <td>
                                    <span class="badge bg-success">Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00983</td>
                                <td>2020/10/10</td>
                                <td>$55.00</td>
                                <td>6%</td>
                                <td>$58.30</td>
                                <td>$20.00</td>
                                <td>$38.30</td>
                                <td>
                                    <span class="badge bg-warning">Partial Payment</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00760</td>
                                <td>2020/10/15</td>
                                <td>$74.00</td>
                                <td>5.5%</td>
                                <td>$78.07</td>
                                <td>$74.00</td>
                                <td>$4.07</td>
                                <td>
                                    <span class="badge bg-success">Paid</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00878</td>
                                <td>2020/10/11</td>
                                <td>$87.00</td>
                                <td>5%</td>
                                <td>$91.35</td>
                                <td>$10.00</td>
                                <td>$81.35</td>
                                <td>
                                    <span class="badge bg-warning">Partial Payment</span>
                                </td>
                            </tr>
                            <tr>
                                <td>FLM00435</td>
                                <td>2020/10/12</td>
                                <td>$88.00</td>
                                <td>4.5%</td>
                                <td>$92.96</td>
                                <td>$0.00</td>
                                <td>$92.96</td>
                                <td>
                                    <span class="badge bg-danger">Unpaid</span>
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

					<!-- App footer start -->
					<div class="app-footer">© Uni Pro Admin 2021</div>
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

		<!-- Data Tables -->
		<script src="vendor/datatables/dataTables.min.js"></script>
		<script src="vendor/datatables/dataTables.bootstrap.min.js"></script>
		
		<!-- Custom Data tables -->
		<script src="vendor/datatables/custom/custom-datatables.js"></script>

		<!-- Download / CSV / Copy / Print -->
		<script src="vendor/datatables/buttons.min.js"></script>
		<script src="vendor/datatables/jszip.min.js"></script>
		<script src="vendor/datatables/pdfmake.min.js"></script>
		<script src="vendor/datatables/vfs_fonts.js"></script>
		<script src="vendor/datatables/html5.min.js"></script>
		<script src="vendor/datatables/buttons.print.min.js"></script>		

		<!-- Main Js Required -->
		<script src="js/main.js"></script>

	</body>

<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:06:18 GMT -->
</html>