<?php
// +----------------------------------------------------------------------
// | 事件配置
// +----------------------------------------------------------------------
namespace app\event;

use og\facade\Env;

return [
    'create_path'   =>  Env::get('app_path').'event',
    'namespace'     => 'app\\event',

    'bind'    =>    [
        // 更多事件绑定
    ],
    'listen'  =>    [
        // 更多事件监听
    ],
    'subscribe'    =>    [
        // 更多事件订阅
    ],
];


