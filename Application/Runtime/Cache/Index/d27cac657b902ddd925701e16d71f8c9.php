<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="style/images/favicon.png">
<title>Frost</title>
<!-- Bootstrap core CSS -->
<!-- Bootstrap core CSS -->
<link href="/Public/css/bootstrap.css" rel="stylesheet">
<link href="/Public/css/settings.css" rel="stylesheet">
<link href="/Public/css/owl.carousel.css" rel="stylesheet">
<link href="/Public/js/google-code-prettify/prettify.css" rel="stylesheet">
<link href="/Public/js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Public/js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.2" rel="stylesheet" type="text/css" />
<link href="/Public/css/style.css" rel="stylesheet">
<link href="/Public/css/color/blue.css" rel="stylesheet">
<link href='http://fonts.useso.com/css?family=Josefin+Sans:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<link href="/Public/type/fontello.css" rel="stylesheet">
<link href="/Public/type/budicons.css" rel="stylesheet">
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
        <div class="basic-wrapper"> <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a> <a class="navbar-brand" href="index.html"><img src="/Public/images/logo.png" alt="" data-src="/Public/images/logo.png" data-ret="/Public/images/logo@2x.png" class="retina" /></a> </div>
        <nav class="collapse navbar-collapse pull-right">
          <ul class="nav navbar-nav">
            <li><a href="./#home">首页</a></li>
            <li><a href="./#services">核心优势</a></li>
            <li><a href="./#portfolio">产品介绍</a></li>
            <li><a href="./#about">关于我们</a></li>
            <li><a href="./#pricing">合作加盟</a></li>
            <li><a href="./#contact">联系我们</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">相关文献</a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu"><a href="#">电销经验</a>
                  <ul class="dropdown-menu">
                    <li><a href="blog.html">Medium Image Layout</a></li>
                    <li><a href="blog2.html">Grid Blog</a></li>
                    <li><a href="blog3.html">Grid Blog with Sidebar</a></li>
                    <li><a href="blog4.html">Classic Blog</a></li>
                    <li><a href="blog-post.html">Blog Post</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu"><a href="#">加盟伙伴</a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-post.html">Post with Wide Slider</a></li>
                    <li><a href="portfolio-post2.html">Post with Half Slider</a></li>
                    <li><a href="portfolio-post3.html">Post with Carousel Gallery</a></li>
                    <li><a href="portfolio-post4.html">Post with Multiple Images</a></li>
                    <li><a href="portfolio-post5.html">Post with Half Images</a></li>
                    <li><a href="portfolio-post6.html">Post with Fullscreen Slider</a></li>
                    <li><a href="portfolio-post7.html">Post with Fullwidth Video</a></li>
                    <li><a href="portfolio-post8.html">Post with Half Video</a></li>
                  </ul>
                </li>
                <li><a href="elements.html">Elements</a></li>
                <li><a href="headings.html">Headings</a></li>
                <li><a href="footer.html">Footer with Widgets</a></li>
                <li><a href="pricing.html">Pricing Table</a></li>
                <li><a href="fontello.html">Font Icons - Fontello</a></li>
               <li><a href="budicon.html">Font Icons - Budicon</a></li><li><a href="http://www.cssmoban.com">More</a></li>
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
    <div class="container inner" style="border:1px solid red">
      <div class="row">
        <div class="col-sm-8 content">
          <div class="blog-posts classic-blog">
		  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="post row">
              <figure class="col-sm-4"><a href="blog-post.html">
                <div class="text-overlay">
                  <div class="info">Read More</div>
                </div>
                <img src="<?php echo ($vo["small_img"]); ?>" alt="" /></a></figure>
              <div class="col-sm-8">
                <h2 class="post-title"><a href="blog-post.html"><?php echo ($vo["title"]); ?></a></h2>
                <div class="meta"><span class="date"><?php echo ($vo["add_time"]); ?></span></div>
                <p><?php echo ($vo["description"]); ?></p>
                <a href="#" class="more">点击阅读</a> </div>
            </div>
            <hr /><?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
          <!-- /.blog-posts -->
          
          <div class="pagination">
            <ul>
              <li><a href="#">Prev</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
          <!-- /.pagination --> 
          
        </div>
      
        
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->

</div>
<!-- .body-wrapper --> 
  <footer class="footer black-wrapper widget-footer">
    <!--
	<div class="container inner">
      <div class="row">
        <div class="col-sm-3">
          <div class="widget">
            <h3 class="widget-title">About Us</h3>
            <p>Aenean lacinia bibendum nulla sed leo posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper metus auctor fringi. Nullam quis risus. Vestibulum id ligula porta euismod. </p>
            <p>Maecenas faucibus mollis. Morbi leo risus, porta ac consectetur ac eros.</p>
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="widget">
            <h3 class="widget-title">Popular Posts</h3>
            <ul class="post-list">
              <li>
                <h6><a href="blog-post.html">Vivamus sagittis lacus vel augue</a></h6>
                <em>3th Oct 2012</em> </li>
              <li>
                <h6><a href="blog-post.html">Scelerisque nisl consectetur et</a></h6>
                <em>28th Sep 2012</em> </li>
              <li>
                <h6><a href="blog-post.html">Pellentesque ornare sem lacinia</a></h6>
                <em>15th Aug 2012</em> </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="widget">
            <h3 class="widget-title">Get in Touch</h3>
            <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis.</p>
            <div class="contact-info"> <i class="icon-location"></i> Moonshine St. 14/05 Light City <br />
              <i class="icon-phone"></i>+00 (123) 456 78 90 <br />
              <i class="icon-mail"></i> <a href="first.last@email.com">first.last@email.com</a> </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="widget">
            <h3 class="widget-title">Instagram Feed</h3>
            <div class="instagram-widget">
              <ul id="instawidget">
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
	-->
    <!-- .container -->
    
    <div class="sub-footer">
      <div class="container">
        <p class="pull-left">© 2014 Frost. All rights reserved. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a>.</p>
        <ul class="social pull-right">
          <li><a href="#"><i class="icon-s-rss"></i></a></li>
          <li><a href="#"><i class="icon-s-twitter"></i></a></li>
          <li><a href="#"><i class="icon-s-facebook"></i></a></li>
          <li><a href="#"><i class="icon-s-dribbble"></i></a></li>
          <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
          <li><a href="#"><i class="icon-s-instagram"></i></a></li>
          <li><a href="#"><i class="icon-s-vimeo"></i></a></li>
        </ul>
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