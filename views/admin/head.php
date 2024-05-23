<?php
include '../../session.php';

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

// Get the current script name
$currentFile = basename($_SERVER['PHP_SELF'], ".php");

// Determine the title based on the script name
switch ($currentFile) {
    case 'dashboard':
        $pageTitle = 'Dashboard';
        break;
    case 'courses':
        $pageTitle = 'Course';
        break;
    case 'tutors':
        $pageTitle = 'Tutors';
        break;
    case 'reports':
    $pageTitle = 'Reports';
        break;
    case 'students':
    $pageTitle = 'Students';
        break;
    case 'notifications':
    $pageTitle = 'Notifications';
        break;
    case 'messages':
    $pageTitle = 'Messages';
        break;
    default:
        $pageTitle = 'Tutor Dashboard';
        break;
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> | TutorLink</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
