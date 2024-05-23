
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
                <h2>Reports</h2>
            </div>
            <table id="reportsTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Teacher Name</th>
                        <th>Reason</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Sample data for reports
                    $reports = [
                        ['id' => 1, 'student_name' => 'John Doe', 'teacher_name' => 'Jane Smith', 'reason' => 'Inappropriate behavior', 'status' => 'Pending'],
                        ['id' => 2, 'student_name' => 'Mary Johnson', 'teacher_name' => 'John Doe', 'reason' => 'Late for sessions', 'status' => 'Resolved'],
                        ['id' => 3, 'student_name' => 'Jane Smith', 'teacher_name' => 'Mary Johnson', 'reason' => 'Poor communication', 'status' => 'Pending']
                    ];
                    foreach ($reports as $report) {
                        echo "<tr>
                                <td>{$report['id']}</td>
                                <td>{$report['student_name']}</td>
                                <td>{$report['teacher_name']}</td>
                                <td>{$report['reason']}</td>
                                <td>{$report['status']}</td>
                                <td>
                                    <button class='btn btn-sm btn-warning'><i class='fas fa-edit'></i> Edit</button>
                                    <button class='btn btn-sm btn-danger'><i class='fas fa-trash'></i> Delete</button>
                                </td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include 'script.php'; ?>
    <script>
        $(document).ready(function() {
            $('#reportsTable').DataTable();
        });
    </script>
</body>
</html>
