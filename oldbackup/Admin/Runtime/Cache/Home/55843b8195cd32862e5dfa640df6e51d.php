<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
   
 	<title>后台首页</title>
 	 <div id ="daohang">

	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="javascript:void(0)">Mrling | 后台管理</a>
		</div>
		<div class="navbar-collapse collapse" id="navbar-collapse">
			<ul class="nav navbar-nav collapsed">
				<li>
					<a href="javascript:window.open('../../../index.php')"> <i class="icon-home"></i>
						首页
					</a>
				</li>
				<li>
					<a href="javascript:void(0)"> <i class="icon-user"></i>
						<?php echo $_SESSION['author']."(".$_SESSION['username'].")" ?></a>
				</li>
				<li>
					<a href="http://mrling.duoshuo.com/admin/tools/">
						<i class="icon-comment"></i>
						多说
					</a>
				</li>
				<li>
					<a href="/oldbackup/admin.php/Home/Index/change_login">
						<i class="icon-undo"></i>
						切换账号
					</a>
				</li>
				<li>
					<a href="/oldbackup/admin.php/Home/Index/logout">
						<i class="icon-reply"></i>
						退出
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
						更多 <b class="caret"></b>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="javascript:void(0)">登录日志</a>
						</li>
						<li>
							<a href="http://mrling.duoshuo.com/admin/tools/">评论管理</a>
						</li>
						<li>
							<a href="http://tongji.baidu.com/hm-web/welcome/ico?s=bd0e4dff3b61b7c40da7910c165d6370">网站统计</a>
						</li>
						<li>
							<a href="javascript:void(0)">……</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
 <script type="text/javascript" src="/oldbackup/Public/admin/js/admin.js"></script>
 <link rel="stylesheet" type="text/css" href="/oldbackup/Public/admin/css/input.css" />
  <link href="/oldbackup/Public/zui/dist/css/zui.min.css" rel="stylesheet">
  <link href="/oldbackup/Public/zui/assets/datetimepicker/css/datetimepicker.min.css" rel="stylesheet">
  <link href="/oldbackup/Public/zui/assets/chosen/css/chosen.min.css" rel="stylesheet">
  <link href="/oldbackup/Public/zui/docs/css/doc.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../../../Public/admin/css/admin.css"/>
<script type="text/javascript" src="/oldbackup/Public/admin/js/jquery171mini.js"></script>
 </head>
 <body>
 <div id ="daohang">

	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="javascript:void(0)">Mrling | 后台管理</a>
		</div>
		<div class="navbar-collapse collapse" id="navbar-collapse">
			<ul class="nav navbar-nav collapsed">
				<li>
					<a href="javascript:window.open('../../../index.php')"> <i class="icon-home"></i>
						首页
					</a>
				</li>
				<li>
					<a href="javascript:void(0)"> <i class="icon-user"></i>
						<?php echo $_SESSION['author']."(".$_SESSION['username'].")" ?></a>
				</li>
				<li>
					<a href="http://mrling.duoshuo.com/admin/tools/">
						<i class="icon-comment"></i>
						多说
					</a>
				</li>
				<li>
					<a href="/oldbackup/admin.php/Home/Index/change_login">
						<i class="icon-undo"></i>
						切换账号
					</a>
				</li>
				<li>
					<a href="/oldbackup/admin.php/Home/Index/logout">
						<i class="icon-reply"></i>
						退出
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
						更多 <b class="caret"></b>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="javascript:void(0)">登录日志</a>
						</li>
						<li>
							<a href="http://mrling.duoshuo.com/admin/tools/">评论管理</a>
						</li>
						<li>
							<a href="http://tongji.baidu.com/hm-web/welcome/ico?s=bd0e4dff3b61b7c40da7910c165d6370">网站统计</a>
						</li>
						<li>
							<a href="javascript:void(0)">……</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
 
<div id="admin">
	<div class="panel">
		<div class="panel-heading"> <strong>博客管理</strong>
		</div>
		<div class="panel-body">

			<div id="left">
				
<body onload='set()'>


<ul class="nav nav-secondary">
            <li class="active"><a href="/oldbackup/admin.php/Home/Index/addArticle" onclick="admin_op(0)" target="editor">撰写文章</a></li>
            <li><a href="/oldbackup/admin.php/Home/Index/adminArticle" onclick="admin_op(1)" target="editor">文章管理</a></li>
            <li><a href="/oldbackup/admin.php/Home/Index/setUser" onclick="admin_op(2)" target="editor">用户管理</a></li>
            <li><a href="/oldbackup/admin.php/Home/Index/setAbout" onclick="admin_op(3)" target="editor">关于我</a></li>
            <li><a href="/oldbackup/admin.php/Home/Index/setTag" onclick="admin_op(4)" target="editor">文章设置</a></li>
            <li><a href="/oldbackup/admin.php/Home/Index/setFriends" onclick="admin_op(5)" target="editor">邻居管理</a></li>
            <li><a href="/oldbackup/admin.php/Home/Index/setMap" onclick="admin_op(6)" target="editor">美图管理</a></li>
            <li><a href="/oldbackup/admin.php/Home/Index/setTime" onclick="admin_op(7)" target="editor">网站历程</a></li>
            <li><a href="/oldbackup/admin.php/Home/Index/addPlate" onclick="admin_op(8)" target="editor">板块管理</a></li>
            <li><a href="/oldbackup/admin.php/Home/Index/setAdmin" onclick="admin_op(9)" target="editor">系统设置</a></li>
            <li class="">
              <a class="dropdown-toggle" data-toggle="dropdown" href="###">
                更多 <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="">待开发…</a></li>
              </ul>
            </li>
          </ul>
</body>

			</div>
			<iframe src="/oldbackup/admin.php/Home/Index/addArticle.html" id="iframepage" name="editor" width="100%" scrolling="yes" frameborder="0" onLoad="iFrameHeight()"  ></iframe>

		</div>
	</div>

</div>
<script type="text/javascript" language="javascript"> 
function iFrameHeight() { 
var ifm= document.getElementById("iframepage"); 
var subWeb = document.frames ? document.frames["iframepage"].document : ifm.contentDocument; 
if(ifm != null && subWeb != null) { 
ifm.height = subWeb.body.scrollHeight; 
} 
} 
</script>

  <script src="/oldbackup/Public/zui/assets/jquery.js"></script>
  <script src="/oldbackup/Public/zui/dist/js/zui.min.js"></script>
  <script src="/oldbackup/Public/zui/assets/datetimepicker/js/datetimepicker.min.js"></script>
  <script src="/oldbackup/Public/zui/assets/chosen/js/chosen.jquery.min.js"></script>
  <script src="/oldbackup/Public/zui/assets/chosen/js/chosen.icons.min.js" type="text/javascript"></script>
  <script src="/oldbackup/Public/zui/assets/kindeditor/kindeditor-all-min.js"></script>
  <script src="/oldbackup/Public/zui/docs/js/doc.js"></script>
  <script src="/oldbackup/Public/zui/assets/google-code-prettify/prettify.js"></script>
 </body>
 </html>