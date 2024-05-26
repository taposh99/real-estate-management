<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PropertyTypeController;
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

Route::get('/', function () {
    return view('forntEndLayout.forntEndDashboard');
});



Route::group(['middleware' => 'auth'], function () {

    Route::get('admin', [AuthController::class, 'index'])->name('login');
    Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
    // Route::get('registration', [AuthController::class, 'registration'])->name('register');
    // Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
    Route::get('dashboard', [AuthController::class, 'dashboard']);
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');


    Route::get('/property-types', [PropertyTypeController::class, 'index'])->name('property.types.index');
//     Route::get('/property-types/create', [PropertyTypeController::class, 'create'])->name('property.types.create');
//     Route::post('/property-types', [PropertyTypeController::class, 'store'])->name('property.types.store');
//     Route::get('/property-types/{id}', [PropertyTypeController::class, 'show'])->name('property.types.show');
//     Route::get('/property-types/{id}/edit', [PropertyTypeController::class, 'edit'])->name('property.types.edit');
//     Route::put('/property-types/{id}', [PropertyTypeController::class, 'update'])->name('property.types.update');
//     Route::delete('/property-types/{id}', [PropertyTypeController::class, 'destroy'])->name('property.types.destroy');


});
