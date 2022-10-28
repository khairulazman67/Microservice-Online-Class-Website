<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ChapterController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('mentors',[MentorController::class,'index']);
Route::get('mentor/{id}',[MentorController::class,'show']);
Route::post('mentors',[MentorController::class,'create']);
Route::put('mentors/{id}',[MentorController::class,'update']);
Route::delete('mentors/{id}',[MentorController::class,'destroy']);

Route::post('courses',[CourseController::class,'create']);
Route::put('courses/{id}',[CourseController::class,'update']);

Route::get('courses',[CourseController::class,'index']);
Route::delete('courses/{id}',[CourseController::class,'destroy']);

Route::post('chapters',[ChapterController::class,'create']);

Route::post('chapters', [ChapterController::class,'create']);
Route::put('chapters/{id}', [ChapterController::class,'update']);
Route::get('chapters', [ChapterController::class,'index']);
Route::get('chapters/{id}', [ChapterController::class,'show']);
Route::delete('chapters/{id}', [ChapterController::class,'destroy']);