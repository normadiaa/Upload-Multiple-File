<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
Use App\documents;
Use App\data;
 
class FileController extends Controller
{
 
    public function index()
    {
        return view('file');
    }
 
    public function save(Request $request)
    {
       request()->validate([
         'file' => 'required',
         'file.*' => 'mimes:png,jpg,jpeg,doc,pdf,docx,txt,zip'
       ]);

       
 
        if($request->hasfile('file'))
         { 
            foreach($request->file('file') as $file)
            {
                $a=request('file_id');
                $filename=$file->getClientOriginalName();
                $file->move(public_path().'/files/', $filename);  
                // $insert[]['file'] = "$filename";

                $insert[] = ([
                    'file' => "$filename",
                    'file_id' => "$a"
                    ]);
            }
         }
        $check = documents::insert($insert);
        
        $data = array(
            'name' => $request->name,
            'file_id' => $request->file_id,
        );
        data::create($data);
 
        return Redirect::to("/")
        ->withSuccess('Great! files has been successfully uploaded.');
    }

    public function display()
    {
        $reports = data::all();
        return view ('display')->with("reports",$reports);
    }

    public function displayfile($file_id)
    {
        $file = documents::where('file_id',$file_id)->get();
        return view('displayfile',compact('file'));
    }
}