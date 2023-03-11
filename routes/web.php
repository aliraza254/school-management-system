<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\StudentAttendanceController;
use App\Http\Controllers\TeacherAttendanceController;
//use App\Http\Controllers\Auth\LogoutController;

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

Route::middleware(['auth'])->group(function () {
    Route::resource('students', StudentController::class);
    Route::resource('teachers', TeacherController::class);
    Route::resource('classes', ClassesController::class);
    Route::resource('fees', FeesController::class);
    Route::resource('salary', SalaryController::class);
    Route::resource('expenses', ExpensesController::class);
    Route::resource('students-attendance', StudentAttendanceController::class);
    Route::resource('teacher-attendance', TeacherAttendanceController::class);
    Route::post('logout', [Auth\LogoutController::class, 'logout'])->name('logout');
});
Route::controller(AjaxController::class)->group(function(){
    Route::post('std_name', 'std_name')->name('std_name');
    Route::post('family_records', 'family_records')->name('family_records');
    Route::post('salary_records', 'salary_records')->name('salary_records');
    Route::post('std_attendance', 'std_attendance')->name('std_attendance');
});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('/home');



