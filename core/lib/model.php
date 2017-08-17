<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/17
 * Time: 00:09
 */
namespace core\lib;
use core\lib\config;

//继承自带的\PDO类
//class model extends \PDO
//{
//    public function __construct()
//    {
//        //连接数据库
//        $database = config::getConfAll('database');
//        try {
//            parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWORD']);
//        } catch (\PDOException $e) {
//            p($e->getMessage());
//        }
//    }
//}

//继承 composer 第三方类库 medoo
class model extends \Medoo\Medoo
{
    public function __construct()
    {
        $option = config::getConfAll('database');
        parent::__construct($option);
    }
}