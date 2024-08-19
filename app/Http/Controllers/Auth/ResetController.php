<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Exception\FirebaseException;
use Illuminate\Validation\ValidationException;
use Session;


class ResetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $page_title = 'Recovery password';
        $page_description = 'Some description for the page';    
        $action = 'page_login';
        return view('app.reset.password',compact('action','page_description','page_title'));
    }

    public function verify_email()
    {
      $uid = Session::get('uid');
      $verify = app('firebase.auth')->getUser($uid)->emailVerified;
        if ($verify == 1) {
          return redirect()->route('index');
        }
        else{
          try {
            $email = app('firebase.auth')->getUser($uid)->email;
            $link = app('firebase.auth')->sendEmailVerificationLink($email);
          } catch (FirebaseException $e) {
            Session::flash('error', $e->getMessage());
          }
            $page_title = 'Email Validation';
            $page_description = 'Some description for the page';
            $action = 'page_register';
          return view("app.reset.email", compact('page_title', 'page_description','action'));return view("app.reset.email");
        }
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

    // Password Reset
    public function store(Request $request)
    {
        //
        $rules = [
            'email' => 'required',
        ];
        $messages = [
            'email.required' => 'You need to enter an email.',
        ];
        $this->validate($request, $rules, $messages);
        try {
            $email = $request->email;
            $link = app('firebase.auth')->sendPasswordResetLink($email);
            Session::flash('message', 'An email has been sent. Please check your inbox or spam.');
            return back()->withInput();
        } catch (FirebaseException $e) {
          $error = str_replace('_', ' ', $e->getMessage());
          Session::flash('error', $error);
          //return back()->withInput();
          return back()->withErrors('Email not found.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // Verify Email Store Method
    public function verify($request)
    {
        try {
          $uid = Session::get('uid');
          $email = app('firebase.auth')->getUser($uid)->email;
          $link = app('firebase.auth')->sendEmailVerificationLink($email);

          Session::flash('resent', 'An email has been sent. Please check your inbox or spam.');
          return back()->withInput();
        } catch (FirebaseException $e) {
          Session::flash('error', $e->getMessage());
          return back()->withInput();
        }
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
