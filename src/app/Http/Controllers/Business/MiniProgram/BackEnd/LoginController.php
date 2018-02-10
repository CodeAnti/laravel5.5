<?php

namespace App\Http\Controllers\Business\MiniProgram\BackEnd;

/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/2/7
 * Time: 13:34
 */
class LoginController extends BaseController
{
    public function login()
    {
        return view($this->getViewPathPrefix() . 'login');
    }

    /**
     * @SWG\Post(
     *      path="/api/post_login",
     *      operationId="getProjectsList",
     *      tags={"后台"},
     *      summary="登录",
     *      description="返回view",
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *       @SWG\Response(response=400, description="Bad request"),
     *       security={
     *           {"api_key_security_example": {}}
     *       }
     *     )
     *
     * Returns list of projects
     */
    public function apiPostLogin()
    {

    }
}