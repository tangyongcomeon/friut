<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">添加商品品牌属性</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">–</span>
									<span class="expand-icon">+</span>
								</a>
								<a href="/upload/manageplatform/adminplat/goodsManager/goods-brand.php" >
									商品品牌列表
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<form role="form" class="form-horizontal" id="goodsbrandform">
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">品牌名称</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="brandName" data-validate="required" data-message-required="请输入商品品牌名称" placeholder="商品品牌名称" aria-required="true" aria-invalid="false">
									</div>
								</div>
								<div class="form-group-separator"></div>
								
									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">品牌地址</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="brandUrl" data-validate="required" data-message-required="请输入商品品牌名称" placeholder="商品品牌名称" aria-required="true" aria-invalid="false">
									</div>
								</div>
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-4">品牌LOGO</label>
									
									<div class="col-sm-10">
										<input type="file" class="form-control" id="field-4" name="brandFile">
									</div>
								</div>
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">品牌描述</label>
									
									<div class="col-sm-10">
										<textarea class="form-control" cols="5" id="field-5" name="brandDesc"></textarea>
									</div>
								</div>
								
								<div class="form-group-separator"></div>
								
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">排序</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="brandSort" data-validate="number" placeholder="请输入数字">
									</div>
									
								</div>
						
								<div class="form-group-separator"></div>
								
								<div class="form-group">
									<label class="col-sm-2 control-label">是否显示</label>
										<p>
											<label class="radio-inline">
												<input type="radio" name="brandShow" checked="" value="1">
												是
											</label>
											<label class="radio-inline">
												<input type="radio" name="brandShow" value="0">
												否
											</label>
										<strong class="radio-inline">(当品牌下还没有商品的时候，首页及分类页的品牌区将不会显示该品牌。)</strong>
										</p>
										
									</div>
									<div class="form-group-separator"></div>
								</div>
								
							</form>
							
							<div class="form-group ">
								<button type="submit" class="btn btn-success col-sm-2" onclick="goodsBrandCreatecommit();">提交</button>
								<button type="reset" class="btn btn-white col-sm-2">重置	</button>
							</div>
						</div>
						
					</div>
					
				</div>
