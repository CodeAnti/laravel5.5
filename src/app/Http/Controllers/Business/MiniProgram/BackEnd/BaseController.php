<?php

namespace App\Http\Controllers\Business\MiniProgram\BackEnd;
/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/2/7
 * Time: 13:34
 */
/**
 * @SWG\Swagger(
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="接口文档",
 *     )
 * )
 */
class BaseController
{
    public function __construct()
    {
    }

    /**
     * 获得View模板前缀
     * @return string
     * @author wanghaiming@vchangyi.com
     */
    protected function getViewPathPrefix()
    {
        return 'business.mini_program.';
    }
}