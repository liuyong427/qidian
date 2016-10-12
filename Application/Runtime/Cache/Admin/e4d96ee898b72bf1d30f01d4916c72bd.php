<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="generator" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<link href="/Public/admin/css/haiersoft.css" rel="stylesheet" type="text/css" media="screen,print" />
<link href="/Public/admin/css/print.css" rel="stylesheet" type="text/css"  media="print" />
<script src="/Public/admin/js/jquery-1.10.1.min.js"></script>
<script src="/Public/admin/js/side.js" type="text/javascript"></script> 
<link href="/Public/bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css" /> 
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/Public/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="/Public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/Public/kindeditor/lang/zh-CN.js"></script>

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
<div id="MainForm">
<div class="form_boxA">
<h2>年度预算列表</h2>
<table cellpadding="0" cellspacing="0">
<tr>
<th>序号</th>
<th>部门</th>
<th>年度</th>
<th>提交人</th>
<th>预算收入（元）</th>
<th>预算成本（元）</th>
<th>预算费用（元）</th>
<th>状态</th>
<th>操作</th>
</tr>
<tr>
<td>1</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cA">审核通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
<tr>
<td>2</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cB">审核未通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
<tr>
<td>3</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cA">审核通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
<tr>
<td>4</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cA">审核通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
<tr>
<td>5</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cA">审核通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
<tr>
<td>6</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cA">审核通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
<tr>
<td>7</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cA">审核通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
<tr>
<td>8</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cA">审核通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
<tr>
<td>9</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cA">审核通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
<tr>
<td>10</td>
<td>财务部</td>
<td>2015</td>
<td>王友强</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td>120890000.00</td>
<td class="f_cA">审核通过</td>
<td><a href="#">查看</a> | <a href="#">操作</a></td>
</tr>
</table>
<p class="msg">共找到47条年度预算记录，当前显示从第1条至第10条</p>
</div>
</div>
<!-- /MainForm -->


<!-- PageNum -->

</ul>
<!-- /PageNum -->
</div>
<!-- /Contents -->

<!-- /footer -->
<footer>
<address>电子邮箱：sales@haiersoft.com  技术支持：人单合一平台项目组<br>青岛海尔软件有限公司版权所有  Copyright &copy; 2015 Haiersoft Corporation, All Rights.</address>
</footer>
<!-- /footer -->

<!-- /wrap_right -->
</body>
</html>