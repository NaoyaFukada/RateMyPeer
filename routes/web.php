<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\GroupController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('users', UserController::class);
Route::resource('courses', CourseController::class);
Route::resource('courses.assessments', AssessmentController::class);
Route::resource('assessments.reviews', ReviewController::class);
Route::resource('assessments.attendance', AttendanceController::class)->only(['store']);
Route::resource('assessments.groups', GroupController::class);