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

<!--[if lt IE 9]>
<script src="http:/html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http:/css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>
<!-- wrap_left -->
<div class="wrap_left" id="frmTitle" name="fmTitle">
<!-- Logo -->
<div id="Logo"><span>人单合一</span></div>
<!-- /Logo -->

<!-- menu_list -->
<script>
$(function() {
    $(".menu_list dd");
    $(".menu_list dt").click(function(){
        $(this).toggleClass("open").next().slideToggle("fast");
    });
});
</script>
<div class="menu_list">
<dl>
<dt><span>用户管理</span></dt>
<dd>
<a href="/admin.php/Users" target="main" title="用户列表">用户列表</a>
<a href="/admin.php/Users/edit" target="main" title="用户添加">用户添加</a>
</dd>

<dt><span>栏目管理</span></dt>
<dd>
<a href="/admin.php/Items" target="main" title="栏目列表">栏目列表</a>
<a href="/admin.php/Items/edit" target="main" title="栏目添加">栏目添加</a>
</dd>

<dt><span>一级分类名称</span></dt>
<dd><a href="" title="二级分类">二级分类</a>
<a href="" title="二级分类">二级分类</a>
<a href="" title="二级分类">二级分类</a>
<a href="" title="二级分类">二级分类</a></dd>

</dl>
</div>
<!-- /menu_list -->
</div>
<!-- /wrap_left -->

<!-- picBox -->
<!--<div class="picBox" onclick="switchSysBar()" id="switchPoint"></div>-->
<!-- /picBox -->


</body>
</html>