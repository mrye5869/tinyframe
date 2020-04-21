<?php
// +----------------------------------------------------------------------
// | 数据库配置
// +----------------------------------------------------------------------

use og\facade\Env;

if(is_file(Env::get('root_path').'data/config.php')) {
    include_once Env::get('root_path').'data/config.php';
} else {
    $config = false;
}

$database = [
    'type'     => 'mysql',
    // 主机地址
    'hostname' => $config['db']['master']['host'],
    // 用户名
    'username' => $config['db']['master']['username'],
    // 数据库名
    'database' => $config['db']['master']['database'],
    //
    'password' => $config['db']['master']['password'],
    // 数据库编码默认采用utf8
    'charset'  => $config['db']['master']['charset'] ,
    // 数据库表前缀
    'prefix'   => $config['db']['master']['tablepre'],
    // 数据库连接参数
    'params'          => [],
    // 数据库调试模式
    'debug'           => false,
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy'          => 0,
    // 数据库读写是否分离 主从式有效
    'rw_separate'     => false,
    // 读写分离后 主服务器数量
    'master_num'      => 1,
    // 指定从服务器序号
    'slave_no'        => '',
    // 是否严格检查字段是否存在
    'fields_strict'   => true,
    // 数据集返回类型
    'resultset_type'  => '',
    // 自动写入时间戳字段
    'auto_timestamp'  => false,
    // 时间字段取出后的默认时间格式
    'datetime_format' => 'Y-m-d H:i:s',
    // 是否需要进行SQL性能分析
    'sql_explain'     => false,
    // Builder类
    'builder'         => '',
    // Query类
    'query'           => '\\og\\db\\db\\Query',
    // 是否需要断线重连
    'break_reconnect' => false,
];


