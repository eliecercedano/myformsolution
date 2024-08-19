<?php

namespace App\Http\Controllers;

use App\Models\AR11;
use App\Models\i130;
use App\Models\i130Part2;
use App\Models\i130Part3;
use App\Models\i130Part4;
use App\Models\i130Part5;
use App\Models\i130Part6;
use App\Models\i130Part7;
use App\Models\i130Part8;
use App\Models\I765part1;
use App\Models\I765part2;
use App\Models\I765part3;
use App\Models\I765part4;
use Barryvdh\DomPDF\Facade\Pdf;
//use Dompdf\Dompdf;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function downloadEmptyAr11(){
        set_time_limit(600);
        $pdf = Pdf::loadView('app.ar11.emptyAr11');
        return $pdf->stream('AR-11.pdf');
    }

    public function downloadFilledAr11($form_id){
        set_time_limit(600);
        $formData = AR11::where('id', $form_id)->first();
        $pdf = Pdf::loadView('app.ar11.filledAr11', compact('formData'));
        return $pdf->stream('AR-11.pdf');
    }

    public function downloadEmptyI130(){
        set_time_limit(600);
        $pdf = Pdf::loadView('app.i130.emptyI130');
        return $pdf->stream('I-130.pdf');
    }

    public function downloadFilledI130($form_id){
        set_time_limit(600);
        $formData = i130::where('id', $form_id)->first();
        $formData2 = i130Part2::where('id_part_1', $form_id)->first();
        $formData3 = i130Part3::where('id_part_1', $form_id)->first();
        $formData4 = i130Part4::where('id_part_1', $form_id)->first();
        $formData5 = i130Part5::where('id_part_1', $form_id)->first();
        $formData6 = i130Part6::where('id_part_1', $form_id)->first();
        $formData7 = i130Part7::where('id_part_1', $form_id)->first();
        $formData8 = i130Part8::where('id_part_1', $form_id)->first();
        $pdf = Pdf::loadView('app.i130.filledI130', compact('formData', 'formData2', 'formData3', 'formData4', 'formData5', 'formData6', 'formData7', 'formData8'));
        return $pdf->stream('I-130.pdf');
    }

    public function downloadEmptyI765(){
        set_time_limit(600);
        $pdf = Pdf::loadView('app.i765.emptyI765');
        return $pdf->stream('I-130.pdf');
    }

    public function downloadFilledI765($form_id){
        set_time_limit(600);
        $formData = I765part1::where('id', $form_id)->first();
        $formData2 = I765part2::where('idPart1', $form_id)->first();
        $formData3 = I765part3::where('idPart1', $form_id)->first();
        $formData4 = I765part4::where('idPart1', $form_id)->first();
        $pdf = Pdf::loadView('app.i765.filledI765', compact('formData', 'formData2', 'formData3', 'formData4'));
        return $pdf->stream('I-765.pdf');
    }
}
