<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/22
 * Time: 10:50
 */
namespace core\lib;

class cookie
{
    // 静态受保护成员属性
    protected static $config = [
        // cookie名前缀
        'prefix' => '',
        // cookie保存时间
        'expire' => 0,
        // cookie 保存路径
        'path' => '/',
        // cookie 有效域名
        'domain' => '',
        // cookie 启用安全传输
        'secure' => false,
        // httponly 设置
        'httponly' => '',
        // 是否使用 setcookie
        'setcookie' => true,
    ];
    protected static $init;

    /**
     * cookie初始化
     * @param array $config
     * @return void
     */
    public static function init($config = [])
    {
        // 如果函数参数为空数组, 先获取配置参数赋值给函数参数
        if (empty($config)) {
            $config = \core\lib\config::getConf('cookie', 'cookie');
        }
        // 先把函数参数的数组键名转换成小写, 再跟成员属性合并成一个新数组, 覆盖成员属性
        self::$config = array_merge(self::$config, array_change_key_case($config));
        // 如果 httponly 不为空, 则设置.ini 文件的 session.cookie_httponly 配置项为 1
        if (!empty(self::$config['httponly'])) {
            ini_set('session.cookie_httponly', 1);
        }
        // 成员属性赋值为 true
        self::$init = true;
    }

    /**
     * 设置或者获取 cookie 前缀
     * @param string $prefix
     * @return string|void
     */
    public static function prefix($prefix = '')
    {
        // 如果为空, 则返回成员属性的'prefix'项
        if (empty($prefix)) {
            return self::$config['prefix'];
        }
        // 如果不为空, 则把参数覆盖成员属性对应的项
        self::$config['prefix'] = $prefix;
    }

    /**
     * cookie 设置
     * @param $name cookie 名称
     * @param string $value cookie 值
     * @param null $option 可选参数, 可能是 null|integer|string
     *
     * @return mixed
     * @internal param mixed $option cookie 参数
     */
    public static function set($name, $value = '', $option = null)
    {
        // 成员属性$init不存在 并且成员方法 init() 不存在
        !isset(self::$init) && self::init();

        // 如果参数$option 不为 null
        if (!is_null($option)) {
            // 判断是否为数字, 把参数赋值给保存时间 expire 项
            if (is_numeric($option)) {
                $option = ['expire' => $option];
            } elseif (is_string($option)) {
                // 判断是否为字符串, 把字符串解析到变量中
                parse_str($option, $option);  // 第一个参数是要解析的字符串, 第二个参数是存储变量的数组名称
            }
            // 把$option 数组的键转换为小写, 跟自身成员属性合并成新数组, 赋值给$config
            $config = array_merge(self::$config, array_change_key_case($option));
        } else {
            // 如果参数$option 为 null, 则把自身成员属性赋值给$config
            $config = self::$config;
        }

        // 将 cookie 名称和 cookie 前缀拼接
        $name = $config['prefix'] . $name;

        // 如果$value 是数组, 把数组的每个元素进行自定义转换, 转换成 json 格式
        if (is_array($value)) {
            array_walk_recursive($value, 'self::jsonFormatProtect', 'encode');
            $value = 'coer:'.json_encode($value);
        }

        // 如果三元运算判断, 设置cookie 保存时间
        $expire = !empty($config['expire']) ? $_SERVER['REQUEST_TIME'] + intval($config['expire']) : 0;

        // 属性 setcookie 为 true, 则设置 cookie
        if ($config['setcookie']) {
            setcookie($name, $value, $expire, $config['path'], $config['domain'], $config['secure'], $config['httponly']);
        }

        $_COOKIE[$name] = $value;
    }

    /**
     * 永久保存 cookie 数据
     * @param $name
     * @param string $value
     * @param null $option
     * @return void
     */
    public static function forever($name, $value = '', $option = null) {
        // 判断$option 参数的值
        if (is_null($option) || is_numeric($option)) {
            $option = [];
        }
        // 设置 cookie 保存时间: 好几年
        $option['expire'] = 315360000;
        self::set($name, $value, $option);
    }

    /**
     * 判断 cookie 数据
     * @param $name
     * @param null $prefix
     * @return bool
     */
    public static function has($name, $prefix = null)
    {
        !isset(self::$init) && self::init();
        // 获取 cookie 名称前缀
        $prefix = !is_null($prefix) ? $prefix : self::$config['prefix'];
        // cookie 名称拼接
        $name = $prefix.$name;
        // 返回$_COOKIE常量对应的 cookie 信息
        return isset($_COOKIE[$name]);
    }

    /**
     * 获取 cookie 数据
     * @param string $name
     * @param null $prefix
     * @return array|mixed|string
     */
    public static function get($name = '', $prefix = null)
    {
        !isset(self::$init) && self::init();
        // 获取 cookie 名称前缀
        $prefix = !is_null($prefix) ? $prefix : self::$config['prefix'];
        // cookie 名称拼接
        $key = $prefix.$name;

        // 判断$name 参数为空, 或者存在, 或者别的
        if ($name == '') {
            // 获取全部 cookie, 遍历数组
            if ($prefix) {
                $value = [];
                foreach ($_COOKIE as $k => $val) {
                    if (strpos($k, $prefix)) {
                        $value[$k] = $val;
                    }
                }
            } else {
                $value = $_COOKIE;
            }
        } elseif (isset($_COOKIE[$key])) {
            $value = $_COOKIE[$key];
            if (strpos($value, 'coer:') === 0) {
                $value = substr($value, 6);
                $value = json_decode($value, true);
                array_walk_recursive($value, 'self::jsonFormatProtect', 'decode');
            }
        } else {
            $value = null;
        }

        return $value;
    }

    /**
     * 删除 cookie
     * @param $name
     * @param null $prefix
     * @return mixed
     */
    public static function delete($name, $prefix = null)
    {
        !isset(self::$init) && self::init();
        // 获取$config 成员属性
        $config = self::$config;
        // 获取 cookie 名称前缀
        $prefix = !is_null($prefix) ? $prefix : $config['prefix'];
        // cookie 名称拼接
        $name = $prefix.$name;
        // 如果 setcookie 为 true, 则设置 cookie, 把时间设置为过去的时间
        if ($config['setcookie']) {
            setcookie($name, '', $_SERVER['REQUEST_TIME'] - 3600, $config['path'], $config['domain'], $config['secure'], $config['httponly']);
        }

        // 删除指定 cookie
        unset($_COOKIE[$name]);
    }

    /**
     * 清空 cookie
     * @param null $prefix
     */
    public static function clear($prefix = null)
    {
        // 如果没有 cookie, 则返回
        if (empty($_COOKIE)) {
            return;
        }
        !isset(self::$init) && self::init();

        // 删除指定 cookie 前缀的数据, 不指定则删除 config 配置项设置的指定前缀
        $config = self::$config;
        $prefix = !is_null($prefix) ? $prefix : $config['prefix'];

        // 如果前缀参数$prefix 为空, 则不作处理直接返回
        if ($prefix) {
            foreach ($_COOKIE as $k => $val) {
                if (strpos($k, $prefix) === 0) {
                    if ($config['setcookie']) {
                        setcookie($k, '', $_SERVER['REQUEST_TIME'] - 3600, $config['path'], $config['domain'], $config['secure'], $config['httponly']);
                        unset($_COOKIE[$k]);
                    }
                }
            }
        }
        return;
    }

    private static function jsonFormatProtect(&$val, $key, $type = 'encode')
    {
        if (!empty($val) && $val !== true) {
            $val = 'decode' == $type ?urldecode($val) : urlencode($val);
        }
    }
}