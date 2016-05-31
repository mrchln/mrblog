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
	
<form method="post" action="/admin.php/Home/Index/editorAbouta">
<br/>
<input type="hidden" name="change" value="<?php echo ($change); ?>">
<input type="hidden" name="id" value="<?php echo ($id); ?>">
<div class="col-xs-12">
<textarea class="form-control" rows="5" cols="5" name="content" autofocus><?php echo ($arr); ?></textarea>
<br/>
</div>

<input class="btn btn-large btn-block btn-primary" type="submit" value="提交" class="button gray">
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