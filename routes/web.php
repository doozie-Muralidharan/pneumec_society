<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyDetailController;
use App\Http\Controllers\MemberRegistrationController;
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
    return view('home.index');
});
Route::get('/member_registration',[MemberRegistrationController::class, 'index'])->name('members');
Route::post('/member_registration/store',[MemberRegistrationController::class, 'store'])->name('members.store');
Route::post('/member_registration/update/{id}',[MemberRegistrationController::class, 'update'])->name('members.update');
Route::post('/member_registration/verify/{id}',[MemberRegistrationController::class, 'send_for_verification'])->name('members.sent_fot_verification');
Route::get('/fetch_office',[MemberRegistrationController::class, 'fetchOffices'])->name('fetchOffice');
Route::get('/fetch_main_location',[MemberRegistrationController::class, 'fetchMainLocations'])->name('fetchMainLocation');
Route::get('/fetch_location',[MemberRegistrationController::class, 'fetchLocations'])->name('fetchLocation');
Route::get('/get_main_locations',[MemberRegistrationController::class, 'getMainLocations'])->name('getMainLocations');
Route::get('/get_offices',[MemberRegistrationController::class, 'getOffices'])->name('getOffices');
Route::get('/get_locations',[MemberRegistrationController::class, 'getLocations'])->name('getLocations');
Route::get('/store_profile_pic',[MemberRegistrationController::class, 'profile'])->name('members.store_profile');

Route::get('/company_details',[CompanyDetailController::class, 'create'])->name('company_details.create');




Route::get('/login',[AuthController::class, 'index']);
Route::post('/login/home',[AuthController::class, 'login'])->name('auth.login');
