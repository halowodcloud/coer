<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/17
 * Time: 18:31
 */
namespace app\control;

use core\coer;

class maintain extends coer
{
    public function index()
    {
        $this -> display('maintain/maintain');
    }
}