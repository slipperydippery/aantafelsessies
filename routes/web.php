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
Route::get('/api/group/{group}', 'ApiGroupController@show');
Route::get('/group/{group}/created', 'GroupController@created')->name('group.created');
Route::get('/group/{group}/createscan/{code}', 'GroupController@createscan')->name('group.createscan')->middleware('auth');

// Manage group
Route::get('/api/group/{group}/scan', 'ApiGroupScanController@index');
Route::get('/group/{group}/participant/', 'GroupParticipantController@index')->name('group.participant.index');

// Scan stuff
Route::resource('scan', 'ScanController');
Route::get('/sessie/{scan}/introductie', 'ScanPagesController@introductie')->name('scan.introductie');
Route::get('/sessie/{scan}/kennismaken', 'ScanPagesController@kennismaken')->name('scan.kennismaken');
Route::get('/sessie/{scan}/regioincijfers', 'ScanPagesController@regioincijfers')->name('scan.regioincijfers');
Route::get('/sessie/{scan}/algemeenbeeld', 'ScanPagesController@algemeenbeeld')->name('scan.algemeenbeeld');
Route::get('/sessie/{scan}/algemeenbeeldresultaten', 'ScanPagesController@algemeenbeeldresultaten')->name('scan.algemeenbeeldresultaten');
Route::get('/sessie/{scan}/sessieintro', 'ScanPagesController@sessieintro')->name('scan.sessieintro');
Route::post('/api/scan/{scan}', 'ApiScanController@update');
Route::get('/sessie/{scan}/thema/{theme}/introductie', 'ScanQuestionController@intro')->name('scanquestions.intro');
Route::get('/sessie/{scan}/thema/{theme}/vraag/{question}', 'ScanQuestionController@show')->name('scanquestions.show');
Route::get('/sessie/{scan}/thema/{theme}/resultaten', 'ScanQuestionController@results')->name('scanquestions.results');
Route::get('/sessie/{scan}/thema/{theme}/acties', 'ScanQuestionController@measures')->name('scanquestions.measures');
Route::get('/sessie/{scan}/thema/{theme}/actiesuitwerken', 'ScanQuestionController@bigmeasures')->name('scanquestions.bigmeasures');
Route::get('/sessie/{scan}/vervolgafspraak', 'ScanQuestionController@followup')->name('scanquestions.followup');
Route::post('/scan/{scan}/commitdatetime', 'ScanQuestionController@commitdatetime')->name('scanquestions.commitdatetime');
Route::get('/sessie/{scan}/afgerond', 'ScanQuestionController@complete')->name('scanquestions.complete');
Route::get('/sessie/{scan}/markcomplete', 'ScanQuestionController@markcomplete')->name('scanquestions.markcomplete');

Route::get('/api/theme/{theme}', 'ApiThemeController@show');

// Answers stuff
Route::get('/api/answer/{answer}', 'ApiAnswerController@show');
Route::post('/api/answer/{answer}/update', 'ApiAnswerController@update');
Route::get('/api/scan/{scan}/question/{question}/getaverageanswers', 'ApiScanQuestionController@getaverageanswers');
Route::get('/api/scan/{scan}/question/{question}/getanswers', 'ApiScanQuestionController@getanswers');

// Measures
Route::get('/api/measure/{measure}', 'ApiMeasureController@show');
Route::post('/api/measure/{measure}/update', 'ApiMeasureController@update');

// Dateplanner
Route::resource('dateplanner', 'DateplannerController');
Route::post('/api/dateoption', 'ApiDateoptionController@store');
Route::get('/api/availability/{availability}', 'ApiAvailabilityController@show');
Route::post('/api/availability/{availability}/update', 'ApiAvailabilityController@update');
Route::get('/api/dateplanner/{dateplanner}/dateoption', 'ApiDateplannerDateoptionController@index');
Route::get('/api/dateoption/{dateoption}/authavailability', 'ApiDateoptionController@authavailability');
Route::get('/api/dateoption/{dateoption}/destroy', 'ApiDateoptionController@destroy');


// Followup
Route::get('/api/group/{group}/followup', 'ApiGroupFollowupController@show');
Route::post('/api/followup/{followup}/update', 'ApiFollowupController@update');

// Gesprekshulp Inventarisaties
Route::get('/inventarisatie/', 'InventarisatieController@store')->name('inventarisatie.store');
Route::get('/inventarisatie/{inventarisatie}', 'InventarisatieController@show')->name('inventarisatie.show');
Route::get('/inventarisatie/{inventarisatie}/edit', 'InventarisatieController@edit')->name('inventarisatie.edit');
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
Route::get('/cookies', 'PagesController@cookies')->name('cookies');



// Dashmessages
Route::delete('/api/dashmessage/{dashmessage}', 'ApiDashmessageController@destroy');