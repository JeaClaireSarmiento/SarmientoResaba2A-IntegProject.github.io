<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Poppins font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#teach">Teach on TutorLink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-link" href="login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link signup-link" style="color: #fff;" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Section -->
    <section class="main">
        <div class="container">
            <div class="content row">
                <div class="left-content col-md-6">
                    <h1>Knowledge Open Doors</h1>
                    <p class="lead">Unlock your potential with expert tutoring tailored to your needs. Start your journey to excellence today!</p>
                    <a href="#" class="btn btn-primary btn-lg mt-3">Get Started</a>
                </div>
                <div class="right-content col-md-6">
                    <img src="images/illustration.png" alt="Image">
                </div>
            </div>
        </div>
    </section>

    <div class="join-us">
        <h2>Be a part of Us</h2>
        <p>TutorLink partnered with the Colleges of Marinduque State University.</p>
    </div>

    <!-- Logos Section -->
    <div class="container logos-container">
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/matrix.jpg" alt="Logo" class="logo">
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/cics.png" alt="Logo" class="logo">
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/indutech.jpg" alt="Logo" class="logo">
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/educ.jpg" alt="Logo" class="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/cass.jpg" alt="Logo" class="logo">
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/cba.jpg" alt="Logo" class="logo">
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/governance.jpg" alt="Logo" class="logo">
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/agri.jpg" alt="Logo" class="logo">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/fisheries.jpg" alt="Logo" class="logo">
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/cahs.jpg" alt="Logo" class="logo">
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/envisci.jpg" alt="Logo" class="logo">
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <img src="images/msc.jpg" alt="Logo" class="logo">
            </div>
        </div>
    </div>

    <!-- About Us Section -->
<section id="about" class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>About Us</h2>
                <br>
                <p class="lead">At TutorLink, we are dedicated to providing top-quality tutoring services in a wide range of courses. Our platform connects students with experienced tutors who are experts in their fields, offering personalized lessons and support to help students excel academically. With our convenient online platform, students can access tutoring sessions from anywhere, at any time, making learning flexible and accessible. Whether you need help with math, science, language arts, or any other subject, TutorLink is here to help you achieve your academic goals.</p>
            </div>
        </div>
    </div>
</section>


    <!-- User Feedback Section -->
<section class="user-feedback">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>User Feedback</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text">"I've seen remarkable improvement in my grades since joining TutorLink. The tutors are knowledgeable and supportive."</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">- John Doe</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text">"TutorLink has been instrumental in helping me understand complex topics in a simple manner. Highly recommended!"</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">- Jane Smith</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="card-text">"The flexibility of scheduling sessions on TutorLink is fantastic. I can easily fit tutoring into my busy schedule."</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">- Michael Johnson</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Become a Tutor Section -->
<section id="teach" class="become-tutor">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-md-6">
                <div class="content">
                    <h2>Become a Tutor</h2>
                    <p>Unlock new opportunities by becoming a tutor with TutorLink. Share your knowledge and help students succeed.</p>
                    <a href="apply_tutor.php" class="btn btn-primary">Apply Here</a>
                </div>
            </div>
            <!-- Right Column -->
            <div class="col-md-6">
                <img src="images/girlnboy.png" alt="Become a Tutor" class="img-fluid">
            </div>
        </div>
    </div>
</section>





    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h5>About Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Be a Tutor</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Help and Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Settings</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Settings</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    

    <script>
        document.querySelectorAll('.scroll-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
