<?php

use App\Http\Controllers\auth\LoginContrller;
use App\Http\Controllers\student\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (session()->has('id')) {
        return to_route('student.home');
    } else {
        return view('auth.loginPane');
    }
})->name('user.LoginPage');


Route::controller(LoginContrller::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::get('/admin/login', 'alogin')->name('admin.login');
    Route::post('/admin/login', 'mod')->name('admin.login.check');
});
Route::controller(StudentController::class)->group(function () {
    Route::get('/user', 'index')->name('student.home');
    Route::post('/attendanceSubmit', 'attendance')->name('student.adSubmit');
    // Add student view
    Route::get('/add-student', 'addStudentView')->name('add-student');
    Route::post('/add-student', 'addstudent')->name('add-student-data');

    Route::get('attendance','viewAttendance')->name('ViewAttendance');
    Route::get('logout', 'logout');
});
