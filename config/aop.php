<?php
// +----------------------------------------------------------------------
// | aop切面
// +----------------------------------------------------------------------

use og\facade\Env;

return [

    'create_path'   =>  Env::get('app_path').'aop',
    'namespace'     => 'app\\aop',

    \app\mobile\controller\User::class => [
        \app\aop\UserAop::class,
    ],

];