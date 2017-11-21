<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        //C('参数名称')可以读取到系统的调试模式的设置值
        $model = C('URL_MODEL');
        echo 'URL_MODEL：'.$model.'<br/>';

        // 获取已经设置的参数值
        C('USER_CONFIG.USER_TYPE');
        //设置新的值
        C('USER_CONFIG.USER_TYPE',1);

        echo 'USER_AUTH_ID:'.C('USER_AUTH_ID').'<br/>';

        echo 'USER_AUTH_ID2:'.C('USER.USER_AUTH_ID').'<br/>';
        //C方法也可以用于读取二维配置：
        echo 'USER_CONFIG.USER_TYPE：'.C('USER_CONFIG.USER_TYPE').'<br/>';

        //C配置方法支持批量配置
        $config = array('WEB_SITE_TITLE'=>'ThinkPHP','WEB_SITE_DESCRIPTION'=>'开源PHP框架');
        //永久保存设置参数的功能，仅针对批量赋值的情况
        C($config ,'name');
        print_r($config);

        // 动态改变缓存有效期
        C('DATA_CACHE_TIME',60);
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
}