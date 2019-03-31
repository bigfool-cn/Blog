<?php 
namespace app\index\controller;
use think\Controller;

class LoginVerfy extends Controller
{
	public function _initialize()
	{
		if(!session('username'))
        {
            return $this->redirect('index/user/login');
        }
        //判断会话是否过期
        if (time() - session('start_time') > config('session')['expire']) {
            session_destroy();//真正的销毁在这里！
            return $this->redirect('index/user/login');
        } else
        {
        	return True;
        }
	}
}


 ?>