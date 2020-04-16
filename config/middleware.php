<?php
// +----------------------------------------------------------------------
// | 中间件配置
// +----------------------------------------------------------------------
namespace app\middleware;

use og\facade\Env;

return [
    'create_path'   =>  Env::get('app_path').'middleware',
    'namespace'     => 'app\\middleware',

    //全局中间件
    'all'   => [
    ],

    //路由中间件
    'route' => [
    ],
];