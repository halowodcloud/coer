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

    public function aa()
    {
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['mobile'] = $_POST['mobile'];
        $data['subject'] = $_POST['subject'];

        $model = new \app\model\contact();
        $result = $model -> insertData($data);
        if ($result) {
            echo '<script> alert("提交成功"); </script>';
            jump('/contact/index');
        } else {
            echo '<script> alert("提交失败, 请检查~~"); </script>';
            jump('/index/index');
        }
    }
}