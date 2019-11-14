<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::resource('balance', 'BalanceController');
    Route::get('balance', 'BalanceController@index')->name('admin.balance');
    Route::get('bank', 'BankAccountController@index')->name('admin.bank');
    Route::get('adress', 'AdressController@index')->name('admin.adress');
    Route::get('phone', 'PhoneController@index')->name('admin.phone');
    Route::get('loan', 'LoanController@index')->name('admin.loan');
    Route::post('loan', 'LoanController@index')->name('admin.loan');
    Route::get('parcel', 'ParcelController@index')->name('admin.parcel');
    Route::post('parcel', 'ParcelController@index')->name('admin.parcel');
    Route::get('historic', 'HistoricController@index')->name('admin.historic');
    Route::resource('user', 'UserController');
});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

