{{-- Extends layout --}}
@php
	$action = 'page_error_400';
	$page_title = '404';
@endphp

@extends('app.layouts.fullwidth')
@section('page_title', __('Not Found'))

{{-- Content --}}
@section('content')
<div class="authincation h-100 banner">
    <div class="h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-5">
                <div class="form-input-content text-center error-page">
                    <h1 class="error-text font-weight-bold text-white">404</h1>
                    <h4><i class="fa fa-exclamation-triangle text-white"></i><span class="text-white"> The page you were looking for is not found!</span></h4>
                    <p class="text-white">You may have mistyped the address or the page may have moved.</p>
                    <div>
                        <a class="btn btn-primary" href="{!! url('/index'); !!}">Back to Home</a>
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
    background-image: url("{{ asset('app/img/banner_login_3.png') }}");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  }
</style>

@endsection

