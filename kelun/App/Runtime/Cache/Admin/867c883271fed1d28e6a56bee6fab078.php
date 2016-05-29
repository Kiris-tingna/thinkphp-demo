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
	
    <style type="text/css">
    .my-class{
        display: inline-block;
        vertical-align: middle;
        width: 4px;
        height: 4px;
        border-radius: 2px;
        background: #ffff00
    }
    .my-line{
        display: inline-block;
        vertical-align: middle;
        margin-top: -0.5px;
        margin-left: 5px;
        margin-right: 5px;
        width: 70%; 
        height: 1px;
        border-radius: 0px;
        background: #ffff00
    }
    </style>
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
                    <h3 class="panel-title">客轮列表</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>客轮id</th> 
                            <th>客轮号</th>
                            <th>起点</th>
                            <th>终点</th>
                            <th>日期</th>
                            <th>开出时间</th>
                            <th>到达时间</th>
                            <th>舱位等级</th>
                            <th>票价</th>
                            <th>预设舱位数</th>
                            <th>剩余舱位数</th>
                            <th>订票数量</th>
                            <th style="width:100px">操作</th>
                        </tr>
                        <?php if(is_array($re)): foreach($re as $key=>$v): ?><tr>
                                    <td><?php echo ($v["ship_id"]); ?></td>
                                    <td><?php echo ($v["ship_num"]); ?></td>
                                    <td><?php echo ($v["start"]); ?></td>
                                    <td><?php echo ($v["end"]); ?></td>
                                    <td><?php echo ($v["date"]); ?></td>
                                    <td><?php echo ($v["begin"]); ?></td>
                                    <td><?php echo ($v["arrival"]); ?></td>
                                    <td><?php echo ($v["level"]); ?></td>
                                    <td><?php echo ($v["price"]); ?></td>
                                    <td><?php echo ($v["intiliaze_num"]); ?></td>
                                    <td><?php echo ($v["remain_num"]); ?></td>
                                    <td><?php echo ($v['intiliaze_num'] - $v['remain_num']) ?></td>
<td>
    <a href="<?php echo U(GROUP_NAME.'/Ship/update',['id' => $v['ship_id']]);?>" class="btn btn-success btn-xs">修改</a>
    <!-- Button trigger modal -->
    <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#Modal-<?php echo ($key); ?>">删除</a>

<!-- Modal隐藏层 -->
<div class="modal fade" id="Modal-<?php echo ($key); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">记录删除<small>·注意将无法恢复</small></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="alert alert-warning" role="alert"><h5>您是否确认要删除客轮记录</h5></div>
          <div class="row">
            <div class="col-md-4 text-right"><p>客轮到达起点</p></div>
            <div class="col-md-2"><span class="my-class"></span><span class="my-line"></span><span class="my-class"></span></div>
            <div class="col-md-4 "><p><?php echo ($v["start"]); ?></p></div>
          </div>
          <div class="row">
            <div class="col-md-4 text-right"><p>客轮到达终点</p></div>
            <div class="col-md-2"><span class="my-class"></span><span class="my-line"></span><span class="my-class"></span></div>
            <div class="col-md-4 "><p><?php echo ($v["end"]); ?></p></div>
          </div>
          <div class="row">
            <div class="col-md-4 text-right"><p>客轮日期</p></div>
            <div class="col-md-2"><span class="my-class"></span><span class="my-line"></span><span class="my-class"></span></div>
            <div class="col-md-4 "><p><?php echo ($v["date"]); ?></p></div>
          </div>
          <div class="row">
            <div class="col-md-4 text-right"><p>客轮票价</p></div>
            <div class="col-md-2"><span class="my-class"></span><span class="my-line"></span><span class="my-class"></span></div>
            <div class="col-md-4 "><p><?php echo ($v["price"]); ?></p></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">取消</button>
        <a class="btn btn-danger btn-sm" href="<?php echo U(GROUP_NAME.'/Ship/delete',['id' => $v['ship_id']]);?>">删除</a>
      </div>
    </div>
  </div>
</div>
</td>
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