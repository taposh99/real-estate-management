<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ForntEnd\BannerController;
use App\Http\Controllers\ForntEnd\ContactUsController;
use App\Http\Controllers\ForntEndDashboardController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PropertyController;
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


Route::get('/', [ForntEndDashboardController::class, 'index'])->name('home');
Route::get('/contact-page', [ForntEndDashboardController::class, 'contactPage'])->name('contact.page');
Route::get('/property-page', [ForntEndDashboardController::class, 'propertyPage'])->name('property.page');
Route::get('/property-page/{id}', [ForntEndDashboardController::class, 'propertyPageSingle'])->name('property.single');


Route::get('admin', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
// Route::get('registration', [AuthController::class, 'registration'])->name('register');
// Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

/**
 * property type
 */
Route::get('/property-types', [PropertyTypeController::class, 'index'])->name('property.types.index');
Route::post('/property-types', [PropertyTypeController::class, 'store'])->name('property.types.store');
Route::get('/property-types/edit/{id}', [PropertyTypeController::class, 'edit'])->name('property.types.edit');
Route::post('/property-types/update', [PropertyTypeController::class, 'update'])->name('property.types.update');
Route::delete('/property-types/delete', [PropertyTypeController::class, 'destroy'])->name('property.types.delete');

/**
 * manage city
 */
Route::get('/city', [CityController::class, 'index'])->name('city.index');
Route::post('/city', [CityController::class, 'store'])->name('city.store');
Route::get('/city/edit/{id}', [CityController::class, 'edit'])->name('city.edit');
Route::post('/city/update', [CityController::class, 'update'])->name('city.update');
Route::delete('/city/delete', [CityController::class, 'destroy'])->name('city.delete');

/**
 * location
 */
Route::get('/location', [LocationController::class, 'index'])->name('location.index');
Route::post('/location-store', [LocationController::class, 'store'])->name('location.store');
Route::get('/location/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
Route::post('/location/update', [LocationController::class, 'update'])->name('location.update');
Route::delete('/location/delete', [LocationController::class, 'destroy'])->name('location.delete');

/**
 * Manage Property
 */
Route::get('/manage-property', [PropertyController::class, 'index'])->name('property.index');
Route::get('/property-pending', [PropertyController::class, 'PropertyPendingindex'])->name('property.pending');
Route::get('/property-reject', [PropertyController::class, 'PropertyRejectindex'])->name('property.reject');
Route::post('/properties/{id}/status', [PropertyController::class, 'updateStatus'])->name('properties.updateStatus');

Route::post('/property-store', [PropertyController::class, 'store'])->name('property.store');
Route::get('/property/edit/{id}', [PropertyController::class, 'edit'])->name('property.edit');
Route::post('/property/update', [PropertyController::class, 'update'])->name('property.update');
Route::delete('/property/delete', [PropertyController::class, 'destroy'])->name('property.delete');


/**
 * ForntEnd Banner
 */
Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
Route::post('/banner-store', [BannerController::class, 'store'])->name('banner.store');
Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/banner/update', [BannerController::class, 'update'])->name('banner.update');
Route::delete('/banner/delete', [BannerController::class, 'destroy'])->name('banner.delete');

/**
 * ForntEnd Contact
 */
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact.index');
Route::post('/contact-store', [ContactUsController::class, 'store'])->name('contact.store');
Route::get('/contact/edit/{id}', [ContactUsController::class, 'edit'])->name('contact.edit');
Route::post('/contact/update', [ContactUsController::class, 'update'])->name('contact.update');
Route::delete('/contact/delete', [ContactUsController::class, 'destroy'])->name('contact.delete');
