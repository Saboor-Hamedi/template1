<div class="modal fade" id="EventEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Your Event</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <small aria-hidden="true">&times;</small>
                </button>
            </div>
            <div class="modal-body">
                <div class="row modal__row">
                    <div class="col-md-10 mx-auto">
                        <div class="alert alert-danger" id="edit_event_error" role="alert"></div>
                        <form id="make_course_mdal" method="POST">
                            <div class="form-group">
                            <input type="hidden" id="event_id" class="form-control" name="event_id" placeholder="Event ID" autocomplete="off">
                            <small class="text-danger" id="event_idError"></small>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" id="event_edit_title" name="event_edit_title" class="form-control" placeholder="Event Title" autocomplete="off">
                                    <small class="text-danger" id="event_edit_titleError"></small>
                                </div>
                               
                                <div class="form-group col-sm-6">
                                    <input type="text" id="event_edit_speaker" class="form-control" name="event_edit_speaker" placeholder="Event Speaker" autocomplete="off">
                                    <small class="text-danger" id="event_edit_speakerError"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <textarea name="evet_edit_description" id="evet_edit_description" class="form-control" placeholder="Event Description"></textarea>
                                    <small class="text-danger" id="evet_edit_descriptionError"></small>
                                </div>
                                
                                <div class="col-sm-6">
                                    <textarea name="evet_edit_location" id="evet_edit_location" class="form-control" placeholder="Event Location"></textarea>
                                    <small class="text-danger" id="evet_edit_locationError"></small>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="form-group col-sm-6 ">
                                    <small>Start Time</small>
                                    <div class="input-group date" id="event_update_start_time" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" name="edit_event_start_time" id="edit_event_start_time" data-target="#event_update_start_time" />
                                        <div class="input-group-append" data-target="#event_update_start_time" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <small class="text-danger" id="edit_event_start_timeError"></small>
                                </div>
                                
                                <div class="form-group col-sm-6">
                                    <small>End Time</small>
                                    <div class="input-group date" id="event_update_end_time" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" name="edit_event_end_time" id="edit_event_end_time" data-target="#event_update_end_time" />
                                        <div class="input-group-append" data-target="#event_update_end_time" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                    <small class="text-danger" id="event_update_end_timeError"></small>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" name="event__edit__Btn" id="event__edit__Btn">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    