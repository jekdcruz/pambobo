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
// slash for index


/*
//FOR INDEXING
Route::get('/', function () {
    return view('welcome');
});


//dynamic values like get ID
//
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is '.$name.' with an id of '.$id;
});

Route::get('/hello', function () {
    //return view('welcome');
    return 'Hello world';
});

Route::get('/about', function () {
    return view('pages.about');
});

*/


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

