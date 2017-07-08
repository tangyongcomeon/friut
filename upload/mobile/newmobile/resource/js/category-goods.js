$(function() {
	var urls = window.location.href.split('?');
	var promotePrice = 9.90;
	if(urls.length==2) {
		promotePrice = urls[1];
		if(promotePrice == 29.9 || promotePrice == 29.90) {
			$(".category-img").attr("src","../image/39.0.jpg");
		} else {
			$(".category-img").attr("src","../image/9.9.jpg");
		}
	}
	
	$.ajax({
		type: "POST",
		url: "../getAllgoods",
		data: {"jsonParm":JSON.stringify({"promotePrice":promotePrice})},
		success: function(response) {
			if(response.code == 0 && response.retObj.length > 0) {
				$.each(response.retObj, function(index, item) {
//					if(promotePrice==item["goods_price"]) {
						getCategoryGoods(item);
//					}
				});
			}
		},
		error: function() {
			console.log("load goods faied");
		}
	});
	
	function getCategoryGoods(item) {
		$("#categoryList").append('<li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">'+
		'<a href="../html/detail.jsp?'+ item["goods_id"] +'">'+
			'<img src="../'+item["img_path"]+'"></a>'+
		'<p class="goodsName">'+item["goods_name"]+'</p>'+
		'<p class="goodsPrice">￥'+item["goods_price"]+' <span class="marketPrice">￥'+item["market_price"]+'</span></p></li>');
		
	}
});