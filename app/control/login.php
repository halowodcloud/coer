<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/17
 * Time: 18:30
 */
namespace app\control;

use core\coer;

class login extends coer
{
    public function index()
    {
        $this -> display('login/login');
    }
}