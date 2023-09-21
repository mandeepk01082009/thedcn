<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();             

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');   

Route::group(['namespace' => 'frontend'], function() {                                                                                                                                                                                                                                 

    Route::get('/', [App\Http\Controllers\frontend\IndexController::class, 'index'])->name('front');                                                                                 

    Route::get('/about', [App\Http\Controllers\frontend\AboutController::class, 'index'])->name('about');                

    Route::get('/contact', [App\Http\Controllers\frontend\ContactController::class, 'index'])->name('contact');

    Route::get('/satellite', [App\Http\Controllers\frontend\ServicesController::class, 'index'])->name('satellite');

    Route::get('/homeservices', [App\Http\Controllers\frontend\ServicesController::class, 'home'])->name('homeservices');

    Route::get('/support', [App\Http\Controllers\frontend\SupportController::class, 'index'])->name('support');                            

}); 

Route::group(['namespace' => 'admin'], function() { 

    Route::get('s', [App\Http\Controllers\admin\SliderController::class, 'index'])->name('slider'); 

    //Route::post('/s', [App\Http\Controllers\admin\SliderController::class, 'create'])->name('s'); 
    
    Route::post('/slider_t', [App\Http\Controllers\admin\SliderController::class, 'create'])->name('sliderstore');

    Route::get('slider', [App\Http\Controllers\admin\SliderController::class, 'show'])->name('slidertable'); 

    Route::get('/editslider/{id}', [App\Http\Controllers\admin\SliderController::class, 'edit'])->name('editslider');
    
    Route::patch('/updateslider/{id}',[App\Http\Controllers\admin\SliderController::class, 'update'])->name('updateslider'); 

    Route::get('deleteslider/{id}',[App\Http\Controllers\admin\SliderController::class, 'destroy']);  

});       
