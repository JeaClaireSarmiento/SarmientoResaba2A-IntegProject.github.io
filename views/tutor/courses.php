<?php
// Dummy course data for demonstration
$courses = [
    ['id' => 1, 'subject' => 'Integrative Programming', 'description' => 'Learn how to integrate different programming languages to build complex applications.'],
    ['id' => 2, 'subject' => 'Data Structures and Algorithms', 'description' => 'Explore advanced data structures and algorithms for efficient problem-solving.'],
    ['id' => 3, 'subject' => 'Web Development', 'description' => 'Master web development technologies such as HTML, CSS, JavaScript, and more.'],
    ['id' => 4, 'subject' => 'Database Management Systems', 'description' => 'Understand the principles of database management and SQL programming.'],
    ['id' => 5, 'subject' => 'Artificial Intelligence', 'description' => 'Dive into the world of artificial intelligence and machine learning algorithms.']
];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Links -->
<?php include 'head.php'; ?>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>

    <div class="container-fluid">
        <!-- Left Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Courses Section -->
            <div class="dashboard-section">
                <h5>Courses</h5>
                <?php foreach ($courses as $course): ?>
                    <div class="course-card">
                        <div class="info">
                            <h5><?= $course['subject'] ?></h5>
                            <p><?= $course['description'] ?></p>
                        </div>
                        <a href="sample_subj.php" class="btn btn-primary">View Details</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php include 'script.php';?>
</body>
</html>
