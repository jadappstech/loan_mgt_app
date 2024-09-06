<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Loan Applicant Dashboard">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png">

    <!-- Title -->
    <title>Active Loan Applications - Profile Page</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="fonts/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
        }

        .page-wrapper {
            margin: 20px;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .profile-card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .profile-header img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }

        .profile-header h4 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .profile-header .subheading {
            font-size: 14px;
            margin-top: 5px;
            color: #666;
        }

        .loan-details {
            margin-top: 15px;
        }

        .loan-details table {
            width: 100%;
        }

        .loan-details table th,
        .loan-details table td {
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }

        .loan-details .badge {
            font-size: 12px;
            padding: 6px 10px;
        }

        .action-buttons {
            text-align: right;
            margin-top: 10px;
        }

        .action-buttons .btn {
            margin-left: 5px;
            font-size: 12px;
        }
    </style>
</head>

<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <h2>Active Loan Applications</h2>

        <!-- Profiles Grid Start -->
        <div class="profile-grid">

            <!-- Profile Card 1 -->
            <div class="profile-card">
                <div class="profile-header">
                    <img src="img/profile1.jpg" alt="Profile Picture">
                    <div>
                        <h4>John Doe</h4>
                        <p class="subheading">Loan Application: FLM00878 | Applied on 2020/10/25</p>
                    </div>
                </div>
                <div class="loan-details">
                    <table>
                        <tr>
                            <th>Loan Amount</th>
                            <td>₦87,000.00</td>
                        </tr>
                        <tr>
                            <th>Interest Rate</th>
                            <td>5%</td>
                        </tr>
                        <tr>
                            <th>Total Amount with Interest</th>
                            <td>₦91,350.00</td>
                        </tr>
                        <tr>
                            <th>Amount Paid</th>
                            <td>₦30,000.00</td>
                        </tr>
                        <tr>
                            <th>Remaining Amount</th>
                            <td>₦61,350.00</td>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <td><span class="badge bg-warning">Partial Payment</span></td>
                        </tr>
                    </table>
                </div>
                <div class="action-buttons">
                    <button class="btn btn-primary btn-sm">View Profile</button>
                    <button class="btn btn-success btn-sm">Approve</button>
                    <button class="btn btn-danger btn-sm">Reject</button>
                    <button class="btn btn-warning btn-sm">Send Reminder</button>
                </div>
            </div>

            <!-- Profile Card 2 -->
            <div class="profile-card">
                <div class="profile-header">
                    <img src="img/profile2.jpg" alt="Profile Picture">
                    <div>
                        <h4>Jane Smith</h4>
                        <p class="subheading">Loan Application: FLM00983 | Applied on 2020/10/10</p>
                    </div>
                </div>
                <div class="loan-details">
                    <table>
                        <tr>
                            <th>Loan Amount</th>
                            <td>₦55,000.00</td>
                        </tr>
                        <tr>
                            <th>Interest Rate</th>
                            <td>6%</td>
                        </tr>
                        <tr>
                            <th>Total Amount with Interest</th>
                            <td>₦58,300.00</td>
                        </tr>
                        <tr>
                            <th>Amount Paid</th>
                            <td>₦20,000.00</td>
                        </tr>
                        <tr>
                            <th>Remaining Amount</th>
                            <td>₦38,300.00</td>
                        </tr>
                        <tr>
                            <th>Payment Status</th>
                            <td><span class="badge bg-warning">Partial Payment</span></td>
                        </tr>
                    </table>
                </div>
                <div class="action-buttons">
                    <button class="btn btn-primary btn-sm">View Profile</button>
                    <button class="btn btn-success btn-sm">Approve</button>
                    <button class="btn btn-danger btn-sm">Reject</button>
                    <button class="btn btn-warning btn-sm">Send Reminder</button>
                </div>
            </div>

            <!-- Add more profile cards as needed -->

        </div>
        <!-- Profiles Grid End -->

    </div>
    <!-- Page wrapper end -->

    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
