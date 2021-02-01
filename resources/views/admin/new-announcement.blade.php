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
            <a class="btn btn-sm btn-primary mr-2" href="/bagulinDeLaunion/admin/announcements"><i class="fas fa-arrow-left"></i> Go Back</a>

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

            <div class="mb-3">
                <div>
                    <label for="pictures">Add Videos : </label>
                </div>
                <div class="card">
                    <div class="card-header">
                       <div class="row">
                            <div class="col-lg-6">
                                <input class="form-control" type="text" name="link" id="youtube_url" placeholder="Youtube URL">
                            </div>
                            <div class="col-lg-1">
                                <button class="btn btn-primary h-100 btn-block" id="add_video"><i class="fas fa-plus"></i></button>
                            </div>
                       </div>
                    </div>
                    <div class="card-body row" id="youtube-videos"></div>
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

        // Youtube Videos
        function YouTubeGetID(url){
            var ID = '';
            url = url.replace(/(>|<)/gi,'').split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
            if(url[2] !== undefined) {
            ID = url[2].split(/[^0-9a-z_\-]/i);
            ID = ID[0];
            }
            else {
            ID = url;
            }
            return ID;
        }

        $('#add_video').click(function() {
            url = $('#youtube_url').val();
            id = YouTubeGetID(url);

            if (typeof id == 'string') {
                html = `
                    <div class="col-lg-4 border p-2" data-id="${id}">
                        <button class="btn btn-danger mb-1 d-block delete-video"><i class="fas fa-times"></i></button>
                        <iframe width="200" height="200" src="https://www.youtube.com/embed/${id}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                `;

                $('#youtube-videos').append(html);
            }
            else {
                alert('Not a valid youtube link.');
            }

            $('#youtube_url').val('');
        });

        $('#youtube-videos').on('click', '.delete-video', function() {
            $(this).parent().remove();
        });

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

            // get youtube videos
            videos = [];
            $videos = $('#youtube-videos > div');
            for (i = 0; i < $videos.length; i++) {
                videos.push($videos.eq(i).attr('data-id'));
            }
            vals.push({
                name: 'videos',
                value: JSON.stringify(videos)
            });

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: vals,
                url: '/bagulinDeLaunion/admin/announcements/save',
                method: 'POST',
                success: function(res) {
                    $form.find('[type="submit"]').attr('disabled', '');
                    showMessage('Announcement posted. Redirecting to homepage...');
                    setTimeout(function(){
                        location.href="/bagulinDeLaunion/admin/announcements";
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
