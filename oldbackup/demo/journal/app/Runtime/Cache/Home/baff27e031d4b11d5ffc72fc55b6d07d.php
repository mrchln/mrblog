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
<div class="wrapper">

<span class="visible-lg-block">
<div class="nav-book">
<div class ="nav navbar-nav">
  <ul class="ul-book">
  	<li><a href="/journal/index.php"><img src="/journal/script/images/book.png" style="width:50px;height:50px;margin-top:-30;"></a><hr></li>
  	<a href="/journal/index.php/home/individual/like"><li><span class="glyphicon glyphicon-user"></span>  我的资料</li><span ></span></a>
    <a href="/journal/index.php/home/mybook"><li ><span class="glyphicon glyphicon-book"></span> 我的书籍</li><span ></span></a>
    <a href="/journal/index.php/home/bookshelf"><li><span class="
glyphicon glyphicon-cloud"></span> 云刊书架</li><span ></span></a>
    <a href="/journal/index.php/home/account"><li><span class="glyphicon glyphicon-edit"></span> 账号设置</li><span ></span>
  </ul></a>
</div>
</div>
</span>
<span class="visible-lg-block visible-md-block">
<div class="indiv-content">
	<ul class="active-title">
		<a href="/journal/index.php/home/individual/like"><li >兴趣爱好</li></a>
		<a href="/journal/index.php/home/individual/head"><li>我的头像</li></a>
		<a href="/journal/index.php/home/individual/collection"><li >我的收藏</li></a>
		<a href="/journal/index.php/home/individual/basic"><li >基本资料</li></a>
		<a href="/journal/index.php/home/individual/details"><li>详细资料</li></a>
	</ul>
	<div class="clear"></div>

	<div class="set-content">
		<div class="word">
					<span> <strong>完善自己的资料，让别人更深入的了解你吧~</strong>
					</span>
				</div>
		<ul>
			<li>真实姓名：</li>
			<li>性别：</li>
			<li>生日：</li>
			<li>身高：</li>
			<li>毕业院校：</li>
			<li>职业：</li>
			<li>居住地：</li>
			<li>家乡：</li>
			<li><button type="button" class="btn btn-danger">修改</button></li>
		</ul>
	</div>

</div>
</span>



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