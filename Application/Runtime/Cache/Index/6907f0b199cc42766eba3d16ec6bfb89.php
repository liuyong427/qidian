<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php echo ($list["description"]); ?>">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title><?php echo ($list["title"]); ?></title>
<!-- Bootstrap core CSS -->
<!-- Bootstrap core CSS -->
<link rel="shortcut icon" href="/tp/qidian/Public/images/favicon.ico">
<link href="/tp/qidian/Public/css/bootstrap.css" rel="stylesheet">
<link href="/tp/qidian/Public/css/settings.css" rel="stylesheet">
<link href="/tp/qidian/Public/css/owl.carousel.css" rel="stylesheet">
<link href="/tp/qidian/Public/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="/tp/qidian/Public/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all" />
<link href="/tp/qidian/Public/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2" rel="stylesheet" type="text/css" />
<link href="/tp/qidian/Public/css/style.css" rel="stylesheet">
<link href="/tp/qidian/Public/css/color/blue.css" rel="stylesheet">
<link href="/tp/qidian/Public/type/fontello.css" rel="stylesheet">
<link href="/tp/qidian/Public/type/budicons.css" rel="stylesheet">
<link href="/tp/qidian/Public/css/base.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="/tp/qidian/Public/js/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="style/js/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
</head>
<body>
<div class="body-wrapper">
  
  <div class="navbar default">
    <div class="navbar-header">
      <div class="container">
        <div class="basic-wrapper"> <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse" href="javascript:void(0)"><i class='icon-menu-1'></i></a> <a class="navbar-brand1"  href="javascript:void(0)"><img src="/tp/qidian/Public/images/logo.jpg" alt="" data-src="/tp/qidian/Public/images/logo.jpg" data-ret="/tp/qidian/Public/images/logo.  jpg" class="retina"/></a> </div>
        <nav class="collapse navbar-collapse pull-right">
          <ul class="nav navbar-nav">
            <li><a href="/tp/qidian/#home">首页</a></li>
			<li><a href="/tp/qidian/#introduce">产品介绍</a></li>
            <li><a href="/tp/qidian/#advantage">核心优势</a></li>
            <li><a href="/tp/qidian/#cooperation">合作加盟</a></li>
            <li><a href="/tp/qidian/#about">关于我们</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">相关文库</a>
              <ul class="dropdown-menu">
			    <?php if(is_array($dxlist)): $i = 0; $__LIST__ = $dxlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="dropdown-submenu"><a href="/tp/qidian/list/<?php echo ($vo["id"]); ?>.html"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
          
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!--/.nav-collapse --> 
  </div>
  
  <!--/.navbar -->
  <div class="offset"></div>
  <div class="light-wrapper">
    <div class="container inner1">
	  <div class="i-tit">
	  <div class="i-title"><?php echo ($list["title"]); ?></div>
	  <div class=""><span class="date">发布时间：<?php echo ($list["add_time"]); ?></span><span class="i-clk">点击数：<?php echo ($list["click_num"]); ?></span></div>
	  </div>
	  <div class="i-cont"> <?php echo ($list["content"]); ?></div>
     
      
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->

</div>
<!-- .body-wrapper --> 
  <footer class="footer black-wrapper widget-footer">
<footer class="footer black-wrapper widget-footer">
  
    <div class="sub-footer">
      <div class="container">
        <p class="pull-left">
			<span>公司地址：四川省成都市高新区美年广场2期1703-1704 </span>
			<span>联系电话：028-69686996</span>
			<span>备案号：蜀ICP备12022978号</span>
		</p>
      </div>
    </div>
  </footer>
  <!-- /footer --> 
</div>
<!-- .body-wrapper --> 
<script src="/tp/qidian/Public/js/jquery.min.js"></script> 
<script src="/tp/qidian/Public/js/bootstrap.min.js"></script> 
<script src="/tp/qidian/Public/js/twitter-bootstrap-hover-dropdown.min.js"></script> 
<script src="/tp/qidian/Public/js/jquery.themepunch.plugins.min.js"></script> 
<script src="/tp/qidian/Public/js/jquery.themepunch.revolution.min.js"></script> 
<script src="/tp/qidian/Public/js/jquery.easytabs.min.js"></script> 
<script src="/tp/qidian/Public/js/owl.carousel.min.js"></script> 
<script src="/tp/qidian/Public/js/jquery.isotope.min.js"></script> 
<script src="/tp/qidian/Public/js/jquery.fitvids.js"></script> 
<script src="/tp/qidian/Public/js/jquery.fancybox.pack.js"></script> 
<script src="/tp/qidian/Public/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script> 
<script src="/tp/qidian/Public/js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script> 
<script src="/tp/qidian/Public/js/jquery.slickforms.js"></script> 
<script src="/tp/qidian/Public/js/instafeed.min.js"></script> 
<script src="/tp/qidian/Public/js/retina.js"></script> 
<script src="/tp/qidian/Public/js/google-code-prettify/prettify.js"></script> 
<script src="/tp/qidian/Public/js/scripts.js"></script>
<script src="/tp/qidian/Public/js/add.js"></script>
</body>
</html>