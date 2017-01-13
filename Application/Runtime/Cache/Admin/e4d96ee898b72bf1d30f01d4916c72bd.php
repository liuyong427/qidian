<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="generator" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="/Public/admin/css/haiersoft.css" rel="stylesheet" type="text/css"/>
<script src="/Public/admin/js/jquery-1.10.1.min.js"></script>
<script src="/Public/admin/js/side.js" type="text/javascript"></script> 
<link href="/Public/bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css" /> 
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/Public/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="/Public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Public/kindeditor/lang/zh_CN.js"></script>
<link rel="stylesheet" href="/Public/css/base.css" />

<!--[if lt IE 9]>
<script src="http:/html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http:/css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>


<!-- wrap_right -->

<!-- Contents -->
<div id="Contents">
<script type="text/javascript">
$(function(){
$(".select").each(function(){
var s=$(this);
var z=parseInt(s.css("z-index"));
var dt=$(this).children("dt");
var dd=$(this).children("dd");
var _show=function(){dd.slideDown(200);dt.addClass("cur");s.css("z-index",z+1);};
var _hide=function(){dd.slideUp(200);dt.removeClass("cur");s.css("z-index",z);};
dt.click(function(){dd.is(":hidden")?_show():_hide();});
dd.find("a").click(function(){dt.html($(this).html());_hide();});
$("body").click(function(i){ !$(i.target).parents(".select").first().is(s) ? _hide():"";});})})
</script>
<!-- TopMain -->
<div id="TopMain">
<!-- selectbox -->
<!-- /selectbox -->

<!-- btn_box -->
<!-- /btn_box -->
</div>
<!-- /TopMain -->

<!-- MainForm -->
<div id="MainForm" style="margin-bottom:20px;">
<div class="form_boxA"style="width:500px;margin:100px auto;padding:50px 0px;">

<table cellpadding="0" cellspacing="0" style="border:1px solid #eee ;">
<tr><td colspan="2">后台数据统计</td></tr>
<tr>
<td>文章：</td>
<td>20篇</td>
</tr>
<tr>
<td>管理员</td>
<td>2个</td>
</tr>
<tr>
<td>邮件</td>
<td>10封</td>
</tr>
</table>
<!-- /MainForm -->
</div>
</div>
<!-- /Contents -->

<!-- /footer -->


<!-- /footer -->
<div style="border:1px solid #eee;">
<footer>
<address>成都启点科技</address>
</footer>
</div>
<!-- /footer -->
<!-- /footer --> 

<!-- /wrap_right -->
</body>
</html>