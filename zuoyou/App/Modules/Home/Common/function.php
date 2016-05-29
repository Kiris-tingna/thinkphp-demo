<?php
/**
 * 获取目录的结构
 * $path 目录名
 * $suffix 后缀
 */
 function dirtree($path , $suffix = '') {
    $handle = opendir($path);
    $itemArray=array();
    while (false !== ($file = readdir($handle))) {
    	//列出所有文件并去掉'.'和'..'
        if (($file=='.')||($file=='..')){
        }elseif (is_dir($path.$file)) {
                try {
                    $dirtmparr=dirtree($path.$file.'/');
                } catch (Exception $e) {
                    $dirtmparr=null;
                };
                $itemArray[$file]=$dirtmparr;
            }else{
                // 中文转换编码
                $file =  iconv("GBK", "UTF-8", $file);
                // 后缀
                $pathinfo = pathinfo($file);
                // 压入
                if($suffix !='' && $pathinfo['extension'] != $suffix)
                {}else{
                    array_push($itemArray, $file);
                }
            }
        }
    return $itemArray;
 }
    // /**
    // * mp3获取原信息函数
    // * @param  [type] $file [description]
    // * @return [type]       [description]
    // */
    // function mp3($file){
    //     // 引入类文件
    //     import('Extend.mp3file',APP_PATH);

    //     $mp3 = new mp3file($file);
    //     $meta = $mp3->get_metadata();//mp3源信息
        
    //     return $meta;
    // }
    
    /**
     * 解析歌词函数
     * @param [String] $file [歌词文件名]
     */
    function PraseLrc($file)
    {
        // 写入字符串
        $lrc = file_get_contents('./Data/'.$file );
        $l_time = array();               //时间数组
        $l_text = array();               //歌词文本

        $arr   = explode("\r\n" , $lrc);//以回车分割字符串为数组
        $arr_l = count($arr);           //数组长度
        // 正则表达式
        $reg = '/\[(\d{2})\:(\d{2})\.(\d{2})\](.*)/' ;

        for( $i = 0 ; $i < $arr_l ; $i ++){
            if(preg_match( $reg , $arr[$i] , $match ))
            {
                $time = (( $match[1] * 60 + $match[2] ) * 1000 ) + $match[3] ;//实际毫秒数
                // 压入数组
                array_push($l_time , $time);
                array_push($l_text , $match[4]);
            }
            // echo "<div id=".$hms.">".$match[4]."</div>";
        }
        // 压入返回数组
        $result['time'] = $l_time;
        $result['data'] = $l_text;

        return $result;
    }
   
?>