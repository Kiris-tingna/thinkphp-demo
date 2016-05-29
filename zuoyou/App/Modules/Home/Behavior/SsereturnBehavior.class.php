<?php  
	/**
	* sse返回
	*/
	class SsereturnBehavior extends Behavior
	{
		// 行为参数定义
    	protected $options   =  array(
        	
    	);
    	// 行为扩展的执行入口必须是run
    	public function run(&$data){
			header("Content-type:text/event-stream");
    		ob_end_clean(); 
			ob_implicit_flush(true);
			//用于替代 ob_flush() flush()的每一次调用
            $sse = "data:".$data."\n\n";//数据格式
            echo $sse;
		}
	}
?>