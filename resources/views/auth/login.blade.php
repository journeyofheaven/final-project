@extends('layouts.app')

@section('content')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">{{ __('Login') }}</h3>
                <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group ">
                  <label for="email" >Email</label>
                 
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus>
                 
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  
              </div>

                <div class="form-group">
                  <label>{{ __('Password') }}</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                {{-- <div class="form-group d-flex align-items-center justify-content-between">
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                </div> --}}
                <div class="sign-up text-center" >
                  <button type="submit" class="btn btn-primary btn-block enter-btn">{{ __('Login') }}</button>
                </div>
                
              </form>
              <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Register</a></p>
            </div>
            
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection 
