<?php  
	/**
	* 通用控制器
	*/
	class CommonAction extends Action{
		// 初始化
		public function _initialize(){
			
			// if(!isset($_SESSION['uid'])){
			// 	redirect(U(GROUP_NAME.'/Login/index'));
			// }

			// //权限验证
			// $name = GROUP_NAME.'/'.MODULE_NAME.'/'.ACTION_NAME;

			// if(!authcheck($name,$_SESSION['uid'])){
			// 	$this->error('你没有权限！');
			// }
			
			//改用行为扩展 
			B('AuthCheck');
		}
	}
?>