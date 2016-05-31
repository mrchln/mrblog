<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
	  <meta content="yes" name="apple-mobile-web-app-capable">
	  <meta content="black" name="apple-mobile-web-app-status-bar-style">
	  <meta name="format-detection" content="telephone=no, email=no">
	
	
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/MT/css/head.css" />
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/MT/css/footer.css" />
<script type="text/javascript" src="/oldbackup/Public/js/jquery171mini.js"></script>
<script type="text/javascript" src="/oldbackup/Public/MT/js/iframe.js"></script>
<script type="text/javascript" src="/oldbackup/Public/js/timeover.js"></script>	
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/MT/css/bg.css" />
<title>汉服青史-移动端</title>
<style type="text/css">

</style>
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
<div class="wrap-page-webapp">
<div class="wrap-page">


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
	  <meta content="yes" name="apple-mobile-web-app-capable">
	  <meta content="black" name="apple-mobile-web-app-status-bar-style">
	  <meta name="format-detection" content="telephone=no, email=no">
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><title></title>

<link rel="stylesheet" type="text/css" href="/oldbackup/Public/MT/css/detailed.css" />
<link rel="shortcut icon" href="Public/images/title.png" />
<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/shCoreDefault.css" />
<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/shCore.js"></script>
<script type="text/javascript">      
//为了在编辑器之外能展示高亮代码
//SyntaxHighlighter.all();   

//$("#zuozhe").find("a").live("click",function(){
//		srcHeight=$(document).height(); 
//		$('html,body').animate({scrollTop: srcHeight}, 800);	
//	})
	
$(function(){
		//alert($("#title_hidden").val());
		//alert(1);
		document.title=$("#title_hidden").val();
		$("embed").css({display:"none"});
})
	
</script>
</head>

<body>

<div class="boxcontent">
<div id="nowLoation"><?php echo ($locationArr['/oldbackup/index.php/Home/Mt']); ?></div>
<div id="boxcontent_box">
			<article>
            <div id="title"><h4><?php echo ($vo["title"]); ?></h4></div>
            <div id="zuozhe"><?php echo ($vo["author"]); ?>　<?php echo ($vo["now"]); ?><a href="javascript:void()"></a>
			<!-- 多说js加载结束，一个页面只需要加载一次 --></div>
            <div id="content"><?php echo ($vo["content"]); ?></div>
            </article>
            <section>
            <form method="post" action="/oldbackup/index.php/Home/Mt">
  			<input name="seach_classify" type="hidden" value="<?php echo ($vo["classify"]); ?>" />
            <div id="biaoqian"><span> Tags：
            	<?php for($index=0;$index<count($tags);$index++){ $tagsa=$tagdata->where('id=%d',$tags[$index])->select(); echo "<a id='tag' href='/oldbackup/mt/tagseach/tagid/".$tagsa[0]['id']."'>".($tagsa[0]['tagname'])."</a>&nbsp&nbsp&nbsp" ; } ?>
</span>
			<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
            </div>
            </form>
            <?php if(is_array($before)): foreach($before as $key=>$b): ?><div id="befor">上一篇：<a href="/oldbackup/index.php/Home/Mt/detailed/id/<?php echo ($b["id"]); ?>"><?php echo ($b["title"]); ?></a></div><?php endforeach; endif; ?>
            <?php if(is_array($after)): foreach($after as $key=>$a): ?><div id="next">下一篇：<a href="/oldbackup/index.php/Home/Mt/detailed/id/<?php echo ($a["id"]); ?>"><?php echo ($a["title"]); ?></a></div><?php endforeach; endif; ?>
			<input id="title_hidden" name="" type="hidden" value="<?php echo ($locationArr['htmltitle']); ?>" /><?php endforeach; endif; ?>
            </section>
            <section>
            <div id="duoshuo">
            <!-- 多说评论框 start -->
			<div class="ds-thread" data-thread-key="<?php echo ($vo["id"]); ?>" data-title="<?php echo ($vo["title"]); ?>" data-url="http://<?php echo ($HTTP_HOST); ?>//oldbackup/index.php/Home/Mt/detailed/id/<?php echo ($vo["id"]); ?>"></div>
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
			            </section>
</div>
</div>
   
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title></title>

</head>
<script type="text/javascript">
	$("head").append("<link rel='shortcut icon' type='image/x-icon' href='http://<?php echo ($webinfo['server']); ?>/favicon.png' />");
</script>
<body>

 <div class="Footer">


<div id="M_c">
 <!--<div id="timebox">
<div id="nowTime"></div> 
</div>-->

<div id="copy">&copy;<?php echo ($webinfo['time']); ?> 
<a href="http://<?php echo ($webinfo['server']); ?>"><?php echo ($webinfo['name']); ?></a>
<?php echo ($webinfo['icp']); ?>
</div>
<div id="change"><a href="">手机版</a>	<a href="">电脑版</a></div>
</div>

</div>
</body>
</html>

</body>
</html>	
</div>
</div>

</body>
</html>