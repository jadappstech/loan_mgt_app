<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UniPro App">
    <meta name="author" content="ParkerThemes">
    <link rel="shortcut icon" href="logo.png" />

    <!-- Title -->
    <title>UniPro Sign Up</title>

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

        .signup-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }

        .signup-wrapper {
            background: rgba(255, 255, 255, 0.9);
            padding: 50px;
            width: 100%;
            max-width: 600px;
            text-align: center;
            border-radius: 8px;
        }

        .signup-wrapper img {
            width: 80px;
            margin-bottom: 20px;
        }

        .signup-wrapper h6 {
            color: #333;
            font-weight: bold;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .field-wrapper {
            position: relative;
            margin-bottom: 20px;
        }

        .field-wrapper input {
            border: none;
            border-radius: 4px;
            padding: 16px;
            width: 100%;
            font-size: 16px;
            background-color: #f1f1f1;
        }

        .field-wrapper input::placeholder {
            color: #aaa;
        }

        .actions .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            width: 100%;
            padding: 16px;
            font-size: 18px;
            margin-top: 10px;
        }

        .terms {
            font-size: 14px;
            color: #333;
            margin-bottom: 20px;
        }

        .terms a {
            color: #007bff;
        }

        .login-redirect {
            margin-top: 20px;
            color: #333;
        }

        .login-redirect a {
            color: #007bff;
            font-weight: bold;
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

    <!-- Signup container start -->
    <div class="signup-container">
        <div class="signup-wrapper">
            <!-- Logo -->
            <img src="./img/centrum-logo.png" alt="Logo">
            <h6>Create Your Account</h6>
            <form action="#">
                <div class="field-wrapper">
                    <input type="text" placeholder="Full Name" required>
                </div>
                <div class="field-wrapper">
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="field-wrapper">
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="field-wrapper">
                    <input type="password" placeholder="Confirm Password" required>
                </div>
                <div class="field-wrapper">
                    <input type="tel" placeholder="Phone Number (Optional)">
                </div>
                <div class="terms">
                    By signing up, you agree to our <a href="#">Terms and Conditions</a>.
                </div>
                <div class="actions">
                    <a href="./create-application-biodata.php" class="btn btn-primary">
                        Sign Up
                    </a>
                    <!-- <button type="submit" class="btn btn-primary">Sign Up</button> -->
                </div>
            </form>
            <div class="login-redirect">
                Already have an account? <a href="login.html">Sign In</a>
            </div>
        </div>
    </div>
    <!-- Signup container end -->

    <!-- Required JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/moment.js"></script>

    <!-- Main Js Required -->
    <script src="js/main.js"></script>

</body>
</html>
