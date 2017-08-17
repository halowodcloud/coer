<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/17
 * Time: 18:29
 */
namespace app\control;

use core\coer;

class detail extends coer
{
    public function index()
    {
        $this -> display('detail/details');
    }
}