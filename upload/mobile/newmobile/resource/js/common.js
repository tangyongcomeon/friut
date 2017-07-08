$(function() {	 
	$(document).scroll(function() {
		var docTop = $(window).scrollTop();
		if (docTop > 350) {
			$(".topbar").show();
		} else {
			$(".topbar").hide();
		}
	});
	//回到顶部
	$(".topbar").click(function() {
		$("html,body").animate({scrollTop: 0}, 400);
		return false;
	});
	//购物车数量
	$.get("getCartCounts",function(response) {
		$("#cartNum").text(response["retObj"]["counts"]);
	});
	//弹框消失
	$(".confirm_cancel").click(function() {
		$(this).parents(".confirm_bg").hide();
	});
});