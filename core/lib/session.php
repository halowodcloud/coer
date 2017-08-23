<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/22
 * Time: 23:14
 */
namespace core\lib;

class session
{
    protected static $prefix = 'coer_';

    /**
     * 设置 session 名称前缀
     * @param string $prefix
     * @return string
     */
    public static function prefix($prefix = '')
    {
        // 如果为空且不等于 null, 则返回自身成员属性
        if (empty($prefix) && $prefix !== null) {
            return self::$prefix;
        } else {
            // 否则将参数赋值给自身成员属性
            self::$prefix = $prefix;
        }
    }

    /**
     * session 设置
     * @param $name  session 名称
     * @param string $value  session 值
     * @param null $prefix  session 前缀
     * @return void
     */
    public static function set($name, $value = '', $prefix = null)
    {
        // 获取 session 前缀
        $prefix = !is_null($prefix) ? $prefix : self::$prefix;

        // 如果$name 参数包含'.'   则转换成二维数组
        if (strpos($name, '.')) {
            // 二维数组赋值
            list($name1, $name2) = explode('.', $name);
            // 如果前缀存在, 则设置 session 数组名称加上前缀
            if ($prefix) {
                $_SESSION[$prefix][$name1][$name2] = $value;
            } else {
                $_SESSION[$name1][$name2] = $value;
            }
        } elseif ($prefix) {
            // 如果$prefix 存在且$name 不包含'.'   则设置 session 名称加上前缀
            $_SESSION[$prefix][$name] = $value;
        } else {
            // 否则直接设置 session 值
            $_SESSION[$name] = $value;
        }
    }

    /**
     * 获取 session 数据
     * @param string $name
     * @param null $prefix
     * @return array|null
     */
    public static function get($name = '', $prefix = null)
    {
        // 获取 session 前缀
        $prefix = !is_null($prefix) ? $prefix : self::$prefix;

        // 判断参数值
        if ($name == '') {
            // 获取全部 session 值
            $value = $prefix ? (!empty($_SESSION[$prefix]) ? $_SESSION[$prefix] : []) : $_SESSION;
        } elseif ($prefix) {
            if (strpos($name, '.')) {
                // 二维数组赋值
                list($name1, $name2) = explode('.', $name);
                $value = isset($_SESSION[$prefix][$name1][$name2]) ? $_SESSION[$prefix][$name1][$name2] : null;
            } else {
                $value = isset($_SEESION[$prefix][$name]) ? $_SESSION[$prefix][$name] : null;
            }
        } else {
            if (strpos($name, '.')) {
                list($name1, $name2) = explode('.', $name);
                $value = $_SESSION[$name1][$name2] ? $_SESSION[$name1][$name2] : null;
            } else {
                $value = isset($_SESSION[$name]) ? $_SESSION[$name] : null;
            }
        }

        // 返回 session 值
        return $value;
    }

    /**
     * 删除 session 数据
     * @param $name
     * @param null $prefix
     * @return void
     */
    public static function delete($name, $prefix = null)
    {
        $prefix = !is_null($prefix) ? $prefix : self::$prefix;

        if (is_array($name)) {
            foreach ($name as $key) {
                // 如果$name 为数组, 则遍历数组然后再次调用删除方法
                self::delete($key, $prefix);
            }
        } elseif (strpos($name, '.')) {
            list($name1, $name2) = exp('.', $name);
            if ($prefix) {
                unset($_SESSION[$prefix][$name1][$name2]);
            } else {
                unset($_SESSION[$name1][$name2]);
            }
        } else {
            if ($prefix) {
                unset($_SESSION[$prefix][$name]);
            } else {
                unset($_SESSION[$name]);
            }
        }
    }

    /**
     * 清空 session 数据
     * @param $prefix
     * @return void
     */
    public static function clear($prefix = null)
    {
        $prefix = !is_null($prefix) ? $prefix : self::$prefix;

        if ($prefix) {
            // 如果存在前缀, 则删除指定前缀的 session 数据
            unset($_SESSION[$prefix]);
        } else {
            // 否则全部设置为空数组
            $_SERVER = [];
        }
    }

    /**
     * 判断 session 数据
     * @param $name
     * @param $prefix
     * @return bool
     */
    public static function has($name, $prefix)
    {
        $prefix = !is_null($prefix) ? $prefix : self::$prefix;

        if (strpos($name, '.')) {
            // 如果$name 参数是二维数组形式, 则返回对应的 session 数据
            list($name1, $name2) = explode('.', $name);
            return $prefix ? isset($_SESSION[$prefix][$name1][$name2]) : isset($_SESSION[$name1][$name2]);
        } else {
            // 否则直接返回对应的 session 数据
            return $prefix ? isset($_SESSION[$prefix][$name]) : isset($_SESSION[$name]);
        }
    }

    /**
     * 添加数据到 session 数组
     * @param $key
     * @param $val
     * @return void
     */
    public static function push($key, $val)
    {
        $arr = self::get($key);

        if (is_null($arr)) {
            $arr = [];
        }

        $arr[] = $val;
        self::set($key, $arr);
    }

    /**
     * 销毁 session 会话
     * @return void
     */
    public static function destory()
    {
        if (!empty($_SESSION)) {
            $_SESSION = [];
        }

        session_unset();
        session_destroy();
    }

    /**
     *  暂停 session 会话
     * @return void
     */
    public static function pause()
    {
        session_write_close();
    }
}