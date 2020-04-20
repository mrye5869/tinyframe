<?php
// +----------------------------------------------------------------------
// | 控制台配置
// +----------------------------------------------------------------------

namespace app\command;

use og\facade\Env;

return [
    'name'          => 'tinyFrame',
    'version'       => '0.1',
    'create_path'   =>  Env::get('app_path').'command',
    'namespace'     => 'app\\command',
    'commands'      => [

    ]
];
