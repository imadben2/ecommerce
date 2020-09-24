<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
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

Route::get('/a', function () {
    return view('dashborad.settings.shippings.edit');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){



    Route::group(['namespace'=> 'Dashboard','prefix'=>'admin'],function (){

        Route::get('/','DashboardController@index')->name('admin.dashboard');

        Route::group(['prefix'=>'settings'],function (){
            Route::get('shipping-methods/{type}','SettingsController@editShipingMethods')->name('edit.shippings.methods');
        });


    });


    Route::group(['namespace'=> 'Dashboard','prefix'=>'admin', 'middleware'=>'guest:admin'],function (){


        Route::get('login','LoginController@login')->name('admin.login');
        Route::post('login','LoginController@postlogin')->name('admin.post.login');

    });


});



