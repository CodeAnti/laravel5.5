<?php

namespace App\Http\Controllers\Platform\MiniProgram;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


/**
 * Created by PhpStorm.
 * User: CodeAnti
 * Date: 2018/1/25
 * Time: 16:10
 */

class AuthController extends BaseController
{
    /**
     * 授权
     * @author CodeAnti
     */
    public function getAuth()
    {
        $url = $this->openPlatform->getPreAuthorizationUrl($this->config['callback_uri']);
        return view('auth', ['url' => $url]);
    }

    /**
     * 处理授权
     * @param Request $request
     * @author CodeAnti
     */
    public function handleAuth(Request $request)
    {
        $inputs = $request->all();
        Log::info($inputs);
    }
}