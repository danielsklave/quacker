<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
Route::get('/quacks', 'QuacksController@index')->name('home');
Route::post('/quacks', 'QuacksController@store');
Route::post('/quacks/{quack}/like', 'QuackLikesController@store');
Route::delete('/quacks/{quack}/like', 'QuackLikesController@destroy');
Route::post('/profiles/{user:username}/follow', 'FollowsController@store')->name('follow');
Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')->middleware('can:edit,user'); // $this->authorize('edit', $user);
Route::patch('/profiles/{user:username}', 'ProfilesController@update')->middleware('can:edit,user'); 
Route::get('/explore', 'ExploreController')->name('explore');
});

Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile'); // :name uses name instead of id

Auth::routes();

