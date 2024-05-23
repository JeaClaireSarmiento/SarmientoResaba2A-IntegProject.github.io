<?php


// Dummy messages data for demonstration
$messages = [
    ['id' => 1, 'name' => 'Juan dela Cruz', 'message' => 'Hi there! Can you help me with my math homework?', 'timestamp' => '2024-05-20 10:00 AM', 'status' => 'unread'],
    ['id' => 2, 'name' => 'Maria Clara', 'message' => 'I need assistance with my science project.', 'timestamp' => '2024-05-20 11:00 AM', 'status' => 'read'],
    ['id' => 3, 'name' => 'Jose Rizal', 'message' => 'Can you check my history essay?', 'timestamp' => '2024-05-20 01:00 PM', 'status' => 'unread'],
    ['id' => 4, 'name' => 'Andres Bonifacio', 'message' => 'Are you available for a tutoring session this weekend?', 'timestamp' => '2024-05-20 02:00 PM', 'status' => 'read'],
];
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
</head>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
    <div class="container-fluid">
        <!-- Include Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Messages</h2>
            </div>
            <ul class="message-container">
                <?php foreach ($messages as $message): ?>
                    <li class="message-item <?= $message['status'] == 'unread' ? 'unread' : '' ?>">
                        <div class="message-details">
                            <div class="message-name"><?= $message['name'] ?></div>
                            <div class="message-content"><?= $message['message'] ?></div>
                            <div class="message-timestamp"><?= $message['timestamp'] ?></div>
                        </div>
                        <div class="message-status">
                            <?php if ($message['status'] == 'unread'): ?>
                                <span class="badge badge-primary">Unread</span>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <?php include 'script.php'; ?>
    <script>
        $(document).ready(function() {
            // Your JavaScript code here
        });
    </script>
</body>
</html>
