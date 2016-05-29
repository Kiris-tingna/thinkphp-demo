<?php  
	/**
	* ppt 组件
	*/
	class PptWidget extends Widget
	{
		// 渲染方法
		public function render($data)
		{
			return $this->renderFile('Ppt',$data);//留空为与本Widget同名(区分大小写)的模板
			// renderFile();// = renderFile('Widget');
			// 不与Widget同名则需要参数
			// renderFile('template');
			// 如果需要调用子目录下面的模板，则采用
			// renderFile('parent/child')
		}
		
	}
?>