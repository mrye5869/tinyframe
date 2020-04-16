<?php
// +----------------------------------------------------------------------
// | 控制台配置
// +----------------------------------------------------------------------

use og\facade\Env;

return [
    'name'          => 'tinyFrame',
    'version'       => '1.0',
    'create_path'   =>  Env::get('app_path').'command',
    'namespace'     => 'app\\command',
    'commands'      => [
    ]
];
