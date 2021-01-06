<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix'=> '/admin'],function (){
//
    Route::get('/','dashboard\DashboardController@index')->name('admin.index');
    Route::get('/login','dashboard\AdminAuthentication@AdminLogin')->name('admin.login');
    Route::post('/logout','dashboard\AdminAuthentication@logout')->name('admin.logout');
    Route::post('/login','dashboard\AdminAuthentication@CheckAdminLogin')->name('save.admin.login');
    Route::get('/create','dashboard\DashboardController@create')->name('admin.create');
    Route::get('/edit/{id}','dashboard\DashboardController@edit')->name('admin.edit');
    Route::post('/update/{id}','dashboard\DashboardController@update')->name('admin.update');
    Route::get('/destroy/{id}','dashboard\DashboardController@destroy')->name('admin.destroy');
    Route::post('/store','dashboard\DashboardController@store')->name('admin.store');
    Route::get('/ActivateUsers','dashboard\AdminApproving@ActivateUsers')->name('admin.ActivateUsers');
    Route::get('/ActivateUser{id}','dashboard\AdminApproving@ActivateUser')->name('admin.ActivateUser');
    Route::get('/DeActivateUser{id}','dashboard\AdminApproving@DeActivateUser')->name('admin.DeActivateUser');

});

Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
