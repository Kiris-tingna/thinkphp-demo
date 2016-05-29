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
        
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">订单列表</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>订单号</th>
                            <th>姓名</th>
                            <th>身份证号</th>
                            <th>客轮号</th>
                            <th>订单日期</th>
                            <th>是否保险</th>
                            <th>订票状态</th>
                        </tr>
                        <?php if(is_array($re)): foreach($re as $key=>$v): ?><tr>
                                    <td><?php echo ($v["oid"]); ?></td>
                                    <td><?php echo ($v["name"]); ?></td>
                                    <td><?php echo ($v["passport_id"]); ?></td>
                                    <td><?php echo ($v["ship_n"]); ?></td>
                                    <td><?php echo ($v["date"]); ?></td>
                                    <td><?php echo ($v["is_baoxian"]); ?></td>
                                    <td><?php echo ($v["state"]); ?></td>
                                </tr><?php endforeach; endif; ?>
                    </table>
                </div>
            </div>

        </div>
    </div>

	<!-- 脚本文件 -->
	<script type="text/javascript" src="__JS__/jquery.js"></script>
	<script type="text/javascript" src="__ADMIN__/Js/bootstrap.min.js"></script>
	
		
	
</body>
</html>