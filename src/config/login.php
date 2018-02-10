<?php
/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/1/31
 * Time: 10:29
 */

return [
    // 微信开放平台 - 网站应用微信登录
    'wechat' => [
        'client_id'       => 'wx3be3f901ab809cdd',
        'client_secret'   => '374c2195b2f8658092668e376cfd995b',
        'redirect'        => 'http://open.mini.shiwanke.net/api/third_party_auth/login/callback/{platform}/{driver}' // 回调重定向uri
    ],
    // 微信开放平台 - 代公众号发起网页授权
    'wechat_open' => [

    ]
];