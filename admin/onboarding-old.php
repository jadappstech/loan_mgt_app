<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Onboarding</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .content-wrapper-scroll {
            padding: 20px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            padding: 10px;
        }
        .field-wrapper {
            margin-bottom: 15px;
        }
        .field-placeholder {
            font-weight: bold;
        }
        .form-text {
            font-size: 0.9rem;
            color: gray;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
    </style>
</head>
<body>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Employee Onboarding</div>
                    </div>
                    <div class="card-body">
                        
                        <!-- Row start -->
                        <div class="row gutters">
                            
                            <!-- Employee ID -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input class="form-control" type="text">
                                    <div class="field-placeholder">Employee ID <span class="text-danger">*</span></div>
                                    <div class="form-text">
                                        Please enter the employee's ID number.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Name -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input class="form-control" type="text">
                                    <div class="field-placeholder">Name <span class="text-danger">*</span></div>
                                    <div class="form-text">
                                        Please enter the employee's full name.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Job Title -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input class="form-control" type="text">
                                    <div class="field-placeholder">Job Title <span class="text-danger">*</span></div>
                                    <div class="form-text">
                                        Please enter the job title.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Department -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input class="form-control" type="text">
                                    <div class="field-placeholder">Department <span class="text-danger">*</span></div>
                                    <div class="form-text">
                                        Please enter the department.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Email -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input class="form-control" type="email">
                                    <div class="field-placeholder">Email <span class="text-danger">*</span></div>
                                    <div class="form-text">
                                        We'll never share the employee's email with anyone else.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Phone -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input class="form-control" type="text">
                                    <div class="field-placeholder">Phone Number</div>
                                    <div class="form-text">
                                        Please enter the employee's phone number.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Emergency Contact Name -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input class="form-control" type="text">
                                    <div class="field-placeholder">Emergency Contact Name</div>
                                    <div class="form-text">
                                        Please enter the emergency contact's full name.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Relationship -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input class="form-control" type="text">
                                    <div class="field-placeholder">Relationship</div>
                                    <div class="form-text">
                                        Please enter the relationship to the employee.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Emergency Contact Phone -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <input class="form-control" type="text">
                                    <div class="field-placeholder">Emergency Contact Phone</div>
                                    <div class="form-text">
                                        Please enter the emergency contact's phone number.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Notes and Comments -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <textarea class="form-control" rows="3"></textarea>
                                    <div class="field-placeholder">Notes and Comments</div>
                                    <div class="form-text">
                                        Add any additional notes or comments regarding the employee's onboarding.
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>

                            <!-- Submit Button -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <button class="btn btn-primary">Submit</button>
                            </div>

                        </div>
                        <!-- Row end -->

                    </div>
                </div>
                <!-- Card end -->

            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

</div>
<!-- Content wrapper scroll end -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
