<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/22
 * Time: 23:15
 */
return [
    'session' => [
        // session ID
        'id' => '',
        // session ID 的提交变量, 解决 flash 上传跨域
        'var_session_id' => '',
        // session 前缀
        'prefix' => 'coer',
        // 驱动方式, redis/memcache/memcached
        'type' => '',
        // 是否自动开启 session
        'auto_start' => true,
    ],
];