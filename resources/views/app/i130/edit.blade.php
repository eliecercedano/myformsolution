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
                    <h4 class="card-title">{{trans('i130.i130_form')}}</h4>
                </div>
                <div class="card-body">
                    <div id="smartwizard" class="form-wizard order-create">
                        <ul class="nav nav-wizard">
                            <li><a class="nav-link" href="#relationship"> 
                                <span>1</span> 
                            </a></li>
                            <li><a class="nav-link" href="#about_you">
                                <span>2</span>
                            </a></li>
                            <li><a class="nav-link" href="#biographic_information"> 
                                <span>3</span> 
                            </a></li>
                            <li><a class="nav-link" href="#information_beneficiary">
                                <span>4</span>
                            </a></li>
                            <li><a class="nav-link" href="#other_information"> 
                                <span>5</span> 
                            </a></li>
                            <li><a class="nav-link" href="#petitioner_statement">
                                <span>6</span>
                            </a></li>
                            <li><a class="nav-link" href="#interpreter_contact"> 
                                <span>7</span> 
                            </a></li>
                            <li><a class="nav-link" href="#contact_information">
                                <span>8</span>
                            </a></li>
                            <li><a class="nav-link" href="#additional_information"> 
                                <span>9</span> 
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
                            <form action="{{route('i130.update', $formData->id)}}" method="post">
                                @csrf
                                @method('put')
                                <div id="relationship" class="tab-pane" role="tabpanel">
                                    <div class="card-header">
                                        <h4 class="card-title">Relationship</h4>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">(You are the Petitioner. Your relative is the Beneficiary)</h5>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">You are filing this petition for your:</label>
                                                <select name="petition" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one option</option>
                                                    <option value="spouse" @if ($formData->petition == "spouse") selected @endif >Spouse</option>
                                                    <option value="parent" @if ($formData->petition == "parent") selected @endif >Parent</option>
                                                    <option value="brother/sister" @if ($formData->petition == "brother/sister") selected @endif >Brother/Sister</option>
                                                    <option value="child" @if ($formData->petition == "child") selected @endif >Child</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">If you are filing this petition for your child, select one of this options:</label>
                                                <label class="radio-inline mr-3" for="visitor">
                                                    <input type="radio" name="petition_child_parent" class="mr-2 situation" value="parentsmarried"  @if ($formData->petition_child_parent == "parentsmarried") checked @endif >
                                                    Child was born to parents who were married to each 
                                                    other at the time of the child's birth.
                                                </label>
                                                <label class="radio-inline mr-3" for="student">
                                                    <input type="radio" name="petition_child_parent" class="mr-2 situation" value="stepchildparent" @if ($formData->petition_child_parent == "stepchildparent") checked @endif >
                                                    Stepchild/Stepparent.
                                                </label>
                                                <label class="radio-inline mr-3" for="permanent_resident">
                                                    <input type="radio" name="petition_child_parent" class="mr-2 situation"  value="parentsnotmarried" @if ($formData->petition_child_parent == "parentsnotmarried") checked @endif >
                                                    Child was born to parents who were not married to 
                                                    each other at the time of the child's birth.
                                                </label>
                                                <label class="radio-inline mr-3" id="other" for="Other">
                                                    <input type="radio" name="petition_child_parent" class="mr-2 situation"  value="adopted" @if ($formData->petition_child_parent == "adopted") checked @endif >
                                                    Child was adopted (not an Orphan or Hague 
                                                    Convention adoptee).
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">If the beneficiary is your brother/sister, are you related by adoption?</label>
                                                <label class="radio-inline mr-3" for="visitor">
                                                    <input type="radio" name="brother_sister" class="mr-2 situation" value="yes" @if ($formData->brother_sister == "yes") checked @endif >Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="student">
                                                    <input type="radio" name="brother_sister" class="mr-2 situation" value="no" @if ($formData->brother_sister == "no") checked @endif >No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Did you gain lawful permanent resident status or citizenship through adoption?</label>
                                                <label class="radio-inline mr-3" for="visitor">
                                                    <input type="radio" name="adoption_status_citizenship" class="mr-2 situation" value="yes" @if ($formData->adoption_status_citizenship == "yes") checked @endif >Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="student">
                                                    <input type="radio" name="adoption_status_citizenship" class="mr-2 situation" value="no" @if ($formData->adoption_status_citizenship == "no") checked @endif >No
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
                                        <h5 class="card-title" style="font-size:1rem !important;">(Petitioner)</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Alien Registration Number (A-Number) (if any)</label>
                                                <input type="text" name="a_number" max="9" class="form-control" value="{{$formData->a_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">USCIS Online Account Nummber (if any)</label>
                                                <input type="text" name="uscis_account_number" max="12" class="form-control" value="{{$formData->uscis_account_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">U.S. Social Security Number (if any)</label>
                                                <input type="text" name="us_social_security_number" class="form-control" value="{{$formData->us_social_security_number}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Your Full Name</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="user_last_name" class="form-control" value="{{$formData->user_last_name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="user_first_name" class="form-control" value="{{$formData->user_first_name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="user_middle_name" class="form-control" value="{{$formData->user_middle_name}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Other Names Used (if any)</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="user_other_last_name" class="form-control" value="{{$formData->user_other_last_name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="user_other_first_name" class="form-control" value="{{$formData->user_other_first_name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="user_other_middle_name" class="form-control" value="{{$formData->user_other_middle_name}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Other Information</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City/Town/Village of Birth</label>
                                                <input type="text" name="city_town_village_birth" class="form-control"  value="{{$formData->city_town_village_birth}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country of Birth</label>
                                                <input type="text" name="country_birth" class="form-control" value="{{$formData->country_birth}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date of Birth</label>
                                                <input type="date" max="{{date('Y-m-d')}}" name="date_birth" class="form-control" value="{{$formData->date_birth}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Sex</label><br><br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="sex" class="mr-2 situation" value="male" @if ($formData->sex == "male") checked @endif >Male
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="sex" class="mr-2 situation" value="female" @if ($formData->sex == "female") checked @endif >Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Mailing Address</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">In Care of Name</label>
                                                <input type="text" name="mailing_care_of_name" class="form-control" value="{{$formData->mailing_care_of_name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Street Number and Name</label>
                                                <input type="text" name="mailing_street_number" class="form-control" value="{{$formData->mailing_street_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="mailing_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData->mailing_apt_ste_flr == "apt") checked @endif >Apt.
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="mailing_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData->mailing_apt_ste_flr == "ste") checked @endif >Ste.
                                                </label>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="mailing_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData->mailing_apt_ste_flr == "flr") checked @endif >Flr.
                                                </label>
                                                <input type="text" name="mailing_apt_ste_flr_description" class="form-control" value="{{$formData->mailing_apt_ste_flr_description}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label>
                                                <input type="text" name="mailing_city_town" class="form-control" value="{{$formData->mailing_city_town}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="mailing_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}" @if ($formData->mailing_state == $state->code) selected @endif >{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a> </label>
                                                <input type="text" name="mailing_zip_code" class="form-control"  value="{{$formData->mailing_zip_code}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Province</label>
                                                <input type="text" name="mailing_province" class="form-control" value="{{$formData->mailing_province}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Postal Code</label>
                                                <input type="text" name="mailing_postal_code" class="form-control" value="{{$formData->mailing_postal_code}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country</label>
                                                <input type="text" name="mailing_country" class="form-control" value="{{$formData->mailing_country}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Is your current mailing address the same as your physical address?</label>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="mailing_address_same_physical" class="mr-2 situation" value="yes" @if ($formData->mailing_address_same_physical == "yes") checked @endif >Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="mailing_address_same_physical" class="mr-2 situation" value="no" @if ($formData->mailing_address_same_physical == "no") checked @endif >No
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Address History</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <h5 class="card-title col-lg-12" style="font-size:1rem !important;">
                                            Provide your physical addresses for the last five years, whether inside or outside the United States. Provide your current address first if it is different from your mailing address provided in the last section
                                        </h5>
                                        <h5 class="card-title col-lg-12" style="font-size:1rem !important;">
                                            Physical Address 1
                                        </h5>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Street Number and Name</label>
                                                <input type="text" name="physical_add_one_street_number" class="form-control" value="{{$formData->physical_add_one_street_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="physical_add_one_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData->physical_add_one_apt_ste_flr == "apt") checked @endif>Apt.
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="physical_add_one_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData->physical_add_one_apt_ste_flr == "ste") checked @endif>Ste.
                                                </label>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="physical_add_one_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData->physical_add_one_apt_ste_flr == "flr") checked @endif>Flr.
                                                </label>
                                                <input type="text" name="physical_add_one_apt_ste_flr_desc" class="form-control" value="{{$formData->physical_add_one_apt_ste_flr_desc}}">
                                             </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label>
                                                <input type="text" name="physical_add_one_city_town" class="form-control" value="{{$formData->physical_add_one_city_town}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="physical_add_one_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}" @if ($formData->physical_add_one_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a> </label>
                                                <input type="text" name="physical_add_one_zip_code" class="form-control" value="{{$formData->physical_add_one_zip_code}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Province</label>
                                                <input type="text" name="physical_add_one_province" class="form-control" value="{{$formData->physical_add_one_province}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Postal Code</label>
                                                <input type="text" name="physical_add_one_postal_code" class="form-control" value="{{$formData->physical_add_one_postal_code}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country</label>
                                                <input type="text" name="physical_add_one_country" class="form-control" value="{{$formData->physical_add_one_country}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date From</label>
                                                <input type="date" name="physical_add_one_from_date" class="form-control" value="{{$formData->physical_add_one_from_date}}">
                                            </div>
                                        </div>
                                        <h5 class="card-title col-lg-12" style="font-size:1rem !important;">
                                            Physical Address 2
                                        </h5>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Street Number and Name</label>
                                                <input type="text" name="physical_add_two_street_number" class="form-control" value="{{$formData->physical_add_two_street_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="physical_add_two_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData->physical_add_two_apt_ste_flr == "apt") checked @endif>Apt.
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="physical_add_two_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData->physical_add_two_apt_ste_flr == "ste") checked @endif>Ste.
                                                </label>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="physical_add_two_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData->physical_add_two_apt_ste_flr == "flr") checked @endif>Flr.
                                                </label>
                                                <input type="text" name="physical_add_two_apt_ste_flr_desc" class="form-control" value="{{$formData->physical_add_two_apt_ste_flr_desc}}">
                                             </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label>
                                                <input type="text" name="physical_add_two_city_town" class="form-control" value="{{$formData->physical_add_two_city_town}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="physical_add_two_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}" @if ($formData->physical_add_two_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a> </label>
                                                <input type="text" name="physical_add_two_zip_code" class="form-control" value="{{$formData->physical_add_two_zip_code}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Province</label>
                                                <input type="text" name="physical_add_two_province" class="form-control" value="{{$formData->physical_add_two_province}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Postal Code</label>
                                                <input type="text" name="physical_add_two_postal_code" class="form-control" value="{{$formData->physical_add_two_postal_code}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country</label>
                                                <input type="text" name="physical_add_two_country" class="form-control" value="{{$formData->physical_add_two_country}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date From</label>
                                                <input type="date" name="physical_add_two_from_date" class="form-control" value="{{$formData->physical_add_two_from_date}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date To</label>
                                                <input type="date" name="physical_add_two_to_date" class="form-control" value="{{$formData->physical_add_two_to_date}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Your Marital Information</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">How many times have you been married?</label>
                                                <input type="number" name="times_married" class="form-control" value="{{$formData->times_married}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Current Marital Status</label>
                                                <select name="current_marital_status" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one option</option>
                                                    <option value="single never married" @if ($formData->current_marital_status == "single never married") selected @endif >Single, Never Married</option> 
                                                    <option value="married" @if ($formData->current_marital_status == "married") selected @endif>Married</option> 
                                                    <option value="divorced" @if ($formData->current_marital_status == "divorced") selected @endif>Divorced</option> 
                                                    <option value="widowed" @if ($formData->current_marital_status == "widowed") selected @endif>Widowed</option> 
                                                    <option value="separated" @if ($formData->current_marital_status == "separated") selected @endif>Separated</option> 
                                                    <option value="annulled" @if ($formData->current_marital_status == "annulled") selected @endif>Annulled</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date of Current Marriage (if curently married)</label>
                                                <input type="date" max="{{date('Y-m-d')}}" name="date_current_marriage" class="form-control" value="{{$formData->date_current_marriage}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Place of Your Current Marriage (if married)</h5>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label>
                                                <input type="text" name="marriage_current_city_town" class="form-control" value="{{$formData->marriage_current_city_town}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="marriage_current_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose a State</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}" @if ($formData->marriage_current_state == $state->code) selected @endif >{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Province</label>
                                                <input type="text" name="marriage_current_province" class="form-control" value="{{$formData->marriage_current_province}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country</label>
                                                <input type="text" name="marriage_current_country" class="form-control" value="{{$formData->marriage_current_country}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Names of all your sopouses (if any)</h5>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Provide information on your current spouse (if currently married) 
                                                first and then list all your prior spouses (if any).</h5>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Spouse 1</h5>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="spouse_one_last_name" class="form-control" value="{{$formData->spouse_one_last_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="spouse_one_first_name" class="form-control" value="{{$formData->spouse_one_first_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="spouse_one_middle_name" class="form-control" value="{{$formData->spouse_one_middle_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date Marriage Ended</label>
                                                <input type="date" max="{{date('Y-m-d')}}" name="spouse_one_date_marriage_ended" class="form-control" value="{{$formData->spouse_one_date_marriage_ended}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Spouse 2</h5>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="spouse_two_last_name" class="form-control" value="{{$formData->spouse_two_last_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="spouse_two_first_name" class="form-control" value="{{$formData->spouse_two_first_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="spouse_two_middle_name" class="form-control" value="{{$formData->spouse_two_middle_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date Marriage Ended</label>
                                                <input type="date" max="{{date('Y-m-d')}}" name="spouse_two_date_marriage_ended" class="form-control" value="{{$formData->spouse_two_date_marriage_ended}}">
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Information About Your Parents</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Parent's 1 Information</h5>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="parent_one_last_name" class="form-control" value="{{$formData->parent_one_last_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="parent_one_first_name" class="form-control" value="{{$formData->parent_one_first_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="parent_one_middle_name" class="form-control" value="{{$formData->parent_one_middle_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date of Birth</label>
                                                <input type="date" max="{{date('Y-m-d')}}" name="parent_one_date_birth" class="form-control" value="{{$formData->parent_one_date_birth}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Sex</label> <br><br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="parent_one_sex" class="mr-2 situation" value="male" @if ($formData->parent_one_sex == "male") checked @endif >Male
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="parent_one_sex" class="mr-2 situation" value="female" @if ($formData->parent_one_sex == "female") checked @endif >Female
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country of Birth</label>
                                                <input type="text" name="parent_one_country_birth" class="form-control" value="{{$formData->parent_one_country_birth}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City/Town/Village of Residence</label>
                                                <input type="text" name="parent_one_city_town_village" class="form-control" value="{{$formData->parent_one_city_town_village}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country of Residence</label>
                                                <input type="text" name="parent_one_country_residence" class="form-control" value="{{$formData->parent_one_country_residence}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Parent's 2 Information</h5>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="parent_two_last_name" class="form-control" value="{{$formData->parent_two_last_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="parent_two_first_name" class="form-control" value="{{$formData->parent_two_first_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name</label>
                                                <input type="text" name="parent_two_middle_name" class="form-control" value="{{$formData->parent_two_middle_name}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Date of Birth</label>
                                                <input type="date" max="{{date('Y-m-d')}}" name="parent_two_date_birth" class="form-control" value="{{$formData->parent_two_date_birth}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Sex</label> <br><br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="parent_two_sex" class="mr-2 situation" value="male" @if ($formData->parent_two_sex == "male") checked @endif >Male
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="parent_two_sex" class="mr-2 situation" value="female" @if ($formData->parent_two_sex == "female") checked @endif >Female
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country of Birth</label>
                                                <input type="text" name="parent_two_country_birth" class="form-control" value="{{$formData->parent_two_country_birth}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City/Town/Village of Residence</label>
                                                <input type="text" name="parent_two_city_town_village" class="form-control" value="{{$formData->parent_two_city_town_village}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country of Residence</label>
                                                <input type="text" name="parent_two_country_residence" class="form-control" value="{{$formData->parent_two_country_residence}}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Additional Information About You (Petitioner)</h5>
                                    </div>

                                    <div class="row mt-4">

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">You Are a... </label> <br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="citizen_resident" class="mr-2 situation" value="citizen" @if ($formData->citizen_permanent == "citizen") checked @endif >U.S. Citizen
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="citizen_resident" class="mr-2 situation" value="lawful" @if ($formData->citizen_permanent == "lawful") checked @endif >Lawful Permanent Resident
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">If you are a U.S. citizen, complete the following:</h5>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Your citizenchip was acquired through:</label> <br>
                                                <select name="citizenship_acquired" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one option</option>
                                                    <option value="birth_us"  @if ($formData->citizenship_acquired == "birth_us") selected @endif >Birth in the United States</option>
                                                    <option value="naturalization" @if ($formData->citizenship_acquired == "naturalization") selected @endif >Naturalization</option>
                                                    <option value="parents" @if ($formData->citizenship_acquired == "parents") selected @endif >Parents</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Have you obtained a Certificate of Naturalization or a Certificate of Citizenship?
                                                </label> <br>
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="certificates" class="mr-2 situation" value="yes" @if ($formData->certificates == "yes") checked @endif >Yes
                                                </label>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="certificates" class="mr-2 situation" value="no" @if ($formData->certificates == "no") checked @endif >No
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">If you answered "Yes" to the last question</h5>
                                        </div>
    
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Certificate Number</label> <br>
                                                <input type="text" name="certificate_number" class="form-control" value="{{$formData->certificate_number}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Place of Issuance
                                                </label> <br>
                                                <input type="text" name="place_issuance" class="form-control" value="{{$formData->place_issuance}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Date of Issuance
                                                </label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="date_issuance" class="form-control" value="{{$formData->date_issuance}}">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">If you are a lawful permanent resident, complete the following</h5>
                                        </div>
    
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Class of Admission</label> <br>
                                                <input type="text" name="class_admission" class="form-control" @if(isset($formData2->class_admission)) value="{{$formData2->class_admission}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Date of Admission
                                                </label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="date_of_admission" class="form-control" @if(isset($formData2->date_of_admission)) value="{{$formData2->date_of_admission}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Place of Admission</h5>
                                        </div>
    
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label> <br>
                                                <input type="text" name="admission_city_town" class="form-control" @if(isset($formData2->admission_city_town)) value="{{$formData2->admission_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    State
                                                </label> <br>
                                                <select name="admission_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        @if(isset($formData2->admission_state))
                                                            <option value="{{$state->code}}" @if ($formData2->admission_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @else
                                                            <option value="{{$state->code}}"{{$state->name}} ({{$state->code}})</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Did you gain lawful permanent resident status through marriage to a U.S. citizen or lawful permanent resident?
                                                </label> <br>
                                                @if(isset($formData2->gain_through_marriage))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="gain_through_marriage" class="mr-2 situation" value="yes" @if ($formData2->gain_through_marriage == "yes") checked @endif>Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="gain_through_marriage" class="mr-2 situation" value="no" @if ($formData2->gain_through_marriage == "no") checked @endif>No
                                                    </label><br>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="gain_through_marriage" class="mr-2 situation" value="yes">Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="gain_through_marriage" class="mr-2 situation" value="no">No
                                                    </label><br>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Employment History</h5>
                                    </div>

                                    <div class="row mt-4">

                                        <div class="col-lg-12 mb-2">
                                            <div class="card-header">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Provide your employment history for the last five years, whether inside or outside the United States. Provide your current employment first. If you are currently unemployed, please indicate us and skip this part.
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Are You Currently Working?</label> <br>
                                                @if(isset($formData2->currently_working))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="currently_working" class="mr-2 situation" value="yes" @if ($formData2->currently_working == "yes") checked @endif>Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="currently_working" class="mr-2 situation" value="no" @if ($formData2->currently_working == "no") checked @endif>No
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="currently_working" class="mr-2 situation" value="yes">Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="currently_working" class="mr-2 situation" value="no">No
                                                    </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Employer 1</h5>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Name of Employer/Company</label> <br>
                                                <input type="text" name="employer_one_name_company" class="form-control" @if(isset($formData2->employer_one_name_company)) value="{{$formData2->employer_one_name_company}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Street number and Name
                                                </label> <br>
                                                <input type="text" name="employer_one_street_number" class="form-control" @if(isset($formData2->employer_one_street_number)) value="{{$formData2->employer_one_street_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                @if(isset($formData2->employer_one_apt_ste_flr))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="employer_one_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData2->employer_one_apt_ste_flr == "apt") checked @endif>Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="employer_one_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData2->employer_one_apt_ste_flr == "ste") checked @endif>Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="employer_one_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData2->employer_one_apt_ste_flr == "flr") checked @endif>Flr.
                                                    </label> <br>
                                                    <input type="text" name="employer_one_apt_ste_flr_desc" class="form-control" value="{{$formData2->employer_one_apt_ste_flr_desc}}">
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="employer_one_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="employer_one_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="employer_one_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                    </label> <br>
                                                    <input type="text" name="employer_one_apt_ste_flr_desc" class="form-control">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    City or Town
                                                </label> <br>
                                                <input type="text" name="employer_one_city_town" class="form-control" @if(isset($formData2->employer_one_city_town)) value="{{$formData2->employer_one_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    State
                                                </label> <br>
                                                <select name="employer_one_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if(isset($formData2->employer_one_state)) 
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if ($formData2->employer_one_apt_ste_flr == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a>
                                                </label> <br>
                                                <input type="text" name="employer_one_zip_code" class="form-control" @if(isset($formData2->employer_one_zip_code)) value="{{$formData2->employer_one_zip_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Province
                                                </label> <br>
                                                <input type="text" name="employer_one_province" class="form-control" @if(isset($formData2->employer_one_province)) value="{{$formData2->employer_one_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Postal Code
                                                </label> <br>
                                                <input type="text" name="employer_one_postal_code" class="form-control" @if(isset($formData2->employer_one_postal_code)) value="{{$formData2->employer_one_postal_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Country
                                                </label> <br>
                                                <input type="text" name="employer_one_country" class="form-control" @if(isset($formData2->employer_one_country)) value="{{$formData2->employer_one_country}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Your Occupation
                                                </label> <br>
                                                <input type="text" name="employer_one_occupation" class="form-control" @if(isset($formData2->employer_one_occupation)) value="{{$formData2->employer_one_occupation}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Date From
                                                </label> <br>
                                                <input type="date" name="employer_one_date_from" class="form-control" @if(isset($formData2->employer_one_date_from)) value="{{$formData2->employer_one_date_from}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">Employer 2</h5>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Name of Employer/Company</label> <br>
                                                <input type="text" name="employer_two_name_company" class="form-control" @if(isset($formData2->employer_two_name_company)) value="{{$formData2->employer_two_name_company}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Street number and Name
                                                </label> <br>
                                                <input type="text" name="employer_two_street_number" class="form-control" @if(isset($formData2->employer_two_street_number)) value="{{$formData2->employer_two_street_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                @if(isset($formData2->employer_two_apt_ste_flr))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="employer_two_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData2->employer_two_apt_ste_flr == "apt") checked @endif>Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="employer_two_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData2->employer_two_apt_ste_flr == "ste") checked @endif>Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="employer_two_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData2->employer_two_apt_ste_flr == "flr") checked @endif>Flr.
                                                    </label> <br>
                                                    <input type="text" name="employer_two_apt_ste_flr_desc" class="form-control" value="{{$formData2->employer_two_apt_ste_flr_desc}}">
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="employer_two_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="employer_two_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="employer_two_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                    </label> <br>
                                                    <input type="text" name="employer_two_apt_ste_flr_desc" class="form-control">
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    City or Town
                                                </label> <br>
                                                <input type="text" name="employer_two_city_town" class="form-control" @if(isset($formData2->employer_two_city_town)) value="{{$formData2->employer_two_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    State
                                                </label> <br>
                                                <select name="employer_two_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if(isset($formData2->employer_two_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if ($formData2->employer_two_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a>
                                                </label> <br>
                                                <input type="text" name="employer_two_zip_code" class="form-control" @if(isset($formData2->employer_two_zip_code)) value="{{$formData2->employer_two_zip_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Province
                                                </label> <br>
                                                <input type="text" name="employer_two_province" class="form-control" @if(isset($formData2->employer_two_province)) value="{{$formData2->employer_two_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Postal Code
                                                </label> <br>
                                                <input type="text" name="employer_two_postal_code" class="form-control" @if(isset($formData2->employer_two_postal_code)) value="{{$formData2->employer_two_postal_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Country
                                                </label> <br>
                                                <input type="text" name="employer_two_country" class="form-control" @if(isset($formData2->employer_two_country)) value="{{$formData2->employer_two_country}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Your Occupation
                                                </label> <br>
                                                <input type="text" name="employer_two_occupation" class="form-control" @if(isset($formData2->employer_two_occupation)) value="{{$formData2->employer_two_occupation}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Date From
                                                </label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="employer_two_date_from" class="form-control" @if(isset($formData2->employer_two_date_from)) value="{{$formData2->employer_two_date_from}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">
                                                    Date To
                                                </label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="employer_two_date_to" class="form-control" @if(isset($formData2->employer_two_date_to)) value="{{$formData2->employer_two_date_to}}" @endif>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="biographic_information" class="tab-pane" role="tabpanel">
                                    <div class="card-header">
                                        <h4 class="card-title">Biographic Information</h4>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Provide the biographic</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Ethnicity</label>
                                                <select name="ethnicity" class="form-control default-select form-control-lg">
                                                    @if(isset($formData2->ethnicity))
                                                        <option value="">Choose one option</option>
                                                        <option value="hispanic" @if ($formData2->ethnicity == "hispanic") selected @endif>Hispanic or Latino</option>
                                                        <option value="not_hispanic" @if ($formData2->ethnicity == "not_hispanic") selected @endif>Not Hispanic or Latino</option>
                                                    @else
                                                        <option value="">Choose one option</option>
                                                        <option value="hispanic">Hispanic or Latino</option>
                                                        <option value="not_hispanic">Not Hispanic or Latino</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Race (Select all applicable boxes)</label> <br>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="checkbox" value="on" name="race_white" class="custom-control-input" id="customCheckBox1" @if(isset($formData2->race_white)) @if ($formData2->race_white == "on") checked @endif @endif>
                                                    <label class="custom-control-label" for="customCheckBox1">White</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="checkbox" value="on" name="race_asian" class="custom-control-input" id="customCheckBox2" @if(isset($formData2->race_asian)) @if ($formData2->race_asian == "on") checked @endif @endif>
                                                    <label class="custom-control-label" for="customCheckBox2">Asian</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="checkbox" value="on" name="race_black" class="custom-control-input" id="customCheckBox3" @if(isset($formData2->race_black)) @if ($formData2->race_black == "on") checked @endif @endif>
                                                    <label class="custom-control-label" for="customCheckBox3">Black or African American</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="checkbox" value="on" name="race_indian_alaska" class="custom-control-input" id="customCheckBox4" @if(isset($formData2->race_indian_alaska)) @if ($formData2->race_indian_alaska == "on") checked @endif @endif>
                                                    <label class="custom-control-label" for="customCheckBox4">American Indian or Alaska Native</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-3">
                                                    <input type="checkbox" value="on" name="race_hawaiian_islander" class="custom-control-input" id="customCheckBox5" @if(isset($formData2->race_hawaiian_islander)) @if ($formData2->race_hawaiian_islander == "on") checked @endif @endif>
                                                    <label class="custom-control-label" for="customCheckBox5">Native Hawaiian or Ohter Pacific Islander</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Height</label><br>
                                                <label class="radio-inline mr-3" for="visitor">
                                                    <select name="height_feet" class="form-control default-select form-control-lg">
                                                        <option value="">Feet</option>
                                                        @if(isset($formData2->height_feet))
                                                            <option value="2" @if ($formData2->height_feet == "2") selected @endif>2</option>
                                                            <option value="3" @if ($formData2->height_feet == "3") selected @endif>3</option>
                                                            <option value="4" @if ($formData2->height_feet == "4") selected @endif>4</option>
                                                            <option value="5" @if ($formData2->height_feet == "5") selected @endif>5</option>
                                                            <option value="6" @if ($formData2->height_feet == "6") selected @endif>6</option>
                                                            <option value="7" @if ($formData2->height_feet == "7") selected @endif>7</option>
                                                            <option value="8" @if ($formData2->height_feet == "8") selected @endif>8</option>
                                                        @else
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        @endif
                                                    </select>
                                                </label>
                                                <label class="radio-inline mr-3" for="student">
                                                    <select name="height_inches" class="form-control default-select form-control-lg">
                                                        <option value="">Inches</option>
                                                        @if(isset($formData2->height_inches))
                                                            <option value="0" @if ($formData2->height_inches == "0") selected @endif>0</option>
                                                            <option value="1" @if ($formData2->height_inches == "1") selected @endif>1</option>
                                                            <option value="2" @if ($formData2->height_inches == "2") selected @endif>2</option>
                                                            <option value="3" @if ($formData2->height_inches == "3") selected @endif>3</option>
                                                            <option value="4" @if ($formData2->height_inches == "4") selected @endif>4</option>
                                                            <option value="5" @if ($formData2->height_inches == "5") selected @endif>5</option>
                                                            <option value="6" @if ($formData2->height_inches == "6") selected @endif>6</option>
                                                            <option value="7" @if ($formData2->height_inches == "7") selected @endif>7</option>
                                                            <option value="8" @if ($formData2->height_inches == "8") selected @endif>8</option>
                                                            <option value="9" @if ($formData2->height_inches == "9") selected @endif>9</option>
                                                            <option value="10" @if ($formData2->height_inches == "10") selected @endif>10</option>
                                                            <option value="11" @if ($formData2->height_inches == "11") selected @endif>11</option>
                                                        @else
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                        @endif
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Weight</label> <br>
                                                <label class="text-label" style="color:#000 !important; width:15% !important;">Pounds</label>
                                                <label class="radio-inline mr-3" style="width:15% !important;">
                                                    <input type="text" name="weight_pounds_0" class="form-control" @if(isset($formData2->weight_pounds_0)) value="{{$formData2->weight_pounds_0}}" @endif>
                                                </label>
                                                <label class="radio-inline mr-3" style="width:15% !important;">
                                                    <input type="text" name="weight_pounds_1" class="form-control" @if(isset($formData2->weight_pounds_1)) value="{{$formData2->weight_pounds_1}}" @endif>
                                                </label>
                                                <label class="radio-inline mr-3" style="width:15% !important;">
                                                    <input type="text" name="weight_pounds_2" class="form-control" @if(isset($formData2->weight_pounds_2)) value="{{$formData2->weight_pounds_2}}" @endif>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Eye Color</label> <br>
                                                <label class="radio-inline mr-3" for="visitor">
                                                    <select name="eye_color" class="form-control default-select form-control-lg">
                                                        <option value="">Choose one option</option>
                                                        @if(isset($formData2->eye_color))
                                                            <option value="black" @if ($formData2->eye_color == "black") selected @endif>Black</option>
                                                            <option value="blue" @if ($formData2->eye_color == "blue") selected @endif>Blue</option>
                                                            <option value="brown" @if ($formData2->eye_color == "brown") selected @endif>Brown</option>
                                                            <option value="gray" @if ($formData2->eye_color == "gray") selected @endif>Gray</option>
                                                            <option value="green" @if ($formData2->eye_color == "green") selected @endif>Green</option>
                                                            <option value="hazel" @if ($formData2->eye_color == "hazel") selected @endif>Hazel</option>
                                                            <option value="maroon" @if ($formData2->eye_color == "maroon") selected @endif>Maroon</option>
                                                            <option value="pink" @if ($formData2->eye_color == "pink") selected @endif>Pink</option>
                                                            <option value="unknown_other" @if ($formData2->eye_color == "unknown_other") selected @endif>Unknown/Other</option>
                                                        @else
                                                            <option value="black">Black</option>
                                                            <option value="blue">Blue</option>
                                                            <option value="brown">Brown</option>
                                                            <option value="gray">Gray</option>
                                                            <option value="green">Green</option>
                                                            <option value="hazel">Hazel</option>
                                                            <option value="maroon">Maroon</option>
                                                            <option value="pink">Pink</option>
                                                            <option value="unknown_other">Unknown/Other</option>
                                                        @endif
                                                    </select>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Hair Color</label> <br>
                                                <label class="radio-inline mr-3" for="visitor">
                                                    <select name="hair_color" class="form-control default-select form-control-lg">
                                                        @if(isset($formData3->hair_color))
                                                            <option value="">Select One Color</option>
                                                            <option value="bald" @if ($formData3->hair_color == "bald") selected @endif>Bald (No hair)</option>
                                                            <option value="black" @if ($formData3->hair_color == "black") selected @endif>Black</option>
                                                            <option value="blond" @if ($formData3->hair_color == "blond") selected @endif>Blond</option>
                                                            <option value="brown" @if ($formData3->hair_color == "brown") selected @endif>Brown</option>
                                                            <option value="gray" @if ($formData3->hair_color == "gray") selected @endif>Gray</option>
                                                            <option value="red" @if ($formData3->hair_color == "red") selected @endif>Red</option>
                                                            <option value="sandy" @if ($formData3->hair_color == "sandy") selected @endif>Sandy</option>
                                                            <option value="white" @if ($formData3->hair_color == "white") selected @endif>White</option>
                                                            <option value="unknown_other" @if ($formData3->hair_color == "unknown_other") selected @endif>Unknown/Other</option>
                                                        @else
                                                            <option value="">Select One Color</option>
                                                            <option value="bald">Bald (No hair)</option>
                                                            <option value="black">Black</option>
                                                            <option value="blond">Blond</option>
                                                            <option value="brown">Brown</option>
                                                            <option value="gray">Gray</option>
                                                            <option value="red">Red</option>
                                                            <option value="sandy">Sandy</option>
                                                            <option value="white">White</option>
                                                            <option value="unknown_other">Unknown/Other</option>
                                                        @endif
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="information_beneficiary" class="tab-pane" role="tabpanel">
                                    <div class="card-header">
                                        <h4 class="card-title">Information About Beneficiary</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Alien Registartion Number (A-Number) (if any)</label> <br>
                                                <input type="text" name="beneficiary_alien_number" max="9" class="form-control" @if (isset($formData3->beneficiary_alien_number)) value="{{$formData3->beneficiary_alien_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">USCIS Online Account Number (if any)</label> <br>
                                                <input type="text" name="beneficiary_uscis_number" max="12" class="form-control" @if (isset($formData3->beneficiary_uscis_number)) value="{{$formData3->beneficiary_uscis_number}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">U.S. Social Security Number (if any)</label> <br>
                                                <input type="text" name="beneficiary_social_sec_number" max="9" class="form-control" @if (isset($formData3->beneficiary_social_sec_number)) value="{{$formData3->beneficiary_social_sec_number}}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Beneficiary's Full Name</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="beneficiary_last_name" class="form-control" @if (isset($formData3->beneficiary_last_name)) value="{{$formData3->beneficiary_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="beneficiary_first_name" class="form-control" @if (isset($formData3->beneficiary_first_name)) value="{{$formData3->beneficiary_first_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="beneficiary_middle_name" class="form-control" @if (isset($formData3->beneficiary_middle_name)) value="{{$formData3->beneficiary_middle_name}}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Other Names Used (if any)</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="other_benef_last_name" class="form-control" @if (isset($formData3->other_benef_last_name)) value="{{$formData3->other_benef_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="other_benef_first_name" class="form-control" @if (isset($formData3->other_benef_last_name)) value="{{$formData3->other_benef_first_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="other_benef_middle_name" class="form-control" @if (isset($formData3->other_benef_last_name)) value="{{$formData3->other_benef_middle_name}}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Other Information About Beneficiary</h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City/Town/Village of Birth</label> <br>
                                                <input type="text" name="beneficiary_city_town_village" class="form-control" @if (isset($formData3->beneficiary_city_town_village)) value="{{$formData3->beneficiary_city_town_village}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country of Birth</label> <br>
                                                <input type="text" name="beneficiary_country_birth" class="form-control" @if (isset($formData3->beneficiary_country_birth)) value="{{$formData3->beneficiary_country_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date of Birth</label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="beneficiary_date_birth" class="form-control" @if (isset($formData3->beneficiary_date_birth)) value="{{$formData3->beneficiary_date_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Sex</label> <br>
                                                @if (isset($formData3->beneficiary_sex))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="beneficiary_sex" class="mr-2 situation" value="male" @if ($formData3->beneficiary_sex == "male") checked @endif >Male
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="beneficiary_sex" class="mr-2 situation" value="female" @if ($formData3->beneficiary_sex == "female") checked @endif >Female
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="beneficiary_sex" class="mr-2 situation" value="male">Male
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="beneficiary_sex" class="mr-2 situation" value="female">Female
                                                    </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;"> Has anyone else ever filed a petition for the beneficiary?</label> <br>
                                                <label class="text-label" style="color:#333 !important;"> 
                                                    <strong>NOTE:</strong> Select "Unknown" only if you do not know, and 
                                                    the beneficiary also does not know, if anyone else has 
                                                    ever filed a petition for the beneficiary
                                                </label> <br>
                                                @if (isset($formData3->beneficiary_filled_for_petition))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="beneficiary_filled_for_petition" class="mr-2 situation" value="yes" @if ($formData3->beneficiary_filled_for_petition == "yes") checked @endif >Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="beneficiary_filled_for_petition" class="mr-2 situation" value="no" @if ($formData3->beneficiary_filled_for_petition == "no") checked @endif >No
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="beneficiary_filled_for_petition" class="mr-2 situation" value="unknown" @if ($formData3->beneficiary_filled_for_petition == "unknown") checked @endif >Unknown
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="beneficiary_filled_for_petition" class="mr-2 situation" value="yes">Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="beneficiary_filled_for_petition" class="mr-2 situation" value="no">No
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="beneficiary_filled_for_petition" class="mr-2 situation" value="unknown">Unknown
                                                    </label>
                                                @endif
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Beneficiary's Physical Address</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                If the beneficiary lives outside the United States in a home without a street number or name, leave the first two questions blank.
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Street Number and Name</label> <br>
                                                <input type="text" name="benef_phys_add_street_number" class="form-control" @if (isset($formData3->benef_phys_add_street_number)) value="{{$formData3->benef_phys_add_street_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    @if (isset($formData3->benef_phys_add_apt_ste_flr))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_phys_add_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData3->benef_phys_add_apt_ste_flr == "apt") checked @endif >Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_phys_add_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData3->benef_phys_add_apt_ste_flr == "ste") checked @endif >Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="benef_phys_add_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData3->benef_phys_add_apt_ste_flr == "flr") checked @endif >Flr.
                                                    </label><br>
                                                    @else
                                                        <label class="radio-inline mr-3" for="apt">
                                                            <input type="radio" name="benef_phys_add_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="ste">
                                                            <input type="radio" name="benef_phys_add_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_phys_add_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                        </label><br>
                                                    @endif
                                                    <input type="text" name="benef_phys_add_apt_ste_flr_desc" class="form-control" @if (isset($formData3->benef_phys_add_street_number)) value="{{$formData3->benef_phys_add_apt_ste_flr_desc}}" @endif>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label> <br>
                                                <input type="text" name="benef_phys_add_city_town" class="form-control" @if (isset($formData3->benef_phys_add_city_town)) value="{{$formData3->benef_phys_add_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">State</label> <br>
                                                <select name="benef_phys_add_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if (isset($formData3->benef_phys_add_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if ($formData3->benef_phys_add_state == $state->code ) selected @endif >{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a>
                                                </label> <br>
                                                <input type="text" name="benef_phys_add_zip_code" class="form-control" @if (isset($formData3->benef_phys_add_zip_code)) value="{{$formData3->benef_phys_add_zip_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Province</label> <br>
                                                <input type="text" name="benef_phys_add_province" class="form-control" @if (isset($formData3->benef_phys_add_province)) value="{{$formData3->benef_phys_add_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Postal Code</label> <br>
                                                <input type="text" name="benef_phys_postal_code" class="form-control" @if (isset($formData3->benef_phys_postal_code)) value="{{$formData3->benef_phys_postal_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country</label> <br>
                                                <input type="text" name="benef_phys_country" class="form-control" @if (isset($formData3->benef_phys_country)) value="{{$formData3->benef_phys_country}}" @endif>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Other Address and Contact Information</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Provide the address in the United States where the beneficiary intends to live, if different from the first two questions in the last section. If the address is the same, type or print "SAME" in the following first question.
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Street Number and Name</label> <br>
                                                <input type="text" name="benef_other_street_number" class="form-control" @if (isset($formData3->benef_other_street_number)) value="{{$formData3->benef_other_street_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    @if (isset($formData3->benef_other_apt_ste_flr))
                                                        <label class="radio-inline mr-3" for="apt">
                                                            <input type="radio" name="benef_other_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData3->benef_other_apt_ste_flr == "apt") checked @endif >Apt.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="ste">
                                                            <input type="radio" name="benef_other_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData3->benef_other_apt_ste_flr == "ste") checked @endif >Ste.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_other_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData3->benef_other_apt_ste_flr == "flr") checked @endif >Flr.
                                                        </label><br>
                                                    @else
                                                        <label class="radio-inline mr-3" for="apt">
                                                            <input type="radio" name="benef_other_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="ste">
                                                            <input type="radio" name="benef_other_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_other_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                        </label><br>
                                                    @endif
                                                    <input type="text" name="benef_other_apt_ste_flr_desc" class="form-control" @if (isset($formData3->benef_other_apt_ste_flr_desc)) value="{{$formData3->benef_other_apt_ste_flr_desc}}" @endif>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label> <br>
                                                <input type="text" name="benef_other_city_town" class="form-control" @if (isset($formData3->benef_other_city_town)) value="{{$formData3->benef_other_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">State</label> <br>
                                                <select name="benef_other_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if (isset($formData3->benef_other_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if($formData3->benef_other_state == $state->code) selected @endif >{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a>
                                                </label> <br>
                                                <input type="text" name="benef_other_zip_code" class="form-control" @if (isset($formData3->benef_other_zip_code)) value="{{$formData3->benef_other_zip_code}}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Provide the beneficiary's address outside the United States, if different from the section "Beneficiary's Physical Address". If the address is the same, type or print "SAME" in the first quesion of the following part.
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Street Number and Name</label> <br>
                                                <input type="text" name="out_us_street_number" class="form-control" @if (isset($formData3->out_us_street_number)) value="{{$formData3->out_us_street_number}}" @endif>
                                            </div>
                                        </div>
    
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    @if (isset($formData3->out_us_apt_ste_flr))
                                                        <label class="radio-inline mr-3" for="apt">
                                                            <input type="radio" name="out_us_apt_ste_flr" class="mr-2 situation" value="apt" @if($formData3->out_us_apt_ste_flr == "apt") checked @endif>Apt.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="ste">
                                                            <input type="radio" name="out_us_apt_ste_flr" class="mr-2 situation" value="ste" @if($formData3->out_us_apt_ste_flr == "ste") checked @endif>Ste.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="out_us_apt_ste_flr" class="mr-2 situation" value="flr" @if($formData3->out_us_apt_ste_flr == "flr") checked @endif>Flr.
                                                        </label><br>
                                                    @else
                                                        <label class="radio-inline mr-3" for="apt">
                                                            <input type="radio" name="out_us_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="ste">
                                                            <input type="radio" name="out_us_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="out_us_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                        </label><br>
                                                    @endif
                                                    <input type="text" name="out_us_apt_ste_flr_desc" class="form-control" @if (isset($formData3->out_us_apt_ste_flr_desc)) value="{{$formData3->out_us_apt_ste_flr_desc}}" @endif>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label> <br>
                                                <input type="text" name="out_us_city_town" class="form-control" @if (isset($formData3->out_us_city_town)) value="{{$formData3->out_us_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Province</label> <br>
                                                <input type="text" name="out_us_province" class="form-control" @if (isset($formData3->out_us_province)) value="{{$formData3->out_us_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Postal Code</label> <br>
                                                <input type="text" name="out_us_postal_code" class="form-control" @if (isset($formData3->out_us_postal_code)) value="{{$formData3->out_us_postal_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country</label> <br>
                                                <input type="text" name="out_us_country" class="form-control" @if (isset($formData3->out_us_country)) value="{{$formData3->out_us_country}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Daytime Telephone Number (if any)</label> <br>
                                                <input type="text" name="out_us_tel_number" class="form-control" @if (isset($formData3->out_us_tel_number)) value="{{$formData3->out_us_tel_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Mobile Telephone Number (if any)</label> <br>
                                                <input type="text" name="out_us_mobile_number" class="form-control" @if (isset($formData4->out_us_mobile_number)) value="{{$formData4->out_us_mobile_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Email Address (if any)</label> <br>
                                                <input type="text" name="out_us_email" class="form-control" @if (isset($formData4->out_us_email)) value="{{$formData4->out_us_email}}" @endif>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Beneficiary's Marital Information</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">How many times has the beneficiary been married?</label> <br>
                                                <input type="number" name="benef_times_married" class="form-control" @if (isset($formData4->benef_times_married)) value="{{$formData4->benef_times_married}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="text-label" style="color:#000 !important;">Current Marital Status</label> <br>
                                                    @if (isset($formData4->benef_marital_status))
                                                        <label class="radio-inline mr-3" for="ste">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="married" @if ($formData4->benef_marital_status == "married") checked @endif>Married
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="divorced" @if ($formData4->benef_marital_status == "divorced") checked @endif>Divorced
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="widowed" @if ($formData4->benef_marital_status == "widowed") checked @endif>Widowed
                                                        </label> <br>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="separated" @if ($formData4->benef_marital_status == "separated") checked @endif>Separated
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="annulled" @if ($formData4->benef_marital_status == "annulled") checked @endif>Annulled
                                                        </label>
                                                        <label class="radio-inline mr-3" for="apt">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="single" @if ($formData4->benef_marital_status == "single") checked @endif>Single, never married
                                                        </label>
                                                    @else
                                                        <label class="radio-inline mr-3" for="ste">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="married">Married
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="divorced">Divorced
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="widowed">Widowed
                                                        </label> <br>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="separated">Separated
                                                        </label>
                                                        <label class="radio-inline mr-3" for="flr">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="annulled">Annulled
                                                        </label>
                                                        <label class="radio-inline mr-3" for="apt">
                                                            <input type="radio" name="benef_marital_status" class="mr-2 situation" value="single">Single, never married
                                                        </label>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date of Current Marriage (if currently married)</label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="benef_marital_date" class="form-control" @if (isset($formData4->benef_marital_date)) value="{{$formData4->benef_marital_date}}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Place of Beneficiary's Current Marriage (if married)</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label> <br>
                                                <input type="number" name="benef_current_marriage_city_town" class="form-control" @if (isset($formData4->benef_current_marriage_city_town)) value="{{$formData4->benef_current_marriage_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label class="text-label">State</label>
                                                    <select name="benef_current_state" class="form-control default-select form-control-lg">
                                                        <option value="">Choose one state</option>
                                                        @if (isset($formData4->benef_current_state))
                                                            @foreach ($states as $state)
                                                                <option value="{{$state->code}}" @if ($formData4->benef_current_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                            @endforeach
                                                        @else
                                                            @foreach ($states as $state)
                                                                <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Province</label> <br>
                                                <input type="text" name="benef_current_province" class="form-control" @if (isset($formData4->benef_current_province)) value="{{$formData4->benef_current_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country</label> <br>
                                                <input type="text" name="benef_current_country" class="form-control" @if (isset($formData4->benef_current_country)) value="{{$formData4->benef_current_country}}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Names of Beneficiary's Spouses (if any)</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Provide information on the beneficiary's current spouse (if 
                                                currently married) first and then list all the beneficiary's prior 
                                                spouses (if any).
                                            </h5>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Spouse 1
                                            </h5>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="benef_spouse_one_last_name" class="form-control" @if (isset($formData4->benef_spouse_one_last_name)) value="{{$formData4->benef_spouse_one_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="benef_spouse_one_first_name" class="form-control" @if (isset($formData4->benef_spouse_one_first_name)) value="{{$formData4->benef_spouse_one_first_name}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="benef_spouse_one_middle_name" class="form-control" @if (isset($formData4->benef_spouse_one_middle_name)) value="{{$formData4->benef_spouse_one_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date Marriage Ended</label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="benef_spouse_one_date_marriage_ended" class="form-control" @if (isset($formData4->benef_spouse_one_date_marriage_ended)) value="{{$formData4->benef_spouse_one_date_marriage_ended}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Spouse 2
                                            </h5>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="benef_spouse_two_last_name" class="form-control" @if (isset($formData4->benef_spouse_two_last_name)) value="{{$formData4->benef_spouse_two_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="benef_spouse_two_first_name" class="form-control" @if (isset($formData4->benef_spouse_two_first_name)) value="{{$formData4->benef_spouse_two_first_name}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="benef_spouse_two_middle_name" class="form-control" @if (isset($formData4->benef_spouse_two_middle_name)) value="{{$formData4->benef_spouse_two_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date Marriage Ended</label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="benef_spouse_two_date_marriage_ended" class="form-control" @if (isset($formData4->benef_spouse_two_date_marriage_ended)) value="{{$formData4->benef_spouse_two_date_marriage_ended}}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Information About Beneficiary's Family</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Provide information about the beneficiary's spouse and children. 
                                            </h5>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Person 1
                                            </h5>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="benef_family_one_last_name" class="form-control" @if (isset($formData4->benef_family_one_last_name)) value="{{$formData4->benef_family_one_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="benef_family_one_first_name" class="form-control" @if (isset($formData4->benef_family_one_first_name)) value="{{$formData4->benef_family_one_first_name}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="benef_family_one_middle_name" class="form-control" @if (isset($formData4->benef_family_one_middle_name)) value="{{$formData4->benef_family_one_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Relationship</label> <br>
                                                <input type="text" name="benef_family_one_relationship" class="form-control" @if (isset($formData4->benef_family_one_relationship)) value="{{$formData4->benef_family_one_relationship}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date of Birth</label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="benef_family_one_date_of_birth" class="form-control" @if (isset($formData4->benef_family_one_date_of_birth)) value="{{$formData4->benef_family_one_date_of_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country of Birth</label> <br>
                                                <input type="text" name="benef_family_one_country_of_birth" class="form-control" @if (isset($formData4->benef_family_one_country_of_birth)) value="{{$formData4->benef_family_one_country_of_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Person 2
                                            </h5>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="benef_family_two_last_name" class="form-control" @if (isset($formData4->benef_family_two_last_name)) value="{{$formData4->benef_family_two_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="benef_family_two_first_name" class="form-control" @if (isset($formData4->benef_family_two_first_name)) value="{{$formData4->benef_family_two_first_name}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="benef_family_two_middle_name" class="form-control" @if (isset($formData4->benef_family_two_middle_name)) value="{{$formData4->benef_family_two_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Relationship</label> <br>
                                                <input type="text" name="benef_family_two_relationship" class="form-control" @if (isset($formData4->benef_family_two_relationship)) value="{{$formData4->benef_family_two_relationship}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date of Birth</label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="benef_family_two_date_of_birth" class="form-control" @if (isset($formData4->benef_family_two_date_of_birth)) value="{{$formData4->benef_family_two_date_of_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country of Birth</label> <br>
                                                <input type="text" name="benef_family_two_country_of_birth" class="form-control" @if (isset($formData4->benef_family_two_country_of_birth)) value="{{$formData4->benef_family_two_country_of_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Person 3
                                            </h5>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="benef_family_three_last_name" class="form-control" @if (isset($formData4->benef_family_three_last_name)) value="{{$formData4->benef_family_three_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="benef_family_three_first_name" class="form-control" @if (isset($formData4->benef_family_three_first_name)) value="{{$formData4->benef_family_three_first_name}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="benef_family_three_middle_name" class="form-control" @if (isset($formData4->benef_family_three_middle_name)) value="{{$formData4->benef_family_three_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Relationship</label> <br>
                                                <input type="text" name="benef_family_three_relationship" class="form-control" @if (isset($formData4->benef_family_three_relationship)) value="{{$formData4->benef_family_three_relationship}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date of Birth</label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="benef_family_three_date_of_birth" class="form-control" @if (isset($formData4->benef_family_three_date_of_birth)) value="{{$formData4->benef_family_three_date_of_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country of Birth</label> <br>
                                                <input type="text" name="benef_family_three_country_of_birth" class="form-control" @if (isset($formData4->benef_family_three_country_of_birth)) value="{{$formData4->benef_family_three_country_of_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Person 4
                                            </h5>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="benef_family_four_last_name" class="form-control" @if (isset($formData5->benef_family_four_last_name)) value="{{$formData5->benef_family_four_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="benef_family_four_first_name" class="form-control" @if (isset($formData5->benef_family_four_first_name)) value="{{$formData5->benef_family_four_first_name}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="benef_family_four_middle_name" class="form-control" @if (isset($formData5->benef_family_four_middle_name)) value="{{$formData5->benef_family_four_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Relationship</label> <br>
                                                <input type="text" name="benef_family_four_relationship" class="form-control" @if (isset($formData5->benef_family_four_relationship)) value="{{$formData5->benef_family_four_relationship}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date of Birth</label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="benef_family_four_date_of_birth" class="form-control" @if (isset($formData5->benef_family_four_date_of_birth)) value="{{$formData5->benef_family_four_date_of_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country of Birth</label> <br>
                                                <input type="text" name="benef_family_four_country_of_birth" class="form-control" @if (isset($formData5->benef_family_four_country_of_birth)) value="{{$formData5->benef_family_four_country_of_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <h5 class="card-title" style="font-size:1rem !important;">
                                                Person 5
                                            </h5>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="benef_family_five_last_name" class="form-control" @if (isset($formData5->benef_family_five_last_name)) value="{{$formData5->benef_family_five_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="benef_family_five_first_name" class="form-control" @if (isset($formData5->benef_family_five_first_name)) value="{{$formData5->benef_family_five_first_name}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="benef_family_five_middle_name" class="form-control" @if (isset($formData5->benef_family_five_middle_name)) value="{{$formData5->benef_family_five_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Relationship</label> <br>
                                                <input type="text" name="benef_family_five_relationship" class="form-control" @if (isset($formData5->benef_family_five_relationship)) value="{{$formData5->benef_family_five_relationship}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date of Birth</label> <br>
                                                <input type="date" max="{{date('Y-m-d')}}" name="benef_family_five_date_of_birth" class="form-control" @if (isset($formData5->benef_family_five_date_of_birth)) value="{{$formData5->benef_family_five_date_of_birth}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country of Birth</label> <br>
                                                <input type="text" name="benef_family_five_country_of_birth" class="form-control" @if (isset($formData5->benef_family_five_country_of_birth)) value="{{$formData5->benef_family_five_country_of_birth}}" @endif>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Beneficiary's Entry Information</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Was the beneficiary <strong>EVER</strong> in the United States?</label> <br>
                                                @if (isset($formData5->benef_ever_us))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_ever_us" class="mr-2 situation" value="yes" @if ($formData5->benef_ever_us == "yes") checked @endif>Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_ever_us" class="mr-2 situation" value="no" @if ($formData5->benef_ever_us == "no") checked @endif>No
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_ever_us" class="mr-2 situation" value="yes">Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_ever_us" class="mr-2 situation" value="no">No
                                                    </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    If the beneficiary is currently in the United States, complete the next four questions
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">He or she arrived as a (Class of Admission)</label><br>
                                                <input type="text" name="benef_class_admission" class="form-control" @if (isset($formData5->benef_class_admission)) value="{{$formData5->benef_class_admission}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Form I-94 Arrival-Departure Record Number</label> <br>
                                                <input type="text" max="11" name="benef_form_i94_number" class="form-control" @if (isset($formData5->benef_form_i94_number)) value="{{$formData5->benef_form_i94_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date of Arrival</label> <br>
                                                <input type="date" name="benef_date_arrival" class="form-control" @if (isset($formData5->benef_date_arrival)) value="{{$formData5->benef_date_arrival}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Date authorized stay expired, or will expire, as shown on Form I-94 or Form I-95 (mm/dd/yyyy) or type or print "D/S" for Duration of Status</label> <br>
                                                <input type="date" name="benef_date_expire" class="form-control" @if (isset($formData5->benef_date_expire)) value="{{$formData5->benef_date_expire}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Passport Number</label> <br>
                                                <input type="date" name="benef_passport_number" class="form-control" @if (isset($formData5->benef_passpor_number)) value="{{$formData5->benef_passpor_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Travel Document Number</label> <br>
                                                <input type="date" name="benef_travel_doc_number" class="form-control" @if (isset($formData5->benef_travel_doc_number)) value="{{$formData5->benef_travel_doc_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country of Issuance for Passport or Travel Document</label> <br>
                                                <input type="date" name="benef_country_issuance_passport" class="form-control" @if (isset($formData5->benef_country_issuance_passport)) value="{{$formData5->benef_country_issuance_passport}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Expiration Date for Passport or Travel Document</label> <br>
                                                <input type="date" name="benef_expiration_passport" class="form-control" @if (isset($formData5->benef_expiration_passport)) value="{{$formData5->benef_expiration_passport}}" @endif>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Beneficiary's Employment Information</h4>
                                    </div>

                                    <div class="col-lg-12 mb-2">
                                        <h5 class="card-title" style="font-size:1rem !important;">
                                            Provide the beneficiary's current employment information (if applicable), even if they are employed outside of the United States. If the beneficiary is currently unemployed, type "Unemployed" in the next question and leave blank the rest.
                                        </h5>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Name of Current Employer (if applicable)</label><br>
                                                <input type="text" name="benef_employment_name_current_employer" class="form-control" @if (isset($formData5->benef_employment_name_current_employer)) value="{{$formData5->benef_employment_name_current_employer}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Street Number and Name</label><br>
                                                <input type="text" name="benef_employment_street_number" class="form-control" @if (isset($formData5->benef_employment_street_number)) value="{{$formData5->benef_employment_street_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                @if (isset($formData5->benef_employment_apt_ste_flr))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_employment_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData5->benef_employment_apt_ste_flr == "apt") checked @endif>Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_employment_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData5->benef_employment_apt_ste_flr == "ste") checked @endif>Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="benef_employment_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData5->benef_employment_apt_ste_flr == "flr") checked @endif>Flr.
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_employment_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_employment_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="benef_employment_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                    </label>
                                                @endif
                                                <input type="text" name="benef_employment_apt_ste_flr_desc" class="form-control" @if (isset($formData5->benef_employment_apt_ste_flr_desc)) value="{{$formData5->benef_employment_apt_ste_flr_desc}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label> <br>
                                                <input type="text" max="11" name="benef_employment_city_town" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">State</label> <br>
                                                <select name="benef_employment_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if (isset($formData5->benef_employment_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if ($formData5->benef_employment_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a></label> <br>
                                                <input type="text" name="benef_employment_zip_code" class="form-control" @if (isset($formData5->benef_employment_zip_code)) value="{{$formData5->benef_employment_zip_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Province</label> <br>
                                                <input type="text" name="benef_employment_province" class="form-control" @if (isset($formData5->benef_employment_province)) value="{{$formData5->benef_employment_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Postal Code</label> <br>
                                                <input type="text" name="benef_employment_postal_code" class="form-control" @if (isset($formData5->benef_employment_postal_code)) value="{{$formData5->benef_employment_postal_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Country</label> <br>
                                                <input type="text" name="benef_employment_country" class="form-control" @if (isset($formData5->benef_employment_country)) value="{{$formData5->benef_employment_country}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date Employment Began</label> <br>
                                                <input type="date" name="benef_employment_date_began" class="form-control" @if (isset($formData5->benef_employment_date_began)) value="{{$formData5->benef_employment_date_began}}" @endif>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Additional Information About Beneficiary</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Was the beneficiary <strong>EVER</strong> in immigration proceedings?
                                                </label> <br>
                                                @if (isset($formData5->benef_other_inmigration_proceed))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_other_inmigration_proceed" class="mr-2 situation" value="yes" @if ($formData5->benef_other_inmigration_proceed == "yes") checked @endif>Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_other_inmigration_proceed" class="mr-2 situation" value="no" @if ($formData5->benef_other_inmigration_proceed == "no") checked @endif>No
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_other_inmigration_proceed" class="mr-2 situation" value="yes">Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_other_inmigration_proceed" class="mr-2 situation" value="no">No
                                                    </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    If you answered "Yes," select the type of proceedings and provide the location and date of the proceedings.
                                                </label><br>
                                                @if (isset($formData5->benef_type_proceed))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_type_proceed" class="mr-2 situation" value="removal" @if ($formData5->benef_type_proceed == "removal") checked @endif>Removal
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_type_proceed" class="mr-2 situation" value="exc-dep" @if ($formData5->benef_type_proceed == "exc-dep") checked @endif>Exclusion/Deportation
                                                    </label> <br>
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_type_proceed" class="mr-2 situation" value="rescission" @if ($formData5->benef_type_proceed == "rescission") checked @endif>Rescission
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_type_proceed" class="mr-2 situation" value="other" @if ($formData5->benef_type_proceed == "other") checked @endif>Other Judicial Proceedings
                                                    </label> <br>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_type_proceed" class="mr-2 situation" value="removal">Removal
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_type_proceed" class="mr-2 situation" value="exc-dep">Exclusion/Deportation
                                                    </label> <br>
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="benef_type_proceed" class="mr-2 situation" value="rescission">Rescission
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="benef_type_proceed" class="mr-2 situation" value="other">Other Judicial Proceedings
                                                    </label> <br>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label><br>
                                                <input type="text" name="benef_proceed_city_town" class="form-control" @if (isset($formData5->benef_proceed_city_town)) value="{{$formData5->benef_proceed_city_town}}" @endif>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">State</label> <br>
                                                <select name="benef_proceed_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if (isset($formData5->benef_proceed_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if($formData5->benef_proceed_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date</label> <br>
                                                <input type="date" name="benef_proceed_date" class="form-control" @if (isset($formData5->benef_proceed_date)) value="{{$formData5->benef_proceed_date}}" @endif>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-header">
                                        <h4 class="card-title">Additional Information About Beneficiary</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h4 class="card-title">
                                                    If filing for your spouse, provide the last address at which you physically lived together. If you never lived together, type or print, "Never lived together" in the next question.
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Street Number and Name
                                                </label> <br>
                                                <input type="text" name="spouse_street_number" class="form-control" @if (isset($formData6->spouse_street_number)) value="{{$formData6->spouse_street_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                @if (isset($formData6->spouse_apt_ste_flr))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="spouse_apt_ste_flr" class="mr-2 situation" value="apt" @if($formData6->spouse_apt_ste_flr == "apt") checked @endif>Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="spouse_apt_ste_flr" class="mr-2 situation" value="ste" @if($formData6->spouse_apt_ste_flr == "ste") checked @endif>Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="spouse_apt_ste_flr" class="mr-2 situation" value="flr" @if($formData6->spouse_apt_ste_flr == "flr") checked @endif>Flr.
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="spouse_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="spouse_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="spouse_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                    </label>
                                                @endif
                                                <input type="text" name="spouse_apt_ste_flr_desc" class="form-control" @if (isset($formData6->spouse_apt_ste_flr_desc)) value="{{$formData6->spouse_apt_ste_flr_desc}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label><br>
                                                <input type="text" name="spouse_city_town" class="form-control" @if (isset($formData6->spouse_city_town)) value="{{$formData6->spouse_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">State</label> <br>
                                                <select name="spouse_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if (isset($formData6->spouse_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if($formData6->spouse_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a> </label>
                                                <input type="text" name="spouse_zip_code" class="form-control" @if (isset($formData6->spouse_zip_code)) value="{{$formData6->spouse_zip_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Province</label>
                                                <input type="text" name="spouse_province" class="form-control" @if (isset($formData6->spouse_province)) value="{{$formData6->spouse_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Postal Code</label>
                                                <input type="text" name="spouse_postal_code" class="form-control" @if (isset($formData6->spouse_postal_code)) value="{{$formData6->spouse_postal_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country</label>
                                                <input type="text" name="spouse_country" class="form-control" @if (isset($formData6->spouse_country)) value="{{$formData6->spouse_country}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date From</label> <br>
                                                <input type="date" name="spouse_date_from" class="form-control" @if (isset($formData6->spouse_date_from)) value="{{$formData6->spouse_date_from}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date To</label> <br>
                                                <input type="date" name="spouse_date_to" class="form-control" @if (isset($formData6->spouse_date_to)) value="{{$formData6->spouse_date_to}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h4 class="card-title">
                                                    The beneficiary is in the United States and will apply for 
                                                    adjustment of status to that of a lawful permanent resident 
                                                    at the U.S. Citizenship and Immigration Services (USCIS) 
                                                    office in:
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    City or Town
                                                </label> <br>
                                                <input type="text" name="benef_us_adjust_city_town" class="form-control" @if (isset($formData6->benef_us_adjust_city_town)) value="{{$formData6->benef_us_adjust_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">State</label> <br>
                                                <select name="benef_us_adjust_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if (isset($formData6->benef_us_adjust_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if($formData6->benef_us_adjust_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h4 class="card-title">
                                                    The beneficiary will not apply for adjustment of status in 
                                                    the United States, but he or she will apply for an immigrant 
                                                    visa abroad at the U.S. Embassy or U.S. Consulate in:
                                                </h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    City or Town
                                                </label> <br>
                                                <input type="text" name="benef_us_visa_city_town" class="form-control" @if (isset($formData6->benef_us_visa_city_town)) value="{{$formData6->benef_us_visa_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Province
                                                </label> <br>
                                                <input type="text" name="benef_us_visa_province" class="form-control" @if (isset($formData6->benef_us_visa_province)) value="{{$formData6->benef_us_visa_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Country
                                                </label> <br>
                                                <input type="text" name="benef_us_visa_country" class="form-control" @if (isset($formData6->benef_us_visa_country)) value="{{$formData6->benef_us_visa_country}}" @endif>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div id="other_information" class="tab-pane" role="tabpanel">

                                    <div class="card-header">
                                        <h4 class="card-title">Other Information</h4>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Have you EVER previously filed a petition for this beneficiary or any other alien?
                                                </label>
                                                @if (isset($formData6->other_benef_alien_filled))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="other_benef_alien_filled" class="mr-2 situation" value="yes" @if ($formData6->other_benef_alien_filled == "yes") checked @endif>Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="other_benef_alien_filled" class="mr-2 situation" value="no" @if ($formData6->other_benef_alien_filled == "no") checked @endif>No
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="other_benef_alien_filled" class="mr-2 situation" value="yes">Yes
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="other_benef_alien_filled" class="mr-2 situation" value="no">No
                                                    </label>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    If you answered "Yes" to the last question, provide the name, place, date of filing, and the result.
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="previous_benef_alien_last_name" class="form-control" @if (isset($formData6->previous_benef_alien_last_name)) value="{{$formData6->previous_benef_alien_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="previous_benef_alien_first_name" class="form-control" @if (isset($formData6->previous_benef_alien_first_name)) value="{{$formData6->previous_benef_alien_first_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="previous_benef_alien_middle_name" class="form-control" @if (isset($formData6->previous_benef_alien_middle_name)) value="{{$formData6->previous_benef_alien_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">City or Town</label> <br>
                                                <input type="text" name="previous_benef_alien_city_town" class="form-control" @if (isset($formData6->previous_benef_alien_city_town)) value="{{$formData6->previous_benef_alien_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">State</label> <br>
                                                <select name="previous_benef_alien_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if (isset($formData6->previous_benef_alien_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if ($formData6->previous_benef_alien_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Date Field</label> <br>
                                                <input type="date" name="previous_benef_alien_date_filed" class="form-control" @if (isset($formData6->previous_benef_alien_date_field)) value="{{$formData6->previous_benef_alien_date_field}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Result (for example, approved, denied, withdrawn)</label> <br>
                                                <input type="text" name="previous_benef_alien_result" class="form-control" @if (isset($formData6->previous_benef_alien_result)) value="{{$formData6->previous_benef_alien_result}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Relative 1
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="relative_one_last_name" class="form-control" @if (isset($formData6->relative_one_last_name)) value="{{$formData6->relative_one_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="relative_one_first_name" class="form-control" @if (isset($formData6->relative_one_first_name)) value="{{$formData6->relative_one_first_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="relative_one_middle_name" class="form-control" @if (isset($formData6->relative_one_middle_name)) value="{{$formData6->relative_one_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Relationship</label> <br>
                                                <input type="text" name="relative_one_relationship" class="form-control" @if (isset($formData6->relative_one_relationship)) value="{{$formData6->relative_one_relationship}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Relative 2
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Family Name (Last Name)</label> <br>
                                                <input type="text" name="relative_two_last_name" class="form-control" @if (isset($formData7->relative_two_last_name)) value="{{$formData7->relative_two_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Given Name (First Name)</label> <br>
                                                <input type="text" name="relative_two_first_name" class="form-control" @if (isset($formData7->relative_two_first_name)) value="{{$formData7->relative_two_first_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Middle Name</label> <br>
                                                <input type="text" name="relative_two_middle_name" class="form-control" @if (isset($formData7->relative_two_middle_name)) value="{{$formData7->relative_two_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">Relationship</label> <br>
                                                <input type="text" name="relative_two_relationship" class="form-control" @if (isset($formData7->relative_two_relationship)) value="{{$formData7->relative_two_relationship}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    <strong>WARNING:</strong> USCIS investigates the claimed relationships and 
                                                    verifies the validity of documents you submit. If you falsify a 
                                                    family relationship to obtain a visa, USCIS may seek to have 
                                                    you criminally prosecuted.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    <strong>PENALTIES:</strong> By law, you may be imprisoned for up to 5 
                                                    years or fined $250,000, or both, for entering into a marriage 
                                                    contract in order to evade any U.S. immigration law. In 
                                                    addition, you may be fined up to $10,000 and imprisoned for 
                                                    up to 5 years, or both, for knowingly and willfully falsifying 
                                                    or concealing a material fact or using any false document in 
                                                    submitting this petition.
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div id="petitioner_statement" class="tab-pane" role="tabpanel">

                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Petitioner's Statement, Contact Information, Declaration, and Signature.
                                        </h4>
                                    </div>

                                    <div class="row mt-4">

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    <strong>NOTE:</strong>  Read the Penalties section of the Form I-130 Instructions before completing this part. 
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Petitioner's Statement
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    <strong>NOTE:</strong> Select the box for either Item Number 1.a. or 1.b. If applicable, 
                                                    select the box for Item Number 2. 
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    @if (isset($formData7->petitioner_read_english))
                                                        <input type="checkbox" name="petitioner_read_english" class="mr-2 situation" value="yes" @if($formData7->petitioner_read_english == "yes") checked @endif>
                                                    @else
                                                        <input type="checkbox" name="petitioner_read_english" class="mr-2 situation" value="yes">
                                                    @endif
                                                        I can read and understand English, and I have read 
                                                    and understand every question and instruction on this 
                                                    petition and my answer to every question.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    @if(isset($formData7->interpreter_read))
                                                        <input type="checkbox" name="interpreter_read" class="mr-2 situation" value="yes" @if($formData7->interpreter_read == "yes") checked @endif>
                                                    @else
                                                        <input type="checkbox" name="interpreter_read" class="mr-2 situation" value="yes">
                                                    @endif
                                                    The interpreter named in Part 7. read to me every 
                                                    question and instruction on this petition and my 
                                                    answer to every question in: <br>
                                                    <input type="text" class="form-control" name="interpreter_language" @if (isset($formData7->interpreter_language)) value="{{$formData7->interpreter_language}}" @endif>
                                                    <br>
                                                    a language in which I am fluent. I understood all of 
                                                    this information as interpreted.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    @if(isset($formData7->preparer_prepared))
                                                        <input type="checkbox" name="preparer_prepared" class="mr-2 situation" value="yes" @if($formData7->preparer_prepared == "yes") checked @endif>
                                                    @else
                                                        <input type="checkbox" name="preparer_prepared" class="mr-2 situation" value="yes">
                                                    @endif
                                                    At my request, the preparer named in Part 8.,
                                                    <input type="text" class="form-control" name="preparer_fullname" @if (isset($formData7->preparer_fullname)) value="{{$formData7->preparer_fullname}}" @endif>
                                                    <br>
                                                    prepared this petition for me based only upon 
                                                    information I provided or authorized.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Petitioner's Contact Information
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Petitioner's Daytime Telephone Number
                                                </label> <br>
                                                <input type="text" name="petitioner_tel_number" class="form-control" @if (isset($formData7->petitioner_tel_number)) value="{{$formData7->petitioner_tel_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Petitioner's Mobile Telephone Number (if any)
                                                </label> <br>
                                                <input type="text" name="petitioner_mobile_number" class="form-control" @if (isset($formData7->petitioner_mobile_number)) value="{{$formData7->petitioner_mobile_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Petitioner's Daytime Telephone Number
                                                </label> <br>
                                                <input type="text" name="petitioner_email" class="form-control" @if (isset($formData7->petitioner_email)) value="{{$formData7->petitioner_email}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Copies of any documents I have submitted are exact 
                                                    photocopies of unaltered, original documents, and I understand 
                                                    that USCIS may require that I submit original documents to 
                                                    USCIS at a later date. Furthermore, I authorize the release of 
                                                    any information from any of my records that USCIS may need 
                                                    to determine my eligibility for the immigration benefit I seek. <br>
                                                    I further authorize release of information contained in this 
                                                    petition, in supporting documents, and in my USCIS records to 
                                                    other entities and persons where necessary for the administration 
                                                    and enforcement of U.S. immigration laws. <br>
                                                    I understand that USCIS may require me to appear for an 
                                                    appointment to take my biometrics (fingerprints, photograph, 
                                                    and/or signature) and, at that time, if I am required to provide 
                                                    biometrics, I will be required to sign an oath reaffirming that: <br>
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            I provided or authorized all of the information 
                                                            contained in, and submitted with, my petition;
                                                        </li>
                                                        <li class="list-group-item">
                                                            I reviewed and understood all of the information in, 
                                                            and submitted with, my petition; and
                                                        </li>
                                                        <li class="list-group-item">
                                                            All of this information was complete, true, and correct 
                                                            at the time of filing.
                                                        </li>
                                                    </ul>
                                                    I certify, under penalty of perjury, that all of the information in 
                                                    my petition and any document submitted with it were provided 
                                                    or authorized by me, that I reviewed and understand all of the 
                                                    information contained in, and submitted with, my petition, and 
                                                    that all of this information is complete, true, and correct.
                                                </h5>
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
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Provide the following information about the interpreter if you used one.
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Interpreter's Full Name
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Interpreter's Family Name (Last Name)
                                                </label> <br>
                                                <input type="text" name="interpreter_last_name" class="form-control" @if (isset($formData7->interpreter_last_name)) value="{{$formData7->interpreter_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Interpreter's Given Name (First Name)
                                                </label> <br>
                                                <input type="text" name="interpreter_first_name" class="form-control" @if (isset($formData7->interpreter_first_name)) value="{{$formData7->interpreter_first_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Interpreter's Business or Organization Name (if any)
                                                </label> <br>
                                                <input type="text" name="interpreter_organization_name" class="form-control" @if (isset($formData7->interpreter_organization_name)) value="{{$formData7->interpreter_organization_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Interpreter's Mailing Address
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Street Number and Name
                                                </label> <br>
                                                <input type="text" name="interpreter_street_number" class="form-control" @if (isset($formData7->interpreter_street_number)) value="{{$formData7->interpreter_street_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                @if (isset($formData7->interpreter_apt_ste_flr))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="interpreter_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData7->interpreter_apt_ste_flr == "apt") checked @endif>Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="interpreter_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData7->interpreter_apt_ste_flr == "ste") checked @endif>Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="interpreter_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData7->interpreter_apt_ste_flr == "flr") checked @endif>Flr.
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="interpreter_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="interpreter_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="interpreter_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                    </label>
                                                @endif
                                                <input type="text" name="interpreter_apt_ste_flr_desc" class="form-control" @if (isset($formData7->interpreter_apt_ste_flr_desc)) value="{{$formData7->interpreter_apt_ste_flr_desc}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    City or Town
                                                </label> <br>
                                                <input type="text" name="interpreter_city_town" class="form-control" @if (isset($formData7->interpreter_city_town)) value="{{$formData7->interpreter_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    State
                                                </label> <br>
                                                <select name="interpreter_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if (isset($formData7->interpreter_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if ($formData7->interpreter_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a>
                                                </label> <br>
                                                <input type="text" name="interpreter_zip_code" class="form-control" @if (isset($formData7->interpreter_zip_code)) value="{{$formData7->interpreter_zip_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Province
                                                </label> <br>
                                                <input type="text" name="interpreter_province" class="form-control" @if (isset($formData7->interpreter_province)) value="{{$formData7->interpreter_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Postal Code
                                                </label> <br>
                                                <input type="text" name="interpreter_postal_code" class="form-control" @if (isset($formData7->interpreter_postal_code)) value="{{$formData7->interpreter_postal_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Country
                                                </label> <br>
                                                <input type="text" name="interpreter_country" class="form-control" @if (isset($formData7->interpreter_country)) value="{{$formData7->interpreter_country}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Interpreter's Contact Information
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Interpreter's Daytime Telephone Number
                                                </label> <br>
                                                <input type="text" name="interpreter_tel_number" class="form-control" @if (isset($formData7->interpreter_tel_number)) value="{{$formData7->interpreter_tel_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Interpreter's Mobile Telephone Number (if any)
                                                </label> <br>
                                                <input type="text" name="interpreter_mobile_number" class="form-control" @if (isset($formData7->interpreter_mobile_number)) value="{{$formData7->interpreter_mobile_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Interpreter's Email Address (if any)
                                                </label> <br>
                                                <input type="text" name="interpreter_email" class="form-control" @if (isset($formData7->interpreter_email)) value="{{$formData7->interpreter_email}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    I certify, under penalty of perjury, that: <br>
                                                    I am fluent in English and <br>
                                                    <input type="text" name="interpreter_language_certified" class="form-control" @if (isset($formData7->interpreter_language_certified)) value="{{$formData7->interpreter_language_certified}}" @endif>
                                                    <br>
                                                    which is the same language provided in Part 6., (second question), 
                                                     and I have read to this petitioner in the identified language 
                                                    every question and instruction on this petition and his or her 
                                                    answer to every question. The petitioner informed me that he or 
                                                    she understands every instruction, question, and answer on the 
                                                    petition, including the Petitioner's Declaration and
                                                    Certification, and has verified the accuracy of every answer.
                                                </h5>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div id="contact_information" class="tab-pane" role="tabpanel">

                                    <div class="card-header">
                                        <h4 class="card-title">
                                            Contact Information, Declaration, and Signature of the Person Preparing this Petition, if Other Than the Petitioner
                                        </h4>
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
                                                    Preparer's Full Name
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Family Name (Last Name)
                                                </label> <br>
                                                <input type="text" name="preparer_last_name" class="form-control" @if (isset($formData7->preparer_last_name)) value="{{$formData7->preparer_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Given Name (First Name)
                                                </label> <br>
                                                <input type="text" name="preparer_first_name" class="form-control" @if (isset($formData7->preparer_first_name)) value="{{$formData7->preparer_first_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Business or Organization Name (if any)
                                                </label> <br>
                                                <input type="text" name="preparer_organization_name" class="form-control" @if (isset($formData7->preparer_organization_name)) value="{{$formData7->preparer_organization_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Preparer's Mailing Address
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Street Number and Name
                                                </label> <br>
                                                <input type="text" name="preparer_street_number" class="form-control" @if (isset($formData7->preparer_street_number)) value="{{$formData7->preparer_street_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                @if (isset($formData7->preparer_apt_ste_flr))
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="preparer_apt_ste_flr" class="mr-2 situation" value="apt" @if ($formData7->preparer_apt_ste_flr == "apt") checked @endif>Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="preparer_apt_ste_flr" class="mr-2 situation" value="ste" @if ($formData7->preparer_apt_ste_flr == "ste") checked @endif>Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="preparer_apt_ste_flr" class="mr-2 situation" value="flr" @if ($formData7->preparer_apt_ste_flr == "flr") checked @endif>Flr.
                                                    </label>
                                                @else
                                                    <label class="radio-inline mr-3" for="apt">
                                                        <input type="radio" name="preparer_apt_ste_flr" class="mr-2 situation" value="apt">Apt.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="ste">
                                                        <input type="radio" name="preparer_apt_ste_flr" class="mr-2 situation" value="ste">Ste.
                                                    </label>
                                                    <label class="radio-inline mr-3" for="flr">
                                                        <input type="radio" name="preparer_apt_ste_flr" class="mr-2 situation" value="flr">Flr.
                                                    </label>
                                                @endif
                                                <input type="text" name="preparer_apt_ste_flr_desc" class="form-control" @if (isset($formData7->preparer_apt_ste_flr_desc)) value="{{$formData7->preparer_apt_ste_flr_desc}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    City or Town
                                                </label> <br>
                                                <input type="text" name="preparer_city_town" class="form-control" @if (isset($formData7->preparer_city_town)) value="{{$formData7->preparer_city_town}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    State
                                                </label> <br>
                                                <select name="preparer_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @if (isset($formData7->preparer_state))
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}" @if($formData7->preparer_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @else
                                                        @foreach ($states as $state)
                                                            <option value="{{$state->code}}">{{$state->name}} ({{$state->code}})</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    ZIP Code <a href="https://tools.usps.com/go/ZipLookupAction_input" target="_blank" class="link" rel="noopener noreferrer">(USPS ZIP code Lookup)</a>
                                                </label> <br>
                                                <input type="text" name="preparer_zip_code" class="form-control" @if (isset($formData7->preparer_zip_code)) value="{{$formData7->preparer_zip_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Province
                                                </label> <br>
                                                <input type="text" name="preparer_province" class="form-control" @if (isset($formData7->preparer_province)) value="{{$formData7->preparer_province}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Postal Code
                                                </label> <br>
                                                <input type="text" name="preparer_postal_code" class="form-control" @if (isset($formData7->preparer_postal_code)) value="{{$formData7->preparer_postal_code}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Country
                                                </label> <br>
                                                <input type="text" name="preparer_country" class="form-control" @if (isset($formData7->preparer_country)) value="{{$formData7->preparer_country}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <h5 class="card-title" style="font-size:1rem !important;">
                                                    Preparer's Contact Information
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Daytime Telephone Number
                                                </label> <br>
                                                <input type="text" name="preparer_tel_number" class="form-control" @if (isset($formData8->preparer_tel_number)) value="{{$formData8->preparer_tel_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Mobile Telephone Number (if any)
                                                </label> <br>
                                                <input type="text" name="preparer_mobile_number" class="form-control" @if (isset($formData8->preparer_mobile_number)) value="{{$formData8->preparer_mobile_number}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Preparer's Email Address (if any)
                                                </label> <br>
                                                <input type="text" name="preparer_email" class="form-control" @if (isset($formData8->preparer_email)) value="{{$formData8->preparer_email}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    @if (isset($formData8->preparer_email))
                                                        <input type="checkbox" name="preparer_statement_1" class="mr-2 situation" value="yes" @if ($formData8->preparer_statement_1 == "yes") checked @endif>
                                                    @else
                                                        <input type="checkbox" name="preparer_statement_1" class="mr-2 situation" value="yes">
                                                    @endif
                                                    I am not an attorney or accredited representative but 
                                                    have prepared this petition on behalf of the petitioner 
                                                    and with the petitioner's consent.
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    @if (isset($formData8->preparer_statement_2))
                                                        <input type="checkbox" name="preparer_statement_2" class="mr-2 situation" value="yes" @if ($formData8->preparer_statement_2 == "yes") checked @endif>
                                                    @else
                                                        <input type="checkbox" name="preparer_statement_2" class="mr-2 situation" value="yes">
                                                    @endif
                                                    I am an attorney or accredited representative and my 
                                                    representation of the petitioner in this case
                                                </label>
                                                <label class="radio-inline mr-3" for="apt">
                                                    @if (isset($formData8->extends))
                                                        <input type="radio" name="extends" class="mr-2 situation" value="yes" @if ($formData8->extends == "yes") checked @endif>
                                                        extends
                                                        <input type="radio" name="extends" class="mr-2 situation" value="no" @if ($formData8->extends == "no") checked @endif>
                                                    @else
                                                        <input type="radio" name="extends" class="mr-2 situation" value="yes">
                                                        extends
                                                        <input type="radio" name="extends" class="mr-2 situation" value="no">
                                                    @endif
                                                    does not extend beyond the preparation
                                                    of this petition. <br>
                                                    <strong>NOTE:</strong> If you are an attorney or accredited 
                                                    representative whose representation extends beyond 
                                                    preparation of this petition, you may be obliged to 
                                                    submit a completed Form G-28, Notice of Entry of 
                                                    Appearance as Attorney or Accredited 
                                                    Representative, with this petition.
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
                                                <input type="text" name="extra_info_last_name" class="form-control" @if (isset($formData8->extra_info_last_name)) value="{{$formData8->extra_info_last_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Given Name (First Name)
                                                </label> <br>
                                                <input type="text" name="extra_info_first_name" class="form-control" @if (isset($formData8->extra_info_first_name)) value="{{$formData8->extra_info_first_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Middle Name
                                                </label> <br>
                                                <input type="text" name="extra_info_middle_name" class="form-control" @if (isset($formData8->extra_info_middle_name)) value="{{$formData8->extra_info_middle_name}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    A-Number (if any)
                                                </label> <br>
                                                <input type="text" name="extra_info_a_number" class="form-control" @if (isset($formData8->extra_info_a_number)) value="{{$formData8->extra_info_a_number}}" @endif>
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
                                                <input type="text" name="extra_info_page_number_1" class="form-control" @if (isset($formData8->extra_info_page_number_1)) value="{{$formData8->extra_info_page_number_1}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_info_part_number_1" class="form-control" @if (isset($formData8->extra_info_part_number_1)) value="{{$formData8->extra_info_part_number_1}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_info_item_number_1" class="form-control" @if (isset($formData8->extra_info_item_number_1)) value="{{$formData8->extra_info_item_number_1}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_info_desc_1" class="form-control" rows="6">@if (isset($formData8->extra_info_desc_1)) {{$formData8->extra_info_desc_1}} @endif</textarea>
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
                                                <input type="text" name="extra_info_page_number_2" class="form-control" @if (isset($formData8->extra_info_page_number_2)) value="{{$formData8->extra_info_page_number_2}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_info_part_number_2" class="form-control" @if (isset($formData8->extra_info_part_number_2)) value="{{$formData8->extra_info_part_number_2}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_info_item_number_2" class="form-control" @if (isset($formData8->extra_info_item_number_2)) value="{{$formData8->extra_info_item_number_2}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_info_desc_2" class="form-control" rows="6">@if (isset($formData8->extra_info_desc_2)) {{$formData8->extra_info_desc_2}} @endif</textarea>
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
                                                <input type="text" name="extra_info_page_number_3" class="form-control" @if (isset($formData8->extra_info_page_number_3)) value="{{$formData8->extra_info_page_number_3}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_info_part_number_3" class="form-control" @if (isset($formData8->extra_info_part_number_3)) value="{{$formData8->extra_info_part_number_3}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_info_item_number_3" class="form-control" @if (isset($formData8->extra_info_item_number_3)) value="{{$formData8->extra_info_item_number_3}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_info_desc_3" class="form-control" rows="6">@if (isset($formData8->extra_info_desc_3)) {{$formData8->extra_info_desc_3}} @endif</textarea>
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
                                                <input type="text" name="extra_info_page_number_4" class="form-control" @if (isset($formData8->extra_info_page_number_4)) value="{{$formData8->extra_info_page_number_4}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_info_part_number_4" class="form-control" @if (isset($formData8->extra_info_part_number_4)) value="{{$formData8->extra_info_part_number_4}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_info_item_number_4" class="form-control" @if (isset($formData8->extra_info_item_number_4)) value="{{$formData8->extra_info_item_number_4}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_info_desc_4" class="form-control" rows="6">@if (isset($formData8->extra_info_desc_4)) {{$formData8->extra_info_desc_4}} @endif</textarea>
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
                                                <input type="text" name="extra_info_page_number_5" class="form-control" @if (isset($formData8->extra_info_item_number_5)) value="{{$formData8->extra_info_item_number_5}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Part Number
                                                </label> <br>
                                                <input type="text" name="extra_info_part_number_5" class="form-control" @if (isset($formData8->extra_info_part_number_5)) value="{{$formData8->extra_info_part_number_5}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Item Number
                                                </label> <br>
                                                <input type="text" name="extra_info_item_number_5" class="form-control" @if (isset($formData8->extra_info_item_number_5)) value="{{$formData8->extra_info_item_number_5}}" @endif>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 mb-2">
                                            <div class="form-group">
                                                <label class="text-label" style="color:#000 !important;">
                                                    Extra Information
                                                </label> <br>
                                                <textarea name="extra_info_desc_5" class="form-control" rows="6">@if (isset($formData8->extra_info_desc_5)) {{$formData8->extra_info_desc_5}} @endif</textarea>
                                            </div>
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary">Save Changes</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection