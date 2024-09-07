<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Loan Applicant Profile</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        .profile-section, .loan-section, .bank-info-section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-header, .loan-header, .bank-info-header {
            font-weight: bold;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }
        .profile-picture {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }
        .btn-approve, .btn-reject {
            width: 150px;
            margin-top: 20px;
        }
        .loan-details-table, .bank-info-table {
            width: 100%;
        }
        .loan-details-table td, .bank-info-table td {
            padding: 10px;
        }
        .profile-info, .loan-info, .bank-info {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

    <!-- Profile Section -->
    <div class="profile-section">
        <div class="profile-header">Profile Information</div>
        <div class="row">
            <div class="col-md-3">
                <img src="profile-pic.jpg" alt="Profile Picture" class="profile-picture">
            </div>
            <div class="col-md-9">
                <div class="profile-info">
                    <strong>Full Name:</strong> John Doe
                </div>
                <div class="profile-info">
                    <strong>Email:</strong> johndoe@example.com
                </div>
                <div class="profile-info">
                    <strong>Phone Number:</strong> +234 801 234 5678
                </div>
                <div class="profile-info">
                    <strong>Professional Details:</strong> Software Engineer at Tech Solutions Ltd.
                </div>
                <div class="profile-info">
                    <strong>Documents:</strong> <a href="#">View uploaded documents</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Loan Request Section -->
    <div class="loan-section">
        <div class="loan-header">Loan Requests</div>
        <div class="loan-info">
            <strong>Pending Loan:</strong> ₦1,500,000
            <br>
            <strong>Amount Approved:</strong> Pending Approval
        </div>
        <button class="btn btn-success btn-approve">Approve Loan</button>
        <button class="btn btn-danger btn-reject">Reject Loan</button>
    </div>

    <!-- Loan Details Section -->
    <div class="loan-section">
        <div class="loan-header">Loan Details</div>
        <table class="loan-details-table">
            <tr>
                <td><strong>Loan Reference ID:</strong></td>
                <td>LN123456789</td>
            </tr>
            <tr>
                <td><strong>Loan Type:</strong></td>
                <td>Personal Loan</td>
            </tr>
            <tr>
                <td><strong>Loan Term:</strong></td>
                <td>36 months</td>
            </tr>
            <tr>
                <td><strong>Loan Purpose:</strong></td>
                <td>Home Renovation</td>
            </tr>
            <tr>
                <td><strong>Monthly Installment:</strong></td>
                <td>₦50,000</td>
            </tr>
            <tr>
                <td><strong>Loan Status:</strong></td>
                <td>Pending Approval</td>
            </tr>
            <tr>
                <td><strong>Date of Expiry:</strong></td>
                <td>2027-10-10</td>
            </tr>
            <tr>
                <td><strong>Due Date:</strong></td>
                <td>2024-10-10</td>
            </tr>
        </table>
    </div>

    <!-- Bank Info Section -->
    <div class="bank-info-section">
        <div class="bank-info-header">Bank Information</div>
        <table class="bank-info-table">
            <tr>
                <td><strong>Bank Name:</strong></td>
                <td>First Bank of Nigeria</td>
            </tr>
            <tr>
                <td><strong>Account Number:</strong></td>
                <td>1234567890</td>
            </tr>
            <tr>
                <td><strong>Account Name:</strong></td>
                <td>John Doe</td>
            </tr>
            <tr>
                <td><strong>BVN:</strong></td>
                <td>2233445566</td>
            </tr>
        </table>
    </div>

    <!-- Required JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
