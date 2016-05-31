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
<title>留言|MrLing</title>
<link rel="shortcut icon" href="images/title.png" />
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/message.css" />
<script type="text/javascript" src="/oldbackup/Public/js/mrling.js"></script>
<script type="text/javascript">
	$(function(){
		filediv();
		

	})
</script>
</head>

<body>

<div id="message">
<!-- 留言内容   -->
<div id="message_box">
<div id="logo-file"></div>
    <div id="title">《落叶归根》实为本博客的数据归档</div>
    <div class="file-box">
    <div class="box-title">文章归档</div>
    <div class="fengexian"></div>
    <div class="all"><span class='ico'>　　</span>全部博文</div>
    <div class="box-content">
    <div class="nav-title"><span class='ico'>　　</span>时光荏苒</div>
    <div class="box-year">
	<?php $fun->selectfile("mood",$mood,2014,2024,"now","desc");?>
	</div>
	 <div class="nav-title"><span class='ico'>　　</span>一技分享</div>
	 <div class="box-year">
	<?php $fun->selectfile("skill",$skill,2014,2024,"now","desc"); ?>
	</div>
	</div>
	<div class="box-title">文章统计</div>
	<div class="fengexian"></div>
	<div class="file-all">
		<div><strong>时光荏苒：</strong><span>共 <?php echo ($moodcount); ?> 篇文章</span></div>
		<div><strong>一技分享：</strong><span>共 <?php echo ($skillcount); ?> 篇文章</span></div>
		<div><strong>阅读总数：</strong><span>共 <?php echo ($count); ?> 次阅读</span></div>
		<div><strong>所有标签：</strong></div>
		<div class="tag">
		<?php
 $count=count($selecttag); for($i=0;$i<$count;$i++){ $map['tag'] = array('like','%'.$selecttag[$i]['id'].'%'); $n=0; $m=0; $arr_mood=$mood->where($map)->select(); $arr_skill=$skill->where($map)->select(); for($a=0;$a<count($arr_mood);$a++){ $source=$arr_mood[$a]['tag']; $taglist = explode(',',$source); for($index=0;$index<count($taglist);$index++){ if($selecttag[$i]['id']==$taglist[$index]){ $n++; } } } for($a=0;$a<count($arr_skill);$a++){ $source=$arr_skill[$a]['tag']; $taglist = explode(',',$source); for($index=0;$index<count($taglist);$index++){ if($selecttag[$i]['id']==$taglist[$index]){ $m++; } } } $total=$m+$n; echo "<a href='/oldbackup/Tagseach/index/tagid/".$selecttag[$i]['id']."' title='".$total."个话题'><span>".$selecttag[$i]['tagname']."</span></a>"; } ?>
		</div>
	</div>
	<div class="box-title">最近编辑</div>
	<div class="fengexian"></div>
	<div class="file-all">
	<?php if(is_array($updatemood)): $i = 0; $__LIST__ = $updatemood;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mood): $mod = ($i % 2 );++$i;?><div><a href='mood/<?php echo ($mood[id]); ?>'><?php echo ($mood['title']); ?></a> 　　<span class='update'>最后修改于：<?php echo ($mood['updatetime']); ?></span></div><?php endforeach; endif; else: echo "" ;endif; ?>
	<?php if(is_array($updateskill)): $i = 0; $__LIST__ = $updateskill;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$skill): $mod = ($i % 2 );++$i;?><div><a href='skill/<?php echo ($skill[id]); ?>'><?php echo ($skill['title']); ?></a> 　　<span class='update'>最后修改于：<?php echo ($skill['updatetime']); ?></span></div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<div class="box-title">最近一月内的热评文章</div>
	<div class="fengexian"></div>
	<div class="file-all">
	<!-- 多说热评文章 start -->
	<div class="ds-top-threads" data-range="monthly" data-num-items="4" ></div>
<!-- 多说热评文章 end -->
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
	<div class="box-title">最新的评论</div>
	<div class="fengexian"></div>
	<div class="file-all">
	<!-- 多说最新评论 start -->
	<div class="ds-recent-comments" data-num-items="5" data-show-avatars="1" data-show-time="1" data-show-title="1" data-show-admin="1" data-excerpt-length="70"></div>
<!-- 多说最新评论 end -->
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