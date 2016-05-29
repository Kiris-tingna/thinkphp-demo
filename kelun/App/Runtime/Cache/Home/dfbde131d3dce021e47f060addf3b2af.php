<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>首页</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">


  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel="canonical" href="http://www.example.com/">
  -->
    <link rel="stylesheet" href="__HOME__/Css/normalize.css">
    <link rel="stylesheet" href="__HOME__/Css/amazeui.min.css">
    <link rel="stylesheet" href="__HOME__/Css/app.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
  href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->


    <header class="am-topbar">
  <div class="am-g">
  <div class="am-u-md-9 am-u-sm-centered">
    <h1 style="margin-top:10px">
    <a href="#">客轮票预订系统</a>
    </h1>
  </div>
  </div>
</header>


<div class="am-g am-g-fixed">
  <div class="am-u-md-2">
    
      <div class="am-btn-group-stacked">
      <button type="button" class="am-btn am-btn-success am-btn-default" onclick="javascript:window.location.href='<?php echo U('Home/Index/index');?>'">查询客轮</button>
      <button type="button" class="am-btn am-btn-success am-btn-default" onclick="javascript:window.location.href='<?php echo U('Home/Index/index');?>'">查询订票</button>
      <button type="button" class="am-btn am-btn-success am-btn-default" onclick="javascript:window.location.href='<?php echo U('Admin/Login/index');?>'">管理员登录</button>
    </div>
    
  </div>

  <div class="am-u-md-10">
    

<div class="am-u-md-4 am-fr" style="margin-top:65px">
<form  class="am-form am-form-horizontal" action="<?php echo U(GROUP_NAME.'/Index/search');?>" method="post">
    
    <p><input type="text" name="passport_id" placeholder="身份证号码" class="am-form-field am-radius"/></p>
    <input type="submit"  class="am-btn am-btn-secondary am-btn-xs" value="搜索"/>
</form>
</div>

<div class="am-u-md-6 am-fl">
<form  class="am-form am-form-inline" action="<?php echo U(GROUP_NAME.'/Index/index_s');?>" method="post">
    <p>
    <input type="text" name="start" placeholder="起点" class="am-form-field am-round"/></p>
    <p>
    <input type="text" name="end" placeholder="终点" class="am-form-field am-round"/></p>
    <button type="submit" class="am-btn am-btn-secondary am-btn-xs">搜索</button>

</form>
</div>

<div class="am-u-md-10 am-scrollable-horizontal am-margin-top-sm">
  <table class="am-table am-table-bordered am-table-striped am-table-compact">
<thead>
    <tr>
    <th>客轮号</th>
    <th>起点</th>
    <th>终点</th>
    <th>日期</th>
    <th>开出时间</th>
    <th>达到时刻</th>
    <th>舱位等级</th>
    <th>票价</th>
    <th>剩余舱位数</th>
    <th>操作</th>
    </tr>
</thead>
<tbody>
    <?php if(is_array($result)): foreach($result as $key=>$v): ?><tr>
    <td><?php echo ($v["ship_num"]); ?></td>
    <td><?php echo ($v["start"]); ?></td>
    <td><?php echo ($v["end"]); ?></td>
    <td><?php echo ($v["date"]); ?></td>
    <td><?php echo ($v["begin"]); ?></td>
    <td><?php echo ($v["arrival"]); ?></td>
    <td><?php echo ($v["level"]); ?></td>
    <td><?php echo ($v["price"]); ?></td>
    <td><?php echo ($v["remain_num"]); ?></td>
    <td>
        <?php if($v['remain_num'] != 0): ?><a class="am-btn am-btn-warning am-btn-sm" href="<?php echo U(GROUP_NAME.'/Index/order',['id'=>$v['ship_id']]);?>">
        <i class="am-icon-shopping-cart"></i>
        订票
        </a>
        <?php else: ?>
        <a class="am-btn am-btn-warning am-btn-sm am-disabled" href="<?php echo U(GROUP_NAME.'/Index/order',['id'=>$v['ship_id']]);?>">
        <i class="am-icon-shopping-cart"></i>
        订票
        </a><?php endif; ?>
    </td>
</tr><?php endforeach; endif; ?>
</tbody>
  </table>
</div>


</div>

</div>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/polyfill/rem.min.js"></script>
<script src="assets/js/polyfill/respond.min.js"></script>
<script src="assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="__HOME__/Js/jquery.min.js"></script>
<script src="__HOME__/Js/amazeui.min.js"></script>
<!--<![endif]-->

</body>
</html>