<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Index; 
use App\Models\Slider; 
use App\Models\OurPacks; 
use App\Models\About; 
use Illuminate\Http\Request;

class IndexController extends Controller
{  
    public function index()
    {
        $slider = Slider::all();
        $about = About::all();
        $packs = OurPacks::all();
        return view('frontend.index',compact('slider','packs','about'));                           
    }
}
