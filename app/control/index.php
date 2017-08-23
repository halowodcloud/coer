<?php

namespace app\control;
use core\coer;
use core\lib\cookie;
use core\lib\model;
use core\lib\session;

class index extends coer
{
    public function index()
    {
        //PDO 写法
//        $model = new \core\lib\model();
//        $sql = 'select * from bb';
//        $result = $model->query($sql);  //查询数据库
//        p($result->fetchAll());

        //medoo 写法
//        $model = new \app\model\user();
//        $result = $model -> lists();
//        $setOne = $model -> setOne('7', [
//            'bb_name' => 'setOne',
//            'bb_pd' => 'setpd'
//        ]);
//        $insertData = $model -> insertData([
//            'bb_name' => 'insert',
//            'bb_pd' => 'sinetepd',
//            'date' => date('Y-m-d')
//        ]);

//        cookie::init(['prefix' => 'coer_', 'expire' => 3600, 'path' => '/']);
//        cookie::prefix('coer_');
//        cookie::set('cooname', 'value', 3600);
//        cookie::set('name', 'coer_value', ['prefix' => 'coer_', 'expire' => 3600]);
//        cookie::clear('coer_');
//
//        $res = cookie::get('coer_cooname');
//        $result = cookie::get('name', 'coer_');
//        dump($res);
//        dump($result);
//        $results = cookie::get();
//        dump($results);

//        session::set('session', 'testSession', 'coer_');
//        session::set('session', 'session', 'test_');
//        session::clear('test_');
//        $res = session::get();
//        dump($res);
//        exit();

        $this -> assign('data', 'input');
        $this -> display('index/index');
    }
}
