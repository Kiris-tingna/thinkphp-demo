<?php  
/**
* 	轮播组件
*/
class SlideWidget extends Widget
{
	public function render($data)
	{
		return $this->renderFile('banner',$data);
	}
}
?>