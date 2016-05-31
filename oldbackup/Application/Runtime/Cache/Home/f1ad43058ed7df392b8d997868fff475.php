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


<script type="text/javascript" src="/oldbackup/Public/js/mrling.js"></script>
<script type="text/javascript">
   $(function(){
    textcut();
 })
</script>
<div id="container">
    <div id="container_box">
            <div id="center_centent">
                
                <div id="author_time" >
                
                <?php
 $map['tag'] = array('like','%'.$tagid.'%'); $n=0; $m=0; $arr_m=$fun->seach($mood,6,false,"now desc",$map); $arr_s=$fun->seach($skill,6,false,"now desc",$map); $arr_mood=$arr_m['selectArticle']; $arr_skill=$arr_s['selectArticle']; $page_mood=$arr_m['show']; $page_skill=$arr_s['show']; echo "<div class='tagresult'>--以下是检索标签：【".$selecttag[0]['tagname']."】得到的所有结果--</div>"; echo "<div class='tagresult'>--【时光荏苒】返回的结果--</div>"; if(empty($arr_mood)){ echo "<div class='tagresult'>没有获得任何数据……</div>"; } for($a=0;$a<count($arr_mood);$a++){ $source=$arr_mood[$a]['tag']; $taglist = explode(',',$source); for($index=0;$index<count($taglist);$index++){ if($tagid==$taglist[$index]){ $n++; echo "<div class='pancel'>"; echo "<div class='title'> <a id='title_a' href='/oldbackup/mood/".$Easycode->encode($arr_mood[$a]['id'])."'>".$arr_mood[$a]['title']."</a></div>"; echo "<span class='author'>".$arr_mood[$a]['author']."</span>"; echo "<span class='time'>".$arr_mood[$a]['now']."</span>"; echo "<span class='ds-thread-count' data-thread-key='".$Easycode->encode($arr_mood[$a]['id'])."' data-count-type='comments' ></span>"; echo "<span class='readed'>阅读：(".$arr_mood[$a]['readed'].")</span>"; echo "</div>"; echo "<hr/><div class='box'><div id='content_index'><span>".$arr_mood[$a]['content']."</span></div></div>"; } } } echo "<div class='tagresult'>--【一技分享】返回的结果--</div>"; if(empty($arr_skill)){ echo "<div class='tagresult'>没有获得任何数据……</div>"; } for($a=0;$a<count($arr_skill);$a++){ $source=$arr_skill[$a]['tag']; $taglist = explode(',',$source); for($index=0;$index<count($taglist);$index++){ if($tagid==$taglist[$index]){ $m++; echo "<div class='pancel'>"; echo "<div class='title'> <a id='title_a' href='/oldbackup/skill/".$Easycode->encode($arr_skill[$a]['id'])."'>".$arr_skill[$a]['title']."</a></div>"; echo "<span class='author'>".$arr_skill[$a]['author']."</span>"; echo "<span class='time'>".$arr_skill[$a]['now']."</span>"; echo "<span class='ds-thread-count' data-thread-key='".$Easycode->encode($arr_skill[$a]['id'])."' data-count-type='comments' ></span>"; echo "<span class='readed'>阅读：(".$arr_skill[$a]['readed'].")</span>"; echo "</div>"; echo "<hr/><div class='box'><div id='content_index'><span>".$arr_skill[$a]['content']."</span></div></div>"; } } } ?>
                
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
<div id="copy">Copyright &copy;<?php echo ($webinfo['time']); ?> <?php echo ($webinfo['name']); ?> 
<a href="http://<?php echo ($webinfo['server']); ?>"><?php echo ($webinfo['server']); ?></a>
<?php echo ($webinfo['icp']); ?>
</div>

</div>

</div>
</footer>

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