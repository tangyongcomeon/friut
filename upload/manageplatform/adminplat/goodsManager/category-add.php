<div class="panel panel-default __web-inspector-hide-shortcut__">
	<div class="panel-heading">
		<h3 class="panel-title">添加商品</h3>

		<div class="panel-options">
			<a href="#" data-toggle="panel">
				<span class="collapse-icon">–</span>
				<span class="expand-icon">+</span>
			</a>
			<!--<a href="#" data-toggle="remove">
				×
			</a>-->
		</div>
	</div>
	<div class="panel-body">
		<script type="text/javascript">
			var currPage=1;
			jQuery(document).ready(function($) {
				    var jso={pageValue:1};
            	    $.post("./../baseModel/tablePage/demo2.php",{pageValue:1}, function(result) {
						$("#tabpageBase").empty().html(result);
					});
					var reqJson = {
						"data": {
							"name": "list",
							"page": { "currPage": currPage, "pageSize": "10" }
						}
					}
				
				readDataToTable(reqJson);
				
				$("#tabpageBase").on("click","a", function() {
				    var pageVal=$(this).attr("page");
				    
				    var reqJson2 = {
						"data": {
							"name": "list",
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
					$.post("./../controller/contoller.category.php", reqJson, function(result) {
					var tabData = {
						"tabThead": [
							{ "desc": "分类名称", "width": "", "name": "cate_name" },
							{ "desc": "商品数量", "width": "", "name": "cate_sum" },
							{ "desc": "数量单位", "width": "", "name": "cate_unit" },
							{ "desc": "导航栏", "width": "", "name": "cate_nav" },
							{ "desc": "展示", "width": "", "name": "cate_show" },
							
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