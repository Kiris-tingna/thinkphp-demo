<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- meta 渲染最高版本ie内核 -->
	<meta name="renderer" content="webkit"><!-- 页面需默认用极速核 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="copyright" 	content="内容"><!-- 版权 -->
	<meta name="keywords" 	content="内容"><!-- 关键字 -->
	<meta name="description"content="内容"><!-- 描述 -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->    
	<title><?php echo ($auth_tit); ?></title>
	<link rel="stylesheet" type="text/css" href="__ADMIN__/Css/bootstrap.min.css" />
	
	
</head>
<body>
	<!-- 头部文件 -->
	
		<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Memory</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="mynav">
				<li class="active"><a href="<?php echo U(GROUP_NAME.'/Index/index');?>">后台首页</a></li>
				<?php if(authcheck('Admin/Auth/index',$_SESSION['uid'])): ?><li><a href="<?php echo U(GROUP_NAME.'/Auth/index');?>">权限</a></li><?php endif; ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (session('username')); ?> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="<?php echo U(GROUP_NAME.'/Login/logout');?>">退出</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->			
	</nav>
</div>
	
	<!-- 左列边 -->
	
	
	<!-- 主体 -->
	
	<div class="container">
	<div class="row">
		<div class="col-xs-2">
			<!-- 引入左侧菜单 -->
			<?php $cate=M('cate')->select(); ?>
<div class="list-group">
	<!-- bootstrap列表样式 -->
	<a href="#" class="list-group-item active">权限管理</a>
	<?php if(is_array($cate)): foreach($cate as $key=>$c): if(authcheck(GROUP_NAME.'/'.$c[alink],$_SESSION['uid'])): ?><a href="<?php echo U("$c[alink]");?>" class="list-group-item"><?php echo ($c["catename"]); ?> </a><?php endif; endforeach; endif; ?>
</div>
		</div>
		<div class="col-xs-10">
			<!-- 右侧 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">添加栏目</h3>
				</div>
				<div class="panel-body">
					<form role="form" class="form-horizontal" action="<?php echo U(GROUP_NAME.'/Auth/addCateHandle');?>" method="post">
						<div class="form-group">
							<div class="col-sm-1"></div>
							<div class="input-group col-sm-7">
								<div class="input-group-addon">栏目名称</div>
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter nav name">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-1"></div>
							<div class="input-group col-sm-7">
								<div class="input-group-addon">栏目链接</div>
								<input type="text" class="form-control" name="nlink" id="nlink" placeholder="Enter nav link">
							</div>
						</div>


						<div class="form-group">
							<div class="col-sm-1"></div>
							<div class="input-group col-sm-7">
								<input type="submit" class="btn btn-success" value="添加">
							</div>
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>
</div>


	<!-- 脚本文件 -->
	<script type="text/javascript" src="__JS__/jquery.js"></script>
	<script type="text/javascript" src="__ADMIN__/Js/bootstrap.min.js"></script>
	
		<!-- Auth 的 js控制 -->
	<script type="text/javascript">
	$(function(){
		//菜单高亮
		$("#mynav li").eq(1).addClass('active').siblings().removeClass('active');
	});
	</script>
	
</body>
</html>