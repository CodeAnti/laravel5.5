<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * 第三方开发平台
 */
Route::namespace('Platform')->group(function (){
    /**
     * 小程序
     */
    Route::namespace('MiniProgram')->group(function (){
        // 回调
        Route::prefix('/callback')->group(function (){
            // 授权接收
            Route::any('/authorize_event', 'CallbackController@authorizeEvent');

            // 消息接受
            Route::any('/notice_event', 'CallbackController@noticeEvent');
        });

        // 授权
        Route::prefix('auth')->group(function (){
            Route::any('/get_auth', 'AuthController@getAuth');
            Route::any('/handle_auth', 'AuthController@handleAuth');
        });
    });
});


/**
 * 第三方授权
 */
Route::namespace('ThirdPartyAuth')->prefix('third_party_auth')->group(function (){
    /**
     * 登录
     */
    Route::namespace('Login')->prefix('login')->group(function (){
        // 第三方登录授权
        Route::any('/auth/{platform}/{driver}', 'LoginController@auth');
        // 第三方登录回调
        Route::any('/callback/{platform}/{driver}', 'LoginController@callback');
    });
});

