<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Session;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      // FirebaseAuth.getInstance().getCurrentUser();
      try {
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
        $userData = User::select('id')->where('email', FacadesAuth::user()->email)->first();
        $roleUser = User::find($userData->id);
        $role = $roleUser->getRoleNames();
        return view('app.index', compact('role', 'page_title', 'page_description','action','logo','logoText','active','event_class','button_class'));

      } catch (\Exception $e) {
        return $e;
      }

    }

    public function customer()
    {
      $userid = Session::get('uid');
      return view('customers',compact('userid'));
    }
}
