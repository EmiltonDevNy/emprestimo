<?php

Route::group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('balance', 'BalanceController@index')->name('admin.balance');
    Route::get('bank', 'BankAccountController@index')->name('admin.bank');
    Route::get('adress', 'AdressController@index')->name('admin.adress');
    Route::get('phone', 'PhoneController@index')->name('admin.phone');
    Route::get('loan', 'LoanController@index')->name('admin.loan');
    Route::get('parcel', 'ParcelController@index')->name('admin.parcel');
});

Route::get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

