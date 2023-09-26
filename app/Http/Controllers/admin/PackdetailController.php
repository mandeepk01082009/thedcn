<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurPacks;  
use App\Models\PackDetail;               


class PackdetailController extends Controller
{
    public function index()
    {
        $pack = OurPacks::all();
        return view('admin.packdetail',compact('pack'));                         
    }

    public function create(Request $request)  
    {
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required|image',
]);

$packdetail = PackDetail::create([
     'pack_id' => $request->pack_id,
     'name' => $request->input('name'),
     'image' => '', 
]);


if($request->has('image')) {  
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $packdetail->image = $filename;       
    }

    $packdetail->save(); 

return redirect('/packdetail_table');      


//return response()->json(['success'=>'Files uploaded successfully.']);

 }

 public function show()
    {  
        //$images = OurPacks::all();

        $image = PackDetail::all();

        // load the view and pass the sharks
        return view('admin.packdetail_table')           
            ->with('image', $image);         
    }

    public function edit(string $id)
    {
        $pack = OurPacks::all();
        $packs = PackDetail::find($id);             
        // show the edit form and pass the     
        return view('admin.editpackdetail',compact('packs','pack'));    
       
    }   

    public function update(Request $request, string $id)
    {
       
        $packs = PackDetail::find($id);   

        $packs->pack_id = $request->input('pack_id');
        
        $packs->name = $request->input('name');

        if($request->has('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();     
            $filename = time(). '.' . $extention;
            $file->move('storage/',$filename);
            $packs->image = $filename;          
    }
    
    $packs->update();                 

    return redirect('/packdetail_table');               
    }

    public function destroy(string $id)               
    {
        $packs = OurPackDetail::find($id);   
        $packs->delete();          
        return redirect('/packdetail_table');                                                                       
    }

    public function display($id)    
    {
        $pack = OurPacks::where('id', $id)->get();   
        $packdetail = PackDetail::where('pack_id', $id)->get();   
        return view('frontend.packdetails',compact('pack','packdetail'));      
    }

}
