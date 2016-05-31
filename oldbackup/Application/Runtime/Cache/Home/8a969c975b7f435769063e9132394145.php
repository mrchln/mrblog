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
﻿<div id="touxiangbox">
	<a href="/oldbackup/index.php" title="回到首页">
		<div class="touxiang"></div>
	</a>

</div>
<div class='head-message'>努力吧，至少可以离梦想近一些。
</div>

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
<script>
function navdh(){
	var navElent = $("#daohang_box li");
	var navdhElent = $("#navdh");
	var navLength = navElent.length;
	var navHeight = navElent.height();
	var navWidth = navElent.width();
	//alert(navElent);
	var navdhState = false
	console.log(navHeight);
	navElent.mouseover(function() {
		var navdhInitial_left = navdhElent.position().left;
		var navLeft = $(this).position().left;
		//console.log(navLeft);
		//console.log(navdhInitial_left);
		if (navdhState == false) { //判断是否是刚刷新页面
			navdhElent.css({
				height: '10px',
				width: 10,
				'background': '#fff',
				'text-shadow': '0 0 3px #000',
				'opacity': '0.7',
				'margin-top': '15px',
				'margin-left': '40px',
				'border-radius': '50%'
			});
			navdhElent.animate({
				'margin-left': 0,
				width: navWidth + 20
			}, 200, function() {
				navdhElent.animate({
					'height': navHeight + 20,
					'margin-left': 0,
					'margin-top': 0,
					'border-radius': '0'
				}, 100)
			})
			navdhState = true;
			return;
		}
		if (navdhState == true) {
			navdhElent.stop(true, false);
			//第一段
			navdhElent.animate({
				height: '10px',
				width: 10,
				'margin-top': '15px',
				'margin-left': '40px',
				'border-radius': '50%'
			}, 100, function() {
				//第二段
				navdhElent.animate({
					left: navLeft
				}, function() {
					//第三段
					navdhElent.animate({
						'margin-left': 0,
						width: navWidth + 20
					}, 200, function() {
						navdhElent.animate({
							'margin-top': 0,
							'border-radius': '0px',
							height: navHeight + 20
						}, 100);
					})
				});
			})
		}
	})
}
//设置当前页的active
navlink();
function navlink(){
	var enameArr = new Array();
	enameArr = $("input[name=ename]");
	//console.log(enameArr[0]['value']);
	var urlename = window.location.pathname;
	var enamelenght = enameArr.length;
	for (i=0;i<enamelenght;i++) {
		if(urlename.indexOf(enameArr[i]['value'])!=-1){
			$("input[value="+enameArr[i]['value']+"]").prev("a").find("li").css({
				'background': '#fff',
				'text-shadow': '0 0 3px #000',
				'opacity': '0.7',
			});
			console.log(enameArr[i]['value']);
		}
	}
	console.log(urlename);
}
	//alert(navWidth);
</script>
<div id="Layer1" style="">    
 </div>


<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/friends.css" />
<div id="message">
<div id="message_box">
<div id="logo-neighbors"></div>
<div id="title">心灵的秋海棠，万年常青</div>
<div class="box">
<fieldset>  
<legend>友好邻居</legend>
<span class="lj">  
<?php if(is_array($friends)): foreach($friends as $key=>$fs): ?><a href="javascript:window.open('<?php echo ($fs["link"]); ?>')" title="<?php echo ($fs["message"]); ?>"><?php echo ($fs["nearly"]); ?></a><?php endforeach; endif; ?>
</span>
</fieldset>
</div>
<div class="box">
<fieldset> 
<legend>图片链</legend>
<span class="lj">
<?php if(is_array($friends)): foreach($friends as $key=>$fs): ?><a href="javascript:window.open('<?php echo ($fs["link"]); ?>')" title="<?php echo ($fs["message"]); ?>"><img src="<?php echo ($fs["logo"]); ?>" /></a><?php endforeach; endif; ?>
</span>
</fieldset>
</div>

<div id="linju_require">
<div class="box">
<fieldset> 
<legend>邻居说明</legend>
<ol>
<li>1.博客内容健康，且无广告</li>
<li>2.能正常访问</li>
<li>3.域名长期使用，尽量不更改，博客内容常更新</li>
<li>4.下方评论申请，申请格式：站点名称+域名+邮箱+网站简介</li>
<li>本站信息：汉服青史，分享心情记事，学习笔记的个人博客</li>
<li>网站地址：http://<?php echo ($HTTP_HOST); ?></li>
<li>网站Logo：http://<?php echo ($HTTP_HOST); ?>/images/logo.gif</li>
<li><a href="http://<?php echo ($HTTP_HOST); ?>"><img src="/oldbackup/Public/images/logo.gif" width="88" height="31" /></a></li>
</ol>
</fieldset>
</div>
</div>

<div id="ds">
 <!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="-100" data-title="邻居" data-url="http://<?php echo ($HTTP_HOST); ?>/neighbors"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"mrling"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->
</div>
</div>

<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/footer.css" />
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/bg.css" />
<script type="text/javascript" src="/oldbackup/Public/js/timeover.js"></script>
 <div class="Footer">
<div id="M_c">
 <div id="timebox">
<div id="nowTime"></div> 
</div>
<div id="copy">Copyright &copy;2014 Power By 汉服青史 <a href="http://<?php echo ($HTTP_HOST); ?>"><?php echo ($HTTP_HOST); ?></a> 
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

</div>
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