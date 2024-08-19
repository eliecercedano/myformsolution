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
                <h4 class="text-center mb-4 text-primary">{{trans('auth.reset_password')}}</h4>
                @if(Session::has('message'))
                  <div class="alert alert-info alert-dismissible fade show">
                    {{ Session::get('message') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                  </div>
                @endif
                @if ($errors->any())
                  @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show">
                      {{ $error }}
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                  @endforeach
                @endif
                {!! Form::open(['method'=>'POST', 'action'=> 'App\Http\Controllers\Auth\ResetController@store']) !!}
                <div class="form-group">
                  <label class="text-primary"><strong>{{trans('auth.email') }}</strong></label>
                  {!! Form::email('email', null, ['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                  <button type="submit" class="btn bg-primary text-white btn-block">{{trans('auth.send_email') }}</button>
                </div>
                  {!! Form::close() !!}
                <div class="new-account mt-3">
                  <a class="text-primary" href="{{ route('login') }}" >Return to Login</a>
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
    background-image: url("{{ asset('app/img/banner_login_4.png') }}");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
</style>

@endsection