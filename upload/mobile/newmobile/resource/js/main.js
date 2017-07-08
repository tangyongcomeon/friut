$(function() {
	$('#appCarousel').carousel();
	$.ajax({
		 type: "POST",
         url: "getAllgoods",
         data:{"jsonParm":JSON.stringify({})},
         success: function (response) {
             if(response.code == 0 && response.retObj != null && response.retObj.length > 0) {
            	 $.each(response.retObj, function(index,item) {
            		 if(item["goods_price"]==9.9) {
                		 setWrapper("#swiperWrapper1", item);
            		 } else if(item["goods_price"]==29.9) {
                		 setWrapper("#swiperWrapper2", item);
            		 }
            		 if(item["is_hot"]) {
            			 setGoodsByHotOrNew("#hotGoodsList", item);
            		 }
            		 if(item["is_new"]) {
            			 setGoodsByHotOrNew("#newGoodsList", item);
            		 }
            	 });
             };
             setLastWrapper("#swiperWrapper1");
             setLastWrapper("#swiperWrapper2");
        	 
         },
         error: function () {
             console.log("load faied!");
         }
     });
	 
	 function setWrapper(id, item) {
		 $(id).append('<div class="swiper-slide">'+
  				'<p class="productImg">'+
  				 	'<a href="html/detail.jsp?'+ item["goods_id"] +'">'+
  				 		'<img class="" src="'+ item["img_path"] +'" alt="">'+
  				 		'<span class="recommendMask"></span></a></p>'+
  			'<p class="productName">'+ item["goods_name"] +'</p>'+
  			'<p class="productPrice">'+ item["goods_price"] +'</p>'+
  		 '</div>');
	 }; 
	 
	 function setLastWrapper(id) {
		 $(id).append('<div class="swiper-slide">'+
      		'<p class="productImg getMore">'+
            '<a href="#">'+
            '<b class="lookall-img"></b></a></p></div>');
	 };
	 
	 function setGoodsByHotOrNew(id, item) {
		 $(id).append('<li class="col-lg-3 col-md-3 col-sm-3 col-xs-3">'+
					'<a href="html/detail.jsp?'+ item["goods_id"] +'">'+
					'<img src="'+ item["img_path"] +'"></a>'+
				'<p class="goodsName">'+ item["goods_name"] +'</p>'+
				'<p class="goodsPrice">￥'+ item["goods_price"] +' <span class="marketPrice">￥'+ item["market_price"] +'</span></p></li>');
	 };
	 
	 $(document).ready(function() {
		 var swiper = new Swiper ('.swiper-container', {
  		    direction: 'horizontal',
  		    observer:true,
  		    width: $("#app").width()/4
  		});
	 });
});