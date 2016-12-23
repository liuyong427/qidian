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


<!-- MainForm -->
<div id="MainForm">
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
<div id="navinfo">栏目信息</div>
<div class="form_boxC">
<table cellpadding="0" cellspacing="0" style="margin:0 auto;">
<form id="from1" method="post" action="#">
<tr>
<th width="130">上级栏目</th>
<td>
  <select class="form-control" name="pid" <?php if($list["id"] != null): ?>disabled<?php endif; ?>>
      <option value="0">顶级栏目</option>
      <?php if(is_array($lmlist)): $i = 0; $__LIST__ = $lmlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $list["pid"]): ?>selected<?php endif; ?>>&nbsp;&nbsp;<?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select>
</td>
</tr>
<tr>
<th>栏目名称</th>
<td><input type="text" class="form-control" name="name" placeholder="栏目名称" value="<?php echo ($list["name"]); ?>"></td>
</tr>
<tr>
<td>
<input type="hidden" name="id" value="<?php echo ($list["id"]); ?>">
<div class="btn_box floatL ">
<input name="" type="button"  class="btn btn-info" value="确定" onclick="send()">
<input name="" type="reset" value="取消">
</div>

</td>

</tr>
</table>
</form>
</div>

</div>
</div>
<!-- /MainForm -->
<!-- /footer -->
<div style="border:1px solid #eee">
<footer>
<address>成都启点科技</address>
</footer>
</div>
<!-- /footer -->
</body>
</html>
<script>
function send(){
var data=$('#from1').serialize();
$.ajax({
  type: "POST",
  url: "/admin.php/Items/add",
  data: data,
  success:function(msg){
     if(msg['status']==-1){
	    alert(msg['info']);
	 }else{
	    alert(msg['info']);
		window.location.href="/admin.php/Items/index";
	 }
  }
});
}

</script>