<?php
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
  
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $data = ['title' => 'coding driver test title'];
        $pdf = Pdf::loadView();
  
        return $pdf->download('codingdriver.pdf');
    }
}