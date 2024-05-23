
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
                <div class="notification-icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <div class="notification-title">New Message from Juan dela Cruz</div>
                    <div class="notification-time">Yesterday</div>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <div class="notification-title">New Message from Maria Santos</div>
                    <div class="notification-time">2 days ago</div>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <div class="notification-title">New Message from Pedro Reyes</div>
                    <div class="notification-time">3 days ago</div>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <div class="notification-title">New Message from Juana de la Cruz</div>
                    <div class="notification-time">4 days ago</div>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon"><i class="fas fa-envelope"></i></div>
                <div>
                    <div class="notification-title">New Message from Andres Garcia</div>
                    <div class="notification-time">5 days ago</div>
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
