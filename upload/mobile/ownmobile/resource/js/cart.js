$(function() {
	$.ajax({
        type: "GET",
        url: "../json/cart.json",
        success: function (response) {
       	 response = JSON.parse(response);
            if(response.code ==0 && response.retObj.data.length > 0) {
            	$(".emptyadd").hide();
            	$.each(response.retObj.data, function(index,item) {
            		$("#clist").append('<li class="clist-li rel">'+
            				'<div class="select-icon">'+
        					'<img class="select-img selected" src="../image/select.png"/>'+
        					'<img class="select-img unselected" src="../image/unselect.png"/></div>'+
        				'<img alt="友胜商城" src="'+item.imagePath+'">'+
        				'<div class="info">'+
        					'<p class="goodsName">'+item.goodName+'</p>'+
        					'<span class="goodsPrice">￥<span class="price">'+item.price+'</span></span>'+
        					'<div class="num">'+
        						'<span class="subNum">-</span>'+
        						'<span class="goodsNum">'+item.num+'</span>'+
        						'<span class="addNum">+</span>'+
        					'</div></div></li>');
           	 	});
            	
            	getAllPrice();
            	
            } else {
            	$(".emptyadd").show();
            }
       	 
        },
        error: function () {
            console.log("load faied!");
        }
    });
	//全选按钮
	$(".account .select-img").click(function() {
		$(this).hide().siblings("img").show();
		if($(this).attr("aflag") == "false") {
			$("#clist .select-img.selected").show();
			$("#clist .select-img.unselected").hide();
			getAllPrice();
		} else {
			$("#clist .select-img.selected").hide();
			$("#clist .select-img.unselected").show();
			$("#amount").text(0.00);
			
		};
	});
	
	//单选中
	$("#clist").on('click','.select-img.selected', function() {
		$(this).hide().siblings("img").show();
		$("#sel").hide();
		$("#unsel").show();
		getAllPrice();
	});
	
	//单未选中
	$("#clist").on('click','.select-img.unselected', function() {
		$(this).hide().siblings("img").show();
		$("#unsel").hide();
		var selectedNum = 0;
		//计算未选中的个数
		$("#clist .select-img.selected").each(function(index,items) {
			if($(this).is(':hidden')) {
				selectedNum++;
				return;
			}
		});
		if(selectedNum > 0) {
			$("#sel").hide();
			$("#unsel").show();
		} else {
			$("#sel").show();
			$("#unsel").hide();
		};
		getAllPrice();
	});
	
	//增加商品数量 
	$("#clist").on('click','.addNum', function() {
		var num = $(this).siblings(".goodsNum");
		$(num).text(parseInt($(num).text()) + 1);
		getAllPriceForAddOrSub();
	});
	//减少商品数量
	$("#clist").on('click','.subNum', function() {
		var num = $(this).siblings(".goodsNum");
		if(parseInt($(num).text()) > 1) { 
			$(num).text(parseInt($(num).text()) - 1);
			getAllPriceForAddOrSub();
		} else {
			$(".confirm_bg").show();//显示弹框
		}
	});
	
	
	//清除商品
	$(".confirm_ok").click(function() {
		$(this).parents(".confirm_bg").hide();
		//购物车清除此商品
	});
	
	function getAllPrice() {
		var sum = 0.00;
		$(".clist-li").each(function(index,item) {
			sum = sum + getPrice($(this));
		});
		$("#amount").text(sum.toFixed(2));
	}
	
	function getPrice(_clist) {
		var _info = $(_clist).find('.info');
		var _price = $(_info).find('.price').text();
		var _num = $(_info).find('.goodsNum').text();
		var _selectImg = $(_clist).find('.select-img.selected');
		if($(_selectImg).is(':hidden')) {
			return 0;
		} else {
			return Number(_price) * Number(_num);
		}
	}
	//增减商品时计算总价钱
	function getAllPriceForAddOrSub() {
		var hasSelected = 0;
		$.each($("#clist .select-img.selected"), function(index, item) {
			hasSelected = $(this).is(':hidden') ? hasSelected : hasSelected +1;
		});
		if(hasSelected > 0) {
			getAllPrice();
		};
	};
});