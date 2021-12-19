<?php

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
Auth::routes(['register' => false]);
Route::get('/', 'HomeController@index')->name('students');
Route::get('/disciplines', 'HomeController@disciplines')->name('disciplines');
Route::get('/courses', 'HomeController@courses')->name('courses');
Route::get('/login', 'HomeController@enrollment')->name('login');


Route::group(['middleware' => ['auth']], function () {
Route::resource('enrollments', 'EnrollmentController');
});
