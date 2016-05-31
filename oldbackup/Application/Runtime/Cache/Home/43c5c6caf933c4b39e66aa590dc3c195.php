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


<link rel="stylesheet" type="text/css" href="/oldbackup/Public/MT/css/detailed.css" />
<body>
	
	<div id="nowLoation"><?php echo ($locationArr['/oldbackup/index.php/Home/Mt']); ?></div>
	<section>
      <div class="calssTitle">
          <h2>我的"<?php echo ($selecttag[0]['tagname']); ?>"</h2>
      </div>
      <div id="moodContent">
      	<?php
 $map['tag'] = array('like','%'.$tagid.'%'); $n=0; $m=0; $arr_m=$fun->seach($mood,6,false,"now desc",$map); $arr_s=$fun->seach($skill,6,false,"now desc",$map); $arr_mood=$arr_m['selectArticle']; $arr_skill=$arr_s['selectArticle']; $page_mood=$arr_m['show']; $page_skill=$arr_s['show']; if(empty($arr_mood)){ echo "<div class='tagresult'>没有获得任何数据……</div>"; } for($a=0;$a<count($arr_mood);$a++){ $source=$arr_mood[$a]['tag']; $taglist = explode(',',$source); for($index=0;$index<count($taglist);$index++){ if($tagid==$taglist[$index]){ $n++; echo "<a class='mt-ar-link' href='/oldbackup/mt/detailed/id/".$Easycode->encode($arr_mood[$a]['id'])."'><div class='contentIndex'>".$arr_mood[$a]['title'].""; echo "<div class='info'><span class='resource'>".$arr_mood[$a]['author']."</span>"; echo "  <span class='icon type1'>".date('m,d',strtotime($arr_mood[$a]['now']))."</span>"; echo "</div></div></a>"; } } } if(empty($arr_skill)){ } for($a=0;$a<count($arr_skill);$a++){ $source=$arr_skill[$a]['tag']; $taglist = explode(',',$source); for($index=0;$index<count($taglist);$index++){ if($tagid==$taglist[$index]){ $m++; echo "<a class='mt-ar-link' href='/oldbackup/mt/detailed/id/".$arr_skill[$a]['id']."'><div class='contentIndex'>".$arr_mood[$a]['title'].""; echo "<div class='info'><span class='resource'>".$arr_skill[$a]['author']."</span>"; echo "  <span class='icon type1'>".date('m,d',strtotime($arr_skill[$a]['now']))."</span>"; echo "</div></div></a>"; } } } ?>
        
      </div>
      </section>
  
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
<footer class="footer fixed-bottom"></footer>	
</div>
</div>

</body>
</html>