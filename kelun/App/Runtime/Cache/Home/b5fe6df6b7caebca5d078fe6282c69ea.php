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
    
<form class="am-form am-form-horizontal" action="<?php echo U(GROUP_NAME.'/Index/orderHandel');?>" method="post">
    <input type="hidden" name="ship_id" value = "<?php echo ($order_id); ?>"/>
    <div class="am-form-group">
    <label for="doc-ipt-3-a" class="am-u-sm-2 am-form-label">您的姓名</label>
    <div class="am-u-sm-10">
        <input type="text" id="doc-ipt-3-a" class="am-form-field" name="name" placeholder="姓名">
    </div>
    </div>
    <div class="am-form-group">
    <label for="doc-ipt-3-a" class="am-u-sm-2 am-form-label">身份证号</label>
    <div class="am-u-sm-10">
        <input type="text" id="doc-ipt-3-a" class="am-form-field" name="passport_id" placeholder="身份证号码">
    </div>
    </div>
    <div class="am-form-group">
    <label for="doc-ipt-3-a" class="am-u-sm-2 am-form-label">订票日期</label>
    <div class="am-u-sm-10">
        <input type="text" id="doc-ipt-3-a" class="am-form-field" name="date" placeholder="日期">
    </div>
    </div>
    <div class="am-form-group">
    <label for="doc-ipt-3-a" class="am-u-sm-2 am-form-label">是否保险</label>
    <div class="am-u-sm-10">
        <input type="text" id="doc-ipt-3-a" class="am-form-field" name="is_baoxian" placeholder="是否保险">
    </div>
    </div>
    <div class="am-form-group">
    <div class="am-u-sm-10 am-u-sm-offset-2">
        <input type="submit" class="am-btn am-btn-default" value="提交订票"/>
    </div>
  </div>

</form>

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