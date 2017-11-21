<?php
//项目配置文件
return array(

    //'URL_MODEL' => 2,

    //配置参数不区分大小写（因为无论大小写定义都会转换成小写）
    //建议保持大写定义配置参数的规范
    'DEFAULT_MODULE'     => 'Index', //默认模块
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
    //在配置文件中可以使用二维数组来配置更多的信息
    'USER_CONFIG'        => array(
        'USER_AUTH' => true,
        'USER_TYPE' => 2,
    ),
    //更多配置参数
    //二级参数配置区分大小写

    // 加载扩展配置文件
    'LOAD_EXT_CONFIG' => 'user,db',

    //url忽略大小写
    'URL_CASE_INSENSITIVE'  =>  true,

    'VAR_MODULE'            =>  'module',     // 默认模块获取变量
    'VAR_CONTROLLER'        =>  'controller',    // 默认控制器获取变量
    'VAR_ACTION'            =>  'action',    // 默认操作获取变量
    /*
     * http://localhost:8080/think3.2.3ShouCeDemo/?m=home&c=user&a=login&var=value
     * 设置后访问
     * http://localhost:8080/think3.2.3ShouCeDemo/?module=home&controller=Index&action=index
     * */

    // 更改PATHINFO参数分隔符
    //'URL_PATHINFO_DEPR'=>'-',
    /*
     * http://localhost:8080/think3.2.3ShouCeDemo/Home/Many/index
     * 设置后访问
     * http://localhost:8080/think3.2.3ShouCeDemo/Home-Many-index
     * */

    //兼容模式可以更改兼容模式变量的名称定义
    'VAR_PATHINFO' =>  'path',
    // 更改PATHINFO参数分隔符
    'URL_PATHINFO_DEPR'=>'-',
    /*
     *开兼容模式访问
     * http://localhost:8080/think3.2.3ShouCeDemo/?path=/Home-Many-index
     * */

    /*
     * REWRITE模式
     * 1.启用mod_rewrite模块
     * 打开Apache名为“httpd.conf”的配置文件，#LoadModule rewrite_module modules/mod_rewrite. so这行代码，将#注释符删除，使得Apache在启动时就加载mod_rewrite模块。
     * 2.设置Apache
     * <Directory />
           Options FollowSymLinks
            AllowOverride None
       </Directory>
     *AllowOverride None 改为 AllowOverride All ，重启httpd服务即可。
     * 3.添加thinkphp的配置
        'URL_MODEL' => 2
     *4.在入口文件index.php同级目录添加.htaccess文件，内容如下：
        <IfModule mod_rewrite.c>
            Options +FollowSymlinks
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} !-d
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
        </IfModule>
        这个文件thinkphp_3.2.3自带的就有。
     * */

    // 加载扩展配置文件
    //'LOAD_EXT_CONFIG' => array('USER'=>'user','DB'=>'db'),

    // 设置禁止访问的模块列表
    //'MODULE_DENY_LIST'      =>  array('Common','Runtime','Api'),

    //'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),
    //'DEFAULT_MODULE'       =>    'Home',

    // 关闭多模块访问
    //'MULTI_MODULE'          =>  false,
    //'DEFAULT_MODULE'        =>  'Home',

);