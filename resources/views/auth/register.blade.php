@extends('layouts.app')

@section('content')
<div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
              <div class="card col-lg-4 mx-auto">
                <div class="card-body px-5 py-5">
                  <h3 class="card-title text-left mb-3">Register</h3>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                      <label>{{ __('name') }}</label>
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                         
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                      <label>{{ __('username') }}</label>
                      <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                         
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group ">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                    </div>
                    </form>
                    <p class="sign-up text-center">Already have an Account?<a href="{{ route('login') }}"> Sign Up</a></p>
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
