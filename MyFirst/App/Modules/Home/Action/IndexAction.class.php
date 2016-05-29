<?php
class IndexAction extends Action {
    /**
     * 主控制器
     * @return [type] [description]
     */
    public function index(){
    	// 设置目录
    	$path = "./Data";
        //目录名 获取的文件后缀
    	$dir = dirtree($path , 'mp3');
    	$lrc = dirtree($path , 'lrc');
        

    	$this->title = "Music";

    	$this->assign('dir',$dir);
        $this->assign('lrc',$lrc);
       
		$this->display('index');
    }
    
    // lrc歌词方法
    public function lrc()
    {
        // lrc文本名字
        $name = $_POST['name'];
        $result = PraseLrc($name) ;
        
        $this->ajaxReturn($result);
    }
}