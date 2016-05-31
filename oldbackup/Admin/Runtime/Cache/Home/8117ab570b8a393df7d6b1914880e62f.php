<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="/MrLingBlog/Public/zui/dist/css/zui.min.css" rel="stylesheet">
	<link href="/MrLingBlog/Public/zui/assets/datetimepicker/css/datetimepicker.min.css" rel="stylesheet">
	<link href="/MrLingBlog/Public/zui/assets/chosen/css/chosen.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/MrLingBlog/Public/admin/css/admin.css" />
	<script type="text/javascript" src="/MrLingBlog/Public/admin/js/admin.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection"content="telephone=no, email=no" />
</head>
<body>
	

<link rel="stylesheet" type="text/css"  href ="/MrLingBlog/Public/kindeditor/themes/default/default.css"/>
<link rel="stylesheet" href="/MrLingBlog/Public/kindeditor/plugins/code/shCoreDefault.css" />
<script charset="utf-8" src="/MrLingBlog/Public/kindeditor/plugins/code/shCore.js"></script>
<script type="text/javascript" src="/MrLingBlog/Public/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/MrLingBlog/Public/kindeditor/kindeditor.js"></script>
<script>
	SyntaxHighlighter.all();
		KindEditor.ready(function(K) {
			 editor = K.create('textarea[name="content1"]', {
				
				uploadJson : '/MrLingBlog/Public/kindeditor/php/upload_json.php',
				fileManagerJson : '/MrLingBlog/Public/kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			SyntaxHighlighter.all();
		});
	</script>
<form name="" method="post">
	<div id="editor">
		<br/>
		<div class="panel">
			<div class="panel-heading">标题：</div>
			<div class="panel-body">
				<div class="col-xs-3">
					<input type="text" class="form-control" name="til" value="<?php echo ($arr['title']); ?>" id="title_input" placeholder="文章的标题" autofocus required></div>
			</div>
		</div>
		<br />
		<div class="panel">
			<div class="panel-heading">请选择所属板块：</div>
			<div class="panel-body">
				<div class="col-xs-3">
					<select class="form-control" name='class'>
						<?php if(is_array($class)): foreach($class as $key=>$clas): ?><option value="<?php echo ($clas["ename"]); ?>" ><?php echo ($clas["classify"]); ?></option><?php endforeach; endif; ?>
					</select>
				</div>
			</div>
		</div>

		<br/>
		<div class="panel">
			<div class="panel-heading">请选择标签：</div>
			<div class="panel-body">
				<?php if(is_array($tag)): foreach($tag as $key=>$tag): ?><div class="tag">
						<input type="checkbox" name="tagid[]" value="<?php echo ($tag["id"]); ?>" id="<?php echo ($tag["id"]); ?>">
						<label class="label label-badge label-info" for="<?php echo ($tag["id"]); ?>"><?php echo ($tag["tagname"]); ?></label>
					</div><?php endforeach; endif; ?>
				<br/>
				<br/>

			</div>
			<div class="panel-footer">
				<div style="font-size:12px">
					如果没有你想要的标签，
					<a href='/MrLingBlog/admin.php/home/index/setTag.html' target="editor">请点击这里</a>
				</div>
			</div>

		</div>
		<br />
		<textarea id="editor_id" name="content1" style="width:715px;height:400px;visibility:hidden;"><?php echo ($arr['content']); ?></textarea>
		<br />
		<input name="time" type="hidden"/>
		<input id="tijiao" type="submit" name="submit" value="提交内容"  class="btn btn-primary" />
		<input id="gengxin" type="hidden" name="id" value="<?php echo ($arr['id']); ?>"  class="button gray" />
		<input id="chongzhi" type="reset" name="button" value="重置内容" class="btn btn-default"  />
		<div id="content_div"></div>
		<div id="ps"><?php echo ($infoshow[0]['content']); ?></div>
	</P>
</div>
</form>
	<script src="/MrLingBlog/Public/zui/assets/jquery.js"></script>
	<script src="/MrLingBlog/Public/zui/dist/js/zui.min.js"></script>
	<script src="/MrLingBlog/Public/zui/assets/datetimepicker/js/datetimepicker.min.js"></script>
	<script src="/MrLingBlog/Public/zui/assets/chosen/js/chosen.jquery.min.js"></script>
	<script src="/MrLingBlog/Public/zui/assets/chosen/js/chosen.icons.min.js" type="text/javascript"></script>
	<script src="/MrLingBlog/Public/zui/assets/kindeditor/kindeditor-all-min.js"></script>
	<script src="/MrLingBlog/Public/zui/docs/js/doc.js"></script>
	<script src="/MrLingBlog/Public/zui/assets/google-code-prettify/prettify.js"></script>

</body>
</html>