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

Route::get('/', 'SiteController@index');
Route::post('course/participant/registration', 'CourseController@registerParticipant')->name('register.participant');


Route::get('/content/{contentItem}', 'ContentController@showContent');


//Auth::routes();
Route::get('admin', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('admin', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('admin/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/course/list', 'CourseController@index')->name('course.list');
    Route::get('admin/content/form', 'ContentController@index')->name('edit.content');
    Route::get('admin/course/form', 'CourseController@form')->name('course.form');
    Route::post('admin/course/create', 'CourseController@create')->name('course.create');
    Route::post('admin/content/edit', 'ContentController@editContent')->name('content.edit');
});


Route::get('locale/{locale}', function ($locale){
    App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
});
