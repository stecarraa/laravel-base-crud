<?php
use App\Http\Controllers\ComicController;
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


Route::view('/', "homePage")->name("homePage");
Route::get('/comic', "ComicController@index");
Route::get('/comic/{comic}', "ComicController@show");


Route::resource('comic','ComicController');

