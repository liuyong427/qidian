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
<form method="post" action="/admin.php/News/index">


<div class=" floatL"><input type="text" class="form-control" style="width:200px;" name="title" placeholder="标题"></div>
<div class=" floatL">
	<select class="form-control" name="item_id">
	  <option value="">请选择</option>
	  <?php if(is_array($items)): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select>
</div>

<!-- btn_box -->
<div class="btn_box floatL"><input type="submit" value="查询" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'"></div>
<!-- /btn_box -->
</form>
<span><a class="btn btn-info mleft50" href="/admin.php/News/edit" role="button">添加</a></span>
</div>
<!-- /TopMain -->

<!-- MainForm -->
<div id="MainForm">
<div class="form_boxA">
<h2>邮件列表</h2>
<table cellpadding="0" cellspacing="0">
<tr>
<th>序号</th>
<th>姓名</th>
<th>电话</th>
<th>邮箱</th>
<th>内容</th>
<th>时间</th>
<th>状态</th>
<th>操作</th>
</tr>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td><?php echo ($i); ?></td>
<td><?php echo ($vo["name"]); ?></td>
<td><?php echo ($vo["phone"]); ?></td>
<td><?php echo ($vo["email"]); ?></td>
<td><?php echo ($vo["content"]); ?></td>
<td><?php echo ($vo["add_time"]); ?></td>
<td><?php if($vo["status"] == 0): ?><span class="f_cB">未审核</span><?php else: ?><span class="f_cA">已审核</span><?php endif; ?></td>
<td><a href="/admin.php/Emails/edit/id/<?php echo ($vo["id"]); ?>">编辑</a> | <a href="/admin.php/Emails/del/id/<?php echo ($vo["id"]); ?>" onclick="return confirm('你确定删除')">删除</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<div class="page"><?php echo ($page); ?></div>
</div>
</div>
<!-- /MainForm -->
</div>

<!-- /footer -->
<div style="border:1px solid #eee;">
<footer>
<address>成都启点科技</address>
</footer>
</div>
<!-- /footer -->
</body>
</html>