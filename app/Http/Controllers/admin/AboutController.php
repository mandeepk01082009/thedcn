<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About; 

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about');                         
    }

    public function create(Request $request)  
    {
     $data = $request->validate([
     'heading' => 'required',
     'content' => 'required',
     'image' => 'required',    
 ]);
 
 $about = About::create([
    'heading' => $request->input('heading'), 
    'content' => $request->input('content'), 
    'image' => '',
 ]);
 
 
 if($request->has('image')) {  
 
             $file = $request->file('image');
             $extention = $file->getClientOriginalName();
             $filename = time(). '.' . $extention;
             $file->move('storage/',$filename);
             $about->image = $filename;              
     }
 
     $about->save(); 
     
     return redirect('/about_table');
 
  //return response()->json(['success'=>'Data uploaded successfully.']); 

}

public function show()
    {  
        $image = About::all();   

        // load the view and pass the sharks  
        return view('admin.about_table')                
            ->with('image', $image);           
    }

    public function edit(string $id)
    {
        $about = About::find($id);                 
        // show the edit form and pass the   
        return view('admin.editabout',compact('about'));                
    }   

    public function update(Request $request, string $id)
    {
       
        $about = About::find($id);   
        
        $about->heading = $request->input('heading');

        $about->content = $request->input('content');

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);  
            $about->image = $filename;            
    }
    
    $about->update();                 

    return redirect('/about_table');               
    }

    public function destroy(string $id)               
    {
        $about = About::find($id);   
        $about->delete();          
        return redirect('/about_table');                                                                      
    }


}
