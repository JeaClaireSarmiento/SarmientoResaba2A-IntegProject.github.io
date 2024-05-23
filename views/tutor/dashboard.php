
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>

<body>
    <!-- Header -->
    <?php include 'header.php'; ?>


    <div class="container-fluid">
        <!-- Left Sidebar -->
        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->
        <div class="main-content">
            <div class="dashboard-section">
                <h5>Overview</h5>
                <div class="row">
                    <div class="col-md-4">
                        <div class="stats-card total-courses">
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="info">
                                <h6>Total Courses</h6>
                                <p>10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-card total-students">
                            <div class="icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="info">
                                <h6>Total Students</h6>
                                <p>80</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-card students-rating">
                            <div class="icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="info">
                                <h6>Students Rating</h6>
                                <p>4.5/5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard-section">
                <h5>Recent Activity</h5>
                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/girl1.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">Emily Johnson</div>
                            <div class="date">2024-05-20</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Emily Johnson enrolled in the course "Introduction to Physics".</p>
                    </div>
                </div>
                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/girl2.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">Sophia Williams</div>
                            <div class="date">2024-05-19</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Sophia Williams completed the course "Mathematics Fundamentals".</p>
                    </div>
                </div>
            </div>

            <div class="dashboard-section">
                <h5>Messages</h5>
                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/girl3.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">Emma Brown</div>
                            <div class="date">2024-05-18</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Emma Brown sent a message requesting clarification on a course topic.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'script.php';?>
    
</body>
</html>
