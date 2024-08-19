@extends('app.layouts.default')



{{-- Content --}}
@section('content')
  <!-- row -->
  <div class="container">
    <div class="col-md-16">
      <div class="card">
        <div class="card-header"><h2>{{ trans('auth.my_profile') }}</h2></div>
          <div class="card-body"><h3>
            {{ trans('auth.reg_user')}}:
            {{auth()->user()->email}}
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            @if (isset($errors) && $errors->any())
              <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                  {{$error}}
                @endforeach
              </div>
            @endif
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <h4>{{trans('profile.profile_info_title')}}</h4>
          <span class="text-justify mb-3" style="padding-top:-3px;">{{trans('profile.profile_info_content_1')}}<br><br>{{trans('profile.profile_info_content_2')}}</span>
        </div>
        <div class="col-lg-8 text-center pt-0">
          <div class="card py-4 mb-5 mt-md-3 bg-white rounded " style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">
            {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['App\Http\Controllers\Auth\ProfileController@update',$user->uid]]) !!}
            {!! Form::open() !!}
            <div class="form-group px-3">
              <label class='col-12 text-left pl-0'> {{trans('profile.name')}}</label>
              {!! Form::text('displayName', null, ['class'=>' col-md-8 form-control'])!!}
              <label class='mt-2 col-12 text-left pl-0'> {{trans('profile.email')}}</label>
              <input type="email" name="email" class='col-md-8 form-control' value="{{Auth::user()->email}}" readonly>
            </div>
            <div class="form-group row mb-0 mr-4">
              <div class="col-md-8 offset-md-4 text-right">
                <input type="submit" value="{{trans('profile.save')}}"  class='btn btn-primary'>
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      
      <div class="border-bottom border-grey"></div>

      @if($role[0] == 'Consultor')
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <h4>{{trans('profile.profile_invitation_title')}}</h4>
            <span class="text-justify mb-3">{{trans('profile.profile_invitation_content')}}</span>
          </div>
          <div class="col-lg-8 text-center pt-0">
            <div class="card py-4 mb-5 mt-md-3 bg-white rounded " style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">
              <form action="{{route('invitation.store')}}" method="post">
                @csrf
                <div class="form-group px-3">
                  <label class='col-12 text-left pl-0'> {{trans('profile.email')}}</label>
                  <input type="email" name="email_invitation" class='col-md-8 form-control'>
                  @if (session()->has('msg_invitation'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                        <strong>{{trans('users.msg_invitation')}}</strong>
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                    </div>
                  @endif
                </div>
                <div class="form-group row mb-0 mr-4">
                  <div class="col-md-8 offset-md-4 text-right">
                    <input type="submit" value="{{trans('profile.send')}}"  class='btn btn-primary'>
                  </div>
                </div>
              </form>
            </div>
        </div>
      @endif

      <div class="border-bottom border-grey"></div>

      <div class="row justify-content-center">
        <div class="col-lg-4">
          <h4>{{trans('profile.profile_password_title')}}</h4>
          <span class="text-justify" style="padding-top:-3px;">{{trans('profile.profile_password_content')}}</span>
        </div>
        <div class="col-lg-8 text-center pt-0">
          <div class="card py-4 mb-5 mt-md-3 bg-white rounded" style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">
            <div class="form-group px-3">
              <label class='col-12 text-left pl-0'> {{trans('profile.new_pass')}}</label>
              {!! Form::password('new_password', ['class'=>'col-md-8 form-control'])!!}
            </div>
            <div class="form-group px-3">
              <label class='col-12 text-left pl-0'> {{trans('profile.confirm_pass')}}</label>
              {!! Form::password('new_confirm_password', ['class'=>'col-md-8 form-control'])!!}
            </div>
            <div class="form-group row mb-0 mr-4">
              <div class="col-md-8 offset-md-4 text-right">
                <input type="submit" value="{{trans('profile.save')}}"  class='btn btn-primary'>
              </div>
            </div>
            {!! Form::close() !!}
          </div>

        
  <!--
    <div class="border-bottom border-grey"></div>
      <div class="row justify-content-center pt-5">
        <div class="col-lg-4">
          <h4>Delete Account</code></h5>
          <span class="text-justify" style="padding-top:-3px;">Permanently delete your account.</span>
        </div>
        <div class="col-lg-8 pt-0">
          <div class="card py-4 mb-5 mt-md-3 bg-white rounded" style="box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175)">
            <div class="text-left px-3">
              Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
            </div>
            { !! Form::open(['method'=>'DELETE', 'action' =>['App\Http\Controllers\Auth\ProfileController@destroy',$user->uid]]) !!}
            { !! Form::open() !!}
            <div class="form-group row mb-0 mr-4 pt-4 px-3">
              <div class="col-md-8 offset-l-4 text-left">
                { !! Form::submit('Delete Account', ['class'=>'btn btn-danger pl-3']) !!}
              </div>
            </div>
            { !! Form::close() !!}
                  </div>
                </div>
              </div>
          -->
@endsection
    
