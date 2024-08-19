<!--**********************************
    Sidebar start
***********************************-->
<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-home-2"></i>
                <span class="nav-text">{{trans('header.dashboard')}}</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ url('/index'); }}">Dashboard</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-file-2"></i>
                <span class="nav-text">{{trans('header.archives')}}</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{url('/roles')}}">{{trans('header.roles')}}</a></li>
                    <li><a href="{{route('users.index')}}">{{trans('header.users')}}</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-list"></i>
                <span class="nav-text">Forms</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('ar-11.index')}}">{{trans('ar11.ar11_form')}}</a></li>
                    <li><a href="{{route('i130.index')}}">{{trans('i130.i130_form')}}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->