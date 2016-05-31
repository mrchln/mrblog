<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
<script>
 function toLogin()
 {
   //以下为按钮点击事件的逻辑。注意这里要重新打开窗口
   //否则后面跳转到QQ登录，授权页面时会直接缩小当前浏览器的窗口，而不是打开新窗口
   var A=window.open("Connect2.0/example/oauth/index.php","TencentLogin", "width=450,height=320,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
 } 
</script>
	</head>
	<body>
		<a href="#" onclick='toLogin()'><img src="http://qzonestyle.gtimg.cn/qzone/vas/opensns/res/img/Connect_logo_7.png"></a>
	</body>
</html>
