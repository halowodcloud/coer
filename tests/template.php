<?php
// >~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// | PHP Framework Created by PhpStorm.
// >~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// | Author: Wally <380013245@qq.com>
// >~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// | Date: 2017/7/7 - 2017/8/23
// >~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// | Licensed < http://www.apache.org/licenses/LICENSE-2.0 >
// >~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

class template
{
    // 模板文件目录
    protected static $temp_dir = 'temp';
    // 编译文件目录
    protected static $comp_dir = 'comp';
    // 缓存文件目录
    protected static $cache_dir = 'cache';
    // 模板变量
    protected static $temp_var = [];
    // 模板内容
    protected static $content = '';
    // 是否开启缓存
    public $is_cache = false;

    // 模板编译
    private static function parse($parse_file)
    {
        // 解析变量正则表达式
        $pattern = '/\{\$([\w\d]+)\}/';

        // 变量名转换成对应的 PHP 语句
        if (preg_match($pattern, self::$content)) {
            self::$content = preg_replace($pattern, '<?php echo self::$temp_var["$1"] ?>', self::$content);
        }

        // 编译完成, 生成编译文件, 否则输出错误
        if (!file_put_contents($parse_file, self::$content)) {
            exit('编译文件生成失败, 请检查~');
        }
    }

    // 模板变量注入
    public function assign($var, $value = null)
    {
        // 如果第一参数存在且不为空, 则将第二参数赋值给数组, 以第一参数为键名
        if (isset($var) && !empty($var)) {
            self::$temp_var[$var] = $value;
        } else {
            // 否则输出错误
            exit('模板变量未设置');
        }
    }

    // 模板文件编译
    public function display($file)
    {
        // 检测目录是否存在, 没有则创建指定文件夹
        if (!is_dir(self::$temp_dir)) {
            mkdir(temp, 0777, true);
        }
        if (!is_dir(self::$comp_dir)) {
            mkdir(comp, 0777, true);
        }
        if (!is_dir(self::$cache_dir)) {
            mkdir(cache, 0777, true);
        }

        // 模板文件
        $tpl_file = self::$temp_dir. '/' . $file . '.html';

        // 判断模板文件是否存在
        if (!file_exists($tpl_file)) {
            exit('模板文件不存在!');
        }

        // 编译后的文件路径
        $parse_file = self::$comp_dir. '/' . md5($file, true) . $file . '.php';

        // 如果编译后的文件不存在或者模板文件被修改了, 重新编译文件
        if (!file_exists($parse_file) || filemtime($parse_file) < filemtime($tpl_file)) {
            // 模板内容赋值
            self::$content = file_get_contents($tpl_file);
            // 执行编译方法
            self::parse($parse_file);
        }

        // 如果开启了缓存, 则首先判断缓存文件, 否则直接加载编译文件
        if ($this -> is_cache) {
            // 缓存文件
            $cache_file = self::$cache_dir . '/' . md5($file, true) . $file . '.html';

            // 如果存在文件不存在或者编译文件被修改, 重新生成缓存文件
            if (!file_exists($cache_file) || filemtime($cache_file) < filemtime($parse_file)) {
                // 打开缓存区
                ob_start();
                // 先引入编译后的文件
                include $parse_file;
                // 获取缓存区的内容并删除当前缓存区数据
                $content = ob_get_clean();
                // 把内容写入到缓存文件, 如果写入失败则输出错误, 否则引入缓存文件
                if (!file_put_contents($cache_file, $content)) {
                    exit('缓存文件生成失败, 请检查~');
                } else {
                    include $cache_file;
                }
            } else {
                // 如果缓存文件已存在则直接引入
                include $cache_file;
            }
        } else {
            // 没开启缓存则直接引入编译后的文件
            include $parse_file;
        }
    }
}