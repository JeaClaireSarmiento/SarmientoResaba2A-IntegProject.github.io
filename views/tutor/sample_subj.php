<?php
include '../../session.php';

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

// Dummy course data for demonstration
$course_id = isset($_GET['id']) ? $_GET['id'] : 1; // Default course ID
$course_data = [
    1 => ['subject' => 'Integrative Programming', 'description' => 'Learn how to integrate different programming languages to build complex applications.'],
    2 => ['subject' => 'Data Structures and Algorithms', 'description' => 'Explore advanced data structures and algorithms for efficient problem-solving.'],
    3 => ['subject' => 'Web Development', 'description' => 'Master web development technologies such as HTML, CSS, JavaScript, and more.'],
    4 => ['subject' => 'Database Management Systems', 'description' => 'Understand the principles of database management and SQL programming.'],
    5 => ['subject' => 'Artificial Intelligence', 'description' => 'Dive into the world of artificial intelligence and machine learning algorithms.']
];
$course = isset($course_data[$course_id]) ? $course_data[$course_id] : $course_data[1];

// Dummy data for posted activities/files
$posted_activities = [
    ['id' => 1, 'title' => 'Project Proposal', 'description' => 'Submit your proposal for the group project.', 'file' => 'project_proposal.pdf', 'date' => '2024-05-22'],
    ['id' => 2, 'title' => 'Code Review', 'description' => 'Review your peer\'s code and provide feedback.', 'file' => 'code_review.docx', 'date' => '2024-05-20'],
    ['id' => 3, 'title' => 'Midterm Exam', 'description' => 'Take the midterm exam covering topics learned so far.', 'file' => 'midterm_exam.pdf', 'date' => '2024-05-18'],
    ['id' => 4, 'title' => 'Final Project Submission', 'description' => 'Submit the final version of your project along with documentation.', 'file' => 'final_project.zip', 'date' => '2024-05-15']
];

// Dummy data for student list
$student_list = [
    ['id' => 1, 'name' => 'John Doe'],
    ['id' => 2, 'name' => 'Jane Smith'],
    ['id' => 3, 'name' => 'Alice Johnson'],
    ['id' => 4, 'name' => 'Bob Brown'],
    ['id' => 5, 'name' => 'Emily Davis']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $course['subject'] ?> | TutorLink</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f6fa;
            color: #333;
        }
        .header {
            background-color: green;
            color: white;
            padding: 10px 0;
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
        .course-details {
            background-color: #bbcbdb;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .course-details h5 {
            margin-bottom: 15px;
        }
        .activities-section h5,
        .student-list h5 {
            margin-bottom: 15px;
        }
        .activity-card {
            background-color: #eee;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .activity-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .activity-card .info {
            margin-bottom: 10px;
        }
        .activity-card h5 {
            margin-bottom: 5px;
        }
        .activity-card p {
            margin-bottom: 10px;
        }
        .activity-card a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }
        .activity-card a:hover {
            color: #0056b3;
        }
        .student-list {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            color: #ffffff;
        }
        .student-list ul {
            list-style: none;
            padding: 0;
            color: #fff;
        }
        .student-list ul li {
            padding: 10px;
            margin-bottom: 5px;
            border-bottom: 1px solid #ddd;
        }
        .student-list h5 {
    color: #333; /* Dark color for h5 */
}

.student-list ul li {
    color: #333; /* Dark color for li */
}

        .student-list ul li:last-child {
            border-bottom: none;
        }
        .student-list ul li:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
    <div class="container-fluid">
        <!-- Left Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Course Details Section -->
            <div class="course-details">
                <h2><?= $course['subject'] ?></h2>
                <p><?= $course['description'] ?></p>
            </div>
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#postModal">Post</button>

            <!-- Posted Activities Section -->
            <div class="activities-section">
                <h5>Posted Activities</h5>
                <?php foreach ($posted_activities as $activity): ?>
                    <div class="activity-card">
                        <div class="info">
                            <h5><?= $activity['title'] ?></h5>
                            <p><?= $activity['description'] ?></p>
                        </div>
                        <div>Date: <?= $activity['date'] ?></div>
                        <div><a href="<?= $activity['file'] ?>" target="_blank">Download File</a></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Right Sidebar -->
        <div class="sidebar ml-auto">
            <div class="student-list">
                <h5>Student List</h5>
                <ul>
                    <?php foreach ($student_list as $student): ?>
                        <li><?= $student['name'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <?php include 'modal/post_activity.php'; ?>

    <!-- Bootstrap and jQuery scripts -->
    <?php include 'script.php'; ?>
</body>
</html>
