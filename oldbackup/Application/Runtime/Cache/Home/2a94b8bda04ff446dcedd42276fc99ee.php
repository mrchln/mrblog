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
<!-- hanfuqingshi.com Baidu tongji analytics -->
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?fd9b02e18d52086b63297f6247b8235a";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
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

﻿<base target="_blank">

<script type="text/javascript" src="/oldbackup/Public/showimages/js/slides.js"></script>
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/showimages/css/global.css" />
<script type="text/javascript">
	$(function() {
		//alert(1);
		indextime();
		imgmsg();
		//music---start
		var n = document.getElementsByTagName("audio")[0];
		n.loop = true;
		n.addEventListener("ended", function() {
			$(".xl_music img").removeClass("music_active");
			$(".xl_music img").attr("src", "/oldbackup/Public/images/music-stop.png")
		}, false);
		document.getElementsByTagName("audio")[0].play();
		$(".xl_music").live("click", function() {
				var o = $(this).children("img");
				if (o.hasClass("music_active")) {
					$("audio")[0].pause();
					o.attr("src", "/oldbackup/Public/images/music-stop.png");
					o.removeClass("music_active")
				} else {
					o.addClass("music_active");
					$("audio")[0].play();
					o.attr("src", "/oldbackup/Public/images/music.png")
				}
			})
			//music--end
		winheight = $(window).height();
		if (winheight > 768) $(".Footer").css({
			"position": "fixed",
			"margin-right": "-400px",
			"right": "50%",
			"width": "800px",
			"bottom": "0px"
		});
	})
</script>
<style>
	.xl_music {
		position: absolute;
		z-index: 20;
		top: 0;
		right: 3%;
		width: 42px;
		height: 42px;
	}
	
	.xl_music img {
		width: 42px;
		padding-top: 8px;
	}
</style>
<main>
<div id="index-container">
	<div id="index-container-box">

		<div id="index-center-centent">
		<section>
			<div class="box-new">
				<div class="img-box">
					<div id="container-img">
						<div id="example">

							<div id="slides">
								<?php if(is_array($article_map)): $i = 0; $__LIST__ = $article_map;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$map): $mod = ($i % 2 );++$i;?><div class="info" title=""></div>
									<div class="slides_container">
										<a href="/oldbackup/Mapshow" title=""><img src="<?php echo ($map['link']); ?>" width="570" height="300" alt="1" title="<?php echo ($map['title']); ?>"></a>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
								<a href="#" class="prev"><img src="/oldbackup/Public/showimages/img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
								<a href="#" class="next"><img src="/oldbackup/Public/showimages/img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
							</div>

						</div>

					</div>
				</div>
			</div>
			</section>
			<section>
			<div class="box-new">

				<div class="tag">最新阅读</div>

				<?php if(is_array($article_mood)): $i = 0; $__LIST__ = $article_mood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mood): $mod = ($i % 2 );++$i;?><div class="title-skill"><a href="/oldbackup/Mood/<?php echo ($mood["id"]); ?>"><?php echo ($mood["title"]); ?></a>
						<div class="time"><?php echo (time_tran(strtotime($mood["now"]))); ?></div><input type="hidden" value="<?php echo (date('Y',strtotime($mood["now"]))); ?>" id="year"><input type="hidden" value="<?php echo (date('m',strtotime($mood["now"]))); ?>" id="month"><input type="hidden" value="<?php echo (date('d',strtotime($mood["now"]))); ?>"
							id="date"></div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="more"><a href='/oldbackup/mood'>more</a></div>

				<div class="tag">最新分享</div>
				<?php if(is_array($article_skill)): $i = 0; $__LIST__ = $article_skill;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$skill): $mod = ($i % 2 );++$i;?><div class="title-skill"><a href="/oldbackup/Skill/<?php echo ($skill['id']); ?>"><?php echo ($skill["title"]); ?></a>
						<div class="time"><?php echo (time_tran(strtotime($skill["now"]))); ?></div><input type="hidden" value="<?php echo (date('Y',strtotime($skill["now"]))); ?>" id="year"><input type="hidden" value="<?php echo (date('m',strtotime($skill["now"]))); ?>" id="month"><input type="hidden" value="<?php echo (date('d',strtotime($skill["now"]))); ?>"
							id="date"></div><?php endforeach; endif; else: echo "" ;endif; ?>
				<div class="more"><a href='/oldbackup/skill'>more</a></div>
			</div>
			</section>
		</div>

	</div>
	<div class="clearFloat"> </div>
	
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/footer.css" />
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/bg.css" />
<script type="text/javascript" src="/oldbackup/Public/js/timeover.js"></script>
<script type="text/javascript">
	$("head").append("<link rel='shortcut icon' type='image/x-icon' href='http://<?php echo ($webinfo['server']); ?>/favicon.png' />");
</script>
<footer>
 <div class="Footer">
<div id="M_c">
 <div id="timebox">
<div id="nowTime"></div> 
</div>
<div id="copy">Copyright &copy;<?php echo ($webinfo['time']); ?> <?php echo ($webinfo['name']); ?> 
<a href="http://<?php echo ($webinfo['server']); ?>"><?php echo ($webinfo['server']); ?></a>
<?php echo ($webinfo['icp']); ?>
</div>

</div>

</div>
</footer>


</div>
</main>
<div class="xl_music">
	<img class="music_active" src="/oldbackup/Public/images/music.png" />
	<div style="display:none;">
		<audio autoplay="autoplay" src="/oldbackup/Public/music/bg.mp3"></audio>
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