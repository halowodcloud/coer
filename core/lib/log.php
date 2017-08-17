<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/17
 * Time: 01:41
 */
namespace core\lib;

class log
{
    public static $class;

    public static function init()
    {
        $drive = config::getConf('DRIVE', 'log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
    }
}