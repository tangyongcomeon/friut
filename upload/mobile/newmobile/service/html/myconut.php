
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>个人中心</title>
	<link rel="icon" type="image/ico" href="../image/logo.ico">
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../css/swiper.min.css" type="text/css" />
	<link rel="stylesheet" href="../css/main.css" type="text/css" />
</head>
<body>
	<div class="app">
		<div class="app-content">
			<div class="section head-portrait">
				<img src="../image/mycount/my.jpg">
				<span>漫妮@博轩</span>
			</div>
			<a href="#">
				<div class="section rel">
					<img alt="" src="../image/mycount/myorder.png">
					<span>全部订单</span>
					<div class="arrow-right">
				        <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
				    </div>
					<ul class="order-menu">
						<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img alt="" src="../image/mycount/unpay.png">
							<p>待付款</p>
						</li>
						<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img alt="" src="../image/mycount/redeliver.png">
							<p>待发货</p>
						</li>
						<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img alt="" src="../image/mycount/retake.png">
							<p>已发货</p>
						</li>
						<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
							<img alt="" src="../image/mycount/trade.png">
							<p>交易成功</p>
						</li>
					</ul>
				</div>
			</a>
			<a href="#">
				<div class="section">
					<img alt="" src="../image/mycount/mycoupon.png">
					<span>我的优惠券</span>
				</div>
			</a>
			<a href="#">
				<div class="section">
					<img alt="" src="../image/mycount/profile.png">
					<span>管理收货地址</span>
				</div>
			</a>
	    </div>
	    <div class="foot-nav">
	        <ul class="box">
	            <li class="home-new">
	            	<a href="../index.jsp">
	                <p><img class="home-logo" src="../image/home-gray.png"></p>
	                首页
	                </a>
	            </li>
	            <li class="cart-new">
	                <a href="cart.jsp">
	                    <p class="rel">
	                        <img class="cart-logo" src="../image/cart-gray.png">
	                        <span id="carNum" class="circle-red">1</span>
	                    </p>
	                    <p class="rel cart-text">购物车</p>
	                </a>
	            </li>
	            <li class="my-new">
	                <a href="#">
	                    <p><img class="my-logo" src="../image/person-red.png"></p>
	                    我的
	                </a>
	            </li>
	        </ul>
	    </div>
	</div>
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/swiper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/flexible.js"></script>
	<script src="../js/common.js"></script>
	<script src="../js/mycount.js"></script>
</body>
</html>