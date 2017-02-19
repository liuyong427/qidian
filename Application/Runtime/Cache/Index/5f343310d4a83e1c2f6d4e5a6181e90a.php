<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keyword" content="成都车险，车险系统，车辆保险，电销系统">
<meta name="description" content="成都启点科技，成都车险系统，成都电销系统，车险报价，人保算价，平安算价，太平洋算价，中华联合算价">
<meta name="author" content="">
<title>成都启点科技，成都车险，车险系统，车险报价，汽车保险，车辆保险，车险计算，电销系统</title>
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
<link href="/Public/type/fontello.css" rel="stylesheet">
<link href="/Public/type/budicons.css" rel="stylesheet">
<link href="/Public/css/base.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="/Public/js/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
</head>
<body>
<div class="body-wrapper">
  
  <div class="navbar default">
    <div class="navbar-header">
      <div class="container">
        <div class="basic-wrapper"> <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse" href="javascript:void(0)"><i class='icon-menu-1'></i></a> <a class="navbar-brand1"  href="javascript:void(0)"><img src="/Public/images/logo.jpg" alt="" data-src="/Public/images/logo.jpg" data-ret="/Public/images/logo.  jpg" class="retina"/></a> </div>
        <nav class="collapse navbar-collapse pull-right">
          <ul class="nav navbar-nav">
            <li><a href="/#home">首页</a></li>
			<li><a href="/#introduce">产品介绍</a></li>
            <li><a href="/#advantage">核心优势</a></li>
            <li><a href="/#cooperation">合作加盟</a></li>
            <li><a href="/#about">关于我们</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle js-activated">相关文库</a>
              <ul class="dropdown-menu">
			    <?php if(is_array($dxlist)): $i = 0; $__LIST__ = $dxlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="dropdown-submenu"><a href="/list/<?php echo ($vo["id"]); ?>.html"><?php echo ($vo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
          
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!--/.nav-collapse --> 
  </div>
  
  <!--/.navbar -->
  <div id="home" class="section">
    <div class="light-wrapper">
      <div class="fullscreenbanner-container revolution">
        <div class="fullscreenbanner">
          <ul>
            <li data-transition="fade"> <img src="/Public/images/art/bg1.jpg" alt="" />
              <div class="caption large sfb zs" data-x="center" data-y="245" data-speed="900" data-start="800" data-easing="Sine.easeOut">专注 电销车险 呼叫系统</div>
              <div class="caption small sfb zs" data-x="center" data-y="319" data-speed="900" data-start="1500" data-easing="Sine.easeOut">使用客户已遍布全国多个城市</div>
            </li>
            <li data-transition="fade"> <img src="/Public/images/art/bg2.jpg" alt="" />
              <div class="caption large customin customout" data-x="center" data-y="255" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="600"
						data-start="700"
						data-easing="Back.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn">提升用户保费规模为目标</div>
              <div class="caption small customin customout" data-x="center" data-y="329" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
						data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
						data-speed="600"
						data-start="1100"
						data-easing="Back.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn">入手快 效率高 低投入 高回报</div>
            </li>
            <li data-transition="fade"> <img src="/Public/images/art/bg3.jpg" alt="" />
              <div class="caption large lite sfb" data-x="center" data-y="245" data-speed="900" data-start="800" data-easing="Sine.easeOut">互联网车险支撑平台</div>
              <div class="caption small lite sfb" data-x="center" data-y="319"  data-speed="900" data-start="1500" data-easing="Sine.easeOut">精准报价 电销管理 移动展业端 大数据支持 呼叫中心</div>
              <div class="caption small sfb" data-x="center" data-y="362" data-speed="900" data-start="2200" data-easing="Sine.easeOut">
              </div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- /#home -->
  <div id="introduce" class="section anchor">
    <div class="light-wrapper">
      <div class="container inner">
        <h2 class="section-title text-center">产品介绍</h2>
        <div class="grid-portfolio fix-portfolio">
		  <input type="hidden" id="cppid" value="0">
        </div>

		 <?php if(is_array($cpnews)): $i = 0; $__LIST__ = $cpnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-2 <?php if($i == 1): ?>col-md-offset-1<?php endif; ?>" >
		 <div class="cp-block" id="<?php echo ($vo["id"]); ?>">
			  <div><img src="<?php echo ($vo["small_img"]); ?>" style="width:100%"/></div>
			  <div style="text-align:center;font-weight:bold"><?php echo ($vo["title"]); ?></div>
		  </div>
		 </div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		
      </div>
    </div>
  </div>
 
  <div id="advantage" class="section anchor" >
    <div class="dark-wrapper">
      <div class="container inner">
        <h2 class="section-title text-center">核心技术优势</h2>

        <div class="row text-center services-1 services-1">
          <div class="col-sm-2 col-md-offset-1">
            <div class="col-wrapper" >
              <div class="icon-wrapper icon-img">  <img src="/Public/images/img/s1.gif" /></div>
              <h3>简单易用</h3>
              <p>坐席上手快，使用体验好</p>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="col-wrapper">
              <div class="icon-wrapper"><img src="/Public/images/img/s2.gif" /></div>
              <h3>数据安全性</h3>
              <p>防火墙、权限，备份多重保障 </p>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="col-wrapper">
              <div class="icon-wrapper"><img src="/Public/images/img/s3.gif" /></div>
              <h3>大数据支持</h3>
              <p>只需车牌号即可精准算价</p>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="col-wrapper">
              <div class="icon-wrapper"><img src="/Public/images/img/s4.gif" /></div>
              <h3>平台对接</h3>
              <p>跟随每次费改同步升级</p>
            </div>
          </div>
		   <div class="col-sm-2">
            <div class="col-wrapper">
              <div class="icon-wrapper"><img src="/Public/images/img/s5.gif" /></div>
              <h3>专业</h3>
              <p>专注车险全流程，深入需求调研</p>
            </div>
          </div>
        </div>

        
      </div>

    </div>
  </div>
    
  <div class="parallax parallax2 work-together">
    <div class="container inner text-center">
      <h1>WE DO OUR BEST <span class="colored">&</span> SERVICE YOU </h1>
    </div>
  </div>

  <div id="cooperation" class="section anchor">
    <div class="light-wrapper">
      <div class="container inner">
        <h2 class="section-title text-center">合作加盟</h2>
        <p class="lead main text-center">我们提供了多种合作方式，让不同类型、不同发展阶段的客户选择最合适的成本支出</p>
		<p style="border:1px solid #fff;text-align:center;color:#158df2;font-size:16px;"><span style="">试用申请</span>及任何疑问请联系qq客服</p>

        <div class="pricing row">
		<div class="col-sm-2  col-md-offset-1 p5">
            <div class="plan">
              <h3>试用申请</h3>
              <div class="features">
                <ul>
                  <li>了解系统能做什么，比较看看能否满足需求</li>       
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-2 p5">
            <div class="plan">
              <h3>SAAS租用模式</h3>
              <div class="features">
                <ul>
                  <li>团队初建阶段，试试系统能否提升效率</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- /.col-sm-3  -->
          <div class="col-sm-2 p5">
            <div class="plan">
              <h3>自建服务器</h3>
              <div class="features">
                <ul>
                  <li>团队稳定阶段，确定发展车险项目</li>       
                </ul>
              </div>
            </div>
          </div>
          <!-- /.col-sm-3  -->
          <div class="col-sm-2 p5">
            <div class="plan">
              <h3>深度合作</h3>
              <div class="features">
                <ul>
                  <li>已有规模，希望为区域性标杆企业，定制需求</li>                
                </ul>
              </div>
            </div>
          </div>
          <!-- /.col-sm-3  -->
          <div class="col-sm-2 p5">
            <div class="plan">
              <h3>API接口</h3>
              <div class="features">
                <ul>
                  <li>用户自有客户端界面，需要保险公司平台接口</li>
                </ul>
               
              </div>
            </div>
          </div>
          <!-- /.col-sm-3  --> 
		

      </div>
	  
	  
    </div>
  </div>
  </div>

  
  <div id="about" class="section anchor">
    <div class="dark-wrapper">
      <div class="container inner">
        <h2 class="section-title text-center">关于我们</h2>
        <p class="lead main text-center">我们秉着不断的技术创新，完善的系统升级，良好的售后服务，随时的疑问指导同客户共发展</p>
        <div class="row">
          <div class="col-sm-8">
            <h2>公司简介</h2>
            <p>成都启点科技有限公司成立于2012年，由从事通信研发近十年的资深技术人员组成，专业从事新一代IP通信产品和企业管理系统研发。</p>
            <p>2103年初呼叫中心产品推向市场商用，在保险、车商、电商、医药、房地产、金融行业应用。通过近三年的市场发展，逐步形成了以车险为核心的产品体系，其中有车险电销系统、车险大数据库、算价器接口、核单流程、移动展业端等。</p>      
		    <p>兼收并蓄众多用户群体的车险经验，我们才能在车险行业稳步发展。感谢大家支持，我们将开发更强的功能和更好的售后回馈大家。</p>
			</div>
          <div class="col-sm-4">
            <figure><img src="/Public/images/art/place.png" alt="" class="place"/></figure>
          </div>
        </div>
        <div class="divide60"></div>
        <div class="row">
          <div class="col-sm-4">
            <div class="section-title">
              <h3>我们的客户</h3>
            </div>
            <p>行业分布 ：保险公司、保险代理机构、4S车商、维修厂</p>
            <div class="divide10"></div>
            <ul class="progress-list">
              <li>
                <p>坐席人均产能提升<em>30%</em>以上</p>
                <div class="progress plain">
                  <div class="bar" style="width: 30%;"></div>
                </div>
              </li>
              <li>
                <p>三年以上合作客户占比达<em>60%</em>以上</p>
                <div class="progress plain">
                  <div class="bar" style="width: 60%;"></div>
                </div>
              </li>
         
            </ul>
            <!-- /.progress-list --> 
          </div>
          <div class="col-sm-4">
            <div class="section-title">
              <h3>为什么选择我们</h3>
            </div>
            <div class="divide5"></div>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle active" data-parent="#accordion" href="#collapseOne"> 专业、守信</a> </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                  <div class="panel-body">启点定位于保险科技公司，提供车险展业工具平台，以帮助客户成长为宗旨。启点系统全部为自主研发，售后服务及系统升级有保障。</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion" href="#collapseTwo"> 上百家客户证明</a> </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">如果您希望参观就近的案例用户，我们会介绍你们彼此认识。车险行业圈子不大，同行有竞争，也有更多的合作机会。</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="section-title">
              <h3>标准的服务流程</h3>
            </div>
            <div class="services-2">
              <div class="row">
                <div class="col-sm-12">
                  <div class="bm20">
                    <div class="icon"> <i class="budicon-check-1 icn"></i> </div>
                    <div class="text">
                      <h4>安装、培训 、验收</h4>
                      <p>根据合同内容派发安装工单，组织现场培训，保证员工能够正常操作。标准产品安装培训周期为7个工作日。</p>
                    </div>
                  </div>

                  <div class="bm20">
                    <div class="icon"> <i class="budicon-authors icn"></i> </div>
 
                    <div class="text">
                      <h4>售后服务</h4>
                      <p>售后QQ群中有通信，web，算价专项工程师负责对应故障，在群中可以反馈系统问题，还可以认识更多同行。您也可以通过4000xxxx申报故障。</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
<div id="map">
	<div class="mbtn" style="position:fixed;top:0px;width:100%;">
		<div class="mbtn-1">
		<button type="button" class="btn btn-primary btn-back" style="border-radius:4px;">返回</button>
		<button type="button" class="btn btn-primary btn-get btn-get-next" style="border-radius:4px;" value="">下一篇</button>
		<button type="button" class="btn btn-primary btn-get btn-get-pre" style="border-radius:4px;" value="">上一篇</button>
		</div>
	</div>
	<div class="mcon" >
		<div class="mc-1"></div>
		<div class="mc-2"></div>

	</div>
</div>

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
<script src="/Public/js/add.js"></script>
</body>
</html>
<script>
function divMap(){
	var height= window.innerHeight;
	var height_bar = $('.mbtn').outerHeight();
	var height2=height-height_bar;
	$("#map").height(height);
	$('.mcon').css({'height':height2+'px','overflow-y':'auto'});
}
window.onresize = function(){
divMap();
}

</script>