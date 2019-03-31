<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:80:"G:\phpstudy\PHPTutorial\WWW\Blog\public/../application/home\view\index\life.html";i:1527670007;s:80:"G:\phpstudy\PHPTutorial\WWW\Blog\public/../application/home\view\index\base.html";i:1525419494;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="gb2312">
<title>生活小记</title>
<meta name="keywords" content="个人博客,JS_chen个人博客,JS_chen" />
<meta name="description" content="JS_chen个人博客，记录个人学习笔记和生活的个人博客网站。" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/static/css/base.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/static/font-awesome-4.7.0/css/font-awesome.min.css">

<link href="/static/css/life.css" rel="stylesheet">

<link href="/static/css/main.css" rel="stylesheet" >
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<script src="/static/js/scrollreveal.js"></script>
<!-- 返回顶部调用 begin -->
<link href="/static/css/lrtk.css" rel="stylesheet" />
<script type="text/javascript" src="/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/js.js"></script>
<!-- 返回顶部调用 end-->
</head>
<body>
<header>
<script>
  window.onload = function ()
  {
  	var oH2 = document.getElementsByTagName("h2")[0];
  	var oUl = document.getElementsByTagName("ul")[0];
  	oH2.onclick = function ()
  	{
  		var style = oUl.style;
  		style.display = style.display == "block" ? "none" : "block";
  		oH2.className = style.display == "block" ? "open" : ""
  	}
  }
</script>
<style>
  #mnav { display: none; width: 100%; position: fixed; top: 0; right: 0; }
  #mnav h2 { text-align: right; color: #fff; font-size: 18px; height: 40px; line-height: 40px; padding-left: 10px; width: 100% }
  #mnav h2.open { text-align: right; background: rgba(1,1,1,0.8); width: 100%; }
  #mnav ul { display: none; background: rgba(1,1,1,0.8); width: 100%; padding-bottom:40px}    
  #mnav li {  height: 40px; line-height: 40px; vertical-align: top; font-size: 16px; display: block; overflow: hidden; text-align: center }
  #mnav a:hover { color: #fff;}
  /* 默认= */
  #mnav h2 .navicon { margin-top:18px; margin-right: 15px; }
  .navicon { display: inline-block; position: relative; width: 30px; height: 5px; background-color: #FFFFFF; }
  .navicon:before, .navicon:after { content: ''; display: block; width: 30px; height: 5px; position: absolute; background: #FFFFFF; -webkit-transition-property: margin, -webkit-transform; transition-property: margin, -webkit-transform; transition-property: margin, transform; transition-property: margin, transform, -webkit-transform; -webkit-transition-duration: 300ms; transition-duration: 300ms; }
  .navicon:before { margin-top: -10px; }
  .navicon:after { margin-top: 10px; }
  /* 展开后导航栏目 */
  #mnav h2.open .navicon { background: rgba(1,1,1,0.8) }/* 使用背景色隐藏中间的红线 */
  #mnav h2.open .navicon:before { margin-top: 0; -webkit-transform: rotate(45deg); transform: rotate(45deg); }
  #mnav h2.open .navicon:after { margin-top: 0; -webkit-transform: rotate(-45deg); transform: rotate(-45deg); }
  #mnav h2.open .navicon:before, #mnav h2.open .navicon:after { content: ''; display: block; width: 30px; height: 5px; position: absolute; background: #FFFFFF; -webkit-transition-property: margin, -webkit-transform; transition-property: margin, -webkit-transform; transition-property: margin, transform; transition-property: margin, transform, -webkit-transform; -webkit-transition-duration: 300ms; transition-duration: 300ms; }


  /* for 480px or less */
  @media screen and (max-width: 480px) {

    .logo { margin: 50px 0 20px 0; width: 100% }
    .logo img { margin: auto; width: 80% }
    nav { display: none }
    #mnav { display: block; z-index: 99999; margin-bottom: 30px }

  }
</style>
<div id="mnav">
    <h2><span class="navicon"></span></h2>
    <ul>
        <li><a href="/">网站首页</a></li>
        <li><a href="<?php echo url('home/index/about'); ?>">关于我</a></li>
        <li><a href="<?php echo url('home/index/life'); ?>">生活小记</a></li>
        <li><a href="<?php echo url('home/index/learn'); ?>">学无止境</a></li>
        <li><a href="<?php echo url('home/index/download'); ?>">分享下载</a></li>
        <li><a href="<?php echo url('home/index/saying'); ?>">留言</a></li>
    </ul>
</div> 
<div class="logo"  data-scroll-reveal="enter right over 1s">
<a href="/"><img src="/static/images/logo.png"></a></div>
<nav class="topnav" >
  <a href="/" id="index"><span>首页</span><span class="en">Home</span></a>
  <a href="<?php echo url('home/index/about'); ?>" id="about"><span>关于我</span><span class="en">About</span></a>
  <a href="<?php echo url('home/index/life'); ?>" id="life"><span>生活小记</span><span class="en">Life</span></a>
  <a href="<?php echo url('home/index/learn'); ?>" id="learn"><span>学无止境</span><span class="en">Learn</span></a>
  <a href="<?php echo url('home/index/download'); ?>" id="download"><span>分享下载</span><span class="en">Share</span></a>
  <a href="<?php echo url('home/index/saying'); ?>" id="saying"><span>留言</span><span class="en ">Saying</span></a>
</nav>
</header>

<article>
  <div class="contain">
    <h2 class="ctitle"><b>生活小记</b> <span>一花一世界，一念一尘缘，落花有意染衣袖，痴语无人与谁听？ </span></h2>
    <div class="img-list"><!--data-scroll-reveal="enter top"-->
      <?php if(is_array($lifes) || $lifes instanceof \think\Collection || $lifes instanceof \think\Paginator): $i = 0; $__LIST__ = $lifes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$life): $mod = ($i % 2 );++$i;?>
      <figure>
        <ul>
          <a href="javaacript:;"><img class="lazy"  data-original="<?php echo $life['img_url']; ?>" width="100%" height="100%"></a>
        </ul>
        <p><a href="javascript:;" target="_blank"><?php echo $life['title']; ?></a></p>
        <figcaption><?php echo date("Y-m-d H:i",strtotime($life['add_time'])); ?></figcaption>
      </figure>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php if($pages > 1): ?>
    <div class="page-li" id="pagination" >
    </div>
    <?php endif; ?>
    <input type="hidden" id="PageCount" runat="server" value="<?php echo $pages; ?>"/>
    <input type="hidden" id="PageNum" runat="server" value="<?php echo $current_page; ?>"/>
  </div>
  </aside>
</article>

<div id="tbox"> <a id="togbook" href="<?php echo url('home/index/saying'); ?>"></a> <a id="gotop" href="javascript:void(0)"></a> </div>
<footer>
Since 2018 by JS_chen <a href="http://www.miitbeian.gov.cn/" target="_blank">粤ICP备17147325号-1</a>
</footer>
<script>
	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		(function(){
			window.scrollReveal = new scrollReveal({reset: true});
		})();
	};
</script> 

<script type="text/javascript">
  $(function(){
    $("#life").css("color","#111");
  });
</script>
<script type="text/javascript">
    $(function() {
        $("img.lazy").lazyload({effect: "fadeIn"});
    });
</script>
<script src="/static/js/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="/static/js/jqpaginator.min.js" type="text/javascript"></script>
<script src="/static/js/mypage.js" type="text/javascript"></script>

</body>
</html>
