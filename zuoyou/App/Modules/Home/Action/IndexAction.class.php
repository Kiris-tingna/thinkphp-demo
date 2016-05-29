<?php  
	/**
	* 垂直电商网站
	*/
	class IndexAction extends Action
	{
		/**
		 * [首页控制器]
		 * @return [type] [description]
		 */
		public function index()
		{	
			$this->assign('title','左柚-首页');
			$this->display();
		}
		/**
		 * [瀑布流页面]
		 * @return [type] [description]
		 */
		public function water()
		{
			$this->assign('title','左柚-画报');
			$this->display();
		}
		/**
		 * [详情页]
		 * @return [type] [description]
		 */
		public function detail()
		{
			$this->assign('title','左柚-产品');
			$this->display();
		}
		public function cate()
		{	
			$this->display();
		}
	}
?>