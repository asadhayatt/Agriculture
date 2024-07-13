<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Backend\VehicleController;
use App\Http\Controllers\Backend\AdminController;

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

Route::get('/',[IndexController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/portfolio',[PortfolioController::class,'index']);
Route::get('/services',[ServicesController::class,'index']);
Route::get('/new-service',[VehicleController::class,'index'])->name('index');
Route::post('/store-ad',[VehicleController::class,'create']);
Route::get('/details/{id}',[ServicesController::class,'details']);
Route::get('/{any}',function(){
    return view('Frontend.errors.404');
});


// ---------------------------------------------
// Admin Routes
// ---------------------------------------------
Route::prefix('/admin')->group(function () {
   

    Route::get('/dashboard',[AdminController::class,'index']);
    Route::get('/table',function(){
        return 'Table Page';
    });

});


