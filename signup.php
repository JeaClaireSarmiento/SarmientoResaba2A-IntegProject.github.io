<?php
include 'config/db_connect.php';

// Function to sanitize user input
function sanitize_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Initialize error message variable
$error_message = '';
$success_message = '';

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $fullname = sanitize_input($_POST["fullname"]);
    $username = sanitize_input($_POST["username"]);
    $password = sanitize_input($_POST["password"]);
    $confirm_password = sanitize_input($_POST["confirm_password"]);
    
    // Validate inputs
    if (empty($fullname) || empty($username) || empty($password) || empty($confirm_password)) {
        $error_message = "All fields are required.";
    } elseif ($password != $confirm_password) {
        $error_message = "Password and Confirm Password do not match.";
    } else {
        // Check if username or name already exists
        $check_sql = "SELECT * FROM user_accounts WHERE name = '$fullname' OR username = '$username'";
        $result = $conn->query($check_sql);
        if ($result->num_rows > 0) {
            $error_message = "Username or Name already exists.";
        } else {
            // Prepare and execute SQL statement to insert data into user_accounts table
            $sql = "INSERT INTO user_accounts (name, username, password, role) VALUES ('$fullname', '$username', '$password', 'student')";
            
            if ($conn->query($sql) === TRUE) {
                // Redirect to login.php after 3 seconds
                echo '<script>alert("Registration successful!"); setTimeout(function(){ window.location.href = "login.php"; }, 3000);</script>';
            } else {
                $error_message = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}

// Close connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | TutorLink</title>
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
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            if (password != confirm_password) {
                alert("Password and Confirm Password do not match.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row login-container">
            <div class="col-md-6">
                <img src="images/boy.png" alt="Login Image" class="login-image">
            </div>
            <div class="col-md-6 login-form">
                <h2 class="text-center mt-4">Sign Up</h2>
                <?php
                if (!empty($error_message)) {
                    echo '<p class="alert alert-danger">' . $error_message . '</p>';
                }
                ?>

                <form method="post" action="signup.php" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your fullname">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="mt-3 text-center">
                        <p>Already have an account? <a href="login.php">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
