<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/17
 * Time: 18:32
 */
namespace app\control;

use core\coer;

class repair extends coer
{
    public function index()
    {
        $this -> display('repair/repair');
    }
}