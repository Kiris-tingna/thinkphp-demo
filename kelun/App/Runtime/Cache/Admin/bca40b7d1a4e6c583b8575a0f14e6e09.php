<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->    
	<title>后台首页</title>
	<link rel="stylesheet" type="text/css" href="__ADMIN__/Css/bootstrap.min.css" />
	
	<link rel="stylesheet" type="text/css" href="__ADMIN__/Css/login.css" />

</head>
<body>
	<!-- 头部文件 -->
	
		<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo U('Home/Index/index');?>">客轮票务预订系统</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav" id="mynav">
				<li class="active"><a href="<?php echo U(GROUP_NAME.'/Index/index');?>">后台首页</a></li>
				<?php if(authcheck('Admin/Auth/index',$_SESSION['uid'])): ?><li><a href="<?php echo U(GROUP_NAME.'/Auth/index');?>">权限</a></li><?php endif; ?>
				<li><a href="<?php echo U(GROUP_NAME.'/Ship/index');?>">客轮</a></li>
				</if>
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
	
	<form role="form" class="form-horizontal" action="<?php echo U('login');?>" method="post">
		<fieldset>
		<legend class="padding-top">用户登录</legend>
		<div class="form-group has-success has-feedback">
			<label for="username" class="col-sm-1 sr-only control-label">用户名</label>
			<div class="col-sm-11">
				<div class="input-group">
					<div class="input-group-addon">用户名</div>
					<input type="text" id="username" name="username" class="form-control" placeholder="Enter username">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
			</div>
		</div>
		<div class="form-group has-warning has-feedback">
			<label for="password" class="col-sm-1 sr-only control-label">密码</label>
			<div class="col-sm-11">
				<div class="input-group">
					<div class="input-group-addon">密 &nbsp;&nbsp; 码</div>
					<input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
					<span class="glyphicon glyphicon-ok-sign form-control-feedback"></span>
				</div>
				
			</div>
		</div>			
		</fieldset>
		<div class="my-center">
			<button type="submit" class="btn btn-success btn-lg btn-block">登&nbsp;&nbsp;&nbsp;录</button>
		</div>
		<div class="col-sm-11">
			<div id="myerror"></div>
		</div>
		
	</form>
	<div class="show_msg"></div>
</div>

	<!-- 脚本文件 -->
	<script type="text/javascript" src="__JS__/jquery.js"></script>
	<script type="text/javascript" src="__ADMIN__/Js/bootstrap.min.js"></script>
	
		
	
</body>
</html>