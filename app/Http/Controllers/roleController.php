<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Session;
use Spatie\Permission\Models\Permission;

class roleController extends Controller
{
    public function index(){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'roles';
        $page_description = 'Set roles to users';
        $logo = "app/img/logo.png";
        $logoText = "app/img/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;
        $userData = User::select('id')->where('email', Auth::user()->email)->first();
        $roleUser = User::find($userData->id);
        $role = $roleUser->getRoleNames();

        $roles = Role::all();
        $permiss = Permission::join('role_has_permissions', 'role_has_permissions.permission_id', '=', 'permissions.id')
            ->select(
                'role_has_permissions.permission_id AS permission_id',
                'role_has_permissions.role_id AS role_id',
                'permissions.app_name AS permission',
            )
            ->get();
        return view('app.roles.index', compact('role', 'permiss', 'roles', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));
    }

    public function create(){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'roles';
        $page_description = 'Set roles to users';
        $logo = "app/img/logo.png";
        $logoText = "app/img/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = 'index';
        $userData = User::select('id')->where('email', Auth::user()->email)->first();
        $roleUser = User::find($userData->id);
        $role = $roleUser->getRoleNames();
        $permiss = Permission::all();
        return view('app.roles.create', compact('role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action', 'permiss'));
    }

    public function store(Request $request){
        $request->validate([
            'role_name' => 'required|max:125|min:3',
        ]);
        $role = new Role;
        $role->name = $request->role_name;
        $role->save();
        $role->permissions()->sync($request->permissions);
        session()->flash('msg_str', 'success_msg');
        return redirect()->route('roles.index');
    }

    public function show(Role $role){
/*        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'roles';
        $page_description = 'Set roles to users';
        $logo = "app/img/logo.png";
        $logoText = "app/img/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = 'index';
        $permiss = Permission::all();
        return view('app.roles.show', compact('uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action', 'permiss'));
*/
    }

    public function edit($id){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'roles';
        $page_description = 'Set roles to users';
        $logo = "app/img/logo.png";
        $logoText = "app/img/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = 'index';
        $userData = User::select('id')->where('email', Auth::user()->email)->first();
        $roleUser = User::find($userData->id);
        $role = $roleUser->getRoleNames();
        $rol = Role::find($id);
        $permiss = $rol->permissions->pluck('id');
        $permisos = Permission::all();
        return view('app.roles.edit', compact('role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action', 'permiss', 'rol', 'permisos'));

    }

    public function update(Request $request, $id){
        $request->validate([
            'role_name' => 'required|max:125|min:3',
        ]);
        $role = Role::find($id);
        $role->name = $request->role_name;
        $role->save();
        $role->syncPermissions($request->permissions);
        session()->flash('msg_chng', 'success_msg_chng');
        return redirect()->route('roles.index');

    }

    public function destroy($id){
        $rol = Role::find($id);
        $rol->syncPermissions([]);
        $rol->delete();
        session()->flash('msg_dlt', 'success_msg_dlt');
        return redirect()->route('roles.index');
    }
}
