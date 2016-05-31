<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta property="qc:admins" content="14533242456523466375" />
	<meta charset="UTF-8">
	<meta name="keywords" content="汉服青史的个人博客博客,汉服青史博客,汉服青史的空间，陈小宁博客" />
	<meta name="description" content="一个分享心情记事，学习笔记的个人博客，这里有原创的韵脚诗句,也有分享的趣事，你可以认识其他朋友，也可以学到一些技术。">
	<meta property="qc:admins" content="14533245246511673016375" />


<title>汉服青史</title>
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/center.css" />
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/head.css" />
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/message.css" />	
<script type="text/javascript" src="/oldbackup/Public/js/jquery171mini.js"></script>
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/detailed.css" />
</head>
<body>
﻿<section>
<div id="touxiangbox">
	<a href="/oldbackup/index.php" title="回到首页">
		<div class="touxiang"></div>
	</a>

</div>
<div class='head-message'>努力吧，至少可以离梦想近一些。
</div>
</section>
<nav>
	<div id="daohang_box">
		<?php if(is_array($modular)): foreach($modular as $key=>$mod): ?><a href="/oldbackup/<?php echo ($mod['ename']); ?>">
				<li><?php echo ($mod['classify']); ?></li>
			</a>
			<input type="hidden" name="ename" value="<?php echo ($mod['ename']); ?>" /><?php endforeach; endif; ?>
		<?php if(is_array($navigation)): $i = 0; $__LIST__ = $navigation;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$head): $mod = ($i % 2 );++$i;?><a href="/oldbackup/<?php echo ($head['ename']); ?>">
				<li><?php echo ($head['name']); ?></li>
			</a>
			<input type="hidden" name="ename" value="<?php echo ($head['ename']); ?>" /><?php endforeach; endif; else: echo "" ;endif; ?>
		<div id='navdh'></div>
	</div>

</nav>
<script>$(function(){navlink();})</script>
<div id="Layer1" style="">    
 </div>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>关于|MrLing</title>

<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/about.css" />
</head>
<body>

<div id="message">
<div id="message_box">
<div id="logo-about"></div>
<div id="title">不悔的青春，永恒的梦想</div>
<?php if(is_array($about)): foreach($about as $key=>$me): ?><div class="guanyu">
<div id="box_shor">

<div class="box">
<fieldset>  
<legend>励志名言</legend>  
<?php echo (html_entity_decode($me["gxqm"])); ?>
</fieldset>
</div>


<div class="box">
<fieldset>  
<legend>关于博主</legend>  
<?php echo (html_entity_decode($me["grgc"])); ?>
</fieldset>
</div>


<div class="box">
<fieldset>  
<legend>QQ</legend>  
<?php echo (html_entity_decode($me["qq"])); ?>
</fieldset>
</div>


<div class="box">
<fieldset>  
<legend>联系电话</legend>  
<?php echo (html_entity_decode($me["phone"])); ?>
</fieldset>
</div>

<div class="box">
<fieldset>  
<legend>联系地址</legend>  
<?php echo (html_entity_decode($me["adress"])); ?>
</fieldset>
</div>
</div>

</div><?php endforeach; endif; ?>
 

</div>
 
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/footer.css" />
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/bg.css" />
<script type="text/javascript" src="/oldbackup/Public/js/timeover.js"></script>
<footer>
 <div class="Footer">
<div id="M_c">
 <div id="timebox">
<div id="nowTime"></div> 
</div>
<div id="copy">Copyright &copy;<time datetime="2014-07-10 12:00">2014</time> Power By <name>汉服青史</name> <a href="http://<?php echo ($HTTP_HOST); ?>"><?php echo ($HTTP_HOST); ?></a> 
	<script type="text/javascript">
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?fd9b02e18d52086b63297f6247b8235a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
$("head").append("<link rel='shortcut icon' type='image/x-icon' href='http://<?php echo ($HTTP_HOST); ?>/favicon.png' />");

</script>
<a href="http://www.miitbeian.gov.cn/">桂ICP备16002083号</a>
</div>

</div>

</div>
</footer>

</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/gotop.css" />
</head>
<body>
<div class="actGotop"><a href="javascript:;" title="返回顶部">Top↑</a></div>
<script type="text/javascript">
$(function(){	
	$(window).scroll(function() {		
		if($(window).scrollTop() >= 400){
			$('.actGotop').fadeIn(300); 
		}else{    
			$('.actGotop').fadeOut(300);    
		}  
	});
	$('.actGotop').click(function(){
	$('html,body').animate({scrollTop: '0px'}, 800);});	
});
</script>

</body>
</html>
<script type="text/javascript" src="/oldbackup/Public/js/mrling.js"></script>
<script type="text/javascript" src="/oldbackup/Public/js/jquery.lazyload.js"></script>

</body>
</html>