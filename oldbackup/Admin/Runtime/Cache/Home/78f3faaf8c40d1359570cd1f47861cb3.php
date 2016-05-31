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
	
<script type="text/javascript" src="/oldbackup/Public/js/jquery-1.3.2.js"></script>
<link rel="stylesheet" type="text/css"  href ="/oldbackup/Public/kindeditor/themes/default/default.css"/>
<link rel="stylesheet" href="/oldbackup/Public/kindeditor/plugins/code/shCoreDefault.css" />
<script charset="utf-8" src="/oldbackup/Public/kindeditor/plugins/code/shCore.js"></script>
<script type="text/javascript" src="/oldbackup/Public/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/oldbackup/Public/kindeditor/kindeditor.js"></script>
 <!-- 加载编辑器的容器 -->
    
    <!-- 配置文件 -->
    <script type="text/javascript" src="/oldbackup/Public/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/oldbackup/Public/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
<script>
	//SyntaxHighlighter.all();
		KindEditor.ready(function(K) {
			 editor = K.create('textarea[name="content1"]', {
				
				uploadJson : '/oldbackup/Public/kindeditor/php/upload_json.php',
				fileManagerJson : '/oldbackup/Public/kindeditor/php/file_manager_json.php',
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
	$(document).ready(function(){
		var selectstr = $("input[name=selector]").val();
		$('select[name=class]').get(0).selectedIndex=0;
            $("select[name=class] option").each(function(i,n){
                if($(n).text()==selectstr)
                {
                    $(n).attr("selected",true);
                }
            })
    var str = $("input[name=tagselect]").val();
    $(str.split(",")).each(function (i,dom){
        $(":checkbox[value='"+dom+"']").prop("checked",true);
        $(":checkbox[id='"+dom+"']").prop("checked",true);
    });
  })
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
					<input type="hidden" name="selector" id="" value="<?php echo ($arr['editorClassify']); ?>" />
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
				<input type="hidden" name="tagselect" value="<?php echo ($arr['tagSelect']); ?>">
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
					<a href='/oldbackup/admin.php/Home/Index/setTag.html' target="editor">请点击这里</a>
				</div>
			</div>

		</div>
		<br />
		<script id="container" name="content1" type="text/plain" style="width:715px;height:400px;">
        <?php echo ($arr['content']); ?>
    	</script>
		<!--<textarea id="editor_id" name="content1" style="width:715px;height:400px;visibility:hidden;"><?php echo ($arr['content']); ?></textarea>-->
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