
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
                        <div class="stats-card total-tutors">
                            <div class="icon">
                                <i class="fas fa-chalkboard-teacher"></i>
                            </div>
                            <div class="info">
                                <h6>Total Tutors</h6>
                                <p>120</p>
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
                                <p>450</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-card courses-offered">
                            <div class="icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="info">
                                <h6>Courses Offered</h6>
                                <p>35</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard-section">
                <h5>Recent Activity</h5>
                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/boy1.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">John Doe</div>
                            <div class="date">2024-05-20</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>John Doe just registered for the course "Advanced Programming".</p>
                    </div>
                </div>
                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/boy2.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">Jane Smith</div>
                            <div class="date">2024-05-19</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Jane Smith uploaded new materials for the course "Data Structures".</p>
                    </div>
                </div>
            </div>

            <div class="dashboard-section">
                <h5>Messages</h5>
                <div class="post">
                    <div class="d-flex align-items-center">
                        <img src="../../images/boy3.jpg" alt="User Avatar" class="avatar">
                        <div>
                            <div class="username">Michael Brown</div>
                            <div class="date">2024-05-18</div>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>Michael Brown sent a message regarding the upcoming exam schedule.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
