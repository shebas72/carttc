<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicletypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\IncomingCarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/vehicletype', [VehicletypeController::class, 'index'] {
//     return view('vehicletype');
// })->middleware(['auth'])->name('vehicletype');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    // Route::resource('/roles', RoleController::class);
    // Route::resource('/users', UserController::class);
    Route::resource('/vehicletype', VehicletypeController::class);
    // Route::resource('/user-registration', UserRegistrationController::class)->name('user-registration');;
   
    // Route::resource('vehicletype', VehicletypeController::class);
});


Route::get('/user-registration', [UserRegistrationController::class, 'create'])
                ->middleware('auth')
                ->name('user-registration');

Route::post('/user-registration', [UserRegistrationController::class, 'store'])
                ->middleware('auth');

  Route::get('/user-registration', [UserRegistrationController::class, 'index'])
  ->middleware('auth')
  ->name('user-registration');

  Route::get('/edit-user/{user}', [UserRegistrationController::class, 'edit'])
  ->middleware('auth')
  ->name('edit-user');

  Route::post('/edit-user/{user}/update', [UserRegistrationController::class, 'update'])
  ->middleware('auth')
  ->name('update-user');

  Route::post('/delete-user/{id}', [UserRegistrationController::class, 'destroy'])
  ->middleware('auth')
  ->name('delete-user');

  Route::get('/file-import-export', [BankController::class, 'index'])
  ->middleware('auth')
 -> name('file-import-export');;
  
  Route::get('file-import-export', [BankController::class, 'fileImportExport'])
  ->middleware('auth')
 -> name('file-import-export');;
Route::post('file-import', [BankController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [BankController::class, 'fileExport'])->name('file-export');
Route::get('/edit-bank/{bank}', [BankController::class, 'edit'])
->middleware('auth')
->name('edit-bank');
Route::post('file-import-export/{id}', [BankController::class, 'destroy'])
->middleware('auth')
->name('delete-bank');
Route::delete('myproductsDeleteAll', [BankController::class, 'deleteAll'])
->middleware('auth')
->name('myproductsDeleteAll');



Route::post('/edit-bank/{bank}/update', [BankController::class, 'update'])
->middleware('auth')
->name('update-bank');

Route::post('/vehicletype/create', [VehicletypeController::class, 'create'])
                ->middleware('auth')
                ->name('vtCreate');

Route::get('/incoming', [IncomingCarController::class, 'index'])
->middleware('auth')
->name('incoming');


require __DIR__.'/auth.php';
