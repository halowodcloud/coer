<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/21
 * Time: 15:58
 */
namespace core\lib;

class cookie
{
    public $name = '';
    public $time = '';
    public $serialize = false;
    public $path = '';

    public function __construct($name, $time, $serialize = false, $path = '/')
    {
        $this -> name = $name;
        $this -> time = $time;
        $this -> serialize = $serialize;
        $this -> path = $path;

        $fixName = $this -> name . '_S';

        if ($this -> serialize && !isset($_COOKIE[$name])) {
            $cookieArr = [];
            foreach ($_COOKIE as $name => $val) {
                if (strpos($name, $this -> name) != false) {
                    $subName = substr($name, strlen($this -> name) + 1);
                    $cookieArr[$subName] = $val;
                    $this -> delCookie($name);
                }
            }
            $this -> setCookie($cookieArr);
        }
        if (!$this -> serialize && isset($_COOKIE[$fixName])) {
            $cookieArr = unserialize($_COOKIE[$fixName]);
            $this -> delCookie($fixName);
            $this -> setCookie($cookieArr);
        }
    }

    public function destroyCookie($name)
    {
        foreach ($_COOKIE as $name => $val) {
            if (strpos($name, $this -> name) != false) {
                $_COOKIE[$name] = NULL;
                $this -> delCookie($name);
            }
        }
    }

    public function getCookie($item)
    {
        if ($this -> serialize) {
            $name = $this -> name . '_S';
            if (isset($_COOKIE[$name])) {
                $cookie = unserialize($_COOKIE[$name]);
                if (isset($cookie[$item])) {
                    return $cookie[$item];
                } else {
                    return NULL;
                }
            } else {
                return NULL;
            }
        } else {
            $name = $this -> name . '_' . $item;
            if (isset($_COOKIE[$name])) {
                return $_COOKIE[$name];
            } else {
                return NULL;
            }
        }
    }

    public function delCookie($name)
    {
        $tmp = time() - 432000;
        setcookie($name, '', $tmp, $this -> path);
    }

    public function setCookie($itemArr)
    {
        if ($this -> serialize) {
            $items = $this->serialize($itemArr);
            $name = $this -> name . '_S';
            $_COOKIE[$name] =$items;
            $tmp = time() + $this -> time;
            setcookie($name, $items, $tmp, $this -> path);
        } else {
            $tmp = time() + $this -> time;
            foreach ($itemArr as $name => $val) {
                $name = $this -> name . '_' . $name;
                $_COOKIE[$name] = $val;
                setcookie($name, $val, $tmp, $this -> path);
            }
        }
    }
}