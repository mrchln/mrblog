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
<script>$(function(){navlink();})</script>
<div id="Layer1" style="">    
 </div>


<title>时光荏苒 | MrLing</title>
<script type="text/javascript" src="/oldbackup/Public/js/mrling.js"></script>
<script type="text/javascript">
   $(function(){
    textcut();
 })
</script>
<div id="container">
    <div id="container_box">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div id="center_centent">
                
                <div id="author_time" >
                <div class="pancel">
                <div class="title"> <a id="title_a" href="/oldbackup/<?php echo CONTROLLER_NAME; ?>/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></div>
                <span class='author'><?php echo ($vo["author"]); ?></span>
                <span class='time'><?php echo (date("Y,m,d",strtotime($vo["now"]))); ?></span>
                <span class="ds-thread-count" data-thread-key="<?php echo ($vo["id"]); ?>" data-count-type="comments" ></span>
                <span class='readed'>阅读：(<?php echo ($vo["readed"]); ?>)</span>
                </div>
                <!-- 多说js加载开始，一个页面只需要加载一次 -->
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
                
                <hr/>
                <div class="box">
                    <div id="content_index">
                     <span><?php echo (html_entity_decode($vo["content"])); ?></span>
                    </div>
                </div>
                
            </div>
            
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="fenye"><?php echo ($page); ?></div>
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