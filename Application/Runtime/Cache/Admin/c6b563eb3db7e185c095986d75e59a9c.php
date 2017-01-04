<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="generator" content="" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="/tp/qidian/Public/admin/css/haiersoft.css" rel="stylesheet" type="text/css"/>
<script src="/tp/qidian/Public/admin/js/jquery-1.10.1.min.js"></script>
<script src="/tp/qidian/Public/admin/js/side.js" type="text/javascript"></script> 
<link href="/tp/qidian/Public/bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css" /> 
<script src="/tp/qidian/Public/bootstrap/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/tp/qidian/Public/kindeditor/themes/default/default.css" />
<script charset="utf-8" src="/tp/qidian/Public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/tp/qidian/Public/kindeditor/lang/zh_CN.js"></script>
<link rel="stylesheet" href="/tp/qidian/Public/css/base.css" />

<!--[if lt IE 9]>
<script src="http:/html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http:/css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
    <link rel="stylesheet" href="/tp/qidian/Public/ueditor/themes/default/css/ueditor.css" type="text/css">
	<script type="text/javascript" charset="utf-8" src="/tp/qidian/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tp/qidian/Public/ueditor/ueditor.all.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tp/qidian/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tp/qidian/Public/ueditor/lang/en/en.js"></script>

<script>
			var editor;
			KindEditor.ready(function(K) {
				var editor = K.editor({
					allowFileManager : true
				});
				K('#image').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							showRemote : false,
							imageUrl : K('#url').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url').val(url);
								editor.hideDialog();
							}
						});
					});
				});
			});
		</script>
</head>

<body>


<!-- MainForm -->
<div id="MainForm">
<div id="navinfo">文章信息</div>
<div class="form_boxC">
<table cellpadding="0" cellspacing="0" style="margin:0 auto;width:1000px;">
<form id="from1" method="post" action="#" enctype="multipart/form-data" >
<tr>
<th width="130px">标题</th>
<td>
<input type="text"  class="form-control" name="title" placeholder="标题" value="<?php echo ($list["title"]); ?>">
</td>
</tr>
<tr>
<th>栏目</th>
<td>
	<select class="form-control" name="item_id">
	  <option value="">请选择</option>
	  <?php if(is_array($items)): $i = 0; $__LIST__ = $items;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $list["item_id"]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
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
<th>内容</th>
<td style="width:870px;">

           <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
	<?php echo ($list["content"]); ?>
    </script>

</td>
</tr>
<tr>
<th></th>
<td>
<input type="hidden" name="id" value="<?php echo ($list["id"]); ?>">
<div class="btn_box floatL">
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
 <!-- 实例化编辑器 -->
<script type="text/javascript">
var ue = UE.getEditor('container',{
          initialFrameHeight:800,
		  //initialFrameWidth:800 
});
</script>

<script>
function send(){
var id= $("input[name='id']").val();
var item_id =$("select[name='item_id']").val();
var title= $("input[name='title']").val();
var keyword= $("input[name='keyword']").val();
var description= $("textarea[name='description']").val();
var small_img= $("input[name='small_img']").val();
//var content= editor.html();
var content= ue.getContent();
$.ajax({
  type: "POST",
  url: "/tp/qidian/admin.php/News/add",
  data:{id:id,item_id:item_id,title:title,keyword:keyword,description:description,small_img:small_img,content:content},
  success:function(msg){
     if(msg['status']==-1){
	    alert(msg['info']);
	 }else{
	    alert(msg['info']);
		window.location.href="/tp/qidian/admin.php/News/index";
	 }
  }
});
}

</script>