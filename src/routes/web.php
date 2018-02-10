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

Route::namespace('Business')->prefix('business')->group(function (){
    /**
     * 小程序
     */
    Route::namespace('MiniProgram')->prefix('mini_program')->group(function(){
        /**
         * 前台
         */
        Route::namespace('FrontEnd')->prefix('front_end')->group(function (){

        });

        /**
         * 后台
         */
        Route::namespace('BackEnd')->prefix('back_end')->group(function (){
            Route::get('/login', 'LoginController@login');
            Route::get('/register', 'RegisterController@register');

            Route::prefix('api')->group(function(){
                Route::post('/login', 'LoginController@apiPostLogin');
            });
        });
    });
});