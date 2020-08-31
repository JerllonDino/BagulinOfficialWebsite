@extends('admin/layouts/app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="mb-4">Update Announcement</h1>
            <form id="update-form">
                <div class="form-group">
                    <input class="form-control col-lg-5" type="text" placeholder="Title" name="title" value="{{$announcement->title}}">
                </div>
                <div class="form-group">
                    <textarea name="content" id="editor1" rows="10" cols="80">
                        {!! $announcement->content !!}
                    </textarea>
                </div>
                <input type="hidden" name="id" value="{{$announcement->id}}">
                <button class="btn btn-primary mt-3 float-right">Post</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('content');
    $(document).ready(function() {
        $('#update-form').on('submit', function(e) {
            e.preventDefault();
            var vals = $(this).serializeArray();
            vals[1].value = CKEDITOR.instances.editor1.getData();
            console.log(vals);
            $.ajax({
                data: vals,
                url: '/admin/announcements/update',
                method: 'PUT',
                success: function(res) {
                    console.log(res);
                },
                error: function(res) {
                    console.log(res);
                }
            });
        });
    });
</script>
@endsection