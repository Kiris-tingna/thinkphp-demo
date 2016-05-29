<?php
return array(
	//'配置项'=>'配置值'
	'APP_GROUP_LIST' 	=>'Home,Admin',			//开启分组
	'APP_GROUP_MODE' 	=> 1,					// 分组模式
	'APP_GROUP_PATH' 	=>'Modules',			// 独立分组文件夹
	'DEFAULT_GROUP'		=>'Home',				//默认分组

	'DB_TYPE'	=>	'mysql',
	'DB_HOST'	=>	'localhost',
	'DB_NAME'	=>	'kelun',
	'DB_USER'	=>	'root',
	'DB_PWD'	=>	'admin',
	'DB_PORT'	=> 	3306,
	'DB_PREFIX'	=>	'think_',

	//
	'TMPL_PARSE_STRING'	=> array(
		//公共目录
		'__CSS__'	=>	__ROOT__.'/Public/Css',
		'__JS__'	=>	__ROOT__.'/Public/Js',
		'__LESS__'	=>	__ROOT__.'/Public/Less',
	),
	'HTML_CACHE_ON'	=>	false,
	// url模式
	'URL_MODEL' => 2,
	'URL_HTML_SUFFIX' =>	''
);
?>