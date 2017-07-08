$(function() {
	var urls = window.location.href.split('?');
	var goodsId = 0;
	if(urls.length==2) {
		goodsId = urls[1];
	};
	$.ajax({
		type: "POST",
		url: "../getAllgoods",
		data: {"jsonParm":JSON.stringify({"goodsId":goodsId})},
		success: function(response) {
			if(response.code == 0 && response.retObj.length == 1) {
				var item = response.retObj[0];
				var imgList = item["detail_carousel_img"].split(";");
				$.each(imgList, function(index, value) {
					$(".carousel-indicators").append('<li data-target="#detailCarousel" data-slide-to="'+index+'"></li>');
					$("#carouselList").append('<div class="item">'+
						      '<img src="'+ value +'" alt="友盛商城" style="width:520px;height:300px;">'+
						      '<div class="carousel-caption"></div></div>');
				});
				$($(".carousel-indicators").children("li").get(0)).addClass("active");
				$($("#carouselList").children(".item").get(0)).addClass("active");
				$('#detailCarousel').carousel();
				$("#goodsName").text(item["goods_name"]);
				$("#goodsPrice").text(item["goods_price"]);
				$("#marketPrice").text(item["market_price"]);
				$("#brand").text(item["brand"]);
				$("#specification").text(item["specification"]);
				$("#origin").text(item["origin"]);
				$("#storageMethod").text(item["storage_method"]);
				$("#productDate").text(item["product_date"]);
				$(".imageshow").html(item["goods_desc"]);
			}
		},
		error: function() {
			console.log("load goods faied");
		}
	});
	$(".tuwen").click(function() {
		$("html,body").animate({
			scrollTop: $("#tuwen").offset().top
		}, 800);
	});
	$("#addCart").click(function() {
		$("#cartNum").text(parseInt($("#cartNum").text()) + 1);
		$(".tips").show();
		setTimeout(function() {
			$(".tips").hide();
		},3000);
	});
});