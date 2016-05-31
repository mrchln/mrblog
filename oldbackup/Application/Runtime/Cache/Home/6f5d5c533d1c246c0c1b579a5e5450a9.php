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


<script type="text/javascript"> 
$(document).ready(function(){
//$("#friendsContent").hide();
//$(".calssTitle").click(function(){
//  $(this).next("div").slideToggle("slow");
//});

/*---------最新前三篇文章高亮显示-------------*/
function latest(){
  var color_arr=new Array(
      "#CC9900",                                             //第1行颜色，以此类推
      "#CC9933",
      "#CC9966",
      "#CC9999"
    );
      start=1;                                            //从第几行开始，默认从第1行
  var classdiv='.calssTitle';                             //上一个id，此div必须定义
  var color='';
  var colornum=color_arr.length;
  //alert(color_arr.length);
  //alert(div_num);
  start-=1;
  for(start;start<=colornum;start++){
  $(classdiv).next('div').find('a').eq(start).children('div').css({'color': color_arr[start]
});

}
}
latest();
duoshuo()

function duoshuo() {
	var l = $("input[name=threadsid]");
	var c = l.length;
	var j = 0;
	var uid = "mrling"; //多说用户ID，也就是二级域名 
	for (i=0;i<c;i++) {
		var aid = l[i]['value']; //文章ID，唯一的文章标识。 
		//console.log(aid);
		var getstr = "http://api.duoshuo.com/threads/counts.jsonp?short_name=" + uid + "&threads=" + aid + "&callback=?";
	$.getJSON(getstr, function(data) {
		j++;
		var comval = '';
		var l = $("input[name=threadsid]");
		var c = l.length;
		$.each(data.response, function(b, item) {
			comval += item.comments;
			$.each(l, function() {  //遍历评论标签，与当前的多说key对比，相同则赋予评论值
				if ($(this).val() == item.thread_key) {
					//console.log(item.thread_key);
					$(this).prev(".info").find("#threads").text(comval);
				}
				
			});
		});
	});
	
		
	}
}

});</script>
	
	<div class="logo index"><div class="shadeDiv"></div><link rel="stylesheet" type="text/css" href="/oldbackup/Public/MT/css/head.css" />
<header id="daohang_box">
<div><a href="/oldbackup/index.php/Home/Mt">汉服青史 </a></div>
<div><a href="/oldbackup/index.php/Home/Mt/message">留言</a></div>
<!--<div><a href="/oldbackup/index.php/Home/Mt/about" target="index">关于</a></div>-->
</header></div>
	<section>
      <div class="calssTitle">
          <h2>最新阅读<span><a href='/oldbackup/index.php/home/Mt/center'>更多</a></span></h2>
      </div>
      <div id="moodContent">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="mt-ar-link" href="/oldbackup/index.php/home/Mt/detailed/id/<?php echo ($vo["id"]); ?>"><div class="contentIndex"><?php echo ($vo["title"]); ?>
         	<div class="info"> <span class="resource"><?php echo ($vo["author"]); ?></span> <span class="icon type1"></span> <?php echo (date("m-d",strtotime($vo["now"]))); ?> <span id="threads">1</span></div>
         	<input type="hidden" name="threadsid" id="threadsid" value="<?php echo ($Easycode->encode($vo['id'])); ?>" />
         </div>
         </a><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      </section>
   
  	<!--<section>
      <div class="calssTitle"><h2>技术精粹<span><a href='/oldbackup/index.php/home/Mt/center'>更多</a></span></h2></div>
   </section>-->
<!--       <section><div class="calssTitle"><h2>美图欣赏<span><a href='/oldbackup/index.php/home/Mt/center'>更多</a></span></h2></div></section>
      <div></div>
     <section> <div class="calssTitle"><h2>网站历程<span><a href='/oldbackup/index.php/home/Mt/center'>更多</a></span></h2></div></section>
    
      <div></div>
     <section><div class="calssTitle"><h2>友好邻居<span><a href='/oldbackup/index.php/home/Mt/friends'>更多</a></span></h2></div></section>
    <div id="friendsContent">
          <?php if(is_array($friends)): $i = 0; $__LIST__ = $friends;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="contentIndex"><a href="<?php echo ($vo["link"]); ?>"><?php echo ($vo["nearly"]); ?></a>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
-->  
  
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