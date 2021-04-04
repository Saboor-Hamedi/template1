<div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <small aria-hidden="true">&times;</small>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" id="edit_event_error" role="alert"></div>
        <form id="make_course_mdal" method="POST">
          <!-- ========== -->
          <div class="form-group">
            <input type="text" id="event_id" class="form-control" name="event_id" placeholder="Event ID" autocomplete="off">
            <small class="text-danger" id="event_idError"></small>
          </div>
          <!-- ========== -->
          <div class="form-group">
            <input type="text" id="event_edit_title" name="event_edit_title" class="form-control" placeholder="Event Title" autocomplete="off">
            <small class="text-danger" id="event_edit_titleError"></small>
          </div>
          <!-- ========== -->
          <div class="form-group">
            <textarea name="evet_edit_description" id="evet_edit_description" class="form-control" placeholder="Post description"></textarea>
            <small class="text-danger" id="evet_edit_descriptionError"></small>
          </div>
          <!-- ========== -->
          <div class="form-group">
            <input type="text" id="event_edit_speaker" class="form-control" name="event_edit_speaker" placeholder="Event Speaker" autocomplete="off">
            <small class="text-danger" id="event_edit_speakerError"></small>
          </div>
          <!-- ========== -->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="event_edit_btn" id="event_edit_btn">Save changes</button>
      </div>
    </div>
  </div>
</div>