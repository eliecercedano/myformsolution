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
                    <h4 class="card-title">AR-11 Form</h4>
                </div>
                <div class="card-body">
                    <div id="smartwizard" class="form-wizard order-create">
                        <ul class="nav nav-wizard">
                            <li><a class="nav-link" href="#wizard_Service"> 
                                <span>1</span> 
                            </a></li>
                            <li><a class="nav-link" href="#wizard_Time">
                                <span>2</span>
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
                            <form action="{{route('ar-11.update', $formData->id)}}" method="post">
                                @method('put')
                                @csrf
                                <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                    <div class="card-header">
                                        <h4 class="card-title">Information About You</h4>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Family Name (Last Name)</label>
                                                <input type="text" name="lastName" class="form-control" value="{{$formData->last_name}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Given Name (First Name)</label>
                                                <input type="text" name="firstName" class="form-control" value="{{$formData->first_name}}" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Middle Name (if applicable)</label>
                                                <input type="text" name="middleName" class="form-control"  value="{{$formData->middle_name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 mb-2">
                                            <div class="form-group">
                                                <label class="text-label mr-3">You are in the United States as a:</label>
                                                <label class="radio-inline mr-3" for="visitor">
                                                    <input type="radio" name="situation" class="mr-2 situation" value="visitor" @if ($formData->situation == "visitor") checked @endif >Visitor
                                                </label>
                                                <label class="radio-inline mr-3" for="student">
                                                    <input type="radio" name="situation" class="mr-2 situation" value="student" @if ($formData->situation == "student") checked @endif>Student
                                                </label>
                                                <label class="radio-inline mr-3" for="permanent_resident">
                                                    <input type="radio" name="situation" class="mr-2 situation"  value="permanent_resident" @if ($formData->situation == "permanent_resident") checked @endif>Permanent Resident
                                                </label>
                                                <label class="radio-inline mr-3" id="other" for="Other">
                                                    <input type="radio" name="situation" class="mr-2 situation"  value="other"  @if ($formData->situation == "other") checked @endif>Other
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2" id="specification" @if($formData->situation != "other") style="display:none;" @endif >
                                            <div>
                                                <input type="text" name="specification" placeholder="Specify" class="form-control"  value="{{$formData->specify_other}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Country of Citizenship</label>
                                                <input type="text" name="country_cityzenship" class="form-control" required value="{{$formData->country_cityzenship}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="text-label">Date of Birth</label>
                                                <input type="date" name="date_of_birth" max="{{date('Y-m-d')}}" class="form-control" required  value="{{$formData->date_of_birth}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="form-group">
                                                <label class="text-label">Alien Registration Number (A-Number) (if any)</label>
                                                <input type="text" name="alien_reg_number" class="form-control" maxlength="9"  value="{{$formData->alien_reg_number}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                    <div class="card-header">
                                        <h4 class="card-title">Information About Your Address</h4>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Present Phisical Address (No PO Boxes)</h5>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Street Number and Name</label>
                                                <input type="text" name="present_street_number" class="form-control" required value="{{$formData->present_street_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="present_apt_ste_flr" class="mr-2 situation" value="apt" @if($formData->present_apt_ste_flr == "apt") checked @endif >Apt.
                                                </label><br>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="present_apt_ste_flr" class="mr-2 situation" value="ste" @if($formData->present_apt_ste_flr == "ste") checked @endif>Ste.
                                                </label><br>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="present_apt_ste_flr" class="mr-2 situation" value="flr" @if($formData->present_apt_ste_flr == "flr") checked @endif>Flr.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Number</label>
                                                <input type="text" name="present_number" class="form-control" required value="{{$formData->present_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label>
                                                <input type="text" name="present_city_town" class="form-control" required value="{{$formData->present_city_town}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="present_state" class="form-control default-select form-control-lg" required>
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}" @if ($state->code == $formData->present_state) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">ZIP Code</label>
                                                <input type="text" name="present_zip_code" class="form-control" required value="{{$formData->present_zip_code}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Previous Phisical Address</h5>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Street Number and Name</label>
                                                <input type="text" name="previous_street_number" class="form-control" value="{{$formData->previous_street_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="previous_apt_ste_flr" class="mr-2 situation" value="apt" @if($formData->previous_apt_ste_flr == "apt") checked @endif>Apt.
                                                </label><br>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="previous_apt_ste_flr" class="mr-2 situation" value="ste" @if($formData->previous_apt_ste_flr == "ste") checked @endif>Ste.
                                                </label><br>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="previous_apt_ste_flr" class="mr-2 situation" value="flr" @if($formData->previous_apt_ste_flr == "flr") checked @endif>Flr.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Number</label>
                                                <input type="text" name="previous_number" class="form-control" value="{{$formData->previous_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label>
                                                <input type="text" name="previous_city_town" class="form-control" value="{{$formData->previous_city_town}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="previous_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}" @if($state->code == $formData->previous_state) selected @endif >{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">ZIP Code</label>
                                                <input type="text" name="previous_zip_code" class="form-control" value="{{$formData->previous_zip_code}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5 class="card-title" style="font-size:1rem !important;">Mailing Address (Optional)</h5>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-6 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Street Number and Name</label>
                                                <input type="text" name="mailing_street_number" class="form-control" value="{{$formData->mailing_street_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 mb-2">
                                            <div class="form-group">
                                                <label class="radio-inline mr-3" for="apt">
                                                    <input type="radio" name="mailing_apt_ste_flr" class="mr-2 situation" value="apt" @if($formData->mailing_apt_ste_flr == "apt") checked @endif>Apt.
                                                </label><br>
                                                <label class="radio-inline mr-3" for="ste">
                                                    <input type="radio" name="mailing_apt_ste_flr" class="mr-2 situation" value="ste" @if($formData->mailing_apt_ste_flr == "ste") checked @endif>Ste.
                                                </label><br>
                                                <label class="radio-inline mr-3" for="flr">
                                                    <input type="radio" name="mailing_apt_ste_flr" class="mr-2 situation" value="flr" @if($formData->mailing_apt_ste_flr == "flr") checked @endif>Flr.
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">Number</label>
                                                <input type="text" name="mailing_number" class="form-control" value="{{$formData->mailing_number}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">City or Town</label>
                                                <input type="text" name="mailing_city_town" class="form-control"  value="{{$formData->mailing_city_town}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">State</label>
                                                <select name="mailing_state" class="form-control default-select form-control-lg">
                                                    <option value="">Choose one state</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->code}}" @if($formData->mailing_state == $state->code) selected @endif>{{$state->name}} ({{$state->code}})</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-2">
                                            <div class="form-group">
                                                <label class="text-label">ZIP Code</label>
                                                <input type="text" name="mailing_zip_code" class="form-control" value="{{$formData->mailing_zip_code}}">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection