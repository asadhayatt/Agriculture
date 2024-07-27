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
use Illuminate\Support\Facades\Auth;

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
Route::post('/store-contact-us',[ContactController::class,'storeContact']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/portfolio',[PortfolioController::class,'index']);
Route::get('/services',[ServicesController::class,'index']);
Route::get('/new-service',[VehicleController::class,'index'])->name('index');
Route::post('/store-ad',[VehicleController::class,'create']);
Route::get('/details/{id}',[ServicesController::class,'details']);
Route::get('/login',function(){
    if(Auth::user()){
        return redirect()->to('/admin/dashboard');
    }else{
        return redirect()->to('/admin/login');
    }
});


// Admin Routes

Route::prefix('/admin')->group(function () {

    // Login Routes
    Route::get('/login',[AdminController::class,'showLoginPage'])->name('login');
    Route::post('/verify-login',[AdminController::class,'verifyLoginInfo']);
    Route::get('/register',[AdminController::class,'showRegisterPage']);
    Route::post('/store-register-info',[AdminController::class,'storeRegisterInfo']);
    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->to('/login');
    });



    // Admin Pages Routes
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard',[AdminController::class,'index']);
        Route::get('/contact-us',[AdminController::class,'contactUS']);
        Route::get('/delete-contact-us/{id}',[AdminController::class,'deleteContactUS']);

        Route::get('post-ads' ,[AdminController::class,'postAds']);
        Route::get('/edit-post-ads' ,[AdminController::class,'editPostAds']);
    });

});


  

