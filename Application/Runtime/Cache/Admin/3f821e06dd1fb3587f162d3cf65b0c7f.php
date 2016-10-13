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
    <link rel="stylesheet" href="/Public/ueditor/themes/default/css/ueditor.css" type="text/css">
	<script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/en/en.js"></script>




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
<div id="navinfo">文章信息</div>
<div class="form_boxC">
<table cellpadding="0" cellspacing="0" style="margin:0 auto;width:1000px;">
<form id="from1" method="post" action="#" enctype="multipart/form-data" >
<tr>
<th width="130">标题</th>
<td>
<input type="text"  class="form-control" name="title" placeholder="标题" value="<?php echo ($list["title"]); ?>">
</td>
</tr>
<tr>
<th>栏目</th>
<td>
	<select class="form-control" name="item_id">
	  <option value="">请选择</option>
	  <?php if(is_array($items)): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	</select>
</td>
</tr>
<tr>
<th>关键字</th>
<td><input type="text" class="form-control" name="keyword" placeholder="关键字" value="<?php echo ($list["keyword"]); ?>"></td>
</tr>
<tr>
<th>描述</th>
<td><textarea class="form-control" name="description" rows="3"><?php echo ($list["description"]); ?></textarea></td>
</tr>
<tr>
<th>缩略图</th>
<td><input type="text" name="small_img" id="url" value="<?php echo ($list["small_img"]); ?>" /> <input type="button" id="image" value="选择图片" /></td>
</tr>
<tr>
<th style="">内容</th>
<td>
    <div id="content" class="w900 border-style1 bg">
        <div class="section">
            <p class="link">
                <!--<span>更多演示: </span>-->
                <!--<a href="onlinedemo.html">完整版</a>&nbsp;-->
                <!--<a href="onlinedemo-charts.html">表格数据生成图表</a>&nbsp;-->
                <!--<a href="onlinedemo-sortable.html">表格排序</a>&nbsp;-->
                <!--<a href="onlinedemo-section.html">生成目录大纲</a>&nbsp;-->
                <!--[<a href="./examples">更多演示</a>]-->
                <a class="uploadhelp" href="javascript:void(0)" style="display:none;">[word导入介绍]</a>
                <a href="./examples">[更多演示]</a>
            </p>

            <h3 class="demotitle">UEditor - 完整示例</h3>

            <p class="note">
                <span class="remind">注：线上演示版上传功能只作为功能演示，1.4.3以上版本将不再承诺支持ie6/ie7。</span>
                <span id="uploadbtn" class="uploadbtn" style="display:none;">导入word文档</span>
                <span class="uploadcount" style="display:none;"></span>
                <span style="color:#1AA304;float:right;"><a href="http://word.baidu.com" style="color:red;">百度doc</a> 测试版已上线，欢迎试用和反馈!</span>
                <span class="clearfix"></span>
            </p>

            <div class="details">
                <div>
                    <script type="text/plain" id="editor"></script>
                    <div class="con-split"></div>
                </div>
            </div>
        </div>


</td>
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
<address>电子邮箱：sales@haiersoft.com  技术支持：人单合一平台项目组<br>青岛海尔软件有限公司版权所有  Copyright &copy; 2015 Haiersoft Corporation, All Rights.</address>
</footer>
</div>
<!-- /footer -->
</body>
</html>
<script>
function send(){
var id= $("input[name='id']").val();
var item_id =$("select[name='item_id']").val();
var title= $("input[name='title']").val();
var keyword= $("input[name='keyword']").val();
var description= $("textarea[name='description']").val();
var small_img= $("input[name='small_img']").val();
var content= editor.html();

$.ajax({
  type: "POST",
  url: "/admin.php/News/add",
  data:{id:id,item_id:item_id,title:title,keyword:keyword,description:description,small_img:small_img,content:content},
  success:function(msg){
     if(msg['status']==-1){
	    alert(msg['info']);
	 }else{
	    alert(msg['info']);
		window.location.href="/admin.php/News/index";
	 }
  }
});
}

</script>