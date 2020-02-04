<?php
//定义常量
define('DEBUG',true);
define('ROOT_PATH', str_replace('\\','/',realpath('./')));
define('CORE', ROOT_PATH.'/core');
define('CONFIG', ROOT_PATH.'/config');
define('VERDOR', ROOT_PATH.'/vendor');

//加载自动加载文件
require './vendor/autoload.php';
if(DEBUG){
	ini_set('display_errors','On');
	//whoops 错误提示
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
}else{
	ini_set('display_errors','Off');
}

// Eloquent ORM
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection(require './config/database.php');
$capsule->bootEloquent();

//加载公共函数文件
require './core/common/function.php';

//引入路由
require './app/routes.php';

?>
