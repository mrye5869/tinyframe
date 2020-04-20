
<p align="center">
    <a href="https://github.com/mrye5869/tinyframe" target="_blank">
        <img src="http://qiniu.mrye.xin/81c7fb680072e487af7c623cba5ad29.png" alt="TinyFrame" />
    </a>
</p>

[![Latest Version](https://img.shields.io/badge/beta-v1.0.0-green.svg?maxAge=2592000)](https://github.com/mrye5869/tinyframe)
[![w7 Version](https://img.shields.io/badge/%E5%BE%AE%E6%93%8E-%3E%3D1.8-blue)](https://s.w7.cc/index.php?c=wiki&do=view&id=1)
[![Php Version](https://img.shields.io/badge/php-%3E%3D5.6-green)](https://secure.php.net/)
[![TinyFrame Doc](https://img.shields.io/badge/docs-passing-green.svg?maxAge=2592000)](https://www.kancloud.cn/caike_/wq_frame/1483541)
[![TinyFrame License](https://img.shields.io/hexpm/l/plug.svg?maxAge=2592000)](https://github.com/mrye5869/tinyframe/blob/master/LICENSE)


## 简介

在效率就是金钱的时代，TinyFrame可以让你在微擎中轻松使用面相对象，并且提供大量可用的轮子，让你和你的团队专注微擎产品的开发，无需编写重复性的代码。

## 主要特性：
**规范**：遵循`PSR-2`、`PSR-4`规范，采用mvc架构  
**快速**：TinyFrame内置大量初始化的方法，可使用命令初始化开发组件  
**强大**：TinyFrame内置了 `ORM`、`event`、`middleware`、`Container`、`Di`、`facade`等一些主流框架的设计模式  
**灵活**：减少核心依赖，扩展更灵活、方便，支持命令行指令扩展  
**高效**：惰性加载，及数据库、配置和自动加载的缓存机制


## 文档

[[**中文文档**]](https://www.kancloud.cn/caike_/wq_frame/1483541)


## 环境要求

1. PHP 5.6 +
2. [微擎1.8](https://s.w7.cc/index.php?c=wiki&do=view&id=1&list=27) +


## 安装
如果你是第一次安装的话，在命令行下面，切换到你的微擎`addons`根目录下面并执行下面的命令：

~~~
composer create-project tinyframe/tinyframe  tiny_frame

~~~
### 初始化
进入命令窗口，执行下面指令

~~~
php tinyframe init

~~~
> 在这个过程中开发者需要按照命令窗口提示的内容输入项目相关的一些信息。

打开微擎后台对应用进行安装
![](http://qiniu.mrye.xin/f15451c8350ba1e247caa4b4c07fdda0_1914x701.png)
在浏览器中输入地址：

~~~
http://hostname/app/index.php?i=你的公众号id&c=entry&do=Index.index&m=tiny_frame
~~~
看到如下界面：
![](http://qiniu.mrye.xin/Z4SD1DU%60V4TJWBB8MBS.png)

## 更新日志

[更新日志](changelog.md)

## 协议

TinyFrame 的开源协议为 Apache-2.0，详情参见[LICENSE](LICENSE)
