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
Route::get('/fetch_office',[MemberRegistrationController::class, 'fetchOffices'])->name('fetchOffice');
Route::get('/fetch_main_location',[MemberRegistrationController::class, 'fetchMainLocations'])->name('fetchMainLocation');
Route::get('/fetch_location',[MemberRegistrationController::class, 'fetchLocations'])->name('fetchLocation');

Route::get('/company_details',[CompanyDetailController::class, 'create'])->name('company_details.create');




Route::get('/login',[AuthController::class, 'index']);
Route::post('/login/home',[AuthController::class, 'login'])->name('auth.login');
