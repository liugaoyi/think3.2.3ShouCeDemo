<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if (version_compare(PHP_VERSION, '5.3.0', '<')) {
    die('require PHP > 5.3.0 !');
}

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG', true);

//入口文件中定义会自动加载该状态对应的配置文件（位于Application/Common/Conf/office.php）。
//define('APP_STATUS','office');

//入口文件中定义会自动加载该状态对应的配置文件（位于Application/Common/Conf/office.php）。
//define('APP_STATUS','office');

//在应用入口文件中定义应用的配置文件的后缀
//define('CONF_EXT','.ini');

// 定义应用目录
define('APP_PATH', './Application/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 绑定Admin模块到当前入口文件
//define('BIND_MODULE','Admin');

