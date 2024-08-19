{{-- Extends layout --}}
@extends('app.layouts.default')

{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a href="{{url('/roles')}}" class="btn btn-square btn-primary">{{trans('header.back')}}</a>
        </div>
        <div class="card-header">
            <h4 class="card-title">{{trans('roles.create')}}</h4>
        </div>
        <form method="POST" action="{{route('roles.store')}}">
            @csrf
           <div class="card-body">
                <div class="basic-form">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" style="color:#000;">{{trans('roles.role_name')}}</label>
                        <div class="col-sm-9">
                            <input type="text" name="role_name" class="form-control" placeholder="{{trans('roles.role_name_ph')}}" value="{{ old('role_name') }}">
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
                <h4 class="card-title">{{trans('roles.permissions')}}</h4>
            </div>
            <div class="form-group row">
                <div class="container">
                    @for ($i = 0; $i < count($permiss); $i++)
                        @if (($i == 0) OR ($i % 4 == 0))
                            <div class="row">
                        @endif
                        <div class="col-sm">
                            <div class="form-check">
                                <input class="form-check-input" name="permissions[]" type="checkbox" value="{{$permiss[$i]['id']}}">
                                <label class="form-check-label">
                                    {{$permiss[$i]['app_name']}}
                                </label>
                            </div>
                        </div>
                        @php
                            $cut = $i + 1;
                        @endphp
                        @if($cut % 4 == 0)
                            </div>
                        @endif
                    @endfor
                    @if ($cut % 4 != 0)
                        </div>
                    @endif
                </div>
            </div>
            @error('permissions')
                <div class="alert alert-danger" role="alert">
                    {{$message}}
                </div>
            @enderror
            <div class="card-header">
                <button type="submit" class="btn btn-square btn-primary">{{trans('roles.create_btn')}}</button>
            </div>
        </form>
    </div>

</div>
@endsection