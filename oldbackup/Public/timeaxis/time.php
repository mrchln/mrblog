<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="css/history.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/history.js"></script>
</head>

<body>

<div id="arrow">
	<ul>
		<li class="arrowup"></li>
		<li class="arrowdown"></li>
	</ul>
</div>

<div id="history">

	<div class="title">
		<h2>时光轴</h2>
		<div id="circle">
			<div class="cmsk"></div>
			<div class="circlecontent">
				<div thisyear="2014" class="timeblock">
					<span class="numf"></span>
					<span class="nums"></span>
					<span class="numt"></span>
					<span class="numfo"></span>
					<div class="clear"></div>
				</div>
				<div class="timeyear"></div>
			</div>
			<a href="#" class="clock"></a>
		</div>
	</div>
	
	<div id="content">
	  
        <ul class="list">
      <?php
		include "../conn/conn2.php";
		$result = mysql_query("SELECT * FROM tb_article");

		while($row = mysql_fetch_array($result))
  		{
	  ?>
			<li style="margin-top:0px;">
				<div class="liwrap">
					<div class="lileft">
						<div class="date">
							<span class="year"><?php echo date("Y",strtotime($row['now'])) ?></span>
							<span class="md"><?php echo date("m,d",strtotime($row['now'])) ?></span>
						</div>
					</div>
					
					<div class="point"><b></b></div>
					
					<div class="liright">
						<div class="histt"><a href="#"><?php echo $row['title'];?></a></div>
						<div class="hisct"><?php echo $row['content'];?></div>
					</div>
				</div>
			</li>
           <?php }?>
            </ul>
             
	</div>
</div>
</body>
</html>