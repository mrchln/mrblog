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


    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
      <meta content="yes" name="apple-mobile-web-app-capable">
      <meta content="black" name="apple-mobile-web-app-status-bar-style">
      <meta name="format-detection" content="telephone=no, email=no">
      	
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/MT/css/center.css" />
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/MT/css/detailed.css" />
<body>
<div id="container"> 
<div id="nowLoation"><?php echo ($locationArr['/oldbackup/index.php/Home/Mt']); ?></div>
<div id="container_box">

   <section>
      <div class="calssTitle">
          <h2>心情文章</h2>
      </div>
      <div id="moodContent">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="mt-ar-link" href="/oldbackup/index.php/home/Mt/detailed/id/<?php echo ($vo["id"]); ?>"><div class="contentIndex"><?php echo ($vo["title"]); ?>
         	<div class="info"> <span class="resource"><?php echo ($vo["author"]); ?></span> <span class="icon type1"></span> <?php echo ($time["time"]); ?></div>
         	
         </div>
         </a><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      </section>
    
<div class="fenye"> 
<?php echo ($page); ?>
 </div>  
 <br/>

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
</div>
</div>

</body>
</html>