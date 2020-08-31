@extends('admin/layouts/app')

@section('styles')
<style>
    .delete-announcement {
        cursor: pointer;
        opacity: 0;
    }
    .announcement:hover .delete-announcement {
        opacity: 1;
    }
</style>
@endsection

@section('content')

<div class="container my-3">
    <div class="row">
        <div class="col-lg-6 mx-auto">

            @foreach ($announcements as $announcement)
            <ul class="list-group">
                <li class="list-group-item mb-3 announcement">
                    <i class="fas fa-times float-right delete-announcement" data-id="{{$announcement->id}}"></i>
                    <h1 class="h4"><a href="/admin/announcements/edit/{{$announcement->id}}">{{$announcement->title}}</a></h1>
                    <p class="small">{{$announcement->created_at}}</p>
                </li>
            </ul>
            @endforeach

        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $('.delete-announcement').click(function() {
        id = $(this).attr('data-id');
        if (confirm('Are you sure?')) {
            $.ajax({
                url: '/admin/announcements/delete',
                method: 'DELETE',
                data: {id},
                success: function(res) {
                    console.log(res);
                },
                error: function(res) {
                    console.log(res);
                }
            })
        }
    });
});
</script>
@endsection