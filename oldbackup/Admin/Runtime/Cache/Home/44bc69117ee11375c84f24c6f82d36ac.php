<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="/Public/zui/dist/css/zui.min.css" rel="stylesheet">
	<link href="/Public/zui/assets/datetimepicker/css/datetimepicker.min.css" rel="stylesheet">
	<link href="/Public/zui/assets/chosen/css/chosen.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/Public/admin/css/admin.css" />
	<script type="text/javascript" src="/Public/admin/js/admin.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection"content="telephone=no, email=no" />
</head>
<body>
	

<form method='post' action='/admin.php/Home/Index/apFriends'> 

	<br/>
	<div class="input-group">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">邻居：</button>
		</span>

		<input class="form-control" type="text" value="" name="name" placeholder='' autofocus/>

	</div>

	<br/>
	<div class="input-group">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">标语：</button>
		</span>
		<input class="form-control" type="text" value="" name="msg" placeholder='' />
	</div>

	<br/>

	<div class="input-group">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">网址：</button>
		</span>
		<input class="form-control" type="text" value="" name="lin" placeholder='http://' />

	</div>

	<br/>
	<div class="input-group">
		<span class="input-group-btn">
			<button class="btn btn-default" type="button">logo：</button>
		</span>
		<input class="form-control" type="text" value="" name="log" placeholder='http://' />

	</div>
	<br/>

<input type="hidden" value="" name='id' />
	<br/>
	<input type="submit" value="提交" name="submit" class="btn btn-large btn-block btn-primary" />
	<input type="reset" value="重置" name="" class="btn btn-large btn-block btn-defualt" />

</form>
	<script src="/Public/zui/assets/jquery.js"></script>
	<script src="/Public/zui/dist/js/zui.min.js"></script>
	<script src="/Public/zui/assets/datetimepicker/js/datetimepicker.min.js"></script>
	<script src="/Public/zui/assets/chosen/js/chosen.jquery.min.js"></script>
	<script src="/Public/zui/assets/chosen/js/chosen.icons.min.js" type="text/javascript"></script>
	<script src="/Public/zui/assets/kindeditor/kindeditor-all-min.js"></script>
	<script src="/Public/zui/docs/js/doc.js"></script>
	<script src="/Public/zui/assets/google-code-prettify/prettify.js"></script>

</body>
</html>