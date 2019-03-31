<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\LoginLog;

class User extends Controller
{
	public function login()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$username = request()->post('username','');
			$password = request()->post('password','');
			$remember = request()->post('remember','');
			$ip = request()->ip();
			$user = model('User');
			$user_one = $user->where('name',$username)->find();
			if($user_one)
			{
				if($user_one->password==md5($password))
				{
					session('username',$username);
					session('start_time',time());
					if($remember)
					{
						session('remember',true);
					}
					$loginlog = model('LoginLog');
					$loginlog->save(['username'=>$username,'ip'=>$ip]);
					// var_dump(url('index/index/index'));
					// exit();
					return redirect(url('index/index/index','',''));
				}
				else
				{
					$this->assign('status','密码错误');
					return $this->fetch();
				}
			}
			else
			{
				$this->assign('status','用户名不存在');
				return $this->fetch();
			}
			
		}
		else
		{
			$this->assign('status','');
			return $this->fetch();
		}
		
	}
}

?>
