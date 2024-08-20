<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('front.index');
});



Route::controller(HomeController::class)->group(function(){
    Route::post('subscriber','subscriber')->name('subscriber');
    Route::match(['get','post'],'contact','contact')->name('contact');
});