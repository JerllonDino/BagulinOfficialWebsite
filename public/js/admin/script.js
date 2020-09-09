$.ajaxSetup({
    $btn: undefined,
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    showLoading: function() {
        if (this.$btn !== undefined) {
            this.$btn.attr('disabled', '');
            this.$btn.find('.fa-spin').show();
        }
    },
    hideLoading: function() {
        if (this.$btn !== undefined) {
            this.$btn.removeAttr('disabled');
            this.$btn.find('.fa-spin').hide();
        }
    },
    beforeSend: function() {
        try {
            this.$btn = $form.find('[type="submit"]');
            this.showLoading();
        }
        catch (err) {
            $form = undefined;
        }
    },
    complete: function( res ) {
        // this.hideLoading();
        $('.is-invalid').removeClass('is-invalid');
        console.log(res);
        switch( res.status ) {
            //validation error
            case 422:
                errors = res.responseJSON.errors;
                for(i in errors) {
                    $input = $('[name="' + i + '"]');
                    $input.parent().find('.invalid-feedback').text(errors[i]);
                    $input.addClass('is-invalid');
                }
                $('html,body').animate({'scrollTop':0}, 'slow');
                break;
            case 500:
                break;
        }
    }
});

function countChecked() {
    n = $('[type="checkbox"]:checked').length;
    if (n > 0) {
        $deleteBtn.removeAttr('disabled');
    }
    else {
        $deleteBtn.attr('disabled', '');
    }
}

function showMessage(message) {
    $successMessage = $('.popup');
    $successMessage.html(message).slideDown();
    setTimeout(function(){
        $successMessage.slideUp();
    },1500);
}

$(document).ready(function() {
    $elems = $('[data-max]');
    $elems.each(function() {
        len = $(this).val().length;
        $(this).parent().find('.counter').text(len);
    });
});

$('[data-max]').on('input', function() {
    var inp = $(this).val();
    var max = $(this).attr('data-max');

    if (inp.length >= max) {
        $(this).val(inp.substr(0, max-1));
    }

    $(this).parent().find('.counter').text(inp.length);
});
