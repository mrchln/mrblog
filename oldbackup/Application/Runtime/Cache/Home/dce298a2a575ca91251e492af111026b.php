<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>时间之轴 | 汉服青史</title>
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/timeaxis/css/history.css">
<script type="text/javascript" src="/oldbackup/Public/timeaxis/js/jquery.js"></script>
<script type="text/javascript" src="/oldbackup/Public/timeaxis/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/oldbackup/Public/timeaxis/js/jquery.easing.js"></script>

</head>
<body>

<div id="arrow">
	<ul>
		<li class="arrowup"></li>
		<li class="arrowdown"></li>
	</ul>
</div>

<div id="history">

	<div class="title">
		<h2>博客历程</h2>
		<div id="circle">
			<div class="cmsk" title="返回首页"></div>
			<div class="circlecontent" >
				<div thisyear="" class="timeblock" >
					<span class="numf"></span>
					<span class="nums"></span>
					<span class="numt"></span>
					<span class="numfo"></span>
					<div class="clear"></div>
				</div>
				<div class="timeyear">YEAR</div>
			</div>
			<a href="http://<?php echo ($HTTP_HOST); ?>" class="clock"></a>
		</div>
	</div>
	
	<div id="content">
		<ul class="list">
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			
				<div class="liwrap">
					<div class="lileft">
						<div class="date">
							<span class="year"><?php echo (date("Y",strtotime($vo["time"]))); ?></span>
							<span class="md"><?php echo (date("m,d",strtotime($vo["time"]))); ?></span>
						</div>
					</div>
					
					<div class="point"><b></b></div>
					
					<div class="liright">
						<div class="histt"><a href="#"><?php echo ($vo['title']); ?></a></div>
						<div class="hisct"><?php echo ($vo['content']); ?></div>
					</div>
				</div>
			
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</ul>
	</div>
<div class="clearFloat"> </div>

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

    	<script type="text/javascript">
    		window.onload = function(){
					//var Footer = document.getElementsByClassName("Footer");
					$(".Footer").css('color','#999');
					$(".Footer").find("a").css('color','#999');
				}
    	</script>
<script type="text/javascript" src="/oldbackup/Public/timeaxis/js/history.js"></script>
</body>
</html>