<?php
  
namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
    
class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {
        $users = User::get();
    
        $data = [
            'title' => 'Laravel 11 Generate PDF File using DomPDF ',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
              
        $pdf = PDF::loadView('myPDF', $data);
       
        return $pdf->download('itsolutionstuff.pdf');
    }
}