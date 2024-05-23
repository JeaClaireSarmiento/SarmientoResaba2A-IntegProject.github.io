<?php
session_start();
include 'config/db_connect.php';

// Function to sanitize user input
function sanitize_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $username = sanitize_input($_POST["username"]);
    $password = sanitize_input($_POST["password"]);

    // Prepare SQL statement to retrieve user data based on provided username
    $sql = "SELECT * FROM user_accounts WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, check password
        $user = $result->fetch_assoc();
        if ($password === $user['password']) {
            // Password correct, set session variables
            $_SESSION['name'] = $user['name'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id']; // Store user ID
            
            // Check user role
            if ($user['role'] === 'admin') {
                // Redirect admin to dashboard.php
                header("Location: views/admin/dashboard.php");
                exit();
            } elseif ($user['role'] === 'student') {
                // Redirect applicant to home.php
                header("Location: views/student/home.php");
                exit();
            } elseif ($user['role'] === 'tutor') {
                // Redirect applicant to home.php
                header("Location: views/tutor/dashboard.php");
                exit();
            } else {
                // Invalid role, redirect to login page with error parameter
                $_SESSION['error_message'] = "Invalid user role.";
                header("Location: login.php");
                exit();
            }
        } else {
            // Password incorrect, redirect to login page with error parameter
            $_SESSION['error_message'] = "Incorrect username or password.";
            header("Location: login.php?error=Incorrect username or password!");
            exit();
        }
    } else {
        // No user found, redirect to login page with error parameter
        $_SESSION['error_message'] = "Incorrect username or password.";
        header('Location: login.php?error=Error login!');
        exit();
    }
}
if (empty($_SERVER['QUERY_STRING'])) {
    // Unset the error message session variable if no query parameters are present
    unset($_SESSION['error_message']);
}

// Close connection
$conn->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
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
                <h2 class="text-center">Login</h2>
                <?php if (isset($error_message)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                <form method="POST" action="login.php">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <div class="text-right">
                            <a href="forgot-pass.php">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="mt-3 text-center">
                        <p>Don't have an account? <a href="signup.php">Create Account</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
