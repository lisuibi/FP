<?php 
//公共函数文件

/**
 * 格式化输出 
 * @param $var 
 * @param $exit
 */
function dump($var, $exit = false){
	if(is_string($var)){
		echo $var;
	}else{
		echo '<pre>';
		var_dump ($var);
		echo '</pre>';
	}
	$exit?die():'';
}

function json($var)
{
	echo json_encode($var,JSON_UNESCAPED_UNICODE);
}

