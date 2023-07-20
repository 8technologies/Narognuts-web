<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\farmerRecordsController;
use App\Http\Controllers\ServiceProviderRecordsController;
use App\Http\Controllers\multiplierRecordsController;
use App\Http\Controllers\gardenRegController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get("create", [farmerRecordsController::class, "create"]);
Route::get("index", [farmerRecordsController::class, "index"])->name('farmerRecordsIndex');
Route::post("/farmerRecords", [farmerRecordsController::class, "store"])->name('farmerRecords');
Route::post("create", [farmerRecordsController::class, "create"]);
Route::get('/store', [farmerRecordsController::class, "store"]);



Route::get("create", [multiplierRecordsController::class, "create"]);
Route::get("multiplierRecords", [multiplierRecordsController::class, "index"])->name('multiplierRecords');
Route::post('/multiplierRecords', [multiplierRecordsController::class, "store"])->name('multiplierRecords');
Route::post("create", [multiplierRecordsController::class, "create"]);
Route::get('/store', [multiplierRecordsController::class, "store"]);

Route::get("create", [ServiceProviderRecordsController::class, "create"]);
Route::get("serviceProviderRecords", [ServiceProviderRecordsController::class, "index"])->name('serviceProviderRecords');
Route::post('/serviceProviderRecords', [ServiceProviderRecordsController::class, "store"])->name('serviceProviderRecords');
Route::post("create", [ServiceProviderRecordsController::class, "create"]);
Route::get('/store', [ServiceProviderRecordsController::class, "store"]);

Route::get("create", [gardenRegController::class, "create"]);
Route::get("gardenReg", [gardenRegController::class, "index"])->name('gardenReg');
Route::post('/gardenReg', [gardenRegController::class, "store"])->name('gardenReg');
Route::post("create", [gardenRegController::class, "create"]);
Route::get('/store', [gardenRegController::class, "store"]);



