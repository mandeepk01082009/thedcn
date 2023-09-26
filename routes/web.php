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

    Route::get('ourpack', [App\Http\Controllers\admin\PacksController::class, 'index'])->name('ourpacks');   

    Route::post('/packs', [App\Http\Controllers\admin\PacksController::class, 'create'])->name('packstore');
    
    Route::get('ourpacks', [App\Http\Controllers\admin\PacksController::class, 'show'])->name('opacks');

    Route::get('/editpacks/{id}', [App\Http\Controllers\admin\PacksController::class, 'edit'])->name('editpacks');    

    Route::patch('/updatepacks/{id}',[App\Http\Controllers\admin\PacksController::class, 'update'])->name('updatepacks'); 

    Route::get('deletepacks/{id}',[App\Http\Controllers\admin\PacksController::class, 'destroy']);

    Route::get('ab', [App\Http\Controllers\admin\AboutController::class, 'index'])->name('ab'); 

    Route::post('/abouts', [App\Http\Controllers\admin\AboutController::class, 'create'])->name('createabout');

    Route::get('about_table', [App\Http\Controllers\admin\AboutController::class, 'show'])->name('about_table');

    Route::get('/editabout/{id}', [App\Http\Controllers\admin\AboutController::class, 'edit'])->name('editabout');    

    Route::patch('/updateabout/{id}',[App\Http\Controllers\admin\AboutController::class, 'update'])->name('updateabout');
    
    Route::get('deleteabout/{id}',[App\Http\Controllers\admin\AboutController::class, 'destroy']);    
    
    Route::get('packdetail', [App\Http\Controllers\admin\PackdetailController::class, 'index'])->name('packdetail');

    Route::post('/detail', [App\Http\Controllers\admin\PackdetailController::class, 'create'])->name('createdetail');

    Route::get('packdetail_table', [App\Http\Controllers\admin\PackdetailController::class, 'show'])->name('packdetail_table');

    Route::get('/editdetail/{id}', [App\Http\Controllers\admin\PackdetailController::class, 'edit'])->name('editdetail');    

    Route::patch('/updatedetail/{id}',[App\Http\Controllers\admin\PackdetailController::class, 'update'])->name('updatedetail');

    Route::get('deletedetail/{id}',[App\Http\Controllers\admin\PackdetailController::class, 'destroy']); 

    Route::get('/packdetails/{id}', [App\Http\Controllers\admin\PackdetailController::class, 'display'])->name('display.packdetail');
                
});        
