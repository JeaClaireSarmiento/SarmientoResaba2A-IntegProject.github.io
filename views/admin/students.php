
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
                <h2>Students</h2>
                <button class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal"><i class="fas fa-plus"></i> Add Student</button>
            </div>
            <table id="studentsTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../../config/db_connect.php';

                    $sql = "SELECT id, name, username FROM user_accounts";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr data-student-id='{$row['id']}'>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['username']}</td>
                                    <td>
                                        <button class='btn btn-sm btn-warning' data-toggle='modal' data-target='#editStudentModal'><i class='fas fa-edit'></i> Edit</button>
                                        <button class='btn btn-sm btn-danger'><i class='fas fa-trash'></i> Delete</button>
                                    </td>
                                </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>No students found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<!-- Add Student Modal -->
<?php include 'modal/add_student.php'; ?>

<!-- Edit Student Modal -->
<?php include 'modal/edit_student.php'; ?>

<script>
    $(document).ready(function() {
        $('#studentsTable').DataTable();

        // Event listener for Add Student button
        $('#addStudentBtn').on('click', function() {
            console.log("Add Student button clicked"); // Debug log

            // Retrieve the values entered by the user
            var name = $('#newStudentName').val().trim();
            var username = $('#newStudentUsername').val().trim();
            var password = $('#newStudentPassword').val().trim();

            // Perform validation (e.g., check if the fields are not empty)
            if (name === '' || username === '' || password === '') {
                alert('Please fill all the fields.');
                return;
            }

            // Perform AJAX request to add the student to the database
            $.ajax({
                url: 'add_student.php',
                method: 'POST',
                data: $('#addStudentForm').serialize(),
                success: function(response) {
                    // Handle success response
                    console.log("Response from server: ", response); // Debug
                    $('#addStudentModal').modal('hide');
// Reload the page to update the table with the new student
location.reload();
},
error: function(xhr, status, error) {
// Handle error
console.error("Error:", error); // Debug log
alert("An error occurred. Please try again later.");
}
});
});
});
</script>

<?php include 'script.php'; ?>
</body>
</html>
