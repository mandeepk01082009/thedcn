<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurPacks;               


class PacksController extends Controller
{
    public function index()
    {
        return view('admin.packs');                         
    }

    public function create(Request $request)  
    {
     $data = $request->validate([
     'name' => 'required',
     'image' => 'required',    
 ]);
 
 $packs = OurPacks::create([
    'name' => $request->input('name'),  
    'image' => '',
 ]);
 
 
 if($request->has('image')) {  
 
             $file = $request->file('image');
             $extention = $file->getClientOriginalName();
             $filename = time(). '.' . $extention;
             $file->move('storage/',$filename);
             $packs->image = $filename;              
     }
 
     $packs->save();   
 
  //return response()->json(['success'=>'Data uploaded successfully.']); 
  
  return redirect('/ourpacks');         
 
 }

 public function show()
    {  
        $image = OurPacks::all();

        // load the view and pass the sharks
        return view('admin.packstable')           
            ->with('image', $image);         
    }

    public function edit(string $id)
    {
        $packs = OurPacks::find($id);                 
        // show the edit form and pass the   
        return view('admin.editpacks',compact('packs'));            
    }   

    public function update(Request $request, string $id)
    {
       
        $packs = OurPacks::find($id);   
        
        $packs->name = $request->input('name');

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $packs->image = $filename;          
    }
    
    $packs->update();                 

    return redirect('/ourpacks');               
    }

    public function destroy(string $id)               
    {
        $packs = OurPacks::find($id);   
        $packs->delete();          
        return redirect('/ourpacks');                                                                       
    }

}
