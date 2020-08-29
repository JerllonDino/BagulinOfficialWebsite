@extends('auth.layout')
@section('styles')
<style>
  .form-control{
    padding-left:2rem;
  }
</style>
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-6">
      <div class="card mt-5">
        <img src="{{ asset('img/logo-2.png') }}" alt="bagulin" width="200" class="mx-auto mt-4">
        <h4 class="mx-auto mt-3 mb-4 font-weight-light">Please sign in as Admin</h4>
        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row has-feedback">
              <div class="col-md-12 mx-auto">
                <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email"
                  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                  required autocomplete="email" autofocus>
                <i class="fas fa-user form-control-feedback"></i>
                <span class="separator"> </span>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row has-feedback">
              <div class="col-md-12 mx-auto">
                <input id="password" placeholder="{{ __('Password') }}" type="password"
                  class="form-control @error('password') is-invalid @enderror" name="password" required
                  autocomplete="current-password">
                <i class="fas fa-lock form-control-feedback"></i>
                <span class="separator"> </span>
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            {{-- <div class="form-group row mb-5">
              <div class="col-md-12 offset-md-4 mx-auto">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div> --}}

            <div class="form-group row mt-5 mb-0 text-center">
              <div class="col-md-12 offset-md-4 mx-auto">
                <button type="submit" class="btn btn-primary w-100 border-0">
                  {{ __('Login') }}
                </button>

                {{-- @if (Route::has('password.request'))
                  <a class="btn btn-link mt-3" style="color:black" href="{{ route('password.reset.view', ['prefix' => '9f6471c370aa3e1bf697f74ba6f83cba']) }}">
                    {{ __('Forgot Your Password?') }}
                  </a>
                @endif --}}
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection