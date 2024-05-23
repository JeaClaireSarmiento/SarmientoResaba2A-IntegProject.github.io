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
        .sidebar {
            background-color: #f8f9fa;
            padding: 20px;
            overflow-y: auto; /* Enable vertical scrolling */
            width: 200px; /* Fixed width for sidebars */
        }
        .content {
            background-color: #fff;
            padding: 20px;
            overflow-y: auto; /* Enable vertical scrolling */
            flex: 1; /* Grow to fill remaining space */
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
            background-color: #e9ecef; /* Light background color */
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Box shadow */
        }
        .subject.active {
            background-color: #007bff; /* Active background color */
            color: white; /* Text color for active state */
        }
        .subject:hover {
            background-color: #dfe4ea; /* Hover effect */
        }
        .video-thumb {
            display: flex;
            align-items: center;
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
        .profile img {
            max-width: 100%;
        }

        /* Chat Styles */
        .chat-messages {
            display: flex;
            flex-direction: column;
            overflow-y: auto;
            height: calc(100vh - 120px); /* Adjust the height as needed */
            padding: 10px;
            border: 1px solid #e9ecef;
            border-radius: 5px;
        }
        .message {
            max-width: 70%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 10px;
        }
        .message.bot {
            background-color: #e9f5ff; /* Light blue */
            align-self: flex-start;
        }
        .message.tutor {
            background-color: #fff; /* White */
            align-self: flex-start;
            border: 1px solid #e9ecef;
        }
        .message.user {
            background-color: #007bff; /* Blue */
            align-self: flex-end;
            color: #fff; /* White text */
        }
        .chat-input {
            margin-top: auto;
            padding: 10px;
        }
        .message .options {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }
        .message .options button {
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            font-size: 0.9em;
        }
        .message .options button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php';?>

    <!-- Main Container -->
    <div class="container-fluid main-container">
        <!-- Left Sidebar -->
        <div class="sidebar">
            <div class="profile text-center">
                <img src="../../images/girl1.jpg" alt="Tutor Avatar" class="avatar">
                <div class="tutor-info">
                    <h5>John Doe</h5>
                    <p>Tutor</p>
                </div>
            </div>
            <div class="interaction">
                 <button class="btn btn-primary btn-block mb-2">Follow</button>
                <button class="btn btn-primary btn-block mb-2">Recommend</button>
                <button class="btn btn-primary btn-block mb-4" onclick="showRateModal()">Rate</button>
                <button class="btn btn-danger btn-block mb-2" onclick="showReportModal()">Report</button>
                <button class="btn btn-danger btn-block mb-2">Block</button>

            </div>
        </div>

        <!-- Main Content -->
        <div class="content">
            <!-- Chat Messages -->
            <div class="chat-messages" id="chat-messages">
                <div class="message bot">
                    <p>Hello! How can I assist you today?</p>
                </div>

                <!-- Tutor Messages with Options -->
                <div class="message tutor">
                    <p>Please choose one of the following options:</p>
                    <div class="options">
                        <button onclick="sendMessage('Get Started')">Get Started</button>
                        <button onclick="sendMessage('Schedule')">Schedule</button>
                        <button onclick="sendMessage('Payment')">Payment</button>
                    </div>
                </div>
            </div>

            <!-- Chat Input -->
            <div class="chat-input">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Type your message here..." id="chat-input-field">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="button" onclick="sendMessage()">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal HTML for Rate -->
    <div class="modal fade" id="rateModal" tabindex="-1" aria-labelledby="rateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rateModalLabel">Rate Tutor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="message.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="rating">Rating:</label>
                            <div id="rating" class="stars">
                                <i class="fas fa-star" data-value="1"></i>
                                <i class="fas fa-star" data-value="2"></i>
                                <i class="fas fa-star" data-value="3"></i>
                                <i class="fas fa-star" data-value="4"></i>
                                <i class="fas fa-star" data-value="5"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal HTML for Report -->
    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reportModalLabel">Report Tutor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="message.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="report-message">Message:</label>
                            <textarea class="form-control" id="report-message" name="report-message" rows="3" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showRateModal() {
            $('#rateModal').modal('show');
        }
        function showReportModal() {
            $('#reportModal').modal('show');
        }
        $(document).ready(function() {
            $('.stars i').on('click', function() {
                var rating = $(this).data('value');
                $('#rating i').each(function(index) {
                    if (index < rating) {
                        $(this).addClass('text-warning');
                    } else {
                        $(this).removeClass('text-warning');
                    }
                });
            });
        });

        function sendMessage(option) {
            var message = option || document.getElementById('chat-input-field').value;
            if (!message) return;

            var chatMessages = document.getElementById('chat-messages');

            // Append user message
            var userMessageDiv = document.createElement('div');
            userMessageDiv.classList.add('message', 'user');
            userMessageDiv.innerHTML = `<p>${message}</p>`;
            chatMessages.appendChild(userMessageDiv);

            // Clear input field
            document.getElementById('chat-input-field').value = '';

            // Scroll to the bottom
            chatMessages.scrollTop = chatMessages.scrollHeight;

            // Simulate bot response
            setTimeout(function() {
                var botResponse = '';

                switch(message) {
                    case 'Get Started':
                        botResponse = 'Welcome! Here is how you can get started. Please submit your enrollment and you will have access';
                        break;
                    case 'Schedule':
                        botResponse = 'Schedules are Mondays to Friday is 8:00 AM to 11:30 AM';
                        break;
                    case 'Payment':
                        botResponse = 'Payment options are as through Paymaya and Gcash. You can send in the following number: 0987654321';
                        break;
                    default:
                        botResponse = 'Thank you for your message. We will get back to you shortly.';
                }

                var botMessageDiv = document.createElement('div');
                botMessageDiv.classList.add('message', 'tutor');
                botMessageDiv.innerHTML = `<p>${botResponse}</p>`;
                chatMessages.appendChild(botMessageDiv);

                // Scroll to the bottom
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }, 1000); // Delay for bot response simulation
        }
    </script>
</body>
</html>
