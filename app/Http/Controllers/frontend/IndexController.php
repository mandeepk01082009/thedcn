<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Index; 
use App\Models\Slider; 
use Illuminate\Http\Request;

class IndexController extends Controller
{  
    public function index()
    {
        $slider = Slider::all();
        return view('frontend.index',compact('slider'));                    
    }
}
