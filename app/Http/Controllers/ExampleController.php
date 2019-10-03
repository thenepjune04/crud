<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ExampleController extends Controller
{
    public function create()
        {
            return view('create');
        }

    public function store(Request $request)
        {
            //Save upload image to 'avatar' folder which in 'storage/app/public' folder
            $path = $request->file('image')->store('avatar','public');
            //echo $path;
            //Save $path to database or anything else
            //...
            return redirect('/employee');
        }
    public function pdf_index() {
        $data = [ ];
        $pdf = PDF::loadView('test_pdf',$data);
        return $pdf->stream('test.pdf'); //แบบนี้จะ stream มา preview
        //return $pdf->download('test.pdf'); //แบบนี้จะดาวโหลดเลย
}
}
