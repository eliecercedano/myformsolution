<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Auth\Request\UpdateUser;
use Kreait\Firebase\Exception\FirebaseException;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Session;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    //
    $uid = Session::get('uid');
    $user = app('firebase.auth')->getUser($uid);
    $action = __FUNCTION__;
    $page_title = 'profile';
    $logo = "app/img/logo.png";
    $logoText = "app/img/logo-text.png";
    $userData = User::select('id')->where('email', FacadesAuth::user()->email)->first();
    $roleUser = User::find($userData->id);
    $role = $roleUser->getRoleNames();
    $roles = Role::all();
    return view('auth.profile',compact('role', 'roles', 'user', 'action', 'page_title', 'logo', 'logoText'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
    $auth = app('firebase.auth');

    $user = $auth->getUser($id);
    try {
      if ($request->new_password == '' && $request->new_confirm_password =='') {
        $request->validate([
          'displayName' => 'required|min:3|max:25',
          'email' =>'required',
        ]);
        $properties =[
          'displayName' => $request->displayName,
          'email' => $request->email,
        ];
        $updatedUser = $auth->updateUser($id, $properties);
        if ($user->email != $request->email) {
          $auth->updateUser($id, ['emailVerified'=>false]);
        }
        $dataUser = User::select('id')->where('email', $request->email)->first();
        $userModel = User::find($dataUser->id);
        $userModel->displayName = $request->displayName;
        $userModel->save();
        Session::flash('message', 'Profile Updated');
        return back()->withInput();
      } else {
        $request->validate([
          'new_password' => 'required|max:18|min:8',
          'new_confirm_password' => 'same:new_password',
        ]);
        $updatedUser = $auth->changeUserPassword($id, $request->new_password);
        //Session::flash('message', 'Password Updated');
        //return back()->withInput();
        return back()->withStatus('Password updated successfully.');
      }
      return $input;
    } catch (\Exception $e) {
      //Session::flash('error', $e->getMessage());
      //return back()->withInput();
      return back()->withErrors('Mistake. Please verify that the information to be updated meets the parameters.');
    }

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $updatedUser = app('firebase.auth')->disableUser($id);
    Session::flush();
    return redirect('/login');
  }
}
