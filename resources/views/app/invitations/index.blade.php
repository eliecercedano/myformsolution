{{-- Extends layout --}}
@extends('app.layouts.default')

{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{trans('users.check_email')}}</h4>
        </div>
        <form method="POST" action="{{route('mail-checking')}}">
            @csrf
           <div class="card-body">
                <div class="basic-form">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" style="color:#000;">{{trans('users.email')}}</label>
                        <div class="col-sm-9">
                            <input type="text" name="role_name" class="form-control" placeholder="{{trans('users.email_ex')}}" value="{{ old('role_name') }}">
                            @error('role_name')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header">
                <button type="submit" class="btn btn-square btn-primary">{{trans('roles.create_btn')}}</button>
            </div>
        </form>
    </div>

</div>
@endsection