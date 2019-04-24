<?php
\App\Providers\UserLogProvider::initiate();
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

Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::group(['middleware' => 'auth'],function (){
    \App\CourseRequest::Route_list();
    \App\Course::Route_list();
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile/edit', 'UserProfileController@index')->name('profile');
    Route::post('/profile/edit', 'UserProfileController@update')->name('profile.update');
});
Route::get('CourseRequest','CourseRequestController@index')->name('CourseRequest');



/// end
Route::get('user/{userProfile}','UserProfileController@show')->name('profile.show');