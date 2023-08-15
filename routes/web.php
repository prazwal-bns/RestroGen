<?php

use App\Http\Controllers\PagesController;
use Illuminate\Routing\Controller;
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

Route::get('/',[PagesController::class,'Index'])->name('index');
Route::get('/about',[PagesController::class,'About'])->name('about');
Route::get('/contact',[PagesController::class,'Contact'])->name('contact');
Route::get('/services',[PagesController::class,'Services'])->name('services');

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });

// Route::get('services',function(){
//     return view('services');
// });