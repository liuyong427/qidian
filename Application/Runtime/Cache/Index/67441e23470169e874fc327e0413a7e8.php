<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title></title>
<script src="/Public/js/jquery.min.js"></script> 

<style>
body{background:#f5f5f5;}
#main{width:1108px;margin:0 auto;background:#fff;border:1px solid black;overflow:auto;}
.head{height:300px;border:1px solid red;}
.left{float:left;width:300px;height:1000px;border:1px solid red;}
.right{float:right;width:790px;height:1000px;border:1px solid green;}
.stit{padding:10px 0px;text-align:center;background:#EC6C00;color:#fff;border-radius:10px 10px 0 0;font-size:18px;}
.ptit{font-size:16px;color:#666;padding:10px 0px;border-bottom:1px solid #EAEAEA;}
.icon{display:inline-block;height:14px;width:14px;background: #EC6C00;border-radius:7px;color:#fff;text-align:center;font-size:14px;font-weight:bold;margin:0px 10px;}
.otit{display:none;}
.ctit{padding:10px 0px 10px 20px;font-size:14px;border-bottom: 1px solid #fff;background:#EAEAEA;}
.ctit:hover{background:#fff;border-bottom: 1px solid #EAEAEA;}
.dtit{padding:10px 0px 10px 20px;background:#b9b8b8;color:#fff;border-radius:10px 10px 0 0;font-size:18px;border-bottom:1px solid #E7E7E7;}
</style>
</head>
<body>
<div id="main">
    <div class="head"></div>
	<div>
	    <div class="left">
		    <div class="stit">知识分类</div>
		    <div class="one">
			    <div class="ptit"><span class="icon">+</span>软电话问题</div>
				<div class="otit">
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
				</div>
			</div>
			<div class="one">
			    <div class="ptit"><span class="icon">+</span>软电话问题</div>
				<div class="otit">
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
				</div>
			</div>
			<div class="one">
			    <div class="ptit"><span class="icon">+</span>软电话问题</div>
				<div class="otit">
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
					<div class="ctit">222</div>
				</div>
			</div>
			
		</div>
		<div class="right">
		    <div class="dtit">软电话问题 > 打不出电话</div>
		</div>
	</div>
	
</div>
</body>
</html>
<script>
$('.ptit').click(function(){
   $(this).siblings('.otit').slideToggle('100');
   var html = $(this).children('.icon').html()=='+'? '-':'+';
   $(this).children('.icon').html(html);
  
});

</script>