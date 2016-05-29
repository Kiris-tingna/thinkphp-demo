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
    <div class="row">
        <div class="col-xs-2">
            <!-- 引入左侧菜单 -->
            <div class="list-group">
    <!-- bootstrap列表样式 -->
    <a href="#" class="list-group-item active">客轮管理</a>
        <a href="<?php echo U(GROUP_NAME.'/Ship/select');?>" class="list-group-item">查询客轮信息</a>
        <a href="<?php echo U(GROUP_NAME.'/Ship/add');?>" class="list-group-item">录入客轮信息</a>
        <a href="<?php echo U(GROUP_NAME.'/Ship/order');?>" class="list-group-item">查询全部订票信息</a>
</div>
        </div>
        <div class="col-xs-10">
<form class="form-horizontal" action="<?php echo U(GROUP_NAME.'/Ship/addHandle');?>" method="post">
  <div class="form-group">
    <label for="input1" class="col-sm-2 control-label">客轮号</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="ship_num" id="input1" placeholder="客轮号"/>
    </div>
  </div>
  <div class="form-group">
    <label for="input2" class="col-sm-2 control-label">起点</label>
    <div class="col-sm-10">
      <input type="text" name="start"class="form-control" id="input2" placeholder="起点"/>
    </div>
  </div>
  <div class="form-group">
    <label for="input3" class="col-sm-2 control-label">终点</label>
    <div class="col-sm-10">
      <input type="text" name="end" class="form-control" id="input3" placeholder="终点"/>
    </div>
  </div>
  <div class="form-group">
    <label for="input4" class="col-sm-2 control-label">开出时刻</label>
    <div class="col-sm-10">
      <input type="date" name="begin" class="form-control" id="input4" placeholder="开出时刻"/>
    </div>
  </div>
  <div class="form-group">
    <label for="input5" class="col-sm-2 control-label">到达时刻</label>
    <div class="col-sm-10">
      <input type="date" name="arrival" class="form-control" id="input5" placeholder="到达时刻"/>
    </div>
  </div>
  <div class="form-group">
    <label for="input6" class="col-sm-2 control-label">舱位等级</label>
    <div class="col-sm-10">
      <input type="text" name="level" class="form-control" id="input6" placeholder="舱位等级"/>
    </div>
  </div>
  <div class="form-group">
    <label for="input7" class="col-sm-2 control-label">票价</label>
    <div class="col-sm-10">
      <input type="number" name="price" class="form-control" id="input7"  placeholder="票价"/>
    </div>
  </div>
  <div class="form-group">
    <label for="input8" class="col-sm-2 control-label">预设座位</label>
    <div class="col-sm-10">
      <input type="text" name="intiliaze_num" class="form-control" id="input8" placeholder="预设座位"/>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">提交</button>
    </div>
  </div>
</form>
        </div>
    </div>

	<!-- 脚本文件 -->
	<script type="text/javascript" src="__JS__/jquery.js"></script>
	<script type="text/javascript" src="__ADMIN__/Js/bootstrap.min.js"></script>
	
		
	
</body>
</html>