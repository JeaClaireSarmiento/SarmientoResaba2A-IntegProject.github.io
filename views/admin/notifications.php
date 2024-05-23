
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
    <!-- Header -->
    <?php include 'header.php'; ?>
    <div class="container-fluid">
        <!-- Include Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Notifications</h2>
            </div>
            <!-- Sample Notifications -->
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-bell"></i></div>
                <div>
                    <div class="notification-title">New Student Registration</div>
                    <div class="notification-time">2 hours ago</div>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <div class="notification-title">New Message from John Doe</div>
                    <div class="notification-time">Yesterday</div>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-user-plus"></i></div>
                <div>
                    <div class="notification-title">New Tutor Added</div>
                    <div class="notification-time">3 days ago</div>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-exclamation-triangle"></i></div>
                <div>
                    <div class="notification-title">Pending Report from Mary Johnson</div>
                    <div class="notification-time">1 week ago</div>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-calendar-check"></i></div>
                <div>
                    <div class="notification-title">Upcoming Meeting with Parent</div>
                   
                                        <div class="notification-time">Tomorrow at 10:00 AM</div>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-check-circle"></i></div>
                <div>
                    <div class="notification-title">Task Completed</div>
                    <div class="notification-time">Just now</div>
                </div>
            </div>
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
