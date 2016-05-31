<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">
<head>
<title><?php echo ($title); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge"><!-- ie兼容模式 -->
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
      <a class="navbar-brand" href="/journal/index.php"><img src="/journal/script/images/book.png" style="width:50px;height:25px;margin-top:0;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">首页</a></li>
        <li><a href="#">图书</a></li>
        <li><a href="/journal/index.php/home/jread">期刊</a></li>
        <li><a href="#">个人中心</a></li>
        <li><a href="/journal/index.php/home/bookshelf"><span class="visible-md-block visible-lg-block">书架</span></a></li>
        <li><a href="#"><span class="visible-md-block visible-lg-block">联系我们</span></a></li>
        
        
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
            <li><a href="#">个人资料</a></li>
            <li><a href="#">我的收藏</a></li>
            <li><a href="#">修改密码</a></li>
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
  	<li><a href="#"><span class="label label-danger">我的书架</span></a></li>
  	<a href="#"><li class="active">云刊阅读</li></a>
    <a href="#"><li >我的书籍</li></a>
    <a href="#"><li>账户余额</li></a>
    <a href="#"><li>账号设置</li></a>
  </ul>
</div>
</div>
</span>
<span class="visible-lg-block visible-md-block">
<div class="indiv-content">
	<ul class="active-title">
		<a href="/journal/index.php/home/individual/index"><li class="active">兴趣爱好</li></a>
		<a href="/journal/index.php/home/individual/head"><li>我的头像</li></a>
		<a href="/journal/index.php/home/individual/collection"><li>我的收藏</li></a>
		<a href="/journal/index.php/home/individual/basic"><li>基本资料</li></a>
		<a href="/journal/index.php/home/individual/details"><li>详细资料</li></a>
	</ul>
	<div class="clear"></div>
	<div class="title"><?php echo ($title_indivi); ?></div>
	
	<div class="head-content">
		<div class="now-head">

			<div class="col-md-6">
				<div><strong>当前头像</strong></div>
    <a href="#" class="thumbnail">
      <img data-src="holder.js/100%x180" src="/journal/script/images/b1.jpg" alt="..." style="height: 180px; width: 100%; display: block;">
    </a>
  </div>
		</div>
		<div class="new-head">
		<ul>
			<li><strong>设置新头像</strong></li>
			<li class="gray">支持jpg、png、gif、bmp格式，可以再大照片中裁剪满意部分</li>
			<li><button type="button" class="btn btn-default">选择图片</button></li>
			<li><textarea style="width:100%;min-height:100px;"></textarea></li>
			<li><button type="button" class="btn btn-default">保存头像</button></li>
		</ul>
		</div>
	</div>

</div>
</span>



</div>




<script type="text/javascript" src="/journal/script/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/journal/script/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/journal/dist/js/bootstrap.js"></script>
<script type="text/javascript" src="/journal/script/js/jquery.pin.min.js"></script>
<script type="text/javascript">
//var navigation = responsiveNav("#nav");//启用响应式导航

$(document).ready(function(){
    $('.flexslider').flexslider({
        directionNav: true,
        pauseOnAction: false
    });

    
})

</script>

  </body>
  </html>