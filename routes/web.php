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





Route::get('admin', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
// Route::get('registration', [AuthController::class, 'registration'])->name('register');
// Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/property-types', [PropertyTypeController::class, 'index'])->name('property.types.index');
Route::post('/property-types', [PropertyTypeController::class, 'store'])->name('property.types.store');
Route::get('/property-types/edit/{id}', [PropertyTypeController::class, 'edit'])->name('property.types.edit');
Route::post('/property-types/update', [PropertyTypeController::class, 'update'])->name('property.types.update');
Route::delete('/property-types/delete', [PropertyTypeController::class, 'destroy'])->name('property.types.delete');
