<!doctype html>
<html lang="en">
	
<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:03:09 GMT -->
    <?php
        include 'includes/layouts/head.php';
        $active_link = "disbursement";
    ?>
	<body>

		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner-border"></div>
			Loading...
		</div>
		<!-- Loading wrapper end -->

		<!-- Page wrapper start -->
		<div class="page-wrapper">
			
            <?php 
				include 'includes/layouts/menu.php';
			?>
			<!-- Sidebar wrapper end -->

			<!-- *************
				************ Main container start *************
			************* -->
			<div class="main-container">

				<!-- Page header starts -->
				<?php 
					include_once "./includes/layouts/navbar.php"; ?>
				<!-- Page header ends -->

				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

                <div class="content-wrapper">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <!-- Card start -->
                            <div class="card">
                                <div class="card-body">
                                    
                                    <!-- Row start -->
                                    <div class="row gutters">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                            
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder="Enter Full Name" value="Charles Olawale" readonly>
                                                <div class="field-placeholder">Receiver Name <span class="text-danger">*</span></div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                            
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input class="form-control" type="text" placeholder="Enter Email" value="Mid Term Loan" readonly>
                                                <div class="field-placeholder">Type of Loan <span class="text-danger">*</span></div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                            
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <input type="text" class="form-control datepicker" value="80,000,000" readonly>
                                                <div class="field-placeholder">Loan Amount</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                            
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <select class="select-single js-states" title="Select Product Category" data-live-search="true">
                                                        <option disabled selected>Select one</option>
                                                        <option>Cheque</option>
                                                        <option>Cash</option>
                                                        <option>Wire</option>
                                                    </select>
                                                </div>
                                                <div class="field-placeholder">Channel</div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            
                                            <!-- Field wrapper start -->
                                            <div class="field-wrapper">
                                                <div class="input-group">
                                                    <textarea class="form-control"></textarea>
                                                    <div class="field-placeholder">Notes</div>
                                                </div>
                                            </div>
                                            <!-- Field wrapper end -->

                                        </div>
                                        
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-actions-footer">
                                                <div class="text-end">
                                                    <button class="btn btn-primary ms-1">Disburse Loan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row end -->

                                </div>
                            </div>
                            <!-- Card end -->

                        </div>
                    </div>
                    <!-- Row end -->

                </div>

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

		<?php include('includes/scripts.php'); ?>

	</body>

<!-- Mirrored from www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 13:04:58 GMT -->
</php>