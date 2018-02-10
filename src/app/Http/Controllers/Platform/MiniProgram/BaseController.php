<?php

namespace App\Http\Controllers\Platform\MiniProgram;

use EasyWeChat\Factory;

/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/1/25
 * Time: 16:10
 */
class BaseController
{
    /**
     * @var \Illuminate\Config\Repository|mixed
     */
    public $config;

    /**
     * @var \EasyWeChat\OpenPlatform\Application
     */
    public $openPlatform;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        $this->config = config('wechat.open_platform.mini_program');
        $this->openPlatform = Factory::openPlatform($this->config);
    }
}