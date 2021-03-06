<?php
// +----------------------------------------------------------------------
// | 应用配置
// +----------------------------------------------------------------------

return [
    //是否是调试模式【直接使用系统】
    'app_debug'         => true,
    // 不存在时默认调用的方法
    'empty_action'      => 'errors',
    //默认控制器
    'default_controller'=> 'Index',
    //默认方法
    'default_action'    => 'index',
    // pathinfo分隔符
    'pathinfo_depr'     => '.',
    //模板主目录
    'view_dir_name'     => 'view',
    //日志配置数组
    'log'               => [
        //日志位置
        'root_path'         => 'data/logs/',
        //日志分割符
        'delimiter'         => "\r\n",
        //日志结束符
        'end_delimiter'     => '--------------------------------------------------------------------------------'.PHP_EOL,
        //超过2M自动新建文件
        'max_size'          => 2,
    ],
    //该参数非调试模式下有效
    'error'             => [
        //错误提示信息
        'show_error_msg'    => 'UH OH! 页面丢失!',
        //发送错误时指向的模板文件，一般为404界面
        'show_error_tpl'    => '',
    ],
    //上传测试配置
    'upload'    => [
        'root_path' => null,
        'harm_type' => [],
    ],
];