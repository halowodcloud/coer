<?php
//函数库
function p($val)
{
	if (is_bool($val)) {
		var_dump($val);
	} elseif (is_null($val)) {
		var_dump(NULL);
	} else {
		echo '<pre style="position: relative; margin: 30px; padding: 20px 40px; border-radius: 0 10px 10px 0; background: #f5f5f5; border-left: 4px solid #00f; font-size: 14px; line-height: 18px; opacity: .8;">'.print_r($val, true).'</pre>';
	}
}

function jump($url)
{
    echo '<meta http-equiv="refresh" content="0; url='.$url.'">';
    exit();
}
