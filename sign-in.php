<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UniPro App">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="img/fav.png" />

    <!-- Title -->
    <title>UniPro Login</title>

    <!-- Common CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <style>
        body.authentication {
            background: url('phonmoni.webp') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .login-logo img {
            width: 150px; /* Adjusted logo size */
        }

        .forgot-password {
            display: block;
            margin-top: 10px;
            text-align: left;
        }

        .form-check-input {
            width: 1.1em;
            height: 1.1em;
        }

        .remember-me-label {
            display: inline-block;
            margin-left: 5px;
        }

        .btn-primary {
            width: 100%; /* Make Sign In button span across the form */
            padding: 10px;
        }

        .btn-light {
            border: none; /* Remove border from Sign Up button */
            background: transparent; /* Make it transparent */
            color: #fff; /* Ensure the text is visible */
        }

        .btn-light:hover {
            color: #ccc; /* Slight hover effect */
            text-decoration: underline;
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
                            <span>Design</span>
                            <span>Made</span>
                            <span>Simple.</span>
                        </div>
                        <div class="about-desc">
                            UniPro is a data dashboard that visually tracks, analyzes, and displays key performance indicators (KPI), metrics, and key data points to monitor the health of a business, department, or specific process.
                        </div>
                        <a href="reports.php" class="know-more">Know More <img src="img/right-arrow.svg" alt="Uni Pro Admin"></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="login-wrapper">
                        <form action="https://www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/dashboard.php">
                            <div class="login-screen">
                                <div class="login-body">
                                    <!-- Center the logo and increase size -->
                                    <a href="dashboard.php" class="login-logo d-flex justify-content-center">
                                        <img src="img/centrum-logo.png" alt="Uni Pro Admin">
                                    </a>
                                    <h6 class="text-center">Welcome back to UniPro dashboard,<br>Please sign in to your account.</h6>
                                    <div class="field-wrapper">
                                        <input type="email" required autofocus>
                                        <div class="field-placeholder">Email ID</div>
                                    </div>
                                    <div class="field-wrapper">
                                        <input type="password" required>
                                        <div class="field-placeholder">Password</div>
                                        <!-- Forgot password link under password field -->
                                        <a href="forgot-password.php" class="forgot-password">Forgot Password?</a>
                                    </div>
                                    <div class="field-wrapper mb-3">
                                        <!-- Remember Me checkbox with label -->
                                        <div class="form-check d-flex align-items-center">
                                            <input type="checkbox" class="form-check-input" id="rememberMe">
                                            <label for="rememberMe" class="remember-me-label">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <!-- Make the button span across the form -->
                                        <button type="submit" class="btn btn-primary">Sign In</button>
                                    </div>
                                </div>
                                <div class="login-footer">
                                    <span class="additional-link">Don't have an account? <a href="signup.php" class="btn btn-light">Sign Up</a></span>
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
