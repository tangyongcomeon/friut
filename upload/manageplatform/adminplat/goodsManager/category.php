

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>友盛管理平台</title>

	<!-- <link rel="stylesheet" href=""> -->
	<?php 		
		$str=dirname(__FILE__);
		$n=strpos($str,'adminplat');//寻找位置
		if ($n) $str=substr($str,0,$n);//删除后面
	   	$str=mb_substr($str,0,strlen($str)-1,'utf-8');
	?>
	<?php include("./../baseModel/link_header_info.html"); ?>
	<?php 
				$str=dirname(__FILE__);
//$str=substr($str,7);//去除前面
$n=strpos($str,'adminplat');//寻找位置
if ($n) $str=substr($str,0,$n);//删除后面
   $str=mb_substr($str,0,strlen($str)-1,'utf-8');
//adminplat/baseModel/modal/modal.php
include($str."../adminplat/baseModel/modal/modal.php"); ?>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">

	<?php include("./../baseModel/menu_header.html"); ?>
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed ">
			<?php include("./../baseModel/base-menu-left.html"); ?>
		</div>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
			<?php include("./../baseModel/base-user-head.html"); ?>
			
			<?php include("category-content.php"); ?>
		</div>
		
		<!-- 	右侧图标信息表示 -->
		<!-- start: Chat Section -->
		<?php include("./../baseModel/base_right_chatinfo.html"); ?>
		<!-- end: Chat Section -->
		
		
	</div>
	
	
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
	<?php include("./../baseModel/link_foot_info.html"); ?>
	<?php include("./../baseModel/link_foot_info_table.html"); ?>
</body>
</html>
