
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>友盛商城首页</title>
	<link rel="icon" type="../ownmobile/resource/image/ico" href="../ownmobile/resource/image/logo.ico">
	<link rel="stylesheet" href="../ownmobile/resource/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../ownmobile/resource/css/swiper.min.css" type="text/css" />
	<link rel="stylesheet" href="../ownmobile/resource/css/main.css" type="text/css" />
</head>
<body>
	<div id="app" class="app">
		<!-- <div class="app-header">
			<p class="title">友盛商城首页</p>
		</div> -->
		<div class="app-content">
			<div class="app-swipe">
				<div id="appCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#appCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#appCarousel" data-slide-to="1"></li>
				    <li data-target="#appCarousel" data-slide-to="2"></li>
				  </ol>
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="../ownmobile/resource/image/one.png" alt="友盛商城">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="../ownmobile/resource/image/two.png" alt="友盛商城">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				      <img src="../ownmobile/resource/image/three.png" alt="友盛商城">
				      <div class="carousel-caption">
				      </div>
				    </div>
				  </div>
				</div>
			</div>
			<div class="recommend mt5">
				<div class="recommend-image">
					<a href="../ownmobile/service/html/category-goods.php"><img src="../ownmobile/resource/image/9.9.jpg"/></a>
				</div>
				<div class="recommend-swiper-container swiper-container mt5">
                    <div id="swiperWrapper1" class="swiper-wrapper">
                    </div>
                </div>
                <div class="recommend-image">
					<a href="../ownmobile/service/html/category-goods.php"><img src="../ownmobile/resource/image/39.0.jpg"/></a>
				</div>
				<div class="recommend-swiper-container swiper-container mt5">
                    <div id="swiperWrapper2" class="swiper-wrapper">
                    </div>
                </div>
			</div>
			<div class="hot-goods">
				<div class="hot-title">
					<p class="line lline"><strong></strong></p>
					<a class="title-name">爆款直降</a>
					<p class="line rline"><strong></strong></p>
				</div>
				<ul id="hotGoodsList" class="goods-list row">
				</ul>
			</div>
			<div class="hot-goods">
				<div class="hot-title">
					<p class="line lline"><strong></strong></p>
					<a class="title-name">新品上市</a>
					<p class="line rline"><strong></strong></p>
				</div>
				<ul id="newGoodsList" class="goods-list row">
				</ul>
			</div>
		</div>
		<?php include("./foot_nav.php"); ?>
	    <div class="topbar">
	    	<img src="../ownmobile/resource/image/totop.png">
	    </div>
	</div>
	<script src="../ownmobile/resource/imagejs/jquery-3.1.1.min.js"></script>
	<script src="../ownmobile/resource/imagejs/swiper.min.js"></script>
	<script src="../ownmobile/resource/imagejs/bootstrap.min.js"></script>
	<script src="../ownmobile/resource/imagejs/flexible.js"></script>
	<script src="../ownmobile/resource/imagejs/common.js"></script>
	<script src="../ownmobile/resource/imagejs/main.js"></script>
</body>
</html>
