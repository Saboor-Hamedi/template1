$(document).ready(function () {
    $(document).on('click', '#apply_btn', function (e) {
        e.preventDefault();
            let course_apply_id = $('#course_apply_id').val();
            let guest_apply_id = $('#guest_apply_id').val();
            let is_active = $('#is_active').val();
        $.ajax({
            url: '/app/guest/apply.php',
            method: 'POST',
            // data: {
            //     course_apply_id:course_apply_id,
            //     guest_apply_id:guest_apply_id,
            // },
            data: $( "#apply__form" ).serialize(),
            success: function (data) {
                $('#apply__message').html(data);
            },
           
        });
    });
});