<?php if (!defined('THINK_PATH')) exit();?>	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimal-ui">
	  <meta content="yes" name="apple-mobile-web-app-capable">
	  <meta content="black" name="apple-mobile-web-app-status-bar-style">
	  <meta name="format-detection" content="telephone=no, email=no">
<link rel="stylesheet" type="text/css" href="/oldbackup/Public/css/friends.css" />
<div id="lanmu_box">
<div>
<span>友好邻居:</span>


<span class="lj">
<?php if(is_array($friends)): foreach($friends as $key=>$fs): ?><a href="javascript:window.open('<?php echo ($fs["link"]); ?>')" title="<?php echo ($fs["message"]); ?>"><?php echo ($fs["nearly"]); ?></a><?php endforeach; endif; ?>
</span>

<br />
<span>图片链：</span>
<br />
<br />
<span class="lj">
<?php if(is_array($friends_logo)): foreach($friends_logo as $key=>$fs): ?><a href="javascript:window.open('<?php echo ($fs["link"]); ?>')" title="<?php echo ($fs["message"]); ?>"><img src="<?php echo ($fs["logo"]); ?>" /></a><?php endforeach; endif; ?>
</span>
</div>

</div>