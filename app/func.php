<?php
// +----------------------------------------------------------------------
// | xmzibi [ WE CAN DO IT MORE SIMPLE]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2020 http://xmzibi.com/ All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: MrYe    <email：55585190@qq.com>
// +----------------------------------------------------------------------

use og\facade\Log;

if (!function_exists('log_write')) {

    /**
     * 写日志
     * @param $str
     * @param mixed $msg
     * @param string $type：error、trace、warning、info
     * @param string $filename 文件名称
     * @return mixed|string
     */
    function log_write($msg, $type = 'error', $filename = 'run')
    {
        load()->func('logging');
        if (is_object($msg) || is_array($msg)) {
            //对象或者数组转义
            $msg = var_export($msg, true);
        }

        return logging_run($msg, $type, $filename);
    }
}

if(!function_exists('user_error_log'))
{
    /**
     * 记录用户抛出的错误信息到日志文件
     * @param $msg
     * @param array $data
     * @param int $uniacid
     * @param string $openid
     * @return bool
     */
    function user_error_log($msg, $data = [], $uniacid = 0, $openid = '')
    {
        return Log::userError($msg, $data, $uniacid, $openid);
    }
}

