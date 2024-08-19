{{-- Extends layout --}}
@extends('app.layouts.fullwidth')

{{-- Content --}}
@section('content')
<div class="authincation h-100 banner">
  <div class="container h-100">
    <div class="row justify-content-center h-100 align-items-center">
        <div class="col-md-6">
          
        </div>
        <div class="col-md-6">          
          <div class="authincation-content">
              <div class="row no-gutters">
                  <div class="col-xl-12">
                      <div class="auth-form">
                          <div class="text-center mb-3 text-center">
                            <div class="btn-group">
                             <a href="{{route('language','es')}}"><img class="btn-languaje" src="{{ asset('icons/flags-icons/es.svg') }}"></button></a>                      
                              <a href="{{route('language','en')}}"><img class="btn-languaje" src="{{ asset('icons/flags-icons/en.svg') }}"></button></a>
                            </div>
                          </div>
                          <h4 class="text-center mb-4 text-primary">{{trans('auth.sign_in') }}</h4>
                          <form action="{{ route('login') }}" method="POST">
                              @csrf
                              <div class="form-group">
                                  <label class="mb-1 text-primary"><strong>{{trans('auth.email') }}</strong></label>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label class="mb-1 text-primary"><strong>{{trans('auth.password') }}</strong></label>
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                              </div>
                              <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                  <div class="form-group">
                                      <div class="custom-control custom-checkbox ml-1 text-primary">
                                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                        <label class="custom-control-label" for="basic_checkbox_1">{{trans('auth.remember_me') }}</label>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <a class="text-primary" href="{{ url('/password/reset'); }}">{{trans('auth.forgot_pass') }}</a>
                                  </div>
                              </div>
                              <div class="text-center">
                                  <button type="submit" class="btn bg-primary text-white btn-block">{{ __('Login') }}</button>
                              </div>
                          </form>
                          <div class="new-account mt-3">
                              <p class="text-primary">{{trans('auth.have_account') }}<a class="text-primary" href="{{ route('register') }}" > {{trans('auth.register') }}</a></p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('styles')

<style>
 
  .banner{
    background-image: url("{{ asset('app/img/banner_login_1.png') }}");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
</style>

@endsection