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


Route::view('/', 'welcome');

Auth::routes();

Route::get('/gesprekspartners/start', 'InventarisatieController@store')->name('inventarisatie.store');
Route::get('/gesprekspartners/resultaten/', 'GesprekspartnersController@results')->name('gesprekspartners.results');
Route::get('/gesprekspartners/{instantietype}', 'GesprekspartnersController@show')->name('gesprekspartners.show');
Route::post('/api/partner/{partner}', 'ApiPartnerController@update');
Route::get('/api/inventarisatie/{inventarisatie}/instantietype/{instantietype}/instantie', 'ApiInventarisatieInstantietypeInstantieController@index');

Route::resource('instantietype', 'InstantietypeController');
Route::resource('group', 'GroupController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/partners', 'PagesController@partners')->name('partners');
Route::get('/vraag', 'PagesController@vraag')->name('vraag');

Route::post('/api/group', 'ApiGroupController@store');
