@extends('admin/layouts/app')

@section('styles')
<style>

</style>
@endsection

@section('content')
<div class="container my-5">
    <div class="row ">
        <div class="col-lg-10 mx-auto">
            <h1 class="mb-4">
                Change Password
            </h1>
            <a class="btn btn-sm btn-primary mb-4 mr-2" href="/bagulinDeLaunion/admin/"><i class="fas fa-arrow-left"></i> Go Back</a>

            <form action="/bagulinDeLaunion/admin/update-password" method="POST">
                @csrf
                <div class="form-group">
                    <label for="old_password">Old Password</label>
                    <input class="form-control col-lg-6 @error('old_password') is-invalid @enderror" type="password" name="old_password" required="" max="255" >
                    @error('old_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group form-row">
                    <div class="col-lg-6">
                        <label for="old_password">New Password</label>
                        <input class="form-control @error('new_password') is-invalid @enderror" type="password" name="new_password" required="" max="255">
                        @error('new_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label for="new_password">Confirm New Password</label>
                        <input class="form-control" type="password" name="new_password_confirmation" required="" max="255">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary"><i class="loading-btn fas fa-spin fa-spinner mr-2 d-none"></i> Change Password</button>
            </form>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('js/admin/announcements.js')}}"></script>
<script src="{{asset('js/ckeditor/ckeditor.js')}}"></script>
<script>
    $(document).ready(function() {

    });
</script>
@endsection