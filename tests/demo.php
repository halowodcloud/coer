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

require_once 'template.php';

$tpl = new template();
// 要开启设置为 true
$tpl -> is_cache = false;

$webname = 'webname';
$author = 'author';
$title = 'webtitle';
$content = 'test content';

$tpl -> assign('webname', $webname);
$tpl -> assign('author', $author);
$tpl -> assign('title', $title);
$tpl -> assign('content', $content);

$tpl -> display('demo');