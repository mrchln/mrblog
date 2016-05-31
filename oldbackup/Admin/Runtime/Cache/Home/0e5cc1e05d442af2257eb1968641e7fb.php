<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="/MrLingBlog/Public/zui/dist/css/zui.min.css" rel="stylesheet">
	<link href="/MrLingBlog/Public/zui/assets/datetimepicker/css/datetimepicker.min.css" rel="stylesheet">
	<link href="/MrLingBlog/Public/zui/assets/chosen/css/chosen.min.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="/MrLingBlog/Public/admin/css/admin.css" />
	<script type="text/javascript" src="/MrLingBlog/Public/admin/js/admin.js"></script>

</head>
<body>
	

<br/>
<div class="panel">
	<div class="panel-heading">所有标签：</div>
	<div class="panel-body">
		<div class="tagbox">
			<form method="post">
				<?php if(is_array($tag)): foreach($tag as $key=>$tag): ?><div class="tag">
						<input type="radio" name="id" value="<?php echo ($tag["id"]); ?>" id="<?php echo ($tag["id"]); ?>">
						<label class="label label-badge label-info" for="<?php echo ($tag["id"]); ?>"><?php echo ($tag["tagname"]); ?></label>
					</div><?php endforeach; endif; ?>
			</div>
		</div>
		<div class="panel-footer">
			<input class="btn btn-primary" type="submit" value="修改" name="submit" class="button gray" />
			<button class="btn btn-danger" data-toggle="modal" data-target="#myModal"> <i class="icon-remove"></i>
				删除
			</button>
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true" style="display: none;">
				<div class="modal-dialog" style="margin-top: 146.66666666666666px;width:50%">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalTitle"> <i class="icon-remove"></i>
								警告！
							</h4>
						</div>
						<div class="modal-body">
							<p>确认删除吗？</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
							<input class="btn btn-danger" type="submit" value="删除" name="submit" class="button red" />
						</div>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>

	</form>
</div>

<hr>
<form method="post">
	<div class="panel">
		<div class="panel-heading">添加、修改标签：</div>
		<div class="panel-body">
			<div class="col-xs-3">
				<input class="form-control" type="text" value="<?php echo ($tagname['tagname']); ?>" name="tagname" />
				<input type="hidden" value="<?php echo ($tagname['id']); ?>" name="tagid" />
			</div>
			<input class="btn btn-defualt" type="submit" value="提交" name="submit" class="button gray" />
		</div>
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