<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\AgroController;
use App\Http\Controllers\AskController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home',function(){
    return view('home');
})->name('home');

Route::get('/farmer', [FarmerController::class,'index'])->name('farmer');
Route::post('/farmer', [FarmerController::class,'store'])->name('farmer.store');

Route::get('/agrodealer', [AgroController::class,'index'])->name('agrodealer');
Route::post('/agrodealer', [AgroController::class,'store'])->name('agrodealer.store');

Route::get('/askexpert', [AskController::class,'index'])->name('askexpert');
Route::get('/askexpert',function(){
    return view('askexpert');
})->name('askexpert');
