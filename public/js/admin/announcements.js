 // File upload
 $('[name="pictures"]').change(function() {
    var file = $(this);
    $form = $(this).parent().parent().parent().parent().parent();
    for (i = 0; i < file[0].files.length; i++) {

    let reader = new FileReader();
    let fileName = file[0].files[i].name;

    reader.addEventListener("load", function(e) {
        base64 = e.currentTarget.result;
        html = `
        <div class="col-4" style="background-image:url('${base64}');" blob="${e.target.result}">
            <div class="delete-photo">
                <i class="fas fa-times"></i>
            </div>
        </div>
        `;
        $('#images').append(html);
    });
    reader.readAsDataURL(file[0].files[i]);
    }
});

$('#images').on('click', '.delete-photo', function() {
    $(this).parent().remove();
})

$('.delete-photo-db').click(function() {
    id = $(this).attr('data-id');
    $loading = $('#upload-photo').find('.loading');
    $elem = $(this).parent();

    if (confirm('Are you sure?')) {
        $.ajax({
            url: '/admin/announcements/delete-image',
            method: 'DELETE',
            data: {id},
            beforeSend: function() {
                $loading.show();
            },
            success: function(res) {
                $elem.remove();
                $loading.hide();
            },
            error: function(res) {
                $loading.hide();
            }
        })
    }
});