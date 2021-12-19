<?php

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

Route::get('/api/v1/courses', 'APIController@getCourses')->name('api.courses.index');
Route::get('/api/v1/discipline', 'APIController@getDiscipline')->name('api.discipline.index');
Route::get('/api/v1/students', 'APIController@getStudents')->name('api.students.index');
Route::get('/api/v1/enrollment', 'APIController@getEnrollment')->name('api.enrollment.index');
