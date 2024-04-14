
$(document).ready(function() {
//    $('.process-wrap').css('display', 'none');
//
//    $(".btn-submit-dynamic-form").css("display", "block");

    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        startView: "year",
        /*minViewMode: "months",*/
        autoclose: true
    });
})

var url = window.location.href,
    lastPart = url.substring(url.lastIndexOf('/') + 1);

/* form submit starts */
$(document).off('click', '.btn-submit-career');
$(document).on('click', '.btn-submit-career', function (e) {
    e.stopPropagation();
    e.preventDefault();
    var that = $(this),
    form = $('form#dynamic_form');
    url = $('form#dynamic_form').attr('action');
    var forms = $("form#dynamic_form")[0];
    var data = new FormData(forms); 
    csrf = $.cookie('swapper_cookie');
    if(form.valid()) {
//        $('.process-wrap').css('display', 'block');
        $.ajax({
            url: url,
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            dataType: 'JSON',
            success: function (res) {
                console.log(res);
                if(res.action == 'success') {
                    swal({
                        title: 'Alert',
                        text: res.msg,
                        type: 'success'
                    });
                } else {
                    swal({
                        title: 'Alert',
                        text: res.msg,
                        type: 'error'
                    });
                    
                }
//                $(".process-wrap").css('display', 'none');
                if(res.action != 'error') {
                    forms.reset();
                }
            }
        })
    } else {
        alert();
        $('html, body').animate({
            scrollTop: $('.error').offset().top - 100
        }, 700);
    }
});
/* form submit ends */