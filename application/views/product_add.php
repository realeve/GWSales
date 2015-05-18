			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			产品添加
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url()?>">主页</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="javascript:;">产品管理</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="<?php echo base_url()?>product/add">产品添加</a>
					</li>
				</ul>
				<div class="page-toolbar">
					<div id="dashboard-report-range" class="pull-right tooltips btn btn-fit-height grey-salt" data-placement="top" data-original-title="Change dashboard date range">
						<i class="icon-calendar"></i>&nbsp; <span class="uppercase visible-lg-inline-block"></span>&nbsp; <i class="fa fa-angle-down"></i>
					</div>
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" action="#">
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-shopping-cart"></i>产品添加
								</div>
								<div class="actions btn-set">
									<button type="button" name="back" class="btn default"><i class="fa fa-angle-left"></i> 返回</button>
									<button class="btn default"><i class="fa fa-reply"></i> 重置</button>
									<button class="btn green"><i class="fa fa-check"></i> 保存</button>
									<button class="btn green"><i class="fa fa-check-circle"></i> 保存后继续添加</button>
									<div class="btn-group">
										<a class="btn yellow dropdown-toggle" href="javascript:;" data-toggle="dropdown">
										<i class="fa fa-share"></i> 其它 <i class="fa fa-angle-down"></i>
										</a>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:;">
												复制 </a>
											</li>
											<li>
												<a href="javascript:;">
												删除 </a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="javascript:;">
												打印 </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											概述 </a>
										</li>
										<li>
											<a href="#tab_meta" data-toggle="tab">
											详细参数 </a>
										</li>
										<li>
											<a href="#tab_images" data-toggle="tab">
											图片 </a>
										</li>
										<li>
											<a href="#tab_reviews" data-toggle="tab">
											产品列表 <span class="badge badge-success">
											3 </span>
											</a>
										</li>
									</ul>
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">名称: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[name]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">详细描述: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="product[description]"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">简要描述: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="product[short_description]"></textarea>
														<span class="help-block">
														此处填写显示在产品列表中的简要描述 </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">类别: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<div class="form-control height-auto">
															<div class="scroller" style="height:275px;" data-always-visible="1">
																<ul class="list-unstyled">
																	<li>
																		<label><input type="checkbox" name="product[categories][]" value="1">金制品</label>
																		<ul class="list-unstyled">
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">工业金</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">投资金</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">项链</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">戒指</label>
																			</li>
																		</ul>
																	</li>
																	<li>
																		<label><input type="checkbox" name="product[categories][]" value="1">银制品</label>
																		<ul class="list-unstyled">
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">工业银</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">银粉</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">投资银</label>
																			</li>
																		</ul>
																	</li>
																	<li>
																		<label><input type="checkbox" name="product[categories][]" value="1">其它</label>
																		<ul class="list-unstyled">
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">类别A</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">类别B</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">类别C</label>
																			</li>
																			<li>
																				<label><input type="checkbox" name="product[categories][]" value="1">类别D</label>
																			</li>
																		</ul>
																	</li>
																</ul>
															</div>
														</div>
														<span class="help-block">
														请选择一个或多个类别 </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">有效期: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
															<input type="text" class="form-control" name="product[available_from]">
															<span class="input-group-addon">
															to </span>
															<input type="text" class="form-control" name="product[available_to]">
														</div>
														<span class="help-block">
														商品有效销售期. </span>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">库存量: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[sku]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">基准价格: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[price]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">度量单位: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<select class="table-group-action-input form-control input-medium" name="product[unit]">
															<option value="">请选择...</option>
															<option value="0">件</option>
															<option value="1">个</option>
															<option value="2">只</option>
															<option value="3">克</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">重量: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[price]" placeholder="(单位：克)">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">状态: <span class="required">
													* </span>
													</label>
													<form class="form-horizontal margin-bottom-40" role="form">													
														<div class="form-group form-md-line-input">
															<div class="col-md-offset-0 col-md-4">
																<div class="md-checkbox-list">
																	<div class="md-checkbox">
																		<input type="checkbox" id="checkbox_publish" class="md-check">
																		<label for="checkbox_publish">
																		<span></span>
																		<span class="check"></span>
																		<span class="box"></span>
																		立即发布</label>
																	</div>
																</div>
															</div>
														</div>
													</form>
												</div>
												
											</div>
										</div>
										<div class="tab-pane" id="tab_meta">
											<form class="form-horizontal margin-bottom-40" role="form">												
												<div class="form-group form-md-line-input">
													<label for="saleDate" class="col-md-2 control-label">上市时间</label>
													<div class="col-md-4">
														<div class="input-icon">
															<input id="saleDate" type="text" class="form-control"  placeholder="上市时间">
															<div class="form-control-focus">
															</div>
															<i class="fa fa-calendar"></i>
														</div>
													</div>
												</div>
												<div class="form-group form-md-line-input">
													<label for="ProductID" class="col-md-2 control-label">货号</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" placeholder="货号">
															<div class="form-control-focus">
															</div>
														</div>
														<div class="help-block">
															请输入商品货号
														</div>
													</div>
												</div>
												<div class="form-group form-md-line-input">
													<label for="ServicesType" class="col-md-2 control-label">售后服务</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" value="专柜联保 店铺保修" placeholder="售后服务">
															<div class="form-control-focus">
															</div>
														</div>
														<div class="help-block">
															专柜联保 店铺保修
														</div>
													</div>
												</div>
												<div class="form-group form-md-line-input">
													<label for="Matera" class="col-md-2 control-label">镶嵌材质</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" value="未镶嵌素金" placeholder="镶嵌材质">
															<div class="form-control-focus">
															</div>
														</div>
													</div>
												</div>
												<div class="form-group form-md-line-input">
													<label for="Shape" class="col-md-2 control-label">图案/形状</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" placeholder="图案/形状">
															<div class="form-control-focus">
															</div>
														</div>
													</div>
												</div>
												<div class="form-group form-md-line-input">
													<label for="Quality" class="col-md-2 control-label">贵金属成色</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" placeholder="足金 千足金 足银 千足银">
															<div class="form-control-focus">
															</div>
														</div>
														<div class="help-block">
															足金
														</div>
													</div>
												</div>												
												<div class="form-group form-md-line-input form-md-floating-label">
													<label for="ProductStyles" class="col-md-2 control-label">款式</label>
													<div class="col-md-4">
														<select class="form-control" id="ProductStyles">
															<option value=""></option>
															<option value="0">吊坠</option>
															<option value="1">项链</option>
															<option value="2">戒指</option>
															<option value="3">项坠</option>
															<option value="4">耳环</option>
															<option value="5">手镯</option>
															<option value="6">耳坠</option>
															<option value="7">耳插</option>
															<option value="8">脚链</option>
															<option value="9">其它</option>
														</select>
													</div>
												</div>
												<div class="form-group form-md-line-input">
													<label for="Useway" class="col-md-2 control-label">用途</label>
													<div class="col-md-4">
														<div class="input-icon right">
															<input type="text" class="form-control" value="送礼" placeholder="用途">
															<div class="form-control-focus">
															</div>
														</div>
														<div class="help-block">
															送礼 自用
														</div>
													</div>
												</div>
												<div class="form-group form-md-line-input form-md-floating-label">
													<label class="col-md-2 control-label" for="form_control_1">适用对象</label>
													<div class="col-md-4">
														<select class="form-control" id="form_control_1">
															<option value=""></option>
															<option value="0">男</option>
															<option value="1">女</option>
															<option value="2">老人</option>
															<option value="3">小孩</option>
														</select>
													</div>
													
												</div>
												<div class="form-group form-md-line-input">
													<div class="col-md-offset-2 col-md-4">
														<div class="md-checkbox-list">
															<div class="md-checkbox">
																<input type="checkbox" id="checkbox_status" class="md-check">
																<label for="checkbox_status">
																<span></span>
																<span class="check"></span>
																<span class="box"></span>
																是否商场同款</label>
															</div>
														</div>
													</div>
												</div>												
											</form>											
										</div>
										<div class="tab-pane" id="tab_images">
											<div class="alert alert-success margin-bottom-10">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
												<i class="fa fa-warning fa-lg"></i> 需要完善图像类型与描述.
											</div>
											<div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">
												<a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn yellow">
												<i class="fa fa-plus"></i> 选择文件 </a>
												<a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn green">
												<i class="fa fa-share"></i> 上传文件 </a>
											</div>
											<div class="row">
												<div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12">
												</div>
											</div>
											<table class="table table-bordered table-hover">
											<thead>
											<tr role="row" class="heading">
												<th width="8%">
													 图像
												</th>
												<th width="25%">
													 标签
												</th>
												<th width="8%">
													 排序
												</th>
												<th width="10%">
													 正常图片
												</th>
												<th width="10%">
													 小图
												</th>
												<th width="10%">
													 缩略图
												</th>
												<th width="10%">
												</th>
											</tr>
											</thead>
											<tbody>
											<tr>
												<td>
													<a href="../../assets/admin/pages/media/works/img1.jpg" class="fancybox-button" data-rel="fancybox-button">
													<img class="img-responsive" src="../../assets/admin/pages/media/works/img1.jpg" alt="">
													</a>
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][1][label]" value="Thumbnail image">
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][1][sort_order]" value="1">
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][1][image_type]" value="1">
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][1][image_type]" value="2">
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][1][image_type]" value="3" checked>
													</label>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-sm">
													<i class="fa fa-times"></i> 移除 </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="../../assets/admin/pages/media/works/img2.jpg" class="fancybox-button" data-rel="fancybox-button">
													<img class="img-responsive" src="../../assets/admin/pages/media/works/img2.jpg" alt="">
													</a>
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][2][label]" value="Product image #1">
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][2][sort_order]" value="1">
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][2][image_type]" value="1">
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][2][image_type]" value="2" checked>
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][2][image_type]" value="3">
													</label>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-sm">
													<i class="fa fa-times"></i> 移除 </a>
												</td>
											</tr>
											<tr>
												<td>
													<a href="../../assets/admin/pages/media/works/img3.jpg" class="fancybox-button" data-rel="fancybox-button">
													<img class="img-responsive" src="../../assets/admin/pages/media/works/img3.jpg" alt="">
													</a>
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][3][label]" value="Product image #2">
												</td>
												<td>
													<input type="text" class="form-control" name="product[images][3][sort_order]" value="1">
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][3][image_type]" value="1" checked>
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][3][image_type]" value="2">
													</label>
												</td>
												<td>
													<label>
													<input type="radio" name="product[images][3][image_type]" value="3">
													</label>
												</td>
												<td>
													<a href="javascript:;" class="btn default btn-sm">
													<i class="fa fa-times"></i> 移除 </a>
												</td>
											</tr>
											</tbody>
											</table>
										</div>
										<div class="tab-pane" id="tab_reviews">
											<div class="table-container">
												<table class="table table-striped table-bordered table-hover" id="datatable_reviews">
												<thead>
												<tr role="row" class="heading">
													<th width="5%">
														 编号
													</th>
													<th width="10%">
														 审核日期
													</th>
													<th width="10%">
														 用户
													</th>
													<th width="20%">
														 描述
													</th>
													<th width="10%">
														 状态
													</th>
													<th width="10%">
														 操作
													</th>
												</tr>
												<tr role="row" class="filter">
													<td>
														<input type="text" class="form-control form-filter input-sm" name="product_review_no">
													</td>
													<td>
														<div class="input-group date date-picker margin-bottom-5" data-date-format="dd/mm/yyyy">
															<input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_from" placeholder="From">
															<span class="input-group-btn">
															<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
														<div class="input-group date date-picker" data-date-format="dd/mm/yyyy">
															<input type="text" class="form-control form-filter input-sm" readonly name="product_review_date_to" placeholder="To">
															<span class="input-group-btn">
															<button class="btn btn-sm default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
													</td>
													<td>
														<input type="text" class="form-control form-filter input-sm" name="product_review_customer">
													</td>
													<td>
														<input type="text" class="form-control form-filter input-sm" name="product_review_content">
													</td>
													<td>
														<select name="product_review_status" class="form-control form-filter input-sm">
															<option value="">Select...</option>
															<option value="pending">Pending</option>
															<option value="approved">Approved</option>
															<option value="rejected">Rejected</option>
														</select>
													</td>
													<td>
														<div class="margin-bottom-5">
															<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> 搜索</button>
														</div>
														<button class="btn btn-sm red filter-cancel"><i class="fa fa-times"></i> 重置</button>
													</td>
												</tr>
												</thead>
												<tbody>
												</tbody>
												</table>
											</div>
										</div>										
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->

