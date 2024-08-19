<?php

namespace App\Http\Controllers;

use App\Mail\InvitationMailable;
use App\Models\AR11;
use App\Models\Invitation;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Kreait\Firebase\Auth as FirebaseAuth;
use Session;

class InvitationController extends Controller
{
    public function index(){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'dashboard';
        $page_description = 'Some description for the page';
        $logo = "app/img/logo.png";
        $logoText = "app/img/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;
        $userData = User::select('id')->where('email', Auth::user()->email)->first();
        $roleUser = User::find($userData->id);
        $role = $roleUser->getRoleNames();
        return view('app.invitations.index', compact('role', 'page_title', 'page_description','action','logo','logoText','active','event_class','button_class'));
    }

    public function store(Request $request){
        $request->validate([
            'email_invitation' => 'required|max:125|min:3|unique:users,email',
        ]);
        date_default_timezone_set('America/New_York');
        $userData = User::select('id', 'displayName')->where('email', Auth::user()->email)->first();
        Invitation::create([
            'email' => $request->email_invitation,
            'invitation_date' => date("Y-m-d"),
            'user_id' => $userData->id,
        ]);
        $mail = new InvitationMailable($userData->displayName);
        Mail::to($request->email_invitation)->send($mail);
        session()->flash('msg_invitation', 'success_msg_invitation');
        return back();
    }

}
