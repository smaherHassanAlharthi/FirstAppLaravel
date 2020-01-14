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
    return view('welcome');
});
Route::get('/master', function () {
    return view('master.app');
});
Route::get('/master/home', function () {
    return view('home');
});
//http://localhost:8888/new/public/master/home
Route::get('/master/about', function () {
    return view('about');
    //http://localhost:8888/new/public/master/about
});
Route::get('/master/contact', function () {
    return view('contact');
});

Route::get('/photo/show', 'PhotoController@show');
//http://localhost:8888/new/public/photo/show
Route::resource('test','CRUDController');
//http://localhost:8888/new/public/test



//Route::post('/main','MainController')->middleware('age');
Route::get('/users/show', 'UserController@show')->name('show');
//http://localhost:8888/new/public//users/show

Route::get('/users/delete/{id}', 'UserController@delete');
Route::resource('/posts', 'PostController');

Route::resource('/comments', 'ExampleController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
