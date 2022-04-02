<?php

use App\Http\Controllers\auth\LoginContrller;
use App\Http\Controllers\student\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.loginPane');
})->name('user.LoginPage');


Route::controller(LoginContrller::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::get('/admin/login', 'alogin')->name('admin.login');
    Route::post('/admin/login', 'mod')->name('admin.login.check');
});
Route::controller(StudentController::class)->group(function () {
    Route::get('/user', 'index')->name('student.home');
    Route::get('logout', 'logout');
});
