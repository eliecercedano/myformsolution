<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
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
        $roles = Role::all();
        $users = User::all();
        $userData = User::select('id')->where('email', Auth::user()->email)->first();
        $roleUser = User::find($userData->id);
        $role = $roleUser->getRoleNames();
        return view ('app.users.index', compact('role', 'roles', 'users', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));
    }

    public function create(){}
    
    public function store(Request $request){
    }
    
    public function edit(){}
    
    public function update(Request $request, $idUser){
        $request->validate([
            'roleName' => 'required',
        ]);
        $user = User::find($idUser);
        $roleSelected = Role::find($request->roleName);
        $user->assignRole($roleSelected->name);
        session()->flash('msg_roleAssign', 'success_msg_roleAssign');
        return redirect()->route('users.index');
    }
    
    public function destroy(){}
}
