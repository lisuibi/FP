<?php
use \NoahBuscher\Macaw\Macaw;

Macaw::get('/','app\Controllers\Home@home');

Macaw::get('/ceshi','app\Controllers\Home@ceshi');


Macaw::$error_callback = function() {
	
	throw new \Exception('路由无匹配项 404 Not Found');
	
};

Macaw::dispatch();
