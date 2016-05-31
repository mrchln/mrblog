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
	
<script type="text/javascript">$('#myModal').modal(options);</script>
<br/>

<form method="post">
	<div class="panel">
		<div class="panel-heading">请选择查询模块(默认第一个)：</div>
		<div class="panel-body">
			<?php if(is_array($class)): foreach($class as $key=>$clas): ?><div class="tag">
					<a href="/MrLingBlog/admin.php/home/index/adminArticle/ename/<?php echo ($clas["ename"]); ?>">
						<input class="btn btn-default" type="button" value="<?php echo ($clas["classify"]); ?>" class="button gray"></a>
				</div><?php endforeach; endif; ?>
		</div>
	</div>
	<br/>
	<div class="panel">
		<div class="panel-heading">文章管理</div>
		<div class="panel-body">
			<div id="seach">
				<div class="col-xs-3">
					<div class="input-group">
						<span class="input-group-addon"> <i class="icon-search"></i>
						</span>
						<input class="form-control" type="text" name="seach" value="" id="title_input" placeholder="可按标题，回车查询" autofocus></div>
					<input style="display:none" type="submit" name="" value=""></div>
			</div>
		</form>
		<br/>
		<br/>
		<br/>
		<table cellspacing="0" class="table table-bordered">
			<thead>
				<tr id="touys">

					<td>作者</td>
					<td>标题</td>
					<td>模块</td>
					<form method="post" >
						<td>
							<input class="btn btn-default" type="submit" name="time" value="时间▽" title='按最早排序' />
						</td>
					</form>
					<td  align="center" colspan="2">操作</td>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($selectArticle)): foreach($selectArticle as $key=>$sel): ?><tr>

						<form method="post" >
							<td>
								<input type="submit" class="btn btn-default" name="author" value="<?php echo ($sel["author"]); ?>" title='按作者查询' />
							</td>
						</form>
						<td>
							<a href="/MrLingBlog/mood/detailed/id/<?php echo ($sel["id"]); ?>" target="bank" title='跳转到该文章'><?php echo ($sel["title"]); ?></a>
						</td>
						<form method="post" >
							<td>
								<input type="submit" class="btn btn-default" name="classify" value="<?php echo ($sel["ename"]); ?>" title='按标签查询' />
							</td>
						</form>
						<form method="post" >
							<td>
								<input class="btn btn-default" type="submit" name="month" value="{1411535805|transDate}" title='按月查询' />
							</td>
						</form>
						<form method="post" name="" action="/MrLingBlog/admin.php/home/index/addArticle">
							<td>

								<a href="/MrLingBlog/admin.php/home/index/addArticle?id=<?php echo ($sel["id"]); ?>" data-type="iframe" data-toggle="modal" class="btn btn-primary"> <i class="icon-edit"></i>
									编辑
								</a>
							</form>
						</td>
						
						<td>
						<form method="post" name="" action="/MrLingBlog/admin.php/home/index/del">
							
											
											<a href="/MrLingBlog/admin.php/home/index/del?id=<?php echo ($sel["id"]); ?>" onclick="return delsure(this)"  class="btn btn-danger"><i class="icon-remove"></i>删除</a>

											
									
								

										
						</form>
						</td>
					

					</tr><?php endforeach; endif; ?>
			</tbody>

		</table>
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