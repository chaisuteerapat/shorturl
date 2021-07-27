$(function() {

    jQuery.support.placeholder = false;
    test = document.createElement('input');
    if ('placeholder' in test) jQuery.support.placeholder = true;

    if (!$.support.placeholder) {
        $('.field').find('label').show();
    }

    $.fn.ajaxchecklogin = function() {
        $.ajax({
            type: "POST",
            url: $('#base_url').val() + '/login/checklogin',
            data: $('#frmlogin').serialize(),
            dataType: "json",
            success: function(rs) {
                if (rs.status == 'Y') {
                    window.location = $('#base_url').val() + '/backend';
                } else {

                }
            }
        });
    }

    $.fn.checkdata = function() {
        let count = 0;
        $('.login').removeClass('border-red');
        $('.login').each(function(i, obj) {
            if (typeof $(this).val() == null || $(this).val() == '' || $(this).val() == null) {
                $('.login').addClass('border-red');
                count++;
            }
        });
        return count;
    }

    $('#btnlogin').click(function(e) {
        let counterror = $().checkdata();
        if (counterror === 0) {
            $().ajaxchecklogin();
        }
    });

});