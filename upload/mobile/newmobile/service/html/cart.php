
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>友盛商城购物车</title>
	<link rel="icon" type="image/ico" href="/upload/mobile/newmobile/resource/image/logo.ico">
	<link rel="stylesheet" href="/upload/mobile/newmobile/resource/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/upload/mobile/newmobile/resource/css/swiper.min.css" type="text/css" />
	<link rel="stylesheet" href="/upload/mobile/newmobile/resource/css/main.css" type="text/css" />
</head>
<body>
	<div class="app">
		<div class="app-content">
			<div class="app-swipe">
				<ul id="clist" class="clist">
				</ul>
			<div class="emptyadd">
		        <img src="/upload/mobile/newmobile/resource/image/carte.png">
		        <p>你的购物车空空如也</p>
		        <span>快去挑点宝贝吧</span>
		        <a href="/upload/mobile/newmobile/index.php">去逛逛</a>
		    </div>
		</div>
		<div class="account">
			<img id="sel" class="select-img selected" aflag="true" src="/upload/mobile/newmobile/resource/image/select.png">
			<img id="unsel" class="select-img" aflag="false" src="/upload/mobile/newmobile/resource/image/unselect.png">
			<span class="info1">全选</span>
			<a class="account-btn" href="order-confirm.php">结算</a>
			<span class="info2">总计：￥<span id="amount"></span></span>
		</div>
		<div class="foot-nav">
	        <ul class="box">
	            <li class="home-new">
	            	<a href="/upload/mobile/newmobile/index.php">
	                <p><img class="home-logo" src="/upload/mobile/newmobile/resource/image/home-gray.png"></p>
	                首页
	                </a>
	            </li>
	            <li class="cart-new">
	                <a href="#">
	                    <p class="rel">
	                        <img class="cart-logo" src="/upload/mobile/newmobile/resource/image/cart-red.png">
	                        <span id="carNum" class="circle-red">1</span>
	                    </p>
	                    <p class="rel cart-text">购物车</p>
	                </a>
	            </li>
	            <li class="my-new">
	                <a href="mycount.php">
	                    <p><img class="my-logo" src="/upload/mobile/newmobile/resource/image/person-gray.png"></p>
	                    我的
	                </a>
	            </li>
	        </ul>
	    </div>
	    <div class="topbar">
	    	<img src="/upload/mobile/newmobile/resource/image/totop.png">
	    </div>
	    <div class="confirm_bg">
		    <div class="confirm">
			    <div class="confirm_msg">确定要删除该商品吗?</div>
			    <div class="confirm_btns">
				    <span class="confirm_cancel">取消</span>
				    <span class="confirm_ok">确定</span>
			    </div>
		    </div>
	    </div>
	</div>
	<script src="/upload/mobile/newmobile/resource/js/jquery-3.1.1.min.js"></script>
	<script src="/upload/mobile/newmobile/resource/js/swiper.min.js"></script>
	<script src="/upload/mobile/newmobile/resource/js/bootstrap.min.js"></script>
	<script src="/upload/mobile/newmobile/resource/js/flexible.js"></script>
	<script src="/upload/mobile/newmobile/resource/js/common.js"></script>
	<script src="/upload/mobile/newmobile/resource/js/cart.js"></script>
</body>
</html>
