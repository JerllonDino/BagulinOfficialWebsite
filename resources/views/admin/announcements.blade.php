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

    .add-announcement {
        position: fixed;
        bottom: 0;
        right: 0;
        z-index: 10000;
    }
    .add-announcement .btn {
        width: 70px;
        height: 70px;
        border-radius: 300%;
        box-shadow: 0px 10px 10px rgba(0,0,0,0.5);
    }

    .loading-delete {
        background-color: white;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    .loading-delete h5 {
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
@endsection

@section('content')

<div class="add-announcement p-4">
    <button class="btn btn-lg btn-primary">
        <i class="fas fa-plus"></i>
    </button>
</div>

<div class="container my-3">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1>Announcements</h1>
            <hr/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10 mx-auto">

            @foreach ($announcements as $announcement)
            <ul class="list-group">
                <li class="list-group-item mb-3 announcement">
                    <div class="loading-delete" style="display: none;">
                        <h5 class="text-center font-weight-bold text-secondary">Deleting...</h5>
                    </div>
                    <i class="fas fa-times float-right delete-announcement" data-id="{{$announcement->id}}"></i>
                    <h1 class="h4"><a href="/bagulinDeLaunion/admin/announcements/edit/{{$announcement->id}}">{{$announcement->title}}</a></h1>
                    <p class="small">Created at : {{$announcement->created_at}}</p>
                </li>
            </ul>
            @endforeach

            {{$announcements->links()}}
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
$(document).ready(function() {

    $('.add-announcement').click(function() {
        location.href="/bagulinDeLaunion/admin/announcements/add";
    });

    $('.delete-announcement').click(function() {
        id = $(this).attr('data-id');
        $loading = $(this).parent().find('.loading-delete');

        if (confirm('Are you sure?')) {
            $.ajax({
                url: '/bagulinDeLaunion/admin/announcements/delete',
                method: 'DELETE',
                data: {id},
                beforeSend: function() {
                    $loading.show();
                },
                success: function(res) {
                    location.reload();
                },
                error: function(res) {
                    $loading.hide();
                }
            })
        }
    });
});
</script>
@endsection
