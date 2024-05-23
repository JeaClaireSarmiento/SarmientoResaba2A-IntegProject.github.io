<div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addStudentForm">
                    <div class="form-group">
                        <label for="newStudentName">Name</label>
                        <input type="text" class="form-control" id="newStudentName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="newStudentUsername">Username</label>
                        <input type="text" class="form-control" id="newStudentUsername" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="newStudentPassword">Password</label>
                        <input type="password" class="form-control" id="newStudentPassword" name="password" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addStudentBtn">Add Student</button>
            </div>
        </div>
    </div>
</div>