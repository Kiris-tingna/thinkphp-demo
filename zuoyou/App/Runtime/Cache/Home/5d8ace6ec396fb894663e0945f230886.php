<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- html5 文档结构 -->
<html lang="zh-CN">
<head>
	<title><?php echo ($title); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!-- css部分 -->
	
		<link rel="stylesheet" type="text/css" href="__CSS__/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="__LESS__/core.css" />
		<link rel="stylesheet" type="text/css" href="__LESS__/style.css" />
	
</head>
<body>
	
		<!-- \tou\\ -->
		<!-- 头部文件 -->
<div id="nav" class="nav">
	<div class="nav-wrap clearfix">
	<div class="l logo">
		<div class="nav-bg"></div>
		<span class="nav-text">左柚的logo图片区域</span>
	</div>
	<!-- <div class="l">
		<ul class="nav-ul">
			<li class="active">首页</li>
			<li>产品区</li>
			<li>画报</li>
		</ul>
	</div> -->
	<div class="l">
		<div class="nav-search">
			<form id="" class="w-search" action="" method="" autocomplete="off">
			<label class="w-text">
				<input class="w-input" type="text" name="" placeholder="请输入搜索关键字"/>
			</label>
		
			<button class="w-icon" type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<div class="r">
		<div class="nav-login">
			
			<a href="#">登录</a>
			<a href="#">注册</a>
		</div>
	</div>
	</div>
</div>
	

	<div class="container">
		<!-- container宽度1000px -->
		<!--首页特有-->
		  <!--共有主体-->
		  <!--首页特有-->
		<!-- 页面三部分 -->
	</div>

	
		<!-- \wei\\ -->
		<div id="footer">
	<div class="footer-inner">
		<div class="footer-top">
			<div class="unit">
				<div class="a">合作</div>
				<div class="b">
					<a href="#" >合作1</a>
					<a href="#" >合作2</a>
					<a href="#" >合作3</a>
					<a href="#" >合作4</a>
					<a href="#" >合作5</a>
				</div>	
			</div>
			<div class="unit">
				<div class="a">官方</div>
				<div class="b">
					<a href="#" >官方1</a>
					<a href="#" >官方2</a>
					<a href="#" >官方3</a>
					<a href="#" >官方4</a>
					<a href="#" >官方5</a>
				</div>	
			</div>
			<div class="unit">
				<div class="a">声明</div>
				<div class="b">
					<a href="#" >声明1</a>
					<a href="#" >声明2</a>
					<a href="#" >声明3</a>
					<a href="#" >声明4</a>
					<a href="#" >声明5</a>
				</div>	
			</div>
			<div class="unit">
				<div class="a">功能</div>
				<div class="b">
					<a href="#" >功能1</a>
					<a href="#" >功能2</a>
					<a href="#" >功能3</a>
					<a href="#" >功能4</a>
					<a href="#" >功能5</a>
				</div>	
			</div>
		</div>
		<div class="footer-bottom">
			<p>© -2015 XXX有限公司 版权所有</p>
		</div>
	</div>
</div>
	
 	<!-- js部分 -->
	
		<script type="text/javascript" src="__JS__/jquery.js"></script>
		<!-- sse对象 -->
		<script type="text/javascript">
			var url ="<?php echo U(GROUP_NAME.'/Sse/push');?>";
			var es = null;
			if(es) {
				es.close();
				es= null;
			}
			window.onbeforeunload = function(){  
    			es.close();
    			es= null;
  			}
			es = new EventSource(url);
			es.addEventListener("message",function(e){
				// 回调函数
				$("#sse-frame").append(e.data + '<br/>');
			},false);
		</script>
	
	
		<script type="text/javascript">
			$(function() {
				$(".nav-ul").find('li').eq(0).addClass('active').siblings().removeClass('active');
			});
		</script>
	
</body>
</html>