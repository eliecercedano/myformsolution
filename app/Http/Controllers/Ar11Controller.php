<?php

namespace App\Http\Controllers;

use App\Models\AR11;
use App\Models\Form_User;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class Ar11Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'AR-11';
        $page_description = 'To Fill AR-11 Form';
        $logo = "app/img/logo.png";
        $logoText = "app/img/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = __FUNCTION__;
        $userData = User::select('id')->where('email', Auth::user()->email)->first();
        $roleUser = User::find($userData->id);
        $role = $roleUser->getRoleNames();
        $filledForms = AR11::join('users', 'users.id', '=', 'form_ar11.user_id')
        ->select(
            'users.displayName AS name',
            'form_ar11.id AS id',
            'form_ar11.filling_date AS filling_date',
            'form_ar11.estado AS estado',
            )
        ->where('form_ar11.user_id', $userData->id)
        ->get();

        return view('app.ar11.index', compact('filledForms', 'role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'AR-11';
        $page_description = 'To Fill the AR-11 Form';
        $logo = "app/img/logo.png";
        $logoText = "app/img/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = 'index';
        $userData = User::select('id')->where('email', Auth::user()->email)->first();
        $roleUser = User::find($userData->id);
        $role = $roleUser->getRoleNames();
        $states = State::where('status', 1)->get();

        return view('app.ar11.create', compact('states', 'role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lastName' => 'required|max:50|min:2',
            'firstName' => 'required|max:50|min:2',
            'middleName' => 'max:50',
            'situation' => 'required',
            'date_of_birth' => 'required',
            'alien_reg_number' => 'max:9',
            'present_street_number' => 'required',
            'present_city_town' => 'required',
            'present_state' => 'required',
            'present_zip_code' => 'required',
        ]);
        $ar11 = new AR11;
        $user = User::select('id')->where('email', Auth::user()->email)->first();
        if($ar11->situation != "other"){$specify_other = "";}else{$specify_other = $request->specification;}
        $newAr11 = $ar11->create([
            'filling_date' => date("Y-m-d"),
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'middle_name' => $request->middleName,
            'situation' => $request->situation,
            'specify_other' => $specify_other,
            'country_cityzenship' => $request->country_cityzenship,
            'date_of_birth' => $request->date_of_birth,
            'alien_reg_number' => $request->alien_reg_number,
            'present_street_number' => $request->present_street_number,
            'present_apt_ste_flr' => $request->present_apt_ste_flr,
            'present_number' => $request->present_number,
            'present_city_town' => $request->present_city_town,
            'present_state' => $request->present_state,
            'present_zip_code' => $request->present_zip_code,
            'previous_street_number' => $request->previous_street_number,
            'previous_apt_ste_flr' => $request->previous_apt_ste_flr,
            'previous_number' => $request->previous_number,
            'previous_city_town' => $request->previous_city_town,
            'previous_state' => $request->previous_state,
            'previous_zip_code' => $request->previous_zip_code,
            'mailing_street_number' => $request->mailing_street_number,
            'mailing_apt_ste_flr' => $request->mailing_apt_ste_flr,
            'mailing_number' => $request->mailing_number,
            'mailing_city_town' => $request->mailing_city_town,
            'mailing_state' => $request->mailing_state,
            'mailing_zip_code' => $request->mailing_zip_code,
            'estado' => "1",
            'user_id' => $user->id,
            ]);
        $pivot = new Form_User;
        $pivot->form_name = "AR-11";
        $pivot->table = "form_ar11";
        $pivot->user_id = $user->id;
        $pivot->form_id = $newAr11->id;
        $pivot->save();
        session()->flash('msg_str', 'success_msg');
        return redirect()->route('ar-11.index');
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
    public function edit($formId)
    {
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'AR-11';
        $page_description = 'To Fill the AR-11 Form';
        $logo = "app/img/logo.png";
        $logoText = "app/img/logo-text.png";
        $active="active";
        $event_class="schedule-event";
        $button_class="btn-primary";
        $action = 'index';
        $userData = User::select('id')->where('email', Auth::user()->email)->first();
        $roleUser = User::find($userData->id);
        $role = $roleUser->getRoleNames();
        $states = State::where('status', 1)->get();
        $formData = AR11::where('id', $formId)->first();
        return view('app.ar11.edit', compact('formData', 'states', 'role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $formId)
    {
        $request->validate([
            'lastName' => 'required|max:50|min:2',
            'firstName' => 'required|max:50|min:2',
            'middleName' => 'max:50',
            'situation' => 'required',
            'date_of_birth' => 'required',
            'alien_reg_number' => 'max:9',
            'present_street_number' => 'required',
            'present_city_town' => 'required',
            'present_state' => 'required',
            'present_zip_code' => 'required',
        ]);
        $ar11 = AR11::find($formId);
        $ar11->first_name = $request->firstName;
        $ar11->last_name = $request->lastName;
        $ar11->middle_name = $request->middleName;
        $ar11->situation = $request->situation;
        if($ar11->situation != "other"){$ar11->specify_other = "";}else{$ar11->specify_other = $request->specification;}
        $ar11->country_cityzenship = $request->country_cityzenship;
        $ar11->date_of_birth = $request->date_of_birth;
        $ar11->alien_reg_number = $request->alien_reg_number;
        $ar11->present_street_number = $request->present_street_number;
        $ar11->present_apt_ste_flr = $request->present_apt_ste_flr;
        $ar11->present_number = $request->present_number;
        $ar11->present_city_town = $request->present_city_town;
        $ar11->present_state = $request->present_state;
        $ar11->present_zip_code = $request->present_zip_code;
        $ar11->previous_street_number = $request->previous_street_number;
        $ar11->previous_apt_ste_flr = $request->previous_apt_ste_flr;
        $ar11->previous_number = $request->previous_number;
        $ar11->previous_city_town = $request->previous_city_town;
        $ar11->previous_state = $request->previous_state;
        $ar11->previous_zip_code = $request->previous_zip_code;
        $ar11->mailing_street_number = $request->mailing_street_number;
        $ar11->mailing_apt_ste_flr = $request->mailing_apt_ste_flr;
        $ar11->mailing_number = $request->mailing_number;
        $ar11->mailing_city_town = $request->mailing_city_town;
        $ar11->mailing_state = $request->mailing_state;
        $ar11->mailing_zip_code = $request->mailing_zip_code;
        $ar11->estado = "1";
        $ar11->save();
        session()->flash('msg_str', 'success_msg_chng');
        return redirect()->route('ar-11.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = AR11::find($id);
        $form->delete();
        $user = User::select('id')->where('email', Auth::user()->email)->first();
        Form_User::where('user_id', $user->id)->where('form_id', $id)->where('table', 'form_ar11')->delete();
        session()->flash('msg_dlt', 'success_msg_dlt');
        return redirect()->route('ar-11.index');

    }
}
