<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%
	String path = request.getContextPath();
	String basePath = request.getScheme() + "://"
			+ request.getServerName() + ":" + request.getServerPort()
			+ path + "/";
%>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>友胜商城-结算</title>
	<link rel="icon" type="image/ico" href="../image/logo.ico">
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../css/swiper.min.css" type="text/css" />
	<link rel="stylesheet" href="../css/main.css" type="text/css" />
</head>
<body>
	<div class="app">
		<div class="app-content">
			<ul class="address rel">
				<li><img alt="" src="../image/consign.png"></li>
				<li>
					<p><em>收货人：</em><span class="name">漫妮博轩</span><span class="tel">12312312312</span></p>
					<p><em>收货地址：</em>收货地址：北京市北京市昌平区朱辛庄五合公寓10楼102室</p>
				</li>
				<div class="arrow-right">
			        <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
			    </div>
			</ul>
			<div class="order-list">
				<h3 class="title">订单<span>品牌商浙江湖州发货 (包邮)</span></h3>
				<ul id="orderList">
					<li class="row">
						<img class="col-lg-2 col-md-2 col-sm-2 col-xs-2" src="../image/cart-1.jpg">
						<span class="col-lg-8 col-md-8 col-sm-8 col-xs-8">NANACO果肉布丁果冻80g*9荔枝味</span>
						<span class="col-lg-1 col-md-1 col-sm-1 col-xs-1">￥23.9</span>
						<span class="col-lg-1 col-md-1 col-sm-1 col-xs-1">X1</span>
					</li>
				</ul>
				<div class="order-foot">
					<span>发货方式：</span>
					<span class="right">快递： 8元</span>
				</div>
				<div class="order-foot">
					<span>订单总计：</span>
					<span class="right">￥31.90</span>
				</div>
			</div>
			<div class="paytype rel">
				<h3>优惠免减</h3>
				<p class="inline">优惠券</p>
				<span class="use">使用优惠券</span>
				<div class="arrow-right">
			        <b class="right"><i class="right-arrow1"></i><i class="right-arrow2"></i></b>
			    </div>
			</div>
			<div class="pay">
			<span class="info1">微信支付</span>
			<a class="pay-btn">付款</a>
			<span class="info2">总计：￥<span id="payTotal">31.90</span></span>
			</div>
	    </div>
	</div>
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/swiper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/flexible.js"></script>
	<script src="../js/common.js"></script>
</body>
</html>