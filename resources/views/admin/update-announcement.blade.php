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
    <div class="row ">
        <div class="col-lg-10 mx-auto">
            <h1 class="mb-4">
                Update Announcement
            </h1>
            <a class="btn btn-sm btn-primary mb-4 mr-2" href="/admin/announcements"><i class="fas fa-arrow-left"></i> Go Back</a>

            <div class="mb-3">
                <div>
                    <label for="pictures">Upload Pictures : </label>
                </div>
                <div class="card" id="upload-pictures">
                    <div class="card-body">
                        <div class="loading" style="display: none;">
                            <div class="p-3">
                                Deleting Image...
                            </div>
                        </div>
                        <input type="file" name="pictures" multiple="">
                        <div class="row my-3" id="images">
                            @foreach ($images as $image)
                                <div class="col-4 db" style="background-image:url('https://bagulin.s3-ap-southeast-1.amazonaws.com/announcements/{{$image->src}}');">
                                    <div class="delete-photo-db" data-id="{{$image->id}}">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <form id="update-form">
                <div class="form-group">
                    <input class="form-control col-lg-5" type="text" placeholder="Title" name="title" value="{{$announcement->title}}">
                </div>
                <div class="form-group">
                    <textarea name="update_content" id="editor1" rows="10" cols="80">
                        {!! $announcement->content !!}
                    </textarea>
                </div>
                <input type="hidden" name="id" value="{{$announcement->id}}">
                <button type="submit" class="btn btn-primary mt-3 float-right"><i class="fas fa-spin fa-spinner" style="display: none;"></i> Post</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/admin/announcements.js')}}"></script>
<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('update_content');
    $(document).ready(function() {
        $('#update-form').on('submit', function(e) {
            e.preventDefault();

            $form = $(this);

            var vals = $(this).serializeArray();
            vals[1].value = CKEDITOR.instances.editor1.getData();

            // get uploaded images
            images = [];
            $previews = $('#images > div:not(.db)');
            for ( i = 0; i < $previews.length; i++) {
                images.push($previews.eq(i).attr('blob'));
            }
            vals.push({
                name: 'images',
                value: JSON.stringify(images)
            });

            $.ajax({
                data: vals,
                url: '/admin/announcements/update',
                method: 'PUT',
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
