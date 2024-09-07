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
    <title>UniPro Sign In</title>

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
            width: 60%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            box-sizing: border-box;
        }

        .login-wrapper {
            width: 100%;
            max-width: 550px;
            text-align: center;
        }

        .login-left img {
            width: 100px;
            margin-bottom: 30px;
        }

        .login-left h6 {
            color: #333;
            font-weight: bold;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .field-wrapper input {
            border: none;
            border-radius: 4px;
            padding: 16px;
            width: 100%;
            font-size: 18px;
            margin-bottom: 15px;
            background-color: #f1f1f1;
        }

        .field-wrapper input::placeholder {
            color: #aaa;
        }

        .actions .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            padding: 16px;
            font-size: 18px;
        }

        .actions a {
            color: #007bff;
            font-size: 16px;
            margin-top: 10px;
            display: block;
        }

        .remember-me {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .remember-me input {
            margin-right: 10px;
        }

        .remember-me label {
            font-size: 14px;
            margin-top: 5px;
        }

        .login-right {
            background: url('naira.jpg') no-repeat center center;
            background-size: cover;
            width: 40%;
            height: 100vh;
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
            <!-- Logo -->
            <img src="logo.png" alt="Logo">
            <div class="login-wrapper">
                <form action="https://www.bootstrapget.com/demos/themeforest/unipro-admin-template/demos/01-design-blue/crm.html">
                    <div class="login-screen">
                        <div class="login-body">
                            <h6>Welcome back,<br>Please sign in to your account.</h6>
                            <div class="field-wrapper">
                                <input type="email" placeholder="Email ID" autofocus>
                            </div>
                            <div class="field-wrapper">
                                <input type="password" placeholder="Password">
                                <a href="forgot-password.html">Forgot password?</a>
                            </div>
                            <div class="remember-me">
                                <input type="checkbox" id="rememberMe">
                                <label for="rememberMe">Remember me</label>
                            </div>
                            <div class="actions">
                                <a href="forgot-password.html">Forgot password?</a>
                            </div>
                            <div class="actions">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
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
