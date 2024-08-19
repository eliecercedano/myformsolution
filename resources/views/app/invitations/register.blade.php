{{-- Extends layout --}}
@extends('app.layouts.fullwidth')

{{-- Content --}}
@section('content')


<div class="authincation h-100 banner">
  <div class="h-100">
    <div class="row justify-content-center h-100 align-items-center">
        
        <div class="col-md-4">
          <div class="authincation-content">
                <div class="row no-gutters">
                    <div class="col-xl-12">
                        <div class="auth-form">
                            <!--div class="text-center mb-3">
                                <div class="btn-group">
                                  <a href="{ {route('language','es')}}"><img class="btn-languaje" src="{ { asset('icons/flags-icons/es.svg') }}"></button></a>                      
                                  <a href="{ {route('language','en')}}"><img class="btn-languaje" src="{ { asset('icons/flags-icons/en.svg') }}"></button></a>
                                </div>
                            </div-->
                            <div class="text-center mb-3">
                            </div>
                             @if(Session::has('error'))              
                                <div class="alert alert-danger alert-dismissible fade show">
                                {{ Session::get('error') }}
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div>
                            @endif
                            <h4 class="text-center mb-4 text-primary"><b>{{trans('users.welcome_msg') }}</b></h4>
                            <form action="{{ route('newuser-register') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="text-primary"><strong>{{trans('auth.email') }}</strong></label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $checkedEmail }}" readonly>
                                    @error('email')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-primary"><strong>{{trans('auth.name') }}</strong></label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-primary"><strong>{{trans('auth.password') }}</strong></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-primary"><strong>{{trans('auth.password_confirm') }}</strong></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn bg-primary text-white btn-block">{{trans('auth.register') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            
        </div>
    </div>
</div>
</div>
@endsection


@section('styles')
<style>
 
  .banner{
    background-image: url("{{ asset('app/img/banner_login_2.png') }}");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
</style>

@endsection