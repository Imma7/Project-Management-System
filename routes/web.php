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

Route::get('index', 'ProposalController@index')->name('index');

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('proposal','ProposalController'); 

// Route::get('/proposal', "ProposalController@index");