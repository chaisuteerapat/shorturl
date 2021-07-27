$(function() {


    $('#modalurl').click(function(e) {
        $('#url').removeClass('border-red');
        $('#url').val('');
        $('#myModal').modal('show')
    });


    $.fn.ajaxsaveurl = function() {
        $.ajax({
            type: "POST",
            url: $('#base_url').val() + '/backend/savedataurl',
            data: {
                url: $('#url').val()
            },
            dataType: "json",
            success: function(rs) {
                if (rs.status == 'N') {

                } else {
                    window.location = $('#base_url').val() + '/backend';
                }
            }
        });
    }

    $('#saveurl').click(function(e) {
        $('#url').removeClass('border-red');
        if ($('#url').val() && $('#url').val().trim() != '') {
            $().ajaxsaveurl();
        } else {
            $('#url').addClass('border-red');
        }
    });


});