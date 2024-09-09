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
		<style>
			.current{
				color: var(--bs-success) !important;
			}
			.declined{
				color: var(--bs-danger) !important;
			}
			.done{
				text-decoration: none !important;
				color: var(--bs-blue) !important;
			}
		</style>
	</head>
	<body>

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
						<a class="nav-link" id="product-tab" data-bs-toggle="tab" href="#tab-product" role="tab" aria-controls="tab-product" aria-selected="false">
							<i class="icon-layers2"></i>
							<span class="nav-link-text">Product</span>
						</a>
						<a class="nav-link active" id="pages-tab" data-bs-toggle="tab" href="#tab-pages" role="tab" aria-controls="tab-pages" aria-selected="true">
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

					<!-- Tabs content start -->
					<div class="tab-content">
								
						<!-- Chat tab -->
						<div class="tab-pane fade " id="tab-home" role="tabpanel" aria-labelledby="home-tab">

							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Dashboards
							</div>
							<!-- Tab content header end -->

							<!-- Sidebar menu starts -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-menu">
									<ul>
										<li>
											<a href="index-2.php">Dashboard</a>
										</li>
										<li>
											<a href="analytics.php">Analytics</a>
										</li>
										<li>
											<a href="sales.php">Sales</a>
										</li>
										<li>
											<a href="crm.php">CRM</a>
										</li>
										<li>
											<a href="reports.php">Reports</a>
										</li>
										<li>
											<a href="saas.php">Saas</a>
										</li>
										<li>
											<a href="consulting.php">Consulting</a>
										</li>
										<li>
											<a href="profile.php">Profile</a>
										</li>
									</ul>
									<ul>
										<li class="list-heading">Layouts</li>
										<li>
											<a href="starter-page.php">Starter Page</a>
										</li>
										<li>
											<a href="layout-tabs-tooltip.php">Tabs Hover Tooltip</a>
										</li>
										<li>
											<a href="layout-tile-menu.php">Tile Menu</a>
										</li>
										<li>
											<a href="layout-collapse-menu.php">Collapse Sidebar</a>
										</li>
										<li>
											<a href="layout-compact-menu.php">Compact Sidebar</a>
										</li>
										<li>
											<a href="layout-slim-menu.php">Slim Sidebar</a>
										</li>
										<li>
											<a href="layout-hover-tabs.php">Hover Tabs</a>
										</li>
										<li>
											<a href="layout-daterange.php">Date Range</a>
										</li>
										<li>
											<a href="layout-full-screen.php">Full Screen</a>
										</li>
										<li>
											<a href="layout-full-view.php">Full View</a>
										</li>
										<li>
											<a href="layout-search.php">Global Search</a>
										</li>
										<li>
											<a href="layout-megamenu.php">Megamenu</a>
										</li>
										<li>
											<a href="layout-bradcrumb.php">Breadcrumbs</a>
										</li>
										<li>
											<a href="layout-scroll-cards.php">Scroll Cards</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Sidebar menu ends -->

							<!-- Sidebar actions starts -->
							<div class="sidebar-actions">
								<a href="orders.php" class="red">
									<div class="bg-avatar">12</div>
									<h5>New Orders</h5>
								</a>
								<a href="invoices-list.php" class="blue">
									<div class="bg-avatar">24</div>
									<h5>Bills Pending</h5>
								</a>
							</div>
							<!-- Sidebar actions ends -->

						</div>

						<!-- Pages tab -->
						<div class="tab-pane fade" id="tab-product" role="tabpanel" aria-labelledby="product-tab">
							
							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Product
							</div>
							<!-- Tab content header end -->

							<!-- Sidebar menu starts -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-menu">
									<ul>
										<li>
											<a href="products.php">Products Grid</a>
										</li>
										<li>
											<a href="products-list.php">Products List</a>
										</li>
										<li>
											<a href="add-product.php">Add Product</a>
										</li>
										<li>
											<a href="orders.php">Orders</a>
										</li>
										<li>
											<a href="customers-list.php">Customers</a>
										</li>
										<li>
											<a href="products-reviews.php">Reviews</a>
										</li>
									</ul>
									<ul>
										<li class="list-heading">Calendars</li>
										<li>
											<a href="calendar-daygrid-view.php">Daygrid View</a>
										</li>
										<li>
											<a href="calendar-list-view.php">List View</a>
										</li>
										<li>
											<a href="calendar-external-dragging.php">Draggable</a>
										</li>
										<li>
											<a href="calendar-google-view.php">Google View</a>
										</li>
										<li>
											<a href="calendar-selectable.php">Selectable</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Sidebar menu ends -->

							<!-- Sidebar actions starts -->
							<div class="sidebar-actions">
								<div class="support-tile">
									<i class="icon-headphones"></i> 24/7 Support
								</div>
							</div>
							<!-- Sidebar actions ends -->
							
						</div>

						<!-- Pages tab -->
						<div class="tab-pane fade show active" id="tab-pages" role="tabpanel" aria-labelledby="pages-tab">
							
							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Pages
							</div>
							<!-- Tab content header end -->

							<!-- Sidebar menu starts -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-menu">
									<ul>
										<li>
											<a href="chat.php">Chat</a>
										</li>
										<li>
											<a href="tasks.php">Tasks</a>
										</li>
										<li>
											<a href="create-invoice.php">Create Invoice</a>
										</li>
										<li>
											<a href="view-invoice.php" class="current-page">View Invoice</a>
										</li>
										<li>
											<a href="documents.php">Documents</a>
										</li>
										<li>
											<a href="faq.php">Faq's</a>
										</li>
										<li>
											<a href="contacts.php">Contacts</a>
										</li>
										<li>
											<a href="pricing.php">Pricing</a>
                                        </li>
                                        <li>
											<a href="gallery-tiles.php">Gallery Tiles</a>
                                        </li>
                                        <li>
											<a href="gallery.php">Gallery</a>
										</li>
										<li>
											<a href="icons.php">Icons</a>
										</li>
										<li>
											<a href="timeline.php">Timeline</a>
										</li>
										<li>
											<a href="search-results.php">Search Results</a>
										</li>
										<li>
											<a href="account-settings.php">Account Settings</a>
                                        </li>
                                        <li>
											<a href="user-profile.php">User Profile</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Sidebar menu ends -->

							<!-- Sidebar actions starts -->
							<div class="sidebar-actions">
								<div class="support-tile green">
									<i class="icon-pie-chart1"></i> 5GB Free Space
								</div>
							</div>
							<!-- Sidebar actions ends -->

						</div>

						<!-- Forms tab -->
						<div class="tab-pane fade" id="tab-forms" role="tabpanel" aria-labelledby="forms-tab">

							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Forms
							</div>
							<!-- Tab content header end -->

							<!-- Sidebar menu starts -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-menu">
									<ul>
										<li class="list-heading">Form Layouts</li>
										<li>
											<a href="forms-layout-one.php">Default Layout</a>
										</li>
										<li>
											<a href="forms-layout-two.php">Layout Sections</a>
										</li>
										<li>
											<a href="forms-layout-three.php">Simple Form Layout</a>
										</li>
										<li>
											<a href="forms-layout-four.php">Select 2 Tags and Mask</a>
										</li>
										<li>
											<a href="forms-layout-five.php">Horizontal Form Layout</a>
										</li>
										<li>
											<a href="forms-layout-six.php">Layout Six with Tabs</a>
										</li>
									</ul>									
									<ul>
										<li class="list-heading">Form Fields</li>
										<li>
											<a href="forms-inputs.php">Form Inputs</a>
										</li>
										<li>
											<a href="forms-input-groups.php">Input Groups</a>
										</li>
										<li>
											<a href="forms-checkbox-radio.php">Checkbox &amp; Radios</a>
										</li>
										<li>
											<a href="forms-validation.php">Form Validation</a>
										</li>
									</ul>									
									<ul>
										<li class="list-heading">Plugins</li>
										<li>
											<a href="forms-dropzone.php">Dropzone</a>
										</li>
										<li>
											<a href="forms-bs-select.php">Select 2 Dropdowns</a>
										</li>
										<li>
											<a href="forms-date-time-picker.php">Date Time Picker</a>
										</li>
										<li>
											<a href="forms-input-mask.php">Input Mask</a>
										</li>
										<li>
											<a href="forms-input-range.php">Input Range</a>
										</li>
										<li>
											<a href="forms-editor.php">WYSIWYG Editor</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Sidebar menu ends -->

							<!-- Sidebar actions starts -->
							<div class="sidebar-actions">
								<div class="support-tile red">
									<i class="icon-mail"></i> Inbox Full
								</div>
							</div>
							<!-- Sidebar actions ends -->

						</div>
						
						<!-- Components tab -->
						<div class="tab-pane fade" id="tab-components" role="tabpanel" aria-labelledby="components-tab">
							
							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Components
							</div>
							<!-- Tab content header end -->

							<!-- Sidebar menu starts -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-menu">
									<ul>
                                        <li>
                                            <a href="accordions.php">Accordions</a>
                                        </li>
                                        <li>
                                            <a href="alerts.php">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="buttons.php">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="badges.php">Badges</a>
                                        </li>
                                        <li>
                                            <a href="cards.php">Cards</a>
                                        </li>
                                        <li>
                                            <a href="carousel.php">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="list-group.php">List group</a>
                                        </li>
                                        <li>
                                            <a href="modals.php">Modal</a>
                                        </li>
                                        <li>
                                            <a href="paginations.php">Paginations</a>
                                        </li>
                                        <li>
                                            <a href="popovers.php">Popovers</a>
                                        </li>
                                        <li>
                                            <a href="progress.php">Progress</a>
                                        </li>
                                        <li>
                                            <a href="spinners.php">Spinners</a>
                                        </li>
                                        <li>
                                            <a href="tabs.php">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="toasts.php">Toasts</a>
                                        </li>
                                        <li>
                                            <a href="tooltips.php">Tooltips</a>
                                        </li>
									</ul>
								</div>
							</div>
							<!-- Sidebar menu ends -->

                            <!-- Sidebar actions starts -->
							<div class="sidebar-actions">
								<div class="support-tile yellow">
									<i class="icon-arrow-down-circle"></i><a href="#">Download Reports</a>						</div>
							</div>
							<!-- Sidebar actions ends -->

						</div>

						<!-- Graphs tab -->
						<div class="tab-pane fade" id="tab-graphs" role="tabpanel" aria-labelledby="graphs-tab">
							
							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Graphs &amp; Tables
							</div>
							<!-- Tab content header end -->
							
							<!-- Sidebar menu starts -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-menu">
                                    <ul>
										<li class="list-heading">Graphs</li>
                                        <li>
                                            <a href="apex-graphs.php">Apex Graphs</a>
                                        </li>
                                        <li>
                                            <a href="morris-graphs.php">Morris Graphs</a>
                                        </li>
                                        <li>
                                            <a href="vector-maps.php">Vector Maps</a>
                                        </li>
                                    </ul>
                                    
                                    <ul>
										<li class="list-heading">Tables</li>
                                        <li>
                                            <a href="bootstrap-tables.php">Bootstrap Tables</a>
                                        </li>
                                        <li>
                                            <a href="custom-tables.php">Custom Tables</a>
                                        </li>
                                        <li>
                                            <a href="data-tables.php">Data Tables</a>
                                        </li>
									</ul>
								</div>
							</div>
							<!-- Sidebar menu ends -->

							<!-- Sidebar actions starts -->
							<div class="sidebar-actions">
								<div class="support-tile pink">
									<i class="icon-align-right1"></i> RTL Support
								</div>
							</div>
							<!-- Sidebar actions ends -->

						</div>

						<!-- Authentication tab -->
						<div class="tab-pane fade" id="tab-authentication" role="tabpanel" aria-labelledby="authentication-tab">
							
							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Authentication
							</div>
							<!-- Tab content header end -->

							<!-- Sidebar menu starts -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-menu">
									<ul>
										<li>
											<a href="login.php">Login</a>
										</li>
										<li>
											<a href="signup.php">Signup</a>
										</li>
										<li>
											<a href="forgot-password.php">Forgot Password</a>
										</li>
										<li>
											<a href="reset-password.php">Reset Password</a>
										</li>
										<li>
											<a href="lock-screen.php">Lock Screen</a>
										</li>
										<li>
											<a href="subscribe.php">Subscribe</a>
										</li>										
										<li>
											<a href="maintenance.php">Maintenance</a>
										</li>
										<li>
											<a href="error.php">404</a>
										</li>
										<li>
											<a href="error-option2.php">Error</a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Sidebar menu ends -->

							<!-- Sidebar actions starts -->
							<div class="sidebar-actions">
								<div class="support-tile blue">
									<a href="pricing.php" class="btn btn-light m-auto">Upgrade Account</a>
								</div>
							</div>
							<!-- Sidebar actions ends -->

						</div>
						
						<!-- Settings tab -->
						<div class="tab-pane fade" id="tab-settings" role="tabpanel" aria-labelledby="settings-tab">
							
							<!-- Tab content header start -->
							<div class="tab-pane-header">
								Settings
							</div>
							<!-- Tab content header end -->

							<!-- Settings start -->
							<div class="sidebarMenuScroll">
								<div class="sidebar-settings">
									<div class="accordion" id="settingsAccordion">
										<div class="accordion-item">
											<h2 class="accordion-header" id="genInfo">
												<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#genCollapse" aria-expanded="true" aria-controls="genCollapse">
													General Info
												</button>
											</h2>
											<div id="genCollapse" class="accordion-collapse collapse show" aria-labelledby="genInfo" data-bs-parent="#settingsAccordion">
												<div class="accordion-body">
													<div class="field-wrapper">
														<input type="text" value="Jeivxezer Lopexz" />
														<div class="field-placeholder">Full Name</div>
													</div>

													<div class="field-wrapper">
														<input type="email" value="jeivxezer-lopexz@email.com" />
														<div class="field-placeholder">Email</div>
													</div>

													<div class="field-wrapper">
														<input type="text" value="0 0000 00000" />
														<div class="field-placeholder">Contact</div>
													</div>
													<div class="field-wrapper m-0">
														<button class="btn btn-primary stripes-btn">Save</button>
													</div>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="chngPwd">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chngPwdCollapse" aria-expanded="false" aria-controls="chngPwdCollapse">
													Change Password
												</button>
											</h2>
											<div id="chngPwdCollapse" class="accordion-collapse collapse" aria-labelledby="chngPwd" data-bs-parent="#settingsAccordion">
												<div class="accordion-body">
													<div class="field-wrapper">
														<input type="text" value="">
														<div class="field-placeholder">Current Password</div>
													</div>
													<div class="field-wrapper">
														<input type="password" value="">
														<div class="field-placeholder">New Password</div>
													</div>
													<div class="field-wrapper">
														<input type="password" value="">
														<div class="field-placeholder">Confirm Password</div>
													</div>
													<div class="field-wrapper m-0">
														<button class="btn btn-primary stripes-btn">Save</button>
													</div>

												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="sidebarNotifications">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#notiCollapse" aria-expanded="false" aria-controls="notiCollapse">
													Notifications
												</button>
											</h2>
											<div id="notiCollapse" class="accordion-collapse collapse" aria-labelledby="sidebarNotifications" data-bs-parent="#settingsAccordion">
												<div class="accordion-body">
													<div class="list-group m-0">
														<div class="noti-container">
															<div class="noti-block">
																<div>Alerts</div>
																<div class="form-switch">
																	<input class="form-check-input" type="checkbox" id="showAlertss" checked>
																	<label class="form-check-label" for="showAlertss"></label>
																</div>
															</div>
															<div class="noti-block">
																<div>Enable Sound</div>
																<div class="form-switch">
																	<input class="form-check-input" type="checkbox" id="soundEnable">
																	<label class="form-check-label" for="soundEnable"></label>
																</div>
															</div>
															<div class="noti-block">
																<div>Allow Chat</div>
																<div class="form-switch">
																	<input class="form-check-input" type="checkbox" id="allowChat">
																	<label class="form-check-label" for="allowChat"></label>
																</div>
															</div>
															<div class="noti-block">
																<div>Desktop Messages</div>
																<div class="form-switch">
																	<input class="form-check-input" type="checkbox" id="desktopMessages">
																	<label class="form-check-label" for="desktopMessages"></label>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Settings end -->

							<!-- Sidebar actions starts -->
							<div class="sidebar-actions">
								<div class="support-tile blue">
									<a href="account-settings.php" class="btn btn-light m-auto">Advance Settings</a>
								</div>
							</div>
							<!-- Sidebar actions ends -->
						</div>

					</div>
					<!-- Tabs content end -->

				</div>
				<!-- Sidebar content end -->
				
			</nav>
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

								<!-- Mega Menu Start -->
								<div class="cd-dropdown-wrapper">
									<a class="cd-dropdown-trigger" href="#0"><i class="icon-menu menu-icon"></i><span class="menu-text">Megamenu</span></a>
									<nav class="cd-dropdown">

										<ul class="cd-dropdown-content">

											<li class="has-children">
												<a href="#">Main Pages</a>
												<ul class="cd-secondary-dropdown is-hidden">
													<li class="has-children">
														<a href="#">Dashboards</a>
														<ul class="is-hidden">
															<li>
																<a href="reports.php">Reports</a>
															</li>
															<li>
																<a href="saas.php">Saas</a>
															</li>
															<li>
																<a href="sales.php">Sales</a>
															</li>
															<li>
																<a href="index-2.php">Admin</a>
															</li>
															<li>
																<a href="analytics.php">Analytics</a>
															</li>
															<li>
																<a href="crm.php">CRM</a>
															</li>
															<li>
																<a href="consulting.php">Consulting</a>
															</li>
														</ul>
													</li>
													<li class="has-children">
														<a href="#">Layouts</a>
														<ul class="is-hidden">
															<li>
																<a href="starter-page.php">Starter Page</a>
															</li>
															<li>
																<a href="layout-full-screen.php">Full Screen</a>
															</li>
															<li>
																<a href="layout-search.php">Global Search</a>
															</li>
															<li>
																<a href="layout-megamenu.php">Megamenu</a>
															</li>
															<li>
																<a href="layout-bradcrumb.php">Breadcrumbs</a>
															</li>
															<li>
																<a href="layout-scroll-cards.php">Scroll Cards</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>

											<li class="has-children">
												<a href="#">Product &amp; Calendars</a>

												<ul class="cd-secondary-dropdown is-hidden">
													<li class="has-children">
														<a href="#">Product</a>
														<ul class="is-hidden">
															<li>
																<a href="products.php">Products Grid</a>
															</li>
															<li>
																<a href="products-list.php">Products List</a>
															</li>
															<li>
																<a href="add-product.php">Add Product</a>
															</li>
															<li>
																<a href="orders.php">Orders</a>
															</li>
															<li>
																<a href="customers-list.php">Customers</a>
															</li>
															<li>
																<a href="products-reviews.php">Reviews</a>
															</li>
														</ul>
													</li>

													<li class="has-children">
														<a href="#">Calendars</a>
														<ul class="is-hidden">
															<li>
																<a href="calendar-daygrid-view.php">Daygrid View</a>
															</li>
															<li>
																<a href="calendar-list-view.php">List View</a>
															</li>
															<li>
																<a href="calendar-external-dragging.php">Draggable</a>
															</li>
															<li>
																<a href="calendar-google-view.php">Google View</a>
															</li>
															<li>
																<a href="calendar-selectable.php">Selectable</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>

											<li class="has-children">
												<a href="#">Forms</a>

												<ul class="cd-secondary-dropdown is-hidden">

													<li class="has-children">
														<a href="#">Form Layouts</a>
														<ul class="is-hidden">
															<li>
																<a href="forms-layout-one.php">Default Layout</a>
															</li>
															<li>
																<a href="forms-layout-two.php">Layout Sections</a>
															</li>
															<li>
																<a href="forms-layout-three.php">Simple Form Layout</a>
															</li>
															<li>
																<a href="forms-layout-four.php">Select 2 Tags and Mask</a>
															</li>
															<li>
																<a href="forms-layout-five.php">Horizontal Form Layout</a>
															</li>
															<li>
																<a href="forms-layout-six.php">Layout Six with Tabs</a>
															</li>
														</ul>
													</li>

													<li class="has-children">
														<a href="#">Forms</a>
														<ul class="is-hidden">
															<li>
																<a href="forms-inputs.php">Form Inputs</a>
															</li>
															<li>
																<a href="forms-input-groups.php">Input Groups</a>
															</li>
															<li>
																<a href="forms-checkbox-radio.php">Checkbox &amp; Radios</a>
															</li>
															<li>
																<a href="forms-validation.php">Form Validation</a>
															</li>
															<li>
																<a href="forms-dropzone.php">Dropzone</a>
															</li>
															<li>
																<a href="forms-bs-select.php">Select 2 Dropdowns</a>
															</li>
															<li>
																<a href="forms-date-time-picker.php">Date Time Picker</a>
															</li>
															<li>
																<a href="forms-input-mask.php">Input Mask</a>
															</li>
															<li>
																<a href="forms-input-range.php">Input Range</a>
															</li>
															<li>
																<a href="forms-editor.php">WYSIWYG Editor</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>

											<li class="has-children">
												<a href="#">Pages &amp; Components</a>

												<ul class="cd-secondary-dropdown is-hidden">

													<li class="has-children">
														<a href="#">Pages</a>
														<ul class="is-hidden">
															<li>
																<a href="chat.php">Chat</a>
															</li>
															<li>
																<a href="tasks.php">Tasks</a>
															</li>
															<li>
																<a href="create-invoice.php">Create Invoice</a>
															</li>
															<li>
																<a href="view-invoice.php">View Invoice</a>
															</li>
															<li>
																<a href="documents.php">Documents</a>
															</li>
															<li>
																<a href="faq.php">Faq's</a>
															</li>
															<li>
																<a href="contacts.php">Contacts</a>
															</li>
															<li>
																<a href="pricing.php">Pricing</a>
															</li>
															<li>
																<a href="gallery-tiles.php">Gallery Tiles</a>
															</li>
															<li>
																<a href="gallery.php">Gallery</a>
															</li>
															<li>
																<a href="icons.php">Icons</a>
															</li>
															<li>
																<a href="timeline.php">Timeline</a>
															</li>
															<li>
																<a href="search-results.php">Search Results</a>
															</li>
															<li>
																<a href="account-settings.php">Account Settings</a>
															</li>
															<li>
																<a href="user-profile.php">User Profile</a>
															</li>
														</ul>
													</li>

													<li class="has-children">
														<a href="#">Components</a>
														<ul class="is-hidden">
															<li>
																<a href="accordions.php">Accordions</a>
															</li>
															<li>
																<a href="alerts.php">Alerts</a>
															</li>
															<li>
																<a href="buttons.php">Buttons</a>
															</li>
															<li>
																<a href="badges.php">Badges</a>
															</li>
															<li>
																<a href="cards.php">Cards</a>
															</li>
															<li>
																<a href="carousel.php">Carousel</a>
															</li>
															<li>
																<a href="list-group.php">List group</a>
															</li>
															<li>
																<a href="modals.php">Modal</a>
															</li>
															<li>
																<a href="paginations.php">Paginations</a>
															</li>
															<li>
																<a href="popovers.php">Popovers</a>
															</li>
															<li>
																<a href="progress.php">Progress</a>
															</li>
															<li>
																<a href="spinners.php">Spinners</a>
															</li>
															<li>
																<a href="tabs.php">Tabs</a>
															</li>
															<li>
																<a href="toasts.php">Toasts</a>
															</li>
															<li>
																<a href="tooltips.php">Tooltips</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>

											<li class="has-children">
												<a href="#">Graphs &amp; Tables</a>

												<ul class="cd-secondary-dropdown is-hidden">

													<li class="has-children">
														<a href="#">Graphs</a>
														<ul class="is-hidden">
															<li>
																<a href="apex-graphs.php">Apex Graphs</a>
															</li>
															<li>
																<a href="morris-graphs.php">Morris Graphs</a>
															</li>
															<li>
																<a href="vector-maps.php">Vector Maps</a>
															</li>
														</ul>
													</li>

													<li class="has-children">
														<a href="#">Tables</a>
														<ul class="is-hidden">
															<li>
																<a href="bootstrap-tables.php">Bootstrap Tables</a>
															</li>
															<li>
																<a href="custom-tables.php">Custom Tables</a>
															</li>
															<li>
																<a href="data-tables.php">Data Tables</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											
											<li>
												<a href="account-settings.php">Account Settings</a>
											</li>
											<li>
												<a href="login.php">Logout</a>
											</li>
											<li>
												<a href="error-option2.php">Error</a>
											</li>
										</ul>
										
									</nav>
								</div>
								<!-- Mega Menu End -->

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
											<a href="user-profile.php"><i class="icon-user1"></i>Profile</a>
											<a href="account-settings.php"><i class="icon-settings1"></i>Settings</a>
											<a href="forgot-password.php"><i class="icon-log-out1"></i>Logout</a>
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
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-header-lg">
										<h4>Application Details</h4>
										<div class="text-end">
											<a href="create-invoice.php" class="btn btn-primary">Export</a>
										</div>
									</div>
									<div class="card-body">

                                        <div class="invoice-container">

                                            <div class="invoice-header">
                                                <!-- Row start -->
                                                <div class="row justify-content-between">
                                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                                        <a href="index-2.php" class="invoice-logo">
                                                            <img src="img/logo.svg" alt="Meow Admin Dashboard">
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                                        <address class="text-right">
                                                            Meow LLC, 2880 St. <br>
                                                            Rose Pkwy, Suite 700<br>
                                                            San Francisco, California(CA), 94102
                                                        </address>
                                                    </div>
                                                </div>
                                                <!-- Row end -->
                                            </div>

                                            <!-- Row start -->
                                            <div class="row gutters">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="invoice-details">
                                                        <address class="m-0">
                                                            <h3>Loan 4T2342-01 - APPLICANT NAME</h3>
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
																		<h6>Charles Olawale</h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>DOB of Applicant</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>06-04-1985</span></h6>
																	</td>
																</tr>
																
																<tr>
																	<td>
																		<h6 class='text-primary'>Profession</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>Accountant</span></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Place of Employment</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>21 Area 1, Garki II, Abuja</span></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Annual Income</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6>₦<span>50,000,000</span></h6>
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
																<tr>
																	<td>
																		<h6 class='text-primary'>Loan starts on</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>03-09-2024</span></h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Terms of Payment</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	<td>
																		<h6>Twenty consecutive bi-weekly payroll deductions of ₦800,000<br /> in November 2024</h6>
																	</td>
																</tr>
																<tr>
																	<td>
																		<h6 class='text-primary'>Loan ends on</h6>
																		<!-- <p>Create quality mockups and prototypes and Design mobile-based features.</p> -->
																	</td>
																	
																	<td>
																		<h6>03-09-2024</h6>
																	</td>
																</tr>
																
																<tr>
																	<td>
																		<h6 class='text-primary'>What this loan will be used for</h6>
																		<!-- <p>Using markup languages like php to create user-friendly web pages.</p> -->
																	</td>
																	
																	<td>
																		<h6><span>Business Launching</span></h6>
																	</td>
																</tr>
																<tr>
																	<td colspan="">&nbsp;</td>
																	
																	<td>
																		<!-- <p class="m-0">₦1000.00</p>
																		<p class="m-0">₦10.00</p>
																		<p class="m-0">₦5.00</p>
																		<h5 class="mt-2 text-danger">₦1015.00</h5> -->
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													
                                                </div>
                                            </div>
                                            <!-- Row end -->

                                            <!-- Row start -->
                                            <div class="row gutters">

                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="text-start">
                                                        <button class="btn btn-success">Proceed</button>
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
														<tr>
														<td>
															<div class="rating-block">
																	<div class="rate2">House at Garki</div>
																</div>
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
                                                        <li class="activity-list danger">
                                                            <div class="detail-info">
                                                            <p class="date text-danger">Risk Management</p>
                                                                <p class="info">20 mins ago</p>
                                                            </div>
                                                        </li>
                                                        <li class="activity-list warning">
                                                            <div class="detail-info">
                                                                <p class="date text-warning">Disbursed</p>
                                                                <p class="info"></p>
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