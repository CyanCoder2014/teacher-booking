<?php




if (in_array(Request::segment(1), Config::get('app.alt_langs'))) {

    App::setLocale(Request::segment(1));
    Config::set('app.locale_prefix', Request::segment(1));
}

Route::group(array('prefix' => Config::get('app.locale_prefix')), function () {



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

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser')->name('email.verify');

Route::get('/', 'HomeController@index')->name('index');
Route::get('/filter', 'HomeController@filter')->name('filter');
Route::get('/filtering', 'HomeController@ajaxfilter')->name('ajaxfilter');

Route::group(['middleware' => 'auth'],function (){
    \App\CourseRequest::Route_list();
    \App\Course::Route_list();
    Route::get('/profile/edit', 'UserProfileController@index')->name('profile');
    Route::post('/profile/edit', 'UserProfileController@update')->name('profile.update');
});
Route::get('CourseRequest','CourseRequestController@index')->name('CourseRequest');
Route::get('/blog', 'ContentController@index')->name('blog.index');
Route::get('/blog/{content}', 'ContentController@show')->name('blog.show');
Route::get('/contactus', 'ContactUsController@index')->name('contactus');
Route::post('/contactus', 'ContactUsController@store');

///////////////////// Admin /////////////////////////
Route::group(['middleware' => 'admin','prefix' =>'admin'],function (){
    \App\Content::Route_list();
    \App\Category::Route_list();
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');

    Route::get('/users/', 'Admin\UserController@index')->name('admin.user.index');
    Route::get('/users/ban/{user}', 'Admin\UserController@ban')->name('admin.user.ban');
    Route::get('/users/unban/{user}', 'Admin\UserController@unban')->name('admin.user.unban');
    Route::delete('/users/{user}', 'Admin\UserController@destroy')->name('admin.user.delete');
    Route::get('/Course/requests', 'Admin\CourseRequestController@index')->name('course.requests.index');
    Route::delete('/Course/requests/{courseRequest}', 'Admin\CourseRequestController@destroy')->name('course.requests.delete');
    Route::get('/contactus', 'Admin\ContactUsController@index')->name('contactus.index');
    Route::get('/contactus/getdata', 'Admin\ContactUsController@getdata')->name('contactus.getdata');
    Route::get('/contactus/{contactUs}', 'Admin\ContactUsController@edit')->name('contactus.edit');
    Route::post('/contactus/{contactUs}', 'Admin\ContactUsController@update')->name('contactus.update');
    Route::delete('/contactus/{contactUs}', 'Admin\ContactUsController@destroy')->name('contactus.delete');

    Route::get('/profile', 'Admin\ProfileController@index')->name('admin.profile.index');
    Route::get('/profile/getdata', 'Admin\ProfileController@getdata')->name('admin.profile.getdata');
    Route::get('/profile/edit/{userProfile}', 'Admin\ProfileController@edit')->name('admin.profile.edit');
    Route::post('/profile/edit/{userProfile}', 'Admin\ProfileController@update')->name('admin.profile.update');
    Route::delete('/profile/edit/{userProfile}', 'Admin\ProfileController@destroy')->name('admin.profile.delete');

    Route::get('/comment/{type}', 'Admin\CommentController@index')->name('comment.index');
    Route::get('/comment/{type}/getdata', 'Admin\CommentController@getdata')->name('comment.getdata');
    Route::post('/comment/{type}/{id}', 'Admin\CommentController@update')->name('comment.update');
    Route::delete('/comment/{type}/{id}', 'Admin\CommentController@destroy')->name('comment.delete');

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

});
