<?php
/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/2/1
 * Time: 15:14
 */

namespace App\Http\Controllers\ThirdPartyAuth\Login;

use Overtrue\Socialite\SocialiteManager;
/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/1/25
 * Time: 16:10
 */
class BaseController
{
    const REDIRECT_URL = 'http://open.mini.shiwanke.net/api/third_party_auth/login/callback';

    /**
     * @var \Illuminate\Config\Repository|mixed
     */
    public $config;

    /**
     * @var SocialiteManager
     */
    public $socialiteManager;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        $this->config = config('login');
        $this->setSocialiteManager();
    }

    /**
     * 设置回调url
     * @param $driver
     * @param $platform
     * @author CodeAnti
     */
    public function setRedirectUrl($platform, $driver)
    {
        $this->config[$driver]['redirect'] = self::REDIRECT_URL . '/' . $platform . '/' . $driver;
        $this->setSocialiteManager();
    }

    /**
     * 设置socialiteManager对象
     * @author CodeAnti
     */
    public function setSocialiteManager()
    {
        $this->socialiteManager = new SocialiteManager($this->config);
    }
}