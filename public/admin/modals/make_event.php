<div class="modal fade" id="EventMakeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Event Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" id="event_error" role="alert"></div>
        <form id="make_course_mdal" method="POST">
          <div class="form-group">
            <input type="hidden" value="<?php echo $userid; ?>" id="event_user_id" class="form-control" name="event_user_id" placeholder="User ID">
            <span id="event_user_idError"></span>
          </div>
          <div class="form-group">
            <input type="text" id="event_title" name="event_title" class="form-control" placeholder="Event Title">
            <small class="text-danger" id="event_titleError"></small>
          </div>

          <div class="form-group">
            <textarea name="event_description" id="event_description" class="form-control" placeholder="Event Description"></textarea>
            <small class="text-danger" id="event_descriptionError"></small>
          </div>

          <div class="form-group">
            <input type="text" id="event_speaker" name="event_speaker" class="form-control" placeholder="Event Speaker">
            <small class="text-danger" id="event_speakerError"></small>
          </div>

          <ddd class="form-group">
            <small>Start Time</small>
            <div class="input-group date" id="startTime" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" id="starttimepicker" name="starttimepicker" data-target="#startTime" />
              <div class="input-group-append" data-target="#startTime" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
            <small class="text-danger" id="start_timeError"></small>
          </ddd>

          <div class="form-group">

            <small>End Time</small>
            <div class="input-group date" id="endTime" data-target-input="nearest">
              <input type="text" class="form-control datetimepicker-input" id="endtimepicker" name="endtimepicker" data-target="#endTime" />
              <div class="input-group-append" data-target="#endTime" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
            <small class="text-danger" id="end_timeError"></small>
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" name="make__event__btn" id="make__event__btn">Save changes</button>
      </div>
    </div>
  </div>
</div>