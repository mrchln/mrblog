<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="/oldbackup/Public/zui/dist/css/zui.min.css" rel="stylesheet">
	<link href="/oldbackup/Public/zui/assets/datetimepicker/css/datetimepicker.min.css" rel="stylesheet">
	<link href="/oldbackup/Public/zui/assets/chosen/css/chosen.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/oldbackup/Public/admin/css/admin.css" />
	<script type="text/javascript" src="/oldbackup/Public/admin/js/admin.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection"content="telephone=no, email=no" />
</head>
<body>
	
<?php if(is_array($about)): foreach($about as $key=>$me): ?><div class="guanyu">
<div id="box_shor">

<div class="box">
<form method="post" action="/oldbackup/admin.php/Home/Index/editorAbout">
<div class="panel">
	<div class="panel-heading">个性签名</div>
	<div class="panel-body">
	<?php echo (html_entity_decode($me["gxqm"])); ?>
<input type="hidden" value="<?php echo ($me["gxqm"]); ?>" name="gxqm">
<input type="hidden" value="gxqm" name="post">
</div>
<a href="/oldbackup/admin.php/Home/Index/editorAbout?post=gxqm" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
		编辑
	</a>
</div>
</form>
</div>


<div class="box">
<form method="post" action="/oldbackup/admin.php/Home/Index/editorAbout">
<div class="panel">
	<div class="panel-heading">个人感触</div>
	<div class="panel-body">
	<?php echo (html_entity_decode($me["grgc"])); ?>
<input type="hidden" value="<?php echo ($me["grgc"]); ?>" name="grgc">
<input type="hidden" value="grgc" name="post">
</div><a href="/oldbackup/admin.php/Home/Index/editorAbout?post=grgc" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
		编辑
	</a>
</div>
</form>
</div>

<div class="box">
<form method="post" action="/oldbackup/admin.php/Home/Index/editorAbout">
<div class="panel">
	<div class="panel-heading">网站历程</div>
	<div class="panel-body">
<?php echo (html_entity_decode($me["grjl"])); ?>
<input type="hidden" value="<?php echo ($me["grjl"]); ?>" name="grjl">
<input type="hidden" value="grjl" name="post">
</div><a href="/oldbackup/admin.php/Home/Index/editorAbout?post=grjl" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
		编辑
	</a>
</div>
</form>
</div>

<div class="box">
<form method="post" action="/oldbackup/admin.php/Home/Index/editorAbout">
<div class="panel">
	<div class="panel-heading">qq</div>
	<div class="panel-body">
<?php echo (html_entity_decode($me["qq"])); ?>
<input type="hidden" value="<?php echo ($me["qq"]); ?>" name="qq">
<input type="hidden" value="qq" name="post"></div>
<a href="/oldbackup/admin.php/Home/Index/editorAbout?post=qq" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
		编辑
	</a>
</div>
</form>
</div>

<div class="box">
<form method="post" action="/oldbackup/admin.php/Home/Index/editorAbout">
<div class="panel">
	<div class="panel-heading">姓名</div>
	<div class="panel-body">
<?php echo (html_entity_decode($me["name"])); ?>
<input type="hidden" value="<?php echo ($me["name"]); ?>" name="name">
<input type="hidden" value="name" name="post"></div>
<a href="/oldbackup/admin.php/Home/Index/editorAbout?post=name" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
		编辑
	</a>
</div>
</form>
</div>

<div class="box">
<form method="post" action="/oldbackup/admin.php/Home/Index/editorAbout">
<div class="panel">
	<div class="panel-heading">联系电话</div>
	<div class="panel-body">
<?php echo (html_entity_decode($me["phone"])); ?>
<input type="hidden" value="<?php echo ($me["phone"]); ?>" name="phone">
<input type="hidden" value="phone" name="post"></div>
<a href="/oldbackup/admin.php/Home/Index/editorAbout?post=phone" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
		编辑
	</a>
</div>
</form>
</div>

<div class="box">
<form method="post" action="/oldbackup/admin.php/Home/Index/editorAbout">
<div class="panel">
	<div class="panel-heading">联系地址</div>
	<div class="panel-body">
<?php echo (html_entity_decode($me["adress"])); ?>
<input type="hidden" value="<?php echo ($me["adress"]); ?>" name="adress">
<input type="hidden" value="adress" name="post"></div>
<a href="/oldbackup/admin.php/Home/Index/editorAbout?post=adress" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
		编辑
	</a>
</div>
</div>
</form>
</div>
</div><?php endforeach; endif; ?>
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