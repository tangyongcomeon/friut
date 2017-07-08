<div class="panel panel-default __web-inspector-hide-shortcut__">
	<div class="panel-heading">
		<h3 class="panel-title">管理中心--商品品牌列表</h3>

		<div class="panel-options">
			<a href="#" data-toggle="panel">
				<span class="collapse-icon">–</span>
				<span class="expand-icon">+</span>
			</a>
			<!--<a href="#" data-toggle="remove">
				×
			</a>-->
			<a href="/upload/manageplatform/adminplat/goodsManager/goods_add_brand.php" >
				添加新品牌
			</a>
		</div>
	</div>
	<div class="panel-body">
		<script type="text/javascript">
			var currPage=1;
			jQuery(document).ready(function($) {
				    var jso={pageValue:1};
            	    $.post("./../baseModel/tablePage/good_table_brand.php",{pageValue:1}, function(result) {
						$("#tabpageBase").empty().html(result);
					});
					var reqJson = {
						"data": {
							"name": "brandList",
							"page": { "currPage": currPage, "pageSize": "10" }
						}
					}
				
				readDataToTable(reqJson);
				
				$("#tabpageBase").on("click","a", function() {
				    var pageVal=$(this).attr("page");
				    
				    var reqJson2 = {
						"data": {
							"name": "brandList",
							"page": { "currPage": pageVal, "pageSize": "10" }
						}
					}
				
					readDataToTable(reqJson2);
				    
	//			    $(this).parent().siblings().removeClass('active');
	//	            $(this).parent().addClass("active");//自己变灰色
	        	    //调用数据
	        	    var jso={pageValue:pageVal};
	        	    $.post("./../baseModel/tablePage/demo2.php",jso, function(result) {
						$("#tabpageBase").empty().html(result);
					});
				});
				
			
				
				
			});
			function readDataToTable(reqJson){
					$.post("./../controller/contoller.goods.php", reqJson, function(result) {
					var tabData = {
						"tabThead": [
							{ "desc": "品牌名称", "width": "", "name": "brand_name" },
							{ "desc": "品牌网址", "width": "", "name": "brand_url" },
							{ "desc": "品牌描述", "width": "", "name": "brand_desc" },
							{ "desc": "排序", "width": "", "name": "brand_sort" },
							{ "desc": "是否显示", "width": "", "name": "brand_show" },
							
							{ "desc": "操作", "width": "", "name": "cate_operation" }
						],
						"tabArray": jQuery.parseJSON(result)
					}
					$("#exampleme").empty();
					CreateTableAndAddOperation('exampleme', tabData);
				});
			}
		</script>
		
		<div id="example-2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
			<div id="exampleme">
				
			</div>
			<div class="row" id="tabpageBase">
				
				<!--<?php include("./../baseModel/tablePage/demo2.php"); ?>-->
			</div>
		</div>

	</div>
</div>