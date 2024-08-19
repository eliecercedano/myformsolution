<?php

namespace App\Http\Controllers;

use App\Models\Form_User;
use App\Models\I765part1;
use App\Models\I765part2;
use App\Models\I765part3;
use App\Models\I765part4;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class I765Controller extends Controller
{
    public function index(){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'I-765';
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
        $filledForms = I765part1::select(
            'id',
            'legal_first_name',
            'legal_last_name',
            'filingDate',
            'estado',
            )
        ->where('user_id', $userData->id)
        ->get();
        return view('app.i765.index', compact('filledForms', 'role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));
    }

    public function create(){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'I-765';
        $page_description = 'To Fill the I-765 Form';
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
        return view('app.i765.create', compact('states', 'role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));

    }

    public function store(Request $request){
//        $request->validate();
        $i765 = new I765part1;
        $user = User::select('id')->where('email', Auth::user()->email)->first();
        $i765reg = $i765::create([
            'applying_for' => $request->applying_for,
            'legal_last_name' => $request->legal_last_name,
            'legal_first_name' => $request->legal_first_name,
            'legal_middle_name' => $request->legal_middle_name,
            'other_last_name_two' => $request->other_last_name_two,
            'other_first_name_two' => $request->other_first_name_two,
            'other_middle_name_two' => $request->other_middle_name_two,
            'other_last_name_three' => $request->other_last_name_three,
            'other_first_name_three' => $request->other_first_name_three,
            'other_middle_name_three' => $request->other_middle_name_three,
            'other_last_name_four' => $request->other_last_name_four,
            'other_first_name_four' => $request->other_first_name_four,
            'other_middle_name_four' => $request->other_middle_name_four,
            'mailing_care_name' => $request->mailing_care_name,
            'mailing_street_number' => $request->mailing_street_number,
            'mailing_apt_ste_flr' => $request->mailing_apt_ste_flr,
            'mailing_apt_ste_flr_desc' => $request->mailing_apt_ste_flr_desc,
            'mailing_city_town' => $request->mailing_city_town,
            'mailing_state' => $request->mailing_state,
            'mailing_zip_code' => $request->mailing_zip_code,
            'mailing_same_physical' => $request->mailing_same_physical,
            'physical_street_number' => $request->physical_street_number,
            'physical_apt_ste_flr' => $request->physical_apt_ste_flr,
            'physical_apt_ste_flr_desc' => $request->physical_apt_ste_flr_desc,
            'physical_city_town' => $request->physical_city_town,
            'physical_state' => $request->physical_state,
            'physical_zip_code' => $request->physical_zip_code,
            'other_alien_number' => $request->other_alien_number,
            'other_uscis_account_number' => $request->other_uscis_account_number,
            'other_gender' => $request->other_gender,
            'other_marital_status' => $request->other_marital_status,
            'prev_filed_form_i765' => $request->prev_filed_form_i765,
            'ssa_issued_card_you' => $request->ssa_issued_card_you,
            'ssn_number' => $request->ssn_number,
            'want_ssn_card' => $request->want_ssn_card,
            'auth_disclosure' => $request->auth_disclosure,
            'father_last_name' => $request->father_last_name,
            'father_first_name' => $request->father_first_name,
            'mother_last_name' => $request->mother_last_name,
            'mother_first_name' => $request->mother_first_name,
            'country_one' => $request->country_one,
            'country_two' => $request->country_two,
            'estado' => '1',
            'filingDate' => date('Y-m-d'),
            'user_id' => $user->id,
        ]);

        $i765part2 = new I765part2;
        $i765part2->birth_city_town_village = $request->birth_city_town_village;
        $i765part2->birth_state = $request->birth_state;
        $i765part2->birth_country = $request->birth_country;
        $i765part2->birth_date = $request->birth_date;
        $i765part2->arrival_record_number = $request->arrival_record_number;
        $i765part2->passport_number = $request->passport_number;
        $i765part2->travel_doc_number = $request->travel_doc_number;
        $i765part2->country_issued_passport = $request->country_issued_passport;
        $i765part2->expiration_date_passport = $request->expiration_date_passport;
        $i765part2->date_last_arrival_us = $request->date_last_arrival_us;
        $i765part2->place_last_arrival = $request->place_last_arrival;
        $i765part2->inmigration_status_arrival_us_last = $request->inmigration_status_arrival_us_last;
        $i765part2->current_inmigration_status = $request->current_inmigration_status;
        $i765part2->sevis_number = $request->sevis_number;
        $i765part2->category_0 = $request->category_0;
        $i765part2->category_1 = $request->category_1;
        $i765part2->category_2 = $request->category_2;
        $i765part2->degree = $request->degree;
        $i765part2->employer_name_e_verify = $request->employer_name_e_verify;
        $i765part2->employer_company_id_e_verify = $request->employer_company_id_e_verify;
        $i765part2->receipt_number_h1b = $request->receipt_number_h1b;
        $i765part2->ever_been_arrested_one = $request->ever_been_arrested_one;
        $i765part2->receipt_number_i797 = $request->receipt_number_i797;
        $i765part2->ever_been_arrested_two = $request->ever_been_arrested_two;
        $i765part2->can_read_understand_english = $request->can_read_understand_english;
        if($request->can_read_understand_english == "yes"){$i765part2->interpreter_language = "";} else {$i765part2->interpreter_language = $request->interpreter_language;}
        $i765part2->preparer_prepared = $request->preparer_prepared;
        $i765part2->preparer_name = $request->preparer_name;
        $i765part2->applicant_daytime_number = $request->applicant_daytime_number;
        $i765part2->applicant_phone_number = $request->applicant_phone_number;
        $i765part2->applicant_email = $request->applicant_email;
        $i765part2->salvadorian_guatemalan = $request->salvadorian_guatemalan;
        $i765part2->idPart1 = $i765reg->id;
        $i765part2->save();

        $i765part3 = new I765part3;
        $i765part3->interpreter_last_name = $request->interpreter_last_name;
        $i765part3->interpreter_first_name = $request->interpreter_first_name;
        $i765part3->interpreter_organization_name = $request->interpreter_organization_name;
        $i765part3->interpreter_mailing_street_number = $request->interpreter_mailing_street_number;
        $i765part3->interpreter_mailing_apt_ste_flr = $request->interpreter_mailing_apt_ste_flr;
        $i765part3->interpreter_mailing_apt_ste_flr_desc = $request->interpreter_mailing_apt_ste_flr_desc;
        $i765part3->interpreter_mailing_city_town = $request->interpreter_mailing_city_town;
        $i765part3->interpreter_mailing_state = $request->interpreter_mailing_state;
        $i765part3->interpreter_mailing_zip_code = $request->interpreter_mailing_zip_code;
        $i765part3->interpreter_mailing_province = $request->interpreter_mailing_province;
        $i765part3->interpreter_mailing_postal_code = $request->interpreter_mailing_postal_code;
        $i765part3->interpreter_mailing_country = $request->interpreter_mailing_country;
        $i765part3->interpreter_daytime_number = $request->interpreter_daytime_number;
        $i765part3->interpreter_mobile_number = $request->interpreter_phone_number;
        $i765part3->interpreter_email = $request->interpreter_email;
        $i765part3->interpreter_cert_language = $request->interpreter_cert_language;
        $i765part3->preparer_last_name = $request->preparer_last_name;
        $i765part3->preparer_first_name = $request->preparer_first_name;
        $i765part3->preparer_organization_name = $request->preparer_organization_name;
        $i765part3->preparer_mailing_street_number = $request->preparer_mailing_street_number;
        $i765part3->preparer_mailing_apt_ste_flr = $request->preparer_mailing_apt_ste_flr;
        $i765part3->preparer_mailing_apt_ste_flr_desc = $request->preparer_mailing_apt_ste_flr_desc;
        $i765part3->preparer_mailing_city_town = $request->preparer_mailing_city_town;
        $i765part3->preparer_mailing_state = $request->preparer_mailing_state;
        $i765part3->preparer_mailing_zip_code = $request->preparer_mailing_zip_code;
        $i765part3->preparer_mailing_province = $request->preparer_mailing_province;
        $i765part3->preparer_mailing_postal_code = $request->preparer_mailing_postal_code;
        $i765part3->preparer_mailing_country = $request->preparer_mailing_country;
        $i765part3->preparer_daytime_number = $request->preparer_daytime_number;
        $i765part3->preparer_mobile_number = $request->preparer_mobile_number;
        $i765part3->preparer_email = $request->preparer_email;
        $i765part3->not_attorney_accredited = $request->not_attorney_accredited;
        $i765part3->attorney_accredited = $request->attorney_accredited;
        $i765part3->extends = $request->extends;
        $i765part3->idPart1 = $i765reg->id;
        $i765part3->save();

        $i765part4 = new I765part4;
        $i765part4->extra_last_name = $request->extra_last_name;
        $i765part4->extra_first_name = $request->extra_first_name;
        $i765part4->extra_middle_name = $request->extra_middle_name;
        $i765part4->extra_alien_number = $request->extra_alien_number;
        $i765part4->extra_page_number_one = $request->extra_page_number_one;
        $i765part4->extra_part_number_one = $request->extra_part_number_one;
        $i765part4->extra_item_number_one = $request->extra_item_number_one;
        $i765part4->extra_desc_one = $request->extra_desc_one;
        $i765part4->extra_page_number_two = $request->extra_page_number_two;
        $i765part4->extra_part_number_two = $request->extra_part_number_two;
        $i765part4->extra_item_number_two = $request->extra_item_number_two;
        $i765part4->extra_desc_two = $request->extra_desc_two;
        $i765part4->extra_page_number_three = $request->extra_page_number_three;
        $i765part4->extra_part_number_three = $request->extra_part_number_three;
        $i765part4->extra_item_number_three = $request->extra_item_number_three;
        $i765part4->extra_desc_three = $request->extra_desc_three;
        $i765part4->extra_page_number_four = $request->extra_page_number_four;
        $i765part4->extra_part_number_four = $request->extra_part_number_four;
        $i765part4->extra_item_number_four = $request->extra_item_number_four;
        $i765part4->extra_desc_four = $request->extra_desc_four;
        $i765part4->extra_page_number_five = $request->extra_page_number_five;
        $i765part4->extra_part_number_five = $request->extra_part_number_five;
        $i765part4->extra_item_number_five = $request->extra_item_number_five;
        $i765part4->extra_desc_five = $request->extra_desc_five;
        $i765part4->idPart1 = $i765reg->id;
        $i765part4->save();

        $pivot = new Form_User;
        $pivot->form_name = "I-765";
        $pivot->table = "i765_part1";
        $pivot->user_id = $user->id;
        $pivot->form_id = $i765reg->id;
        $pivot->save();

        session()->flash('msg_str', 'success_msg');
        return redirect()->route('i765.index');
    }

    public function edit($idForm){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'I-765';
        $page_description = 'To Edit the I-765 Form';
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
        $formData = I765part1::where('id', $idForm)->first();
        $formData2 = I765part2::where('idPart1', $idForm)->first();
        $formData3 = I765part3::where('idPart1', $idForm)->first();
        $formData4 = I765part4::where('idPart1', $idForm)->first();
        return view('app.i765.edit', compact('formData', 'formData2', 'formData3', 'formData4', 'states', 'role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));

    }

    public function update(Request $request, $idForm){
        $i765 = I765part1::findOrFail($idForm);
//        $user = User::select('id')->where('email', Auth::user()->email)->first();
        $i765->applying_for = $request->applying_for;
        $i765->legal_last_name = $request->legal_last_name;
        $i765->legal_first_name = $request->legal_first_name;
        $i765->legal_middle_name = $request->legal_middle_name;
        $i765->other_last_name_two = $request->other_last_name_two;
        $i765->other_first_name_two = $request->other_first_name_two;
        $i765->other_middle_name_two = $request->other_middle_name_two;
        $i765->other_last_name_three = $request->other_last_name_three;
        $i765->other_first_name_three = $request->other_first_name_three;
        $i765->other_middle_name_three = $request->other_middle_name_three;
        $i765->other_last_name_four = $request->other_last_name_four;
        $i765->other_first_name_four = $request->other_first_name_four;
        $i765->other_middle_name_four = $request->other_middle_name_four;
        $i765->mailing_care_name = $request->mailing_care_name;
        $i765->mailing_street_number = $request->mailing_street_number;
        $i765->mailing_apt_ste_flr = $request->mailing_apt_ste_flr;
        $i765->mailing_apt_ste_flr_desc = $request->mailing_apt_ste_flr_desc;
        $i765->mailing_city_town = $request->mailing_city_town;
        $i765->mailing_state = $request->mailing_state;
        $i765->mailing_zip_code = $request->mailing_zip_code;
        $i765->mailing_same_physical = $request->mailing_same_physical;
        $i765->physical_street_number = $request->physical_street_number;
        $i765->physical_apt_ste_flr = $request->physical_apt_ste_flr;
        $i765->physical_apt_ste_flr_desc = $request->physical_apt_ste_flr_desc;
        $i765->physical_city_town = $request->physical_city_town;
        $i765->physical_state = $request->physical_state;
        $i765->physical_zip_code = $request->physical_zip_code;
        $i765->other_alien_number = $request->other_alien_number;
        $i765->other_uscis_account_number = $request->other_uscis_account_number;
        $i765->other_gender = $request->other_gender;
        $i765->other_marital_status = $request->other_marital_status;
        $i765->prev_filed_form_i765 = $request->prev_filed_form_i765;
        $i765->ssa_issued_card_you = $request->ssa_issued_card_you;
        $i765->ssn_number = $request->ssn_number;
        $i765->want_ssn_card = $request->want_ssn_card;
        $i765->auth_disclosure = $request->auth_disclosure;
        $i765->father_last_name = $request->father_last_name;
        $i765->father_first_name = $request->father_first_name;
        $i765->mother_last_name = $request->mother_last_name;
        $i765->mother_first_name = $request->mother_first_name;
        $i765->country_one = $request->country_one;
        $i765->country_two = $request->country_two;
        $i765->estado = "1";
        $i765->save();

        $i765part2 = I765part2::where('idPart1', $idForm)->first();
        $i765part2->birth_city_town_village = $request->birth_city_town_village;
        $i765part2->birth_state = $request->birth_state;
        $i765part2->birth_country = $request->birth_country;
        $i765part2->birth_date = $request->birth_date;
        $i765part2->arrival_record_number = $request->arrival_record_number;
        $i765part2->passport_number = $request->passport_number;
        $i765part2->travel_doc_number = $request->travel_doc_number;
        $i765part2->country_issued_passport = $request->country_issued_passport;
        $i765part2->expiration_date_passport = $request->expiration_date_passport;
        $i765part2->date_last_arrival_us = $request->date_last_arrival_us;
        $i765part2->place_last_arrival = $request->place_last_arrival;
        $i765part2->inmigration_status_arrival_us_last = $request->inmigration_status_arrival_us_last;
        $i765part2->current_inmigration_status = $request->current_inmigration_status;
        $i765part2->sevis_number = $request->sevis_number;
        $i765part2->category_0 = $request->category_0;
        $i765part2->category_1 = $request->category_1;
        $i765part2->category_2 = $request->category_2;
        $i765part2->degree = $request->degree;
        $i765part2->employer_name_e_verify = $request->employer_name_e_verify;
        $i765part2->employer_company_id_e_verify = $request->employer_company_id_e_verify;
        $i765part2->receipt_number_h1b = $request->receipt_number_h1b;
        $i765part2->ever_been_arrested_one = $request->ever_been_arrested_one;
        $i765part2->receipt_number_i797 = $request->receipt_number_i797;
        $i765part2->ever_been_arrested_two = $request->ever_been_arrested_two;
        $i765part2->can_read_understand_english = $request->can_read_understand_english;
        if($request->can_read_understand_english == "yes"){$i765part2->interpreter_language = "";} else {$i765part2->interpreter_language = $request->interpreter_language;}
        $i765part2->preparer_prepared = $request->preparer_prepared;
        $i765part2->preparer_name = $request->preparer_name;
        $i765part2->applicant_daytime_number = $request->applicant_daytime_number;
        $i765part2->applicant_phone_number = $request->applicant_phone_number;
        $i765part2->applicant_email = $request->applicant_email;
        $i765part2->salvadorian_guatemalan = $request->salvadorian_guatemalan;
        $i765part2->save();

        $i765part3 = I765part3::where('idPart1', $idForm)->first();
        $i765part3->interpreter_last_name = $request->interpreter_last_name;
        $i765part3->interpreter_first_name = $request->interpreter_first_name;
        $i765part3->interpreter_organization_name = $request->interpreter_organization_name;
        $i765part3->interpreter_mailing_street_number = $request->interpreter_mailing_street_number;
        $i765part3->interpreter_mailing_apt_ste_flr = $request->interpreter_mailing_apt_ste_flr;
        $i765part3->interpreter_mailing_apt_ste_flr_desc = $request->interpreter_mailing_apt_ste_flr_desc;
        $i765part3->interpreter_mailing_city_town = $request->interpreter_mailing_city_town;
        $i765part3->interpreter_mailing_state = $request->interpreter_mailing_state;
        $i765part3->interpreter_mailing_zip_code = $request->interpreter_mailing_zip_code;
        $i765part3->interpreter_mailing_province = $request->interpreter_mailing_province;
        $i765part3->interpreter_mailing_postal_code = $request->interpreter_mailing_postal_code;
        $i765part3->interpreter_mailing_country = $request->interpreter_mailing_country;
        $i765part3->interpreter_daytime_number = $request->interpreter_daytime_number;
        $i765part3->interpreter_mobile_number = $request->interpreter_phone_number;
        $i765part3->interpreter_email = $request->interpreter_email;
        $i765part3->interpreter_cert_language = $request->interpreter_cert_language;
        $i765part3->preparer_last_name = $request->preparer_last_name;
        $i765part3->preparer_first_name = $request->preparer_first_name;
        $i765part3->preparer_organization_name = $request->preparer_organization_name;
        $i765part3->preparer_mailing_street_number = $request->preparer_mailing_street_number;
        $i765part3->preparer_mailing_apt_ste_flr = $request->preparer_mailing_apt_ste_flr;
        $i765part3->preparer_mailing_apt_ste_flr_desc = $request->preparer_mailing_apt_ste_flr_desc;
        $i765part3->preparer_mailing_city_town = $request->preparer_mailing_city_town;
        $i765part3->preparer_mailing_state = $request->preparer_mailing_state;
        $i765part3->preparer_mailing_zip_code = $request->preparer_mailing_zip_code;
        $i765part3->preparer_mailing_province = $request->preparer_mailing_province;
        $i765part3->preparer_mailing_postal_code = $request->preparer_mailing_postal_code;
        $i765part3->preparer_mailing_country = $request->preparer_mailing_country;
        $i765part3->preparer_daytime_number = $request->preparer_daytime_number;
        $i765part3->preparer_mobile_number = $request->preparer_mobile_number;
        $i765part3->preparer_email = $request->preparer_email;
        $i765part3->not_attorney_accredited = $request->not_attorney_accredited;
        $i765part3->attorney_accredited = $request->attorney_accredited;
        $i765part3->extends = $request->extends;
        $i765part3->save();

        $i765part4 = I765part4::where('idPart1', $idForm)->first();
        $i765part4->extra_last_name = $request->extra_last_name;
        $i765part4->extra_first_name = $request->extra_first_name;
        $i765part4->extra_middle_name = $request->extra_middle_name;
        $i765part4->extra_alien_number = $request->extra_alien_number;
        $i765part4->extra_page_number_one = $request->extra_page_number_one;
        $i765part4->extra_part_number_one = $request->extra_part_number_one;
        $i765part4->extra_item_number_one = $request->extra_item_number_one;
        $i765part4->extra_desc_one = $request->extra_desc_one;
        $i765part4->extra_page_number_two = $request->extra_page_number_two;
        $i765part4->extra_part_number_two = $request->extra_part_number_two;
        $i765part4->extra_item_number_two = $request->extra_item_number_two;
        $i765part4->extra_desc_two = $request->extra_desc_two;
        $i765part4->extra_page_number_three = $request->extra_page_number_three;
        $i765part4->extra_part_number_three = $request->extra_part_number_three;
        $i765part4->extra_item_number_three = $request->extra_item_number_three;
        $i765part4->extra_desc_three = $request->extra_desc_three;
        $i765part4->extra_page_number_four = $request->extra_page_number_four;
        $i765part4->extra_part_number_four = $request->extra_part_number_four;
        $i765part4->extra_item_number_four = $request->extra_item_number_four;
        $i765part4->extra_desc_four = $request->extra_desc_four;
        $i765part4->extra_page_number_five = $request->extra_page_number_five;
        $i765part4->extra_part_number_five = $request->extra_part_number_five;
        $i765part4->extra_item_number_five = $request->extra_item_number_five;
        $i765part4->extra_desc_five = $request->extra_desc_five;
        $i765part4->save();

        session()->flash('msg_str', 'success_msg_chng');
        return redirect()->route('i765.index');
    }

    public function destroy($idForm){
        $form = I765part1::find($idForm);
        $form->delete();
        $user = User::select('id')->where('email', Auth::user()->email)->first();
        Form_User::where('user_id', $user->id)->where('form_id', $idForm)->where('table', 'i765_part1')->delete();
        session()->flash('msg_dlt', 'success_msg_dlt');
        return redirect()->route('i765.index');
    }


}
