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


Route::view('/', 'welcome')->name('welcome');

Auth::routes();

// Create group
Route::resource('group', 'GroupController');
Route::post('/api/group', 'ApiGroupController@store');
Route::post('/api/group/{group}/storescan', 'ApiGroupController@storescan');
Route::get('/group/{group}/created', 'GroupController@created')->name('group.created');
Route::get('/group/{group}/createscan/{code}', 'GroupController@createscan')->name('group.createscan')->middleware('auth');

// Scan stuff
Route::resource('scan', 'ScanController');
Route::get('/scan/{scan}/kennismaken', 'ScanPagesController@kennismaken')->name('scan.kennismaken');
Route::get('/scan/{scan}/regioincijfers', 'ScanPagesController@regioincijfers')->name('scan.regioincijfers');
Route::get('/scan/{scan}/algemeenbeeld', 'ScanPagesController@algemeenbeeld')->name('scan.algemeenbeeld');
Route::get('/scan/{scan}/algemeenbeeldresultaten', 'ScanPagesController@algemeenbeeldresultaten')->name('scan.algemeenbeeldresultaten');

// Gesprekshulp Inventarisaties
Route::get('/inventarisatie/', 'InventarisatieController@store')->name('inventarisatie.store');
Route::get('/inventarisatie/{inventarisatie}', 'InventarisatieController@show')->name('inventarisatie.show');
Route::get('/inventarisatie/{inventarisatie}/updateuser/', 'InventarisatieController@updateuser')->name('inventarisatie.updateuser');
Route::get('/inventarisatie/{inventarisatie}/destroy', 'InventarisatieController@destroy')->name('inventarisatie.destroy');
Route::post('/inventarisatie/{inventarisatie}/update', 'InventarisatieController@update')->name('inventarisatie.update');
Route::get('/api/inventarisatie/{inventarisatie}', 'ApiInventarisatieController@show');
Route::post('/api/inventarisatie/{inventarisatie}', 'ApiInventarisatieController@update');

Route::get('/gesprekspartners/start', 'GesprekspartnersController@start')->name('gesprekspartners.start');
Route::get('/gesprekspartners/resultaten/', 'GesprekspartnersController@results')->name('gesprekspartners.results');
Route::get('/gesprekspartners/{instantietype}', 'GesprekspartnersController@show')->name('gesprekspartners.show');
Route::post('/api/partner/{partner}', 'ApiPartnerController@update');
Route::get('/api/inventarisatie/{inventarisatie}/instantietype/{instantietype}/instantie', 'ApiInventarisatieInstantietypeInstantieController@index');

Route::get('/api/instantietype', 'ApiInstantietypeController@index');

Route::resource('instantietype', 'InstantietypeController');

// Single Pages
Route::get('/start', 'PagesController@start')->name('loggless.start');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/partners', 'PagesController@partners')->name('partners');
Route::get('/vraag', 'PagesController@vraag')->name('vraag');

