<?php

include '../../session.php';

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CICS | TutorLink</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Poppins font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif; /* Apply Poppins font to the entire page */
            margin: 0;
            padding: 0;
            height: 100vh; /* Full viewport height */
            display: flex;
            flex-direction: column;
        }
        .header {
            background-color: green;
            color: white;
        }
        .navbar-nav {
            align-items: center;
        }
        .navbar-nav .nav-item {
            margin-right: 15px;
        }
        .navbar-nav .nav-item .nav-link {
            color: #ffffff;
        }
        .main-container {
            display: flex;
            flex: 1; /* Grow to fill remaining space */
            overflow: hidden; /* Hide overflowing content */
        }
        .content {
            background-color: #fff;
            padding: 20px;
            overflow-y: auto; /* Enable vertical scrolling */
            flex: 1; /* Grow to fill remaining space */
        }
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .card-title {
            margin-bottom: 0;
        }
        .ratings {
            margin-bottom: 10px;
        }
        .options button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php';?>

    <!-- Main Container -->
    <div class="container-fluid main-container">
        <!-- Main Content -->
        <div class="content">
            <h2>IT 101 - Introduction to Information Technology</h2>
            <h5>Please choose a tutor</h5>
            <div class="row">
                <!-- Tutor Card 1 -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body d-flex align-items-center">
                            <img src="../../images/boy1.jpg" alt="Tutor Avatar" class="avatar mr-3">
                            <div>
                                <h5 class="card-title">John Doe</h5>
                                <div class="ratings mb-2">
                                    <span class="badge badge-primary">4.5 <i class="fas fa-star"></i></span>
                                    <span class="badge badge-secondary">32 Ratings</span>
                                </div>
                                <div class="options">
                                    <button class="btn btn-success mr-2" data-toggle="modal" data-target="#enrollModal">Enroll</button>
                                    <a href="message.php"><button class="btn btn-primary">Leave a Message</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tutor Card 2 -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body d-flex align-items-center">
                            <img src="../../images/boy2.jpg" alt="Tutor Avatar" class="avatar mr-3">
                            <div>
                                <h5 class="card-title">Jane Smith</h5>
                                <div class="ratings mb-2">
                                    <span class="badge badge-primary">4.8 <i class="fas fa-star"></i></span>
                                    <span class="badge badge-secondary">25 Ratings</span>
                                </div>
                                <div class="options">
                                    <button class="btn btn-success mr-2" data-toggle="modal" data-target="#enrollModal">Enroll</button>
                                    <a href="message.php"><button class="btn btn-primary">Leave a Message</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Enrollment Modal -->
    <div class="modal fade" id="enrollModal" tabindex="-1" role="dialog" aria-labelledby="enrollModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enrollModalLabel">Enrollment Form</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Enrollment Form Here -->
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="class.php"><button type="button" class="btn btn-primary" onclick="sendMessage()" >Enroll</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
