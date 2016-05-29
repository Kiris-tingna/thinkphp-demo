<?php  
	/**
	* 登录控制器
	*/
	class LoginAction extends Action
	{
		public function index()
		{
			$this->display();
		}
		/**
		 * 登录页面表单处理
		 */
		public function login(){
			if (!IS_POST) {
				$this->error('非法请求！');
			}
			$username=I('post.username');
			$password=I('post.password','','md5');

			$where=array('username'=>$username);

			$rs=M('user')->where($where)->find();

			if(!$rs || $rs['password'] != $password){
				$this->error('用户名或者密码错误！');
			}

			//走到这里就说明用户名和密码验证通过了
			
			session('uid',$rs['id']);
			session('username',$username);

			//跳转到首页
			redirect(U('Index/index'),1,'登录成功，正在跳转...');

		}

		/**
		 * 用户登出
		 */
		public function logout(){
			if(isset($_SESSION['uid'])){
				session_unset();
				session_destroy();
				redirect(U('Login/index'),1,'退出成功！');
			}
		}
	}
?>