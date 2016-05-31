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
	
<br/>
<div class="panel">
	<div class="panel-heading">文章管理</div>
	<div class="panel-body">
		<form method="post">
			<div class="col-xs-3">
				<div class="input-group">
					<span class="input-group-addon"> <i class="icon-search"></i>
					</span>
					<input class="form-control" type="text" name="seach" value="" id="title_input" placeholder="可按邻居，回车查询" autofocus></div>
				<input style="display:none" type="submit" name="" value=""></div>
		</form>
		<br/>
		<br/>
		<br/>
		<div class="table">
			<table cellspacing="0" class="table table-bordered">
				<tr id="touys">

					<td>邻居</td>
					<td>标语</td>
					<td>传送门</td>
					<td>logo</td>
					<td>时间</td>
					<td  align="center" colspan="3">操作</td>
				</tr>
				<?php if(is_array($selectArticle)): foreach($selectArticle as $key=>$sel): ?><tr>

						<form method="post" >
							<td>
								<input type="button" class="btn btn-default" name="message" value="<?php echo ($sel["nearly"]); ?>"  />
							</td>
						</form>
						<td><?php echo ($sel["message"]); ?></td>
						<td>
							<a href="<?php echo ($sel["link"]); ?>"><?php echo ($sel["link"]); ?></a>
						</td>
						<td>
							<a href="<?php echo ($sel["logo"]); ?>">
								<img src="<?php echo ($sel["logo"]); ?>"/>
							</a>
						</td>
						<td>
							<label class="btn btn-default"><?php echo ($sel["time"]); ?></label>
						</td>
						<td>

							<a href="/MrLingBlog/admin.php/home/index/editorFriends?id=<?php echo ($sel["id"]); ?>" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
								编辑
							</a>

						</td>

						<td>
							
											<a href="/MrLingBlog/admin.php/home/index/delFriends?id=<?php echo ($sel["id"]); ?>" onclick="return delsure(this)"  class="btn btn-danger"><i class="icon-remove"></i>删除</a>
	
						</td>

					</tr><?php endforeach; endif; ?>

			</table>
			<br/>

			<a href="/MrLingBlog/admin.php/home/index/addFriends" data-type="iframe" data-toggle="modal" class="btn btn-success">
				<i class="icon-heart"></i>
				添加邻居
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