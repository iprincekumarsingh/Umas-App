<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\auth\LoginContrller;
use App\Http\Controllers\Controller;
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

    //search the student

    Route::get('attendance', 'viewAttendance')->name('ViewAttendance');
    Route::get('/studentAttendance/{ra}/{id}/{name?}', 'stuAttendance')->name('stuAd');

    Route::get('/assignment-upload', 'uploadAssignment');

    Route::get('/profile/{id?}', 'profile');

    Route::get('/student', 'studentData');



});
Route::controller(adminController::class)->group(function () {
    Route::get('/add-student', 'addStudentView')->name('add-student');
    Route::post('/add-student', 'addstudent')->name('add-student-data');
    Route::get('search', 'search')->name('student.search');
    Route::post('createNotice', 'createNotice')->name('news.create');
    Route::post('/studentbranch','filterData')->name('stu.filter.branch');
    Route::get('/stubranch/{branch}','FilterView')->name('filter_v');

});
Route::controller(Controller::class)->group(function () {

    // R
    Route::get('logout', 'logout');
    Route::get('notice', 'publicNotice')->name('public.notice');
    Route::get('createnotice', 'createNoticeView')->name('create.notice');
    Route::post('noticedelete/{notice_id}', 'deleteNotice')->name('news.delete');
    Route::get('xnotice/{id}','viewnotice')->name('view.notice');
    Route::get('/studentall','studentdata');


});
