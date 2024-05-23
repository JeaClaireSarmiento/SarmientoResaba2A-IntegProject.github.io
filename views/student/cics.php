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
        }
        .header {
            background-color: green;
            color: white;
        }

        /* Styling for navigation links */
        .navbar-nav {
            align-items: center;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        .navbar-nav .nav-item .nav-link {
            color: #ffffff;
        }

        /* Styling for welcome section */
        .welcome-section {
            background-color: #fff;
            padding: 20px;
            text-align: left;
        }
        .logos-container {
            margin-top: 30px;
        }
        .logo {
            max-width: 100px;
            margin: 10px;
        }
        .welcome-image {
    max-width: 100%;
    height: auto;
}

    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php';?>

    <section class="welcome-section">
    <div class="container">
        <div class="row align-items-center mt-4 mb-4">
            <div class="col-md-4">
                <img src="../../images/cics.png" alt="Welcome Image" class="img-fluid welcome-image">
            </div>
            <div class="col-md-8">
                <h1>Welcome to College of Information and Computing Sciences</h1>
                <p>Choose your program</p>
                
            </div>
        </div>
        <div class="row">
                    <div class="col-md-6">
    <a href="forum.php" class="btn btn-primary btn-block mb-2">BS in Information Technology</a>
</div>
<div class="col-md-6">
    <a href="forum.php" class="btn btn-primary btn-block mb-2">BS in Information System</a>
</div>

                </div>
    </div>
</section>




    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
