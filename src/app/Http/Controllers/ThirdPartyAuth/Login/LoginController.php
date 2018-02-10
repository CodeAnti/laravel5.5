<?php
/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/2/1
 * Time: 15:17
 */

namespace App\Http\Controllers\ThirdPartyAuth\Login;

class LoginController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 第三方登录授权
     * @author CodeAnti
     * @param $platform
     * @param $driver |github|weibo|wechat_open|qq|douban|facebook|linkedin|google
     */
    public function auth($platform, $driver)
    {
        $this->setRedirectUrl($platform, $driver);
        $response = $this->socialiteManager->driver($driver)->redirect();
        $response->send();
    }

    /**
     * 第三方登录回调
     * @author CodeAnti
     * @param $platform
     * @param $driver
     */
    public function callback($platform, $driver)
    {
        $this->setRedirectUrl($platform, $driver);
        $user = $this->socialiteManager->driver($driver)->user();
        dd($user);
    }
}