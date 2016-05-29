<?php  
	/**
	* 权限检测
	*/
	class AuthCheckBehavior extends Behavior
	{
		// 配置参数
		protected $options = array(
		// auth权限控制
		'AUTH_CONFIG'=>array(
        	'AUTH_ON' => true, //认证开关
        	'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        	'AUTH_GROUP' => 'think_auth_group', //用户组数据表名
        	'AUTH_GROUP_ACCESS' => 'think_auth_group_access', //用户组明细表
        	'AUTH_RULE' => 'think_auth_rule', //权限规则表
        	'AUTH_USER' => 'think_members'//用户信息表
    	),
     	//超级管理员id,拥有全部权限,只要用户uid在这个角色组里的,就跳出认证.可以设置多个值,如array('1','2','3')
    	'ADMINISTRATOR'=>array('1'),
		);

		// 行为扩展的执行入口必须是run
		public function run(&$return)
		{
			if(!isset($_SESSION['uid'])){
				redirect(U(GROUP_NAME.'/Login/index'));
			}else{
				//权限验证
				$name = GROUP_NAME.'/'.MODULE_NAME.'/'.ACTION_NAME;

				if(!authcheck($name,$_SESSION['uid'])){
					halt('你没有权限！');
				}else{
					$return = true;
				}
			}
			
		}
	}
?>