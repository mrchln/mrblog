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
	
<form method="post">
	<div class="panel">
		<div class="panel-heading">美图添加</div>
		<div class="panel-body">
			<div class="col-xs-3">
				<div class="input-group">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">外链：</button>
					</span>
					<input class="form-control" type="text" name="lin" value="<?php echo ($map['link']); ?>" placeholder="请输入外链地址" require  required/>
				</div>
			</div>
			<br/>
			<br/>

			<div class="col-xs-3">
				<div class="input-group">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">标题：</button>
					</span>
					<input type="text" class="form-control" name="til" value="<?php echo ($map['title']); ?>" placeholder="请输入标题" required></div>
			</div>
			<br/>
			<br/>
			<div class="col-xs-3">
				<div class="input-group">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button">内容：</button>
					</span>
					<textarea class="form-control" name="cont" placeholder="请输入内容" required> <?php echo ($map['content']); ?></textarea></div>
			</div>
			<input type="submit" name="map" value="提交" class="btn btn-default">
			<input type="hidden" value="<?php echo ($map['id']); ?>" name="linkid" />
		</div>
	</div>
</form>

<div id="seach">
	<div class="panel">
		<div class="panel-heading">美图管理</div>
		<div class="panel-body">
			<form method="post">
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">查询：</button>
						</span>
						<input class="form-control" type="text" name="seach" value="" id="title_input" placeholder="可按标题，回车查询"></div>
				</div>
			</form>
			<br>
			<br>
			<br>
			<div class="table">
				<table class="table table-bordered">
					<tr id="touys">

						<td>预览</td>
						<td>标题</td>
						<td>内容</td>
						<td>时间</td>
						<td  align="center" colspan="3">操作</td>
					</tr>
					<?php if(is_array($selectArticle)): foreach($selectArticle as $key=>$sel): ?><tr>

							<td>
								<img src="<?php echo ($sel["link"]); ?>" width="100" height="50"></td>
							<td>
								<a href=""><?php echo ($sel["title"]); ?></a>
							</td>
							<td>
								<a href=""><?php echo ($sel["content"]); ?></a>
							</td>
							<td>
								<input class="btn defualt" type="button" name="month" value="<?php echo ($sel["time"]); ?>" title='按月查询' />
							</td>

							<form method="post">
								<td>
									<a href="?eid=<?php echo ($sel["id"]); ?>" class="btn btn-primary"> <i class="icon-edit"></i>
										编辑
									</a>
								</td>
							</form>
							<form method="post" onsubmit="return delsure(this)">
								<td>

									<a href="?id=<?php echo ($sel["id"]); ?>" onclick="return delsure(this)"  class="btn btn-danger"><i class="icon-remove"></i>删除</a>

								</td>
							</form>

						</tr><?php endforeach; endif; ?>

				</table>
				<br/>
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
</div>
<input style="display:none" type="submit" name="" value="">

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