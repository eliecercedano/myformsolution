<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Kreait\Firebase\Auth;

class CheckInvitationController extends Controller
{
    use RegistersUsers;
    protected $auth;

    public function __construct(Auth $auth) {
        $this->middleware('guest');
        $this->auth = $auth;
     }

     public function check(){
        $action = 'index';
        return view('app.invitations.check', compact('action'));
    }

    public function mailChecking(Request $request){
        $request->validate([
            'email' => 'required|unique:users,email',
        ]);
        date_default_timezone_set('America/New_York');
        $result = Invitation::select('invitation_date')->orderBy('invitation_date', 'desc')->where('email', $request->email)->first();
        if($result){
            $limit = date("Y-m-d", strtotime($result->invitation_date."+ 3 days"));
            if ($limit < date("Y-m-d")){
                session()->flash('timeout', 'timeout');
                return back();
            }else{
                $action = "index";
                $checkedEmail = $request->email;
                return view('app.invitations.register', compact('action', 'checkedEmail'));
            }
        }else{
            session()->flash('non_exist', 'email_ne');
            return back();
        }
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|min:2|max:100',
            'password' => 'required|string|min:8|max:12|confirmed',
        ]);
        $userProperties = [
            'email' => $request->input('email'),
            'emailVerified' => false,
            'password' => $request->input('password'),
            'displayName' => $request->input('name'),
            'disabled' => false,
         ];
         $createdUser = $this->auth->createUser($userProperties);
         $user = User::create([
            'email' => $request->input('email'),
            'displayName' => $request->input('name'),
            'localId' => $createdUser->uid,
         ]);
         $user->assignRole('Client');
         return redirect()->route('login');


    }




}
