<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UniPro App">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="karolan.jpg" />

    <!-- Title -->
    <title>UniPro Login</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Custom Styles -->
    <style>
        body.authentication {
            background: url('new-background.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        .login-container {
            display: flex;
            height: 100vh;
            width: 100vw;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .login-left {
            background: rgba(255, 255, 255, 0.9);
            padding: 50px;
            width: 55%;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            box-sizing: border-box;
        }

        .login-wrapper {
            width: 100%;
            max-width: 450px;
            border: none;
        }

        .login-left h6 {
            color: #333;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .field-wrapper input {
            border: none;
            border-radius: 4px;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            margin-bottom: 20px;
            background-color: #f1f1f1;
        }

        .field-placeholder {
            position: absolute;
            top: -10px;
            left: 15px;
            background: #fff;
            padding: 0 5px;
            font-size: 12px;
            color: #aaa;
        }

        .actions .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            padding: 12px;
            font-size: 16px;
        }

        .actions a {
            color: #007bff;
            font-size: 14px;
            margin-top: 10px;
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
        }

        .additional-link {
            color: #333;
        }

        .additional-link a {
            color: #007bff;
            font-weight: bold;
        }

        .login-right {
            background: url('karolan.jpg') no-repeat center center;
            background-size: cover;
            width: 45%;
            height: 90vh;
            box-sizing: border-box;
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
        <div class="login-left">
            <div class="login-wrapper">
                <form action="https://www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/crm.html">
                    <div class="login-screen">
                        <div class="login-body">
                            <h6>Welcome back,<br>Please login to your account.</h6>
                            <div class="field-wrapper">
                                <input type="email" autofocus>
                                <div class="field-placeholder">Email ID</div>
                            </div>
                            <div class="field-wrapper mb-3">
                                <input type="password">
                                <div class="field-placeholder">Password</div>
                            </div>
                            <div class="actions">
                                <a href="forgot-password.html">Forgot password?</a>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                        <div class="login-footer">
                            <span class="additional-link">No Account? <a href="signup.html" class="btn btn-light">Sign Up</a></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="login-right"></div>
    </div>
    <!-- Login container end -->

    <!-- Required JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/moment.js"></script>

    <!-- Main Js Required -->
    <script src="js/main.js"></script>

</body>
</html>
