$(document).ready(function () {
  $(document).on("click", "#make__event__btn", function () {
    let event_title = $("#event_title").val().trim();
    let event_description = $("#event_description").val().trim();
    let event_speaker = $("#event_speaker").val().trim();
    let starttimepicker = $("#starttimepicker").val().trim();
    let endtimepicker = $("#endtimepicker").val().trim();
    if (event_title.length == 0) {
      $("#event_title"). ();
      $("#event_titleError").text("Ttitle is empty");
      return false;
    } else {
      $("#event_titleError").text("");
    }

    if (event_description.length == 0) {
      $("#event_description").focus();
      $("#event_descriptionError").text("Add event description");
      return false;
    } else {
      $("#event_descriptionError").text("");
    }
    if (event_speaker.length == 0) {
      $("#event_speaker").focus();
      $("#event_speakerError").text("Add event description");
      return false;
    } else {
      $("#event_speakerError").text("");
    }
    if (starttimepicker.length == 0) {
      $("#starttimepicker").focus();
      $('#start_timeError').text('Add the event time');
      return false;
    }else{
        $('#start_timeError').text('');
    }
    if (endtimepicker.length == 0) {
      $("#endtimepicker").focus();
      $('#end_timeError').text('Ent time of the event');
      return false;
    }else{
        $('#end_timeError').text('');
    }

  });
});
