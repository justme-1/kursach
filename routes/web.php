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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/userData/update','HomeController@updateUserData');
Route::get('/offer', 'OfferController@index')->name('offer');

Route::get('/index', function (){
    return view('index');
})->name('index');

Route::get('/admin','AdminController@index')->middleware('auth');

Route::get('/object/{id}','OfferController@object');
Route::get('/news','NewsController@index')->name('news');
Route::get('/news/{id}','NewsController@getOne');
Route::get('/welcome',function (){
    return view('welcome');
});

Route::get('/history','HistoryController@index');
