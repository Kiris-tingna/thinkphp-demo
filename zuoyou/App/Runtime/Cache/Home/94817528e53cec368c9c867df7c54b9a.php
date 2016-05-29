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
		<link rel="stylesheet" type="text/css" href="__LESS__/work.css" />
	
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
	<div class="l">
		<ul class="nav-ul">
			<li class="active">首页</li>
			<li>产品区</li>
			<li>画报</li>
		</ul>
	</div>
	<div class="r">
		<div class="nav-login">
			<input type="text"/>
			<a href="#">登录</a>
			<a href="#">注册</a>
		</div>
	</div>
	</div>
</div>
	

	<div class="container">
		<!-- container宽度1000px -->
		<!--首页特有-->
		
<div class="detail clearfix">
	<div class="detail-inner-left l">
	<!-- 面包屑 -->
	<div class="breadnav">
		<i class="fa fa-th"></i><span>首页</span>
		<i class="fa fa-th"></i><span>产品</span>
		<i class="fa fa-th"></i><span>具体分类</span>
	</div>
	<!-- 大图片 -->
	<div class="Dpic-l"><div class="pic bg"></div></div>
	<!-- 小图片 -->
	<div class="Dpic-s clearfix">
		<div class="pic bg l"></div>
		<div class="pic bg l"></div>
		<div class="pic bg l"></div>
		<div class="pic bg l"></div>
		<div class="pic bg l"></div>
	</div>
	</div>
	<div class="detail-inner-right r">
	<!-- 名称 -->
	<!-- 基本信息 -->
	<!-- 其他信息 -->
	<!-- 物流 -->
	<!-- 规格 -->
	<!-- 颜色 -->
	<!-- 数量 -->
	<!-- 按钮 -->
	</div>
	<!-- 购物应该注意事项 -->
	<!-- 详情 -->
	<!-- 评价 -->
	<!-- 记录 -->
	<!-- 反馈 -->
</div>
<!-- <div class="detail clearfix">
		<div class="l">
	<div class="detail_wrap">
		<div class="detail_head">首页 / XXX / XXX / 产品名称</div>
		<img src="__PUBLIC__/Image/ttt2.jpg" class="detail_band"/>
	</div>
	<div class="detail_share">
		<span class="share">分享到</span>
		<a href="" class="weixin"></a>
		<a href="" class="weibo"></a>
		<a href="" class="QQ"></a>
	</div>
		</div>
		<div class="r">
			<div class="detail_wrap">
	<div class="detail_info">
		<div class="detail_name">这里是产品名称</div>
		<div class="detail_name">¥999999</div>
		<div class="detail_grey">其他的标签</div>
		<div class="detail_grey">其他的标签</div>
		<div class="detail_grey">其他的标签</div>
		<div class="detail_content">
			这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字这是叙述文字
		</div>
	</div>
	<a href="#" class="detail_btn bg_red">加入购物车</a>
	<a href="#" class="detail_btn bg_light">喜欢</a>
		</div>
		</div>
	</div>
	<div class="clearfix">
	<div class="detail-small l">
	<div class="detail_show">
		<span class="active">商品详情</span>
		<span>评价晒单</span>
		<span>成交记录</span>
	</div>
	<div class="detail_product">
		
		<div class="detail_tag">商品详情</div>
		<img src="#"/>
		<div>这是描述性的文字和图片</div>
	</div>
	<div class="detail_list">
		<div class="detail_tag">评价晒单</div>
		<ul>
			<li class="clearfix">
				<div class="a">
					<p>刚买几天就降价！</p>
					<span>2015-02-18 22:08:49</span>
				</div>
				<div class="b">
					<span>分类标签：XXXX</span>
					<span>大小参数：w=xxx / h=xxx</span>
				</div>

				<div class="c">用户名称XXX</div>
			</li>
			<li class="clearfix">
				<div class="a">
					<p>刚买几天就降价！</p>
					<span>2015-02-18 22:08:49</span>
				</div>
				<div class="b">
					<span>分类标签：XXXX</span>
					<span>大小参数：w=xxx / h=xxx</span>
				</div>

				<div class="c">用户名称XXX</div>
			</li>
			<li class="clearfix">
				<div class="a">
					<p>刚买几天就降价！</p>
					<span>2015-02-18 22:08:49</span>
				</div>
				<div class="b">
					<span>分类标签：XXXX</span>
					<span>大小参数：w=xxx / h=xxx</span>
				</div>

				<div class="c">用户名称XXX</div>
			</li>
			<li class="clearfix">
				<div class="a">
					<p>刚买几天就降价！</p>
					<span>2015-02-18 22:08:49</span>
				</div>
				<div class="b">
					<span>分类标签：XXXX</span>
					<span>大小参数：w=xxx / h=xxx</span>
				</div>

				<div class="c">用户名称XXX</div>
			</li>
			<li class="clearfix">
				<div class="a">
					<p>刚买几天就降价！</p>
					<span>2015-02-18 22:08:49</span>
				</div>
				<div class="b">
					<span>分类标签：XXXX</span>
					<span>大小参数：w=xxx / h=xxx</span>
				</div>

				<div class="c">用户名称XXX</div>
			</li>
		</ul>
	</div>
	<div class="detail_record">
		<div class="detail_tag">成交记录</div>
		<div class="detail_table">
			<span class="d">买家</span>
			<span class="e">工艺品名称</span>
			<span class="f">价格/数量</span>
			<span class="g">成交时间</span>
			<span class="h">状态</span>
		</div>
		<div class="detail_r">
			<span class="d">uesr1</span>
			<span class="e">XXXXXXXXXXXXXXX</span>
			<span class="f">￥200 / 1</span>
			<span class="g">2011-04-08 11:12:12</span>
			<span class="h">成交</span>
		</div>
		<div class="detail_r">
			<span class="d">uesr1</span>
			<span class="e">XXXXXXXXXXXXXXX</span>
			<span class="f">￥200 / 1</span>
			<span class="g">2011-04-08 11:12:12</span>
			<span class="h">成交</span>
		</div>
		<div class="detail_r">
			<span class="d">uesr1</span>
			<span class="e">XXXXXXXXXXXXXXX</span>
			<span class="f">￥200 / 1</span>
			<span class="g">2011-04-08 11:12:12</span>
			<span class="h">成交</span>
		</div>
		<div class="detail_r">
			<span class="d">uesr1</span>
			<span class="e">XXXXXXXXXXXXXXX</span>
			<span class="f">￥200 / 1</span>
			<span class="g">2011-04-08 11:12:12</span>
			<span class="h">成交</span>
		</div>
		<div class="detail_r">
			<span class="d">uesr1</span>
			<span class="e">XXXXXXXXXXXXXXX</span>
			<span class="f">￥200 / 1</span>
			<span class="g">2011-04-08 11:12:12</span>
			<span class="h">成交</span>
		</div>
		<div class="detail_r">
			<span class="d">uesr1</span>
			<span class="e">XXXXXXXXXXXXXXX</span>
			<span class="f">￥200 / 1</span>
			<span class="g">2011-04-08 11:12:12</span>
			<span class="h">成交</span>
		</div>
		<div class="page">这里是翻页样式 1 2 3 4 5 6 </div>
	</div>
	</div>

	<div class="detail-recom r">
		<div class="recom_head">
			同类推荐
		</div>
		<div class="recom_body">
			<div>
				<img src="__PUBLIC__/Image/show.jpg"/><p>商品名称</p>
			</div>
			<div>
				<img src="__PUBLIC__/Image/show.jpg"/><p>商品名称</p>
			</div>
			<div>
				<img src="__PUBLIC__/Image/show.jpg"/><p>商品名称</p>
			</div>
			<div>
				<img src="__PUBLIC__/Image/show.jpg"/><p>商品名称</p>
			</div>
			<div>
				<img src="__PUBLIC__/Image/show.jpg"/><p>商品名称</p>
			</div>
			<div>
				<img src="__PUBLIC__/Image/show.jpg"/><p>商品名称</p>
			</div>
		</div>
	</div>
</div> -->

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
		<!-- <script type="text/javascript" src="__JS__/work.js"></script> -->
	
	
	<script type="text/javascript">
		$(function() {
			$(".nav-ul").find('li').eq(1).addClass('active').siblings().removeClass('active');
		});
	</script>

</body>
</html>