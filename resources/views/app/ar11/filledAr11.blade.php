<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dfac54d038.js" crossorigin="anonymous"></script>
    <title>AR-11</title>
    <style>
.sabana{

}

.flex{
    display: flex;
}

.w-1-3{
    width: 33.3%;
}

.w-2-3{
    width: 66.6%;
}

.w-1-6{
    width: 16.66%;
}

.w-5-6{
    width: 83.33%;
}

.w-1-4{
    width: 25%;
}

.w-1-7{
    width: 17.7%;
}

.w-1-8{
    width: 12.5%;
}

.w-7-8{
    width: 87.5%;
}

.w-1-2{
    width: 50%;
}
.w-3-4{
    width: 75%;
}
.w-full{
    width: 100%;
}

.bg-color-blue{
    background-color: blue;
}

.bg-color-aqua{
    background-color: aqua;
}

.bg-color-red{
    background-color: red;
}

.bg-color-gray{
    background-color: #B9B9B9;
}

.header{
    margin-bottom: 5px;
}

.sec-title{
    padding: 5px;
    font-weight: bold;
    margin-top: 3px;
/*    background-color: gray; */
    background-color: #E0E0E0;
    font-size: 1rem;
    border: 2px solid black
}

.sec-title-nob{
    padding: 5px;
/*    background-color: gray; */
    background-color: #E0E0E0;
    font-size: 1rem;
    width: 100%;
    height:auto;
}

.text-center{
    text-align: center;
}

.text-right{
    text-align: right;
}

h2{
    font-weight: normal;
    font-size: 1.25rem;
    margin-top: 0;
    margin-bottom: 0;
}

h3{
    font-weight: normal;
    font-size: .75rem;
    margin-top: 0;
    margin-bottom: 0;
}

.font-bold{
    font-weight: bold;
}

.border-bottom{
    border-bottom: 1px solid black;
}

.border-r{
    border-right: 1px solid black;
}

.border-l{
    border-left: 1px solid black;
}

.border-top{
    border-top: 1px solid black;
}

.mt-1{
    margin-top: 0.25em;
}

.mt-2{
    margin-top: 0.5em;
}

.ml-2{
    margin-left: 0.5em;
}

.mr-2{
    margin-right: 0.5em;
}

.mr-1{
    margin-right: 0.25em;
}

.mt-3{
    margin-top: 0.75em;
}

.mt-4{
    margin-top: 1em;
}

.mt-6{
    margin-top: 1.5em;
}

.mt-8{
    margin-top: 2em;
}

.mt-10{
    margin-top: 2.5em;
}

.mt-12{
    margin-top: 3em;
}

.mt-14{
    margin-top: 3.5em;
}

.mt-16{
    margin-top: 4em;
}

.mt-18{
    margin-top: 4.5em;
}

.mt-20{
    margin-top: 5em;
}

.mt-24{
    margin-top: 6em;
}

.mt-28{
    margin-top: 7em;
}

.mt-32{
    margin-top: 8em;
}

.mt-40{
    margin-top: 10em;
}

.mt-48{
    margin-top: 12em;
}

.mt-50{
    margin-top: 12.5em;
}

.mt-52{
    margin-top: 13em;
}

.mt-52{
    margin-top: 15em;
}

.notes{
    font-weight: bold;
    font-size: .85rem;
    padding-top: 4px;
    padding-bottom: 4px;
}

.inputs{
    border: 1px solid black;
    background-color: white;
    width: 100%;
    height: 1.25rem;
    padding: 2px;
}

.px-4{
    padding-left: 1rem;
    padding-right: 1rem;
}

.px-1{
    padding-left: .25rem;
    padding-right: .25rem;
}

.py-4{
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.pt-1{
    padding-top: .25rem;
}

.p-4{
    padding-left: 1rem;
    padding-right: 1rem;
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.mx-4{
    margin-left: 1rem;
    margin-right: 1rem;
}

.my-2{
    margin-top: .5rem;
    margin-bottom: .5rem;
}

.ml-4{
    margin-left: 1rem;
}

.ml-1{
    margin-left: 0.25rem;
}

.pl-1{
    padding-left: 0.25rem;
}

.mb-1{
    margin-bottom: 0.25rem;
}

.mb-2{
    margin-bottom: .5rem;
}

.mb-4{
    margin-bottom: 1rem;
}

.ml-2{
    margin-left: 0.5rem;
}

.pb-2{
    padding-bottom: 0.5rem;
}

.pb-3{
    padding-bottom: 0.75rem;
}

.pl-4{
    padding-left: 1rem;
}

.pr-4{
    padding-right: 1rem;
}

.labels{
    font-size: .75rem;
}

.justify-around{
    justify-content: space-around;
}

.justify-between{
    justify-content: space-between;
}

.justify-center{
    justify-content: center;
}

.justify-start{
    justify-content: start;  
}

.justify-end{
    justify-content: end;
}

.justify-right{
    justify-content: right;
}

input.checkboxState{
    width: 8px;
    height: 8px;
}

.input-cell{
    border: 1px solid #D9D9D9;
    background-color: white;
    width: .8rem;
    height: 1rem;
    padding: 2px;
}

.input-cell-thin{
    border: 1px solid #D9D9D9;
    background-color: white;
    width: .45rem;
    height: .55rem;
    padding: 2px;
}

.border{
    border: 1px solid black;
}

.border-b{
    border-bottom: 1px solid black;
}

.text-center{
    text-align: center;
}

.separator{
    border-top: 7px solid black;
    height: 3px;
    border-bottom: 1px solid black;
}

.text{
    font-size: .81rem;
}

.link{
    color: blue;
    text-decoration: underline;
    font-size: .7rem;
}

.italic{
    font-style: italic;
}

.py-1{
    padding-top: .25rem;
    padding-bottom: .25rem;
}

.my-1{
    margin-top: .25rem;
    margin-bottom: .25rem;
}

.py-2{
    padding-top: .5rem;
    padding-bottom: .5rem;
}

.py-3{
    padding-top: .75rem;
    padding-bottom: .75rem;
}

.py-4{
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.w-1-10{
    width: 10%;
}

.w-3-10{
    width: 30%;
}

.w-4-10{
    width: 40%;
}

.w-6-10{
    width: 60%;
}

.w-7-10{
    width: 70%;
}

.w-8-10{
    width: 80%;
}

.w-9-10{
    width: 90%;
}

.text-sm{
    font-size: .6rem;
}

.center-v{
    align-items: center;
}

.p-1{
    padding: .25rem;
}

.p-2{
    padding: .5rem;
}

.text-right{
    text-align: right;
}

.page-break {
    page-break-before: always;
}

table{
    width: 100%;
}

footer {
    position: fixed; 
    bottom: -60px; 
    left: 0px; 
    right: 0px;
    height: 50px;
    color: black;
    border-top: solid 2px black;
}

h3{
    font-size: .8rem;
}

.cell{
    height: 1.25rem;
    width:2%;
}

.cell-e{
    border-left: 1px solid #B9B9B9;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
    border-right: 1px solid #000;
}

.cell-m{
    border-left: 1px solid #B9B9B9;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
    border-right: 1px solid #b9b9b9;
}

.cell-b{
    border-left: 1px solid #000;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;
    border-right: 1px solid #b9b9b9;
}

</style>

</head>
<body>
    <?php
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $logo = 'c:/xampp/htdocs/myformsolution/public/images/header-form/Seal_of_the_United_States_Department_of_Homeland_Security.svg.png';
            $flecha = 'c:/xampp/htdocs/myformsolution/public/images/header-form/flecha.png';
            $play = 'c:/xampp/htdocs/myformsolution/public/images/header-form/play.png';
        } else {
            $logo = '/var/www/myformsolution/public/images/header-form/Seal_of_the_United_States_Department_of_Homeland_Security.svg.png';
            $flecha = '/var/www/myformsolution/public/images/header-form/flecha.png';
            $play = '/var/www/myformsolution/public/images/header-form/play.png';
        }
        $logoBase64 = "data:image/png;base64," . base64_encode(file_get_contents($logo));
        $flechaBase64 = "data:image/png;base64," . base64_encode(file_get_contents($flecha));
        $playBase64 = "data:image/png;base64," . base64_encode(file_get_contents($play));
    ?>
    <div class="sabana">
        <div class="flex header">
            <div class="w-1-4" style="float:left;">
                <img src="{{$logoBase64}}" alt="US Department of Homeland Security" width="65px">
            </div>
            <div class="w-1-2 text-center mb-1" style="float:center; margin-left:25%;">
                <h2 class="font-bold">Alien's Change of Address Card</h2>
                <p class="font-bold" style="margin-top:5px; font-size:0.85rem; margin-bottom:0px;">Department of Homeland Security</p>
                <p style="font-size:0.8rem; margin-top:0px;">U.S. Citizenship and Immigration Services</p>
            </div>
            <div class="text-center mt-2" style="float:right; margin-left:80%;">
                <h3 class="font-bold">USCIS</h3>
                <h3 class="font-bold">Form AR-11</h3>
                <h3>OMB No. 1615-0007</h3>
                <h3>Expires 08/31/2024</h3>
            </div>
        </div>
        <div class="separator w-full" style="margin-top: 4.5rem;">
            
        </div>
        <div class="mt-1 notes w-full">
            NOTE: An asterisk (*) indicates a mandatory field that must be completed.
        </div>
        <div class="mt-2 border sec-title-nob font-bold">
            Information About You
        </div>
        <div class="w-full">
            <div class="" style="float:left; width:37%;">
                <div class="text mt-2">
                    <div class="w-full" style="">
                        *Family Name (Last Name)
                    </div>
                    <div class="w-full">
                        <input type="text" class="inputs" value="{{$formData->last_name}}">
                    </div>
                </div>
            </div>
            <div class="" style="float:center; margin-left:40%; width:28%;">
                <div class="text mt-2">
                    <div class="w-full" style="">
                        *Given Name (First Name)
                    </div>
                    <div class="w-full">
                        <input type="text" class="inputs" value="{{$formData->first_name}}">
                    </div>
                </div>
            </div>
            <div class="" style="float:right; margin-left:71%; width:29%;">
                <div class="text mt-2">
                    <div class="w-full" style="">
                        Middle Name (If Any)
                    </div>
                    <div class="w-full">
                        <input type="text" class="inputs" value="{{$formData->middle_name}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="text">
            <div style="width:25%; margin-top:4rem; margin-left:0%;">
                I am in the United States as a:
            </div>
            <div style="float:center; width:3%; margin-top:-19px; margin-left:25%;">
                <input type="checkbox" class="checkboxState" @if($formData->situation == 'visitor') checked @endif>
            </div>
            <div style="float:center; width:7%; margin-top:-15px; margin-left:28%;">
                Visitor
            </div>
            <div style="float:center; width:3%; margin-top:-19px; margin-left:35%;">
                <input type="checkbox" class="checkboxState" @if($formData->situation == 'student') checked @endif>
            </div>
            <div style="float:center; width:7%; margin-top:-15px; margin-left:38%;">
                Student
            </div>
            <div style="float:center; width:3%; margin-top:-19px; margin-left:45%;">
                <input type="checkbox" class="checkboxState" @if($formData->situation == 'permanent_resident') checked @endif>
            </div>
            <div style="float:center; width:17%; margin-top:-15px; margin-left:48%;">
                Permanent Resident
            </div>
            <div style="float:center; width:3%; margin-top:-19px; margin-left:65%;">
                <input type="checkbox" class="checkboxState" @if($formData->situation == 'other') checked @endif>
            </div>
            <div style="float:center; width:14%; margin-top:-15px; margin-left:68%;">
                Other (Specify)
            </div>
            <div style="float:right; width:20%; margin-top:-21px; margin-left:80%;">
                <input type="text" class="inputs" value="{{$formData->specify_other}}">
            </div>
        </div>
        <div class="text mt-2">
            <div style="float:left; width:68%;">
                <div>
                    Country of Citizenship
                </div>
                <div>
                    <input type="text" class="inputs" value="{{$formData->country_cityzenship}}">
                </div>
            </div>
            <div style="float:center; width:30%; margin-left:70%;">
                <div>
                    *Date of Birth (mm/dd/yyyy)
                </div>
                <div>
                    <input type="text" class="inputs text-center" value="{{date("m-d-Y", strtotime($formData->date_of_birth))}}">
                </div>
            </div>
        </div>
        <div class="text mt-2" style="margin-top:2.5rem;">
            <div style="width:68%;">
                Alien Registration Number (A-number) (if any)
            </div>
            <div>
                <div class="mr-1 mt-1" style="float:left; width:2%;">
                    <img src="{{$playBase64}}" alt=">" class="mt-2" width="10px">
                </div>
                <div class="text font-bold mt-2" style="float:center; margin-left:2%; width:2%;">
                    A
                </div>
                <div class="text font-bold mt-2" style="float:center; margin-left:4%; width:1%;">
                    -
                </div>
                @php
                    $numberArray = str_split($formData->alien_reg_number);
                @endphp
                <div class="cell cell-b mt-1 text-center pt-1" style="float:center; margin-left:5%; width:2.5%;">{{$numberArray[0]}}</div>
                <div class="cell cell-m mt-1 text-center pt-1" style="float:center; margin-left:7.5%; width:2.5%;">{{$numberArray[1]}}</div>
                <div class="cell cell-m mt-1 text-center pt-1" style="float:center; margin-left:10%; width:2.5%;">{{$numberArray[2]}}</div>
                <div class="cell cell-m mt-1 text-center pt-1" style="float:center; margin-left:12.5%; width:2.5%;">{{$numberArray[3]}}</div>
                <div class="cell cell-m mt-1 text-center pt-1" style="float:center; margin-left:15%; width:2.5%;">{{$numberArray[4]}}</div>
                <div class="cell cell-m mt-1 text-center pt-1" style="float:center; margin-left:17.5%; width:2.5%;">{{$numberArray[5]}}</div>
                <div class="cell cell-m mt-1 text-center pt-1" style="float:center; margin-left:20%; width:2.5%;">{{$numberArray[6]}}</div>
                <div class="cell cell-m mt-1 text-center pt-1" style="float:center; margin-left:22.5%; width:2.5%;">{{$numberArray[7]}}</div>
                <div class="cell cell-e mt-1 text-center pt-1" style="margin-left:25%; width:2.5%;">{{$numberArray[8]}}</div>
            </div>
        </div>
        <div class="mt-4 border sec-title-nob font-bold">
            Information About Your Address
        </div>
        <div class="mt-1 notes w-full" style="font-weight:normal !important;">
            <strong>*Present Physical Address</strong> (No PO Boxes)
        </div>
        <div class="text mt-1" style="">
            <div style="float:left; width:58%;">
                *Street Number and Name
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->present_street_number}}">
                </div>
            </div>
            <div style="float:center; width:2%; margin-left:61%;">
                Apt.
                <div class="">
                    <input type="checkbox" class="checkboxState mt-1" @if ($formData->present_apt_ste_flr == "apt") checked  @endif >
                </div>
            </div>
            <div style="float:center; width:2%; margin-left:65%;">
                Ste.
                <div class="">
                    <input type="checkbox" class="checkboxState mt-1" @if ($formData->present_apt_ste_flr == "ste") checked  @endif >
                </div>
            </div>
            <div style="float:center; width:2%; margin-left:69%;">
                Flr.
                <div class="">
                    <input type="checkbox" class="checkboxState mt-1" @if ($formData->present_apt_ste_flr == "flr") checked  @endif >
                </div>
            </div>
            <div style="float:right; width:27%; margin-left:73%;">
                Number
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->present_number}}">
                </div>
            </div>
        </div>
        <div class="text mt-1" style="margin-top:3rem;">
            <div style="float:left; width:58%;">
                *City or Town
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->present_city_town}}">
                </div>
            </div>
            <div style="float:center; width:10%; margin-left:61%;">
                *State
                <select class="" style="width:90%; height:1.25rem; border:1px solid #000; margin-top:.1rem;">
                    <option selected>{{$formData->present_state}}</option>
                </select>
            </div>
            <div style="float:right; width:27%; margin-left:73%;">
                *ZIP Code
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->present_zip_code}}">
                </div>
                <div class="font-bold ml-4 link italic">
                    (USPS ZIP Code Lookup)
                </div>
            </div>
        </div>
        <div class="notes w-full" style="">
            Previous Physical Address
        </div>
        <div class="text mt-1" style="">
            <div style="float:left; width:58%;">
                Street Number and Name
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->previous_street_number}}">
                </div>
            </div>
            <div style="float:center; width:2%; margin-left:61%;">
                Apt.
                <div class="">
                    <input type="checkbox" class="checkboxState mt-1" @if ($formData->previous_apt_ste_flr == "apt") checked  @endif>
                </div>
            </div>
            <div style="float:center; width:2%; margin-left:65%;">
                Ste.
                <div class="">
                    <input type="checkbox" class="checkboxState mt-1" @if ($formData->previous_apt_ste_flr == "ste") checked  @endif>
                </div>
            </div>
            <div style="float:center; width:2%; margin-left:69%;">
                Flr.
                <div class="">
                    <input type="checkbox" class="checkboxState mt-1" @if ($formData->previous_apt_ste_flr == "flr") checked  @endif>
                </div>
            </div>
            <div style="float:right; width:27%; margin-left:73%;">
                Number
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->previous_number}}">
                </div>
            </div>
        </div>
        <div class="text mt-1" style="margin-top:3rem;">
            <div style="float:left; width:58%;">
                City or Town
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->previous_city_town}}">
                </div>
            </div>
            <div style="float:center; width:10%; margin-left:61%;">
                State
                <select class="" style="width:90%; height:1.25rem; border:1px solid #000; margin-top:.1rem;">
                    <option selected>{{$formData->previous_state}}</option>
                </select>
            </div>
            <div style="float:right; width:27%; margin-left:73%;">
                ZIP Code
                <div class="">
                    <input type="text" class="inputs"  value="{{$formData->previous_zip_code}}">
                </div>
            </div>
        </div>
        <div class="mt-1 notes w-full" style="font-weight:normal !important;">
            <strong>Mailing Address</strong> (optional)
        </div>
        <div class="text mt-1" style="">
            <div style="float:left; width:58%;">
                Street Number and Name
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->mailing_street_number}}">
                </div>
            </div>
            <div style="float:center; width:2%; margin-left:61%;">
                Apt.
                <div class="">
                    <input type="checkbox" class="checkboxState mt-1"@if ($formData->mailing_apt_ste_flr == "apt") checked  @endif>
                </div>
            </div>
            <div style="float:center; width:2%; margin-left:65%;">
                Ste.
                <div class="">
                    <input type="checkbox" class="checkboxState mt-1"@if ($formData->mailing_apt_ste_flr == "ste") checked  @endif>
                </div>
            </div>
            <div style="float:center; width:2%; margin-left:69%;">
                Flr.
                <div class="">
                    <input type="checkbox" class="checkboxState mt-1"@if ($formData->mailing_apt_ste_flr == "flr") checked  @endif>
                </div>
            </div>
            <div style="float:right; width:27%; margin-left:73%;">
                Number
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->mailing_number}}">
                </div>
            </div>
        </div>
        <div class="text mt-1" style="margin-top:3rem;">
            <div style="float:left; width:58%;">
                City or Town
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->mailing_city_town}}">
                </div>
            </div>
            <div style="float:center; width:10%; margin-left:61%;">
                State
                <select class="" style="width:90%; height:1.25rem; border:1px solid #000; margin-top:.1rem;">
                    <option selected>{{$formData->mailing_state}}</option>
                </select>
            </div>
            <div style="float:right; width:27%; margin-left:73%;">
                ZIP Code
                <div class="">
                    <input type="text" class="inputs" value="{{$formData->mailing_zip_code}}">
                </div>
                <div class="font-bold ml-4 link italic">
                    (USPS ZIP Code Lookup)
                </div>
            </div>
        </div>
        <div class="mt-16 border sec-title-nob font-bold">
            Your Signature
        </div>
        <div class="text mt-2">
            <div style="float:left; width:66%;">
                <div>
                    *Your Signature
                </div>
                <div>
                    <input type="text" class="inputs">
                </div>
            </div>
            <div style="float:center; width:30%; margin-left:70%;">
                <div>
                    Date of Signature (mm/dd/yyyy)
                </div>
                <div>
                    <input type="text" class="inputs">
                </div>
            </div>
        </div>
        <div class="w-full">&nbsp;</div>
        <footer>
            <div class="text" style="float:left; text-align:left; margin-left:-66%;">
                Form AR-11 Edition 08/31/21
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 1 of 2
            </div>
        </footer>

        <div class="page-break"></div>

        <!--Página 2 -->

        <div class="separator">
        </div>
        
        <div class="mt-4 border sec-title-nob font-bold">
            Address Change Information and Instructions
        </div>
        
        <div class="w-full text mt-1">
            All aliens subject to registration requirements must use this form to report a change of address within 10 days of such change. The
            collection of this information is required by Immigration and Nationality Act (INA) section 265 (8 U.S.C. 1305). U.S. Citizenship and
            Immigration Services (USCIS) uses the data collected on this form for statistical and record-keeping purposes, and may share this
            information with other Federal, state, local, and law enforcement officials. Failure to report a change of address is punishable by fine
            or imprisonment and/or removal from the United States.
        </div>

        <div class="notes w-full font-bold mt-1">
            NOTE: This form is not evidence of identity, age, or status claimed. 
        </div>

        <div class="notes w-full font-bold mt-1">
            IMPORTANT: If you are in immigration proceedings, you must separately notify the Immigration Court of any address
            changes. Filing Form AR-11 with USCIS does not update your address with the Immigration Court.
        </div>

        <div class="mt-6 border sec-title-nob font-bold">
            Instructions
        </div>

        <div class="text w-full mt-1">
            Complete all fields on this form, sign and date the form, and mail it to the address below.
        </div>
        <div class="text w-full mt-1">
            Mail your completed Form AR-11 to:
        </div>

        <div class="w-full mt-2">
            <div style="float:left; width:30%;">
                &nbsp;
            </div>
            <div style="float:center; width:40%; margin-left:30%; border:1px solid #000;">
                <div class="text-center font-bold py-1 text">
                    U.S. Department of Homeland Security <br>
                    Citizenship and Immigration Services <br>
                    Attn: Change of Address <br>
                    1344 Pleasants Drive <br>
                    Harrisonburg, VA 22801
                </div>
            </div>
            <div style="margin-left:70%; width:30%;">
                &nbsp;
            </div>
        </div>

        <div class="mt-24 border sec-title-nob font-bold">
            DHS Privacy Notice
        </div>
        <div class="text mt-2">
            <strong>AUTHORITIES:</strong> The information requested on this form is collected under the Immigration and Nationality Act (INA) section 265.
        </div>
        <div class="text mt-2">
            <strong>PURPOSE:</strong> The primary purpose for providing the requested information on this form is to report a change of address. Except for
            those exempted, all aliens in the U.S. are required to report any change of address or new address. DHS uses the information you
            provide to contact you about the immigration benefit you are seeking.
        </div>
        <div class="text mt-2">
            <strong>DISCLOSURE:</strong> The information you provide is mandatory. Failure to report a change of address may result in a fine, imprisonment
            and/or removal (8 U.S.C. sections 1227(a)(3) and1306). Failure to comply could also jeopardize your ability to obtain a future visa or
            other immigration benefits.
        </div>
        <div class="text mt-2">
            <strong>ROUTINE USES:</strong> DHS may share the information you provide on this form with other Federal, state, local, and foreign government
            agencies and authorized organizations. DHS follows approved routine uses described in the associated published system of records
            notices [DHS/USCIS-001 - Alien File, Index, and National File Tracking System and DHS/USCIS-007 - Benefits Information
            System] and the published privacy impact assessments [DHS/USCIS/PIA-018 Alien Change of Address Card (AR-11)] which you can
            find at <font style="color: blue; text-decoration: underline;">www.dhs.gov/privacy</font>. DHS may also share this information, as appropriate, for law enforcement purposes or in the interest
            of national security.
        </div>

        <div class="mt-4 border sec-title-nob font-bold">
            Paperwork Reduction Act
        </div>
        <div class="text mt-2">
            An agency may not conduct or sponsor an information collection, and a person is not required to respond to a collection of
            information, unless it displays a currently valid Office of Management and Budget (OMB) control number. The public reporting
            burden for this collection of information is estimated at 12 minutes per response, including the time for reviewing instructions,
            gathering the required documentation and information, completing the request, preparing statements, attaching necessary
            documentation, and submitting the request. Send comments regarding this burden estimate or any other aspect of this collection of
            information, including suggestions for reducing this burden, to: U.S. Citizenship and Immigration Services, Office of Policy and
            Strategy, Regulatory Coordination Division, 5900 Capital Gateway Drive, Mail Stop #2140, Camp Springs, MD 20588-0009; OMB
            No. 1615-0007. <strong>Do not mail your completed Form AR-11 to this address.</strong>
        </div>

        <footer>
            <div class="text" style="float:left;">
                Form AR-11 Edition 08/31/21
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 2 of 2
            </div>
        </footer>


    </div>
</body>
</html>