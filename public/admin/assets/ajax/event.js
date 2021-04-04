$(document).ready(function () {
  $(document).on("click", "#make__event__btn", function () {
    let event_title = $("#event_title").val().trim();
    let event_description = $("#event_description").val().trim();
    let event_speaker = $("#event_speaker").val().trim();
    let starttimepicker = $("#starttimepicker").val().trim();
    let endtimepicker = $("#endtimepicker").val().trim();
    if (event_title.length == 0) {
      $("#event_title").focus();
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
    } else {
      $('#start_timeError').text('');
    }
    if (endtimepicker.length == 0) {
      $("#endtimepicker").focus();
      $('#end_timeError').text('Ent time of the event');
      return false;
    } else {
      $('#end_timeError').text('');
    }
    $.ajax({
      url: '/app/event/insert.php',
      method: 'POST',
      data: {
        event_title: event_title,
        event_description: event_description,
        event_speaker: event_speaker,
        starttimepicker: starttimepicker,
        endtimepicker: endtimepicker,
      },
      success: function (data) {
        $('#event_error').html(data);
        $("form").trigger("reset");
        setTimeout(() => {
          window.location.reload();
        }, 3000);
      }
    })
  });
});
// -------------------- fetch
$(document).ready(function () {
  $(document).on("click", ".event_fetch_btn", function (e) {
    e.preventDefault();
    let id = $(this).attr("id");
    $.ajax({
      url: '/app/event/fetch.php',
      method: "POST",
      data: { id: id },
      dataType: 'json',
      success: function (data) {
        $('input#event_id').val(data[0]);
        $('input#event_edit_title').val(data[1]);
        $('input#event_edit_speaker').val(data[2]);
        $('textarea#evet_edit_description').val(data[3]);
        // $('#post_edit').html(data);
      }
    });
  });
});

// --------------------update
$(document).ready(function () {
  $(document).on("click", "#event_edit_btn", function () {
    let event_id = $("#event_id").val().trim();
    let event_edit_title = $("#event_edit_title").val().trim();
    let event_edit_speaker = $("#event_edit_speaker").val().trim();
    let evet_edit_description = $("#evet_edit_description").val().trim();
    //  ==========================
    if (event_id.length == 0) {
      $("#event_id").focus();
      $("#event_idError").text("User ID");
      return false;
    } else {
      $("#event_idError").text("");
    }
    //  ==========================
    if (event_edit_title.length == 0) {
      $("#event_edit_title").focus();
      $("#event_edit_titleError").text("Event Title");
      return false;
    } else {
      $("#event_edit_titleError").text("");
    }
    //  ==========================
    if (evet_edit_description.length == 0) {
      $("#evet_edit_description").focus();
      $('#evet_edit_descriptionError').text('Add Description');
      return false;
    } else {
      $('#evet_edit_descriptionError').text('');
    }
    //  ==========================
    if (event_edit_speaker.length == 0) {
      $("#event_edit_speaker").focus();
      $('#event_edit_speakerError').text("Speaker Name");
      return false;
    } else {
      $('#event_edit_speakerError').text('');
    }
    //  ==========================
    $.ajax({
      url: '/app/event/update.php',
      method: 'POST',
      data: {
        event_id: event_id,
        event_edit_title: event_edit_title,
        evet_edit_description: evet_edit_description,
        event_edit_speaker: event_edit_speaker,
      },
      success: function (data) {
        $('#edit_event_error').html(data);
        $("form").trigger("reset");
        setTimeout(() => {
          window.location.reload();
        }, 3000);
      }
    })
  });
});
// --------------------delete
$(document).ready(function () {
  $('.event__delete__btn').on('click', function (e) {
    e.preventDefault();
    var id = $(this).attr('id');
    var confirmalert = confirm("Are you sure?");
    if (confirmalert == true) {
      $.ajax({
        url: '/app/event/delete.php',
        type: 'POST',
        data: { id: id },

        success: function (data) {
          setTimeout(() => {
            window.location.reload();
          }, 1000);
        }
      });

    }
  });
});



