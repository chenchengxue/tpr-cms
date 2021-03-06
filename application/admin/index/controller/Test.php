<?php
// +----------------------------------------------------------------------
// | TPR [ Design For Api Develop ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017-2017 http://hanxv.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: axios <axioscros@aliyun.com>
// +----------------------------------------------------------------------

namespace tpr\admin\index\controller;

use tpr\admin\common\controller\AdminBase;
use think\Session;

class Test extends AdminBase
{
    public function index()
    {
        Session::set('test', 123);
        $test = Session::get('test');
        dump($test);

        captcha();
        $test_code = Session::get('test_code');
        dump($test_code);
        $result = captcha_check($test_code);
        dump($result);
    }
}