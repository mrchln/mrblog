<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>美图秀秀 | MrLing</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel='stylesheet' href='/oldbackup/Public/blocksit/css/style.css' media='screen' />
<script src="/oldbackup/Public/blocksit/js/jquery.min.js"></script>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/oldbackup/Public/blocksit/js/blocksit.min.js"></script>
	
	<link rel="stylesheet" href="/oldbackup/Public/blocksit/css/lightbox.css" media="screen"/>

	<script src="/oldbackup/Public/blocksit/js/lightbox-2.6.min.js"></script>
<script>
$(document).ready(function() {
	 
	
	//blocksit define
	$(window).load( function() {
		$('#container').BlocksIt({
			numOfCol: 5,
			offsetX: 8,
			offsetY: 8,
			blockElement: '.grid'
		});
	});
	
	//window resize
	var currentWidth = 1100;
	$(window).resize(function() {
		var winWidth = $(window).width();
		var conWidth;
		if(winWidth < 660) {
			conWidth = 440;
			col = 2
		} else if(winWidth < 880) {
			conWidth = 660;
			col = 3
		} else if(winWidth < 1100) {
			conWidth = 880;
			col = 4;
		} else {
			conWidth = 1100;
			col = 5;
		}
		
		if(conWidth != currentWidth) {
			currentWidth = conWidth;
			$('#container').width(conWidth);
			$('#container').BlocksIt({
				numOfCol: col,
				offsetX: 8,
				offsetY: 8
			});
		}
	});
});
</script>

</head>
<body>
<!-- Content -->
<section id="wrapper">
	<hgroup>
		<h2><a href='/oldbackup/index.php' style="font-size:16px;">首页 </a> 画廊 <a href='javascript:history.go(-1)' style="font-size:16px;"> 返回 </a> </h2> 
		
	</hgroup>
<div id="container">
<?php if(is_array($map)): foreach($map as $key=>$pic): ?><div class="grid">
		<div class="imgholder">
			<a class="example-image-link" href="<?php echo (htmlspecialchars_decode($pic['link'])); ?>" data-lightbox="example-set" title="<?php echo ($pic['content']); ?>" ><img class="example-image" alt="Plants: image 1 0f 4 thumb" src="<?php echo (htmlspecialchars_decode($pic['link'])); ?>" /></a>
		</div>
		<strong><?php echo ($pic['title']); ?></strong>
		<p><?php echo ($pic['content']); ?></p>
		<div class="meta"><?php echo (date("m,d",strtotime($pic['time']))); ?>&nbsp by <?php echo ($pic['author']); ?></div>
	</div><?php endforeach; endif; ?>
	

</div>
<div id="duoshuo" style="width:800px;margin:0 -400px 0 0;right:50%;position:absolute">
            <!-- 多说评论框 start -->
			<div class="ds-thread" data-thread-key="" data-title="美图秀秀" data-url="http://<?php echo ($HTTP_HOST); ?>/mapshow"></div>
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
				window.onload = function(){
					//var Footer = document.getElementsByClassName("Footer");
					$(".Footer").css('color','#999');
					$(".Footer").find("a").css('color','#999');
				}
				
				</script>
			<!-- 多说公共JS代码 end -->
			<div class="clearFloat">
				
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
			            </div>

</div>

</section>


</body>
</html>