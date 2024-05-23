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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
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
            flex: 1;
            overflow: hidden;
        }
        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            overflow-y: auto;
            width: 200px;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            overflow-y: auto;
            flex: 1;
        }
        .welcome-image {
            max-width: 100%;
            height: auto;
        }
        .sidebar a {
            display: block;
            color: #333;
            margin-bottom: 10px;
        }
        .sidebar a:hover {
            text-decoration: none;
            color: #007bff;
        }
        .attachment {
            margin-bottom: 15px;
        }
        .attachment .date {
            font-size: 0.8em;
            color: #666;
        }
        .subject {
            background-color: #e9ecef;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .subject.active {
            background-color: #007bff;
            color: white;
        }
        .subject:hover {
            background-color: #dfe4ea;
        }
        .video-thumb {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .video-thumb img {
            max-width: 60px;
            margin-right: 10px;
        }
        .post-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .post-section textarea {
            width: 100%;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
            font-size: 1em;
            resize: vertical;
        }
        .newsfeed {
            margin-top: 20px;
        }
        .post {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .post .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .post .username {
            font-weight: bold;
        }
        .post .post-content {
            margin-top: 10px;
        }
        .post .post-actions {
            margin-top: 10px;
        }
        .post .post-actions a {
            margin-right: 10px;
            color: #007bff;
        }
        .post .post-actions a:hover {
            text-decoration: none;
        }
        .write-post {
            background-color: #f8f9fa;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
        }
        .write-post textarea {
            flex-grow: 1;
            border: none;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            resize: none;
        }
        .write-post button {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php';?>

    <!-- Main Container -->
    <div class="container-fluid main-container">
        <!-- Left Sidebar -->
        <div class="sidebar bg-dark">
            <h5 style="color: #fff;">Activities</h5>
            <div class="attachment" style="color: #fff;">
                <a style="color: #fff;" href="#"><i class="fas fa-file-alt"></i> Activity 1</a>
                <div style="color: #fff;" class="date">2024-05-01</div>
            </div>
            <div class="attachment">
                <a style="color: #fff;" href="#"><i class="fas fa-file-alt"></i> Quiz 3</a>
                <div style="color: #fff;" class="date">2024-05-05</div>
            </div>
            <div class="attachment">
                <a href="#" class="video-thumb">
                    <img src="../../images/thumbnail1.jpg" alt="Video Thumbnail" class="img-fluid">
                    <span style="color: #fff;">Introduction</span>
                </a>
                <div style="color: #fff;" class="date">2024-05-07</div>
            </div>
            <div class="attachment">
                <a href="#" class="video-thumb">
                    <img src="../../images/thumbnail1.jpg" alt="Video Thumbnail" class="img-fluid">
                    <span style="color: #fff;">Lesson 1</span>
                </a>
                <div style="color: #fff;" class="date">2024-05-10</div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="content">
            <!-- Newsfeed Section -->
            <div class="newsfeed">
                <!-- Post 1 -->
                <h2>Introduction in Information Technology</h2>
                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/boy2.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">John Doe</div>
                            <div class="date">2024-05-15</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Activity 4: Loops in Programming</p>
                    </div>
                    <div class="post-actions">
                        <a href="#"><i class="fas fa-thumbs-up"></i> Like</a>
                        <a href="#"><i class="fas fa-comment"></i> Comment</a>
                        <a href="#"><i class="fas fa-share"></i> Share</a>
                    </div>
                </div>

                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/boy2.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">John Doe</div>
                            <div class="date">2024-05-13</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Please watch this video lesson</p>
                        <a class="video-thumb">
                            <img src="../../images/thumbnail1.jpg" alt="Video Thumbnail" class="img-fluid">
                            <span>Machine Learning Explained</span>
                        </a>
                    </div>
                    <div class="post-actions">
                        <a href="#"><i class="fas fa-thumbs-up"></i> Like</a>
                        <a href="#"><i class="fas fa-comment"></i> Comment</a>
                        <a href="#"><i class="fas fa-share"></i> Share</a>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/boy2.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">John Doe</div>
                            <div class="date">2024-05-14</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Please pass the missing activites today</p>
                    </div>
                    <div class="post-actions">
                        <a href="#"><i class="fas fa-thumbs-up"></i> Like</a>
                        <a href="#"><i class="fas fa-comment"></i> Comment</a>
                        <a href="#"><i class="fas fa-share"></i> Share</a>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/boy1.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">John Doe</div>
                            <div class="date">2024-05-13</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Check out this cool video on machine learning!</p>
                        <a class="video-thumb">
                            <img src="../../images/thumbnail1.jpg" alt="Video Thumbnail">
                            <span>Machine Learning Explained</span>
                        </a>
                    </div>
                    <div class="post-actions">
                        <a href="#"><i class="fas fa-thumbs-up"></i> Like</a>
                        <a href="#"><i class="fas fa-comment"></i> Comment</a>
                        <a href="#"><i class="fas fa-share"></i> Share</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="sidebar">
            <h5>Subjects</h5>
            <div class="subject">
                <a href="find_tutor.php">IT 101 - Introduction to Information Technology</a>
            </div>
            <div class="subject">
                <a href="find_tutor.php">IT 102 - Programming Fundamentals</a>
            </div>
        </div>
    </div>

    <!-- Payment Modal -->
    <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="paymentModalLabel">Subscribe to Access</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>To access this video, please subscribe to our premium plan.</p>
                    <div class="form-group">
                        <label for="subscriptionPlan">Choose a plan:</label>
                        <select class="form-control" id="subscriptionPlan">
                            <option value="monthly">Monthly - $9.99</option>
                            <option value="yearly">Yearly - $99.99</option>
                        </select>
                    </div>
                    <button id="subscribeButton" type="button" class="btn btn-primary">Subscribe</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.video-thumb').on('click', function(event) {
                event.preventDefault();
                $('#paymentModal').modal('show');
            });

            $('#subscribeButton').on('click', function() {
                window.location.href = 'https://youtu.be/qfUZBKDh9BY?si=9gbMHE8_0V3B8QH-';
            });
        });
    </script>
</body>
</html>
