<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | TutorLink</title>
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
        .logo a {
            display: block;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark container">
            <a class="navbar-brand" href="#">TutorLink</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Navigation links with icons -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Welcome section -->
    <section class="welcome-section">
        <div class="container">
            <h1>Hello, Welcome</h1>
            <p>What college are you in?</p>
        </div>
        <div class="container logos-container">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center">
                    <a href="matrix.php"><img src="images/matrix.jpg" alt="Matrix Logo" class="logo"></a>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <a href="cics.php"><img src="images/cics.png" alt="CICS Logo" class="logo"></a>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <a href="industrial.php"><img src="images/indutech.jpg" alt="Indutech Logo" class="logo"></a>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <a href="educ.php"><img src="images/educ.jpg" alt="Educ Logo" class="logo"></a>
                </div>
        </div>
        <div class="row">
    <div class="col-md-3 col-sm-6 text-center">
        <a href="cass.html"><img src="images/cass.jpg" alt="CASS Logo" class="logo"></a>
    </div>
    <div class="col-md-3 col-sm-6 text-center">
        <a href="cba.html"><img src="images/cba.jpg" alt="CBA Logo" class="logo"></a>
    </div>
    <div class="col-md-3 col-sm-6 text-center">
        <a href="governance.html"><img src="images/governance.jpg" alt="Governance Logo" class="logo"></a>
    </div>
    <div class="col-md-3 col-sm-6 text-center">
        <a href="agri.html"><img src="images/agri.jpg" alt="Agri Logo" class="logo"></a>
    </div>
</div>
<div class="row">
    <div class="col-md-3 col-sm-6 text-center">
        <a href="fisheries.html"><img src="images/fisheries.jpg" alt="Fisheries Logo" class="logo"></a>
    </div>
    <div class="col-md-3 col-sm-6 text-center">
        <a href="cahs.html"><img src="images/cahs.jpg" alt="CAHS Logo" class="logo"></a>
    </div>
    <div class="col-md-3 col-sm-6 text-center">
        <a href="envisci.html"><img src="images/envisci.jpg" alt="Envisci Logo" class="logo"></a>
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
