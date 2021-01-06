<?php

use Illuminate\Support\Facades\Route;


Route::get('/','MasterController@index')->name('index');
Route::get('/call_us','MasterController@call')->name('call_us');
//end of welcome routes


Route::get('buy','BuyController@index')->name('buy.index')->middleware(['auth','ActiveUser']);

//end of buy routes

Route::resource('sell','SellController')->except('show')->middleware(['auth' ,'ActiveUser']);
//end of sell routes

Route::get('pending','MasterController@pending')->name('user.pending');

Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
