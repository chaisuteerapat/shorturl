$(function() {


    $.fn.ajaxsaveurl = function() {
        $.ajax({
            type: "POST",
            url: $('#base_url').val() + '/backend/savedataurl',
            data: {
                url: $('#url').val()
            },
            dataType: "json",
            success: function(rs) {
                console.log(rs)
                $('#genurl').prop("disabled", false);
                $('#genurl').html('Generate Url')
                $('#myModal').modal('show')
                $('#dataqrcode').attr('src', rs.file)
                $('#successurl').val(rs.short)


            }
        });
    }

    $('#genurl').click(function(e) {
        $('#url').removeClass('border-red');
        if ($('#url').val() && $('#url').val().trim() != '') {
            $(this).prop("disabled", true);
            $(this).html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>')
            $().ajaxsaveurl();
        } else {
            $('#url').addClass('border-red');
        }
    });

    $('#copy').click(function(e) {
        var copyText = document.getElementById("successurl");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
    });


});