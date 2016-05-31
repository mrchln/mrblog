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


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>汉服青史</title>
<script type="text/javascript" src="/oldbackup/Public/js/mrling.js"></script>
<script type="text/javascript">      
//为了在编辑器之外能展示高亮代码
//SyntaxHighlighter.all();   
$(function(){

	content_div="#content-detailed";
	bg_div="#bgDiv";
	img_div=".big-img";
	prev_div=".prev";
	next_div=".next";
	acitive="width";
	speed=300;
	imgshow();
	time_comment();	
	$("video").css({display:"none"});
})

	
</script>
</head>

<body>
<main>
<!--BAIDU_YUNTU_END-->
<div class='big-img'></div>
<div id="bgDiv"></div>
<div class="prev" title="上一张"></div>
<div class="next" title="下一张"></div>
<div class="boxcontent">
<div id="boxcontent_box">
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><br />
            <div id="zuozhe"><span class='author'>作者：<?php echo ($vo["author"]); ?></span><span class='time'>发表于：<?php echo (date("Y-m-d",strtotime($vo["now"]))); ?></span><span class='updatetime'>最后修改于：<?php echo (date("m-d H:i:s",strtotime($vo["updatetime"]))); ?></span><span class='readed'>阅读：(<?php echo ($vo["readed"]); ?>)</span>　<a href="javascript:void()"><span class="ds-thread-count" data-thread-key="<?php echo ($vo["id"]); ?>" data-count-type="comments"></span></a><!-- 多说js加载开始，一个页面只需要加载一次 -->
			<script type="text/javascript">
			var duoshuoQuery = {short_name:"mrling"};
			(function() {
			    var ds = document.createElement('script');
			    ds.type = 'text/javascript';ds.async = true;
			    ds.src = 'http://static.duoshuo.com/embed.js';
			    ds.charset = 'UTF-8';
			    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
			})();
			</script>
			<!-- 多说js加载结束，一个页面只需要加载一次 -->
			<div class="hr"><hr></div>
			</div>
			<article>
			<br />
			<header><div id="title"><h3><?php echo ($vo["title"]); ?></h3></div></header>
			<div id="content-detailed"><p><?php echo ($vo["content"]); ?></p></div>
            </article>
  			<div id="biaoqian">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tags:&nbsp&nbsp&nbsp
  			<?php for($index=0;$index<count($tags);$index++){ $tagsa=$tagdata->where('id=%d',$tags[$index])->select(); echo "<a id='tag' href='/oldbackup/tagseach/index/tagid/".$tagsa[0]['id']."'>".($tagsa[0]['tagname'])."</a>&nbsp&nbsp&nbsp" ; } ?>
<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_mshare" data-cmd="mshare" title="分享到一键分享"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin","sqq","mshare"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin","sqq","mshare"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
			<div class="share">
				<fieldset>
					<legend>作者：<?php echo ($vo["author"]); ?></legend>
					本文链接：http://<?php echo ($HTTP_HOST); ?>/oldbackup/Mood/Mczxkpwh
				</fieldset>
			</div>
	  		</div>
            
            <?php if(is_array($before)): foreach($before as $key=>$b): ?><div id="befor">上一篇：<a href="/oldbackup/<?php echo CONTROLLER_NAME ?>/<?php echo ($b["id"]); ?>"><?php echo ($b["title"]); ?></a></div><?php endforeach; endif; ?>
            <?php if(is_array($after)): foreach($after as $key=>$a): ?><div id="next">下一篇：<a href="/oldbackup/<?php echo CONTROLLER_NAME ?>/<?php echo ($a["id"]); ?>"><?php echo ($a["title"]); ?></a></div><?php endforeach; endif; ?>
			<input id="title_hidden" name="" type="hidden" value="<?php echo ($vo["title"]); ?> | 汉服青史" />
           
            
            <div id="duoshuo">
            <!-- 多说评论框 start -->
			<div class="ds-thread" data-thread-key="<?php echo ($vo["id"]); ?>" data-title="<?php echo ($vo["title"]); ?>" data-url="http://<?php echo ($HTTP_HOST); ?>/<?php echo CONTROLLER_NAME ?>/<?php echo ($vo["id"]); ?>"></div>

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

</div><?php endforeach; endif; ?>

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
	
</main>

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