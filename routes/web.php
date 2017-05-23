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
use App\Grid;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/grids', 'GridsController@index');
Route::get('/grids/{grid}', 'GridsController@show' );
Route::get('/grids/{grid}/sequenza', 'SequencesController@index' );

Route::post('/savegrid', 'GridsController@store' );
Route::post('/saveseq', 'SequencesController@store' );
