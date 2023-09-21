<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('frontend.satellite');            
    }

    public function home()
    {
        return view('frontend.homeservices');            
    }
}
