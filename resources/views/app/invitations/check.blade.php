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
                            <div class="text-center mb-3">
                                <div class="btn-group">
                                  <a href="{{route('language','es')}}"><img class="btn-languaje" src="{{ asset('icons/flags-icons/es.svg') }}"></button></a>                      
                                  <a href="{{route('language','en')}}"><img class="btn-languaje" src="{{ asset('icons/flags-icons/en.svg') }}"></button></a>
                                </div>
                            </div>
                            <div class="text-center mb-3">
                            </div>
                             @if(Session::has('error'))              
                                <div class="alert alert-danger alert-dismissible fade show">
                                    {{ Session::get('error') }}
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                </div>
                            @endif
                            @if (session()->has('non_exist'))
                                <div class="alert alert-danger alert-dismissible fade show">
                                    {{ trans('users.email_ne') }}
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                </div>
                            @endif
                            @if (session()->has('timeout'))
                                <div class="alert alert-danger alert-dismissible fade show">
                                    {{ trans('users.timeout') }}
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                </div>
                            @endif
                            @error('email')
                                <div class="alert alert-danger alert-dismissible fade show">
                                    {{ trans($message) }}
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                </div>
                            @enderror
                            <h4 class="text-center mb-4 text-primary"><b>{{trans('users.check_email') }}</b></h4>
                            <form action="{{route('mail-checking')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="text-primary"><strong>{{trans('users.email') }}</strong></label>
                                    <input type="email" class="form-control" name="email" required autofocus>
                                    @error('email')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn bg-primary text-white btn-block">{{trans('buttons.check_email') }}</button>
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