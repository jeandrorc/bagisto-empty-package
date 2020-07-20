<?php

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {
    Route::group(['prefix' => 'area-do-cliente'], function () {
        Route::namespace('AcademyFit\Customer\Http\Controllers\Auth')->group(function () {
            Route::get('login', 'RegisterController@register')->name('shop.register');
        });


        Route::namespace('AcademyFit\Customer\Http\Controllers')->group(function () {
            Route::get('', function () {

                return "WORKSS";
            });

        });
    });

});