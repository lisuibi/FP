<?php
namespace app\Controllers;
use app\Models\User;
use core\Redis;
class Home extends Base{
	
	public function home()
	{
		dump(User::first()->toarray());
		json(array('code'=>1,'msg'=>'登录成功'));
	}
	
	public function ceshi()
	{
		return json(array('code'=>1,'msg'=>'失败'));
	}
}