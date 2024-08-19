{{-- Extends layout --}}
@extends('app.layouts.fullwidth')

{{-- Content --}}
@section('content')
<div class="col-md-6">
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Check your email address</div>

                        <div class="card-body">
                          @if (session('resent'))
                              <div class="alert alert-success" role="alert">
                                  {{ __('A new verification link has been sent to your email address.') }}
                              </div>
                          @endif
                          @if(Session::has('error'))
                            <p class=" pb-3 alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
                          @endif

                            Before continuing, please check your email for a verification link.
                            If you did not receive the email
                           {{--<form class="d-inline" method="POST" action="App\Http\Controllers\Auth\ResetController@verify">--}}
                                <form class="d-inline" method="GET" action="{{ route('verify') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="text-decoration:none;">{{ __('Click here to request another') }}</button>.
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection