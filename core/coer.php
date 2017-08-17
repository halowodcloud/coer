<?php
namespace core;

class coer
{
    public static $classMap = [];
    public $assign;

    //框架运行
    public static function run()
    {
        $route = new \core\lib\route();

//        \core\lib\log::init();

        //加载控制器
        $control = $route->control;
        $action = $route->action;
        $file = APP . '/control/' . $control . '.php';
        $controlClass = '\app\control\\' . $control;
        if (is_file($file)) {
            include $file;
            $class = new $controlClass();
            $class->$action();
        } else {
            throw new \Exception('找不到' . $controlClass . '控制器');
        }
    }

    //自动引入类文件
    public static function load($class)
    {
        if (isset(self::$classMap[$class])) {
            return true;
        } else {
            //转换字符
            $repClasss = str_replace('\\', '/', $class);
            //类文件名
            $file = COER . '/' . $repClasss . '.php';
            if (is_file($file)) {
                include $file;  //引入类文件
                self::$classMap[$class] = $repClasss;
            } else {
                return false;
            }
        }
    }

    //渲染数据
    public function assign($name, $value)
    {
        $this->assign[$name] = $value;
    }

    //渲染页面    ------   原始方法
//    public function display($file)
//    {
//        $file = APP . '/view/' . $file . '.html';
//        if (is_file($file)) {
//            extract($this->assign);  //把变量数组打散为多个单一变量
//            include $file;
//        }
//    }

    //渲染页面  ---- twig方法
    public function display($file)
    {
        $files = APP . '/view/' . $file . '.html';
        if (is_file($files)) {
            //注册 Twig 类方法
            \Twig_Autoloader::register();
            //模板路径
            $loader = new \Twig_Loader_Filesystem(APP . '/view/');
            //环境设置
            $twig = new \Twig_Environment($loader, [
                'cache' => COER . '/runtime/twig',
                'debug' => DEBUG
            ]);
            //加载模板
            $tmp = $twig -> loadTemplate($file . '.html');
            //显示模板
            $tmp -> display($this -> assign ? $this -> assign : []);
        }
    }
}
