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
	<title>友盛商城-详情页</title>
	<link rel="icon" type="image/ico" href="../image/logo.ico">
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../css/main.css" type="text/css" />
</head>
<body>
	<div class="app">
		<div class="app-content">
			<div class="app-swipe">
				<div id="detailCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				  </ol>
				  <!-- Wrapper for slides -->
				  <div id="carouselList" class="carousel-inner" role="listbox">
				  </div>
				  <div class="tuwen"><a href="#tuwen"><img src="../image/tuwen.png"></a></div>
				</div>
				<div class="section1">
					<p id="goodsName" class="goodsName">佳迪沙琪玛</p>
					<p class="goodsPrice">￥<span id="goodsPrice"></span> <span class="marketPrice">￥<span id="marketPrice" ></span></span></p>
				</div>
				<div id="tuwen" class="intro">
					<dt>商品信息</dt>
					<dd><em>【品　　牌】</em><span id="brand"></span></dd>
					<dd><em>【规　　格】</em><span id="specification"></span></dd>
					<dd><em>【产　　地】</em><span id="origin"></span></dd>
					<dd><em>【储藏方法】</em><span id="storageMethod"></span></dd>
					<dd><em>【生产日期】</em><span id="productDate"></span></dd>
					<dd><em>【<label>保质期</label>】</em><span>180天</span></dd>
					<dd class="hide"><em>【适用人群】</em><span></span></dd>
					<dd class="hide"><em>【食用方法】</em><span></span></dd>
					<dd class="hide"><em>【使用信息】</em><span></span></dd>
					<dd class="hide"><em>【温馨信息】</em><span></span></dd>
					<div class="imageshow">
					</div>
				</div>
			</div>
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
	                <a href="../html/cart.jsp">
	                    <p class="rel">
	                        <img class="cart-logo" src="../image/cart-gray.png">
	                        <span id="cartNum" class="circle-red">1</span>
	                    </p>
	                    <p class="rel cart-text">购物车</p>
	                </a>
	            </li>
	            <li id="addCart" class="cart">
	                <p>加入购物车</p>
	            </li>
	        </ul>
			<div class="tips">已加入购物车!</div>
	    </div>
	    <div class="topbar">
	    	<img src="../image/totop.png">
	    </div>
	</div>
	<script src="../js/jquery-3.1.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/flexible.js"></script>
	<script src="../js/common.js"></script>
	<script src="../js/detail.js"></script>
</body>
</html>
