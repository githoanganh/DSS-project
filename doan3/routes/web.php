<?php

use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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

// Login
Route::get('validation','ValidationController@getVali');
Route::post('validation','ValidationController@postVali');
Route::get('logout','ValidationController@logOut');
// Register
Route::get('register','ValidationController@getRegis');
Route::post('register','ValidationController@postRegis');
// Admin
Route::get('dashboard','AdminController@getAdmin');
// Route::get('icons', 'AdminController@getIcons');
Route::get('icons', 'LoadController@index');
Route::get('map','AdminController@getMap');
Route::get('user','AdminController@getUser');
Route::get('train','AdminController@getTrain');
Route::get('forecast','AdminController@getForecast');

