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

<dt><span>文章管理</span></dt>
<dd><a href="/admin.php/News" target="main" title="文章列表">文章列表</a>
<a href="/admin.php/News/edit" target="main" title="添加文章">添加文章</a>
<a href="/admin.php/News/edit1" target="main" title="添加文章">添加文章1</a>

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