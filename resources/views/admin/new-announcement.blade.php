@extends('admin/layouts/app')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="mx-auto">
            <h1 class="mb-4">New Announcement</h1>
            <form id="new-form">
                <div class="form-group">
                    <input class="form-control col-lg-5" type="text" placeholder="Title" name="title">
                </div>
                <div class="form-group">
                    <textarea name="content" id="editor1" rows="10" cols="80">

                    </textarea>
                </div>
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
        $('#new-form').on('submit', function(e) {
            e.preventDefault();
            var vals = $(this).serializeArray();
            vals[1].value = CKEDITOR.instances.editor1.getData();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: vals,
                url: '/admin/announcements/save',
                method: 'POST',
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