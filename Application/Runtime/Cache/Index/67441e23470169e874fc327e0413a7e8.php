<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title></title>
<script src="/Public/js/jquery.min.js"></script> 
<script src="/Public/js/bootstrap.min.js"></script>
<link href="/Public/bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css" />

<style>
body{background:#f5f5f5;margin:0px;padding:0px;}
#main{width:1108px;margin:0 auto;overflow:auto;}
.head{height:200px;background:#fff;}
.htit{text-align:center;font-size:28px;padding:20px 0px 10px 0px;background:#afe5f7;}
.search{margin-top:40px;text-align:center;}
.searchbtn{height:40px;width:100px;}
.keyword{width:300px;height:40px;}
.left{float:left;width:300px;background:#fff;padding-bottom:40px;}
.right{float:right;width:790px;background:#fff;padding-bottom:40px;}
.stit{padding:10px 0px;text-align:center;background:#EC6C00;color:#fff;border-radius:10px 10px 0 0;font-size:18px;}
.ptit{font-size:16px;color:#666;padding:10px 0px;border-bottom:1px solid #EAEAEA;cursor:pointer;font-weight:bold;}
.icon{display:inline-block;height:14px;width:14px;line-height:14px;background: #EC6C00;border-radius:7px;color:#fff;text-align:center;font-size:14px;font-weight:normal;margin:0px 10px;}
.otit{display:none;}
.ctit{padding:10px 0px 10px 20px;font-size:14px;border-bottom: 1px solid #fff;background:#EAEAEA;}
.ctit:hover{background:#fff;border-bottom: 1px solid #EAEAEA;cursor:pointer}
.dtit{padding:10px 0px 10px 20px;background:#b9b8b8;color:#fff;border-radius:10px 10px 0 0;font-size:18px;border-bottom:1px solid #E7E7E7;}
.content{padding:20px;}
</style>
</head>
<body>
<div id="main">
    <div class="head">
	    <div class="htit">成都启点科技系统操作知识库</div>
		<div class="search">
		     <form id="sform" method="post" action="/Operation">
				<input type="text" class="keyword" name="keyword"  placeholder="请输入搜索内容"/>
				
				<input type="submit" value="搜索" class="btn btn-info searchbtn" />
			</form>
		</div>
	</div>
	<div>
	    <div class="left">
		    <div class="stit">知识分类</div>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="one">
			    <div class="ptit"><span class="icon">+</span><span class="item"><?php echo ($vo["name"]); ?></span></div>
				<div class="otit">
				<?php if(is_array($vo["news"])): $i = 0; $__LIST__ = $vo["news"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div class="ctit" value="<?php echo ($vo1["id"]); ?>"><?php echo ($vo1["title"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		
		<div class="right">
		    <div class="dtit">&nbsp;</div>
			<div class="content">
			</div>
		</div>
	</div>
	
</div>
</body>
</html>
<script>
function showItem(item){
    if(item == ''){
	   return false;
	}
   $('.ptit').each(function(){ 
       if($(this).find('.item').html() == item){
	       $(this).siblings('.otit').slideDown();
		   $(this).find('.icon').html('-');
	   }
   });
}

$('.ptit').click(function(){
   $(this).siblings('.otit').slideToggle('100');
   $(this).parent().siblings('.one').children('.otit').slideUp('100');
   var html = $(this).children('.icon').html()=='+'? '-':'+';
   $(this).children('.icon').html(html);
   $(this).parent().siblings('.one').find('.icon').html('+');
  
});

$('.ctit').click(function(){
    var id=$(this).attr('value');
	contentAjax(id);
});

function search(keyword){
   var show = false; 
   var keyword = keyword?keyword:$('.keyword').val();
   if(keyword ==''){
     return;//$('.keyword').focus();
   }else{
      $('.ctit').each(function(){
	    // alert($(this).html().indexOf(keyword));
	     if($(this).html().indexOf(keyword)>=0){
		     $(this).parent().show();
			 $(this).parent().siblings('.ptit').find(' .icon').html('-');
			 $(this).css('color','red');
			 if(show == false){
			    var id = $(this).attr('value');
				contentAjax(id);
				show = true;
			 }
		 }else{
			 $(this).css('color','#666');
		 }
		
	  });
     // $('#sform').submit();
   }
}

function contentAjax(id){
$.ajax({
	  url: "/Operation/getContent",
	  method: "POST",
	  data: {id : id},
	  success: function(data){
	      if(data.status == 1){
		    $('.content').html(data['msg']['content']);
			$('.dtit').html(data['msg']['pname']+ " > " + data['msg']['title']);			
		  }else{
		    $('.content').html(data['msg']);
		  }
	      
	  }
	});
}


/**页面加载调用**/
showItem("<?php echo ($item); ?>");
search("<?php echo ($title); ?>");
</script>