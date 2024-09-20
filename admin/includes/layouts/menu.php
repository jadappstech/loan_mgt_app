<?php
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }

// $username = $_POST['password'];
$dbhost = "localhost";
$dbusername = "root";//"jadappst_lms";
// $dbpassword = "Totalchild6471!";
$dbpassword = "Totalchild6471!";//"q^7HRVA*-Q@]";
$dbname = "lms";//"jadappst_lms";

$conn = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);

if(!$conn){
    die("Connection Failed:  ".mysqli_connect_error());
}

// SQL query
$query = "SELECT username FROM user WHERE id = 1";

// Execute query
$result = $conn->query($query);

// Check query result
if ($result->num_rows > 0) {
    // Fetch and display username
    $row = $result->fetch_assoc();
    $username = $row['username'];
} else {
    $username = 'admin';
}

// Close database connection
$conn->close();


// var_dump($username);die;

if (!isset($active_link)) {
    $active_link = "home";
}
// $username = $_SESSION['user'];
// $username = $_POST['password'];
// if(!$username || $username == ""){
//     $username = 'admin';
// }

    $current_page = basename($_SERVER['PHP_SELF']);

    // var_dump($username);die;
?>
<link href="./fontawesome-free-6.6.0-web/css/all.css" rel="stylesheet">
<nav class='sidebar-wrapper'>

    <!-- Sidebar content start -->
    <div class='sidebar-tabs'>

        <!-- Tabs nav start -->
        <div class='nav' role='tablist' aria-orientation='vertical'>
            
            <a href='#' class='logo'>
                <img src='img/centrum-logo.png' alt='Logo'>
            </a>
            
            <a class='nav-link <?php if ($active_link == "home") { ?> active show <?php } else {} ?>' id='dashboard-tab' data-bs-toggle='tab' href='#tab-dashboard' role='tab' aria-controls='tab-dashboard' aria-selected='true'>
                <i class='icon-home2'></i>
                <span class='nav-link-text'>Dashboard</span>
            </a>
            <a class='nav-link <?php if ($active_link == "application") { ?> active show <?php } else {} ?>' id='applications-tab' data-bs-toggle='tab' href='#tab-applications' role='tab' aria-controls='tab-applications' aria-selected='false'>
                <i class='icon-layers2'></i>
                <span class='nav-link-text'>Application</span>
            </a>
            <?php if($username == 'admin' || $username == 'legal' || $username == 'rmgr' || $username == 'all' || $username == 'grphead'){?>
            <a class='nav-link <?php if ($active_link == "user-mgt") { ?> active show <?php } else {} ?>' id='user-tab' data-bs-toggle='tab' href='#tab-user' role='tab' aria-controls='tab-user' aria-selected='false'>
                <i class='icon-user'></i>
                <span class='nav-link-text'>User Management</span>
            </a>
            <?php }?>
            <?php if($username == 'admin' || $username == 'credit'){?>
            <a class='nav-link <?php if ($active_link == "payments") { ?> active show <?php } else {} ?>' id='payments-tab' data-bs-toggle='tab' href='#tab-payments' role='tab' aria-controls='tab-payments' aria-selected='false'>
                <i class="fa-regular fa-credit-card"></i>
                <span class='nav-link-text'>Payments</span>
            </a>
            <?php }?>
            <?php if($username == 'admin' || $username == 'credit'){?>
            <a class='nav-link <?php if ($active_link == "disbursement") { ?> active show <?php } else {} ?>' id='disbursement-tab' data-bs-toggle='tab' href='#tab-disbursement' role='tab' aria-controls='tab-disbursement' aria-selected='false'>
                <i class="fa-solid fa-money-bill-wave"></i>
                <span class='nav-link-text'>Disbursement</span>
            </a>
            <?php }?>
            <?php if($username == 'admin' || $username == 'credit'){?>
            <a class='nav-link <?php if ($active_link == "loan-tracking") { ?> active show <?php } else {} ?>' id='tracking-tab' data-bs-toggle='tab' href='#tab-tracking' role='tab' aria-controls='tab-tracking' aria-selected='false'>
                <i class='icon-pie-chart1'></i>
                <span class='nav-link-text'>Loan Tracking</span>
            </a>
            <?php }?>
            <?php if($username == 'admin'){?>
            <a class='nav-link settings <?php if ($active_link == "settings") { ?> active show <?php } else {} ?>' id='settings-tab' data-bs-toggle='tab' href='#tab-settings' role='tab' aria-controls='tab-authentication' aria-selected='false'>
                <i class='icon-settings1'></i>
                <span class='nav-link-text'>Settings</span>
            </a>
            <?php }?>
        </div>
        <!-- Tabs nav end -->

        <!-- Tabs content start -->
        <div class='tab-content'>
                    
            <!-- Chat tab -->
            <div class='tab-pane fade <?php if ($active_link == "home") { ?> active show <?php } else {} ?>' id='tab-dashboard' role='tabpanel' aria-labelledby='dashboard-tab'>

                <!-- Tab content header start -->
                <div class='tab-pane-header'>
                   Dashboard
                </div>
                <!-- Tab content header end -->
                <div class='list-heading'>
                    &nbsp; 
                </div>

                <!-- Sidebar menu starts -->
                <div class='sidebarMenuScroll'>
                    <div class='sidebar-menu'>
                        <ul>
                            <li>
                                <a href='index.php' <?php if ($active_link == "home") { ?> active class='current-page' <?php } else {} ?> >My Dashboard</a>
                            </li>
                            
                        </ul>
                       
                    </div>
                </div>
                <!-- Sidebar menu ends -->
            </div>
            
            <!-- Pages tab -->
            <div class='tab-pane fade <?php if ($active_link == "application") { ?> active show <?php } else {} ?>' id='tab-applications' role='tabpanel' aria-labelledby='applications-tab'>
                
                <!-- Tab content header start -->
                <div class='tab-pane-header'>
                    Applications
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class='sidebarMenuScroll'>
                    <div class='sidebar-menu'>
                        <ul>
                            <!-- Tab content header start -->
                            <div class='list-heading'>
                                MY APPLICATIONS
                            </div>
                            <!-- Tab content header end -->
                            <li>
                                <a href='all-applications.php'>Applications</a>
                            </li>
                            <li>
                                <a href='list-of-applicants.php'>Applicants</a>
                            </li>
                            <li>
                                <a href='create-application-biodata.php'>Make New Application</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->
                
            </div>
            <!-- Pages tab -->

            <!-- Pages tab -->
            <div class='tab-pane fade <?php if ($active_link == "user-mgt") { ?> active show <?php } else {} ?>' id='tab-user' role='tabpanel' aria-labelledby='user-tab'>
                
                <!-- Tab content header start -->
                <div class='tab-pane-header'>
                    User Management
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class='sidebarMenuScroll'>
                    <div class='sidebar-menu'>
                        <ul>
                            <li class='list-heading'>&nbsp;</li>
                            <li>
                                <a href='onboarding.php'>Onboarding</a>
                            </li>
                            <li>
                                <a href='all-staffs.php'>All Staff</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->
                
            </div>
            <!-- Pages tab -->            

            <div class='tab-pane fade <?php if ($active_link == "payments") { ?> active show <?php } else {} ?>' id='tab-payments' role='tabpanel' aria-labelledby='payments-tab'>
                
                <!-- Tab content header start -->
                <div class='tab-pane-header'>
                    Payment
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class='sidebarMenuScroll'>
                    <div class='sidebar-menu'>
                        <ul>
                            <li class='list-heading'>My Payments</li>
                            <!-- <li>
                                <a href=''>Payment</a>
                            </li> -->
                            <li>
                                <a href='#'>History</a>
                            </li>
                            <li>
                                <a href='ongoing-payments.php'>Ongoing Payments</a>
                            </li>
                            <li>
                                <a href='payment.php'>Make Manual Payment</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

            </div>

            <!-- Forms tab -->
            <div class='tab-pane fade <?php if ($active_link == "disbursement") { ?> active show <?php } else {} ?>' id='tab-disbursement' role='tabpanel' aria-labelledby='disbursement-tab'>

                <!-- Tab content header start -->
                <div class='tab-pane-header'>
                    Disbursement
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class='sidebarMenuScroll'>
                    <div class='sidebar-menu'>
                        <ul>
                            <li>
                                <a href='disburse-loan.php'>Make Disbursement</a>
                            </li>
                            <li>
                                <a href='#'>History</a>
                            </li>
                            <li>
                                <a href='#'>Pending</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

            </div>
            
            <!-- Components tab -->
            <div class='tab-pane fade <?php if ($active_link == "loan-tracking") { ?> active show <?php } else {} ?>' id='tab-tracking' role='tabpanel' aria-labelledby='tracking-tab'>
                
                <!-- Tab content header start -->
                <div class='tab-pane-header'>
                    Loan Tracking
                </div>
                <!-- Tab content header end -->

                <!-- Sidebar menu starts -->
                <div class='sidebarMenuScroll'>
                    <div class='sidebar-menu'>
                        <ul>
                            <li class='list-heading'>
                                <!-- Tracking -->&nbsp;
                            </li>
                            <li>
                                <a href='loan-tracking.php'>Tracking</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Sidebar menu ends -->

                
            </div>
           
            <!-- Settings tab -->
            <div class='tab-pane fade <?php if ($active_link == "settings") { ?> active show <?php } else {} ?>' id='tab-settings' role='tabpanel' aria-labelledby='settings-tab'>
                
                <!-- Tab content header start -->
                <div class='tab-pane-header'>
                    Settings
                </div>
                <!-- Tab content header end -->
                <div class='sidebarMenuScroll'>
                    <div class='sidebar-menu'>
                        <ul>
                            <li class='list-heading'>Set up Loan Mgt App</a>
                            </li>
                            <li>
                                <a href='role-mgt.php'>Role Management</a>
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