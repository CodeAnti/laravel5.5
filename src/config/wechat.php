<?php
/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/1/25
 * Time: 10:47
 */
return [
    // 开发平台
    'open_platform' => [
        // 小程序
        'mini_program' => [
            'app_id'       => 'wxb216638554342c49',
            'secret'       => '54dbc077a3a86faab517261fbb36501a',
            'token'        => '86f3f9379d0bddb86734675035653ed3', // 消息校验Token
            'aes_key'      => '86f3f9379d0bddb86734675035653ed39d0bddb8673', // 消息加解密Key
            'callback_uri' => 'http://open.mini.shiwanke.net/api/auth/handle_auth' // 授权成功后跳转页面
        ]
    ]
];