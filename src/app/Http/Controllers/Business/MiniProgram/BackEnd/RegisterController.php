<?php

namespace App\Http\Controllers\Business\MiniProgram\BackEnd;
/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/2/7
 * Time: 13:41
 */
class RegisterController extends BaseController
{
    /**
     * 注册页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author CodeAnti
     */
    public function register()
    {
        return view($this->getViewPathPrefix() . 'register');
    }
}