<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">
<head>
<title><?php echo ($title); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"><!-- ie兼容模式 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/journal/dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/journal/dist/css/docs.min.css">
<link rel="stylesheet" type="text/css" href="/journal/script/css/journal.css">


  </head>
  <!-- ... -->

  <body>
  
<div class="header-ban"></div>	

<nav class="navbar navbar-inverse" role="navigation">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/journal/index.php"><img src="/journal/script/images/book.png" style="width:40px;height:40px;margin-top:-10;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="head-nav">
        <li><a href="/journal/index.php/home/bookshelf">书架</a></li>
        <li><a href="/journal/index.php/home/jread">期刊</a></li>
        <li><a href="/journal/index.php/home/individual/like">个人中心</a></li>
        
        
      </ul>
      <span class="visible-md-block visible-lg-block">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <div class="input-group">
          <input type="text" class="form-control">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div><!-- /input-group -->
        </div>
        
      </form>
      </span>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/journal/index.php/home/individual/basic">个人资料</a></li>
            <li><a href="/journal/index.php/home/individual/collection">我的收藏</a></li>
            <li class="divider"></li>
            <li><a href="#">退出</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="login-box">
<div class="header"></div>
<span class="visible-sm-block visible-lg-block visible-md-block">
<div class="left">
  <img src="/journal/script/images/rb1.jpg" width="100%">
</div>
</span>
<div class="right">
  <div class="title"><span>登录云刊</span></div>

<div class="center">
<div class="col-md-8">

<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
  <input type="text" class="form-control" placeholder="您的注册邮箱"/>
</div>
</div>
<div class="col-md-8">
<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
  <input type="text" class="form-control" placeholder="您的密码"/>
</div>
<div class="user-link">
<a href="" class="forget-pw">忘记密码</a>
<a href="">免费注册</a>
<div class="clear"></div>
<buton type="button" class="btn btn-danger">登录</buton>
</div>




</div>
</div>
</div>
<div class="clear"></div>
<hr/>
<div class="footer"><ul><li>© 2012 现代传播 — 现代移动数码</li><li>Modern Mobile Digital Media Co. Ltd. All Rights Reserved. <a href="http://www.miibeian.gov.cn/">粤ICP备10213522号-2</a></li></ul></div>




</div>








<script type="text/javascript" src="/journal/script/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/journal/script/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/journal/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/journal/dist/js/tooltip.js"></script>
<script type="text/javascript" src="/journal/dist/js/docs.min.js"></script>
<script type="text/javascript" src="/journal/script/js/jquery.pin.min.js"></script>
<script type="text/javascript">
//var navigation = responsiveNav("#nav");//启用响应式导航

$(document).ready(function(){
    $('.flexslider').flexslider({
        directionNav: true,
        pauseOnAction: false
    });

    
})
$(function($){
	//顶部导航
	var li=$("#head-nav").find("li");
	li.each(function(){
		//alert(li.length);
		var str=["Bookshelf","Jread","Individual"];
		var str2=["bookshelf","jread","individual"];
		var url=window.location.pathname;
				for(var i=0;i<str.length;i++){
					if(url.indexOf(str[i])>0||url.indexOf(str2[i])>0){
						li.eq(i).attr("class","active");
						return;
					}
				}	
	})
	//个人中心
	var li=$(".active-title").children("a");
	$(".active-title").find("li").each(function(){

		var str=["like","head","collection","basic","detail"];
		var url=window.location.pathname;
				for(var i=0;i<str.length;i++){
					if(url.indexOf(str[i])>0){
						li.eq(i).children("li").attr("class","active");
						return;
					}
				}	
	})
	//
	var li=$(".ul-book").children("a");
	$(".ul-book").find("a").each(function(){

		var str=["Individual","Mybook","Bookshelf","Account"];
		var str2=["individual","mybook","bookshelf","account"];
		var url=window.location.pathname;
				for(var i=0;i<str.length;i++){
					if(url.indexOf(str[i])>0||url.indexOf(str2[i])>0){
						li.eq(i).children("span").attr("class","triangle-left");
						li.eq(i).children("li").attr("class","active");
						return;
					}
				}	
	})
})


	</script>
  </body>
  </html>