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

class Tiny_FrameModuleWxapp extends WeModuleWxapp
{
    /**
     * App应用对象
     * @var \og\http\App|mixed
     */
    protected $app;


    public function __construct()
    {
        $this->app = include 'base.php';
    }

    /**
     * 魔术方法
     *
     * @param $name
     * @param $arguments
     * @return bool|null|void
     * @throws ReflectionException
     */
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        return $this->app->run($name, $arguments);
    }
}