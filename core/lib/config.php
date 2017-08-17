<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/17
 * Time: 00:41
 */
namespace core\lib;

class config
{
    public static $conf = [];

    public static function getConf($name, $file)
    {
        if (isset(self::$conf[$file])) {
            return self::$conf[$file][$name];  //避免重复加载
        } else {
            //加载配置项
            $fileName = CORE . '/config/' . $file . '.php';
            if (isset($fileName)) {
                $conf = include $fileName;
                if (isset($conf[$name])) {
                    self::$conf[$file] = $conf;
                    return $conf[$name];
                } else {
                    throw new \Exception('配置项' . $name . '不存在');
                }
            } else {
                throw new \Exception('配置文件' . $fileName . '不存在');
            }
        }
    }

    public static function getConfAll($file)
    {
        if (isset(self::$conf[$file])) {
            return self::$conf[$file];  //避免重复加载
        } else {
            //加载配置项
            $fileName = CORE . '/config/' . $file . '.php';
            if (is_file($fileName)) {
                $conf = include $fileName;
                self::$conf[$file] = $conf;
                return $conf;
            } else {
                throw new \Exception('配置文件' . $file . '不存在');
            }
        }
    }
}