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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('target','TargetController');
Route::resource('concession','ConcessionController');
Route::resource('admission','AdmissionController');
Route::resource('action','ActionController');
Route::resource('actcon','ActconController');
Route::resource('admcon','AdmconController');
Route::resource('kiosk','KioskController');
Route::resource('mobile','MobileController');
Route::resource('pos','PosController');
Route::resource('mgen','MgenController');
Route::resource('side','SideController');
Route::resource('atp','AtpController');
Route::resource('tran','TranController');
Route::resource('occ','OccController');


Route::get('/report/action-target', 'ReportController@ActionAndTarget');