
@extends('vendor.admindash.layouts.app')
@section('content')
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="javascript:void(0)" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                  <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/dark-logo.svg" width="180" alt="">
                </a>
              
                <form action="{{ route('login') }}" method="post">
                    @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{ __(' Email') }}</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" autocomplete="off" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">{{ __('Password') }}</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" id="flexCheckChecked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                       {{  __(' Remeber this Device') }}
                      </label>
                    </div>
                    @if (Route::has('password.request'))
                    <a class="text-primary fw-medium" href="{{ route('password.request') }}">{{ __('Forgot Password ?')}}</a>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">{{ __('Sign In')}}</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-medium">New To Here?</p>
                    <a class="text-primary fw-medium ms-2" href="{{ route('register') }}">Join Now</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection