<?php  
class AuthAction extends CommonAction{
	/**
	 * auth 权限控制器
	 */
	public function index(){
		$title = '首页';

		$this->assign('auth_tit',$title);
		$this->display();
	}

	/**
	 * 添加栏目视图
	 */
	public function addCate(){
		$title = '添加栏目';
		
		$this->assign('auth_tit',$title);
		$this->display();
	}
	/**
	 * 添加栏目表单处理
	 */
	public function addCateHandle(){
		if (!IS_POST) {
			exit('页面错误~');
		}
		$data=array(
			'catename'=>I('post.name'),
			'alink'=>I('post.nlink')
			);
		if (M('cate')->add($data)) {
			$this->success('添加成功');
		}else{
			$this->error('添加失败！');
		}
	}

	/**
	 * 添加用户组视图
	 */
	public function addGroup(){
		$title = '添加用户组';
		
		$this->assign('auth_tit',$title);
		$this->display();
	}
	/**
	 * 添加用户组表单处理
	 */
	public function addGroupHandle(){
		if (!IS_POST) {
			exit('页面错误~');
		}
		$data=array(
			'title'=>I('post.name'),
			);
		if (M('auth_group')->add($data)) {
			$this->success('添加成功');
		}else{
			$this->error('添加失败！');
		}
	}
	/**
	 * 用户组列表视图
	 */
	public function groupList(){
		$title = '用户组';
		$this->grouplist=M('auth_group')->select();
		
		$this->assign('auth_tit',$title);
		$this->display();
	}

	/**
	 * 添加权限视图
	 */
	public function addRule(){
		$title = '添加权限';
		
		$this->assign('auth_tit',$title);
		$this->display();
	}
	/**
	 * 添加权限表单处理
	 */
	public function addRuleHandle(){
		if (!IS_POST) {
			exit('页面错误~');
		}
		$data=array(
			'title'=>I('post.name'),
			'name'=>I('post.nlink')
			);
		if (M('auth_rule')->add($data)) {
			$this->success('添加成功');
		}else{
			$this->error('添加失败！');
		}
	}

	/**
	 * 分配权限视图
	 */
	public function setRule(){
		$title = '分配权限';
		$this->id=I('get.id',0);
		$rs=M('auth_group')->where('id='.I('get.id'))->getField('rules');
		$this->rs=explode(',',$rs);
		$this->rule=M('auth_rule')->select();
		
		$this->assign('auth_tit',$title);
		$this->display();
	}
	/**
	 * 更新权限表单处理
	 */
	public function setRuleHandle(){
		if (!IS_POST) {
			exit('页面错误~');
		}
		$rule=I('post.rule');
		$rule=implode(',',$rule);
		$id=I('post.id');
		$where=array('id'=>$id);
		$data=array(
			'rules'=>$rule
			);
		$rs=M('auth_group')->where($where)->save($data);

		if($rs !==false){
			$this->success('权限更新成功！');
		}else{
			$this->error('权限更新失败！请重试~');
		}

	}

	/**
	 * 添加用户视图
	 */
	public function addUser(){

		//获取所有用户组
		$title = '添加用户';
		$this->group=M('auth_group')->select();
		
		$this->assign('auth_tit',$title);
		$this->display();
	}
	/**
	 * 添加用户表单处理
	 */
	public function addUserHandle(){
		if (!IS_POST) {
			exit('页面错误~');
		}
		$data=array(
				'username'=>I('post.name'),
				'password'=>I('post.password','','md5')				
			);		
		$rs=I('post.group');
		if(!$rs)$this->error('请选择用户组！');
		if($ad=M('user')->add($data)){
				foreach ($rs as $k => $v) {
					$r1[$k]['uid']=$ad;
					$r1[$k]['group_id']=$v;
					M('auth_group_access')->add($r1[$k]);
				}
				$this->success('注册成功！');		

		}else{
			$this->error('注册失败！');
		}
	}

	/**
	 * 用户列表视图
	 */
	public function userList(){
		$title = '用户列表';
		$this->userlist=D('UserRelation')->relation(true)->field('password',true)->select();
		
		$this->assign('auth_tit',$title);
		$this->display();
	}
	
}
?>