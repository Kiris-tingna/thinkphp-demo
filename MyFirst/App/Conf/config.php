<?php
return array(
	// 数据库配置
	'DB_HOST'				=> '127.0.0.1',		//数据库地址
	'DB_USER'				=> 'root',			//数据库用户名
	'DB_PWD'                => 'admin',         // 密码
	'DB_NAME'               => 'music',         // 数据库名
	'DB_PREFIX'             => 'think_',        // 数据表名前缀
	// 调试信息
	'SHOW_PAGE_TRACE'		=>true,
	// url模式
	'URL_MODEL' => 2,
	// 分组配置
	'APP_GROUP_LIST' 	=>'Home,Admin',			//开启分组
	'APP_GROUP_MODE' 	=> 1,					// 分组模式
	'APP_GROUP_PATH' 	=>'Modules',			// 独立分组文件夹
	'DEFAULT_GROUP'		=>'Home',				//默认分组

	'TMPL_PARSE_STRING'	=> array(
		//公共目录
		'__CSS__'	=>	__ROOT__.'/Public/Css',
		'__JS__'	=>	__ROOT__.'/Public/Js',
		'__LESS__'	=>	__ROOT__.'/Public/Less',
	),
);
?>