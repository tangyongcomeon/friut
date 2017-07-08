<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>Xenon - Modals</title>
	<?php 
		$str=dirname(__FILE__);
//$str=substr($str,7);//去除前面
$n=strpos($str,'adminplat');//寻找位置
if ($n) $str=substr($str,0,$n);//删除后面
   $str=mb_substr($str,0,strlen($str)-1,'utf-8');

include($str."../adminplat/baseModel/link_header_info.html");  
		
		 ?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">

	
	<!-- Modal 1 (Basic)-->
	<div class="modal fade" id="modal-1">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Basic Modal</h4>
				</div>
				
				<div class="modal-body">
					Hello I am a Modal!
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 2 (Custom Width)-->
	<div class="modal fade custom-width" id="modal-2">
		<div class="modal-dialog" style="width: 60%;">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Custom Width Modal</h4>
				</div>
				
				<div class="modal-body">
					Any type of width can be applied.
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 3 (Custom Width)-->
	<div class="modal fade custom-width" id="modal-3" data-backdrop="static">
		<div class="modal-dialog" style="width: 96%">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Full width</h4>
				</div>
				
				<div class="modal-body">
				
					Its about 100%
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	
	
	<!-- Modal 4 (Confirm)-->
	<div class="modal fade" id="modal-4" data-backdrop="static">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<h4 class="modal-title">删除商品</h4>
				</div>
				
				<div class="modal-body">
				
					   确定删除吗？ 确定将永久删除此商品。
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">取消</button>
					<button type="button" class="btn btn-info" data-dismiss="modal">确定</button>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Modal 5 (Long Modal)-->
	<div class="modal fade" id="modal-5">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Long Height Modal</h4>
				</div>
				
				<div class="modal-body">
				
					<img src="/upload/manageplatform/admin/assets/images/eiffel.jpg" alt="" class="img-responsive" />
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- Modal 6 (Long Modal)-->
	<div class="modal fade" id="modal-6">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal Content is Responsive</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row">
						<div class="col-md-6">
							
							<div class="form-group">
								<label for="field-1" class="control-label">Name</label>
								
								<input type="text" class="form-control" id="field-1" placeholder="John">
							</div>	
							
						</div>
						
						<div class="col-md-6">
							
							<div class="form-group">
								<label for="field-2" class="control-label">Surname</label>
								
								<input type="text" class="form-control" id="field-2" placeholder="Doe">
							</div>	
						
						</div>
					</div>
				
					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group">
								<label for="field-3" class="control-label">Address</label>
								
								<input type="text" class="form-control" id="field-3" placeholder="Address">
							</div>	
							
						</div>
					</div>
				
					<div class="row">
						<div class="col-md-4">
							
							<div class="form-group">
								<label for="field-4" class="control-label">City</label>
								
								<input type="text" class="form-control" id="field-4" placeholder="Boston">
							</div>	
							
						</div>
						
						<div class="col-md-4">
							
							<div class="form-group">
								<label for="field-5" class="control-label">Country</label>
								
								<input type="text" class="form-control" id="field-5" placeholder="United States">
							</div>	
						
						</div>
						
						<div class="col-md-4">
							
							<div class="form-group">
								<label for="field-6" class="control-label">Zip</label>
								
								<input type="text" class="form-control" id="field-6" placeholder="123456">
							</div>	
						
						</div>
					</div>
				
					<div class="row">
						<div class="col-md-12">
							
							<div class="form-group no-margin">
								<label for="field-7" class="control-label">Personal Info</label>
								
								<textarea class="form-control autogrow" id="field-7" placeholder="Write something about yourself"></textarea>
							</div>	
							
						</div>
					</div>
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal 7 (Ajax Modal)-->
	<div class="modal fade" id="modal-7">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Dynamic Content</h4>
				</div>
				
				<div class="modal-body">
				
					Content is loading...
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>



	<!-- Bottom Scripts -->
		<?php 
		$str=dirname(__FILE__);
//$str=substr($str,7);//去除前面
$n=strpos($str,'adminplat');//寻找位置
if ($n) $str=substr($str,0,$n);//删除后面
   $str=mb_substr($str,0,strlen($str)-1,'utf-8');

include($str."../adminplat/baseModel/link_foot_info.html");  
		
		 ?>

</body>
</html>