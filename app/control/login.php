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

    public function check()
    {
        $data['username'] = $_POST['username'];
        $data['password'] = md5($_POST['password']);
//        dump($data);

        $model = new \app\model\user();
        $result = $model -> getOne($data['username']);
//        dump($result);

        if ($data['username'] == $result['username'] && $data['password'] == $result['password']) {
            echo '<script> alert("登录成功"); </script>';
            $this -> assign('data', $data['username']);
            jump('/index/index');
//            $this -> display('login/login');
        } else {
            echo '<script> alert("登录失败, 请重新登录~~"); </script>';
            jump('/login/index');
        }
    }
}