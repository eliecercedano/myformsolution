{{-- Extends layout --}}
@extends('app.layouts.default')



{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
				<!-- Add Order -->
    <div class="row">
      <div class="col-xl-12">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="media align-items-center">
                  <div class="media-body mr-3">
                    <span class="fs-14">{{trans('dashboard.user_account_title')}}</span>
                    <h2 class="num-text text-black" style="font-size:2rem !important;">{{trans('dashboard.user_account_title_2')}}: {{Auth::user()->email}}</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="card">
              <div class="card-body">
                <div class="mr-auto pr-3 mb-3">
                  <h4 class="text-black fs-20 mb-sm-0 mb-2">{{trans('dashboard.legal_sol')}}</h4>
                </div>
                <div class="d-flex align-items-center">
                  <span class="fs-36 text-black mr-4" style="font-size:1.25rem !important;">{{trans('dashboard.legal_advice')}}</span>
                </div>
                <a href="#" class="btn btn-primary mt-3">{{trans('dashboard.button_1')}}</a>	
                <hr style="color: #0056b2;" />
                <div class="mr-auto pr-3 mb-3">
                  <h4 class="text-black fs-20 mb-sm-0 mb-2">{{trans('dashboard.role_change_1')}}</h4>
                </div>
                <div class="d-flex align-items-center">
                  <span class="fs-36 text-black mr-4" style="font-size:1.25rem !important;">{{trans('dashboard.role_change_2')}}</span>
                </div>
                <a href="#" class="btn btn-primary mt-3">{{trans('dashboard.button_2')}}</a>
                <hr style="color: #0056b2;" />
                <div class="mr-auto pr-3 mb-3">
                  <h4 class="text-black fs-20 mb-sm-0 mb-2">{{trans('dashboard.uscis_info_1')}}</h4>
                </div>
                <div class="d-flex align-items-center">
                  <span class="fs-36 text-black mr-4" style="font-size:1.25rem !important;">{{trans('dashboard.uscis_info_2')}}</span>
                </div>
                <a href="#" class="btn btn-primary mt-3">{{trans('dashboard.button_3')}}</a>	
              </div>
            </div>
          </div>

          <div class="col-xl-4">
            <div class="card">
              <div class="card-body">
                <div class="mr-auto pr-3 mb-3">
                  <h4 class="text-black fs-20 mb-sm-0 mb-2">{{trans('dashboard.form_lib')}}</h4>
                </div>
                <ul style="font-size:1.5rem!important;">
                  <li><a href="{{route('ar-11.index')}}">{{trans('ar11.ar11_form')}}</a></li>
                  <li><a href="{{route('i130.index')}}">{{trans('i130.i130_form')}}</a></li>
                  <li><a href="{{route('i765.index')}}">{{trans('i765.i765_form')}}</a></li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">{{trans('dashboard.button_4')}}</a>	
              </div>
            </div>
          </div>

          <div class="col-xl-4">
            <div class="card">
              <div class="card-body">
                <div class="mr-auto pr-3 mb-3">
                  <h4 class="text-black fs-20 mb-sm-0 mb-2">{{trans('dashboard.not')}}</h4>
                </div>
                <div class="d-flex align-items-center">

                </div>
                <a href="#" class="btn btn-primary mt-3">{{trans('dashboard.button_5')}}</a>	
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
			
@endsection			