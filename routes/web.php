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

//Route::get('/', function () {
//    return view('index');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/filter', 'HomeController@filter')->name('filter');

Route::group(['middleware' => 'auth'],function (){
    \App\CourseRequest::Route_list();
    \App\Course::Route_list();
    Route::get('/profile/edit', 'UserProfileController@index')->name('profile');
    Route::post('/profile/edit', 'UserProfileController@update')->name('profile.update');
});
Route::get('CourseRequest','CourseRequestController@index')->name('CourseRequest');

///////////////////// Admin /////////////////////////
Route::group(['middleware' => 'admin','prefix' =>'admin'],function (){
    \App\Content::Route_list();
    \App\Category::Route_list();
    Route::get('/', function (){
//        dd('hello');
        return view('admin.index');
    })->name('admin.index');
    Route::group(['middleware' => ['auth'], 'prefix' => '/utility'], function()
    {
        Route::get('/{name}',['as'=>'utility.index','uses'=>'Utility\UtiliyController@index']);
        Route::post('/{name}',['as'=>'utility.store','uses'=>'Utility\UtiliyController@store']);
        Route::post('/{name}/{id}',['as'=>'utility.update','uses'=>'Utility\UtiliyController@update']);
        Route::get('/{name}/delete/{id}',['as'=>'utility.destroy','uses'=>'Utility\UtiliyController@destroy']);

    });
});

/////////////////////// end /////////////////////////
Route::get('user/{userProfile}','UserProfileController@show')->name('profile.show');
Route::post('user/{userProfile}','UserProfileController@postComment')->name('profile.comment');

