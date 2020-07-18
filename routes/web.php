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

Route::get('/', function () {
    return view('Land');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('land', function(){
        return view('land');
});


Route::get('organisation', function(){
        return view('organisation');
});
Route::get('donor', function(){
        return view('donor');
});
Route::get('volunteer', function(){
        return view('volunteer');
});
Route::get('blog', function(){
        return view('blog');
});
Route::get('about', function(){
        return view('about');
});
Route::get('about', function(){
        return view('about');
});
Route::get('blogpage',function(){
     return view('blogpage');
});
Route::get('event',function(){
     return view('event');
});
Route::get('eventpage',function(){
     return view('eventpage');
});
Route::get('dashboard', function(){
        return view('admin.dashboard');
});
Route::get('icons', function(){
        return view('admin.icons');
});
Route::get('notifications', function(){
        return view('admin.notifications');
});

Route::get('typography', function(){
        return view('admin.typography');
});
Route::get('user', function(){
        return view('admin.users');
});
Route::get('map', function(){
        return view('admin.map');
});
Route::get('users', function(){
        return view('admin.users');
});

Route::get('success', function(){
        return view('success');
});

Route::get('cars', function(){
        return view('cars');
});

Route::get('organisation-information', function(){
        return view('admin.organisation-information');
});
Route::get('organisation-request', function(){
        return view('admin.organisation-request');
});
Route::get('volunteer-information', function(){
        return view('admin.volunteer-information');
});
Route::get('post-blog', function(){
        return view('admin.post-blog');
});
Route::get('delete-blog', function(){
        return view('admin.delete-blog');
});
Route::get('create-event', function(){
        return view('admin.create-event');
});
Route::get('food-record', function(){
        return view('admin.food-record');
});

//donate

//donate
Route::get('donate','DonateController@index');
Route::post('donate','DonateController@store');
Route::get('donation-request','AdminDonateController@index');



//contact
Route::get('contact','ContactController@index');
Route::post('contact','ContactController@store');
//admin
Route::get('dashboard','AdminController@index');

Route::post('admin.tables','ContactController@store');
Route::get('tables','ContactController@show');
Route::put('//{id}','ContactController@update');
Route::get('admin.tables','AdminContactController@show');






Route::post('logout', 'Auth\LoginController@logout')->name('logout'); 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

