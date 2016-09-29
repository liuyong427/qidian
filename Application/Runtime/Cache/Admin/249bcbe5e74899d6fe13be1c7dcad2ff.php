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
<div id="navinfo">管理员信息</div>
<div class="form_boxC">
<table cellpadding="0" cellspacing="0" style="margin:0 auto;">
<form id="from1" method="post" action="#">
<tr>
<th width="130">账号</th>
<td>
<div class="selectbox" style="width:400px;">
<?php echo ($list["account"]); ?>
</div>
</td>
</tr>
<tr>
<th>姓名</th>
<td><input type="text" class="form-control" name="name" placeholder="姓名" value="<?php echo ($list["name"]); ?>"></td>
</tr>
<tr>
<td>
<input type="hidden" name="id" value="<?php echo ($list["id"]); ?>">
<div class="btn_box floatL ">
<input name="" type="button"  class="btn btn-info" value="确定" onclick="send()">
<input name="" type="reset" value="取消	" onmousemove="this.className='input_move'" onmouseout="this.className='input_out'">
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
<address>电子邮箱：sales@haiersoft.com  技术支持：人单合一平台项目组<br>青岛海尔软件有限公司版权所有  Copyright &copy; 2015 Haiersoft Corporation, All Rights.</address>
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
  url: "/admin.php/Users/add",
  data: data,
  success:function(msg){
     if(msg['status']==-1){
	    alert(msg['data']);
	 }else{
	    alert(msg['data']);
		window.location.href="/admin.php/Users/index";
	 }
  }
});
}

</script>