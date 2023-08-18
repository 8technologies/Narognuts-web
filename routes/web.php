<?php

use App\Http\Controllers\AskTheExpertController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\farmerRecordsController;
use App\Http\Controllers\ServiceProviderRecordsController;
use App\Http\Controllers\MultiplierRecordsController;
use App\Http\Controllers\gardenRegController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SeedSellerController;
use App\Http\Controllers\ServiceSellerController;
use App\Http\Controllers\preOrderController;
use App\Http\Controllers\RecordsManagementController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionsController;
use Illuminate\Support\Facades\Artisan;

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
Route::view('/', 'auth/login');
Auth::routes(['verify' => true]);

Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/', function () {
        return redirect()->route('home');
    });
Route::get('/home', [HomeController::class, 'index'])->name('home');


//Route::get("create", [farmerRecordsController::class, "create"]);
Route::get("farmerrecords_edit", [farmerRecordsController::class, "edit"])->name('farmerrecords_edit');
Route::get("farmerrecords", [farmerRecordsController::class, "index"])->name('farmerrecords');
Route::post("/farmerrecords", [farmerRecordsController::class, "store"])->name('farmerrecords');
Route::get("farmerrecords_create", [farmerRecordsController::class, "create"])->name('farmerrecords_create');
Route::get("farmerrecords", [farmerRecordsController::class, "destroy"])->name('farmerrecords.destroy');
// Route::post('/store', [farmerRecordsController::class, "store"])->name('farmerrecords');


Route::get("multiplierrecords_create", [MultiplierRecordsController::class, "create"])->name('multiplierrecords_create');
Route::get("multiplierrecords_edit/{id}", [MultiplierRecordsController::class, "edit"])->name('multiplierrecords_edit');
Route::get("multiplierrecords_destroy/{id}", [MultiplierRecordsController::class, "destroy"])->name('multiplierrecords_destroy');
Route::get("multiplierrecords",[MultiplierRecordsController::class, "index"])->name('multiplierrecords');
Route::post('/multiplierrecords',[MultiplierRecordsController::class, "store"])->name('multiplierrecords');
Route::post("create", [MultiplierRecordsController::class, "create"]);
Route::get('/store', [MultiplierRecordsController::class, "store"]);

Route::get("serviceproviderrecords_edit/{id}", [ServiceProviderRecordsController::class, "edit"])->name('serviceproviderrecords_edit');
Route::get("serviceproviderrecords_create", [ServiceProviderRecordsController::class, "create"])->name('serviceproviderrecords_create');
Route::get("serviceproviderrecords", [ServiceProviderRecordsController::class, "index"])->name('serviceproviderrecords');
Route::post('/serviceproviderrecords', [ServiceProviderRecordsController::class, "store"])->name('serviceproviderrecords');
Route::get("serviceproviderrecords_update/{id}", [ServiceProviderRecordsController::class, "update"])->name('serviceproviderrecords_update');
Route::get("serviceproviderrecords_destroy/{id}", [ServiceProviderRecordsController::class, "destroy"])->name('serviceproviderrecords_destroy');
Route::post("create", [ServiceProviderRecordsController::class, "create"]);
Route::get('/store', [ServiceProviderRecordsController::class, "store"]);

Route::get("gardenRegCreate", [gardenRegController::class, "create"]);
Route::get("gardenreg_edit/{id}", [gardenRegController::class, "edit"])->name('gardenreg_edit');
Route::get("gardenreg_update/{id}", [gardenRegController::class, "update"])->name('gardenreg_update');
Route::get("gardenreg_destroy/{id}", [gardenRegController::class, "destroy"])->name('gardenreg_destroy');
Route::get("gardenReg", [gardenRegController::class, "index"])->name('gardenReg');
Route::post('/gardenReg', [gardenRegController::class, "store"])->name('gardenReg');
Route::post("gardenRegCreate", [gardenRegController::class, "create"])->name('gardenRegCreate');
Route::get('/store', [gardenRegController::class, "store"]);

Route::get("seedseller_edit/{id}", [SeedSellerController::class, "edit"])->name('seedseller_edit');
Route::get("seedseller_destroy/{id}", [SeedSellerController::class, "destroy"])->name('seedseller_destroy');
Route::get("seedseller_create", [SeedSellerController::class, "create"])->name('seedseller_create');
Route::get("seedseller_show/{id}", [SeedSellerController::class, "show"])->name('seedseller_show');
Route::get("seedmarket", [SeedSellerController::class, "marketplace"])->name('seedmarket');
Route::get("seedseller", [SeedSellerController::class, "index"])->name('seedseller');
Route::post('/seedseller', [SeedSellerController::class, "store"])->name('seedseller');
Route::get('/store', [SeedSellerController::class, "store"]);

Route::get("serviceseller_edit/{id}", [ServiceSellerController::class, "edit"])->name('serviceseller_edit');
Route::get("serviceseller_create", [ServiceSellerController::class, "create"])->name('serviceseller_create');
Route::get("serviceseller_destroy/{id}", [ServiceSellerController::class, "destroy"])->name('serviceseller_destroy');
Route::get("serviceseller_show/{id}", [ServiceSellerController::class, "show"])->name('serviceseller_show');
Route::get("servicemarket", [ServiceSellerController::class, "marketplace"])->name('servicemarket');
Route::get("serviceseller", [ServiceSellerController::class, "index"])->name('serviceseller');
Route::post('/serviceseller', [ServiceSellerController::class, "store"])->name('serviceseller');


Route::get("create", [preOrderController::class, "create"]);
Route::get("preOrder", [preOrderController::class, "index"])->name('preOrder');
Route::post('/preOrder', [preOrderController::class, "store"])->name('preOrder');
Route::get('/store', [preOrderController::class, "store"]);


Route::get("create", [DashboardController::class, "create"]);
Route::get("dashboardindex", [DashboardController::class, "index"])->name('dashboardindex');
Route::post('/dashboardindex', [DashboardController::class, "store"])->name('dashboardindex');
Route::get('/store', [DashboardController::class, "store"]);


Route::get("create", [RecordsManagementController::class, "create"]);
Route::get("recordsmanagementindex", [RecordsManagementController::class, "index"])->name('recordsmanagementindex');
Route::post('/recordsmanagementindex', [RecordsManagementController::class, "store"])->name('recordsmanagementindex');
Route::get('/store', [RecordsManagementController::class, "store"]);



Route::get("user_create", [UsersController::class, "create"])->name('user_create');
Route::patch("user_edit/{id}", [UsersController::class, "edit"])->name('user_edit');
Route::get("user_destroy/{id}", [UsersController::class, "destroy"])->name('user_destroy');
Route::get("userindex", [UsersController::class, "index"])->name('userindex');
Route::post('userstore', [UsersController::class, "store"])->name('userstore');
Route::patch("user_update /{id}", [UsersController::class, "update"])->name('user_update');

Route::get("asktheexpert_create", [AskTheExpertController::class, "create"])->name('asktheexpert_create');
Route::get("asktheexpert_edit/{id}", [AskTheExpertController::class, "edit"])->name('asktheexpert_edit');
Route::get("asktheexpert_destroy/{id}", [AskTheExpertController::class, "destroy"])->name('asktheexpert_destroy');
Route::get("asktheexpert", [AskTheExpertController::class, "index"])->name('asktheexpertindex');
Route::post('asktheexpert', [AskTheExpertController::class, "store"])->name('asktheexpertstore');
Route::get("asktheexpert_update /{id}", [AskTheExpertController::class, "update"])->name('asktheexpert_update');



Route::get("rolesCreate", [RolesController::class, "create"]);
Route::get("roles_edit/{id}", [RolesController::class, "edit"])->name('roles_edit');
Route::get("roles_show/{id}", [RolesController::class, "show"])->name('roles_show');
Route::patch("roles_update", [RolesController::class, "update"])->name('roles_update');
Route::delete("roles_destroy/{id}", [RolesController::class, "destroy"])->name('roles_destroy');
Route::get("roles", [RolesController::class, "index"])->name('roles_index');
Route::post('/roles', [RolesController::class, "store"])->name('roles_store');
Route::post("rolesCreate", [RolesController::class, "create"])->name('rolesCreate');
Route::get('/store', [RolesController::class, "store"]);


Route::get("permissionCreate", [PermissionsController::class, "create"]);
Route::get("permission_edit/{id}", [PermissionsController::class, "edit"])->name('permission_edit');
Route::get("permission_show/{id}", [PermissionsController::class, "show"])->name('permission_show');
Route::get("permission_update/{id}", [PermissionsController::class, "update"])->name('permission_update');
Route::delete("permission_destroy/{id}", [PermissionsController::class, "destroy"])->name('permission_destroy');
Route::get("permission", [PermissionsController::class, "index"])->name('permission_index');
Route::post('/permission', [PermissionsController::class, "store"])->name('permission_store');
Route::post("permissionCreate", [PermissionsController::class, "create"])->name('permissionCreate');
Route::get('/store', [PermissionsController::class, "store"]);



// Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
//     Route::post("create", [farmerRecordsController::class, "create"]);
//     Route::post("create", [seedSellerController::class, "create"]);
// });

// Route::resource('roles', RolesController::class);
// Route::resource('permissions', PermissionsController::class);
});


// SetUp scripts

Route::get('optimize-clear', function () {
    Artisan::call('optimize:clear');
    return Artisan::output();
});

Route::get('migrate', function () {
    Artisan::call('migrate');
    return Artisan::output();
});

Route::get('migrate-fresh', function () {
    Artisan::call('migrate:fresh');
    return Artisan::output();
});

Route::get('composer-install', function () {
    $exec = shell_exec('php composer.phar install');
    return $exec;
});

Route::get('composer-dump-autoload', function () {
    Artisan::call('composer dump-autoload');
    return '<h1>composer dump-autoload Artisan command executed</h1>';
});

Route::get('storage-link', function () {
    Artisan::call('storage:link');
    return Artisan::output();
});
