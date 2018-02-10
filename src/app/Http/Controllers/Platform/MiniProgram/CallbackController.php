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

class CallbackController extends BaseController
{
    /**
     * 授权事件接收URL
     * 接受component_verify_ticket
     * EasyWechat自动处理缓存下来
     * @param Request $request
     * @author CodeAnti
     * @return bool
     */
    public function authorizeEvent(Request $request)
    {
        try {
            $this->openPlatform->server->serve();
        } catch (\Exception $e) {
            Log::error(null, [$request->all()]);
        }
    }

    /**
     * 消息与事件接收URL
     * @param Request $request
     * @author CodeAnti
     */
    public function noticeEvent(Request $request)
    {
        Log::info(11);
    }
}