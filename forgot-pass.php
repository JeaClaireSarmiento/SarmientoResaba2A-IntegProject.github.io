

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Custom CSS for styling */
        /* Custom CSS for styling */
body {
    font-family: 'Poppins', sans-serif;
    background-color: grey;
}
.container{
    display: flex;
    align-items: center;
    height: 100vh; /* Set container height to full viewport height */
}
.login-container {
    background-color: #fff;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center; /* Center horizontally */
    border-radius: 10px; /* Border radius for container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.login-form {
    max-width: 400px;
}
.login-image {
    max-width: 100%;
}
@media (max-width: 768px) {
    /* Adjustments for smaller screens */
    .login-container {
        flex-direction: column;
    }
    .login-form {
        margin-top: 20px;
    }
}

    </style>
</head>
<body>
    <div class="container">
        <div class="row login-container">
            <div class="col-md-6">
                <img src="images/boy.png" alt="Login Image" class="login-image">
            </div>
            <div class="col-md-6 login-form">
                <h2 class="text-center mb-4">FORGOT PASSWORD</h2>
                <?php if (isset($error_message)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="email" class="form-control" id="username" name="username" placeholder="Enter email" required>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="mt-3 text-center">
                        <p>Remember your Account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
