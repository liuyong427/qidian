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
<div class="selectbox floatL mag_r20">
<span class="sttl">年度：</span>
<dl class="select" style="width:200px;">
<dt>全部</dt>
<dd><ul>
<li><a href="#">选项选项A</a></li>
<li><a href="#">选项选项B</a></li>
<li><a href="#">选项选项C</a></li>
<li><a href="#">选项选项D</a></li>
<li><a href="#">选项选项E</a></li>
</ul></dd></dl>
</div>
<!-- /selectbox -->

<!-- selectbox -->
<div class="selectbox floatL mag_r20">
<span class="sttl">部门：</span>
<dl class="select" style="width:200px;">
<dt>全部</dt>
<dd><ul>
<li><a href="#">选项选项A</a></li>
<li><a href="#">选项选项B</a></li>
<li><a href="#">选项选项C</a></li>
<li><a href="#">选项选项D</a></li>
<li><a href="#">选项选项E</a></li>
</ul></dd></dl>
</div>
<!-- /selectbox -->

<!-- btn_box -->
<div class="btn_box floatL"><input name="" type="button" value="查询" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'"></div>
<!-- /btn_box -->

<span><a class="btn btn-info mleft50" href="/admin.php/Users/edit" role="button">添加</a></span>
</div>
<!-- /TopMain -->

<!-- MainForm -->
<div id="MainForm">
<div class="form_boxA">
<h2>栏目列表</h2>
<table cellpadding="0" cellspacing="0">
<tr>
<th>序号</th>
<th>栏目名称</th>
<th>操作</th>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($i); ?></td>
<td><?php echo ($vo["name"]); ?></td>

<td><a href="/admin.php/Items/edit/id/<?php echo ($vo["id"]); ?>">编辑</a> | <a href="/admin.php/Items/del/id/<?php echo ($vo["id"]); ?>">删除</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>

<p class="page"><?php echo ($page); ?></p>
</div>
</div>
<!-- /MainForm -->



</div>

<!-- /footer -->
<div style="border:1px solid #eee">
<footer>
<address>电子邮箱：sales@haiersoft.com  技术支持：人单合一平台项目组<br>青岛海尔软件有限公司版权所有  Copyright &copy; 2015 Haiersoft Corporation, All Rights.</address>
</footer>
</div>
<!-- /footer -->
</body>
</html>