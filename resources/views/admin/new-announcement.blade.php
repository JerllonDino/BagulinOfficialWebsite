@extends('admin/layouts/app')

@section('styles')
<style>
    #images .col-4 {
        background-size: cover;
    }
    #images .col-4:after {
        content: "";
        display: block;
        padding-bottom: 100%;
    }
</style>
@endsection

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="mb-4">New Announcement</h1>
            <a class="btn btn-sm btn-primary mr-2" href="/admin/announcements"><i class="fas fa-arrow-left"></i> Go Back</a>
            <div class="mt-5 mb-3">
                <div>
                    <label for="pictures">Upload Pictures : </label>
                </div>
                <div class="card">
                    <div class="card-body">
                        <input type="file" name="pictures" multiple="">
                        <div class="row my-3" id="images"></div>
                    </div>
                </div>
            </div>

            <form id="new-form">
                <div class="form-group">
                    <label for="title">Title : </label>
                    <input class="form-control col-lg-5" type="text" name="title">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="announcement_content">Content : </label>
                    <textarea name="announcement_content" id="editor1" rows="10" cols="80">

                    </textarea>
                    <div class="invalid-feedback"></div>
                </div>
                <button type="submit" class="btn btn-primary mt-3 float-right"><i class="fas fa-spin fa-spinner" style="display:none;"></i> Post</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/admin/announcements.js')}}"></script>
<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('announcement_content');
    $(document).ready(function() {
        $('#new-form').on('submit', function(e) {
            e.preventDefault();
            $form = $(this);
            var vals = $(this).serializeArray();
            vals[1].value = CKEDITOR.instances.editor1.getData();

            // get uploaded images
            images = [];
            $previews = $('#images > div');
            for ( i = 0; i < $previews.length; i++) {
                images.push($previews.eq(i).attr('blob'));
            }
            vals.push({
                name: 'images',
                value: JSON.stringify(images)
            });

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: vals,
                url: '/admin/announcements/save',
                method: 'POST',
                success: function(res) {
                    $form.find('[type="submit"]').attr('disabled', '');
                    showMessage('Announcement posted. Redirecting to homepage...');
                    setTimeout(function(){
                        location.href="/admin/announcements";
                    },1000);
                },
                error: function(res) {
                    this.hideLoading();
                    console.log(res);
                }
            });
        });
    });
</script>
@endsection