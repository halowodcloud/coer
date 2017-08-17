<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/17
 * Time: 17:37
 */
namespace app\control;

use core\coer;

class contact extends coer
{
    public function index()
    {
        $this -> display('contact/contact');
    }
}