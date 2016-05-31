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
	
<br/>
<div class="panel">
	<div class="panel-heading">用户管理</div>
	<div class="panel-body">
		<form method="post">
			<div class="col-xs-3">
				<div class="input-group">
					<span class="input-group-addon"> <i class="icon-search"></i>
					</span>
					<input class="form-control" type="text" name="seach" value="" id="title_input" placeholder="可按标题，回车查询" autofocus></div>
				<input style="display:none" type="submit" name="" value=""></div>
		</form>
		<br/>
		<br/>
		<br/>
		<div class="table">
			<table cellspacing="0" class="table table-bordered">
				<tr id="touys">

					<td>用户名</td>
					<td>作者</td>
					<td>权限</td>
					<td>ip</td>
					<form method="post" >
						<td>
							<input class="btn btn-default" type="submit" name="time" value="时间▽" title='按最早排序' />
						</td>
					</form>
					<td  align="center" colspan="3">操作</td>
				</tr>
				<?php if(is_array($selectArticle)): foreach($selectArticle as $key=>$sel): ?><tr>

						<form method="post" >
							<td>
								<input class="btn btn-default" type="button" value="<?php echo ($sel["username"]); ?>"  />
							</td>
						</form>
						<form method="post" >
							<td>
								<input type="submit" class="btn btn-default" name="author" value="<?php echo ($sel["author"]); ?>" title='按作者查询' />
							</td>
						</form>
						<form method="post" >
							<td>
								<input type="submit" name="fig" class="btn btn-default" value="<?php echo ($sel["fig"]); ?>" title='按权限查询' />
							</td>
						</form>
						<form method="post" >
							<td>
								<input type="button" name="ip" class="btn btn-default" value="<?php echo ($sel["ip"]); ?>" />
							</td>
						</form>
						<form method="post" >
							<td>
								<input type="submit" name="month" class="btn btn-default" value="<?php echo ($sel["time"]); ?>" title='按月查询' />
							</td>
						</form>

						<td>

							<a href="/oldbackup/admin.php/Home/Index/editorUser?id=<?php echo ($sel["id"]); ?>" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
								编辑
							</a>

						</td>

						<td>
							<a href="/oldbackup/admin.php/Home/Index/delUser?id=<?php echo ($sel["id"]); ?>" onclick="return delsure(this)"  class="btn btn-danger"><i class="icon-remove"></i>删除</a>
						</td>

					</tr><?php endforeach; endif; ?>

			</table>
			<br/>
			<a href="/oldbackup/admin.php/Home/Index/addUser" data-type="iframe" data-toggle="modal" class="btn btn-success">
				<i class="icon-heart"></i>
				添加用户
			</a>
		</div>
		<div class="fenye"><?php echo ($page); ?></div>
		<br/>
		<div id="container">
			<div id="load"></div>
		</div>
		<div id="page"></div>
		<hr />
		<div id="ps">
			友情提示：管理员可编辑、删除文章，可进行模糊查询如：标题、标签、内容，点击相应的标签可进行快速查询，点击标题可跳转到该文章
		</div>
	</div>
</div>
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