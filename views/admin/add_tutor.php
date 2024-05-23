<div class="modal fade" id="addTutorModal" tabindex="-1" role="dialog" aria-labelledby="addTutorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTutorModalLabel">Add Tutor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addTutorForm">
                    <div class="form-group">
                        <label for="newTutorName">Name</label>
                        <input type="text" class="form-control" id="newTutorName" name="name">
                    </div>
                    <div class="form-group">
                        <label for="newTutorEmail">Email</label>
                        <input type="email" class="form-control" id="newTutorEmail" name="email">
                    </div>
                    <div class="form-group">
                        <label for="newTutorSubject">Subject</label>
                        <input type="text" class="form-control" id="newTutorSubject" name="subject">
                    </div>
                    <!-- Add any other fields you want to add -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="addTutorBtn">Add Tutor</button>
            </div>
        </div>
    </div>
</div>