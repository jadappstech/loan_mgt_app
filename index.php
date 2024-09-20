<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./admin/centrum-logo.png">
    <title>Centrum Loan - Get a Loan in Minutes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom Styles -->
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            scroll-behavior: smooth;
        }
        /* Header */
        .navbar {
            background-color: skyblue;
        }
        .navbar-brand img {
            max-height: 50px;
        }
        .navbar-nav .nav-link {
            color: #fff !important;
            margin-right: 15px;
            font-weight: bold;
        }
        .navbar-nav .nav-link:hover {
            color: #d4d4d4 !important;
        }

       

        .apply-btn {
            background-color: #28a745;
            color: #fff !important;
            border-radius: 5px;
            padding: 8px 15px;
            display: inline-block;
        }
        /* Hero Section */
        .hero {
            background: url('./admin/smiling.avif') no-repeat center center/cover;
            color: #fff;
            height: 80vh;
            position: relative;
            
        }
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        .hero .btn {
            font-size: 1.2rem;
            padding: 12px 30px;
        }
        /* Sections */
        section {
            padding: 60px 0;
        }
        section h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
        }
        .section-content {
            margin-top: 30px;
        }
        .learn-more-btn {
            margin-top: 15px;
        }
        /* Testimonials */
        .testimonial {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 5px;
            margin-bottom: 30px;
            
        }
        .testimonial p {
            font-style: italic;
            text-align: center;
        }
        .testimonial .customer {
            margin-top: 15px;
            font-weight: bold;
        }
        /* FAQ */
        .faq .card-header {
            background-color: #007bff;
            color: #fff;
        }
        /* CTA Section */
        .cta {
            background-color:skyblue;
            color: #fff;
            text-align: center;
            padding: 50px 20px;
        }
        .cta .btn {
            background-color: #fff;
            color: #28a745;
            font-size: 1.2rem;
            padding: 12px 30px;
            margin-top: 20px;
        }
        /* Footer */
        .footer {
            background-color: /*#343a40*/ #0f172a;
            color: #ddd;
            padding: 30px 0;
        }
        .footer a {
            color: #1173eb;
        }
        .social-icons a {
            color: #ddd;
            margin-right: 15px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./admin/img/centrum-logo.png" alt="QuickLoan" style="width: 100px; height: 150px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#loans">Loan Options</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#eligibility">Eligibility</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#process">How to Apply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#benefits">Benefits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link apply-btn btn-sm w-25 text-center py-2" href="./user/welcome.php">Apply Now</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="hero-content">
            <h1>Get a Loan in Minutes</h1>
            <p>Fast, Easy, and Secure</p>
            <a href="./user/signup.php" class="btn btn-success btn-lg">Apply Now</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about">
        <div class="container">
            <h2>About Us</h2>
            <div class="row align-items-center section-content" style="row-gap: 20px">
                <div class="col-md-6">
                    <p>QuickLoan is committed to providing fast and reliable loan services to help you achieve your financial goals. Our mission is to make borrowing simple, transparent, and accessible to everyone.</p>
                    <a href="#" class="btn btn-primary learn-more-btn">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src="./admin/img/team.png" class="img-fluid" alt="About Us">
                </div>
            </div>
        </div>
    </section>

    <!-- Loan Options Section -->
    <section id="loans" style="background-color: #f8f9fa;">
        <div class="container">
            <h2>Our Loan Options</h2>
            <div class="row section-content" style="row-gap: 30px">
                <!-- Loan Option 1 -->
                <div class="col-md-4">
                    <img src="./admin/img/loan-options-1.jpg" class="img-fluid" alt="Personal Loan">
                    <h4>Personal Loan</h4>
                    <p>Flexible repayment plans with low-interest rates to meet your personal needs.</p>
                    <a href="#" class="btn btn-primary learn-more-btn">Learn More</a>
                </div>
                <!-- Loan Option 2 -->
                <div class="col-md-4">
                    <img src="./admin/img/loan-options-2.jpg" class="img-fluid" alt="Business Loan">
                    <h4>Business Loan</h4>
                    <p>Boost your business growth with our tailored business loans.</p>
                    <a href="#" class="btn btn-primary learn-more-btn">Learn More</a>
                </div>
                <!-- Loan Option 3 -->
                <div class="col-md-4">
                    <img src="./admin/img/loan-options-3.jpg" class="img-fluid" alt="Student Loan">
                    <h4>Student Loan</h4>
                    <p>Affordable options to finance your education and achieve your dreams.</p>
                    <a href="#" class="btn btn-primary learn-more-btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility Section -->
    <section id="eligibility">
        <div class="container">
            <h2>Eligibility Criteria</h2>
            <div class="row align-items-center section-content" style="row-gap: 20px">
                <div class="col-md-6">
                    <ul>
                        <li>Must be at least 18 years old.</li>
                        <li>Provide proof of a steady income.</li>
                        <li>Minimum credit score of 600.</li>
                    </ul>
                    <p>Ensure you meet these requirements before applying.</p>
                    <a href="#" class="btn btn-primary learn-more-btn">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src="./admin/checklist.avif" class="img-fluid" alt="Eligibility">
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process Section -->
    <section id="process" style="background-color: #f8f9fa;">
        <div class="container">
            <h2>How to Apply</h2>
            <div class="row align-items-center section-content" style="row-gap: 20px">
                <div class="col-md-6">
                    <img src="./admin/t.jpg" class="img-fluid" alt="Application Process">
                </div>
                <div class="col-md-6">
                    <ol>
                        <li>Complete the online application form.</li>
                        <li>Upload the necessary documents.</li>
                        <li>Receive approval within 24 hours.</li>
                        <li>Get funds deposited into your account.</li>
                    </ol>
                    <a href="#" class="btn btn-primary learn-more-btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits">
        <div class="container">
            <h2>Why Choose Us</h2>
            <div class="row align-items-center section-content" style="row-gap: 10px">
                <div class="col-md-6">
                    <ul>
                        <li>Fast approval process.</li>
                        <li>Flexible repayment options.</li>
                        <li>No hidden fees.</li>
                    </ul>
                    <a href="#" class="btn btn-primary learn-more-btn">Learn More</a>
                </div>
                <div class="col-md-6">
                    <img src="./admin/happy2.jpeg" class="img-fluid" alt="Benefits">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" style="background-color: #f8f9fa;">
        <div class="container">
            <h2>What Our Customers Say</h2>
            <div class="row section-content">
                <!-- Testimonial 1 -->
                <div class="col-md-4">
                    <div class="testimonial">
                        <img src="./admin/Customer.png" class="img-fluid rounded-circle" alt="Customer 1" style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;  display: block; margin: 0 auto;">
                        <p>"QuickLoan helped me fund my small business in no time. Excellent service!"</p>
                        <div class="customer">- Sarah O.</div>
                        <div class="rating">★★★★★</div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="col-md-4">
                    <div class="testimonial">
                        <img src="./admin/img/pass.jpg" class="img-fluid rounded-circle" alt="Customer 2" style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;  display: block; margin: 0 auto;">
                        <p>"The application process was so simple, and I received my loan within 24 hours."</p>
                        <div class="customer">- David K.</div>
                        <div class="rating">★★★★★</div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="col-md-4">
                    <div class="testimonial">
                        <img src="./admin/hapicust.jpg" class="img-fluid rounded-circle" alt="Customer 3" style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;  display: block; margin: 0 auto;">
                        <p>"Highly recommend QuickLoan for anyone looking for a quick and easy loan solution."</p>
                        <div class="customer">- Mary L.</div>
                        <div class="rating">★★★★★</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div class="accordion" id="faqAccordion">
                <!-- FAQ 1 -->
                <div class="card">
                    <div class="card-header" id="faqHeading1">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-left" type="link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                What documents are required to apply?
                            </button>
                        </h5>
                    </div>
                    <div id="faq1" class="collapse show" aria-labelledby="faqHeading1" data-parent="#faqAccordion">
                        <div class="card-body">
                            You'll need a valid ID, proof of income, and recent bank statements.
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- FAQ 2 -->
                <div class="card">
                    <div class="card-header" id="faqHeading2">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-left collapsed" type="button" data-toggle="collapse" data-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                How long does it take to get approved?
                            </button>
                        </h5>
                    </div>
                    <div id="faq2" class="collapse" aria-labelledby="faqHeading2" data-parent="#faqAccordion">
                        <div class="card-body">
                            Loan approvals are typically completed within 24 hours.
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- FAQ 3 -->
                <div class="card">
                    <div class="card-header" id="faqHeading3">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-left collapsed" type="button" data-toggle="collapse" data-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Can I repay my loan early without penalties?
                            </button>
                        </h5>
                    </div>
                    <div id="faq3" class="collapse" aria-labelledby="faqHeading3" data-parent="#faqAccordion">
                        <div class="card-body">
                            Yes, you can repay your loan early without any additional fees.
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Section -->
    <section id="cta" class="cta">
        <div class="container">
            <h2>Ready to Apply?</h2>
            <a href="./user/signup.php" class="btn btn-light btn-lg text-dark">Apply Now</a>
            <p class="mt-4">Call us: <a href="tel:08001234567" style="color: #fff;">0800-123-4567</a> | Email: <a href="mailto:support@quickloan.com" style="color: #fff;">support@quickloan.com</a></p>
        </div>
    </section>

<!-- Footer Section -->
<footer class="footer">
  <div class="container text-center">
    <p>No 9B Lumumbashi Street Abacha Estate Wuse Zone 4 Abuja<br> +234 908 8888 198<br> +2349166663773 </p>
    <p>info@centrumfinanceltd.com</p>
        <p>
      <a href="#">Terms and Conditions</a> | <a href="(link unavailable)">Privacy Policy</a>
    </p>
    <div class="icon">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>

    </div>

    <p>&copy; 2024 Centrum Finance Company Limited.</p>
  </div>
</footer>



    <!-- Required JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Optional JavaScript for Icons (e.g., Font Awesome) -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>
</html>
