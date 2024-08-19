<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dfac54d038.js" crossorigin="anonymous"></script>
    <title>I-130</title>
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
    background-color: #E0e0e0;
}

.header{
    margin-bottom: 5px;
}

.sec-title{
    padding: 5px;
    font-weight: bold;
    margin-top: 3px;
    background-color: #E0E0E0;
    font-size: 1rem;
    border: 2px solid black
}

.sec-title-nob{
    padding: 5px;
    background-color: #E0E0E0;
    font-size: 1rem;
    width: 100%;
    height:auto;
}

.text-center{
    text-align: center;
}

.text-small{
    font-size: .6rem;
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
    font-size: 1em;
    padding-top: 4px;
    padding-bottom: 4px;
}

.inputs{
    border: 1px solid black;
    background-color: white;
    width: 100%;
    height: 1rem;
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
    width: 5px;
    height: 5px;
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
    border-bottom: 2px solid black;
}

.text{
    font-size: .75rem;
}

.text2{
    font-size: .8rem;
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
    font-size: .85rem;
    margin-top: 0px;
    margin-bottom: 0px;
}


.cell-thin{
    height: 1rem;
    border-top: 1px solid #000;
    border-bottom: 1px solid #000;

}

.cell-thin-b{
    border-left: 1px solid #000;
    border-right: 1px solid #c9c9c9;
}

.cell-thin-m{
    border-left: 1px solid #c9c9c9;
    border-right: 1px solid #c9c9c9;
}

.cell-thin-e{
    border-right: 1px solid #000;
    border-left: 1px solid #c9c9c9;
}

h4{
    margin-top: 0px;
    margin-bottom: 0px;
    font-size: .7rem;
    font-weight: normal;
}

.input{
    background-color: white;
    width: 100%;
    height: 1rem;
    border-left: 1px solid #000;
    border-right: 1px solid #000;
    padding: 2px;
}

.input-top{
    border-top: 1px solid black;
}

.input-bottom{
    border-top: 1px solid #c9c9c9;
    border-bottom: 1px solid black;
}

.input-middle{
    border-top: 1px solid #c9c9c9;
    border-bottom: 1px solid #c9c9c9;
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
                <h2 class="font-bold">Petition for Alien Relative</h2>
                <p class="font-bold" style="margin-top:5px; font-size:0.85rem; margin-bottom:0px;">Department of Homeland Security</p>
                <p style="font-size:0.8rem; margin-top:0px;">U.S. Citizenship and Immigration Services</p>
            </div>
            <div class="text-center mt-1" style="float:right; margin-left:80%;">
                <h3 class="font-bold">USCIS</h3>
                <h3 class="font-bold">Form I-130</h3>
                <h4>OMB No. 1615-0012</h4>
                <h4>Expires 07/31/2024</h4>
            </div>
        </div>
        <div class="separator" style="margin-top:4.25rem;">
            
        </div>

        <div class="mt-2">
            <div class="">
                <div class="" style="float:left; width:70%;">
                    <div class="border" style="float:left; width:45%;">
                        <div class="text text-center font-bold bg-color-gray py-1">
                            For USCIS Use Only
                        </div>
                        <div class="text-center text font-bold border-top"  style="">
                            A-Number
                        </div>
                        <div class="w-full py-1 px-2">
                            <div class="text font-bold mt-1"  style="text-align:center; float:left; width:7%">
                                A
                            </div>
                            <div class="text font-bold mt-1"  style="float:center; width:4%; margin-left:8%;">
                                -
                            </div>
                            <div class=" cell-thin cell-thin-b"  style="float:center; margin-left:13%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:22%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:31%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:40%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:49%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:58%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:67%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:76%; width:9%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:85%; width:9%;">
                                &nbsp;
                            </div>
                        </div>
                        <div class="text font-bold border-top px-1"  style="">
                            Initial Receipt
                        </div>
                        <div class="text font-bold border-top px-1"  style="">
                            Resubmited
                        </div>
                    </div>
                    <div class="w-full text border-top border-bottom border-r" style="margin-left:45%; width:55%;">
                        <div class="mt-1 text-center" style="margin-bottom:4.8rem;">
                            <strong>Fee Stamp</strong>
                        </div>
                    </div>
                    <div class="font-bold border-left border-right" style="float:left; width:16%;">
                        <div class="text border-l border-r pb-1 px-1">
                            Relocated
                        </div>
                        <div class="text-small border-l border-r border-bottom py-1 px-1">
                            Received
                        </div>
                        <div class="text-small border-l border-r border-bottom py-1 px-1">
                            Sent
                        </div>
                        <div class="text border-l border-r border-bottom py-1 px-1">
                            Completed
                        </div>
                    </div>
                    <div class="border-right border-bottom border-r" style="width:84%; margin-left:16%;">
                        <div class="text font-bold text-center">
                            Section of Law/Visa Category
                        </div>
                        <div class="text-small mt-1">
                            <div class="" style="float:left; width:4%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:4%;">
                                201(b) Spouse - IR-1/CR-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:33%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:37%;">
                                203(a)(1) Unm. S/D - F1-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:66%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="width:29%; margin-left:70%;">
                                203(a)(2)(B) Unm. S/D - F2-4
                            </div>
                        </div>
                        <div class="text-small mt-1">
                            <div class="" style="float:left; width:4%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:4%;">
                                201(b) Spouse - IR-1/CR-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:33%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:37%;">
                                203(a)(1) Unm. S/D - F1-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:66%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="width:30%; margin-left:70%;">
                                203(a)(2)(B) Unm. S/D - F2-4
                            </div>
                        </div>
                        <div class="text-small mt-1" style="margin-bottom:0.45rem;">
                            <div class="" style="float:left; width:4%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:4%;">
                                201(b) Spouse - IR-1/CR-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:33%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="float:center; width:29%; margin-left:37%;">
                                203(a)(1) Unm. S/D - F1-1
                            </div>
                            <div class="" style="float:center; width:4%; margin-left:66%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-2" style="width:30%; margin-left:70%;">
                                203(a)(2)(B) Unm. S/D - F2-4
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-top border-r border-bottom" style="float:center; width:30%; margin-left:70%;">
                    <div class="text-center text font-bold" style="margin-bottom:9.88rem;">
                        Action Stamp
                    </div>
                </div>
            </div>
            <div style="margin-top:10.9rem;" class="w-full">
                <div class="" style="float:left; width:50%;">
                    <div class="text-small font-bold py-2 border-l border-r border-bottom px-1" style="float:left; width:19.55%;">
                        Approved
                    </div>
                    <div class="text-small pt-1 border-r border-bottom px-1" style="padding-bottom:1rem; width:80.45%; margin-left:22.15%;">
                        Petition was filed on (Priority Date mm/dd/yyyy):
                    </div>
                    <div class="text-small font-bold py-2 border-l border-r border-bottom px-1" style="float:left; width:19.55%;">
                        Returned
                    </div>
                    <div class="text-small pt-1 border-r border-bottom px-1" style="padding-bottom:1rem; width:80.45%; margin-left:22.15%;">
                        PDR request granted/denied - New priority date  (mm/dd/yyyy):
                    </div>
                </div>
                <div class="border-r border-bottom" style="float:center; width:47.5%; margin-left:52.5%; font-size:.55rem;">
                    <div class="mt-1">
                        <div class="" style="float:left; width:5%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:5%;">
                            Field Investigation
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:33%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:38%;">
                            Personal Interview
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:66%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="width:29%; margin-left:71%;">
                            204(a)(2)(A) Resolved
                        </div>
                    </div>
                    <div class="">
                        <div class="" style="float:left; width:5%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:5%;">
                            Previously Forwarded
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:33%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:38%;">
                            Pet. A-File Reviewed
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:66%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="width:29%; margin-left:71%;">
                            I-485 Filed Simultaneously
                        </div>
                    </div>
                    <div class="">
                        <div class="" style="float:left; width:5%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:5%;">
                            203(g) Resolved
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:33%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="float:center; width:28%; margin-left:38%;">
                            Ben. A-File Reviewed
                        </div>
                        <div class="" style="float:center; width:5%; margin-left:66%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-2" style="margin-bottom:0.56rem; width:29%; margin-left:71%;">
                            204(g) Resolved
                        </div>
                    </div>
                </div>    
            </div>
            <div class="border-bottom w-full border-r" style="margin-top:3.5rem;">
                <div class="border-r border-l px-1 text py-2 font-bold" style="width:9.76%;">
                    Remarks
                </div>
            </div>
            <div class="border-bottom border-r border-l text" style="width:99.85%">
                <div class="pl-1 py-2">
                    At which USCIS office (e.g., NBC, VSC, LOS, CRO) was Form I-130 adjudicated? _____________________________
                </div>
            </div>
        </div>

        <div class="mt-3">
            <div class="border text text-center bg-color-gray py-1">
                <strong>To be completed by an attorney or accredited representative</strong> (if any).
            </div>
            <div class="">
                <div class="border-l border-bottom border-r" style="float:left; width:18%;">
                    <div class="p-1" style="float:left; width:15%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="py-2 text font-bold" style="margin-left:20%; width:80%; margin-bottom:0.73rem;">
                        Select this box if <br> Form G-28 is <br> attached.
                    </div>
                </div>
                <div class="border-r border-bottom" style="float:center; width:22%; margin-left:18%;">
                    <div class="py-2 px-1 text " style="width:90%;">
                        <strong>Volag Number</strong> <br> (if any) <br> 
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="border-r border-bottom" style="float:center; width:27%; margin-left:40%;">
                    <div class="py-2 px-1 text" style="width:90%;">
                        <strong>Attorney State Bar Number</strong> <br> (if applicable) <br> 
                        <input type="text" class="inputs">
                    </div>
                </div>
                <div class="border-bottom border-r" style="float:right; width:33%; margin-left:67%;">
                    <div class="py-2 px-1 text" style="width:90%;">
                        <strong>Attorney or Accredited Representative</strong> <br>
                        <strong>USCIS Online Account Number</strong> (if any) <br> 
                        <input type="text" class="inputs">
                    </div>
                </div>
            </div>
        </div>

        <div class="text font-bold" style="margin-top:4.85rem;">
            <div style="float:left; width:3%;">
                <img src="{{$playBase64}}" alt="" width="50%">
            </div>
            <div style="float:center; margin-left:3%;">
                START HERE - Type or print in black ink.
            </div>
        </div>

        <div class="text border text-center py-1" style="margin-top:1.25rem;">
            If you need extra space to complete any section of this petition, use the space provided in <strong>Part 9. Additional Information. <br>
            Complete and submit as many copies of Part 9., as necessary, with your petition.</strong>
        </div>

        <div class="w-full mt-3">
            <div style="width:49%; float:left;">
                <div class="px-1 bg-color-gray border">
                    <strong>Part 1. Relationship</strong> (You are the Petitioner. Your <br> 
                    relative is the Beneficiary)
                </div>
                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        1.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            I am filling this petition for my (select <strong>only one</strong> box):
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:2%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:25%; margin-left:5%;">
                                Spouse
                            </div>
                            <div style="float:center; with:5%; margin-left:25%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:20%; margin-left:30%;">
                                Parent
                            </div>
                            <div style="float:center; with:5%; margin-left:50%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:20%; margin-left:55%;">
                                Brother/Sister
                            </div>
                            <div style="float:center; with:5%; margin-left:80%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:20%; margin-left:85%;">
                                Child
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1" style="margin-top:1.5rem;">
                    <div class="text font-bold" style="width:10%; float:left;">
                        2.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            If you are filing this petition for your child or parent, <br>
                            select the box that describes your relationship (select <strong>only<br>one</strong> box):
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:5%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:94%; margin-left:6%;">
                                Child was born to parents who were married to each <br>
                                other at the time of the child's birth
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:5%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:94%; margin-left:6%;">
                                Stepchild/Stepparent
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:5%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:94%; margin-left:6%;">
                                Child was born to parents who were not married to <br>
                                each other at the time of the child's birth
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; with:5%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:94%; margin-left:6%;">
                                Child was adopted (not an Orphan or Hague <br>
                                Convention adoptee)
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1" style="margin-top:1.5rem;">
                    <div class="text font-bold" style="width:10%; float:left;">
                        3.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            If the beneficiary is your brother/sister, are you related by <br>
                            adoption?
                        </div>
                        <div class="">
                            <div style="float:center; with:5%; margin-left:60%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:7%; margin-left:67%;">
                                Yes
                            </div>
                            <div style="float:center; with:5%; margin-left:74%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:7%; margin-left:81%;">
                                No
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1" style="margin-top:1.5rem;">
                    <div class="text font-bold" style="width:10%; float:left;">
                        4.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            If the beneficiary is your brother/sister, are you related by <br>
                            adoption?
                        </div>
                        <div class="">
                            <div style="float:center; with:5%; margin-left:60%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:7%; margin-left:67%;">
                                Yes
                            </div>
                            <div style="float:center; with:5%; margin-left:74%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:7%; margin-left:81%;">
                                No
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="float:right; width:49%; margin-left:51%;">
                <div class="px-1 py-1 bg-color-gray border">
                    <strong>Part 2. Information About You</strong> (Petitioner)
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        1.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Alien Registration Number (A-Number) (if any)
                        </div>
                        <div class="mt-1">
                            <div class="mt-1" style="float:center; with:5%; margin-left:30%;">
                                <img src="{{$playBase64}}" alt="" width="5%" >
                            </div>
                            <div class="font-bold" style="float:center; with:5%; margin-left:35%;">
                                A
                            </div>
                            <div class="font-bold" style="float:center; with:5%; margin-left:40%;">
                                -
                            </div>
                            <div class="cell-thin cell-thin-b"  style="float:center; margin-left:45%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:50%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:55%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:60%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:65%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:70%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:75%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:80%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:85%; width:5%;">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        2.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            USCIS Online Account Number (if any)
                        </div>
                        <div class="mt-1">
                            <div class="mt-1" style="float:center; with:5%; margin-left:25%;">
                                <img src="{{$playBase64}}" alt="" width="5%">
                            </div>
                            <div class="cell-thin cell-thin-b"  style="float:center; margin-left:30%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:35%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:40%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:45%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:50%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:55%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:60%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:65%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:70%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:75%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:80%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:85%; width:5%;">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        3.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            U.S. Social Security Number (if any)
                        </div>
                        <div class="mt-1">
                            <div class="mt-1" style="float:center; with:5%; margin-left:40%;">
                                <img src="{{$playBase64}}" alt="" width="5%">
                            </div>
                            <div class="cell-thin cell-thin-b"  style="float:center; margin-left:45%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:50%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:55%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:60%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:65%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:70%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:75%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:80%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:85%; width:5%;">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2 py-1 px-1 font-bold bg-color-gray italic">
                    Your Full Name
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        4.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br>
                        (Last Name)
                    </div>
                    <div class="mt-1" style="width:60%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        4.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br>
                        (First Name)
                    </div>
                    <div class="mt-1" style="width:60%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-1">
                    <div class="text font-bold" style="width:10%; float:left;">
                        4.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="mt-1" style="width:60%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

            </div>
        </div>
    

        <div class="w-full">&nbsp;</div>

        <footer>
            <div class="text" style="float:left; text-align:left; margin-left:-49%;">
                Form I-130 Edition 07/20/21
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 1 of 12
            </div>
        </footer>

        <div class="page-break"></div>
        <!--Página 2 -->
        <div class="separator">

        </div>

        <div class="w-full mt-4">
            <div style="float:left; width:47%;">
                <div class="w-full sec-title-nob border">
                    <strong>Part 2. Information About You</strong> (Petitioner) (continued)
                </div>
                <div class="w-full sec-title-nob mt-4 italic">
                    <strong>Other Names Used</strong> (if any)
                </div>
                <div class="w-full text mt-2">
                    Provide all other names you have ever used, including aliases, <br>
                    maiden name, and nicknames.
                </div>

                <div class="w-full text mt-2">
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            5.a.
                        </div>
                        <div class="text" style="float:center; width:30%; margin-left:10%;">
                            Family Name <br>
                            (Last Name)
                        </div>
                        <div class="mt-1" style="width:65%; margin-left:35%;">
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            5.b.
                        </div>
                        <div class="text" style="float:center; width:30%; margin-left:10%;">
                            Given Name <br>
                            (First Name)
                        </div>
                        <div class="mt-1" style="width:65%; margin-left:35%;">
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            5.c.
                        </div>
                        <div class="text" style="float:center; width:30%; margin-left:10%;">
                            Middle Name
                        </div>
                        <div class="mt-1" style="width:65%; margin-left:35%;">
                            <input type="text" class="inputs">
                        </div>
                    </div>
                </div>

                <div class="w-full font-bold sec-title-nob mt-4 italic">
                    Other Information
                </div>

                <div class="w-full text mt-2">
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            6.
                        </div>
                        <div class="text" style="width:90%; margin-left:10%;">
                            City/Town/Village of Birth <br>
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            7.
                        </div>
                        <div class="text" style="width:90%; margin-left:10%;">
                            Country of Birth <br>
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            8.
                        </div>
                        <div class="text" style="float:center; width:60%; margin-left:10%;">
                            Date of Birth (mm/dd/yyyy)
                        </div>
                        <div class="mt-1" style="width:30%; margin-left:70%;">
                            <input type="text" class="inputs">
                        </div>
                    </div>
    
                    <div class="mt-1">
                        <div class="text font-bold" style="width:10%; float:left;">
                            9.
                        </div>
                        <div class="text" style="float:center; width:20%; margin-left:10%;">
                            Sex
                        </div>
                        <div class="text" style="float:center; width:5%; margin-left:30%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text mt-1" style="float:center; width:10%; margin-left:37%;">
                            Male
                        </div>
                        <div class="text" style="float:center; width:5%; margin-left:47%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="width:20%; margin-left:54%;">
                            Female
                        </div>
                    </div>
                </div>

                <div class="w-full sec-title-nob mt-4 italic" style="height:1.25rem;">
                    <div class="font-bold" style="float:left; width:60%;">
                        Mailing Address
                    </div>
                    <div class="link" style="margin-left:60%;">
                        (USPS ZIP Code Lookup)
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.a.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        In Care Of Name <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Street Number <br> and Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.c.
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:24%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:31%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:38%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:45%;">
                        Flr.
                    </div>
                    <div class="text" style="width:45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.d.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        10.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:18%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold mt-1" style="float:center; width:10%; margin-left:40%;">
                        10.f.
                    </div>
                    <div class="text mt-1" style="float:center; width:17%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:33%; margin-left:67%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.g.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.h.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        10.i.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        11.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Is your current mailing address the same as your physical <br> 
                            address?
                        </div>
                        <div class="">
                            <div style="float:center; with:5%; margin-left:70%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; with:7%; margin-left:77%;">
                                Yes
                            </div>
                            <div style="float:center; with:5%; margin-left:84%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="with:7%; margin-left:91%;">
                                No
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2 text2">
                    If you answered "No" to <strong>Item Number 11.</strong>, provide <br> 
                    information on your physical address in <strong>Item Numbers 12.a. - <br>
                    13.b.</strong>
                </div>
            </div>

            <div style="float:center; width:47%; margin-left:51%;">
                <div class="w-full sec-title-nob italic font-bold">
                    Address History
                </div>

                <div class="w-full text mt-2">
                    Provide your physical addresses for the last five years, whether 
                    inside or outside the United States. Provide your current <br>
                    address first if it is different from your mailing address in <strong>Item <br>
                    Numbers 10.a. - 10.i.</strong>
                </div>

                <div class="w-full text mt-2 font-bold">
                    Physical Address 1
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Street Number <br> and Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.b.
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:24%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:31%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:38%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:45%;">
                        Flr.
                    </div>
                    <div class="text" style="width:45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        12.d.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:18%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold mt-1" style="float:center; width:10%; margin-left:40%;">
                        12.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:17%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:33%; margin-left:67%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.f.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.g.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        12.h.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        13.a.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date From (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        13.b.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date To (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs" value="PRESENT">
                    </div>
                </div>

                <div class="w-full mt-4" style="border-bottom:1px solid #000;">
                    
                </div>

                <div class="w-full text mt-2 font-bold">
                    Physical Address 2
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Street Number <br> and Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.b.
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:24%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:31%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:38%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:45%;">
                        Flr.
                    </div>
                    <div class="text" style="width:45%; margin-left:55%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        14.d.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:18%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold mt-1" style="float:center; width:10%; margin-left:40%;">
                        14.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:17%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:33%; margin-left:67%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.f.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.g.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        14.h.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        15.a.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date From (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
                
                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        15.b.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date To (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="w-full sec-title-nob italic font-bold mt-4">
                    Your Marital Information
                </div>

                <div class="mt-2">
                    <div class="text font-bold mt-1" style="width:10%; float:left;">
                        16.
                    </div>
                    <div class="text mt-1" style="float:center; width:70%; margin-left:10%;">
                        How many times have you been married?
                    </div>
                    <div class="text mt-1" style="float:center; width:5%; margin-left:80%;">
                        <img src="{{$playBase64}}" alt="" width="90%">
                    </div>
                    <div class="text" style="width:15%; margin-left:85%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold mt-1" style="width:10%; float:left;">
                        17.
                    </div>
                    <div class="text mt-1" style="width:90%; margin-left:10%;">
                        <div>
                            Current Marital Status
                        </div>
                        <div>
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:43%; margin-left:7%;">
                                Single, Never Married
                            </div>
                            <div style="float:center; width:7%; margin-left:50%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:18%; margin-left:57%;">
                                Married
                            </div>
                            <div style="float:center; width:7%; margin-left:75%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:18%; margin-left:82%;">
                                Divorced
                            </div>
                        </div>
                        <div>
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:18%; margin-left:7%;">
                                Widowed
                            </div>
                            <div style="float:center; width:7%; margin-left:25%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:18%; margin-left:32%;">
                                Separated
                            </div>
                            <div style="float:center; width:7%; margin-left:50%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:18%; margin-left:57%;">
                                Annulled
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="text" style="float:left; margin-left:-47%;">
                Form I-131 Edition 07/20/21
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 2 of 12
            </div>
        </footer>

        <div class="page-break"></div>

        <!-- Página 3 -->
        <div class="separator">

        </div>

        <div class="mt-4">
            <div style="float:left; width:48%;">
                <div class="border sec-title-nob">
                    <strong>Part 2. Information About You</strong> (Petitioner) (continued)
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        18.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Date of Curent Marriage (if currently married)
                        </div>
                        <div>
                            <div style="">
                                (mm/dd/yyyy)
                            </div>
                            <div style="float:right; width:30%;">
                                <input type="text" class="inputs">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 sec-title-nob italic">
                    <strong>Place of Your Current Marriage</strong> (if married)
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        19.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        19.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="width:20%; margin-left:40%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        19.c.
                    </div>
                    <div class="text" style="float:center; width:25%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text" style="width:65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        19.d.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-4 sec-title-nob italic">
                    <strong>Names of All Your Spouses</strong> (if any)
                </div>

                <div class="mt-2 text2 w-full">
                    Provide information on your current spouse (if currently married) 
                    first and then list all your prior spouses (if any).
                </div>

                <div class="mt-2 text2 font-bold w-full">
                    Spouse 1
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        20.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br> (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        20.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br> (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        20.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        21.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date Marriage Ended (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2" style="border-bottom:1px solid #000; width:100%;">
                </div>

                <div class="mt-2 text2 font-bold w-full">
                    Spouse 2
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        22.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br> (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        22.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br> (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        22.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        23.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date Marriage Ended (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 sec-title-nob font-bold italic">
                    Information About Your Parents
                </div>

                <div class="mt-2 text2 font-bold w-full">
                    Parent 1's Information
                </div>

                <div class="mt-2 text2 w-full">
                    Full Name of Parent 1
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        24.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br> (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        24.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br> (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        24.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        25.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date of Birth (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        26.
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:10%;">
                        Sex
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:30%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:37%;">
                        Male
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:47%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="width:20%; margin-left:54%;">
                        Female
                    </div>
                </div>
            </div>
            <div style="float:right; margin-left:52%; width:48%;">

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        27.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country of Birth<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        28.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        City/Town/Village of Residence<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        29.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country of Residence<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2" style="border-bottom:1px solid #000;">

                </div>

                <div class="mt-2 text2 font-bold w-full">
                    Parent 1's Information
                </div>

                <div class="mt-2 text2 w-full">
                    Full Name of Parent 1
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        30.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br> (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        30.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br> (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        30.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        31.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date of Birth (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        32.
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:10%;">
                        Sex
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:30%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:37%;">
                        Male
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:47%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="width:20%; margin-left:54%;">
                        Female
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        33.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country of Birth <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        34.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        City/Town/Village of Residence<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        35.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country of Residence<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 border sec-title-nob italic">
                    <strong>Additional Information About You</strong> (Petitioner)
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        36.
                    </div>
                    <div class="text" style="margin-left:10%; width:90%;">
                        <div>
                            I am a (Select <strong>only one</strong> box):
                        </div>
                        <div>
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:30%; margin-left:7%;">
                                U.S. Citizen
                            </div>
                            <div style="float:center; width:7%; margin-left:37%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:56%; margin-left:44%;">
                                Lawful Permanent Resident
                            </div>                        
                        </div>
                    </div>
                </div>

                <div class="mt-3 text2 font-bold">
                    If you are a U.S. citizen, complete Item Number 37.
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        37.
                    </div>
                    <div class="text" style="margin-left:10%; width:90%;">
                        <div>
                            My citizenship was acquired through (Select only one <br>
                            box):
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:90%; margin-left:10%;">
                                Birth in the United States
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:90%; margin-left:10%;">
                                Naturalization
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:90%; margin-left:10%;">
                                Parents
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="float:left; width:10%;">
                        38.
                    </div>
                    <div class="text" style="margin-left:10%; width:90%;">
                        <div>
                            Have you obtained a Certificate of Naturalization or a 
                        </div>
                        <div>
                            Certificate of Citizenship? 
                        </div>
                        <div>
                            <div style="float:left; width:7%; margin-left:72%">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:7%; margin-left:79%;">
                                Yes
                            </div>
                            <div style="float:center; width:7%; margin-left:86%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:7%; margin-left:93%;">
                                No
                            </div>                        
                        </div>
                    </div>
                </div>

                <div class="mt-2 text2">
                    If you answered "Yes" to <strong>Item Number 38.</strong>, complete the 
                    following:
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        39.a.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Certificate Number<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        39.b.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Place of Issuance<br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2">
                    <div class="text font-bold" style="width:10%; float:left;">
                        39.c.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date of Issuance (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

            </div>

        </div>

        <footer>
            <div>
                <div class="text" style="float:left; margin-left:-48%;">
                    Form I-130 Edition 07/20/21  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;                     
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;                     
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;                     
                    Page 3 of 12

                </div>
                <div class="text" style="width:20%; margin-left:50%; ">
                </div>
            </div>
        </footer>

        <div class="page-break"></div>

        <div class="separator">

        </div>

        <div class="mt-4">

            <div style="float:left; width:48%;">

                <div class="sec-title-nob border w-full">
                    <strong>Part 2. Information About You</strong> (Petitioner) (continued)
                </div>

                <div class="text2 mt-2 w-full">
                    If you are a lawful permanent resident, complete <strong>Item Numbers 40.a. - 41.</strong>
                </div>

                <div class="mt-2 w-full">
                    <div class="font-bold text" style="float:left; widht:10%;">
                        40.a.
                    </div>
                    <div class="text" style="margin-left:10%; widht:90%;">
                        Class of Administration <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="font-bold text" style="float:left; widht:10%;">
                        40.b.
                    </div>
                    <div class="text" style="float:center;margin-left:10%; widht:50%;">
                        Date of Admission (mm/dd/yyyy)
                    </div>
                    <div class="text" style="margin-left:60%; widht:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>
        
                <div class="text2 mt-2 w-full">
                    Place of Admission
                </div>

                <div class="mt-2 w-full">
                    <div class="font-bold text" style="float:left; widht:10%;">
                        40.c.
                    </div>
                    <div class="text" style="margin-left:10%; widht:90%;">
                        City or Town <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold mt-1" style="width:10%; float:left;">
                        40.d.
                    </div>
                    <div class="text mt-1" style="float:center; width:15%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="width:20%; margin-left:25%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="width:10%; float:left;">
                        41.
                    </div>
                    <div class="" style="width:90%; margin-left:10%;">
                        <div class="text2">
                            Did you gain lawful permanent resident status through <br>
                            marriage to a U.S. citizen or lawful permanent resident?
                        </div>
                        <div class="" style="float:left; width:7%; margin-left:72%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text mt-1" style="float:center; width:7%; margin-left:79%;">
                            Yes
                        </div>
                        <div class="" style="float:center; width:7%; margin-left:86%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text mt-1" style="width:7%; margin-left:93%;">
                            No
                        </div>
                    </div>
                </div>

                <div class="mt-2 sec-title-nob font-bold italic w-full">
                    Employment History
                </div>

                <div class="mt-2 text2 w-full">
                    Provide your employment history for the last five years, whether 
                    inside or outside the United States. Provide your current 
                    employment first. If you are currently unemployed, type or print 
                    "Unemployed" in <strong>Item Number 42.</strong> 
                </div>

                <div class="mt-2 text2 font-bold w-full">
                    Employer 1
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        42.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Name of Employer/Company <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        43.a.
                    </div>
                    <div class="text" style="float:center; width:25%; margin-left:10%;">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="text" style="width:65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        43.b.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:24%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:31%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:38%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:45%;">
                        Flr.
                    </div>
                    <div class="text" style="width:48%; margin-left:52%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        43.c.
                    </div>
                    <div class="text" style="float:center; width:15%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text mt-1" style="width:75%; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        43.d.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold" style="float:center; width:10%; margin-left:40%;">
                        43.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:18%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:32%; margin-left:68%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        43.f.
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text mt-1" style="width:70%; margin-left:30%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        43.g.
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="text mt-1" style="width:70%; margin-left:30%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        43.h.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        44.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Your Occupation <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        45.a.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date From (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        45.b.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date To (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs" value="PRESENT">
                    </div>
                </div>

            </div>

            <div style="float:right; width:48%; margin-left:52%;">

                <div class="text2 font-bold w-full">
                    Employer 2
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        46.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Name of Employer/Company <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        47.a.
                    </div>
                    <div class="text" style="float:center; width:25%; margin-left:10%;">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="text" style="width:65%; margin-left:35%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        47.b.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:24%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:31%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:38%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:7%; margin-left:45%;">
                        Flr.
                    </div>
                    <div class="text" style="width:48%; margin-left:52%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        47.c.
                    </div>
                    <div class="text" style="float:center; width:15%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="text mt-1" style="width:75%; margin-left:25%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        47.d.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold" style="float:center; width:10%; margin-left:40%;">
                        47.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:18%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:32%; margin-left:68%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        47.f.
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:10%;">
                        Province
                    </div>
                    <div class="text mt-1" style="width:70%; margin-left:30%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        47.g.
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="text mt-1" style="width:70%; margin-left:30%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        47.h.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        48.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Your Occupation <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        49.a.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date From (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        49.b.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date To (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 sec-title-nob border w-full font-bold">
                    Part 3. Biographic Information
                </div>

                <div class="mt-2 text2 w-full ">
                    <strong>NOTE:</strong> Provide the biographic information about you, the petitioner.
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        1.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Ethnicity (Selec <strong>only one</strong> box)
                        </div>
                        <div class="mt-1">
                            <div class="text" style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left:10%; width:90%;">
                                Hispanic or Latino
                            </div>
                        </div>
                        <div class="mt-1">
                            <div class="text" style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left:10%; width:90%;">
                                Not Hispanic or Latino
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        2.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Race (Selec <strong>all applicable</strong> boxes)
                        </div>
                        <div class="mt-1">
                            <div class="text" style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left:10%; width:90%;">
                                White
                            </div>
                        </div>
                        <div class="mt-1">
                            <div class="text" style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left:10%; width:90%;">
                                Assian
                            </div>
                        </div>
                        <div class="mt-1">
                            <div class="text" style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left:10%; width:90%;">
                                Black or African American
                            </div>
                        </div>
                        <div class="mt-1">
                            <div class="text" style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left:10%; width:90%;">
                                American Indian or Alaska Native
                            </div>
                        </div>
                        <div class="mt-1">
                            <div class="text" style="float:left; width:10%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="text mt-1" style="margin-left:10%; width:90%;">
                                Native Hawaiian or Other Pacific Islander
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        3.
                    </div>
                    <div class="text" style="float:center; width:35%; margin-left:10%;">
                        Height
                    </div>
                    <div class="text" style="float:center; width:12%; margin-left:45%;">
                        Feet
                    </div>
                    <div class="text" style="float:center; width:15%; margin-left:55%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text" style="float:center; width:12%; margin-left:72%;">
                        Inches
                    </div>
                    <div class="text" style="width:15%; margin-left:84%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        4.
                    </div>
                    <div class="text" style="float:center; width:35%; margin-left:10%;">
                        Weight
                    </div>
                    <div class="text" style="float:center; width:15%; margin-left:60%;">
                        Pounds
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:75%;">
                        <input class="inputs">
                    </div>
                    <div class="text" style="float:center; width:5%; margin-left:85%;">
                        <input class="inputs">
                    </div>
                    <div class="text" style="width:5%; margin-left:95%;">
                        <input class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        5.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Eye Color (Select <strong>only one</strong> box)
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:20%; margin-left:7%;">
                                Black
                            </div>
                            <div style="float:center; width:7%; margin-left:30%">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:20%; margin-left:37%;">
                                Blue
                            </div>
                            <div style="float:center; width:7%; margin-left:50%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:40%; margin-left:57%;">
                                Brown
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:20%; margin-left:7%;">
                                Gray
                            </div>
                            <div style="float:center; width:7%; margin-left:30%">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:20%; margin-left:37%;">
                                Green
                            </div>
                            <div style="float:center; width:7%; margin-left:50%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:40%; margin-left:57%;">
                                Hazel
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:20%; margin-left:7%;">
                                Maroon
                            </div>
                            <div style="float:center; width:7%; margin-left:30%">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:20%; margin-left:37%;">
                                Pink
                            </div>
                            <div style="float:center; width:7%; margin-left:50%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:40%; margin-left:57%;">
                                Unknown/Other
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="w-full">&nbsp;</div>

        <footer>
            <div class="text" style="float:left; margin-left:-48%">
                Form I-130 Edition 07/20/21
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 4 of 12
            </div>
        </footer>


        <div class="page-break"></div>
            <!--página 5-->
        <div class="separator">

        </div>

        <div class="mt-4">

            <div style="width:48%; float:left;">

                <div class="sec-title-nob border w-full">
                    <strong>Part 3. Biographic Information</strong> (continued)
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        6.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Hair Color (Select <strong>only one</strong> box)
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:30%; margin-left:7%;">
                                Bald (No hair)
                            </div>
                            <div style="float:center; width:7%; margin-left:40%">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:20%; margin-left:47%;">
                                Black
                            </div>
                            <div style="float:center; width:7%; margin-left:70%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:23%; margin-left:77%;">
                                Blond
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:30%; margin-left:7%;">
                                Brown
                            </div>
                            <div style="float:center; width:7%; margin-left:40%">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:20%; margin-left:47%;">
                                Gray
                            </div>
                            <div style="float:center; width:7%; margin-left:70%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:23%; margin-left:77%;">
                                Red
                            </div>
                        </div>
                        <div class="mt-1">
                            <div style="float:left; width:7%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:30%; margin-left:7%;">
                                Sandy
                            </div>
                            <div style="float:center; width:7%; margin-left:40%">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:20%; margin-left:47%;">
                                White
                            </div>
                            <div style="float:center; width:7%; margin-left:70%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:23%; margin-left:77%;">
                                Unknown/Other
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2 sec-title-nob font-bold border w-full">
                    Part 4. Information About Beneficiary
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        1.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Alien Registration Number (A-Number) (if any)
                        </div>
                        <div class="mt-1">
                            <div class="mt-1" style="float:center; with:5%; margin-left:40%;">
                                <img src="{{$playBase64}}" alt="" height="1%">
                            </div>
                            <div class="font-bold" style="float:center; with:5%; margin-left:45%;">
                                A
                            </div>
                            <div class="font-bold" style="float:center; with:5%; margin-left:50%;">
                                -
                            </div>
                            <div class="cell-thin cell-thin-b"  style="float:center; margin-left:55%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:60%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:65%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:70%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:75%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:80%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:85%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:90%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:95%; width:5%;">
                                &nbsp;
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        2.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            USCIS Online Account Number (if any)
                        </div>
                        <div class="mt-1">
                            <div class="mt-1" style="float:center; with:5%; margin-left:35%;">
                                <img src="{{$playBase64}}" alt="" height="1%">
                            </div>
                            <div class="cell-thin cell-thin-b" style="float:center; width:5%; margin-left:40%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:45%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:50%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:55%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:60%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:65%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:70%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:75%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:80%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:85%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:90%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:95%; width:5%;">
                                &nbsp;
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        3.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            U.S. Social Security Number (if any)
                        </div>
                        <div class="mt-1">
                            <div class="mt-1" style="float:center; width:5%; margin-left:50%;">
                                <img src="{{$playBase64}}" alt="" height="1%">
                            </div>
                            <div class="cell-thin cell-thin-b"  style="float:center; margin-left:55%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:60%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:65%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:70%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:75%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:80%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:85%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-m"  style="float:center; margin-left:90%; width:5%;">
                                &nbsp;
                            </div>
                            <div class="cell-thin cell-thin-e"  style="margin-left:95%; width:5%;">
                                &nbsp;
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-4 italic sec-title-nob font-bold w-full">
                    Beneficiary's Full Name
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        4.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br>
                        (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        4.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br>
                        (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        4.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-4 italic sec-title-nob w-full">
                    <strong>Other Names Used</strong> (if any)
                </div>

                <div class="mt-2 text2 w-full">
                    Provide all other names the beneficiary has ever used, including 
                    aliases, maiden name, and nicknames.
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        5.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Family Name <br>
                        (Last Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        5.b.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Given Name <br>
                        (First Name)
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        5.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Middle Name
                    </div>
                    <div class="text" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 italic sec-title-nob font-bold w-full">
                    Other Information About Beneficiary
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        6.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        City/Town/Village of Birth <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        7.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country of Birth <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        8.
                    </div>
                    <div class="text" style="float:center; width:60%; margin-left:10%;">
                        Date of Birth (mm/dd/yyyy)
                    </div>
                    <div class="text" style="width:30%; margin-left:70%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        9.
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:10%;">
                        Sex
                    </div>
                    <div class="" style="float:center; width:7%; margin-left:30%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-1 text" style="float:center; width:13%; margin-left:37%;">
                        Male
                    </div>
                    <div class="" style="float:center; width:7%; margin-left:50%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-1 text" style="width:43%; margin-left:57%;">
                        Female
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        10.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        <div>
                            Has anyone else ever filed a petition for the beneficiary?
                        </div>
                        <div>
                            <div style="float:center; width:7%; margin-left:44%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:10%; margin-left:51%;">
                                Yes
                            </div>
                            <div style="float:center; width:7%; margin-left:61%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="float:center; width:10%; margin-left:68%;">
                                No
                            </div>
                            <div style="float:center; width:7%; margin-left:78%;">
                                <input type="checkbox" class="checkboxState">
                            </div>
                            <div class="mt-1" style="width:15%; margin-left:85%;">
                                Unknown
                            </div>
                        </div>
                        <div class="mt-4 text2">
                            <strong>NOTE:</strong> Select "Unknown" only if you do not know, and 
                            the beneficiary also does not know, if anyone else has 
                            ever filed a petition for the beneficiary.
                        </div>
                    </div>
                </div>

            </div>

            <div style="width:48%; float:right; margin-left:52%;">

                <div class="sec-title-nob font-bold italic w-full">
                    Beneficiary's Physical Address
                </div>

                <div class="mt-2 text2 w-full">
                    If the beneficiary lives outside the United States in a home <br> 
                    without a street number or name, leave <strong>Item Numbers 11.a.</strong> <br>
                    and <strong>11.b.</strong> blank.
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        11.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        11.b.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:27%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:34%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:44%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:51%;">
                        Flr.
                    </div>
                    <div class="text" style="width:39%; margin-left:61%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        11.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        11.d.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold" style="float:center; width:10%; margin-left:40%;">
                        11.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:18%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:32%; margin-left:68%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        11.f.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Province
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        11.g.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        11.h.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 sec-title-nob font-bold italic w-full">
                    Other Address and Contact Information
                </div>

                <div class="mt-2 text2 w-full">
                    Provide the address in the United States where the beneficiary <br>
                    intends to live, if different from <strong>Item Numbers 11.a. - 11.h.</strong> If <br>
                    the address is the same, type or print "SAME" in <strong>Item Number <br>
                    12.a.</strong>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        12.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        12.b.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:27%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:34%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:44%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:51%;">
                        Flr.
                    </div>
                    <div class="text" style="width:39%; margin-left:61%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        12.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        12.d.
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                        State
                    </div>
                    <div class="text" style="float:center; width:20%; margin-left:20%;">
                        <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                            <option selected>&nbsp;</option>
                        </select>
                    </div>
                    <div class="text font-bold" style="float:center; width:10%; margin-left:40%;">
                        12.e.
                    </div>
                    <div class="text mt-1" style="float:center; width:18%; margin-left:50%;">
                        ZIP Code
                    </div>
                    <div class="text" style="width:32%; margin-left:68%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 text2 w-full">
                    Provide the beneficiary's address outside the United States, if <br>
                    different from <strong>Item Numbers 11.a. - 11.h.</strong> If the address is the <br>
                    same, type or print "SAME" in <strong>Item Number 13.a.</strong>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        13.a.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Street Number <br>
                        and Name
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        13.b.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:10%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:17%;">
                        Apt.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:27%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:34%;">
                        Ste.
                    </div>
                    <div class="text" style="float:center; width:7%; margin-left:44%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="text mt-1" style="float:center; width:10%; margin-left:51%;">
                        Flr.
                    </div>
                    <div class="text" style="width:39%; margin-left:61%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        13.c.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        City or Town
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        13.d.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Province
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        13.e.
                    </div>
                    <div class="text" style="float:center; width:30%; margin-left:10%;">
                        Postal Code
                    </div>
                    <div class="" style="width:60%; margin-left:40%;">
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        13.f.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Country <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

                <div class="mt-2 w-full">
                    <div class="text font-bold" style="float:left; width:10%;">
                        14.
                    </div>
                    <div class="text" style="width:90%; margin-left:10%;">
                        Daytime Telephone Number (if any) <br>
                        <input type="text" class="inputs">
                    </div>
                </div>

            </div>

        </div>

        <div class="w-full">&nbsp;</div>

        <footer>
            <div class="text" style="float:left;">
                Form I-130 Edition 07/20/21
            </div>
            <div class="text" style="margin-left:80%; width:20%; text-align:right;">
                Page 5 of 12
            </div>
        </footer>

        <div class="page-break"></div>
        <!--página 6-->
    <div class="separator">

    </div>

    <div class="mt-4">

        <div style="width:48%; float:left;">

            <div class="sec-title-nob border w-full">
                <strong>Part 4. Information About Beneficiary</strong> (continued)
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    15.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Mobile Telephone Number (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    16.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Email Address (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="sec-title-nob italic font-bold w-full mt-2">
                Beneficiary's Marital Information
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    17.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    How many times has the beneficiary been married?
                </div>
            </div>

            <div class="w-full">
                <div class="mt-1" style="float:left; width:5%; margin-left:75%">
                    <img src="{{$playBase64}}" alt="" height="2%">
                </div>
                <div class="text" style="margin-left:80%; width:20%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    18.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    <div>
                        How many times has the beneficiary been married?
                    </div>
                    <div class="mt-1">
                        <div style="float:left; width:7%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="float:center; width:42%; margin-left:7%;">
                            Single, Never Married
                        </div>
                        <div style="float:center; width:7%; margin-left:56%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="float:center; width:15%; margin-left:63%;">
                            Married
                        </div>
                        <div style="float:center; width:7%; margin-left:78%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="width:15%; margin-left:85%;">
                            Divorced
                        </div>
                    </div>
                    <div class="mt-1">
                        <div style="float:left; width:7%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="float:center; width:26%; margin-left:7%;">
                            Widowed
                        </div>
                        <div style="float:center; width:7%; margin-left:33%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="float:center; width:26%; margin-left:40%;">
                            Separated
                        </div>
                        <div style="float:center; width:7%; margin-left:66%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="width:27%; margin-left:73%;">
                            Annulled
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    19.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    <div>
                        Date of Current Marriage? (if currently married)
                    </div>
                    <div class="">
                        <div style="float:left; width:50%;">
                            (mm/dd/yyyy)
                        </div>
                        <div style="width:34%; margin-left:66%;">
                            <input type="text" class="inputs">
                        </div>
                    </div>
                </div>
            </div>

            <div class="sec-title-nob italic w-full mt-2">
                <strong>Place of Beneficiary's Curret Marriage</strong> (if married)
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    20.a.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    City or Town
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    20.b.
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                    State
                </div>
                <div class="text" style="width:20%; margin-left:20%;">
                    <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                        <option selected>&nbsp;</option>
                    </select>
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    20.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:25%;">
                    Province
                </div>
                <div class="text" style="margin-left:35%; width:65%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    20.d.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Country <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="sec-title-nob italic w-full mt-2">
                <strong>Names of Beneficiary's Spouses</strong> (if any)
            </div>

            <div class="w-full mt-2 text2">
                Provide information on the beneficiary's current spouse (if 
                currently married) first and then list all the beneficiary's prior 
                spouses (if any).
            </div>

            <div class="w-full mt-2 font-bold text2">
                Spouse 1
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    21.a.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Family Name <br>
                    (Last Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    21.b.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Given Name <br>
                    (First Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    21.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Middle Name
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    22.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:55%;">
                    Date Marriage Ended (mm/dd/yyyy)
                </div>
                <div class="text" style="margin-left:65%; width:35%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2" style="border-bottom: 1px solid #000; width:100%;">

            </div>

            <div class="w-full mt-2 font-bold text2">
                Spouse 2
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    23.a.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Family Name <br>
                    (Last Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    23.b.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Given Name <br>
                    (First Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    23.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Middle Name
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>


        </div>

        <div style="width:48%; float:right; margin-left:52%;">

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    24.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:55%;">
                    Date Marriage Ended (mm/dd/yyyy)
                </div>
                <div class="text" style="margin-left:65%; width:35%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="sec-title-nob italic font-bold w-full mt-2">
                Information About Beneficiary's Family
            </div>

            <div class="text2 font-bold w-full mt-2">
                Provide information about the beneficiary's spouse and 
                children.
            </div>

            <div class="w-full mt-2 font-bold text2">
                Person 1
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    25.a.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Family Name <br>
                    (Last Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    25.b.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Given Name <br>
                    (First Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    25.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Middle Name
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    26.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Relationship
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    27.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:55%;">
                    Date of Birth (mm/dd/yyyy)
                </div>
                <div class="text" style="margin-left:65%; width:35%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    28.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Country of Birth <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2" style="border-bottom: 1px solid #000; width:100%;">
            </div>

            <div class="w-full mt-2 font-bold text2">
                Person 2
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    29.a.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Family Name <br>
                    (Last Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    29.b.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Given Name <br>
                    (First Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    29.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Middle Name
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    30.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Relationship
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    31.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:55%;">
                    Date of Birth (mm/dd/yyyy)
                </div>
                <div class="text" style="margin-left:65%; width:35%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    32.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Country of Birth <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4" style="border-bottom: 1px solid #000; width:100%;">

            </div>

            <div class="w-full mt-2 font-bold text2">
                Person 3
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    33.a.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Family Name <br>
                    (Last Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    33.b.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Given Name <br>
                    (First Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    33.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Middle Name
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    34.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Relationship
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    35.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:55%;">
                    Date of Birth (mm/dd/yyyy)
                </div>
                <div class="text" style="margin-left:65%; width:35%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    36.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Country of Birth <br>
                    <input type="text" class="inputs">
                </div>
            </div>

        </div>

    </div> <!-- Fin del documento-->

    <div class="w-full">&nbsp;</div>

    <footer>
        <div class="text" style="float:left; margin-left:-48%;">
            Form I-130 Edition 07/20/21
        </div>
        <div class="text" style="margin-left:80%; width:20%; text-align:right;">
            Page 6 of 12
        </div>
    </footer>

    <div class="page-break"></div>

    <div class="separator">

    </div>

    <div class="mt-4">

        <div style="float:left; width: 48%;">

            <div class="sec-title-nob border w-full">
                <strong>Part 4. Information About Beneficiary</strong> (continued)
            </div>

            <div class="w-full mt-2 font-bold text2">
                Person 4
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    37.a.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Family Name <br>
                    (Last Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    37.b.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Given Name <br>
                    (First Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    37.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Middle Name
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    38.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Relationship
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    39.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:55%;">
                    Date of Birth (mm/dd/yyyy)
                </div>
                <div class="text" style="margin-left:65%; width:35%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    40.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Country of Birth <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4" style="border-bottom: 1px solid #000; width:100%;">

            </div>

            <div class="w-full mt-2 font-bold text2">
                Person 5
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    41.a.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Family Name <br>
                    (Last Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    41.b.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Given Name <br>
                    (First Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    41.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Middle Name
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    42.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Relationship
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    43.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:55%;">
                    Date of Birth (mm/dd/yyyy)
                </div>
                <div class="text" style="margin-left:65%; width:35%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    44.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Country of Birth <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 sec-title-nob italic font-bold w-full">
                Beneficiary's Entry Information
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    45.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    <div>
                        Was the beneficiary <strong>EVER</strong> in the United States?
                    </div>
                    <div class="mt-1">
                        <div style="float:left; margin-left:72%; width:7%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="float:center; margin-left:79%; width:7%;">
                            Yes
                        </div>
                        <div style="float:center; margin-left:86%; width:7%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="mt-1" style="margin-left:93%; width:7%;">
                            No
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-2 w-full text2">
                If the beneficiary is currently in the United States, complete
                <strong>Items Numbers 46.a. - 46.d.</strong>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    46.a.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    He or she arrived as a (Class of Admission):
                    <input type="input" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    46.b.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    <div>
                        Form I-94 Arrival-Departure Record Number
                    </div>
                    <div class="mt-1">
                        <div class="mt-1" style="float:center; margin-left:40%; width:5%;">
                            <img src="{{$playBase64}}" alt="" height="3%">
                        </div>
                        <div class="cell-thin cell-thin-b" style="float:center; margin-left:45%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-m" style="float:center; margin-left:50%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-m" style="float:center; margin-left:55%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-m" style="float:center; margin-left:60%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-m" style="float:center; margin-left:65%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-m" style="float:center; margin-left:70%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-m" style="float:center; margin-left:75%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-m" style="float:center; margin-left:80%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-m" style="float:center; margin-left:85%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-m" style="float:center; margin-left:90%; width:5%;">&nbsp;</div>
                        <div class="cell-thin cell-thin-e" style="margin-left:95%; width:5%;">&nbsp;</div>
                    </div>
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    46.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:50%;">
                    Date of Arrival (mm/dd/yyyy)
                </div>
                <div class="text" style="margin-left:60%; width:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    46.d.
                </div>
                <div class="text2" style="margin-left:10%; width:90%;">
                    Date authorized stay expired, or will expire, as shown on 
                    Form I-94 or Form I-95 (mm/dd/yyyy) or type or print 
                    "D/S" for Duration of Status
                </div>
                <div class="text" style="margin-left:60%; width:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    47.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Passport Number <br>
                    <input type="input" class="inputs">
                </div>
            </div>

        </div>

        <div style="float:right; width: 48%; margin-left:52%;">

            <div class="mt-1 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    48.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Travel Document Number <br>
                    <input type="input" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    49.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Country of Issuance for Passport or Travel Document <br>
                    <input type="input" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    50.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    <div>
                        Expiration Date for Passport or Travel Document
                    </div>
                    <div>
                        <div style="float:left; width:60%;">
                            (mm/dd/yyyy)
                        </div>
                        <div style="margin-left:60%; width:40%;">
                            <input type="input" class="inputs">
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Beneficiary's Employment Information
            </div>

            <div class="mt-2 text2 w-full">
                Provide the beneficiary's current employment information (if 
                applicable), even if they are employed outside of the United 
                States. If the beneficiary is currently unemployed, type or print 
                "Unemployed" in <strong>Item Number 51.a.</strong>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    51.a.
                </div>
                <div class="text" style="margin-left:10%; width:90%;">
                    Name of Current Employer (if applicable) <br>
                    <input type="input" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    51.b.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Street Number <br>
                    and Name
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    51.c.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:17%;">
                    Apt.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:27%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:34%;">
                    Ste.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:44%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:51%;">
                    Flr.
                </div>
                <div class="text" style="width:39%; margin-left:61%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    51.d.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    City or Town
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    51.e.
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                    State
                </div>
                <div class="text" style="float:center; width:20%; margin-left:20%;">
                    <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                        <option selected>&nbsp;</option>
                    </select>
                </div>
                <div class="text font-bold" style="float:center; width:10%; margin-left:40%;">
                    51.f.
                </div>
                <div class="text mt-1" style="float:center; width:18%; margin-left:50%;">
                    ZIP Code
                </div>
                <div class="text" style="width:32%; margin-left:68%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    51.g.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Province
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    51.h.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Postal Code
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    51.i.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Country <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    52.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Date Employment Began (mm/dd/yyyy)
                </div>
                <div class="text" style="width:40%; margin-left:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Additional Information About Beneficiary
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    53.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Was the beneficiary <strong>EVER</strong> in immigration proceedings?
                </div>
                <div class="text" style="float:center; width:7%; margin-left:72%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:7%; margin-left:79%;">
                    Yes
                </div>
                <div class="text" style="float:center; width:7%; margin-left:86%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="width:7%; margin-left:93%;">
                    No
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    54.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    <div>
                        If you answered "Yes," select the type of proceedings and <br> 
                        provide the location and date of the proceedings.
                    </div>
                    <div class="mt-1">
                        <div class="text" style="float:left; width:7%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text mt-1" style="float:center; width:22%; margin-left:8%;">
                            Removal
                        </div>
                        <div class="text" style="float:center; width:7%; margin-left:30%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text mt-1" style="margin-left:38%;">
                            Exclusion/Deportation
                        </div>
                    </div>
                    <div class="mt-1">
                        <div class="text" style="float:left; width:7%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text mt-1" style="float:center; width:22%; margin-left:8%;">
                            Rescission
                        </div>
                        <div class="text" style="float:center; width:7%; margin-left:30%;">
                            <input type="checkbox" class="checkboxState">
                        </div>
                        <div class="text mt-1" style="margin-left:38%;">
                            Other Judicial Proceedings
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    55.a.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    City or Town<br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    55.b.
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                    State
                </div>
                <div class="text" style="width:20%; margin-left:20%;">
                    <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                        <option selected>&nbsp;</option>
                    </select>
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    56.
                </div>
                <div class="text mt-1" style="float:center; width:50%; margin-left:10%;">
                    Date (mm/dd/yyyy)
                </div>
                <div class="text" style="width:40%; margin-left:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

        </div>

    </div>

    <div class="w-full">&nbsp;</div>

    <footer>
        <div class="text" style="float:left; margin-left:-48%;">
            Form I-130 Edition 07/20/21
        </div>
        <div class="text" style="margin-left:80%; width:20%; text-align:right;">
            Page 7 of 12
        </div>
    </footer>

    <div class="page-break"></div>

    <div class="separator">

    </div>

    <div class="mt-4">

        <div style="float:left; width:48%;">

            <div class="sec-title-nob border w-full">
                <strong>Part 4. Information About Beneficiary</strong> (continued)
            </div>

            <div class="mt-2 text2 font-bold w-full">
                if the beneficiary's native written language does not use 
                Roman letters, type or print his or her name and foreign 
                address in their native written language.
            </div>

            <div class="mt-2 w-full">
                <div style="float:left; width:10%;">
                    57.a.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Family Name <br>
                    (Last Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="input" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div style="float:left; width:10%;">
                    57.b.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Given Name <br>
                    (First Name)
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="input" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div style="float:left; width:10%;">
                    57.c.
                </div>
                <div class="text" style="float:center; margin-left:10%; width:30%;">
                    Middle Name
                </div>
                <div class="text" style="margin-left:40%; width:60%;">
                    <input type="input" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    58.a.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Street Number <br>
                    and Name
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    58.b.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:17%;">
                    Apt.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:27%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:34%;">
                    Ste.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:44%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:51%;">
                    Flr.
                </div>
                <div class="text" style="width:39%; margin-left:61%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    58.c.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    City or Town
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    58.d.
                </div>
                <div class="text mt-1" style="float:center; width:30%; margin-left:10%;">
                    Province
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    58.e.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Postal Code
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    58.f.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Country <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4 text2 font-bold w-full">
                If filing for your spouse, provide the last address at which 
                you physically lived together. If you never lived together, 
                type or print, "Never lived together" in Item Number 59.a.
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    59.a.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Street Number <br>
                    and Name
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    59.b.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:17%;">
                    Apt.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:27%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:34%;">
                    Ste.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:44%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:51%;">
                    Flr.
                </div>
                <div class="text" style="width:39%; margin-left:61%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    59.c.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    City or Town
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    59.d.
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                    State
                </div>
                <div class="text" style="float:center; width:20%; margin-left:20%;">
                    <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                        <option selected>&nbsp;</option>
                    </select>
                </div>
                <div class="text font-bold" style="float:center; width:10%; margin-left:40%;">
                    59.e.
                </div>
                <div class="text mt-1" style="float:center; width:18%; margin-left:50%;">
                    ZIP Code
                </div>
                <div class="text" style="width:32%; margin-left:68%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    59.f.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Province
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    59.g.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Postal Code
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    59.h.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Country <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    60.a.
                </div>
                <div class="text" style="float:center; width:50%; margin-left:10%;">
                    Date From (mm/dd/yyyy)
                </div>
                <div class="text" style="width:40%; margin-left:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    60.b.
                </div>
                <div class="text" style="float:center; width:50%; margin-left:10%;">
                    Date To (mm/dd/yyyy)
                </div>
                <div class="text" style="width:40%; margin-left:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4 text2 font-bold w-full">
                The beneficiary is in the United States and will apply for 
                adjustment of status to that of a lawful permanent resident 
                at the U.S. Citizenship and Immigration Services (USCIS) 
                office in:
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    61.a.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    City or Town
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    61.b.
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                    State
                </div>
                <div class="text" style="width:20%; margin-left:20%;">
                    <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                        <option selected>&nbsp;</option>
                    </select>
                </div>
            </div>

        </div>

        <div style="float:center; width:48%; margin-left:52%;">

            <div class="text2 font-bold w-full">
                The beneficiary will not apply for adjustment of status in 
                the United States, but he or she will apply for an immigrant 
                visa abroad at the U.S. Embassy or U.S. Consulate in:
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    62.a.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    City or Town
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    62.b.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Province
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    62.a.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Country <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 text2 w-full">
                <strong>NOTE:</strong> Choosing a U.S. Embassy or U.S. Consulate outside 
                the country of the beneficiary's last residence does not 
                guarantee that it will accept the beneficiary's case for 
                processing. In these situations, the designated U.S. Embassy or 
                U.S. Consulate has discretion over whether or not to accept the 
                beneficiary's case.
            </div>

            <div class="mt-6 sec-title-nob border font-bold w-full">
                Part 5. Other Information
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    1.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Have you <strong>EVER</strong> previously filed a petition for this 
                </div>
                <div class="text" style="">
                    <div style="float:left; width:72%; margin-left:10%;">
                        beneficiary or any other alien?
                    </div>
                    <div style="float:center; width:7%; margin-left:72%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-1" style="float:center; width:7%; margin-left:79%;">
                        Yes
                    </div>
                    <div style="float:center; width:7%; margin-left:86%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div class="mt-1" style="width:7%; margin-left:93%;">
                        No
                    </div>
                </div>
            </div>

            <div class="mt-2 w-full text2">
                If you answered "Yes," provide the name, place, date of filing, 
                and the result. 
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    2.a.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Family Name <br> (Last Name) 
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    2.b.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Given Name <br> (First Name) 
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    2.c.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Middle Name
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.a.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    City or Town
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.b.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%">
                    State
                </div>
                <div class="text" style="width:20%; margin-left:40%;">
                    <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                        <option selected>&nbsp;</option>
                    </select>
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    4.
                </div>
                <div class="text" style="float:center; width:50%; margin-left:10%;">
                    Date Filed (mm/dd/yyyy)
                </div>
                <div class="text" style="width:40%; margin-left:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    5.
                </div>
                <div class="text" style=" width:50%; margin-left:10%;">
                    Result (for example, approved, denied, withdrawn) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full text2">
                If you are also submitting separate petitions for other relatives, 
                provide the names of and your relationship to each relative. 
            </div>

            <div class="mt-2 w-full font-bold text2">
                Relative 1
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    6.a.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Family Name <br> (Last Name) 
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    6.b.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Given Name <br> (First Name) 
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    6.c.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Middle Name
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    7.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Relationship
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

        </div>

    </div>

    <div class="w-full">&nbsp;</div>

    <footer>
        <div class="text" style="float:left; margin-left:-48%;">
            Form I-130 Edition 07/20/21
        </div>
        <div class="text" style="margin-left:80%; width:20%; text-align:right;">
            Page 8 of 12
        </div>
    </footer>

    <div class="page-break"></div>

    <div class="separator">

    </div>

    <div class="mt-4">

        <div style="width:48%; float:left;">

            <div class="sec-title-nob border w-full">
                <strong>Part 5. Other Information</strong> (continued)
            </div>
    
            <div class="mt-2 w-full font-bold text2">
                Relative 2
            </div>
    
            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    8.a.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Family Name <br> (Last Name) 
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>
    
            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    8.b.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Given Name <br> (First Name) 
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>
    
            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    8.c.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Middle Name
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>
    
            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    9.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Relationship
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>
    
            <div class="mt-4 w-full text2">
                <strong>WARNING:</strong> USCIS investigates the claimed relationships and 
                verifies the validity of documents you submit. If you falsify a 
                family relationship to obtain a visa, USCIS may seek to have 
                you criminally prosecuted.
            </div>
    
            <div class="mt-4 w-full text2">
                <strong>PENALTIES:</strong> By law, you may be imprisoned for up to 5 
                years or fined $250,000, or both, for entering into a marriage 
                contract in order to evade any U.S. immigration law. In 
                addition, you may be fined up to $10,000 and imprisoned for 
                up to 5 years, or both, for knowingly and willfully falsifying 
                or concealing a material fact or using any false document in 
                submitting this petition.
            </div>
    
            <div class="mt-4 sec-title-nob font-bold border w-full">
                Part 6. Petitioner's Statement, Contact Information, Declaration, and Signature
            </div>
    
            <div class="mt-2 text2 w-full">
                <strong>NOTE:</strong> Read the <strong>Penalties</strong> section of the Form I-130 
                Instructions before completing this part. 
            </div>
    
            <div class="mt-4 sec-title-nob italic font-bold border w-full">
                Petitioner's Statement
            </div>
    
            <div class="mt-2 w-full text2">
                <strong>NOTE:</strong> Select the box for either <strong>Item Number 1.a.</strong> or <strong>1.b.</strong> If 
                applicable, select the box for <strong>Item Number 2.</strong>
            </div>
    
            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    1.a.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text" style="width:83%; margin-left:17%;">
                    I can read and understand English, and I have read 
                    and understand every question and instruction on this 
                    petition and my answer to every question.
                </div>
            </div>
    
            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    1.b.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text" style="width:83%; margin-left:17%;">
                    The interpreter named in <strong>Part 7.</strong> read to me every 
                    question and instruction on this petition and my 
                    answer to every question in <br>
                    <input type="text" class="inputs"> <br>
                    a language in which I am fluent. I understood all of 
                    this information as interpreted.
                </div>
            </div>
    
            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    2.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text" style="width:83%; margin-left:17%;">
                    At my request, the preparer named in <strong>Part 8.,</strong> <br>
                    <input type="text" class="inputs"> <br>
                    prepared this petition for me based only upon
                    information I provided or authorized.
                </div>
            </div>

        </div>

        <div style="width:48%; float:right; margin-left:52%">
            <div class="sec-title-nob italic font-bold w-full">
                Petitioner's Contact Information
            </div>

            <div class="w-full mt-2">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Petitioner's Daytime Telephone Number <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="w-full mt-2">
                <div class="text font-bold" style="float:left; width:10%;">
                    4.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Petitioner's Mobile Telephone Number (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="w-full mt-2">
                <div class="text font-bold" style="float:left; width:10%;">
                    5.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Petitioner's Email Address (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>
    
            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Petitioner's Declaration and Certification
            </div>

            <div class="w-full text2 mt-2">
                Copies of any documents I have submitted are exact 
                photocopies of unaltered, original documents, and I understand 
                that USCIS may require that I submit original documents to 
                USCIS at a later date. Furthermore, I authorize the release of 
                any information from any of my records that USCIS may need 
                to determine my eligibility for the immigration benefit I seek.
            </div>

            <div class="w-full text2 mt-2">
                I further authorize release of information contained in this 
                petition, in supporting documents, and in my USCIS records to 
                other entities and persons where necessary for the administration 
                and enforcement of U.S. immigration laws.
            </div>

            <div class="w-full text2 mt-2">
                I understand that USCIS may require me to appear for an 
                appointment to take my biometrics (fingerprints, photograph, 
                and/or signature) and, at that time, if I am required to provide 
                biometrics, I will be required to sign an oath reaffirming that:
            </div>

            <div class="w-full text2 mt-2">
                <div class="text font-bold" style="float:left; width:5%; margin-left:10%;">
                    1)
                </div>
                <div class="text" style="width:85%; margin-left:15%;">
                    I provided or authorized all of the information 
                    contained in, and submitted with, my petition;
                </div>
            </div>

            <div class="w-full text2 mt-2">
                <div class="text font-bold" style="float:left; width:5%; margin-left:10%;">
                    2)
                </div>
                <div class="text" style="width:85%; margin-left:15%;">
                    I reviewed and understood all of the information in, 
                    and submitted with, my petition; and
                </div>
            </div>

            <div class="w-full text2 mt-2">
                <div class="text font-bold" style="float:left; width:5%; margin-left:10%;">
                    3)
                </div>
                <div class="text" style="width:85%; margin-left:15%;">
                    All of this information was complete, true, and correct 
                    at the time of filing.
                </div>
            </div>

            <div class="w-full text2 mt-2">
                I certify, under penalty of perjury, that all of the information in 
                my petition and any document submitted with it were provided 
                or authorized by me, that I reviewed and understand all of the 
                information contained in, and submitted with, my petition, and 
                that all of this information is complete, true, and correct.
            </div>
    
            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Petitioner's Signature
            </div>

            <div class="w-full text2 mt-2">
                <div class="text font-bold mt-1" style="float:left; width:10%;">
                    6.a.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Petitioner's Signature (sign in ink)
                </div>
            </div>

            <div class="w-full text2 mt-1">
                <div class="text font-bold mt-1" style="float:left; width:10%;">
                    <img src="{{$flechaBase64}}" alt="" height="8%">
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="w-full text2 mt-2">
                <div class="text font-bold mt-1" style="float:left; width:10%;">
                    6.b.
                </div>
                <div class="text" style="float:center; width:50%; margin-left:10%;">
                    Date of Signature (mm/dd/yyyy)
                </div>
                <div class="text" style="width:40%; margin-left:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="w-full text2 mt-2">
                <strong>NOTE TO ALL PETITIONERS:</strong> If you do not completely <br>
                fill out this petition or fail to submit required documents listed <br>
                in the Instructions, USCIS may deny your petition.
            </div>

        </div>

    </div>

    <div class="w-full">&nbsp;</div>

    <footer>
        <div class="text" style="float:left;">
            Form I-130 Edition 07/20/21
        </div>
        <div class="text" style="margin-left:80%; width:20%; text-align:right;">
            Page 9 of 12
        </div>
    </footer>

    <div class="page-break"></div>

    <div class="separator">

    </div>

    <div class="mt-4">

        <div style="width:48%; float:left;">

            <div class="sec-title-nob font-bold w-full border">
                Part 7. Interpreter's Contact Information, Certification, and Signature
            </div>

            <div class="w-full text2 mt-2">
                Provide the following information about the interpreter if you used one.
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Interpreter's Full Name
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    1.a.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Family Name (Last Name) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    1.b.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Given Name (First Name) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    2.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Business or Organization Name (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Interpreter's Mailing Address
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    3.a.
                </div>
                <div class="text" style="width:30%; float:center; margin-left:10%;">
                    Interpreter's Family Name (Last Name)
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.b.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:17%;">
                    Apt.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:27%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:34%;">
                    Ste.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:44%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:51%;">
                    Flr.
                </div>
                <div class="text" style="width:39%; margin-left:61%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.c.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    City or Town
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.d.
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                    State
                </div>
                <div class="text" style="float:center; width:20%; margin-left:20%;">
                    <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                        <option selected>&nbsp;</option>
                    </select>
                </div>
                <div class="text font-bold" style="float:center; width:10%; margin-left:40%;">
                    3.e.
                </div>
                <div class="text mt-1" style="float:center; width:18%; margin-left:50%;">
                    ZIP Code
                </div>
                <div class="text" style="width:32%; margin-left:68%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.f.
                </div>
                <div class="text mt-1" style="float:center; width:30%; margin-left:10%;">
                    Province
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.g.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Postal Code
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.h.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Country <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Interpreter's Contact Information
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    4.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Daytime Telephone Number <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    5.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Mobile Telephone Number (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    6.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Email Address (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

        </div>

        <div style="width:48%; float:right; margin-left:52%;">

            <div class="sec-title-nob italic font-bold w-full">
                Interpreter's Certification
            </div>

            <div class="mt-2 text2 w-full">
                <div>
                    I certify, under penalty of perjury, that:
                </div>
                <div style="mt-4 w-1-2" style="float:left;">
                    I am fluent in English and
                </div>
                <div style="margin-left:50%;">
                    <input type="text" class="inputs">
                </div>
                which is the same language provided in <strong>Part 6., Item Number 
                1.b.</strong>, and I have read to this petitioner in the identified language 
                every question and instruction on this petition and his or her 
                answer to every question. The petitioner informed me that he or 
                she understands every instruction, question, and answer on the 
                petition, including the <strong>Petitioner's Declaration and
                Certification</strong>, and has verified the accuracy of every answer.
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Interpreter's Signature
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    7.a.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Signature (sign in ink) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    7.b.
                </div>
                <div class="text" style="float:center; width:50%; margin-left:10%;">
                    Date of Signature (mm/dd/yyyy)
                </div>
                <div class="text" style="width:40%; margin-left:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4 sec-title-nob font-bold w-full border">
                Part 8. Contact Information, Declaration, and 
                Signature of the Person Preparing this Petition, if 
                Other Than the Petitioner
            </div>

            <div class="w-full text2 mt-2">
                Provide the following information about the preparer.
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Interpreter's Full Name
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    1.a.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Preparer's Family Name (Last Name) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    1.b.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Preparer's Given Name (First Name) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    2.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Preparer's Business or Organization Name (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Preparer's Mailing Address
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    3.a.
                </div>
                <div class="text" style="width:30%; float:center; margin-left:10%;">
                    Interpreter's Family Name (Last Name)
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.b.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:17%;">
                    Apt.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:27%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:34%;">
                    Ste.
                </div>
                <div class="text" style="float:center; width:7%; margin-left:44%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:51%;">
                    Flr.
                </div>
                <div class="text" style="width:39%; margin-left:61%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.c.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    City or Town
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.d.
                </div>
                <div class="text mt-1" style="float:center; width:10%; margin-left:10%;">
                    State
                </div>
                <div class="text" style="float:center; width:20%; margin-left:20%;">
                    <select style="width:85%; height:1.15rem; border:1px solid #000; margin-top:.1rem;">
                        <option selected>&nbsp;</option>
                    </select>
                </div>
                <div class="text font-bold" style="float:center; width:10%; margin-left:40%;">
                    3.e.
                </div>
                <div class="text mt-1" style="float:center; width:18%; margin-left:50%;">
                    ZIP Code
                </div>
                <div class="text" style="width:32%; margin-left:68%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.f.
                </div>
                <div class="text mt-1" style="float:center; width:30%; margin-left:10%;">
                    Province
                </div>
                <div class="text" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.g.
                </div>
                <div class="text" style="float:center; width:30%; margin-left:10%;">
                    Postal Code
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="float:left; width:10%;">
                    3.h.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Country <br>
                    <input type="text" class="inputs">
                </div>
            </div>

        </div>


    </div>

    <div class="w-full">&nbsp;</div>

    <footer>
        <div class="text" style="float:left;">
            Form I-130 Edition 07/20/21
        </div>
        <div class="text" style="margin-left:80%; width:20%; text-align:right;">
            Page 10 of 12
        </div>
    </footer>

    <div class="page-break"></div>

    <div class="separator">

    </div>

    <div class="mt-4">

        <div style="float:left; width:48%;">
            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Preparer's Contact Information
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    4.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Daytime Telephone Number <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    5.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Mobile Telephone Number (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    6.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Email Address (if any) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Preparer's statement
            </div>
            
            <div class="mt-2 w-full">
                <div class="mt-1 font-bold text" style="width:10%; float:left;">
                    7.a.
                </div>
                <div class="font-bold text" style="width:6%; float:center; margin:left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="mt-1 text" style="width:80%; margin-left:16%;">
                    I am not an attorney or accredited representative but <br>
                    have prepared this petition on behalf of the petitioner <br>
                    and with the petitioner's consent.
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="mt-1 font-bold text" style="width:10%; float:left;">
                    7.b.
                </div>
                <div class="font-bold text" style="width:7%; float:center; margin:left:10%;">
                    <input type="checkbox" class="checkboxState">
                </div>
                <div class="mt-1 text" style="width:80%; margin-left:17%;">
                    <div>
                        I am an attorney or accredited representative and my <br>
                        representation of the petitioner in this case
                    </div>
                    <div style="width:7%; float:left;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div style="width:15%; float:center; margin-left:7%;">
                        extends
                    </div>
                    <div style="width:7%; float:center; margin-left:23%;">
                        <input type="checkbox" class="checkboxState">
                    </div>
                    <div style="margin-left:30%; width:70%;">
                        does not extend beyond the preparation
                    </div>
                    <div class="mt-2">
                        of this petition.
                    </div>
                    <div class="mt-2">
                        <strong>NOTE:</strong> If you are an attorney or accredited <br>
                        representative whose representation extends beyond <br>
                        preparation of this petition, you may be obliged to <br>
                        submit a completed Form G-28, Notice of Entry of <br>
                        Appearance as Attorney or Accredited <br>
                        Representative, with this petition.
                    </div>
                </div>
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Preparer's Certification
            </div>
            
            <div class="mt-2 text2 w-full">
                By my signature, I certify, under penalty of perjury, that I 
                prepared this petition at the request of the petitioner. The 
                petitioner then reviewed this completed petition and informed 
                me that he or she understands all of the information contained 
                in, and submitted with, his or her petition, including the 
                <strong>Petitioner's Declaration and Certification</strong>, and that all of this 
                information is complete, true, and correct. I completed this 
                petition based only on information that the petitioner provided 
                to me or authorized me to obtain or use.
            </div>

            <div class="mt-4 sec-title-nob italic font-bold w-full">
                Preparer's Signature
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    8.a.
                </div>
                <div class="text" style="width:90%; margin-left:10%;">
                    Interpreter's Signature (sign in ink) <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="font-bold text" style="width:10%; float:left;">
                    8.b.
                </div>
                <div class="text" style="float:center; width:50%; margin-left:10%;">
                    Date of Signature (mm/dd/yyyy)
                </div>
                <div class="text" style="width:40%; margin-left:60%;">
                    <input type="text" class="inputs">
                </div>
            </div>


        </div>

    </div>

    <div class="w-full">&nbsp;</div>

    <footer>
        <div class="text" style="float:left; margin-left:-48%;">
            Form I-130 Edition 07/20/21
        </div>
        <div class="text" style="margin-left:80%; width:20%; text-align:right;">
            Page 11 of 12
        </div>
    </footer>

    <div class="page-break"></div>

    <div class="separator">

    </div>

    <div class="mt-4">

        <div style="float:left; width:48%;">

            <div class="sec-title-nob border font-bold w-full">
                Part 9. Additional Information
            </div>

            <div class="mt-4 w-full">
                <div class="text">
                    If you need extra space to provide any additional information <br>
                    within this petition, use the space below. If you need more <br>
                    space than what is provided, you may make copies of this page <br>
                    to complete and file with this petition or attach a separate sheet <br>
                    of paper. Type or print your name and A-Number (if any) at the <br>
                    top of each sheet; indicate the <strong>Page Number, Part Number</strong>, <br>
                    and <strong>Item Number</strong> to which your answer refers; and sign and <br>
                    date each sheet.
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    1.a.
                </div>
                <div class="text" style="width:30%; float:center; margin-left:10%;">
                    Family Name <br>
                    (Last Name)
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    1.b.
                </div>
                <div class="text" style="width:30%; float:center; margin-left:10%;">
                    Given Name <br>
                    (First Name)
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    1.c.
                </div>
                <div class="text" style="width:30%; float:center; margin-left:10%;">
                    Middle Name
                </div>
                <div class="" style="width:60%; margin-left:40%;">
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    2.
                </div>
                <div class="text" style="width:35%; float:center; margin-left:10%;">
                    A-Number (if any)
                </div>
                <div class="mt-1" style="float:center; width:5%; margin-left:45%;">
                    <img src="{{$playBase64}}" alt="" height="2%">
                </div>
                <div class="text2 mt-1 font-bold" style="float:center; width:3%; margin-left:50%;">
                    A
                </div>
                <div class="font-bold " style="float:center; width:2%; margin-left:53%;">
                    -
                </div>
                <div class="cell-thin cell-thin-b" style="float:center; width:5%; margin-left:55%;">
                    &nbsp;
                </div>
                <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:60%;">
                    &nbsp;
                </div>
                <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:65%;">
                    &nbsp;
                </div>
                <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:70%;">
                    &nbsp;
                </div>
                <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:75%;">
                    &nbsp;
                </div>
                <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:80%;">
                    &nbsp;
                </div>
                <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:85%;">
                    &nbsp;
                </div>
                <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:90%;">
                    &nbsp;
                </div>
                <div class="cell-thin cell-thin-m" style="float:center; width:5%; margin-left:90%;">
                    &nbsp;
                </div>
                <div class="cell-thin cell-thin-e" style="width:5%; margin-left:95%;">
                    &nbsp;
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    3.a.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:10%;">
                    Page Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:33%;">
                    3.b.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:43%;">
                    Part Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:66%;">
                    3.c.
                </div>
                <div class="text" style="width:20%; margin-left:76%;">
                    Item Number <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    3.d.
                </div>
                <div style="width:90%; margin-left:10%;">
                    <div class="input input-top">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-bottom">
                        &nbsp;
                    </div>
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    4.a.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:10%;">
                    Page Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:33%;">
                    4.b.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:43%;">
                    Part Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:66%;">
                    4.c.
                </div>
                <div class="text" style="width:20%; margin-left:76%;">
                    Item Number <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    4.d.
                </div>
                <div style="width:90%; margin-left:10%;">
                    <div class="input input-top">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-bottom">
                        &nbsp;
                    </div>
                </div>
            </div>

        </div>

        <div style="float:right; width:48%; margin-left:52%;">

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    5.a.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:10%;">
                    Page Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:33%;">
                    5.b.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:43%;">
                    Part Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:66%;">
                    5.c.
                </div>
                <div class="text" style="width:20%; margin-left:76%;">
                    Item Number <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    5.d.
                </div>
                <div style="width:90%; margin-left:10%;">
                    <div class="input input-top">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-bottom">
                        &nbsp;
                    </div>
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    6.a.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:10%;">
                    Page Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:33%;">
                    6.b.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:43%;">
                    Part Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:66%;">
                    6.c.
                </div>
                <div class="text" style="width:20%; margin-left:76%;">
                    Item Number <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    6.d.
                </div>
                <div style="width:90%; margin-left:10%;">
                    <div class="input input-top">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-bottom">
                        &nbsp;
                    </div>
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    7.a.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:10%;">
                    Page Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:33%;">
                    7.b.
                </div>
                <div class="text" style="width:20%; float:center; margin-left:43%;">
                    Part Number <br>
                    <input type="text" class="inputs">
                </div>
                <div class="text font-bold" style="width:10%; float:left; margin-left:66%;">
                    7.c.
                </div>
                <div class="text" style="width:20%; margin-left:76%;">
                    Item Number <br>
                    <input type="text" class="inputs">
                </div>
            </div>

            <div class="mt-2 w-full">
                <div class="text font-bold" style="width:10%; float:left;">
                    7.d.
                </div>
                <div style="width:90%; margin-left:10%;">
                    <div class="input input-top">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-middle">
                        &nbsp;
                    </div>
                    <div class="input input-bottom">
                        &nbsp;
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="w-full">&nbsp;</div>

    <footer>
        <div class="text" style="float:left;">
            Form I-130 Edition 07/20/21
        </div>
        <div class="text" style="margin-left:80%; width:20%; text-align:right;">
            Page 12 of 12
        </div>
    </footer>

</body>
</html>