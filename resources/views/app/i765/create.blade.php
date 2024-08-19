{{-- Extends layout --}}
@extends('app.layouts.default')

{{-- Content --}}
@section('content')
            <!-- row -->
<div class="container-fluid">
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{trans('i765.i765_form')}}</h4>
                </div>
                <div class="card-body">
                    <div id="smartwizard" class="form-wizard order-create">
                        <ul class="nav nav-wizard">
                            <li><a class="nav-link" href="#reason"> 
                                <span>1</span> 
                            </a></li>
                            <li><a class="nav-link" href="#about_you">
                                <span>2</span>
                            </a></li>
                            <li><a class="nav-link" href="#applicant_statement"> 
                                <span>3</span> 
                            </a></li>
                            <li><a class="nav-link" href="#interpreter_contact">
                                <span>4</span>
                            </a></li>
                            <li><a class="nav-link" href="#contact_information"> 
                                <span>5</span> 
                            </a></li>
                            <li><a class="nav-link" href="#additional_information">
                                <span>6</span>
                            </a></li>
                        </ul>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="tab-content">
                            <form action="{{route('i765.store')}}" method="post">
                                @csrf
                                <div id="reason" class="tab-pane" role="tabpanel">
                                    <div class="card-header">
                                        <h4 class="card-title">Reason for Applying</h4>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">You are applying for:</h5>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="initial">
                                                    <input type="radio" name="applying_for" class="mr-2 situation" value="initial">Initial permission to accept employment.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="replacement_lost">
                                                    <input type="radio" name="applying_for" class="mr-2 situation"  value="replacement_lost">Replacement of lost, stolen, or damaged employment authorization document, or correction of my employment authorization document NOT DUE to U.S. Citizenship and Immigration Services (USCIS) error. <br>
                                                    NOTE: Replacement (correction) of an employment authorization document due to USCIS error does not require a new Form I-765 and filing fee. Refer to Replacement for Card Error in the What is the Filing Fee section of the Form I-765 Instructions for further details.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" id="other" for="renewal">
                                                    <input type="radio" name="applying_for" class="mr-2 situation"  value="renewal">Renewal of my permission to accept employment. (Attach a copy of your previous employment authorization document).
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="about_you" class="tab-pane" role="tabpanel">
                                    <div class="card-header">
                                        <h4 class="card-title">Information About You.</h4>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Your Full Legal Name</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="legal_last_name" max="70" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="legal_first_name" max="70" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="legal_middle_name" class="form-control" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">
                                            Other Names Used. <br>
                                            Provide all other names you have ever used, including aliases, 
                                            maiden name, and nicknames. If you need extra space to 
                                            complete this section, use the space provided in Part 6. 
                                            Additional Information.
                                        </h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="other_last_name_two" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="other_first_name_two" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="other_middle_name_two" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="other_last_name_three" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="other_first_name_three" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="other_middle_name_three" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="other_last_name_four" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="other_first_name_four" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="other_middle_name_four" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Your U.S. Mailing Address</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">In Care of Name (if any)</label>
                                                <input type="text" name="mailing_care_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Street Number and Name</label>
                                                <input type="text" name="mailing_street_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="mailing_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="mailing_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                </label>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="mailing_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                </label><br>
                                                <input type="text" name="mailing_apt_ste_flr_desc" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label>
                                                <input type="text" name=" mailing_city_town" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="mailing_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a> </label>
                                                <input type="text" name="mailing_zip_code" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                Is your current mailing address the same as your physical address? <br>
                                                <label class="radio-inline mr-3" for="yes">
                                                    <input type="radio" name="mailing_same_physical" class="mr-2 situation" value="yes">Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="no">
                                                    <input type="radio" name="mailing_same_physical" class="mr-2 situation" value="no">No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">U.S. Physical Address</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Street Number and Name</label>
                                                <input type="text" name="physical_street_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="physical_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="physical_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                </label>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="physical_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                </label>
                                                <input type="text" name="physical_apt_ste_flr_desc" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label>
                                                <input type="text" name="physical_city_town" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="physical_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a> </label>
                                                <input type="text" name="physical_zip_code" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Other Information</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Alien Registration Number (A-Number) (if any)</label>
                                                <input type="text" name="other_alien_number" max="9" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">USCIS Online Account Number (if any)</label>
                                                <input type="text" name="other_uscis_account_number" max="12" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                Gender <br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="other_gender" class="mr-2 situation" value="male">Male
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="other_gender" class="mr-2 situation" value="female">Female
                                                </label>
                                             </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                Marital Status <br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="other_marital_status" class="mr-2 situation" value="single">Single
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="other_marital_status" class="mr-2 situation" value="married">Married
                                                </label>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="other_marital_status" class="mr-2 situation" value="divorced">Divorced
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="other_marital_status" class="mr-2 situation" value="widowed">Widowed
                                                </label>
                                             </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                Have you previously filed Form I-765? <br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="prev_filed_form_i765" class="mr-2 situation" value="yes">Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="prev_filed_form_i765" class="mr-2 situation" value="no">No
                                                </label>
                                             </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                Has the Social Security Administration (SSA) ever officially issued a Social Security card to you? <br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="ssa_issued_card_you" class="mr-2 situation" value="yes">Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="ssa_issued_card_you" class="mr-2 situation" value="no">No
                                                </label>
                                             </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Provide your Social Security Number (SSN) (if known).</label>
                                                <input type="text" name="ssn_number" max="9" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                Do you want the SSA to issue you a Social Security card? 
                                                (You must also answer “Yes” to next item, Consent for Disclosure, to receive a card). <br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="want_ssn_card" class="mr-2 situation" value="yes">Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="want_ssn_card" class="mr-2 situation" value="no">No
                                                </label> <br>
                                                NOTE: If you answered “No” to this item., skip first item's next part. If you answered “Yes” to this item, you must also answer “Yes” to the next item.
                                             </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                Consent for Disclosure: I authorize disclosure of information from this application to the SSA as required for the purpose of assigning me an SSN and issuing me a Social Security card. <br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="auth_disclosure" class="mr-2 situation" value="yes">Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="auth_disclosure" class="mr-2 situation" value="no">No
                                                </label><br>
                                                NOTE: If you answered “Yes” to this and last Item, provide the information requested in the next 4 items.
                                             </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Father Last Name.</label>
                                                <input type="text" name="father_last_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Father First Name.</label>
                                                <input type="text" name="father_first_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Mother Last Name.</label>
                                                <input type="text" name="mother_last_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Mother First Name.</label>
                                                <input type="text" name="mother_first_name" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Your Country or Countries of Citizenship or Nationality</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                List all countries where you are currently a citizen or national. If you need extra space to complete this item, use the space provided in Part 6. "Additional Information".
                                            </h5>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country 1</label>
                                                <input type="text" name="country_one" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country 2</label>
                                                <input type="text" name="country_two" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Place of Birth</h5>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City/Town/Village of Birth</label>
                                                <input type="text" name="birth_city_town_village" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State/Province of Birth</label>
                                                <input type="text" name="birth_state" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country of Birth</label>
                                                <input type="text" name="birth_country" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date of Birth</label>
                                                <input type="date" max="{{date('Y-m-d')}}" name="birth_date" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Information About Your Last Arrival in the United States</h5>
                                    </div>

                                    <div class="row mt-4">

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Form I-94 Arrival-Departure Record Number (if any)</label>
                                                <input type="text" name="arrival_record_number" max="11" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Passport Number of Your Most Recently Issued Passport</label>
                                                <input type="text" name="passport_number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label"> Travel Document Number (if any)</label>
                                                <input type="text" name="travel_doc_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country That Issued Your Passport or Travel Document</label>
                                                <input type="text" name="country_issued_passport" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Expiration Date for Passport or Travel Document</label>
                                                <input type="date" name="expiration_date_passport" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date of Your Last Arrival Into the United States, On or About</label>
                                                <input type="date" max="{{date('Y-m-d')}}" name="date_last_arrival_us" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Place of Your Last Arrival Into the United States</label>
                                                <input type="text" name="place_last_arrival" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Immigration Status at Your Last Arrival (for example, B-2 visitor, F-1 student, or no status)</label>
                                                <input type="text" name="inmigration_status_arrival_us_last" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Your Current Immigration Status or Category (for example, B-2 visitor, F-1 student, parolee, deferred action, or no status or category)
                                                </label>
                                                <input type="text" name="current_inmigration_status" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Student and Exchange Visitor Information System (SEVIS) Number (if any)
                                                </label>
                                                <div style="display:flex;">
                                                    <div style="width:10%; margin-top:1rem;">N -</div> <input style="width:90%;" type="text" name="sevis_number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Eligibility Category. Refer to the Who May File Form I-765 section of the Form I-765 Instructions to determine the appropriate eligibility category for this application. Enter the appropriate letter and number for your eligibility category below (for example, (a)(8), (c)(17)(iii)).
                                                </label>
                                                <div style="display:flex;">
                                                    <input type="text" name="category_0" style="width:10%; margin-right:7%;" class="form-control">
                                                    <input type="text" name="category_1" style="width:10%; margin-right:7%;" class="form-control">
                                                    <input type="text" name="category_2" style="width:10%; margin-right:7%;" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    (c)(3)(C) STEM OPT Eligibility Category. If you entered the eligibility category (c)(3)(C) in the last Item, provide the information requested in the next three Items.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Degree
                                                </label>
                                                <input type="text" name="degree" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Employer's Name as Listed in E-Verify
                                                </label>
                                                <input type="text" name="employer_name_e_verify" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Employer's E-Verify Company Identification Number or a Valid E-Verify Client Company Identification Number
                                                </label>
                                                <input type="text" name="employer_company_id_e_verify" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    (c)(26) Eligibility Category. If you entered the eligibility category (c)(26) in Item "Elegibility Category", provide the receipt number of your H-1B spouse's most recent Form I-797 Notice for Form I-129, Petition for a Nonimmigrant Worker.
                                                </label>
                                                <input type="text" max="13" name="receipt_number_h1b" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    (c)(8) Eligibility Category. If you entered the eligibility category (c)(8) in Item "Elegibility Category", have you EVER been arrested for and/or convicted of any crime?
                                                </label>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="radio-inline mr-3" for="apt">
                                                            <input type="radio" name="ever_been_arrested_one" class="mr-2 situation" value="yes">Yes
                                                        </label>
                                                        <label class="radio-inline mr-3" for="ste">
                                                            <input type="radio" name="ever_been_arrested_one" class="mr-2 situation" value="no">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    NOTE: If you answered “Yes” to  the last Item, refer to Special Filing Instructions for Those With Pending Asylum Applications (c)(8) in the Required Documentation section of the Form I-765 Instructions for information about providing court dispositions.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    (c)(35) and (c)(36) Eligibility Category. If you entered the eligibility category (c)(35) in Item "Elegibility Category", please provide the receipt number of your Form I-797 Notice for Form I-140, Immigrant Petition for Alien Worker. 
                                                    If you entered the eligibility category (c)(36) in Item Number 27., please provide the receipt number of your spouse's or parent's Form I-797 Notice for Form I-140.
                                                </label>
                                                <input type="text" max="13" name="receipt_number_i797" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-8 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    If you entered the eligibility category (c)(35) or (c)(36) in Item "Elegibility Category", have you EVER been arrested for and/or convicted of any crime?
                                                </label>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="radio-inline mr-3" for="apt">
                                                            <input type="radio" name="ever_been_arrested_two" class="mr-2 situation" value="yes">Yes
                                                        </label>
                                                        <label class="radio-inline mr-3" for="ste">
                                                            <input type="radio" name="ever_been_arrested_two" class="mr-2 situation" value="no">No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    NOTE: If you answered “Yes” to the last Item, refer to Employment-Based Nonimmigrant Categories, 
                                                    Items 8. - 9., in the Who May File Form I-765 section 
                                                    of the Form I-765 Instructions for information about 
                                                    providing court dispositions.
                                                </label>
                                            </div>
                                        </div>
    
                                    </div>

                                </div>

                                <div id="applicant_statement" class="tab-pane" role="tabpanel">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Applicant's Statement, Contact Information, Declaration, Certification, and Signature
                                        </h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="initial">
                                                    NOTE: Read the Penalties section of the Form I-765 Instructions before completing this section. You must file Form I-765 while in the United States.
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">
                                            Applicant's Statement
                                        </h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="initial">
                                                    NOTE: Select the box for either Item Number 1.a. or 1.b. If applicable, select the box for Item Number 2.
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="initial">
                                                    <input type="radio" name="can_read_understand_english" class="mr-2 can_read_understand_english" id="can_read_understand_english" value="yes">I can read and understand English, and I have read and understand every question and instruction on this application and my answer to every question.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="initial">
                                                    <input type="radio" name="can_read_understand_english" class="mr-2 can_read_understand_english" id="can_read_understand_english" value="no">The interpreter named in Part 4. read to me every question and instruction on this application and my answer to every question in
                                                </label>
                                                <div id="interpreter_language" style="display:none;">
                                                    <input type="text" name="interpreter_language" placeholder="Write the language" id="interpreter_language" class="form-control interpreter_language">
                                                    <label class="radio-inline mr-3" for="initial">
                                                        a language in which I am fluent, and I understood everything.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="initial">
                                                    <input type="checkbox" name="preparer_prepared" class="mr-2 situation" value="yes">At my request, the preparer named in Part 5.,
                                                    <input type="text" name="preparer_name" placeholder="Preparer's Name" class="form-control">
                                                    prepared this application for me based only upon information I provided or authorized.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Applicant's Daytime Telephone Number</label>
                                                <input type="text" name="applicant_daytime_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Applicant's Mobile Telephone Number (if any)</label>
                                                <input type="text" name="applicant_phone_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Applicant's Email Address (if any)</label>
                                                <input type="text" name="applicant_email" class="form-control">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Are you a Salvadorian or Guatemalan?</label> <br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="salvadorian_guatemalan" class="mr-2 situation" value="apt">Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="salvadorian_guatemalan" class="mr-2 situation" value="ste">No
                                                </label>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <div id="interpreter_contact" class="tab-pane" role="tabpanel">
                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Interpreter's Contact Information, Certification, and Signature
                                        </h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="initial">
                                                    Provide the following information about the interpreter.
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">
                                            Interperter's Full Name
                                        </h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Interpreter's Family Name (Last Name)</label> <br>
                                                <input type="text" name="interpreter_last_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Interpreter's Given Name (First Name)</label> <br>
                                                <input type="text" name="interpreter_first_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Interpreter's Business Organization Name (if any)</label> <br>
                                                <input type="text" name="interpreter_organization_name" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Interpreter's Mailing Address</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Street Number and Name</label> <br>
                                                <input type="text" name="interpreter_mailing_street_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="interpreter_mailing_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="interpreter_mailing_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                </label>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="interpreter_mailing_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                </label> <br>
                                                <input type="text" name="interpreter_mailing_apt_ste_flr_desc" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label> <br>
                                                <input type="text" name="interpreter_mailing_city_town" class="form-control">
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="interpreter_mailing_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a> </label> <br>
                                                <input type="text" name="interpreter_mailing_zip_code" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Province</label> <br>
                                                <input type="text" name="interpreter_mailing_province" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Postal Code</label> <br>
                                                <input type="text" name="interpreter_mailing_postal_code" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country</label> <br>
                                                <input type="text" name="interpreter_mailing_country" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Interpreter's Contact Information</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Interpreter's Daytime Telephone Number</label> <br>
                                                <input type="text" name="interpreter_daytime_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Interpreter's Mobile Telephone Number (if any)</label> <br>
                                                <input type="text" name="interpreter_phone_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Interpreter's Email Address (if any)</label> <br>
                                                <input type="text" name="interpreter_email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    I certify, under penalty of perjury, that: I am fluent in English and <br>
                                                </label> <br>
                                                <input type="text" name="interpreter_cert_language" class="form-control"> <br>
                                                <label class="text-label" style="color:#000 !important;">
                                                    which is the same language specified in Part 3., Item Number 
                                                    1.b., and I have read to this applicant in the identified language 
                                                    every question and instruction on this application and his or her 
                                                    answer to every question. The applicant informed me that he or 
                                                    she understands every instruction, question, and answer on the 
                                                    application, including the Applicant's Declaration and 
                                                    Certification, and has verified the accuracy of every answer
                                               </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="contact_information" class="tab-pane" role="tabpanel">

                                    <div class="card-header">
                                        <h4 class="card-title">Contact Information, Declaration, and Signature of the Person Preparing this Application, If Other Than the Applicant</h4>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">
                                            Provide the following information about the preparer.
                                        </h5>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">
                                            Preparer's Full Name
                                        </h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Family Name (Last Name)
                                                </label> <br>
                                                <input type="text" name="preparer_last_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Given Name (Last Name)
                                                </label> <br>
                                                <input type="text" name="preparer_first_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Business or Organization Name (if any)
                                                </label> <br>
                                                <input type="text" name="preparer_organization_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Street Number and Name</label> <br>
                                                <input type="text" name="preparer_mailing_street_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="preparer_mailing_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="preparer_mailing_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                </label>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="preparer_mailing_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                </label> <br>
                                                <input type="text" name="preparer_mailing_apt_ste_flr_desc" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label> <br>
                                                <input type="text" name="preparer_mailing_city_town" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">State</label>
                                                <select name="preparer_mailing_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a> </label> <br>
                                                <input type="text" name="preparer_mailing_zip_code" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Province</label> <br>
                                                <input type="text" name="preparer_mailing_province" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Postal Code</label> <br>
                                                <input type="text" name="preparer_mailing_postal_code" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country</label> <br>
                                                <input type="text" name="preparer_mailing_country" class="form-control">
                                            </div>
                                        </div>


                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">
                                            Preparer's Contact Information
                                        </h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Daytime Telephone Number
                                                </label> <br>
                                                <input type="text" name="preparer_daytime_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Mobile Telephone Number (if any)
                                                </label> <br>
                                                <input type="text" name="preparer_mobile_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Email Address (if any)
                                                </label> <br>
                                                <input type="text" name="preparer_email" class="form-control">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">
                                            Preparer's Statement
                                        </h5>
                                    </div>

                                    <div class="row mt-4">

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="checkbox" name="attorney_accredited" class="mr-2" value="yes">
                                                    I am not an attorney or accredited representative but have prepared this application on behalf of the applicant and with the applicant's consent.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="checkbox" name="preparer_statement_2" class="mr-2" value="yes">
                                                    I am an attorney or accredited representative and
                                                    my representation of the applicant in this case
                                                </label>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="extends" class="mr-2" value="yes">
                                                    extends
                                                    <input type="radio" name="extends" class="mr-2" value="no">
                                                    does not extend beyond the application
                                                    of this petition. <br>
                                                    <strong>NOTE:</strong> If you are an attorney or accredited
                                                    representative, you may need to submit a
                                                    completed Form G-28, Notice of Entry of
                                                    Appearance as Attorney or Accredited
                                                    Representative, with this application.
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div id="additional_information" class="tab-pane" role="tabpanel">

                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Additional Information
                                        </h4>
                                    </div>

                                    <div class="row mt-4">

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    If you need extra space to provide any additional information
                                                    within this application, use the space below. If you need more
                                                    space than what is provided, you may make copies of this page
                                                    to complete and file with this application or attach a separate
                                                    sheet of paper. Type or print your name and A-Number (if any)
                                                    at the top of each sheet; indicate the Page Number, Part
                                                    Number, and Item Number to which your answer refers; and
                                                    sign and date each sheet.
                                                </h5>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="row mt-4">

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Provide the following information about the preparer.
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    If you need extra space to provide any additional information 
                                                    within this petition, use the space below. If you need more 
                                                    space than what is provided, you may make copies of this page 
                                                    to complete and file with this petition or attach a separate sheet 
                                                    of paper. Type or print your name and A-Number (if any) at the 
                                                    top of each sheet; indicate the Page Number, Part Number, 
                                                    and Item Number to which your answer refers; and sign and 
                                                    date each sheet.
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Family Name (Last Name)
                                                </label> <br>
                                                <input type="text" name="extra_last_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Given Name (First Name)
                                                </label> <br>
                                                <input type="text" name="extra_first_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Middle Name
                                                </label> <br>
                                                <input type="text" name="extra_middle_name" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    A-Number (if any)
                                                </label> <br>
                                                <input type="text" name="extra_alien_number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Additional Information 1
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Page Number
                                                </label> <br>
                                                <input type="text" name="extra_page_number_one" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_part_number_one" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_item_number_one" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_desc_one" class="form-control" rows="6"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Additional Information 2
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Page Number
                                                </label> <br>
                                                <input type="text" name="extra_page_number_two" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_part_number_two" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_item_number_two" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_desc_two" class="form-control" rows="6"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Additional Information 3
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Page Number
                                                </label> <br>
                                                <input type="text" name="extra_page_number_three" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_part_number_three" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_item_number_three" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_desc_three" class="form-control" rows="6"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Additional Information 4
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Page Number
                                                </label> <br>
                                                <input type="text" name="extra_page_number_four" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_part_number_four" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_item_number_four" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_desc_four" class="form-control" rows="6"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Additional Information 5
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Page Number
                                                </label> <br>
                                                <input type="text" name="extra_page_number_five" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_part_number_five" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_item_number_five" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_desc_five" class="form-control" rows="6"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>

                                        <!--div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="present_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @ foreach ($states as $state)
                                                        <option value="{ {$state->code}}">{ {$state->name}} ({ {$state->code}})</option>
                                                    @ endforeach
                                                </select>
                                            </div>
                                        </div-->
                                        <!--div class="col-lg-2 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="previous_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="previous_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                </label>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="previous_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                </label>
                                            </div>
                                        </div-->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection