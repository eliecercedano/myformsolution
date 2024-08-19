<?php

namespace App\Http\Controllers;

use App\Models\Form_User;
use App\Models\i130;
use App\Models\i130Part2;
use App\Models\i130Part3;
use App\Models\i130Part4;
use App\Models\i130Part5;
use App\Models\i130Part6;
use App\Models\i130Part7;
use App\Models\i130Part8;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class I130Controller extends Controller
{
    public function index(){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'I-130';
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
        $filledForms = i130::select(
            'user_first_name',
            'user_last_name',
            'filingDate',
            'id',
            'estado',
            )
        ->where('user_id', $userData->id)
        ->get();

        return view('app.i130.index', compact('filledForms', 'role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));

    }

    public function create(){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'I-130';
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
        return view('app.i130.create', compact('states', 'role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));

    }

    public function store(Request $request){
        //$request->validate();
        $i130 = new i130;
        $user = User::select('id')->where('email', Auth::user()->email)->first();
        $part1 = $i130->create([
            'petition' => $request->petition,
            'petition_child_parent' => $request->petition_child_parent,
            'brother_sister' => $request->brother_sister,
            'adoption_status_citizenship' => $request->adoption_status_citizenship,
            'a_number' => $request->a_number,
            'uscis_account_number' => $request->uscis_account_number,
            'us_social_security_number' => $request->us_social_security_number,
            'user_last_name' => $request->user_last_name,
            'user_first_name' => $request->user_first_name,
            'user_middle_name' => $request->user_middle_name,
            'user_other_last_name' => $request->user_other_last_name,
            'user_other_first_name' => $request->user_other_first_name,
            'user_other_middle_name' => $request->user_other_middle_name,
            'city_town_village_birth' => $request->city_town_village_birth,
            'country_birth' => $request->country_birth,
            'date_birth' => $request->date_birth,
            'sex' => $request->sex,
            'mailing_care_of_name' => $request->mailing_care_of_name,
            'mailing_street_number' => $request->mailing_street_number,
            'mailing_apt_ste_flr' => $request->mailing_apt_ste_flr,
            'mailing_apt_ste_flr_description' => $request->mailing_apt_ste_flr_description,
            'mailing_city_town' => $request->mailing_city_town,
            'mailing_state' => $request->mailing_state,
            'mailing_zip_code' => $request->mailing_zip_code,
            'mailing_province' => $request->mailing_province,
            'mailing_postal_code' => $request->mailing_postal_code,
            'mailing_country' => $request->mailing_country,
            'mailing_address_same_physical' => $request->mailing_address_same_physical,
            'physical_add_one_street_number' => $request->physical_add_one_street_number,
            'physical_add_one_apt_ste_flr' => $request->physical_add_one_apt_ste_flr,
            'physical_add_one_apt_ste_flr_desc' => $request->physical_add_one_apt_ste_flr_desc,
            'physical_add_one_city_town' => $request->physical_add_one_city_town,
            'physical_add_one_state' => $request->physical_add_one_state,
            'physical_add_one_zip_code' => $request->physical_add_one_zip_code,
            'physical_add_one_province' => $request->physical_add_one_province,
            'physical_add_one_postal_code' => $request->physical_add_one_postal_code,
            'physical_add_one_country' => $request->physical_add_one_country,
            'physical_add_one_from_date' => $request->physical_add_one_from_date,
            'physical_add_two_street_number' => $request->physical_add_two_street_number,
            'physical_add_two_apt_ste_flr' => $request->physical_add_two_apt_ste_flr,
            'physical_add_two_apt_ste_flr_desc' => $request->physical_add_two_apt_ste_flr_desc,
            'physical_add_two_city_town' => $request->physical_add_two_city_town,
            'physical_add_two_state' => $request->physical_add_two_state,
            'physical_add_two_zip_code' => $request->physical_add_two_zip_code,
            'physical_add_two_province' => $request->physical_add_two_province,
            'physical_add_two_postal_code' => $request->physical_add_two_postal_code,
            'physical_add_two_country' => $request->physical_add_two_country,
            'physical_add_two_from_date' => $request->physical_add_two_from_date,
            'physical_add_two_to_date' => $request->physical_add_two_to_date,
            'times_married' => $request->times_married,
            'current_marital_status' => $request->current_marital_status,
            'date_current_marriage' => $request->date_current_marriage,
            'marriage_current_city_town' => $request->marriage_current_city_town,
            'marriage_current_state' => $request->marriage_current_state,
            'marriage_current_province' => $request->marriage_current_province,
            'marriage_current_country' => $request->marriage_current_country,
            'spouse_one_last_name' => $request->spouse_one_last_name,
            'spouse_one_first_name' => $request->spouse_one_first_name,
            'spouse_one_middle_name' => $request->spouse_one_middle_name,
            'spouse_one_date_marriage_ended' => $request->spouse_one_date_marriage_ended,
            'spouse_two_last_name' => $request->spouse_two_last_name,
            'spouse_two_first_name' => $request->spouse_two_first_name,
            'spouse_two_middle_name' => $request->spouse_two_middle_name,
            'spouse_two_date_marriage_ended' => $request->spouse_two_date_marriage_ended,
            'parent_one_last_name' => $request->parent_one_last_name,
            'parent_one_first_name' => $request->parent_one_first_name,
            'parent_one_middle_name' => $request->parent_one_middle_name,
            'parent_one_date_birth' => $request->parent_one_date_birth,
            'parent_one_sex' => $request->parent_one_sex, 
            'parent_one_country_birth' => $request->parent_one_country_birth,
            'parent_one_city_town_village' => $request->parent_one_city_town_village,
            'parent_one_country_residence' => $request->parent_one_country_residence,
            'parent_two_last_name' => $request->parent_two_last_name,
            'parent_two_first_name' => $request->parent_two_first_name,
            'parent_two_middle_name' => $request->parent_two_middle_name,
            'parent_two_date_birth' => $request->parent_two_date_birth,
            'parent_two_sex' => $request->parent_two_sex,
            'parent_two_country_birth' => $request->parent_two_country_birth,
            'parent_two_city_town_village' => $request->parent_two_city_town_village,
            'parent_two_country_residence' => $request->parent_two_country_residence,
            'citizen_permanent' => $request->citizen_resident,
            'citizenship_acquired' => $request->citizenship_acquired,
            'certificates' => $request->certificates,
            'certificate_number' => $request->certificate_number,
            'place_issuance' => $request->place_issuance,
            'date_issuance' => $request->date_issuance, 
            'user_id' => $user->id,
            'filingDate' => date('Y-m-d'),
            'estado' => "1",    
    
        ]);
        //$part1 = $i130->save();

        $i130Part2 = new i130Part2;
        $i130Part2->class_admission = $request->class_admission;
        $i130Part2->date_of_admission = $request->date_of_admission;
        $i130Part2->admission_city_town = $request->admission_city_town;
        $i130Part2->admission_state = $request->admission_state;
        $i130Part2->gain_through_marriage = $request->gain_through_marriage;
        $i130Part2->currently_working = $request->currently_working;
        $i130Part2->employer_one_name_company = $request->employer_one_name_company;
        $i130Part2->employer_one_street_number = $request->employer_one_street_number;
        $i130Part2->employer_one_apt_ste_flr = $request->employer_one_apt_ste_flr;
        $i130Part2->employer_one_apt_ste_flr_desc = $request->employer_one_apt_ste_flr_desc;
        $i130Part2->employer_one_city_town = $request->employer_one_city_town;
        $i130Part2->employer_one_state = $request->employer_one_state;
        $i130Part2->employer_one_zip_code = $request->employer_one_zip_code;
        $i130Part2->employer_one_province = $request->employer_one_province;
        $i130Part2->employer_one_postal_code = $request->employer_one_postal_code;
        $i130Part2->employer_one_country = $request->employer_one_country;
        $i130Part2->employer_one_occupation = $request->employer_one_occupation;
        $i130Part2->employer_one_date_from = $request->employer_one_date_from;
        $i130Part2->employer_two_name_company = $request->employer_two_name_company;
        $i130Part2->employer_two_street_number = $request->employer_two_street_number;
        $i130Part2->employer_two_apt_ste_flr  = $request->employer_two_apt_ste_flr ;
        $i130Part2->employer_two_apt_ste_flr_desc = $request->employer_two_apt_ste_flr_desc;
        $i130Part2->employer_two_city_town = $request->employer_two_city_town;
        $i130Part2->employer_two_state = $request->employer_two_state;
        $i130Part2->employer_two_zip_code = $request->employer_two_zip_code;
        $i130Part2->employer_two_province = $request->employer_two_province;
        $i130Part2->employer_two_postal_code = $request->employer_two_postal_code;
        $i130Part2->employer_two_country = $request->employer_two_country;
        $i130Part2->employer_two_occupation = $request->employer_two_occupation;
        $i130Part2->employer_two_date_from = $request->employer_two_date_from;
        $i130Part2->employer_two_date_to = $request->employer_two_date_to;
        $i130Part2->ethnicity = $request->ethnicity;
        $i130Part2->race_white = $request->race_white;
        $i130Part2->race_asian = $request->race_asian;
        $i130Part2->race_black = $request->race_black;
        $i130Part2->race_indian_alaska = $request->race_indian_alaska;
        $i130Part2->race_hawaiian_islander = $request->race_hawaiian_islander;
        $i130Part2->height_feet = $request->height_feet;
        $i130Part2->height_inches = $request->height_inches;
        $i130Part2->weight_pounds_0 = $request->weight_pounds_0;
        $i130Part2->weight_pounds_1 = $request->weight_pounds_1;
        $i130Part2->weight_pounds_2 = $request->weight_pounds_2;
        $i130Part2->eye_color = $request->eye_color;
        $i130Part2->id_part_1 = $part1->id;

        $i130Part2->save();

        $i130Part3 = new i130Part3;
        $i130Part3->hair_color = $request->hair_color;
        $i130Part3->beneficiary_alien_number = $request->beneficiary_alien_number;
        $i130Part3->beneficiary_uscis_number = $request->beneficiary_uscis_number;
        $i130Part3->beneficiary_social_sec_number = $request->beneficiary_social_sec_number;
        $i130Part3->beneficiary_last_name = $request->beneficiary_last_name;
        $i130Part3->beneficiary_first_name = $request->beneficiary_first_name;
        $i130Part3->beneficiary_middle_name = $request->beneficiary_middle_name;
        $i130Part3->other_benef_last_name = $request->other_benef_last_name;
        $i130Part3->other_benef_first_name = $request->other_benef_first_name;
        $i130Part3->other_benef_middle_name = $request->other_benef_middle_name;
        $i130Part3->beneficiary_city_town_village = $request->beneficiary_city_town_village;
        $i130Part3->beneficiary_country_birth = $request->beneficiary_country_birth;
        $i130Part3->beneficiary_date_birth = $request->beneficiary_date_birth;
        $i130Part3->beneficiary_sex = $request->beneficiary_sex;
        $i130Part3->beneficiary_filled_for_petition = $request->beneficiary_filled_for_petition;
        $i130Part3->benef_phys_add_street_number = $request->benef_phys_add_street_number;
        $i130Part3->benef_phys_add_apt_ste_flr = $request->benef_phys_add_apt_ste_flr;
        $i130Part3->benef_phys_add_apt_ste_flr_desc = $request->benef_phys_add_apt_ste_flr_desc;
        $i130Part3->benef_phys_add_city_town = $request->benef_phys_add_city_town;
        $i130Part3->benef_phys_add_state = $request->benef_phys_add_state;
        $i130Part3->benef_phys_add_zip_code = $request->benef_phys_add_zip_code;
        $i130Part3->benef_phys_add_province = $request->benef_phys_add_province;
        $i130Part3->benef_phys_postal_code = $request->benef_phys_postal_code;
        $i130Part3->benef_phys_country = $request->benef_phys_country;
        $i130Part3->benef_other_street_number = $request->benef_other_street_number;
        $i130Part3->benef_other_apt_ste_flr = $request->benef_other_apt_ste_flr;
        $i130Part3->benef_other_apt_ste_flr_desc = $request->benef_other_apt_ste_flr_desc;
        $i130Part3->benef_other_city_town = $request->benef_other_city_town;
        $i130Part3->benef_other_state = $request->benef_other_state;
        $i130Part3->benef_other_zip_code = $request->benef_other_zip_code;
        $i130Part3->out_us_street_number = $request->out_us_street_number;
        $i130Part3->out_us_apt_ste_flr = $request->out_us_apt_ste_flr;
        $i130Part3->out_us_apt_ste_flr_desc = $request->out_us_apt_ste_flr_desc;
        $i130Part3->out_us_city_town = $request->out_us_city_town;
        $i130Part3->out_us_province = $request->out_us_province;
        $i130Part3->out_us_postal_code = $request->out_us_postal_code;
        $i130Part3->out_us_country = $request->out_us_country;
        $i130Part3->out_us_tel_number = $request->out_us_tel_number;
        $i130Part3->id_part_1 = $part1->id;

        $i130Part3->save();

        $i130Part4 = new i130Part4();
        $i130Part4->out_us_mobile_number = $request->out_us_mobile_number;
        $i130Part4->out_us_email = $request->out_us_email;
        $i130Part4->benef_times_married = $request->benef_times_married;
        $i130Part4->benef_marital_status = $request->benef_marital_status;
        $i130Part4->benef_marital_date = $request->benef_marital_date;
        $i130Part4->benef_current_marriage_city_town = $request->benef_current_marriage_city_town;
        $i130Part4->benef_current_state = $request->benef_current_state;
        $i130Part4->benef_current_province = $request->benef_current_province;
        $i130Part4->benef_current_country = $request->benef_current_country;
        $i130Part4->benef_spouse_one_last_name = $request->benef_spouse_one_last_name;
        $i130Part4->benef_spouse_one_first_name = $request->benef_spouse_one_first_name;
        $i130Part4->benef_spouse_one_middle_name = $request->benef_spouse_one_middle_name;
        $i130Part4->benef_spouse_one_date_marriage_ended = $request->benef_spouse_one_date_marriage_ended;
        $i130Part4->benef_spouse_two_last_name = $request->benef_spouse_two_last_name;
        $i130Part4->benef_spouse_two_first_name = $request->benef_spouse_two_first_name;
        $i130Part4->benef_spouse_two_middle_name = $request->benef_spouse_two_middle_name;
        $i130Part4->benef_spouse_two_date_marriage_ended = $request->benef_spouse_two_date_marriage_ended;
        $i130Part4->benef_family_one_last_name = $request->benef_family_one_last_name;
        $i130Part4->benef_family_one_first_name = $request->benef_family_one_first_name;
        $i130Part4->benef_family_one_middle_name = $request->benef_family_one_middle_name;
        $i130Part4->benef_family_one_relationship = $request->benef_family_one_relationship;
        $i130Part4->benef_family_one_date_of_birth = $request->benef_family_one_date_of_birth;
        $i130Part4->benef_family_one_country_of_birth = $request->benef_family_one_country_of_birth;
        $i130Part4->benef_family_two_last_name = $request->benef_family_two_last_name;
        $i130Part4->benef_family_two_first_name = $request->benef_family_two_first_name;
        $i130Part4->benef_family_two_middle_name = $request->benef_family_two_middle_name;
        $i130Part4->benef_family_two_relationship = $request->benef_family_two_relationship;
        $i130Part4->benef_family_two_date_of_birth = $request->benef_family_two_date_of_birth;
        $i130Part4->benef_family_two_country_of_birth = $request->benef_family_two_country_of_birth;
        $i130Part4->benef_family_three_last_name = $request->benef_family_three_last_name;
        $i130Part4->benef_family_three_first_name = $request->benef_family_three_first_name;
        $i130Part4->benef_family_three_middle_name = $request->benef_family_three_middle_name;
        $i130Part4->benef_family_three_relationship = $request->benef_family_three_relationship;
        $i130Part4->benef_family_three_date_of_birth = $request->benef_family_three_date_of_birth;
        $i130Part4->benef_family_three_country_of_birth = $request->benef_family_three_country_of_birth;
        $i130Part4->id_part_1 = $part1->id;

        $i130Part4->save();

        $i130Part5 = new i130Part5();

        $i130Part5->benef_family_four_last_name = $request->benef_family_four_last_name;
        $i130Part5->benef_family_four_first_name = $request->benef_family_four_first_name;
        $i130Part5->benef_family_four_middle_name = $request->benef_family_four_middle_name;
        $i130Part5->benef_family_four_relationship = $request->benef_family_four_relationship;
        $i130Part5->benef_family_four_date_of_birth = $request->benef_family_four_date_of_birth;
        $i130Part5->benef_family_four_country_of_birth = $request->benef_family_four_country_of_birth;
        $i130Part5->benef_family_five_last_name = $request->benef_family_five_last_name;
        $i130Part5->benef_family_five_first_name = $request->benef_family_five_first_name;
        $i130Part5->benef_family_five_middle_name = $request->benef_family_five_middle_name;
        $i130Part5->benef_family_five_relationship = $request->benef_family_five_relationship;
        $i130Part5->benef_family_five_date_of_birth = $request->benef_family_five_date_of_birth;
        $i130Part5->benef_family_five_country_of_birth = $request->benef_family_five_country_of_birth;
        $i130Part5->benef_ever_us = $request->benef_ever_us;
        $i130Part5->benef_class_admission = $request->benef_class_admission;
        $i130Part5->benef_form_i94_number = $request->benef_form_i94_number;
        $i130Part5->benef_date_arrival = $request->benef_date_arrival;
        $i130Part5->benef_date_expire = $request->benef_date_expire;
        $i130Part5->benef_passport_number = $request->benef_passport_number;
        $i130Part5->benef_travel_doc_number = $request->benef_travel_doc_number;
        $i130Part5->benef_country_issuance_passport = $request->benef_country_issuance_passport;
        $i130Part5->benef_expiration_passport = $request->benef_expiration_passport;
        $i130Part5->benef_employment_name_current_employer = $request->benef_employment_name_current_employer;
        $i130Part5->benef_employment_street_number = $request->benef_employment_street_number;
        $i130Part5->benef_employment_apt_ste_flr = $request->benef_employment_apt_ste_flr;
        $i130Part5->benef_employment_apt_ste_flr_desc = $request->benef_employment_apt_ste_flr_desc;
        $i130Part5->benef_employment_city_town = $request->benef_employment_city_town;
        $i130Part5->benef_employment_state = $request->benef_employment_state;
        $i130Part5->benef_employment_zip_code = $request->benef_employment_zip_code;
        $i130Part5->benef_employment_province = $request->benef_employment_province;
        $i130Part5->benef_employment_postal_code = $request->benef_employment_postal_code;
        $i130Part5->benef_employment_country = $request->benef_employment_country;
        $i130Part5->benef_employment_date_began = $request->benef_employment_date_began;
        $i130Part5->benef_other_inmigration_proceed = $request->benef_other_inmigration_proceed;
        $i130Part5->benef_type_proceed = $request->benef_type_proceed;
        $i130Part5->benef_proceed_city_town = $request->benef_proceed_city_town;
        $i130Part5->benef_proceed_state = $request->benef_proceed_state;
        $i130Part5->benef_proceed_date = $request->benef_proceed_date;
        $i130Part5->id_part_1 = $part1->id;

        $i130Part5->save();

        $i130Part6 = new i130Part6;

        $i130Part6->spouse_street_number = $request->spouse_street_number;
        $i130Part6->spouse_apt_ste_flr = $request->spouse_apt_ste_flr;
        $i130Part6->spouse_apt_ste_flr_desc = $request->spouse_apt_ste_flr_desc;
        $i130Part6->spouse_city_town = $request->spouse_city_town;
        $i130Part6->spouse_state = $request->spouse_state;
        $i130Part6->spouse_zip_code = $request->spouse_zip_code;
        $i130Part6->spouse_province = $request->spouse_province;
        $i130Part6->spouse_postal_code = $request->spouse_postal_code;
        $i130Part6->spouse_country = $request->spouse_country;
        $i130Part6->spouse_date_from = $request->spouse_date_from;
        $i130Part6->spouse_date_to = $request->spouse_date_to;
        $i130Part6->benef_us_adjust_city_town = $request->benef_us_adjust_city_town;
        $i130Part6->benef_us_adjust_state = $request->benef_us_adjust_state;
        $i130Part6->benef_us_visa_city_town = $request->benef_us_visa_city_town;
        $i130Part6->benef_us_visa_province = $request->benef_us_visa_province;
        $i130Part6->benef_us_visa_country = $request->benef_us_visa_country;
        $i130Part6->other_benef_alien_filled = $request->other_benef_alien_filled;
        $i130Part6->previous_benef_alien_last_name = $request->previous_benef_alien_last_name;
        $i130Part6->previous_benef_alien_first_name = $request->previous_benef_alien_first_name;
        $i130Part6->previous_benef_alien_middle_name = $request->previous_benef_alien_middle_name;
        $i130Part6->previous_benef_alien_city_town = $request->previous_benef_alien_city_town;
        $i130Part6->previous_benef_alien_state = $request->previous_benef_alien_state;
        $i130Part6->previous_benef_alien_date_filed = $request->previous_benef_alien_date_filed;
        $i130Part6->previous_benef_alien_result = $request->previous_benef_alien_result;
        $i130Part6->relative_one_last_name = $request->relative_one_last_name;
        $i130Part6->relative_one_first_name = $request->relative_one_first_name;
        $i130Part6->relative_one_middle_name = $request->relative_one_middle_name;
        $i130Part6->relative_one_relationship = $request->relative_one_relationship;
        $i130Part6->id_part_1 = $part1->id;

        $i130Part6->save();

        $i130Part7 = new i130Part7;

        $i130Part7->relative_two_last_name = $request->relative_two_last_name;
        $i130Part7->relative_two_first_name = $request->relative_two_first_name;
        $i130Part7->relative_two_middle_name = $request->relative_two_middle_name;
        $i130Part7->relative_two_relationship = $request->relative_two_relationship;
        $i130Part7->petitioner_read_english = $request->petitioner_read_english;
        $i130Part7->interpreter_read = $request->interpreter_read;
        $i130Part7->interpreter_language = $request->interpreter_language;
        $i130Part7->preparer_prepared = $request->preparer_prepared;
        $i130Part7->preparer_fullname = $request->preparer_fullname;
        $i130Part7->petitioner_tel_number = $request->petitioner_tel_number;
        $i130Part7->petitioner_mobile_number = $request->petitioner_mobile_number;
        $i130Part7->petitioner_email = $request->petitioner_email;
        $i130Part7->interpreter_last_name = $request->interpreter_last_name;
        $i130Part7->interpreter_first_name = $request->interpreter_first_name;
        $i130Part7->interpreter_organization_name = $request->interpreter_organization_name;
        $i130Part7->interpreter_street_number = $request->interpreter_street_number;
        $i130Part7->interpreter_apt_ste_flr = $request->interpreter_apt_ste_flr;
        $i130Part7->interpreter_apt_ste_flr_desc = $request->interpreter_apt_ste_flr_desc;
        $i130Part7->interpreter_city_town = $request->interpreter_city_town;
        $i130Part7->interpreter_state = $request->interpreter_state;
        $i130Part7->interpreter_zip_code = $request->interpreter_zip_code;
        $i130Part7->interpreter_province = $request->interpreter_province;
        $i130Part7->interpreter_postal_code = $request->interpreter_postal_code;
        $i130Part7->interpreter_country = $request->interpreter_country;
        $i130Part7->interpreter_tel_number = $request->interpreter_tel_number;
        $i130Part7->interpreter_mobile_number = $request->interpreter_mobile_number;
        $i130Part7->interpreter_email = $request->interpreter_email;
        $i130Part7->interpreter_language_certified = $request->interpreter_language_certified;
        $i130Part7->preparer_last_name = $request->preparer_last_name;
        $i130Part7->preparer_first_name = $request->preparer_first_name;
        $i130Part7->preparer_organization_name = $request->preparer_organization_name;
        $i130Part7->preparer_street_number = $request->preparer_street_number;
        $i130Part7->preparer_apt_ste_flr = $request->preparer_apt_ste_flr;
        $i130Part7->preparer_apt_ste_flr_desc = $request->preparer_apt_ste_flr_desc;
        $i130Part7->preparer_city_town = $request->preparer_city_town;
        $i130Part7->preparer_state = $request->preparer_state;
        $i130Part7->preparer_zip_code = $request->preparer_zip_code;
        $i130Part7->preparer_province = $request->preparer_province;
        $i130Part7->preparer_postal_code = $request->preparer_postal_code;
        $i130Part7->preparer_country = $request->preparer_country;
        $i130Part7->id_part_1 = $part1->id;

        $i130Part7->save();

        $i130Part8 = new i130Part8;

        $i130Part8->preparer_tel_number = $request->preparer_tel_number;
        $i130Part8->preparer_mobile_number = $request->preparer_mobile_number;
        $i130Part8->preparer_email_number = $request->preparer_email;
        $i130Part8->preparer_statement_1 = $request->preparer_statement_1;
        $i130Part8->preparer_statement_2 = $request->preparer_statement_2;
        $i130Part8->extends = $request->extends;
        $i130Part8->extra_info_last_name = $request->extra_info_last_name;
        $i130Part8->extra_info_first_name = $request->extra_info_first_name;
        $i130Part8->extra_info_middle_name = $request->extra_info_middle_name;
        $i130Part8->extra_info_a_number = $request->extra_info_a_number;
        $i130Part8->extra_info_page_number_1 = $request->extra_info_page_number_1;
        $i130Part8->extra_info_part_number_1 = $request->extra_info_part_number_1;
        $i130Part8->extra_info_item_number_1 = $request->extra_info_item_number_1;
        $i130Part8->extra_info_desc_1 = $request->extra_info_desc_1;
        $i130Part8->extra_info_page_number_2 = $request->extra_info_page_number_2;
        $i130Part8->extra_info_part_number_2 = $request->extra_info_part_number_2;
        $i130Part8->extra_info_item_number_2 = $request->extra_info_item_number_2;
        $i130Part8->extra_info_desc_2 = $request->extra_info_desc_2;
        $i130Part8->extra_info_page_number_3 = $request->extra_info_page_number_3;
        $i130Part8->extra_info_part_number_3 = $request->extra_info_part_number_3;
        $i130Part8->extra_info_item_number_3 = $request->extra_info_item_number_3;
        $i130Part8->extra_info_desc_3 = $request->extra_info_desc_3;
        $i130Part8->extra_info_page_number_4 = $request->extra_info_page_number_4;
        $i130Part8->extra_info_part_number_4 = $request->extra_info_part_number_4;
        $i130Part8->extra_info_item_number_4 = $request->extra_info_item_number_4;
        $i130Part8->extra_info_desc_4 = $request->extra_info_desc_4;
        $i130Part8->extra_info_page_number_5 = $request->extra_info_page_number_5;
        $i130Part8->extra_info_part_number_5 = $request->extra_info_part_number_5;
        $i130Part8->extra_info_item_number_5 = $request->extra_info_item_number_5;
        $i130Part8->extra_info_desc_5 = $request->extra_info_desc_5;
        $i130Part8->id_part_1 = $part1->id;

        $i130Part8->save();

        $pivot = new Form_User;
        $pivot->form_name = "I-130";
        $pivot->table = "i130s";
        $pivot->user_id = $user->id;
        $pivot->form_id = $part1->id;
        $pivot->save();
        session()->flash('msg_str', 'success_msg');
        return redirect()->route('i130.index');
    }

    public function edit($idForm){
        $uid = Session::get('uid');
        $user = app('firebase.auth')->getUser($uid);
        $page_title = 'I-130';
        $page_description = 'To Fill the I-130 Form';
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
        $formData = i130::where('id', $idForm)->first();
        $formData2 = i130Part2::where('id_part_1', $idForm)->first();
        $formData3 = i130Part3::where('id_part_1', $idForm)->first();
        $formData4 = i130Part4::where('id_part_1', $idForm)->first();
        $formData5 = i130Part5::where('id_part_1', $idForm)->first();
        $formData6 = i130Part6::where('id_part_1', $idForm)->first();
        $formData7 = i130Part7::where('id_part_1', $idForm)->first();
        $formData8 = i130Part8::where('id_part_1', $idForm)->first();
        return view('app.i130.edit', compact('formData', 'formData2', 'formData3', 'formData4', 'formData5', 'formData6', 'formData7', 'formData8', 'states', 'role', 'uid', 'user', 'page_title', 'page_description', 'logo', 'logoText', 'active', 'event_class', 'button_class', 'action'));
    }

    public function update(Request $request, $formId){
        $i130 = i130::find($formId);
        $i130->petition = $request->petition;
        $i130->petition_child_parent = $request->petition_child_parent;
        $i130->brother_sister = $request->brother_sister;
        $i130->adoption_status_citizenship = $request->adoption_status_citizenship;
        $i130->a_number = $request->a_number;
        $i130->uscis_account_number = $request->uscis_account_number;
        $i130->us_social_security_number = $request->us_social_security_number;
        $i130->user_last_name = $request->user_last_name;
        $i130->user_first_name = $request->user_first_name;
        $i130->user_middle_name = $request->user_middle_name;
        $i130->user_other_last_name = $request->user_other_last_name;
        $i130->user_other_first_name = $request->user_other_first_name;
        $i130->user_other_middle_name = $request->user_other_middle_name;
        $i130->city_town_village_birth = $request->city_town_village_birth;
        $i130->country_birth = $request->country_birth;
        $i130->date_birth = $request->date_birth;
        $i130->sex = $request->sex;
        $i130->mailing_care_of_name = $request->mailing_care_of_name;
        $i130->mailing_street_number = $request->mailing_street_number;
        $i130->mailing_apt_ste_flr = $request->mailing_apt_ste_flr;
        $i130->mailing_apt_ste_flr_description = $request->mailing_apt_ste_flr_description;
        $i130->mailing_city_town = $request->mailing_city_town;
        $i130->mailing_state = $request->mailing_state;
        $i130->mailing_zip_code = $request->mailing_zip_code;
        $i130->mailing_province = $request->mailing_province;
        $i130->mailing_postal_code = $request->mailing_postal_code;
        $i130->mailing_country = $request->mailing_country;
        $i130->mailing_address_same_physical = $request->mailing_address_same_physical;
        $i130->physical_add_one_street_number = $request->physical_add_one_street_number;
        $i130->physical_add_one_apt_ste_flr = $request->physical_add_one_apt_ste_flr;
        $i130->physical_add_one_apt_ste_flr_desc = $request->physical_add_one_apt_ste_flr_desc;
        $i130->physical_add_one_city_town = $request->physical_add_one_city_town;
        $i130->physical_add_one_state = $request->physical_add_one_state;
        $i130->physical_add_one_zip_code = $request->physical_add_one_zip_code;
        $i130->physical_add_one_province = $request->physical_add_one_province;
        $i130->physical_add_one_postal_code = $request->physical_add_one_postal_code;
        $i130->physical_add_one_country = $request->physical_add_one_country;
        $i130->physical_add_one_from_date = $request->physical_add_one_from_date;
        $i130->physical_add_two_street_number = $request->physical_add_two_street_number;
        $i130->physical_add_two_apt_ste_flr = $request->physical_add_two_apt_ste_flr;
        $i130->physical_add_two_apt_ste_flr_desc = $request->physical_add_two_apt_ste_flr_desc;
        $i130->physical_add_two_city_town = $request->physical_add_two_city_town;
        $i130->physical_add_two_state = $request->physical_add_two_state;
        $i130->physical_add_two_zip_code = $request->physical_add_two_zip_code;
        $i130->physical_add_two_province = $request->physical_add_two_province;
        $i130->physical_add_two_postal_code = $request->physical_add_two_postal_code;
        $i130->physical_add_two_country = $request->physical_add_two_country;
        $i130->physical_add_two_from_date = $request->physical_add_two_from_date;
        $i130->physical_add_two_to_date = $request->physical_add_two_to_date;
        $i130->times_married = $request->times_married;
        $i130->current_marital_status = $request->current_marital_status;
        $i130->date_current_marriage = $request->date_current_marriage;
        $i130->marriage_current_city_town = $request->marriage_current_city_town;
        $i130->marriage_current_state = $request->marriage_current_state;
        $i130->marriage_current_province = $request->marriage_current_province;
        $i130->marriage_current_country = $request->marriage_current_country;
        $i130->spouse_one_last_name = $request->spouse_one_last_name;
        $i130->spouse_one_first_name = $request->spouse_one_first_name;
        $i130->spouse_one_middle_name = $request->spouse_one_middle_name;
        $i130->spouse_one_date_marriage_ended = $request->spouse_one_date_marriage_ended;
        $i130->spouse_two_last_name = $request->spouse_two_last_name;
        $i130->spouse_two_first_name = $request->spouse_two_first_name;
        $i130->spouse_two_middle_name = $request->spouse_two_middle_name;
        $i130->spouse_two_date_marriage_ended = $request->spouse_two_date_marriage_ended;
        $i130->parent_one_last_name = $request->parent_one_last_name;
        $i130->parent_one_first_name = $request->parent_one_first_name;
        $i130->parent_one_middle_name = $request->parent_one_middle_name;
        $i130->parent_one_date_birth = $request->parent_one_date_birth;
        $i130->parent_one_sex = $request->parent_one_sex;
        $i130->parent_one_country_birth = $request->parent_one_country_birth;
        $i130->parent_one_city_town_village = $request->parent_one_city_town_village;
        $i130->parent_one_country_residence = $request->parent_one_country_residence;
        $i130->parent_two_last_name = $request->parent_two_last_name;
        $i130->parent_two_first_name = $request->parent_two_first_name;
        $i130->parent_two_middle_name = $request->parent_two_middle_name;
        $i130->parent_two_date_birth = $request->parent_two_date_birth;
        $i130->parent_two_sex = $request->parent_two_sex;
        $i130->parent_two_country_birth = $request->parent_two_country_birth;
        $i130->parent_two_city_town_village = $request->parent_two_city_town_village;
        $i130->parent_two_country_residence = $request->parent_two_country_residence;
        $i130->citizen_permanent = $request->citizen_resident;
        $i130->citizenship_acquired = $request->citizenship_acquired;
        $i130->certificates = $request->certificates;
        $i130->certificate_number = $request->certificate_number;
        $i130->place_issuance = $request->place_issuance;
        $i130->date_issuance = $request->date_issuance;

        $i130->save();

        $i130Part2 = i130Part2::find($formId);
        $i130Part2->class_admission = $request->class_admission;
        $i130Part2->date_of_admission = $request->date_of_admission;
        $i130Part2->admission_city_town = $request->admission_city_town;
        $i130Part2->admission_state = $request->admission_state;
        $i130Part2->gain_through_marriage = $request->gain_through_marriage;
        $i130Part2->currently_working = $request->currently_working;
        $i130Part2->employer_one_name_company = $request->employer_one_name_company;
        $i130Part2->employer_one_street_number = $request->employer_one_street_number;
        $i130Part2->employer_one_apt_ste_flr = $request->employer_one_apt_ste_flr;
        $i130Part2->employer_one_apt_ste_flr_desc = $request->employer_one_apt_ste_flr_desc;
        $i130Part2->employer_one_city_town = $request->employer_one_city_town;
        $i130Part2->employer_one_state = $request->employer_one_state;
        $i130Part2->employer_one_zip_code = $request->employer_one_zip_code;
        $i130Part2->employer_one_province = $request->employer_one_province;
        $i130Part2->employer_one_postal_code = $request->employer_one_postal_code;
        $i130Part2->employer_one_country = $request->employer_one_country;
        $i130Part2->employer_one_occupation = $request->employer_one_occupation;
        $i130Part2->employer_one_date_from = $request->employer_one_date_from;
        $i130Part2->employer_two_name_company = $request->employer_two_name_company;
        $i130Part2->employer_two_street_number = $request->employer_two_street_number;
        $i130Part2->employer_two_apt_ste_flr  = $request->employer_two_apt_ste_flr ;
        $i130Part2->employer_two_apt_ste_flr_desc = $request->employer_two_apt_ste_flr_desc;
        $i130Part2->employer_two_city_town = $request->employer_two_city_town;
        $i130Part2->employer_two_state = $request->employer_two_state;
        $i130Part2->employer_two_zip_code = $request->employer_two_zip_code;
        $i130Part2->employer_two_province = $request->employer_two_province;
        $i130Part2->employer_two_postal_code = $request->employer_two_postal_code;
        $i130Part2->employer_two_country = $request->employer_two_country;
        $i130Part2->employer_two_occupation = $request->employer_two_occupation;
        $i130Part2->employer_two_date_from = $request->employer_two_date_from;
        $i130Part2->employer_two_date_to = $request->employer_two_date_to;
        $i130Part2->ethnicity = $request->ethnicity;
        $i130Part2->race_white = $request->race_white;
        $i130Part2->race_asian = $request->race_asian;
        $i130Part2->race_black = $request->race_black;
        $i130Part2->race_indian_alaska = $request->race_indian_alaska;
        $i130Part2->race_hawaiian_islander = $request->race_hawaiian_islander;
        $i130Part2->height_feet = $request->height_feet;
        $i130Part2->height_inches = $request->height_inches;
        $i130Part2->weight_pounds_0 = $request->weight_pounds_0;
        $i130Part2->weight_pounds_1 = $request->weight_pounds_1;
        $i130Part2->weight_pounds_2 = $request->weight_pounds_2;
        $i130Part2->eye_color = $request->eye_color;

        $i130Part2->save();

        $i130Part3 = i130Part3::find($formId);
        $i130Part3->hair_color = $request->hair_color;
        $i130Part3->beneficiary_alien_number = $request->beneficiary_alien_number;
        $i130Part3->beneficiary_uscis_number = $request->beneficiary_uscis_number;
        $i130Part3->beneficiary_social_sec_number = $request->beneficiary_social_sec_number;
        $i130Part3->beneficiary_last_name = $request->beneficiary_last_name;
        $i130Part3->beneficiary_first_name = $request->beneficiary_first_name;
        $i130Part3->beneficiary_middle_name = $request->beneficiary_middle_name;
        $i130Part3->other_benef_last_name = $request->other_benef_last_name;
        $i130Part3->other_benef_first_name = $request->other_benef_first_name;
        $i130Part3->other_benef_middle_name = $request->other_benef_middle_name;
        $i130Part3->beneficiary_city_town_village = $request->beneficiary_city_town_village;
        $i130Part3->beneficiary_country_birth = $request->beneficiary_country_birth;
        $i130Part3->beneficiary_date_birth = $request->beneficiary_date_birth;
        $i130Part3->beneficiary_sex = $request->beneficiary_sex;
        $i130Part3->beneficiary_filled_for_petition = $request->beneficiary_filled_for_petition;
        $i130Part3->benef_phys_add_street_number = $request->benef_phys_add_street_number;
        $i130Part3->benef_phys_add_apt_ste_flr = $request->benef_phys_add_apt_ste_flr;
        $i130Part3->benef_phys_add_apt_ste_flr_desc = $request->benef_phys_add_apt_ste_flr_desc;
        $i130Part3->benef_phys_add_city_town = $request->benef_phys_add_city_town;
        $i130Part3->benef_phys_add_state = $request->benef_phys_add_state;
        $i130Part3->benef_phys_add_zip_code = $request->benef_phys_add_zip_code;
        $i130Part3->benef_phys_add_province = $request->benef_phys_add_province;
        $i130Part3->benef_phys_postal_code = $request->benef_phys_postal_code;
        $i130Part3->benef_phys_country = $request->benef_phys_country;
        $i130Part3->benef_other_street_number = $request->benef_other_street_number;
        $i130Part3->benef_other_apt_ste_flr = $request->benef_other_apt_ste_flr;
        $i130Part3->benef_other_apt_ste_flr_desc = $request->benef_other_apt_ste_flr_desc;
        $i130Part3->benef_other_city_town = $request->benef_other_city_town;
        $i130Part3->benef_other_state = $request->benef_other_state;
        $i130Part3->benef_other_zip_code = $request->benef_other_zip_code;
        $i130Part3->out_us_street_number = $request->out_us_street_number;
        $i130Part3->out_us_apt_ste_flr = $request->out_us_apt_ste_flr;
        $i130Part3->out_us_apt_ste_flr_desc = $request->out_us_apt_ste_flr_desc;
        $i130Part3->out_us_city_town = $request->out_us_city_town;
        $i130Part3->out_us_province = $request->out_us_province;
        $i130Part3->out_us_postal_code = $request->out_us_postal_code;
        $i130Part3->out_us_country = $request->out_us_country;
        $i130Part3->out_us_tel_number = $request->out_us_tel_number;
//        $i130Part3->id_part_1 = $part1->id;

        $i130Part3->save();

        $i130Part4 = i130Part4::find($formId);
        $i130Part4->out_us_mobile_number = $request->out_us_mobile_number;
        $i130Part4->out_us_email = $request->out_us_email;
        $i130Part4->benef_times_married = $request->benef_times_married;
        $i130Part4->benef_marital_status = $request->benef_marital_status;
        $i130Part4->benef_marital_date = $request->benef_marital_date;
        $i130Part4->benef_current_marriage_city_town = $request->benef_current_marriage_city_town;
        $i130Part4->benef_current_state = $request->benef_current_state;
        $i130Part4->benef_current_province = $request->benef_current_province;
        $i130Part4->benef_current_country = $request->benef_current_country;
        $i130Part4->benef_spouse_one_last_name = $request->benef_spouse_one_last_name;
        $i130Part4->benef_spouse_one_first_name = $request->benef_spouse_one_first_name;
        $i130Part4->benef_spouse_one_middle_name = $request->benef_spouse_one_middle_name;
        $i130Part4->benef_spouse_one_date_marriage_ended = $request->benef_spouse_one_date_marriage_ended;
        $i130Part4->benef_spouse_two_last_name = $request->benef_spouse_two_last_name;
        $i130Part4->benef_spouse_two_first_name = $request->benef_spouse_two_first_name;
        $i130Part4->benef_spouse_two_middle_name = $request->benef_spouse_two_middle_name;
        $i130Part4->benef_spouse_two_date_marriage_ended = $request->benef_spouse_two_date_marriage_ended;
        $i130Part4->benef_family_one_last_name = $request->benef_family_one_last_name;
        $i130Part4->benef_family_one_first_name = $request->benef_family_one_first_name;
        $i130Part4->benef_family_one_middle_name = $request->benef_family_one_middle_name;
        $i130Part4->benef_family_one_relationship = $request->benef_family_one_relationship;
        $i130Part4->benef_family_one_date_of_birth = $request->benef_family_one_date_of_birth;
        $i130Part4->benef_family_one_country_of_birth = $request->benef_family_one_country_of_birth;
        $i130Part4->benef_family_two_last_name = $request->benef_family_two_last_name;
        $i130Part4->benef_family_two_first_name = $request->benef_family_two_first_name;
        $i130Part4->benef_family_two_middle_name = $request->benef_family_two_middle_name;
        $i130Part4->benef_family_two_relationship = $request->benef_family_two_relationship;
        $i130Part4->benef_family_two_date_of_birth = $request->benef_family_two_date_of_birth;
        $i130Part4->benef_family_two_country_of_birth = $request->benef_family_two_country_of_birth;
        $i130Part4->benef_family_three_last_name = $request->benef_family_three_last_name;
        $i130Part4->benef_family_three_first_name = $request->benef_family_three_first_name;
        $i130Part4->benef_family_three_middle_name = $request->benef_family_three_middle_name;
        $i130Part4->benef_family_three_relationship = $request->benef_family_three_relationship;
        $i130Part4->benef_family_three_date_of_birth = $request->benef_family_three_date_of_birth;
        $i130Part4->benef_family_three_country_of_birth = $request->benef_family_three_country_of_birth;
//        $i130Part4->id_part_1 = $part1->id;

        $i130Part4->save();

        $i130Part5 = i130Part5::find($formId);

        $i130Part5->benef_family_four_last_name = $request->benef_family_four_last_name;
        $i130Part5->benef_family_four_first_name = $request->benef_family_four_first_name;
        $i130Part5->benef_family_four_middle_name = $request->benef_family_four_middle_name;
        $i130Part5->benef_family_four_relationship = $request->benef_family_four_relationship;
        $i130Part5->benef_family_four_date_of_birth = $request->benef_family_four_date_of_birth;
        $i130Part5->benef_family_four_country_of_birth = $request->benef_family_four_country_of_birth;
        $i130Part5->benef_family_five_last_name = $request->benef_family_five_last_name;
        $i130Part5->benef_family_five_first_name = $request->benef_family_five_first_name;
        $i130Part5->benef_family_five_middle_name = $request->benef_family_five_middle_name;
        $i130Part5->benef_family_five_relationship = $request->benef_family_five_relationship;
        $i130Part5->benef_family_five_date_of_birth = $request->benef_family_five_date_of_birth;
        $i130Part5->benef_family_five_country_of_birth = $request->benef_family_five_country_of_birth;
        $i130Part5->benef_ever_us = $request->benef_ever_us;
        $i130Part5->benef_class_admission = $request->benef_class_admission;
        $i130Part5->benef_form_i94_number = $request->benef_form_i94_number;
        $i130Part5->benef_date_arrival = $request->benef_date_arrival;
        $i130Part5->benef_date_expire = $request->benef_date_expire;
        $i130Part5->benef_passport_number = $request->benef_passport_number;
        $i130Part5->benef_travel_doc_number = $request->benef_travel_doc_number;
        $i130Part5->benef_country_issuance_passport = $request->benef_country_issuance_passport;
        $i130Part5->benef_expiration_passport = $request->benef_expiration_passport;
        $i130Part5->benef_employment_name_current_employer = $request->benef_employment_name_current_employer;
        $i130Part5->benef_employment_street_number = $request->benef_employment_street_number;
        $i130Part5->benef_employment_apt_ste_flr = $request->benef_employment_apt_ste_flr;
        $i130Part5->benef_employment_apt_ste_flr_desc = $request->benef_employment_apt_ste_flr_desc;
        $i130Part5->benef_employment_city_town = $request->benef_employment_city_town;
        $i130Part5->benef_employment_state = $request->benef_employment_state;
        $i130Part5->benef_employment_zip_code = $request->benef_employment_zip_code;
        $i130Part5->benef_employment_province = $request->benef_employment_province;
        $i130Part5->benef_employment_postal_code = $request->benef_employment_postal_code;
        $i130Part5->benef_employment_country = $request->benef_employment_country;
        $i130Part5->benef_employment_date_began = $request->benef_employment_date_began;
        $i130Part5->benef_other_inmigration_proceed = $request->benef_other_inmigration_proceed;
        $i130Part5->benef_type_proceed = $request->benef_type_proceed;
        $i130Part5->benef_proceed_city_town = $request->benef_proceed_city_town;
        $i130Part5->benef_proceed_state = $request->benef_proceed_state;
        $i130Part5->benef_proceed_date = $request->benef_proceed_date;
//        $i130Part5->id_part_1 = $part1->id;

        $i130Part5->save();

        $i130Part6 = i130Part6::find($formId);

        $i130Part6->spouse_street_number = $request->spouse_street_number;
        $i130Part6->spouse_apt_ste_flr = $request->spouse_apt_ste_flr;
        $i130Part6->spouse_apt_ste_flr_desc = $request->spouse_apt_ste_flr_desc;
        $i130Part6->spouse_city_town = $request->spouse_city_town;
        $i130Part6->spouse_state = $request->spouse_state;
        $i130Part6->spouse_zip_code = $request->spouse_zip_code;
        $i130Part6->spouse_province = $request->spouse_province;
        $i130Part6->spouse_postal_code = $request->spouse_postal_code;
        $i130Part6->spouse_country = $request->spouse_country;
        $i130Part6->spouse_date_from = $request->spouse_date_from;
        $i130Part6->spouse_date_to = $request->spouse_date_to;
        $i130Part6->benef_us_adjust_city_town = $request->benef_us_adjust_city_town;
        $i130Part6->benef_us_adjust_state = $request->benef_us_adjust_state;
        $i130Part6->benef_us_visa_city_town = $request->benef_us_visa_city_town;
        $i130Part6->benef_us_visa_province = $request->benef_us_visa_province;
        $i130Part6->benef_us_visa_country = $request->benef_us_visa_country;
        $i130Part6->other_benef_alien_filled = $request->other_benef_alien_filled;
        $i130Part6->previous_benef_alien_last_name = $request->previous_benef_alien_last_name;
        $i130Part6->previous_benef_alien_first_name = $request->previous_benef_alien_first_name;
        $i130Part6->previous_benef_alien_middle_name = $request->previous_benef_alien_middle_name;
        $i130Part6->previous_benef_alien_city_town = $request->previous_benef_alien_city_town;
        $i130Part6->previous_benef_alien_state = $request->previous_benef_alien_state;
        $i130Part6->previous_benef_alien_date_filed = $request->previous_benef_alien_date_filed;
        $i130Part6->previous_benef_alien_result = $request->previous_benef_alien_result;
        $i130Part6->relative_one_last_name = $request->relative_one_last_name;
        $i130Part6->relative_one_first_name = $request->relative_one_first_name;
        $i130Part6->relative_one_middle_name = $request->relative_one_middle_name;
        $i130Part6->relative_one_relationship = $request->relative_one_relationship;
//        $i130Part6->id_part_1 = $part1->id;

        $i130Part6->save();

        $i130Part7 = i130Part7::find($formId);

        $i130Part7->relative_two_last_name = $request->relative_two_last_name;
        $i130Part7->relative_two_first_name = $request->relative_two_first_name;
        $i130Part7->relative_two_middle_name = $request->relative_two_middle_name;
        $i130Part7->relative_two_relationship = $request->relative_two_relationship;
        $i130Part7->petitioner_read_english = $request->petitioner_read_english;
        $i130Part7->interpreter_read = $request->interpreter_read;
        $i130Part7->interpreter_language = $request->interpreter_language;
        $i130Part7->preparer_prepared = $request->preparer_prepared;
        $i130Part7->preparer_fullname = $request->preparer_fullname;
        $i130Part7->petitioner_tel_number = $request->petitioner_tel_number;
        $i130Part7->petitioner_mobile_number = $request->petitioner_mobile_number;
        $i130Part7->petitioner_email = $request->petitioner_email;
        $i130Part7->interpreter_last_name = $request->interpreter_last_name;
        $i130Part7->interpreter_first_name = $request->interpreter_first_name;
        $i130Part7->interpreter_organization_name = $request->interpreter_organization_name;
        $i130Part7->interpreter_street_number = $request->interpreter_street_number;
        $i130Part7->interpreter_apt_ste_flr = $request->interpreter_apt_ste_flr;
        $i130Part7->interpreter_apt_ste_flr_desc = $request->interpreter_apt_ste_flr_desc;
        $i130Part7->interpreter_city_town = $request->interpreter_city_town;
        $i130Part7->interpreter_state = $request->interpreter_state;
        $i130Part7->interpreter_zip_code = $request->interpreter_zip_code;
        $i130Part7->interpreter_province = $request->interpreter_province;
        $i130Part7->interpreter_postal_code = $request->interpreter_postal_code;
        $i130Part7->interpreter_country = $request->interpreter_country;
        $i130Part7->interpreter_tel_number = $request->interpreter_tel_number;
        $i130Part7->interpreter_mobile_number = $request->interpreter_mobile_number;
        $i130Part7->interpreter_email = $request->interpreter_email;
        $i130Part7->interpreter_language_certified = $request->interpreter_language_certified;
        $i130Part7->preparer_last_name = $request->preparer_last_name;
        $i130Part7->preparer_first_name = $request->preparer_first_name;
        $i130Part7->preparer_organization_name = $request->preparer_organization_name;
        $i130Part7->preparer_street_number = $request->preparer_street_number;
        $i130Part7->preparer_apt_ste_flr = $request->preparer_apt_ste_flr;
        $i130Part7->preparer_apt_ste_flr_desc = $request->preparer_apt_ste_flr_desc;
        $i130Part7->preparer_city_town = $request->preparer_city_town;
        $i130Part7->preparer_state = $request->preparer_state;
        $i130Part7->preparer_zip_code = $request->preparer_zip_code;
        $i130Part7->preparer_province = $request->preparer_province;
        $i130Part7->preparer_postal_code = $request->preparer_postal_code;
        $i130Part7->preparer_country = $request->preparer_country;
//        $i130Part7->id_part_1 = $part1->id;

        $i130Part7->save();

        $i130Part8 = i130Part8::find($formId);

        $i130Part8->preparer_tel_number = $request->preparer_tel_number;
        $i130Part8->preparer_mobile_number = $request->preparer_mobile_number;
        $i130Part8->preparer_email_number = $request->preparer_email;
        $i130Part8->preparer_statement_1 = $request->preparer_statement_1;
        $i130Part8->preparer_statement_2 = $request->preparer_statement_2;
        $i130Part8->extends = $request->extends;
        $i130Part8->extra_info_last_name = $request->extra_info_last_name;
        $i130Part8->extra_info_first_name = $request->extra_info_first_name;
        $i130Part8->extra_info_middle_name = $request->extra_info_middle_name;
        $i130Part8->extra_info_a_number = $request->extra_info_a_number;
        $i130Part8->extra_info_page_number_1 = $request->extra_info_page_number_1;
        $i130Part8->extra_info_part_number_1 = $request->extra_info_part_number_1;
        $i130Part8->extra_info_item_number_1 = $request->extra_info_item_number_1;
        $i130Part8->extra_info_desc_1 = $request->extra_info_desc_1;
        $i130Part8->extra_info_page_number_2 = $request->extra_info_page_number_2;
        $i130Part8->extra_info_part_number_2 = $request->extra_info_part_number_2;
        $i130Part8->extra_info_item_number_2 = $request->extra_info_item_number_2;
        $i130Part8->extra_info_desc_2 = $request->extra_info_desc_2;
        $i130Part8->extra_info_page_number_3 = $request->extra_info_page_number_3;
        $i130Part8->extra_info_part_number_3 = $request->extra_info_part_number_3;
        $i130Part8->extra_info_item_number_3 = $request->extra_info_item_number_3;
        $i130Part8->extra_info_desc_3 = $request->extra_info_desc_3;
        $i130Part8->extra_info_page_number_4 = $request->extra_info_page_number_4;
        $i130Part8->extra_info_part_number_4 = $request->extra_info_part_number_4;
        $i130Part8->extra_info_item_number_4 = $request->extra_info_item_number_4;
        $i130Part8->extra_info_desc_4 = $request->extra_info_desc_4;
        $i130Part8->extra_info_page_number_5 = $request->extra_info_page_number_5;
        $i130Part8->extra_info_part_number_5 = $request->extra_info_part_number_5;
        $i130Part8->extra_info_item_number_5 = $request->extra_info_item_number_5;
        $i130Part8->extra_info_desc_5 = $request->extra_info_desc_5;
//        $i130Part8->id_part_1 = $part1->id;

        $i130Part8->save();

        session()->flash('msg_dlt', 'success_msg_chng');
        return redirect()->route('i130.index');
    }

    public function destroy($id){
        $form = i130::find($id);
        $form->delete();
        $user = User::select('id')->where('email', Auth::user()->email)->first();
        Form_User::where('user_id', $user->id)->where('form_id', $id)->where('table', 'i130s')->delete();
        session()->flash('msg_dlt', 'success_msg_dlt');
        return redirect()->route('i130.index');
    }
    
}
