<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Product; 

class PDFController extends Controller
{
    //
    public function pdfReport()
    {
        $data = [
            'title' => 'Virtual Movie',
            'date' => date('m/d/Y')
        ];
        $products=Product::paginate(10);
        $pdf = PDF::loadView('myPDF', compact('products'));
    
        return $pdf->download('report.pdf');
    }
}
