
$(document).ready(function () {

    $('.approve-btn').click(function () {
        const id = $(this).attr('id');
        let ask = confirm('Are you sure ?');
        if (ask) {
            $.post('/app/guest/approve.php',
            {
                id: id,
            });
        location.reload();
        }
       
    });

});