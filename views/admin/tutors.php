
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
                <h2>Tutors</h2>
                <button class="btn btn-primary" data-toggle="modal" data-target="#addTutorModal"><i class="fas fa-plus"></i> Add Tutor</button>
            </div>
            <table id="tutorsTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Sample data for tutors
                    $tutors = [
                        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@gmail.com', 'subject' => 'Mathematics'],
                        ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@gmail.com', 'subject' => 'Physics'],
                        ['id' => 3, 'name' => 'Mary Johnson', 'email' => 'mary@gmail.com', 'subject' => 'Chemistry']
                    ];
                    foreach ($tutors as $tutor) {
                        echo "<tr>
                                <td>{$tutor['id']}</td>
                                <td>{$tutor['name']}</td>
                                <td>{$tutor['email']}</td>
                                <td>{$tutor['subject']}</td>
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

    <!-- Add Tutor Modal -->
    <?php include 'modal/add_tutor.php'; ?>


<script>
    $(document).ready(function() {
        // Event listener for Add Tutor button
        $('.btn-primary').on('click', function() {
            // Clear the input fields in the modal
            $('#newTutorName').val('');
            $('#newTutorEmail').val('');
            $('#newTutorSubject').val('');

            // Show the modal
            $('#addTutorModal').modal('show');
        });

        // Event listener for Add Tutor form submission
        $('#addTutorBtn').on('click', function() {
            // Retrieve the values entered by the user
            var name = $('#newTutorName').val().trim();
            var email = $('#newTutorEmail').val().trim();
            var subject = $('#newTutorSubject').val().trim();

            // Perform validation (e.g., check if the fields are not empty)

            // Perform AJAX request to add the tutor to the database
            // Example:
            /*
            $.ajax({
                url: 'add_tutor.php',
                method: 'POST',
                data: $('#addTutorForm').serialize(),
                success: function(response) {
                    // Handle success response
                    console.log(response);
                    // Close the modal
                    $('#addTutorModal').modal('hide');
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
            });
            */
        });
    });
</script>


    <?php include 'script.php'; ?>
    <script>
        $(document).ready(function() {
            $('#tutorsTable').DataTable();
        });
    </script>
</body>
</html>
