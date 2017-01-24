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
<div id="navinfo">邮件信息</div>
<div class="form_boxC">
<table cellpadding="0" cellspacing="0" style="margin:0 auto;width:500px;">
<form id="from1" method="post" action="#">
<tr>
<th width="130">姓名</th>
<td>
<input type="text" class="form-control" name="name" placeholder="姓名" value="<?php echo ($list["name"]); ?>">
</td>
</tr>
<tr>
<tr>
<th>电话</th>
<td><input type="text" class="form-control" name="phone" placeholder="电话" value="<?php echo ($list["phone"]); ?>"></td>
</tr>
<tr>
<th>邮箱</th>
<td><input type="text" class="form-control" name="email" placeholder="邮箱" value="<?php echo ($list["email"]); ?>"></td>
</tr>
<tr>
<th>状态</th>
<td>
  <select name="status">
     <option value="0"	 <?php if($vo["status"] == 0): ?>selected<?php endif; ?> >未审核</option>
	 <option value="1" <?php if($vo["status"] == 1): ?>selected<?php endif; ?> >已审核</option>
  </select>
</td>
</tr>
<tr>
<th>内容</th>
<td><textarea class="form-control" name="content" rows="6"><?php echo ($list["content"]); ?></textarea></td>
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
<div style="border:1px solid #eee;">
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
  url: "/admin.php/Emails/add",
  data: data,
  success:function(msg){
     if(msg['status']==-1){
	    alert(msg['info']);
	 }else{
	    alert(msg['info']);
		window.location.href="/admin.php/Emails/index";
	 }
  }
});
}

</script>