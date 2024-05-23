<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #4e8076;
            font-family: 'Poppins', sans-serif;
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .form-container {
            border: 2px solid #abb9c8;
            border-radius: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group label {
            font-weight: 500;
            color: #333;
        }

        .form-control {
            border-radius: 20px;
            border-color: #ced4da;
        }

        .form-check-input {
            margin-left: 5px;
        }

        .form-check-label {
            margin-left: 20px; /* Added margin to the left of checkbox labels */
        }

        .btn {
            border-radius: 20px;
            font-weight: bold;
            padding: 10px 20px;
            margin-top: 20px;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            color: #fff;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-container">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                     <img src="images/girl3.jpg" alt="Avatar" class="avatar">
                </div>
             </div>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Enter first name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="middleName">Middle Name</label>
                            <input type="text" class="form-control" id="middleName" placeholder="Enter middle name" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Enter last name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber" placeholder="Enter phone number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Subjects to Teach</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="subject1" value="Web Development">
                            <label class="form-check-label" for="subject1">
                                Web Development
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="subject2" value="Data Science">
                            <label class="form-check-label" for="subject2">
                                Data Science
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="subject3" value="Cyber Security">
                            <label class="form-check-label" for="subject3">
                                Cyber Security
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="subject4" value="AI & Machine Learning">
                            <label class="form-check-label" for="subject4">
                                AI & Machine Learning
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="index.php"><button type="button" class="btn btn-secondary">Back</button></a>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#successModal">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Your application has been submitted successfully. Please wait for the admin to approve and check your email for account details.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $('#applicationForm').submit(function(e){
            e.preventDefault();
            $('#successModal').modal('show');
        });
        $('#successModal').on('hidden.bs.modal', function () {
            window.location.href = 'index.php'; // Redirect to index.php after modal is closed
        });
    });
</script>
</body>
</html>
