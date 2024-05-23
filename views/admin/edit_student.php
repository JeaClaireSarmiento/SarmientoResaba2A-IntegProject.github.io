<div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="editStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStudentModalLabel">Edit Student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editStudentForm">
                    <input type="hidden" id="editStudentId" name="id"> <!-- Hidden field to store student ID -->
                    <div class="form-group">
                        <label for="editStudentName">Name</label>
                        <input type="text" class="form-control" id="editStudentName" name="name">
                    </div>
                    <div class="form-group">
                        <label for="editStudentUsername">Username</label>
                        <input type="text" class="form-control" id="editStudentUsername" name="username">
                    </div>
                    <!-- Add any other fields you want to edit -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
            </div>
        </div>
    </div>
</div>