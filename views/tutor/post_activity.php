<div class="modal fade" id="postModal" tabindex="-1" role="dialog" aria-labelledby="postModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="postModalLabel">Post New Activity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Input fields for title, description, deadline, and file attachment -->
                <form>
                    <div class="form-group">
                        <label for="activityTitle">Title</label>
                        <input type="text" class="form-control" id="activityTitle">
                    </div>
                    <div class="form-group">
                        <label for="activityDescription">Description</label>
                        <textarea class="form-control" id="activityDescription" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="activityDeadline">Deadline</label>
                        <input type="date" class="form-control" id="activityDeadline">
                    </div>
                    <div class="form-group">
                        <label for="activityFile">File Attachment</label>
                        <input type="file" class="form-control-file" id="activityFile">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post Activity</button>
            </div>
        </div>
    </div>
</div>