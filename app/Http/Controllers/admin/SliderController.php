<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider; 

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.slider');              
    }

   
    public function create(Request $request)  
    {
     $data = $request->validate([
     'image' => 'required',    
 ]);
 
 $slider = Slider::create([
      'image' => '',
 ]);
 
 
 if($request->has('image')) {
 
             $file = $request->file('image');
             $extention = $file->getClientOriginalName();
             $filename = time(). '.' . $extention;
             $file->move('storage/',$filename);
             $slider->image = $filename;         
     }
 
     $slider->save();
 
  //return response()->json(['success'=>'Files uploaded successfully.']); 
  
  return redirect('/slider');   
 
 }

 public function show()
    {  
        $image = Slider::all();

        // load the view and pass the sharks
        return view('admin.slidertable')           
            ->with('image', $image);         
    }

    public function edit(string $id)
    {
        $slider = Slider::find($id);                 
        // show the edit form and pass the   
        return view('admin.editslider',compact('slider'));         
    }    

    public function update(Request $request, string $id)
    {
       
        $slider = Slider::find($id);              

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $slider->image = $filename;          
    }
    
    $slider->update();                 

    return redirect('/slider');        
    }

    public function destroy(string $id)             
    {
        $slider = Slider::find($id);    
        $slider->delete();        
        return redirect('/slider');                                                                  
    }



}       
