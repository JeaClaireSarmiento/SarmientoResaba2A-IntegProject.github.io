
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>

</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>


    <div class="container-fluid">
        <!-- Left Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <!-- Main Content -->
<div class="main-content">
    <div class="dashboard-section">
        <h5>Student Information</h5>
        <!-- Display student information here -->
        <?php
        // Example code to fetch and display student information
        $student_info = [
    ['name' => 'Juan dela Cruz', 'email' => 'juan.delacruz@gmail.com', 'avatar' => '../../images/boy2.jpg'],
    ['name' => 'Maria Santos', 'email' => 'maria.santos@gmail.com', 'avatar' => '../../images/girl2.jpg'],
    ['name' => 'Pedro Reyes', 'email' => 'pedro.reyes@gmail.com', 'avatar' => 'avatar3.jpg'],
    ['name' => 'Juana de la Cruz', 'email' => 'juana.delacruz@gmail.com', 'avatar' => 'avatar4.jpg'],
    ['name' => 'Andres Garcia', 'email' => 'andres.garcia@gmail.com', 'avatar' => 'avatar5.jpg'],
    ['name' => 'Carmen Fernandez', 'email' => 'carmen.fernandez@gmail.com', 'avatar' => 'avatar6.jpg'],
    ['name' => 'Antonio Ramirez', 'email' => 'antonio.ramirez@gmail.com', 'avatar' => 'avatar7.jpg'],
    ['name' => 'Sofia Reyes', 'email' => 'sofia.reyes@gmail.com', 'avatar' => 'avatar8.jpg'],
    ['name' => 'Carlos Lopez', 'email' => 'carlos.lopez@gmail.com', 'avatar' => 'avatar9.jpg'],
];

        // Iterate through students, displaying 3 per row
        for ($i = 0; $i < count($student_info); $i += 3) {
            echo '<div class="row">'; // Start row
            for ($j = $i; $j < $i + 3 && $j < count($student_info); $j++) {
                echo '
                <div class="col-md-4">
                    <div class="post">
                        <div class="media">
                            <img src="../../images/boy2.jpg" class="avatar" alt="Avatar">
                            <div class="media-body">
                                <h5 class="username">' . $student_info[$j]['name'] . '</h5>
                                <p class="email">' . $student_info[$j]['email'] . '</p>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
            echo '</div>'; // End row
        }
        ?>
    </div>
</div>

    </div>

    <?php include 'script.php';?>
</body>
</html>
