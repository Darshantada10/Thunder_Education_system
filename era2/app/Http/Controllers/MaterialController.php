<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Material;
use PDF;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function index($name,)
    {
        $materials = Material::all();
        $navbars = Navbar::all();
        $logos =  Logo::where('visible','=', '1')->orderBy('created_at', 'Desc')->first(['logo']);
        $footer=Footer::where('visible','=','1')->orderBy('created_at','Desc')->first(['information','address','email','mobile']);

        $coursedetail = CourseDetail::where('name','=',"$name",'AND' ,'visible','=','1')->orderBy('created_at','Desc')
        ->first(['id','name','sub_name','heading','description','small_description','image']);

        return view('material',compact('materials','coursedetail','navbars','logos','footer'));
    }
    public function download($material)
    {
        // $file = Storage::disk('public')->get($material);
        // return view("pdfview",compact('material'));
        // dd($file);

        // $file = Storage::disk('public')->get($material);
  
        // return (new Response($file, 200))
        //       ->header('Content-Type', 'application/octet-stream');
        

        $filePath = public_path("/storage/pdf/$material");
        $headers = ['Content-Type: application/pdf'];
        $fileName = $material;

        return response()->download($filePath, $fileName, $headers);

        // return $pdf->download($material);
        
        
        // retreive all records from db
        //   $data = Employee::all();
        // share data to view
        //   view()->share('employee',$data);
        //   $pdf = PDF::loadView('myPDF', $material);
        // download PDF file with download method
        // $pdf = Storage::disk('public')->get($material);

// dd($material);
// return Response::make(file_get_contents("storage/pdf/".$material), 200, [
//     'Content-Type' => 'application/pdf',
//     'Content-Disposition' => 'inline; filename="'.$material.'"'
// ]);
            // return response()
            // ->view('myPDF' , "$file" )
            // ->header('Content-Disposition', 'inline; filename="'. $file);

            // return (new Response($file, 200))
            //     ->header('Content-Type', 'application/octet-stream');
    }
}
