<?php ?>

<nav class="sidebar-wrapper">

    <!-- Sidebar content start -->
    <div class="sidebar-tabs">

        <!-- Tabs nav start -->
        <div class="nav" role="tablist" aria-orientation="vertical">
            <a href="#" class="logo">
                <img src="img/centrum-logo.png" alt="Logo">
            </a>
            <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">
                <i class="icon-home2"></i>
                <span class="nav-link-text">Dashboard</span>
            </a>
            <a class="nav-link" id="applications-tab" data-bs-toggle="tab" href="#tab-applications" role="tab" aria-controls="tab-applications" aria-selected="false">
                <i class="icon-layers2"></i>
                <span class="nav-link-text">Application</span>
            </a>
            <a class="nav-link" id="user-tab" data-bs-toggle="tab" href="#tab-user" role="tab" aria-controls="tab-user" aria-selected="false">
                <i class="icon-book-open"></i>
                <span class="nav-link-text">User Management</span>
            </a>
            <a class="nav-link" id="payments-tab" data-bs-toggle="tab" href="#tab-payments" role="tab" aria-controls="tab-payments" aria-selected="false">
                <i class="icon-edit1"></i>
                <span class="nav-link-text">Payments</span>
            </a>
            <a class="nav-link" id="disbursement-tab" data-bs-toggle="tab" href="#tab-disbursement" role="tab" aria-controls="tab-disbursement" aria-selected="false">
                <i class="icon-box"></i>
                <span class="nav-link-text">Disbursement</span>
            </a>
            <a class="nav-link" id="tracking-tab" data-bs-toggle="tab" href="#tab-tracking" role="tab" aria-controls="tab-tracking" aria-selected="false">
                <i class="icon-pie-chart1"></i>
                <span class="nav-link-text">Tracking</span>
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
            <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                   Dashboard
                </div>
                <!-- Tab content header end -->
                <div class="list-heading">
                    &nbsp; 
                </div>

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="index-2.php" class="current-page">My Dashboard</a>
                            </li>
                            
                        </ul>
                       
                    </div>
                </div>
                <!-- Sidebar menu ends -->
               
            </div>
            
            <!-- Pages tab -->
            <div class="tab-pane fade" id="tab-applications" role="tabpanel" aria-labelledby="applications-tab">
                
                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Applications
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <!-- Tab content header start -->
                            <div class="list-heading">
                                MY APPLICATIONS
                            </div>
                            
                            <!-- Tab content header end -->
                            <li>
                                <a href="starter-page.php">Applications</a>
                            </li>
                            <li>
                                <a href="starter-page.php">Applicants</a>
                            </li>
                            <li>
                                <a href="create-application-biodata.php">Make New Application</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->
                
            </div>
            <!-- Pages tab -->

            <!-- Pages tab -->
            <div class="tab-pane fade" id="tab-user" role="tabpanel" aria-labelledby="user-tab">
                
                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    User Management
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li class="list-heading">&nbsp;</li>
                            <li>
                                <a href="starter-page.php">Onboarding</a>
                            </li>
                            <li>
                                <a href="starter-page.php">All Staff</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->
                
            </div>
            <!-- Pages tab -->            

            <div class="tab-pane fade" id="tab-payments" role="tabpanel" aria-labelledby="payments-tab">
                
                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Payment
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li class="list-heading">My Payments</li>
                            <li>
                                <a href="chat.php">Payment</a>
                            </li>
                            <li>
                                <a href="tasks.php">History</a>
                            </li>
                            <li>
                                <a href="create-invoice.php">Ongoing</a>
                            </li>
                            <li>
                                <a href="view-invoice.php">Make Manual Payment</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

            </div>

            <!-- Forms tab -->
            <div class="tab-pane fade" id="tab-disbursement" role="tabpanel" aria-labelledby="disbursement-tab">

                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Disbursement
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="forms-layout-one.php">History</a>
                            </li>
                            <li>
                                <a href="forms-layout-two.php">Pending</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

            </div>
            
            <!-- Components tab -->
            <div class="tab-pane fade" id="tab-tracking" role="tabpanel" aria-labelledby="tracking-tab">
                
                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Trackings
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li class="list-heading">
                                <!-- Tracking -->&nbsp;
                            </li>
                            <li>
                                <a href="forms-layout-two.php">Tracking</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

                
            </div>

           
            <!-- Settings tab -->
            <div class="tab-pane fade" id="tab-settings" role="tabpanel" aria-labelledby="settings-tab">
                
                <!-- Tab content header start -->
                <div class="tab-pane-header">
                    Settings
                </div>
                <!-- Tab content header end -->
                <div class="sidebarMenuScroll">
                    <div class="sidebar-menu">
                        <ul>
                            <li class="list-heading">Set up Loan Mgt App</a>
                            </li>
                            <li>
                                <a href="#">Role Management</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- Tabs content end -->

    </div>
    <!-- Sidebar content end -->
    
</nav>