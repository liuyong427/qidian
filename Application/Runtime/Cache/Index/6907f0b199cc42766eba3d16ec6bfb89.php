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
<link rel="shortcut icon" href="/Public/images/favicon.ico">
<link href="/Public/css/bootstrap.css" rel="stylesheet">
<link href="/Public/css/settings.css" rel="stylesheet">
<link href="/Public/css/owl.carousel.css" rel="stylesheet">
<link href="/Public/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="/Public/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Public/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2" rel="stylesheet" type="text/css" />
<link href="/Public/css/style.css" rel="stylesheet">
<link href="/Public/css/color/blue.css" rel="stylesheet">
<!-- <link href='http://fonts.useso.com/css?family=Josefin+Sans:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.useso.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.useso.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'> -->
<link href="/Public/type/fontello.css" rel="stylesheet">
<link href="/Public/type/budicons.css" rel="stylesheet">
<link href="/Public/css/base.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="/Public/js/html5shiv.js"></script>
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
        <div class="basic-wrapper"> <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a> <a class="navbar-brand" href="index.html"><img src="/Public/images/logo.jpg" alt="" data-src="/Public/images/logo.jpg" data-ret="/Public/images/logo.jpg" class="retina" /></a> </div>
        <nav class="collapse navbar-collapse pull-right">
          <ul class="nav navbar-nav">
            <li><a href="/#home">首页</a></li>
			<li><a href="/#introduce">产品介绍</a></li>
            <li><a href="/#advantage">核心优势</a></li>
            <li><a href="/#cooperation">合作加盟</a></li>
            <li><a href="/#about">关于我们</a></li>
            <li><a href="/#contact">联系我们</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">相关文库</a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu"><a href="/News/index/id/9">电销经验</a>
                  <!-- <ul class="dropdown-menu"> -->
                    <!-- <li><a href="blog.html">Medium Image Layout</a></li> -->
                    <!-- <li><a href="blog2.html">Grid Blog</a></li> -->
                    <!-- <li><a href="blog3.html">Grid Blog with Sidebar</a></li> -->
                    <!-- <li><a href="blog4.html">Classic Blog</a></li> -->
                    <!-- <li><a href="blog-post.html">Blog Post</a></li> -->
                  <!-- </ul> -->
                </li>
                <li class="dropdown-submenu"><a href="/News/index/id/11">加盟伙伴</a>
                </li>
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
        <p class="pull-left"><span>公司地址：四川省成都市高新区美年广场2期1703-1704 </span><span style="margin-left:50px;">联系电话：028-69686996</span><span style="margin-left:50px;">备案号：蜀ICP备12022978号</span></p>
        <!-- <ul class="social pull-right"> -->
          <!-- <li><a href="#"><i class="icon-s-rss"></i></a></li> -->
          <!-- <li><a href="#"><i class="icon-s-twitter"></i></a></li> -->
          <!-- <li><a href="#"><i class="icon-s-facebook"></i></a></li> -->
          <!-- <li><a href="#"><i class="icon-s-dribbble"></i></a></li> -->
          <!-- <li><a href="#"><i class="icon-s-pinterest"></i></a></li> -->
          <!-- <li><a href="#"><i class="icon-s-instagram"></i></a></li> -->
          <!-- <li><a href="#"><i class="icon-s-vimeo"></i></a></li> -->
        <!-- </ul> -->
      </div>
    </div>
  </footer>
  <!-- /footer --> 
</div>
<!-- .body-wrapper --> 
<script src="/Public/js/jquery.min.js"></script> 
<script src="/Public/js/bootstrap.min.js"></script> 
<script src="/Public/js/twitter-bootstrap-hover-dropdown.min.js"></script> 
<script src="/Public/js/jquery.themepunch.plugins.min.js"></script> 
<script src="/Public/js/jquery.themepunch.revolution.min.js"></script> 
<script src="/Public/js/jquery.easytabs.min.js"></script> 
<script src="/Public/js/owl.carousel.min.js"></script> 
<script src="/Public/js/jquery.isotope.min.js"></script> 
<script src="/Public/js/jquery.fitvids.js"></script> 
<script src="/Public/js/jquery.fancybox.pack.js"></script> 
<script src="/Public/js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script> 
<script src="/Public/js/fancybox/helpers/jquery.fancybox-media.js?v=1.0.0"></script> 
<script src="/Public/js/jquery.slickforms.js"></script> 
<script src="/Public/js/instafeed.min.js"></script> 
<script src="/Public/js/retina.js"></script> 
<script src="/Public/js/google-code-prettify/prettify.js"></script> 
<script src="/Public/js/scripts.js"></script>
</body>
</html>