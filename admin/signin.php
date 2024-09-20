<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Loan Management System">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />

    <!-- Title -->
    <title>Loan Management Application</title>

    <!-- Common CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <style>
        body.authentication {
            /*background: url('phonmoni.webp') no-repeat center center fixed;*/
            background-size: cover;
            font-family: 'titillium';
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .login-container {
            background-color: #f9f9f9;
            height: 100vh; 
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-about {
            background-color: #ffffff; 
            border-radius: 1px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            align-items: center;
        }

        .slogan span {
            display: flex;
            font-size: 2rem;
            color: #292c61; 
            font-weight: 600;
            margin-bottom: 10px;
            flex-direction: column;
            text-align: center;
        }

        .know-more {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bf; /* Button color */
            color: #ffffff;
            text-decoration: none;
            border-radius: 1px;
        }

        .know-more:hover {
            background-color: #0056b3; /* Darker button color on hover */
        }


        .login-wrapper {
            background-color: #f2f2f2; 
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); 
           /* max-width: 900px; /* Increase the width of the form */
            margin: 0 auto; /* Center the container */
        }
        
        .login-screen {
            min-width: 30vw !important;
            width: 30vw;
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 5px;
            height: 70vh;

        }

        .login-body {
            padding: 20px;
            
        }

        .login-logo img {
            width: 200px !important;
            height: 100px !important;

        }

        h6 {
            font-size: 1.2rem; 
            margin-bottom: 20px;
            color: #333333;
        }

        .field-wrapper {
            margin-bottom: 20px;
        }

        .field-wrapper input {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #cccccc;
        }

        .field-placeholder {
            font-size: 0.9rem;
            color: #666666;
            margin-top: 5px;
        }

        .forgot-password {
            display: block;
            text-align: right;
            font-size: 0.9rem;
            color: #007bff;
        }

        .form-check {
            margin-bottom: 20px;
        }

        .actions button {
            width: 100%; /* Make the button span across the form */
            padding: 10px;
            font-size: 1rem;
        }

        .additional-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .additional-link a {
            color: #007bff;
        }
        @media only screen and (max-width: 600px) {
            .login-screen {
                min-width: 80vw !important;
            }
        }
    </style>
</head>

<body class="authentication">

    <!-- Loading wrapper start -->
    <div id="loading-wrapper">
        <div class="spinner-border"></div>
        Loading...
    </div>
    <!-- Loading wrapper end -->

    <!-- Login container start -->
    <div class="login-container">
        <div class="container-fluid h-100">
            <div class="row no-gutters h-100">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-about">
                        <div class="slogan">
                            <span>Loan</span>
                            <span>Made</span>
                            <span style="font-size: 5em;">Easy</span>
                        </div>
                        <div class="about-desc">
                            <!-- UniPro is a data dashboard that visually tracks, analyzes, and displays key performance indicators (KPI), metrics, and key data points to monitor the health of a business, department, or specific process. -->
                        </div>
                        <a href="reports.php" class="know-more">Know More <img src="img/right-arrow.svg" alt="logo"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-wrapper">
                        <!--<form action="./includes/layouts/db.php" method="POST">-->
                        <form action="./index.php" method="POST">
                            <div class="login-screen">
                                <div class="login-body">
                                    <!-- Center the logo and increase size -->
                                    <a href="dashboard.php" class="login-logo d-flex justify-content-center">
                                        <img src="img/centrum-logo.png" alt="Logo">
                                    </a>
                                    <p class="text-center text-dark"><small>Welcome back! Please sign in to your account.</small></p>
                                    <div class="field-wrapper">
                                        <input type="email" required autofocus>
                                        <div class="field-placeholder">User Id</div>
                                    </div>
                                    <div class="field-wrapper">
                                        <input type="password" name="password" required>
                                        <div class="field-placeholder">Password</div>
                                        <!-- Forgot password link under password field -->
                                        <p class="text-end text-primary"><small><a href="forgot-password.php">Forgot Password?</a></small></p>
                                    </div>
                                    <div class="field-wrapper mb-3">
                                        <!-- Remember Me checkbox with label -->
                                        <div class="form-check d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input" id="rememberMe">
                                            <small class='text-dark'> &nbsp; Remember Me</small>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <!-- Make the button span across the form -->
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </div>
                                </div>
                                <div class="login-footer">
                                    <span class="additional-link">Don't have an account? <a href="signup.php" class="">Sign Up</a></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login container end -->

    <!-- Required JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/moment.js"></script>

    <!-- Main Js -->
    <script src="js/main.js"></script>

</body>
</html>
