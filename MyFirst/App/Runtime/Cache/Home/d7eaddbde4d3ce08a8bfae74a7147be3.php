<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- html5 文档结构 -->
<html lang="zh-CN">
<head>
	<title><?php echo ($title); ?></title>
	<meta charset="utf-8">
	<!-- css部分 -->
	
	<!-- 自开发样式 -->
	<link rel="stylesheet" type="text/css" href="__LESS__/core.css" /><!-- 核心通用编译版本 -->
	<link rel="stylesheet" type="text/css" href="__LESS__/Ppt-style.css" /><!-- 个性组件编译版本 -->

</head>
<body>
	
	<header>
		<h1 class="ss"><?php echo ($title); ?></h1>
	</header>


	<div class="container">
		<!-- 幻灯片 -->
		
	<!-- num为测试参数 -->
	<?php echo W('Ppt',array('num'=>1));?>

		<!-- 列表 -->
 		
 		<!-- 播放器和歌词 -->
 		
 	</div>
 	<!-- 底部 -->
 	
 	<!-- js部分 -->
	
	<!-- 通用插件 -->
 	<script type="text/javascript" src="__JS__/jquery.js"></script>
 	<script type="text/javascript" src="__JS__/jquery.easing.min.js"></script>
 		<!-- 插件 -->
 	<script type="text/javascript" src="__JS__/lcy.slider.js"></script>

	<!-- 个性化js -->
	
	<script type="text/javascript">
	//幻灯片设置参数设置
	$('#ppt').cubeslider({});
	</script>

</body>
</html>