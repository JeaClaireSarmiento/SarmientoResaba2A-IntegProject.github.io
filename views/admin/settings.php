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
    <title>Settings | TutorLink Admin</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .header {
            background-color: green;
            color: white;
        }
        .navbar-nav .nav-item .nav-link {
            color: #ffffff;
        }
        .container-fluid {
            display: flex;
            height: calc(100vh - 56px);
            padding: 0;

        }
        .sidebar {
            background-color: #343a40;
            width: 250px;
            padding: 15px;
            overflow-y: auto;
            color: #ffffff;
        }
        .sidebar h5 {
            margin-top: 20px;
            margin-bottom: 10px;
            color: #ffffff;
        }
        .sidebar .nav-link {
            color: #ffffff;
            display: block;
            padding: 10px;
            margin: 5px 0;
            background-color: #495057;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .sidebar .nav-link.active {
            background-color: #007bff;
            color: white;
            box-shadow: 0 2px 8px rgba(0,0,0,0.2);
        }
        .main-content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #ffffff;
        }
        .settings-section {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .settings-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: 600;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-save {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
    <div class="container-fluid">
        <!-- Include Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="settings-section">
                <h2 class="settings-title">General Settings</h2>
                <div class="form-group">
                    <label class="form-label" for="siteTitle">Site Title</label>
                    <input type="text" id="siteTitle" class="form-control" value="TutorLink">
                </div>
                <div class="form-group">
                    <label class="form-label" for="siteDescription">Site Description</label>
                    <textarea id="siteDescription" class="form-control">Welcome to TutorLink - Connecting Tutors and Students!</textarea>
                </div>
                <button class="btn btn-save">Save Changes</button>
            </div>

            <div class="settings-section">
                <h2 class="settings-title">Email Settings</h2>
                <div class="form-group">
                    <label class="form-label" for="emailAddress">Admin Email Address</label>
                    <input type="email" id="emailAddress" class="form-control" value="admin@gmail.com">
                </div>
                <div class="form-group">
                    <label class="form-label" for="emailNotifications">Email Notifications</label>
                    <select id="emailNotifications" class="form-control">
                        <option value="1">Enabled</option>
                        <option value="0">Disabled</option>
                    </select>
                </div>
                <button class="btn btn-save">Save Changes</button>
            </div>

            <div class="settings-section">
                <h2 class="settings-title">Change Password</h2>
                <div class="form-group">
                    <label class="form-label" for="currentPassword">Current Password</label>
                    <input type="password" id="currentPassword" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label" for="newPassword">New Password</label>
                    <input type="password" id="newPassword" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label" for="confirmPassword">Confirm New Password</label>
                    <input type="password" id="confirmPassword" class="form-control">
                </div>
                <button class="btn btn-save">Change Password</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Your JavaScript code here
        });
    </script>
</body>
</html>
