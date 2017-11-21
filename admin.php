<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/21
 * Time: 16:00
 */

// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 后台入口文件

// 检测PHP环境
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
    die('require PHP > 5.3.0 !');
}

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);

// 绑定Admin模块到当前入口文件
define('BIND_MODULE','Admin');

define('BIND_CONTROLLER','Index'); // 绑定Index控制器到当前入口文件

/*
 * 绑定模块和控制器后，原来的访问地址：
http://localhost:8080/think3.2.3ShouCeDemo/Admin.php/Index/index
就变成：
http://localhost:8080/think3.2.3ShouCeDemo/Admin.php/Index
 * */

//生成更多的控制器
//define('BUILD_CONTROLLER_LIST','Index,User,Menu');
//BUILD_MODEL_LIST支持生成多个模型类
//define('BUILD_MODEL_LIST','User,Menu');

// 定义应用目录
define('APP_PATH', './Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
