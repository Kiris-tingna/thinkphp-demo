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
    
    <style>
    .mu>div>span{
        display: inline-block;
        width: 100px;
        margin: 10px 0px;
    }
    </style>
    <div class="am-u-sm-10">

    <div class="am-tabs" data-am-tabs>
  <ul class="am-tabs-nav am-nav am-nav-tabs">
    <li class="am-active"><a href="#tab1">票务信息</a></li>
    <li><a href="#tab2">客轮信息</a></li>
  </ul>

  <div class="am-tabs-bd">
    <div class="am-tab-panel am-active" id="tab1">
    <div class="am-g mu">
    <div class="am-u-sm-12"><span class="am-text-secondary">客轮号</span><span class="am-text-xs"><?php echo ($ship["ship_num"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">舱位等级</span><span class="am-text-xs"><?php echo ($ship["level"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">票价</span><span class="am-text-xs"><?php echo ($ship["price"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">起点</span><span class="am-text-xs"><?php echo ($ship["start"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">终点</span><span class="am-text-xs"><?php echo ($ship["end"]); ?></span></div>
    <div class="am-u-sm-12"><span class="am-text-secondary">日期</span><span class="am-text-xs" style="width:200px"><?php echo ($ship["date"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">开出时间</span><span class="am-text-xs"><?php echo ($ship["begin"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">达到时刻</span><span class="am-text-xs"><?php echo ($ship["arrival"]); ?></span></div>
    <div class="am-u-sm-12"><span class="am-text-secondary">剩余舱位数</span><span class="am-text-xs"><?php echo ($ship["remain_num"]); ?></span></div>
    </div>
  </div>

    <div class="am-tab-panel" id="tab2">
        <div class="am-tab-panel am-active" id="tab1">
    <div class="am-g mu">
    <div class="am-u-sm-12"><span class="am-text-secondary">姓名</span><span class="am-text-xs"><?php echo ($re["name"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">身份证号码</span><span class="am-text-xs"><?php echo ($re["passport_id"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">客船号</span><span class="am-text-xs"><?php echo ($ship["ship_num"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">日期</span><span class="am-text-xs"><?php echo ($re["date"]); ?></span></div>
    <div class="am-u-sm-6"><span class="am-text-secondary">保险状态</span><span class="am-text-xs"><?php if($re['is_baoxian'] == 1): ?><span class="am-badge am-badge-success">已保险</span>
            <?php else: ?>
            <span class="am-badge am-badge-danger">未保险</span><?php endif; ?></span></div>
    <div class="am-u-sm-12"><span class="am-text-secondary">订票状态</span><span class="am-text-xs"><?php if($re['state'] == 1): ?><span class="am-badge am-badge-success">SUCCESS</span>
            <?php else: ?>
            <span class="am-badge am-badge-danger">FAIL</span><?php endif; ?></span></div>
    
    </div>
  </div>
  
    </div>
</div>
  </div>
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