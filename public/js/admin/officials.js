var aboutMessage = new Quill('#about_message', {
    theme: 'snow'
});
var welcomeMessage = new Quill('#welcome_message', {
    theme: 'snow'
});
$submitBtn = $('.submit');
$submitBtnSpinner = $submitBtn.find('.fa-spinner');
$modalDelete = $('#modalDelete');
$modalIndividual = $('#modalIndi');
$modalMultiple = $('#modalMulti');
$modalDisable = $modalIndividual.find('#disable-modal');

$('.multi-officials').click(function (e) {
    position = $(this).data('position');
    $.ajax({
        url: '/admin/officials/get/position/' + position,
        method: 'POST',
        beforeSend: function () {
            $('#official-position').html('<i class="fas fa-users mx-auto"></i> ' + position + 's');
            $('.officials').html('<h1 class="display-1 fas fa fa-spinner fa-spin"></h1>');
            $modalMultiple.modal('show');
        }
    }).done(function (html) {
        $('.officials').html(html.html);
        $modalMultiple.find('#add-official').data('position', position);
    });
});

$modalMultiple.on('click', '.delete-official', function (e) {
    e.stopPropagation();
    id = $(this).data('id');
    name = $(this).data('name');
    $('.modal').modal('hide');
    $modalDelete.find('#confirm-delete').data('id', id);
    $modalDelete.find('#official-name').text(name);
    $modalDelete.modal('show');
});

$modalDelete.on('click', '#confirm-delete', function(){
    id = $(this).data('id');
    $.ajax({
        url: '/admin/officials/delete/official/' + id,
        method: 'DELETE',
        beforeSend: function () {
            $submitBtn.attr('disabled', '');
            $submitBtnSpinner.removeClass('d-none');
        }
    }).done(function (data) {
        console.log(data);
        showMessage('Official Deleted!');
        $('.modal').modal('hide');
    }).fail(function (err) {
        console.log(err);
    }).always(function(){
        $submitBtn.removeAttr('disabled');
        $submitBtnSpinner.addClass('d-none');
    });
});

$modalIndividual.on('hidden.bs.modal', function () {
    $('#about-message').removeClass('d-none');
    $('#welcome-message').removeClass('d-none');
    $('#about-image').removeClass('d-none');
});

$modalIndividual.on('change', '[name="welcome_image"]', function () {
    var file = $(this);
    let reader = new FileReader();
    let fileName = file[0].files[0].name;

    reader.addEventListener("load", function (e) {
        base64 = e.currentTarget.result;

        $('#welcome-image').find('img').attr('src', base64);
        $('#welcome-image').find('img').data('base64', base64);
    });
    reader.readAsDataURL(file[0].files[0]);
}).on('change', '[name="about_image"]', function () {

    var file = $(this);
    let reader = new FileReader();
    let fileName = file[0].files[0].name;

    reader.addEventListener("load", function (e) {
        base64 = e.currentTarget.result;

        $('#about-image').find('img').attr('src', base64);
        $('#about-image').find('img').data('base64', base64);
    });
    reader.readAsDataURL(file[0].files[0]);
});

$('.submit-official').submit(function (e) {
    e.preventDefault();
    position = $(this).data('position');
    $id = $(this).find('input[name="id"]').val();
    data = $(this).serializeArray();

    welcomeBase = $('#welcome-image').find('img').data('base64');
    aboutBase = $('#about-image').find('img').data('base64');
    welcomeMsg = welcomeMessage.root.innerHTML;
    aboutMsg = aboutMessage.root.innerHTML;

    data.push(
        { name: 'welcomeBase', value: JSON.stringify(welcomeBase) },
        { name: 'aboutBase', value: JSON.stringify(aboutBase) },
        { name: 'welcome_message', value: welcomeMsg },
        { name: 'about_message', value: aboutMsg },
    );
    console.log(id);
    if (!$id) {
        $.ajax({
            url: '/admin/officials/store/',
            method: 'POST',
            data: data,
            beforeSend: function () {
                $submitBtn.attr('disabled', '');
                $submitBtnSpinner.removeClass('d-none');
            },
        }).done(function (response) {
            showMessage('Official Successfully Saved!');
            if(position == "mayor" || position == "vicemayor"){
                setTimeout(function(){ location.reload(); }, 1000);
            }
            $('.modal').modal('hide');
        }).fail(function (err) {
            console.log(err);
        }).always(function () {
            $submitBtn.removeAttr('disabled');
            $submitBtnSpinner.addClass('d-none');
        });
    }
    else {
        $.ajax({
            url: '/admin/officials/update',
            method: 'PUT',
            data: data,
            beforeSend: function () {
                $submitBtn.attr('disabled', '');
                $submitBtnSpinner.removeClass('d-none');
            },
        }).done(function (response) {
            showMessage('Official Successfully Updated!');
            if(position == "mayor" || position == "vicemayor"){
                setTimeout(function(){ location.reload(); }, 1000);
            }
            $('.modal').modal('hide');
        }).fail(function (err) {
            console.log(err);
        }).always(function () {
            $submitBtn.removeAttr('disabled');
            $submitBtnSpinner.addClass('d-none');
        });
    }
});
