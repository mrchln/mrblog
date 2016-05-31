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
	
<!DOCTYPE HTML> 
<html> 
<head> 
<title>后台登录</title> 
<link rel="apple-touch-icon" href="touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="76x76" href="touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad-retina.png">
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/login.css" />
 <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="format-detection"content="telephone=no, email=no" />

<!--为了让IE支持HTML5元素，做如下操作：--> 
<!--[if IE]> 
<script type="text/javascript"> 
document.createElement("section"); 
document.createElement("header"); 
document.createElement("footer"); 
</script> 
<![endif]--> 
</head> 
 
<body> 
<div class="wrap"> 
  <form action="/oldbackup/admin.php/Home/Index/login" method="post"> 
    <section class="loginForm"> 
      <header> 
        <h1>后台登录</h1> 
      </header> 
      <div class="loginForm_content">
       <div class="col-xs-12">
        <div class="input-group">
        
                <span class="input-group-addon"><i class="icon-user"></i></span>
                <input type="text" class="form-control" name="user" placeholder="用户名" required>
             
        </div> </div> 
        <br/>
         <div class="col-xs-12">
        <div class="input-group">
         <span class="input-group-addon fix-border"><i class="icon-key"></i></span>
                <input type="password" class="form-control" name="pwd" placeholder="密码" required>
        </div>
      </div>
        
        <fieldset> 
          <input type="checkbox" checked="checked" class="btn btn-primary"> 
          <span>下次自动登录</span> 
        </fieldset> 
         <fieldset> 
          <span>第三方登录：<a href="<?php echo U('Qq/login');?>"><img src="http://qzonestyle.gtimg.cn/qzone/vas/opensns/res/img/Connect_logo_7.png"></a></span> 
        </fieldset> 
        <fieldset>  
          <button class="btn btn-large btn-block btn-primary">登陆</button>
        </fieldset> 
      </div> 
    </section> 
  </form> 
</div> 
</body> 
</html> 
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