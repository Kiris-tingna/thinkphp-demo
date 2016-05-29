<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- html5 文档结构 -->
<html lang="zh-CN">
<head>
	<title><?php echo ($title); ?></title>
	<meta charset="utf-8">
	<!-- css部分 -->
	
		<link rel="stylesheet" type="text/css" href="__CSS__/font-awesome.min.css" /><!-- 小图标 -->
		<link rel="stylesheet" type="text/css" href="__CSS__/Scrollbar.css" />
		<!-- 自开发样式 -->
		<link rel="stylesheet" type="text/css" href="__LESS__/core.css" /><!-- 核心通用编译版本 -->
		<link rel="stylesheet" type="text/css" href="__LESS__/Player-style.css" /><!-- 个性组件编译版本 -->
	
</head>
<body>
	
		<header>
			<h1 class="ss"><?php echo ($title); ?></h1>
		</header>
	

	<div class="container">
		<!-- 幻灯片 -->
		
		<!-- 列表 -->
 		
 		<div id="playlist" class="">
 			<div class="pL-head clearfix">
 				<span class="l">歌曲名(10)</span>
 				<span class="l">演唱者</span>
 				<span class="l">专辑</span>
 			</div>
 			<div class="pL-body">
		 		<ul id="pL-body-ul">
		 		<!-- 循环输出目录 -->
		 		<?php if(is_array($dir)): foreach($dir as $key=>$v): ?><li class="pL-body-item clearfix" title="<?php echo ($v); ?>" mp="<?php echo ($v); ?>">
		 				<div class="pL-body-check"><i class="fa fa-square-o"></i></div>
		 				<div class="pL-body-sort"><em><?php echo ($key+1); ?></em></div>
						<span class="l"><?php echo ($v); ?></span>
						<span class="l">演唱者</span>
						<span class="l">专辑1</span>
		 				<div class="pL-body-control">
		 					<i class="fa fa-plus-square"></i><!--添加-->
		 					<i class="fa fa-arrow-down"></i><!--下载-->
		 					<i class="fa fa-heart-o"></i>
		 				</div>
					</li><?php endforeach; endif; ?>
		 		</ul>
		 	</div>
 		</div>
 	
 		<!-- 播放器和歌词 -->
 		
 	<!-- 播放器容器 -->
 	<div id="main">
 	<!-- 播放器开始 -->
 	<div id="player">
 	<!-- 封面和详细信息 -->
	<div class="cover"></div>
	<!-- 播放部分 -->
	<div class="ctrl">
		<div class="tag">						<!-- 标签部分 -->
			<strong>Title</strong>				<!-- 歌曲名 -->
			<div><i class="fa fa-tags fa-fw"></i><span class="artist">Artist</span></div>	<!-- 歌手 -->
			<div><i class="fa fa-heart-o fa-fw"></i><span class="album">Album</span></div>	<!-- 唱片封面 -->
		</div>									<!-- 标签部分结束 -->
		<div class="control">					<!-- 控制部分 -->
			<div class="l">
				<div class="rewind icon"><i class="fa fa-step-backward fa-fw"></i></div>	<!-- 前一曲 -->
				<div class="playback icon">
					<i class="fa fa-play fa-fw"></i>
				</div>							<!-- 播放/暂停 -->
				<div class="fastforward icon"><i class="fa fa-step-forward fa-fw"></i></div><!-- 后一曲 -->
			</div>
			<div class="volume r">				<!-- 音量控制 -->
				<div class="mute icon l"><i class="fa fa-volume-up fa-fw"></i></div>	<!-- 静音/声音 -->
				<div class="slider l">
					<div class="pace"></div>	<!-- 目前音量 -->
				</div>
			</div>								<!-- 音量控制结束 -->
		</div>									<!-- 控制面板部分结束 -->
		<div class="progress">					<!-- 进度条部分 -->
			<div class="slider">
				<div class="loaded"></div>		<!-- 全部长度 -->
				<div class="pace"></div>		<!-- 已播放长度 -->
			</div>
			<div class="timer l">0:00</div>		<!-- 时间控制 -->
			<div class="r">
				<div class="icon repeat"><i class="fa fa-refresh"></i><span>循环播放</span></div> <!-- 单曲循环 -->
				<div class="icon shuffle"><i class="fa fa-random "></i><span>随机播放</span></div><!-- 随机播放 -->
			</div>
		</div>									<!-- 进度条部分结束 -->
	</div>
	<!-- 播放部分结束 -->
	</div>
	<!-- 播放器结束 -->
	<!-- 歌词 -->
	<div  id="lrc" class="">
		<div class="lrc-bg"></div><!-- 歌词背景 -->
		<div class="lrc-main">
			<div class="lrc-wrap">
	 		<!-- 歌词主体 -->
	 		<ul>
	 		</ul>
	 		</div>
	 	</div>
 	</div>
 	<!-- 歌词结束 -->
 	</div>
 	<!-- 播放器容器结束 -->
 	
 	</div>
 	<!-- 底部 -->
 	
 	<!-- js部分 -->
	
 		<!-- 通用插件 -->
 		<script type="text/javascript" src="__JS__/jquery.js"></script>
 		<script type="text/javascript" src="__JS__/jquery.easing.min.js"></script>
 		<script type="text/javascript" src="__JS__/jquery-ui.js"></script>
 		<!-- 已有插件 -->
 		<script type="text/javascript" src="__JS__/jquery.Scrollbar.js"></script>
		<!-- 开发插件 -->
		<script type="text/javascript" src="__JS__/lcy.player.js"></script>
		
	
	<!-- 个性化js -->
	
		<script type="text/javascript">
		// ajax请求lrc的控制器
		var url = "<?php echo U(GROUP_NAME.'/Index/lrc');?>";
		//滑块
		$("#pL-body-ul").mCustomScrollbar({
			scrollButtons:{
 				enable:true,
 				scrollType:"continuous",
 				scrollSpeed:40,//滚动速度
 				scrollAmount:40
 			},
 			horizontalScroll:false,//水平不滚动
 			theme:"dark"
		});
		</script>
	
</body>
</html>