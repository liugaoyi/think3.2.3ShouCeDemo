<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/21
 * Time: 15:25
 */
namespace Home\Controller;

use Think\Controller;

class ManyController extends Controller
{
    public function index()
    {
        //$config =   M('Config')->getField('name,value');
       // print_r($config);

        //取回保存的参数
        $config = C('','name');
        print_r($config.WEB_SITE_TITLE);
    }

}