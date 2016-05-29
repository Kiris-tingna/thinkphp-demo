<?php  
	/**
	* sse 测试控制器
	*/
	class SseAction extends Action
	{
		// 主要
		public function index()
		{
			$this->display();
		}
		// 更新方法
		public function push()
		{
			while(true){
				$data = date("Y-m-d H:i:s");
				// 用扩展的sse返回
				$this->ajaxReturn($data,'SSE');
				sleep(15);
			}
		}
	}
?>