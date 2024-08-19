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
                    <strong>{{trans('i130.success_msg')}}</strong>
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            @endif
            @if (session()->has('msg_chng'))
                <div class="alert alert-success alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                    <strong>{{trans('i130.success_msg_chng')}}</strong>
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            @endif
            @if (session()->has('msg_dlt'))
                <div class="alert alert-success alert-dismissible fade show">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                    <strong>{{trans('i130.success_msg_dlt')}}</strong>
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                    </button>
                </div>
            @endif
        </div>
        <div class="card-body">
            <a href="{{route('i130.create')}}" class="btn btn-primary">{{trans('i130.new_form')}}</a>
            <a target="_blank" href="{{route('download-empty-i130')}}" class="btn btn-primary" rel="noopener noreferrer">{{trans('i130.dld_empty_form')}}</a>
        </div>
        <div class="card-header">
            <h4 class="card-title">{{trans('i130.title')}}</h4>
        </div>
        <div class="table-responsive">
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th style="width:30%;">{{trans('i130.fullName')}}</th>
                        <th style="width:25%;">{{trans('i130.date')}}</th>
                        <th style="width:25%;">{{trans('i130.status')}}</th>
                        <th style="width:20%;">{{trans('i130.options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($filledForms as $filled)
                        <tr>
                            <td>{{$filled->user_first_name}} {{$filled->user_last_name}}</td>
                            <td>{{date("m-d-Y", strtotime($filled->filingDate))}}</td>
                            <td>
                                @if ($filled->estado == "1")
                                    {{trans('i130.state1')}}
                                @endif
                                @if ($filled->estado == "2")
                                    {{trans('i130.state2')}}
                                @endif
                                @if ($filled->estado == "3")
                                    {{trans('i130.state3')}}
                                @endif
                                @if ($filled->estado == "4")
                                    {{trans('i130.state4')}}
                                @endif
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{route('download-filled-i130', $filled->id)}}" target="_blank" rel="noopener noreferrer" title="PDF" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="flaticon-381-print"></i></a>
                                    <a href="{{route('i130.edit', $filled->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                    <form action="{{route('i130.destroy', $filled->id)}}" method="post" class="sweet-confirm">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div-->

    </div>

</div>
@endsection