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
    return redirect('songbook/song');
    //return view('welcome');
});

/* Multiple routing of a CRUD Controller: index, store, create, show, update, destroy, edit */
Route::resource('songbook/song','SongController');
Route::resource('songbook/artist','ArtistController');
Route::resource('songbook/album','AlbumController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');