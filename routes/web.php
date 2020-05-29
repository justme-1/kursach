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
Route::get('/admin','AdminController@index')->middleware('auth');

Route::get('/admin/news','AdminController@news')->middleware('auth');
Route::get('/admin/newsUpdate/{id}','AdminController@newsUpdatePage')->middleware('auth');
Route::post('/admin/newsUpdate/{id}','AdminController@newsUpdate')->middleware('auth');
Route::post('/admin/newsDelete/{id}','AdminController@newsDelete')->middleware('auth');
Route::post('/admin/newsCreate','AdminController@newsCreate')->middleware('auth');
Route::get('/admin/newsCreate','AdminController@newsCreatePage')->middleware('auth');
Route::get('/admin/users','AdminController@users')->middleware('auth');
Route::get('/admin/objects','AdminController@objects')->middleware('auth');
Route::get('/admin/nonCheckedObjects','AdminController@nonChecked')->middleware('auth');
Route::get('/admin/objectCheck/add/{id}','AdminController@Checked')->middleware('auth');
Route::get('/admin/objectCheck/delete/{id}','AdminController@objectDelete')->middleware('auth');
Route::get('/admin/object/{id}','AdminController@objectDelete')->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/logout', 'HomeController@logOut');
Route::get('/home/objects', 'HomeController@objects');
Route::get('/home/object/{id}', 'HomeController@object');
Route::get('/home/addObject', 'HomeController@addObjectPage');
Route::post('/object/add', 'HomeController@addObject');

Route::post('/object/update/{id}', 'HomeController@updateObject');
Route::post('/object/delete/{id}', 'HomeController@deleteObject');

Route::post('/userData/update','HomeController@updateUserData');

Route::get('/offer', 'OfferController@index')->name('offer');

Route::get('/index', function (){
    return view('index');
})->name('index');


Route::get('/object/{id}','OfferController@object');
Route::get('/news','NewsController@index')->name('news');
Route::get('/news/{id}','NewsController@getOne');
Route::get('/welcome',function (){
    return view('welcome');
});

Route::get('/history','HistoryController@index');
Route::get('/services','aboutUsController@services');
Route::get('/reward','aboutUsController@reward');
Route::get('/partners','aboutUsController@partners');
Route::get('/contacts','aboutUsController@contacts');
