{{-- Extends layout --}}
@extends('app.layouts.default')

{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
    <div class="card">
        <div>
            @if (session()->has('msg_str'))
                <div class="alert alert-success alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                    <strong>{{trans('roles.success_msg_rolAssign')}}</strong>
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            @endif
            @if (session()->has('msg_chng'))
                <div class="alert alert-success alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                    <strong>{{trans('roles.success_msg_banned')}}</strong>
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            @endif
            @if (session()->has('msg_dlt'))
                <div class="alert alert-success alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                    <strong>{{trans('roles.success_msg_react')}}</strong>
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            @endif
            @if (session()->has('msg_roleAssign'))
                <div class="alert alert-success alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                    <strong>{{trans('roles.success_msg_react')}}</strong>
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th style="width:25%;"><strong>{{trans('users.uid')}}</strong></th>
                        <th style="width:25%;"><strong>{{trans('users.name')}}</strong></th>
                        <th style="width:25%;"><strong>{{trans('users.email')}}</strong></th>
                        <th style="width:25%;"><strong>{{trans('roles.options')}}</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->localId}}</td>
                            <td>{{$user->displayName}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#exampleModalCenter">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                    <form action="#" method="post" class="sweet-confirm">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                    </form>
                                    <div class="modal fade" id="exampleModalCenter">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">{{trans('users.assignRole')}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{route('users.update', $user->id)}}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-body">
                                                        <label class='mt-2 col-12 text-left pl-0'>Select a Role for the user {{$user->displayName}}</label>
                                                        <select class="form-control" name="roleName">
                                                            <option value=null>--{{trans('users.chooseRole')}}--</option>
                                                          @foreach ($roles as $rol)
                                                            <option value="{{$rol->id}}">{{$rol->name }}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn " style="background-color:#B12333; color:#fff;" data-dismiss="modal">{{trans('buttons.close')}}</button>
                                                        <button type="submit" class="btn btn-primary">{{trans('buttons.save_ch')}}</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection